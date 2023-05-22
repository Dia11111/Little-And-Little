<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đơn hàng</title>
</head>
<body>
    <h1>Đơn hàng</h1>
    <p>Mã vé: {{ $orderInfo['ticket_code'] }}</p>
    <p>Tên vé: {{$orderInfo['ticket_name']}}</p>
    <p>Họ tên: {{ $orderInfo['full_name'] }}</p>
    <p>Số điện thoại: {{ $orderInfo['phone_number'] }}</p>
    <p>Email: {{ $orderInfo['email'] }}</p>
    <p>Số lượng vé: {{ $orderInfo['quantity'] }}</p>
    <p>Ngày sủ dụng: {{$orderInfo['date_use']}}</p>
    <p>Tổng tiền: {{ $orderInfo['total_amount'] }}</p>
</body>
</html>