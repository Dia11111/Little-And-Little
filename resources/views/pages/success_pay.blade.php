@extends('../layout')
@section('content')
<div class="container-1">
    <h1 class="title-head">Thanh toán thành công</h1>

    <div class="alvin">
        <img src="{{asset('images/alvin-arnold-votay1-1@2x.png')}}" style="width: 318px;">
    </div>

    <img src="{{asset('images/bg.svg')}}" class="bg-image">

    <img src="{{asset('images/success-pay.svg')}}" alt="ảnh" class="success-pay" height="450px">


    <p id="ticketCount">Số lượng: {{$soluongve}} vé</p>
    <p id="pageCount">Trang <span id="currentPage">1</span>/<span id="totalPages">{{$totalPages}}</span></p>

    <div class="btn-group-1" role="group" aria-label="Basic example">
        <a target="_blank" href="{{ url('/in-don-ve/' .$payment->order_code) }}" type="button" class="btn btn-danger me-3">Tải về</a>
        <a type="button"  href="{{route('email_order')}}" class="btn btn-danger">Gửi Email</a>
    </div>

    <div class="container-2 mt-5">
        <div class="row mt-5">
            <div class="owl-carousel owl-theme">
                @for($i = 0; $i < $ticketCount; $i++)
                <div class="item">
                    <div class="card">
                        <div class="card-body">
                            <div class="content-wrapper" style="text-align: center;">
                                {{-- <img src="images/image-3@2x.png" class="card-img-top" alt="..." style="width: 50%; height: auto; display: block; margin: 0 auto;"> --}}
                                <p class="qrcode">{!! QrCode::size(100)->generate($qrcode_url) !!}</p>

                                <p style="text-align: center; font-weight: bold; font-size: 22px;">{{$orderCode}}</p>
                                <p style="text-align: center; color: rgb(241, 241, 71); font-size: 20px;">Vé cổng</p>
                                <p style="text-align: center;">---</p>
                                <p style="text-align: center; font-size: 14px;">Ngày sử dụng:{{$ngaysudung}}</p>
                                <p style="text-align: center; margin-top: 12px;"><i class="fa-solid fa-circle-check fa-2xl" style="color: rgb(61, 248, 61);"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>

</div>

@endsection