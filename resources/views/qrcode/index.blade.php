<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chi tiết vé</title>
</head>

<body>
    <h1>Chi tiết vé</h1>
    <p>Mã vé: {{$orderCode}}</p>
    <p>Họ tên: {{ $customer->hoten }}</p>
    <p>Email: {{ $customer->diachi }}</p>
    <p>Số điện thoại: {{ $customer->sodienthoai }}</p>
    <p>Số lượng vé: {{ $customer->soluongve }}</p>
    <p>Ngày sử dụng: {{ $customer->ngaysudung }}</p>
    <p>Tổng tiền: {{$tongtien}}</p>
</body>

</html>