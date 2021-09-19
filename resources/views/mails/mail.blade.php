<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Mail</title>
</head>
<body style="background-color: #f2f2f2">
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-sm-12 col-xs-12 col-lg-6 col-md-6" style="background-color: #FFFFFF">
            <div class="row" style="margin: 20px 0 20px 20px">
                Cơm chay
            </div>
            <div class="row">
                <hr>
            </div>
            <div class="row" style="margin-left: 10px">
                <p>Xin chào {{$user->first_name.' '.$user->last_name}}</p>
                <p>Cảm ơn bạn đã quan tâm sản phẩm của Cơm chay. Đơn hàng của bạn đã được nhận và sẽ được xử lý ngay khi bạn xác nhận thanh toán.</p>
                <p>Để xem chi tiết đơn hàng của mình tại web, bạn có thể nhấn vào nút bên dưới</p>
            </div>
            <div class="row justify-content-center" style="margin: 20px">
                <div class="col-5">
                    <a href="{{route('detailOrder',$order->id)}}" class="btn btn-primary" style="width:100%">Xem đơn hàng</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>