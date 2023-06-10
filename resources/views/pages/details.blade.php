@extends('../layout')
@section('content')
<div class="container-1">
    <h1 class="title-head">{{$event->tensukien}}</h1>

    <img src="{{asset('images/bg.svg')}}" class="bg-image">

    <div class="frame-left">
        <img src="{{asset('images/frame-sk-left.svg')}}" style="width: 318px;">
    </div>

    <div class="frame-right">
        <img src="{{asset('images/frame-sk-right.svg')}}" style="width: 325px;">
    </div>

    <div class="frame-bg">
        <img src="{{asset('images/frame-bg.svg')}}" style="width: 1000px;">
    </div>
    <div class="container">
        <div class="flex-container">
            <div class="info">
                <img src="{{asset('public/uploads/sukien/' .$event->image)}}" alt="Ảnh" width="250px" height="200px" style="border-radius: 10px;">
                <p class="card-text"><i class="fas fa-calendar calendar-icon"></i> {{$event->ngaybatdau}} - {{$event->ngayketthuc}}</p>
                <p class="card-text"><span style="color: #6C7272; font-size: 14px;">{{$event->diadiem}}</span></p>
                <p class="card-text"><span style="font-size: 25px; font-weight: bold; color: orange;">{{$event->giave}} VNĐ</span></p>
            </div>
            <div class="description">
                <p>{!!$event->chitietsukien!!}</p>
            </div>
        </div>
    </div>
</div>
@endsection