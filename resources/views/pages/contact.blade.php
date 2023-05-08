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
        <img src="images/alex-ar-lay-do-shadow-1@2x.png" style="width: 318px;">
    </div>

    <img src="images/bg.svg " class="bg-image ">

    <div class="contact-1">
        <img src="images/contact-bg.svg" style="height: 463px;">
    </div>

    <div class="box">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo.</p>
        <p>Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis.</p>

    </div>

    <div class="form-text">
        <form class="">
            <div class="row mb-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Tên" aria-label="First name">
                </div>
                <div class="col">
                    <input type="email" class="form-control" placeholder="Email" aria-label="Last name">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Số điện thoại" aria-label="First name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Địa chỉ" aria-label="Last name">
                </div>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Lời nhắn</label>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-danger">Gửi liên hệ</button>
            </div>

        </form>

    </div>

    <div class="contact-2">
        <img src="images/address.svg" style="width: 350px;">
    </div>

    <div class="contact-3">
        <img src="images/email.svg" style="width: 350px;">
    </div>

    <div class="contact-4">
        <img src="images/phone.svg" style="width: 350px;">
    </div>

</div>
@endsection
