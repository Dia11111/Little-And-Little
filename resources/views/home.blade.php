@extends('layouts.app')
@include('navbar.navbar')
@section('content')
@include('sidebar.dashboard')
{{-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> --}}
{{-- <div class="container">   
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Quản lý</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>     --}}

<main class="col bg-faded py-3 flex-grow-1">
  <div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Danh sách đơn vé</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên vé</th>
                            <th scope="col">Thông tin liên hệ</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Số lượng vé</th>
                            <th scope="col">Ngày sử dụng</th>
                            <th scope="col">Mã vé</th>
                            <th scope="col">Tổng tiền</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                        $i = 0;    
                        @endphp
                        @foreach($payment as $key => $cus)
                        @php
                        $i++;
                        @endphp
                        <tr>
                            <th scope="row">{{$i}}</th>
                            <td>{{$cus->customer->ticket->tenve}}</td>
                            <td>{{$cus->customer->hoten}}</td>
                            <td>{{$cus->customer->sodienthoai}}</td>
                            <td>{{$cus->customer->diachi}}</td>
                            <td>{{$cus->customer->soluongve}}</td>
                            <td>{{$cus->customer->ngaysudung}}</td>
                            <td>{{$cus->order_code}}</td>
                            <td>{{$cus->tongtien}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
	
       
</main>
@endsection