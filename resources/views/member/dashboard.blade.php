@extends('layouts.app')

@section('title', 'Member Dashboard')

@push("css")

@endpush

@section('content')
<section id="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h1>Welcome <em>{{ $authUser->email }}</em></h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="member-dash">

<div class="container">

    <div class="row mt-5 mb-5">
        <div class="col-lg-12">
            <div class="section-title">
                <h2>Your courses</h2>
                <hr>
            </div>
            <div class="table-responsive">

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Course title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Purchase date</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$order->purchased_course_title}}</td>
                                <td>{{$currency}}{{App\Helpers\CurrencyHelper::getSetPriceFormat($order->price)}}</td>
                                <td>{{Carbon\Carbon::parse($order->created_at)->format('Y.m.d')}}</td>
                                <td><a href="{{route('courses.show', $order->purchased_course_id)}}" class="btn btn-info btn-sm">Go to course</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{$orders->links()}}
        </div>
    </div>

</div>

</section>



@endsection

@push("js")

@endpush
