@extends('../layout')
@section('content')
<div class="container-1">
    <h1 class="title-head">Sự kiện nổi bật</h1>

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
    <div id="event-1" class="d-flex justify-content-center align-items-center">
        <div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($event as $key => $value)
                <div class="carousel-item ">
                    <div class="card">
                        <div class="img-wrapper">
                            <img id="img-1" src="{{asset('public/uploads/sukien/' .$value->image)}}" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><span style="font-weight: bold; color: black;">{{$value->tensukien}}</span></h5>
                            <p class="card-text"><span style="color: #6C7272; font-size: 14px;">{{$value->diadiem}}</span></p>
                            <p class="card-text"><i class="fas fa-calendar calendar-icon"></i> {{$value->ngaybatdau}} - {{$value->ngayketthuc}}</p>
                            <p class="card-text"><span style="font-size: 25px; font-weight: bold; color: orange;">{{$value->giave}} VNĐ</span></p>
                            <a href="{{url('xem-su-kien/' .$value->slug_sukien)}}" class="btn btn-danger">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>   
@endsection
