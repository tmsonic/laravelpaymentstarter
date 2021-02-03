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
                @if(session('successMsg'))
                    <div class="alert alert-success alert-dismissible fade show mt-1" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <strong>{{ session('successMsg') }}</strong>
                    </div>
                @endif
                <div class="card-header">
                    <h3 class="card-title">PayPal Settings</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <form action="{{route('admin.paypal.update')}}" method="POST" class="mt-2 mb-2">
                    @csrf
                    @method('PUT')

                        <div class="form-group row option-item">
                            <div class="col-6">
                                <p class="option-main-title">SELECT PayPal Smart ENVIRONMENT</p>
                                <p class="option-description">Select if you want to use the payment method in sandbox or production mode. For testing select "sandbox", for live sales select "production".</p>
                            </div>
                            <div class="col-6">
                                <select name="paypal_smart_environment" class="form-control" autocomplete="off">
                                    <option value="sandbox" {{ (old("paypal_smart_environment", $paypalSettings->paypal_smart_environment) == "sandbox" ? "selected":"")}}>Sandbox</option>
                                    <option value="production" {{ (old("paypal_smart_environment", $paypalSettings->paypal_smart_environment) == "production" ? "selected":"")}}>Production</option>
                                </select>
                                <p style="color:red;">{{ $errors->first('paypal_smart_environment') }}</p>
                            </div>
                        </div>
                        <hr>

                        <div class="form-group row option-item">
                            <div class="col-6">
                                <p class="option-main-title">PayPal SANDBOX CLIENT ID</p>
                                <p class="option-description">Your sandbox client ID.</p>
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="text" name="paypal_smart_sandbox_client" id="title-text-input" value="{{old('paypal_smart_sandbox_client', $paypalSettings->paypal_smart_sandbox_client)}}">
                                <p style="color:red;">{{ $errors->first('paypal_smart_sandbox_client') }}</p>
                            </div>
                        </div>
                        <hr>

                        <div class="form-group row option-item">
                            <div class="col-6">
                                <p class="option-main-title">PayPal PRODUCTION CLIENT ID</p>
                                <p class="option-description">Your production client ID.</p>
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="text" name="paypal_smart_production_client" id="title-text-input" value="{{old('paypal_smart_production_client', $paypalSettings->paypal_smart_production_client)}}">
                                <p style="color:red;">{{ $errors->first('paypal_smart_production_client') }}</p>
                            </div>
                        </div>
                        <hr>

                        <div class="form-group row option-item">
                            <div class="col-6">
                                <p class="option-main-title">PayPal SANDBOX Secret</p>
                                <p class="option-description">Your sandbox secret.</p>
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="text" name="paypal_smart_sandbox_secret" id="title-text-input" value="{{old('paypal_smart_sandbox_secret', $paypalSettings->paypal_smart_sandbox_secret)}}">
                                <p style="color:red;">{{ $errors->first('paypal_smart_sandbox_secret') }}</p>
                            </div>
                        </div>
                        <hr>

                        <div class="form-group row option-item">
                            <div class="col-6">
                                <p class="option-main-title">PayPal PRODUCTION Secret</p>
                                <p class="option-description">Your production secret.</p>
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="text" name="paypal_smart_production_secret" id="title-text-input" value="{{old('paypal_smart_production_secret', $paypalSettings->paypal_smart_production_secret)}}">
                                <p style="color:red;">{{ $errors->first('paypal_smart_production_secret') }}</p>
                            </div>
                        </div>
                        <hr>

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
