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
                    <h3 class="card-title">Stripe Settings</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                    <form action="{{route('admin.stripe.update')}}" method="POST" class="mt-2 mb-2">
                    @csrf
                    @method('PUT')

                        <div class="form-group row option-item">
                            <div class="col-6">
                                <p class="option-main-title">SELECT ENVIRONMENT</p>
                                <p class="option-description">Select if you want to use the payment method in test or live mode. For testing select "test", for live sales select "live".</p>
                            </div>
                            <div class="col-6">
                                <select name="stripe_environment" class="form-control" autocomplete="off">
                                    <option value="test" {{ (old("stripe_environment", $stripeSettings->stripe_environment) == "test" ? "selected":"")}}>test</option>
                                    <option value="live" {{ (old("stripe_environment", $stripeSettings->stripe_environment) == "live" ? "selected":"")}}>live</option>
                                </select>
                                <p style="color:red;">{{ $errors->first('stripe_environment') }}</p>
                            </div>
                        </div>
                        <hr>

                        <div class="form-group row option-item">
                            <div class="col-6">
                                <p class="option-main-title">Test Publishable Key</p>
                                <p class="option-description">Your test publishable key.</p>
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="text" name="stripe_test_publishable_key" id="title-text-input" value="{{old('stripe_test_publishable_key', $stripeSettings->stripe_test_publishable_key)}}">
                                <p style="color:red;">{{ $errors->first('stripe_test_publishable_key') }}</p>
                            </div>
                        </div>
                        <hr>

                        <div class="form-group row option-item">
                            <div class="col-6">
                                <p class="option-main-title">Test secret key</p>
                                <p class="option-description">Your test secret key.</p>
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="text" name="stripe_test_secret_key" id="title-text-input" value="{{old('stripe_test_secret_key', $stripeSettings->stripe_test_secret_key)}}">
                                <p style="color:red;">{{ $errors->first('stripe_test_secret_key') }}</p>
                            </div>
                        </div>
                        <hr>

                        <div class="form-group row option-item">
                            <div class="col-6">
                                <p class="option-main-title">Live Publishable Key</p>
                                <p class="option-description">Your live publishable key.</p>
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="text" name="stripe_live_publishable_key" id="title-text-input" value="{{old('stripe_live_publishable_key', $stripeSettings->stripe_live_publishable_key)}}">
                                <p style="color:red;">{{ $errors->first('stripe_live_publishable_key') }}</p>
                            </div>
                        </div>
                        <hr>

                        <div class="form-group row option-item">
                            <div class="col-6">
                                <p class="option-main-title">Live secret key</p>
                                <p class="option-description">Your live secret key.</p>
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="text" name="stripe_live_secret_key" id="title-text-input" value="{{old('stripe_live_secret_key', $stripeSettings->stripe_live_secret_key)}}">
                                <p style="color:red;">{{ $errors->first('stripe_live_secret_key') }}</p>
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
