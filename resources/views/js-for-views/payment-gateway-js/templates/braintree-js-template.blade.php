<script src="https://js.braintreegateway.com/web/dropin/1.25.0/js/dropin.min.js"></script>

<script>
    var basicFormBt;
    var formBrainTree = document.querySelector('#payment-form-bt');
    var client_token = "{{ $btToken }}";
    var btInstance = {};
    braintree.dropin.create({
        authorization: client_token,
        selector: '#bt-dropin',
        dataCollector: {},
        threeDSecure: true,
        |paypal-placeholder|
        }, function (createErr, instance) {
            if (createErr) {
            console.log('Create Error', createErr);
            return;
        }
        formBrainTree.addEventListener('submit', function (event) {
            event.preventDefault();
            var termsAreChecked = checkTermsAcceptance();
            if(termsAreChecked == false)
            {
                return;
            }
            changeFieldsAfterPayStart();
            basicFormBt = new FormData();
            appendBasicData(basicFormBt);
            btInstance = instance;
            validateData();
        });
    });
    function validateData()
    {
        $.ajax({
            url: "{{ url('checkout/validate') }}" + "/" + "{{$course->id}}" + "/" + "{{$course->slug}}",
            method: "POST",
            data: basicFormBt,
            processData: false,
            contentType: false,
            success: function(result) {
                if( result.hasOwnProperty("successful_validation") )
                {
                    completeBraintreePayment();
                }
                else
                {
                    var fieldErrors = JSON.stringify(result, null, 1);
                    fieldErrors = beautifyJson(fieldErrors);
                    showErrorAndScrollUp(fieldErrors);
                    return;
                }
            },
            error: function(result) {
                showErrorAndScrollUp("Unknown error during validation.");
                return;
            }
        });
    }
    function completeBraintreePayment()
    {
        var threeDSecureParameters = {
            amount: basicFormBt.get("total"),
            email: $("#email_address").val(),
            billingAddress: {
                givenName: basicFormBt.get("first_name"),
                surname: basicFormBt.get("last_name"),
                phoneNumber: basicFormBt.get("phone"),
                streetAddress: basicFormBt.get("street"),
                extendedAddress: basicFormBt.get("apartment"),
                locality: basicFormBt.get("city"),
                region: basicFormBt.get("state"),
                postalCode: basicFormBt.get("zip"),
                countryCodeAlpha2: basicFormBt.get("country")
            }
        }
        btInstance.requestPaymentMethod({
            threeDSecure: threeDSecureParameters
        }, function (err, payload) {
            if (err)
            {
                showErrorAndScrollUp("Invalid payment method");
                return;
            }
            document.querySelector('#nonce_bt').value = payload.nonce;
            document.querySelector('#course_bt').value = "{{$course->id}}";
            appendPaymentData(basicFormBt, "_bt");
            $("#processingModal").modal('show');
            formBrainTree.submit();
        });
    }
</script>
