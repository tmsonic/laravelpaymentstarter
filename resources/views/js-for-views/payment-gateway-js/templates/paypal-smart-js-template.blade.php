<script src="https://www.paypal.com/sdk/js?client-id=|paypal-client-id|&currency=|currency||paypal-disabled-options|"></script>

<script>
    var serverErrorPaypal = "server_error_occured_paypal";
    var basicFormPaypal;

    paypal.Buttons({
        createOrder: function(data, actions) {
            basicFormPaypal.append("courseId", "{{$course->id}}");
            return fetch("{{ url('payment/createOrderPayPal') }}", {
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
            }).then(function(orderData){
                if(orderData == serverErrorPaypal)
                {
                    showErrorAndScrollUp("Unknown error occured while creating the order");
                    resetFieldsAfterPayFail();
                    return -1;
                }
                if(!orderData[0]["result"]["id"])
                {
                    showErrorAndScrollUp("Something went wrong while creating the order");
                    resetFieldsAfterPayFail();
                    return -1;
                }
                return orderData[0]["result"]["id"];
            });
        },

        onCancel: function (data) {
            resetFieldsAfterPayFail();
        },

        onApprove: function(data, actions) {
            return fetch("{{ url('payment/captureOrderPayPal') }}" + "/" + data.orderID, {
                method: "POST",
                headers: {
                    "X-CSRF-Token": "{{ csrf_token() }}",
                },
            }).then(function(res) {
                if(!res.ok)
                {
                    return serverErrorPaypal;
                }
                else
                {
                    return res.json();
                }
            }).then(function(orderData) {
                if(orderData == serverErrorPaypal)
                {
                    showErrorAndScrollUp("The transaction could not be processed because of a server error");
                    resetFieldsAfterPayFail();
                    return;
                }
                // Three cases to handle:
                //   (1) Recoverable INSTRUMENT_DECLINED -> call actions.restart()
                //   (2) Other non-recoverable errors -> Show a failure message
                //   (3) Successful transaction -> Show confirmation or thank you

                // This example reads a v2/checkout/orders capture response, propagated from the server
                // You could use a different API or structure for your 'orderData'
                var errorDetail = Array.isArray(orderData.details) && orderData.details[0];

                if (errorDetail && errorDetail.issue === 'INSTRUMENT_DECLINED') {
                    return actions.restart(); // Recoverable state, per:
                    // https://developer.paypal.com/docs/checkout/integration-features/funding-failure/
                }

                if (errorDetail) {
                    showErrorAndScrollUp("The transaction could not be processed because of a non-recoverable error");
                    resetFieldsAfterPayFail();
                    return;
                }

                $("#processingModal").modal('show');
                document.querySelector('#course_paypal').value = "{{$course->id}}";
                document.querySelector('#transaction_paypal').value = orderData[0].result.purchase_units[0].payments.captures[0].id;
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
