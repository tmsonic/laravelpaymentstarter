@extends('layouts.backend.admin-app')

@push('css')
<link rel="stylesheet" href="{{ asset('public/assets/backend/css/custom-admin.css') }}">
@endpush

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card card-secondary" style="margin-top: 100px;">
                <div class="card-header">
                    <h3 class="card-title">Payment Settings</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @if(session('successMsg'))
                        <div class="alert alert-success alert-dismissible fade show mt-1" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>{{ session('successMsg') }}</strong>
                        </div>
                    @endif

                    @if(session('failureMsg'))
                        <div class="alert alert-danger alert-dismissible fade show mt-1" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <strong>{{ session('failureMsg') }}</strong>
                        </div>
                    @endif

                    <form action="{{route('admin.settings.update')}}" method="POST" class="mt-2 mb-2">
                    @csrf
                    @method('PUT')

                        <div class="form-group row option-item">
                            <div class="col-6">
                                <p class="option-main-title">CURRENCY</p>
                                <p class="option-description">Select currency type that will be used for prices on the front-end.</p>

                            </div>
                            <div class="col-6">
                                <select class="form-control" name="currency" autocomplete="off">
                                @foreach($currencies as $currency)
                                    <option value="{{ $currency->name }}" {{ (old("currency", $settings->currency) == $currency->name ? "selected":"") }}>
                                        {{ __($currency->name) }}
                                    </option>
                                @endforeach
                                </select>
                                <p style="color:red;">{{ $errors->first('currency') }}</p>
                            </div>
                        </div>
                        <hr>

                        <div class="form-group row option-item">
                            <div class="col-6">
                                <p class="option-main-title">USE INTEGER PRICES</p>
                                <p class="option-description">Select "Yes" if you do not want to use decimals in the prices.</p>

                            </div>
                            <div class="col-6">
                                <select class="form-control" name="use_integer_prices" autocomplete="off">
                                    <option value="1" {{ (old("use_integer_prices", $settings->use_integer_prices) == "1" ? "selected":"") }}>
                                        Yes
                                    </option>
                                    <option value="0" {{ (old("use_integer_prices", $settings->use_integer_prices) == "0" ? "selected":"") }}>
                                        No
                                    </option>
                                </select>
                                <p style="color:red;">{{ $errors->first('use_integer_prices') }}</p>
                            </div>
                        </div>
                        <hr>

                        <div class="form-group row option-item">
                            <div class="col-6">
                                <p class="option-main-title">USE CURRENCY SYMBOL</p>
                                <p class="option-description">Select "Yes" if you want to use the symbol of the selected currency on the frontend. Only applicable for the following currencies: USD, EUR, GBP.</p>

                            </div>
                            <div class="col-6">
                                <select class="form-control" name="use_currency_symbol" autocomplete="off">
                                    <option value="1" {{ (old("use_currency_symbol", $settings->use_currency_symbol) == "1" ? "selected":"") }}>
                                        Yes
                                    </option>
                                    <option value="0" {{ (old("use_currency_symbol", $settings->use_currency_symbol) == "0" ? "selected":"") }}>
                                        No
                                    </option>
                                </select>
                                <p style="color:red;">{{ $errors->first('use_currency_symbol') }}</p>
                            </div>
                        </div>
                        <hr>

                        <div class="form-group row option-item">
                            <div class="col-6">
                                <p class="option-main-title">USE COMMA FOR SEPARATING DECIMALS</p>
                                <p class="option-description">Select "Yes" if you want to use the comma "," for separating decimals and the period "." as the thousand separator on the frontend.</p>

                            </div>
                            <div class="col-6">
                                <select class="form-control" name="comma_is_decimal_separator" autocomplete="off">
                                    <option value="1" {{ (old("comma_is_decimal_separator", $settings->comma_is_decimal_separator) == "1" ? "selected":"") }}>
                                        Yes
                                    </option>
                                    <option value="0" {{ (old("comma_is_decimal_separator", $settings->comma_is_decimal_separator) == "0" ? "selected":"") }}>
                                        No
                                    </option>
                                </select>
                                <p style="color:red;">{{ $errors->first('comma_is_decimal_separator') }}</p>
                            </div>
                        </div>



                        <div class="row" style="margin-top: 50px; margin-bottom: 20px; background: #dcdbdb;">
                            <div class="col-sm-12">
                                <h4 style="padding-bottom: 6px; padding-top: 12px; color: #030c16;">Payment Gateway Settings</h4>
                            </div>
                        </div>


                        <div class="form-group row option-item">
                            <div class="col-6">
                                <p class="option-main-title">ENABLE BRAINTREE</p>
                                <p class="option-description">Select "No" if you do not want to enable payment with Braintree.</p>

                            </div>
                            <div class="col-6">
                                <select class="form-control" name="enable_braintree" autocomplete="off">
                                    <option value="1" {{ (old("enable_braintree", $settings->enable_braintree) == "1" ? "selected":"") }}>
                                        Yes
                                    </option>
                                    <option value="0" {{ (old("enable_braintree", $settings->enable_braintree) == "0" ? "selected":"") }}>
                                        No
                                    </option>
                                </select>
                                <p style="color:red;">{{ $errors->first('enable_braintree') }}</p>
                            </div>
                        </div>

                        <div class="form-group row option-item mt-4">
                            <div class="col-6">
                                <p class="option-main-title">ENABLE PAYPAL WITHIN BRAINTREE</p>
                                <p class="option-description">Select "No" if you do not want to enable payment with PayPal within Braintree. If you enable this option, you cannot enable the PayPal Smart Buttons.</p>

                            </div>
                            <div class="col-6">
                                <select class="form-control" name="enable_paypal_in_bt" autocomplete="off">
                                    <option value="1" {{ (old("enable_paypal_in_bt", $settings->enable_paypal_in_bt) == "1" ? "selected":"") }}>
                                        Yes
                                    </option>
                                    <option value="0" {{ (old("enable_paypal_in_bt", $settings->enable_paypal_in_bt) == "0" ? "selected":"") }}>
                                        No
                                    </option>
                                </select>
                                <p style="color:red;">{{ $errors->first('enable_paypal_in_bt') }}</p>
                            </div>
                        </div>

                        <hr>

                        <div class="form-group row option-item">
                            <div class="col-6">
                                <p class="option-main-title">ENABLE STRIPE</p>
                                <p class="option-description">Select "No" if you do not want to enable payment with Stripe.</p>

                            </div>
                            <div class="col-6">
                                <select class="form-control" name="enable_stripe" autocomplete="off">
                                    <option value="1" {{ (old("enable_stripe", $settings->enable_stripe) == "1" ? "selected":"") }}>
                                        Yes
                                    </option>
                                    <option value="0" {{ (old("enable_stripe", $settings->enable_stripe) == "0" ? "selected":"") }}>
                                        No
                                    </option>
                                </select>
                                <p style="color:red;">{{ $errors->first('enable_stripe') }}</p>
                            </div>
                        </div>

                        <hr>

                        <div class="form-group row option-item">
                            <div class="col-6">
                                <p class="option-main-title">ENABLE PAYPAL SMART BUTTONS</p>
                                <p class="option-description">Select "No" if you do not want to enable PayPal Smart Buttons. If you enable Braintree and PayPal within it, you cannot enable the PayPal Smart Buttons.</p>

                            </div>
                            <div class="col-6">
                                <select class="form-control" name="enable_paypal_smart" autocomplete="off">
                                    <option value="1" {{ (old("enable_paypal_smart", $settings->enable_paypal_smart) == "1" ? "selected":"") }}>
                                        Yes
                                    </option>
                                    <option value="0" {{ (old("enable_paypal_smart", $settings->enable_paypal_smart) == "0" ? "selected":"") }}>
                                        No
                                    </option>
                                </select>
                                <p style="color:red;">{{ $errors->first('enable_paypal_smart') }}</p>
                            </div>
                        </div>

                        <div class="form-group row option-item mt-4">
                            <div class="col-6">
                                <p class="option-main-title">ENABLE PAYING WITH CARD SMART BUTTON</p>
                                <p class="option-description">Select "No" if you do not want to enable paying with card smart button.</p>

                            </div>
                            <div class="col-6">
                                <select class="form-control" name="enable_pp_smart_card" autocomplete="off">
                                    <option value="1" {{ (old("enable_pp_smart_card", $settings->enable_pp_smart_card) == "1" ? "selected":"") }}>
                                        Yes
                                    </option>
                                    <option value="0" {{ (old("enable_pp_smart_card", $settings->enable_pp_smart_card) == "0" ? "selected":"") }}>
                                        No
                                    </option>
                                </select>
                                <p style="color:red;">{{ $errors->first('enable_pp_smart_card') }}</p>
                            </div>
                        </div>

                        <div class="form-group row option-item mt-4">
                            <div class="col-6">
                                <p class="option-main-title">ENABLE PAYING WITH CREDIT SMART BUTTON</p>
                                <p class="option-description">Select "No" if you do not want to enable paying with credit smart button.</p>

                            </div>
                            <div class="col-6">
                                <select class="form-control" name="enable_pp_smart_credit" autocomplete="off">
                                    <option value="1" {{ (old("enable_pp_smart_credit", $settings->enable_pp_smart_credit) == "1" ? "selected":"") }}>
                                        Yes
                                    </option>
                                    <option value="0" {{ (old("enable_pp_smart_credit", $settings->enable_pp_smart_credit) == "0" ? "selected":"") }}>
                                        No
                                    </option>
                                </select>
                                <p style="color:red;">{{ $errors->first('enable_pp_smart_credit') }}</p>
                            </div>
                        </div>

                        <div class="form-group row option-item mt-4">
                            <div class="col-6">
                                <p class="option-main-title">ENABLE PAYING WITH BANCONTACT SMART BUTTON</p>
                                <p class="option-description">Select "No" if you do not want to enable paying with Bancontact smart button.</p>

                            </div>
                            <div class="col-6">
                                <select class="form-control" name="enable_pp_smart_bancontact" autocomplete="off">
                                    <option value="1" {{ (old("enable_pp_smart_bancontact", $settings->enable_pp_smart_bancontact) == "1" ? "selected":"") }}>
                                        Yes
                                    </option>
                                    <option value="0" {{ (old("enable_pp_smart_bancontact", $settings->enable_pp_smart_bancontact) == "0" ? "selected":"") }}>
                                        No
                                    </option>
                                </select>
                                <p style="color:red;">{{ $errors->first('enable_pp_smart_bancontact') }}</p>
                            </div>
                        </div>

                        <div class="form-group row option-item mt-4">
                            <div class="col-6">
                                <p class="option-main-title">ENABLE PAYING WITH BLIK SMART BUTTON</p>
                                <p class="option-description">Select "No" if you do not want to enable paying with Blik smart button.</p>

                            </div>
                            <div class="col-6">
                                <select class="form-control" name="enable_pp_smart_blik" autocomplete="off">
                                    <option value="1" {{ (old("enable_pp_smart_blik", $settings->enable_pp_smart_blik) == "1" ? "selected":"") }}>
                                        Yes
                                    </option>
                                    <option value="0" {{ (old("enable_pp_smart_blik", $settings->enable_pp_smart_blik) == "0" ? "selected":"") }}>
                                        No
                                    </option>
                                </select>
                                <p style="color:red;">{{ $errors->first('enable_pp_smart_blik') }}</p>
                            </div>
                        </div>

                        <div class="form-group row option-item mt-4">
                            <div class="col-6">
                                <p class="option-main-title">ENABLE PAYING WITH EPS SMART BUTTON</p>
                                <p class="option-description">Select "No" if you do not want to enable paying with EPS smart button.</p>

                            </div>
                            <div class="col-6">
                                <select class="form-control" name="enable_pp_smart_eps" autocomplete="off">
                                    <option value="1" {{ (old("enable_pp_smart_eps", $settings->enable_pp_smart_eps) == "1" ? "selected":"") }}>
                                        Yes
                                    </option>
                                    <option value="0" {{ (old("enable_pp_smart_eps", $settings->enable_pp_smart_eps) == "0" ? "selected":"") }}>
                                        No
                                    </option>
                                </select>
                                <p style="color:red;">{{ $errors->first('enable_pp_smart_eps') }}</p>
                            </div>
                        </div>

                        <div class="form-group row option-item mt-4">
                            <div class="col-6">
                                <p class="option-main-title">ENABLE PAYING WITH GIROPAY SMART BUTTON</p>
                                <p class="option-description">Select "No" if you do not want to enable paying with Giropay smart button.</p>

                            </div>
                            <div class="col-6">
                                <select class="form-control" name="enable_pp_smart_giropay" autocomplete="off">
                                    <option value="1" {{ (old("enable_pp_smart_giropay", $settings->enable_pp_smart_giropay) == "1" ? "selected":"") }}>
                                        Yes
                                    </option>
                                    <option value="0" {{ (old("enable_pp_smart_giropay", $settings->enable_pp_smart_giropay) == "0" ? "selected":"") }}>
                                        No
                                    </option>
                                </select>
                                <p style="color:red;">{{ $errors->first('enable_pp_smart_giropay') }}</p>
                            </div>
                        </div>

                        <div class="form-group row option-item mt-4">
                            <div class="col-6">
                                <p class="option-main-title">ENABLE PAYING WITH IDEAL SMART BUTTON</p>
                                <p class="option-description">Select "No" if you do not want to enable paying with iDeal smart button.</p>

                            </div>
                            <div class="col-6">
                                <select class="form-control" name="enable_pp_smart_ideal" autocomplete="off">
                                    <option value="1" {{ (old("enable_pp_smart_ideal", $settings->enable_pp_smart_ideal) == "1" ? "selected":"") }}>
                                        Yes
                                    </option>
                                    <option value="0" {{ (old("enable_pp_smart_ideal", $settings->enable_pp_smart_ideal) == "0" ? "selected":"") }}>
                                        No
                                    </option>
                                </select>
                                <p style="color:red;">{{ $errors->first('enable_pp_smart_ideal') }}</p>
                            </div>
                        </div>

                        <div class="form-group row option-item mt-4">
                            <div class="col-6">
                                <p class="option-main-title">ENABLE PAYING WITH MERCADOPAGO SMART BUTTON</p>
                                <p class="option-description">Select "No" if you do not want to enable paying with Mercadopago smart button.</p>

                            </div>
                            <div class="col-6">
                                <select class="form-control" name="enable_pp_smart_mercadopago" autocomplete="off">
                                    <option value="1" {{ (old("enable_pp_smart_mercadopago", $settings->enable_pp_smart_mercadopago) == "1" ? "selected":"") }}>
                                        Yes
                                    </option>
                                    <option value="0" {{ (old("enable_pp_smart_mercadopago", $settings->enable_pp_smart_mercadopago) == "0" ? "selected":"") }}>
                                        No
                                    </option>
                                </select>
                                <p style="color:red;">{{ $errors->first('enable_pp_smart_mercadopago') }}</p>
                            </div>
                        </div>

                        <div class="form-group row option-item mt-4">
                            <div class="col-6">
                                <p class="option-main-title">ENABLE PAYING WITH MYBANK SMART BUTTON</p>
                                <p class="option-description">Select "No" if you do not want to enable paying with MyBank smart button.</p>

                            </div>
                            <div class="col-6">
                                <select class="form-control" name="enable_pp_smart_mybank" autocomplete="off">
                                    <option value="1" {{ (old("enable_pp_smart_mybank", $settings->enable_pp_smart_mybank) == "1" ? "selected":"") }}>
                                        Yes
                                    </option>
                                    <option value="0" {{ (old("enable_pp_smart_mybank", $settings->enable_pp_smart_mybank) == "0" ? "selected":"") }}>
                                        No
                                    </option>
                                </select>
                                <p style="color:red;">{{ $errors->first('enable_pp_smart_mybank') }}</p>
                            </div>
                        </div>

                        <div class="form-group row option-item mt-4">
                            <div class="col-6">
                                <p class="option-main-title">ENABLE PAYING WITH P24 SMART BUTTON</p>
                                <p class="option-description">Select "No" if you do not want to enable paying with P24 smart button.</p>

                            </div>
                            <div class="col-6">
                                <select class="form-control" name="enable_pp_smart_p24" autocomplete="off">
                                    <option value="1" {{ (old("enable_pp_smart_p24", $settings->enable_pp_smart_p24) == "1" ? "selected":"") }}>
                                        Yes
                                    </option>
                                    <option value="0" {{ (old("enable_pp_smart_p24", $settings->enable_pp_smart_p24) == "0" ? "selected":"") }}>
                                        No
                                    </option>
                                </select>
                                <p style="color:red;">{{ $errors->first('enable_pp_smart_p24') }}</p>
                            </div>
                        </div>

                        <div class="form-group row option-item mt-4">
                            <div class="col-6">
                                <p class="option-main-title">ENABLE PAYING WITH SEPA SMART BUTTON</p>
                                <p class="option-description">Select "No" if you do not want to enable paying with Sepa smart button.</p>

                            </div>
                            <div class="col-6">
                                <select class="form-control" name="enable_pp_smart_sepa" autocomplete="off">
                                    <option value="1" {{ (old("enable_pp_smart_sepa", $settings->enable_pp_smart_sepa) == "1" ? "selected":"") }}>
                                        Yes
                                    </option>
                                    <option value="0" {{ (old("enable_pp_smart_sepa", $settings->enable_pp_smart_sepa) == "0" ? "selected":"") }}>
                                        No
                                    </option>
                                </select>
                                <p style="color:red;">{{ $errors->first('enable_pp_smart_sepa') }}</p>
                            </div>
                        </div>

                        <div class="form-group row option-item mt-4">
                            <div class="col-6">
                                <p class="option-main-title">ENABLE PAYING WITH SOFORT SMART BUTTON</p>
                                <p class="option-description">Select "No" if you do not want to enable paying with Sofort smart button.</p>

                            </div>
                            <div class="col-6">
                                <select class="form-control" name="enable_pp_smart_sofort" autocomplete="off">
                                    <option value="1" {{ (old("enable_pp_smart_sofort", $settings->enable_pp_smart_sofort) == "1" ? "selected":"") }}>
                                        Yes
                                    </option>
                                    <option value="0" {{ (old("enable_pp_smart_sofort", $settings->enable_pp_smart_sofort) == "0" ? "selected":"") }}>
                                        No
                                    </option>
                                </select>
                                <p style="color:red;">{{ $errors->first('enable_pp_smart_sofort') }}</p>
                            </div>
                        </div>

                        <div class="form-group row option-item mt-4">
                            <div class="col-6">
                                <p class="option-main-title">ENABLE PAYING WITH VENMO SMART BUTTON</p>
                                <p class="option-description">Select "No" if you do not want to enable paying with Venmo smart button.</p>

                            </div>
                            <div class="col-6">
                                <select class="form-control" name="enable_pp_smart_venmo" autocomplete="off">
                                    <option value="1" {{ (old("enable_pp_smart_venmo", $settings->enable_pp_smart_venmo) == "1" ? "selected":"") }}>
                                        Yes
                                    </option>
                                    <option value="0" {{ (old("enable_pp_smart_venmo", $settings->enable_pp_smart_venmo) == "0" ? "selected":"") }}>
                                        No
                                    </option>
                                </select>
                                <p style="color:red;">{{ $errors->first('enable_pp_smart_venmo') }}</p>
                            </div>
                        </div>


                        <div class="form-group row mb-0 mt-4">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary mt-5">Save</button>
                            </div>
                        </div>

                    </form>

                </div>

            </div>

        </div><!--/. container-fluid -->
    </section> <!-- /.content -->

  </div><!-- /.content-wrapper -->

@endsection


@push('js')

@endpush
