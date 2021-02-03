<script src="https://www.paypal.com/sdk/js?client-id=|paypal-client-id|&currency=|currency||paypal-disabled-options|"></script>

<script>
    var serverErrorPaypal = "server_error_occured_paypal";
    var basicFormPaypal;

    paypal.Buttons({
        createOrder: function(data, actions)
        {
            var paypalAmount = basicFormPaypal.get("total");
            var adjustedAmount = adjustPaypalAmount(paypalAmount, chosenCurrency);
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        currency_code: chosenCurrency,
                        value: adjustedAmount
                    }
                }],
                application_context: {
                    shipping_preference: 'NO_SHIPPING'
                }
            });
        },

        onCancel: function (data) {
            resetFieldsAfterPayFail();
        },

        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                $("#processingModal").modal('show');
                document.querySelector('#course_paypal').value = "{{$course->id}}";
                document.querySelector('#transaction_paypal').value = details.purchase_units[0].payments.captures[0].id;
                appendPaymentData(basicFormPaypal, "_paypal");
                var paypalForm = document.querySelector("#payment-form-paypal-smart");
                paypalForm.submit();
            });
        },

        onClick: function(data, actions)
        {
            var termsAreChecked = checkTermsAcceptance();
            if(termsAreChecked == false)
            {
                return actions.reject();
            }
            changeFieldsAfterPayStart();
            basicFormPaypal = new FormData();
            appendBasicData(basicFormPaypal);
            return fetch("{{ url('checkout/validate') }}" + "/" + "{{$course->id}}" + "/" + "{{$course->slug}}", {
                method: "POST",
                body: basicFormPaypal
            }).then(function(res){
                if(!res.ok)
                {
                    return serverErrorPaypal;
                }
                else
                {
                    return res.json();
                }
            }).then(function(data){
                if(data == serverErrorPaypal)
                {
                    showErrorAndScrollUp("Unknown error occured during PayPal Smart payment");
                    return actions.reject();
                }
                else if(data.successful_validation)
                {
                    return actions.resolve();
                }
                else
                {
                    var beautifiedError = beautifyJson(JSON.stringify(data));
                    showErrorAndScrollUp(beautifiedError);
                    return actions.reject();
                }
            });
        }
    }).render('#tm-paypal-smart-placement');

    function adjustPaypalAmount(amountForPaypal, paypalCurrency)
    {
        if( (paypalCurrency == "HUF") || (paypalCurrency == "JPY") || (paypalCurrency == "TWD") )
        {
            return parseInt(amountForPaypal);
        }

        return amountForPaypal;
    }
</script>
