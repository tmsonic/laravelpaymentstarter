@extends('layouts.backend.admin-app')

@push('css')

@endpush

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card card-secondary" style="margin-top: 100px;">
                <div class="card-header">
                    <h3 class="card-title">Orders Management</h3>
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

                   <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th style="width: 10px">#</th>
                                <th>Transaction Id</th>
                                <th>Customer Id</th>
                                <th>Customer Name</th>
                                <th>Customer Email</th>
                                <th>Price</th>
                                <th>Purchased Course Id</th>
                                <th>Purchased Course Title</th>
                                <th>Date</th>
                                <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{$order->id}}</td>
                                        <td>{{$order->transaction_id}}</td>
                                        <td>{{$order->user_id}}</td>
                                        <td>{{$order->customer_name}}</td>
                                        <td>{{$order->user_email}}</td>
                                        <td>{{$currency}}{{App\Helpers\CurrencyHelper::getSetPriceFormat($order->price)}}</td>
                                        <td>{{$order->purchased_course_id}}</td>
                                        <td>{{$order->purchased_course_title}}</td>
                                        <td>{{Carbon\Carbon::parse($order->created_at)->format('Y.m.d')}}</td>
                                        <td><a href="#" onclick="document.getElementById('delete-{{$order->id}}').submit(); return false;">Delete</a>
                                            <form action="{{route('admin.orders.destroy', $order->id)}}" id="delete-{{$order->id}}" method="POST" style="display:none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                   </div>
                   {{ $orders->links() }}
                </div>

            </div>

        </div><!--/. container-fluid -->
    </section> <!-- /.content -->

  </div><!-- /.content-wrapper -->

@endsection

@push('js')

@endpush
