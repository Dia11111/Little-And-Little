@extends('../layout')
@section('content')
<style>
    /* adjust the width of the form fields */
    
    input.form-control {
        width: 300px;
    }
    /* adjust the height of the comment textarea */
    
    textarea.form-control {
        height: 150px;
    }
    /* adjust the width and height of the button */
    
    button.btn {
        width: 150px;
        height: 40px;
    }
    /* adjust the margin and padding of the form */
    
    form {
        margin: 20px;
        padding: 20px;
    }
    /* adjust the margin and padding of the form rows */
    
    .row.mb-3 {
        margin-bottom: 20px;
    }
    /* adjust the margin and padding of the form input fields */
    
    .col input.form-control {
        margin-bottom: 10px;
        padding: 10px;
    }
    /* adjust the margin and padding of the form label */
    
    label {
        margin-bottom: 10px;
    }

</style>
<div class="container-1 ">
    <h1 class="title-head">Liên hệ</h1>
    <div class="alex">
        <img src="{{asset('images/alex-ar-lay-do-shadow-1@2x.png')}}" style="width: 318px;">
    </div>

    <img src="{{asset('images/bg.svg')}} " class="bg-image ">

    <div class="contact-1">
        <img src="{{asset('images/contact-bg.svg')}}" style="height: 463px;">
    </div>

    <div class="box">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo.</p>
        <p>Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis.</p>

    </div>

    <div class="form-text">
    {{-- @if (session('status'))
        <div class="alert alert-light alert-dismissible fade show" role="alert ">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif --}}
    @if (session('status'))
    <div class="position-fixed top-50 start-50 translate-middle p-3" style="z-index: 11">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <button type="button" class="btn-close ms-auto" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            <span>Gửi liên hệ thành công.</span>
            <br>
            {{ session('status') }}
          </div>
        </div>
    </div>
    @endif
        <form method="POST" action="{{route('contact.send')}}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <div class="col">
                    <input name="name" type="text" class="form-control" placeholder="Tên" aria-label="First name" required>
                </div>
                <div class="col">
                    <input name="email" type="email" class="form-control" placeholder="Email" aria-label="Last name" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <input name="phone" type="text" class="form-control" placeholder="Số điện thoại" aria-label="First name" required>
                </div>
                <div class="col">
                    <input name="address" type="text" class="form-control" placeholder="Địa chỉ" aria-label="Last name" required>
                </div>
            </div>
            <div class="form-floating mb-3">
                <textarea name="msg" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required></textarea>
                <label for="floatingTextarea2">Lời nhắn</label>
            </div>
            <div class="d-flex justify-content-center">
                <button id="liveToastBtn" type="submit" class="btn btn-danger">Gửi liên hệ</button>
            </div>

        </form>

    </div>

    <div class="contact-2">
        <img src="{{asset('images/address.svg')}}" style="width: 350px;">
    </div>

    <div class="contact-3">
        <img src="{{asset('images/email.svg')}}" style="width: 350px;">
    </div>

    <div class="contact-4">
        <img src="{{asset('images/phone.svg')}}" style="width: 350px;">
    </div>

</div>
@endsection
