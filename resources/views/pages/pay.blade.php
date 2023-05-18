@extends('../layout')
@section('content')
<div class="container-1">
    <h1 class="title-head">Thanh toán</h1>

    <div class="trini">
        <img src="{{asset('images/trini-arnold-votay1-2@2x.png')}}" style="width: 318px;">
    </div>

    <img src="{{asset('images/bg.svg')}}" class="bg-image">

    <div class="ticket-pay ">
        <img src="{{asset('images/full-ticket-bg.svg')}} " alt=" " style="height: 400px; ">
    </div>
    <div class="feature-pay-1">
        <img src="{{asset('images/feature-pay-1.svg')}} " alt=" " style="height: 50px; ">
    </div>
    <div class="feature-pay-2">
        <img src="{{asset('images/feature-pay-1.svg')}} " alt=" " style="height: 50px; ">
    </div>

    <div class="feature-layout-pay">
        <div class="feature-item-pay-1">
            <!-- <h1 class="text mb-3" style="margin-top: -40px; margin-left: 33px; font-size: 23px; color: white;">Vé cổng</h1> -->
            <nav style="--bs-breadcrumb-divider: '-'; margin-top: -54px; margin-left: 21px; font-size: 22px; " aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a class="text-white" style="text-decoration: none;">Vé cổng</a>
                    </li>
                    <li class="breadcrumb-item active text-white" aria-current="page">{{$ticket_name}}</li>
                </ol>
            </nav>
            <form class="row g-3 ">

                <div class="col-md-4">
                    <label for="inputCity" class="form-label">Số tiền thanh toán</label>
                    <input type="text" class="form-control" value="{{$totalAmount}}" name="tongtien" disabled>
                </div>
                <div class="col-md-3">
                    <label for="inputCity" class="form-label">Số lượng vé</label>
                    <div class="input-group">
                        <input type="text" class="form-control" value="{{ $customer->soluongve }}" disabled>
                        <span class="input-group-text">vé</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="inputZip" class="form-label">Ngày sử dụng</label>
                    <input type="text" class="form-control" value="{{ $customer->ngaysudung }}" id="inputZip" disabled>
                </div>
                <div class="col-7 mt-1">
                    <label for="inputZip" class="form-label">Thông tin liên hệ</label>
                    <input type="text " class="form-control " value="{{ $customer->hoten }}" id="inputAddress " disabled>
                </div>
                <div class="col-6 mt-1">
                    <label for="inputZip" class="form-label">Điện thoại</label>
                    <input type="text " class="form-control " value="{{ $customer->sodienthoai }}" id="inputAddress2 " disabled>
                </div>
                <div class="col-7 mt-1">
                    <label for="inputZip" class="form-label">Email</label>
                    <input type="text " class="form-control "  value="{{ $customer->diachi }}" id="inputAddress " disabled>
                </div>

            </form>
        </div>
        <div class="feature-item-pay-2">
            <h1 class="text-center " style="font-size: 23px; color: white;">Thông tin thanh toán</h1>
            <form class="row g-3 " action="{{route('checkout_success')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12 mt-2">
                    <label for="formGroupExampleInput" class="form-label">Số thẻ</label>
                    <input type="text" class="form-control" name="sothe" id="inputAddress2 " placeholder="Số thẻ ">
                </div>

                <div class="col-12 mt-1">
                    <label for="formGroupExampleInput" class="form-label">Họ tên của thẻ</label>
                    <input type="text" class="form-control" name="hotenthe" id="inputAddress2 " placeholder="Họ tên chủ thẻ ">
                </div>

                <div class="col-12 mt-1">
                    <label for="formGroupExampleInput" class="form-label">Ngày hết hạn</label>
                    <div class="input-group">
                        <input type="text" id="DatePicked" class="form-control me-3" name="ngayhethan" placeholder="Ngày hết hạn">
                        <a class="btn btn-warning rounded-3" type="button" id="myButton" aria-expanded="false">
                            <i class="fas fa-calendar" style="color: white;"></i>
                        </a>
                        
                    </div>
                </div>

                <div class=" col-md-4 mt-1">
                    <label for="formGroupExampleInput" class="form-label">CVV/CVC</label>
                    <input type="password" class="form-control" name="cvv" id="inputPassword4" placeholder="CVV/CVC">
                </div>

                <div class="col-10 d-grid gap-2 mx-auto mt-2">
                    <a type="submit" href="SuccessPay.html" class="btn btn-danger">Đặt vé</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection