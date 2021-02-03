@extends('layouts.app')

@section('title', 'Courses')

@push("css")

@endpush

@section('content')
<section id="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h1>Courses</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="thanks-content">

<div class="container">

    <div class="row">
        <div class="col-sm-6 col-md-12 col-lg-12">
            @foreach($courses as $course)
                <div class="course-container mb-5">
                    <div class="media">
                        <div class="course-img">
                        <img src="{{ asset('public/uploads/images/' . $course->image) }}" class="img-fluid mr-3" alt="">
                        </div>
                        <div class="media-body">
                            <h2><a href="{{ route('courses.show', $course->id) }}">{{$course->title}}</a></h2>
                                 <p>{{$course->description}}</p>
                            <div>
                                <a href="{{ route('courses.show', $course->id) }}" class="btn btn-primary mt-3">Go to course <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
        <div class="course-pagination">
        {{$courses->links()}}
        </div>
        
        </div>
    </div>

</div>

</section>



@endsection

@push("js")

@endpush