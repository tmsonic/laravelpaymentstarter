<script>
    var chosenCurrency = @json($currencyTextRaw);

    $( document ).ready(function() {
        var userState = "{{ old('state') }}";
        loadStates(userState);

        var emailAddress = @json($email);
        setEmailInputField(emailAddress);
    });

    $("#country").change(function() {
        loadStates("");
    });

    $("#terms_checkbox").change(function() {
        if(this.checked)
        {
            $("#terms_privacy_div").css('border', 'solid 1px green');
        }
        else
        {
            $("#terms_privacy_div").css('border', 'solid 1px red');
        }
    });

    function setEmailInputField(userEmail)
    {
        $("#email_address").val(userEmail);
        $("#email_address").prop("readonly", true);
    }

    function checkRadioBtn(parentButton)
    {
        var childRadioButton = $(parentButton).find(".form-check-input");
        $($(childRadioButton)[0]).prop("checked", true);
    }

    function fillInDummyInfo()
    {
        $("#first_name").val("John");
        $("#last_name").val("Ruth");
        $("#phone").val("987654321");
        $("#country").val("US").change();
        loadStates("WY");
        $("#street").val("Haberdashery 1");
        $("#apartment").val("A");
        $("#city").val("Red Rock");
        $("#zip").val("12345");
    }

    function checkTermsAcceptance()
    {
        if( $("#terms_checkbox").prop("checked") == false )
        {
            showErrorAndScrollUp("The terms and conditions and the privacy policy must be accepted before payment.");
            return false;
        }

        return true;
    }

    function showErrorAndScrollUp(errorText)
    {
        $("#paymentErrorAlert").hide();
        $("#validationErrorText").html(errorText);
        $("#validationErrorAlert").show();
        resetFieldsAfterPayFail();
        window.scrollTo(0, 0);
    }

    function appendBasicData(emptyForm)
    {
        emptyForm.append("_token", "{{ csrf_token() }}");
        emptyForm.append("total", $('#total').attr("data-total"));
        emptyForm.append("first_name", $('#first_name').val());
        emptyForm.append("last_name", $('#last_name').val());
        emptyForm.append("phone", $('#phone').val());
        emptyForm.append("street", $('#street').val());
        emptyForm.append("apartment", $('#apartment').val());
        emptyForm.append("city", $('#city').val());
        emptyForm.append("country", $('#country').val());
        emptyForm.append("state", $('#state').val());
        emptyForm.append("zip", $('#zip').val());
        emptyForm.append("currency", "{{$currencyTextRaw}}");
    }

    function appendPaymentData(completeFormData, gatewayKey)
    {
        var inputNames = ["first_name", "last_name", "phone", "street", "apartment",
                          "city", "country", "state", "zip", "total"];

        inputNames.forEach(function(item) {
            $("#" + item + gatewayKey).val(completeFormData.get(item));
        });
    }

    function changeFieldsAfterPayStart()
    {
        $("#validationErrorAlert").hide();
        $("#validationErrorText").html("");
        $("#paymentErrorAlert").hide();
        $("#payStartSpinner").show();

        $("#total").prop("disabled", true);

        $("#first_name").prop("disabled", true);
        $("#last_name").prop("disabled", true);
        $("#email_address").prop("disabled", true);
        $("#phone").prop("disabled", true);
        $("#street").prop("disabled", true);
        $("#apartment").prop("disabled", true);
        $("#city").prop("disabled", true);
        $("#country").prop("disabled", true);
        $("#state").prop("disabled", true);
        $("#zip").prop("disabled", true);

        $("#terms_checkbox").prop("disabled", true);

        if( $("#btPayStartBtn").length )
        {
            $("#btPayStartBtn").prop("disabled", true);
        }

        if( $("#payStartBtnStripe").length )
        {
            $("#payStartBtnStripe").prop("disabled", true);
        }
    }

    function resetFieldsAfterPayFail()
    {
        $("#payStartSpinner").hide();

        $("#total").prop("disabled", false);

        $("#first_name").prop("disabled", false);
        $("#last_name").prop("disabled", false);
        $("#email_address").prop("disabled", false);
        $("#phone").prop("disabled", false);
        $("#street").prop("disabled", false);
        $("#apartment").prop("disabled", false);
        $("#city").prop("disabled", false);
        $("#country").prop("disabled", false);
        $("#state").prop("disabled", false);
        $("#zip").prop("disabled", false);

        $("#terms_checkbox").prop("disabled", false);

        if( $("#btPayStartBtn").length )
        {
            $("#btPayStartBtn").prop("disabled", false);
        }

        if( $("#payStartBtnStripe").length )
        {
            $("#payStartBtnStripe").prop("disabled", false);
        }
    }

    function beautifyJson(passedStr)
    {
        passedStr = passedStr.replace(/{/g, "");
        passedStr = passedStr.replace(/}/g, "");
        passedStr = passedStr.replace(/\[/g, "");
        passedStr = passedStr.replace(/]/g, "");
        passedStr = passedStr.replace(/,/g, "");
        passedStr = passedStr.replace(/"/g, "");
        passedStr = passedStr.replace(/:/g, ": ");
        passedStr = passedStr.replace(/\./g, ".</br>");

        return passedStr;
    }

    function loadStates(currentState)
    {
        var stateSelect = $('#state');
        stateSelect.empty();

        var countryVal = $('#country').val();
        var allCountries = @json($countries);
        var i = 0;
        var allCountriesLength = allCountries.length;
        var countryIndex = 0;
        for(i = 0; i < allCountriesLength; i++)
        {
            if(allCountries[i].code == countryVal)
            {
                countryIndex = i;
                break;
            }
        }

        var statesLength = allCountries[countryIndex].states_in_order.length;
        for(i = 0; i < statesLength; i++)
        {
            if(allCountries[countryIndex].states_in_order[i].state_code == currentState)
            {
                stateSelect.append('<option value="' + allCountries[countryIndex].states_in_order[i].state_code + '" selected>' + allCountries[countryIndex].states_in_order[i].state_name + '</option>');
            }
            else
            {
                stateSelect.append('<option value="' + allCountries[countryIndex].states_in_order[i].state_code + '">' + allCountries[countryIndex].states_in_order[i].state_name + '</option>');
            }
        }
    }
</script>
