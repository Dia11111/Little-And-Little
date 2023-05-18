@extends('../layout')

@section('content')

<div class="container-1 ">
    <div class="dam-sen-container ">
        <img src="{{asset('images/image-2@2x.png')}} " class="dam-sen " alt="Đầm sen ">
        <p class="dam-sen-text ">ĐẦM SEN PARK</p>

    </div>
    <div class="pink-bollon ">
        <img src="{{asset('images/18451-converted06-1@2x.png')}} " style="width: 100px; ">
    </div>

    <div class="red-bollon ">
        <img src="{{asset('images/18451-converted02-1@2x.png')}} " style="width: 100px; ">
    </div>

    <div class="yellow-bollon ">
        <img src="{{asset('images/18451-converted03-1@2x.png')}} " style="width: 100px; ">
    </div>

    <div class="green-bollon ">
        <img src="{{asset('images/18451-converted04-1@2x.png')}} " style="width: 100px; ">
    </div>

    <div class="yellow-2-bollon ">
        <img src="{{asset('images/18451-converted03-1@2x.png')}} " style="width: 100px; ">
    </div>

    <div class="yellow-3-bollon ">
        <img src="{{asset('images/18451-converted05-1@2x.png')}} " style="width: 100px; ">
    </div>

    <div class="lisa ">
        <img src="{{asset('images/lisa-arnold-lay-do-f2-3@2x.png')}} " style="width: 400px; ">
    </div>

    <div class="render ">
        <img src="{{asset('images/render-fix-hair-1@2x.png')}} " style="width: 500px; ">
    </div>

    <img src="{{asset('images/bg.svg')}} " class="bg-image ">

    <div class="ticket ">
        <img src="{{asset('images/full-ticket-bg.svg')}} " alt=" " style="height: 382px; ">
    </div>

    <div class="feature">
        <img src="{{asset('images/feature.svg ')}}" alt=" " style="height: 50px; ">
    </div>

    <div class="feature-layout">
        <div class="feature-item-1">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo. Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis. </p>
            <p>Suspendisse iaculis libero lobortis condimentum gravida. Aenean auctor iaculis risus, lobortis molestie lectus consequat a.</p>
            <div class="highlight">
                <div class="content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </div>
        <div class="feature-item-2">
            <h1 class="text-center mb-3" style="font-size: 23px; color: white;">Vé của bạn</h1>
            <form class="row g-3 " action="{{route('checkout')}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- <div class="input-group ">
                    <input name="ve_id" class="form-control" id="selectedTicket" placeholder="--Chọn vé-- " style="margin-right: 10px;" required>
                    <button class="btn btn-warning rounded-3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-caret-down" style="color: white;"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        @foreach($ticket as $key => $ve)
                        <li><a class="dropdown-item" value="{{$ve->id}}" onclick="selectTicket('{{$ve->id}}')">{{$ve->tenve}}</a></li>
                        @endforeach
                    </ul>
                </div> --}}
                <div class="col-12 ">
                    <select name="ve_id" class="form-select" aria-label="Default select example">
                        <option selected>--Chọn vé-- </option>
                        @foreach($ticket as $key => $ve)
                        <option value="{{$ve->id}}">{{$ve->tenve}}</option>
                        @endforeach
                    </select>
                </div>
                <div class=" col-md-4 ">
                    <input type="number " class="form-control " name="soluongve" placeholder="Số lượng vé" min="0" max="1000" required>
                </div>
                <div class="col-md-8 ">
                    <div class="input-group">
                        <input name="ngaysudung" type="text " class="form-control" id="DatePicked" placeholder="Ngày sử dụng " style="margin-right: 10px;" required>
                        <a id="myButton" class="btn btn-warning rounded-3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-calendar" style="color: white;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-12 ">
                    <input type="text " class="form-control " name="hoten" placeholder="Họ và tên " required>
                </div>
                <div class="col-12 ">
                    <input type="text " class="form-control " name="sodienthoai" placeholder="Số điện thoại " required>
                </div>
                <div class="col-12 ">
                    <input type="text " class="form-control " name="diachi" placeholder="Địa chỉ email "required>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto ">
                    <button type="submit " class="btn btn-danger ">Đặt vé</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection