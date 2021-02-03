@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="home-content">
                <h1>Welcome</h1>
                <p>This is a starter project for our payment integration course on Udemy. During the course you can learn how to integrate Stripe, Braintree and PayPal Smart buttons into your Laravel application. This is an in-depth course explaining every aspect of the integration process. It is not based on any existing integration, you'll learn how to do it from scratch.</p>
                <p>You can clone this repo and run the following commands to set it up.</p>
                <p><strong>Migrate database tables:</strong></p>
                <p><pre>php artisan migrate</pre></p>
                <p><strong>Seed database with dummy data:</strong></p>
                <p><pre>php artisan db:seed</pre></p>
                <p><strong>Admin login details:</strong></p>
                <p>URL: http://localhost/laravelpaymentstarter/login</p>
                <p>User: admin@gmail.com</p>
                <p>Password: 12341234</p>
            </div>
        </div>
    </div>
</div>
@endsection
