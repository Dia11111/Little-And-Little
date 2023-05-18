@extends('../layout')
@section('content')
<div class="container-1">
    <h1 class="title-head">Thanh toán thành công</h1>

    <div class="alvin">
        <img src="{{asset('images/alvin-arnold-votay1-1@2x.png')}}" style="width: 318px;">
    </div>

    <img src="{{asset('images/bg.svg')}}" class="bg-image">

    <img src="{{asset('images/success-pay.svg')}}" alt="ảnh" class="success-pay" height="450px">


    <p id="ticketCount">Số lượng: 0 vé</p>
    <p id="pageCount">Trang 1/3</p>

    <div class="btn-group-1" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-danger me-3">Tải về</button>
        <button type="button" class="btn btn-danger">Gửi Email</button>
    </div>

    <div class="container-2 mt-5">
        <div class="row mt-5">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card">
                        <img src="{{asset('images/image-3@2x.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p>ALT20210501</p>
                            <p>VÉ CỔNG</p>
                            <p>---</p>
                            <p>Ngày sử dụng: 31/05/2021</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="{{asset('images/image-3@2x.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p>ALT20210501</p>
                            <p>VÉ CỔNG</p>
                            <p>---</p>
                            <p>Ngày sử dụng: 31/05/2021</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="{{asset('images/image-3@2x.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p>ALT20210501</p>
                            <p>VÉ CỔNG</p>
                            <p>---</p>
                            <p>Ngày sử dụng: 31/05/2021</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="{{asset('images/image-3@2x.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p>ALT20210501</p>
                            <p>VÉ CỔNG</p>
                            <p>---</p>
                            <p>Ngày sử dụng: 31/05/2021</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="{{asset('images/image-3@2x.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p>ALT20210501</p>
                            <p>VÉ CỔNG</p>
                            <p>---</p>
                            <p>Ngày sử dụng: 31/05/2021</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="{{asset('images/image-3@2x.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p>ALT20210501</p>
                            <p>VÉ CỔNG</p>
                            <p>---</p>
                            <p>Ngày sử dụng: 31/05/2021</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection