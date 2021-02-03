@extends('layouts.app')

@section('title', 'Course')

@push("css")

@endpush

@section('content')
<section id="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h1>{{$course->title}}</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="thanks-content">

<div class="container">

    <div class="row mb-5">
        <div class="col-lg-6">
            <div class="course-img">
                <img src="{{ asset('public/uploads/images/' . $course->image) }}" class="img-fluid mr-3" alt="">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="single-course-content">
                <div class="course-desc">
                    <p>{{$course->description}}</p>
                </div>
                @if(!$userBoughtCourse)
                    <div class="course-price">
                        <p>{{$currency}}{{App\Helpers\CurrencyHelper::getSetPriceFormat($course->price)}}</p>
                    </div>
                    <div class="course-buy-btn">
                        <a href="{{route('checkout', $course->slug)}}" class="btn btn-warning" onclick="showLoadSpinner();"><span class="spinner-border spinner-border-sm" id="spinnerOnBtn" role="status" aria-hidden="true" style="display:none;"></span> Buy Now <i class="fas fa-cart-plus"></i></a>
                    </div>
                @else
                    <div>
                        <p style="color:green;font-size:20px;"><strong>You have access to this course!</strong></p>
                    </div>
                @endif
            </div>
        </div>
    </div>

</div>

</section>

@endsection

@push("js")
    @include('js-for-views.show-spinner-js')
@endpush
