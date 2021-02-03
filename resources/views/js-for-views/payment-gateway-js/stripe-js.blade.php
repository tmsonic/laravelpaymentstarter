<script src="https://js.stripe.com/v3/"></script>

<script>
    var stripePubKey = @json($stripePubKey);
    var stripe = Stripe(stripePubKey);
    var elements = stripe.elements();
    var stripeForm = document.querySelector("#payment-form-stripe");
    var paymentIntentId = "0";
    var serverErrorStripe = "server_error_occured_stripe";
    var basicFormStripe;
    var style = {
        base: {
        color: "#32325d",
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: "antialiased",
        fontSize: "16px",
        "::placeholder": {
            color: "#aab7c4"
        }
        },
        invalid: {
        color: "#fa755a",
        iconColor: "#fa755a"
        }
    };

    var card = elements.create("card", { hidePostalCode: true, style: style });
    card.mount("#stripe-card-element");

    stripeForm.addEventListener("submit", function(event) {
        event.preventDefault();

        var termsAreChecked = checkTermsAcceptance();
        if(termsAreChecked == false)
        {
            return;
        }
        changeFieldsAfterPayStart();
        basicFormStripe = new FormData();
        appendBasicData(basicFormStripe);
        validateDataStripe();
    });

    function validateDataStripe()
    {
        $.ajax({
            url: "{{ url('checkout/validate') }}" + "/" + "{{$course->id}}" + "/" + "{{$course->slug}}",
            method: "POST",
            data: basicFormStripe,
            processData: false,
            contentType: false,
            success: function(result) {
                if( result.hasOwnProperty("successful_validation") )
                {
                    completeStripePayment();
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

    function completeStripePayment()
    {
        fetch("{{ url('payment/stripe') }}" + "/" + paymentIntentId, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-Token": "{{ csrf_token() }}",
            },
            body: JSON.stringify({
                amount: basicFormStripe.get("total"),
                currency: chosenCurrency,
            }),
        }).then(function(res) {
            if(!res.ok)
            {
                return serverErrorStripe;
            }
            else
            {
                return res.json();
            }
        }).then(function(data){
            if(data == serverErrorStripe)
            {
                showErrorAndScrollUp("Unknown error occured during Stripe payment");
                return;
            }
            paymentIntentId = data.id;
            stripe.confirmCardPayment(data.client_secret, {
                payment_method: {
                    card: card,
                    billing_details: {
                        name: basicFormStripe.get("first_name") + " " + basicFormStripe.get("last_name"),
                        email: $("#email_address").val(),
                        address: {
                            country: basicFormStripe.get("country"),
                            state: basicFormStripe.get("state"),
                            city: basicFormStripe.get("city"),
                            line1: basicFormStripe.get("street"),
                            line2: basicFormStripe.get("apartment"),
                            postal_code: basicFormStripe.get("zip")
                        },
                    },
                },
            }).then(function(data){
                if(data.error)
                {
                    showErrorAndScrollUp(data.error.message);
                    return;
                }
                else if(data.paymentIntent)
                {
                    document.querySelector('#course_stripe').value = "{{$course->id}}";
                    document.querySelector('#transaction_stripe').value = data.paymentIntent.id;
                    appendPaymentData(basicFormStripe, "_stripe");
                    $("#processingModal").modal('show');
                    stripeForm.submit();
                }
            });
        });
    }
</script>
