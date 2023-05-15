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
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo. Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis. Suspendisse iaculis libero lobortis condimentum gravida. Aenean auctor iaculis risus, lobortis molestie
            lectus consequat a.
        </div>
        <div class="feature-item-2">
            <h1 class="text-center mb-3" style="font-size: 23px; color: white;">Vé của bạn</h1>
            <form class="row g-3 ">
                <!-- <div class="col-12 ">
                    <input type="text " class="form-control " id="inputAddress " placeholder="--Chọn vé-- ">
                </div> -->
                <div class="input-group ">
                    <input type="text" class="form-control" id="selectedTicket" aria-label="Text input with dropdown button" placeholder="--Chọn vé-- " style="margin-right: 10px;" required>
                    <button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        @foreach($ticket as $key => $ve)
                        <li><a class="dropdown-item" href="#" onclick="selectTicket('{{$ve->tenve}}')">{{$ve->tenve}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class=" col-md-4 ">
                    <input type="number " class="form-control " id="number " placeholder="Số lượng vé" min="0" max="1000" required>
                </div>
                <div class="col-md-8 ">
                    <div class="input-group">
                        <input id="myID" type="text " class="form-control" placeholder="Ngày sử dụng " style="margin-right: 10px;" required>
                        <button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                    </div>
                </div>
                <div class="col-12 ">
                    <input type="text " class="form-control " id="hovaten " placeholder="Họ và tên " required>
                </div>
                <div class="col-12 ">
                    <input type="text " class="form-control " id="sdt " placeholder="Số điện thoại " required>
                </div>
                <div class="col-12 ">
                    <input type="text " class="form-control " id="address " placeholder="Địa chỉ email "required>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto ">
                    <button type="submit " class="btn btn-danger ">Đặt vé</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection