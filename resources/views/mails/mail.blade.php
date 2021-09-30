<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Mail</title>
    <style>
        a {
            text-decoration: none !important;
            color: #888;
        }

        a:hover {
            color: #333;
        }

        a, a:hover {
            text-decoration: none;
        }

        a:focus {
            outline: medium none;
            outline-offset: 0;
        }

        @media (max-width: 575.98px) {
            div#text-dicon h4 {
                margin: 20px 0;
                color: #4CBB17;
                font-size: 20px;
            }
            div.logo-email {
                width: 40%;
            }
            div.btn-detail-order a {
                border-radius: 10px;
            }
            div.btn-detail-order {
                width: 90%;
            }
            div.text-bicon {
                width: 100%;
            }
        }

        /* Medium devices (tablets, 768px and up) */
        @media (max-width: 768px) {
        }

        /* Large devices (desktops, 992px and up) */
        @media (min-width: 992px) and (max-width: 1199.98px) {

        }

        /* Extra large devices (large desktops, 1200px and up) */
        @media (min-width: 1200px) {
        }
        .btn-detail-order {
            width: 30%;
            margin: 0 auto;
        }

        .back-home a {
            padding: 8px 0px;
            display: block;
            line-height: 22px;
            color: white;
        }

        .wrap-btn-back i {
            color: #FFFF;
            margin-right: 7px;
        }

        .text-bicon {
            text-align: center;
            font-weight: 500;
            font-size: 16px;
            width: 70%;
            margin: 0 auto
        }

        .btn-detail-order a {
            width: 100%;
            color: #fff;
            background-color: #00c6d7;
            border: none;
            display: inline-block;
            font-weight: 400;
            line-height: 1.5;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            padding: .375rem .75rem;
            font-size: 1rem;
            border-radius: 20px;
        }

        .wrap-img-email {
            width: 30%;
            margin: 0 auto;
        }

        .logo-email {
            width: 20%;
            margin: 0 auto
        }

        .logo-email img {
            width: 100%;
        }

        #text-dicon h4 {
            text-align: center;
            margin: 20px 0;
            color: #4CBB17;
            font-size: 30px;
        }
    </style>
</head>
<body style="background-color: #f2f2f2">
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-sm-12 col-xs-12 col-lg-6 col-md-6" style="background-color: #FFFFFF">
            <div class="row">
                <div class="logo-email">
                    <img src="http://res.cloudinary.com/dn3bmj5ex/image/upload/v1631980859/yhvawbt54jlxzddzmmmf.png"
                         alt="">
                </div>
            </div>
            <div class="row">
                <hr>
            </div>
            @switch($order->status)
                @case(1)
                <div id="text-dicon" class="row" style="margin-left: 10px">

                    <p style="font-size: 22px;">Xin chào {{$user->first_name.' '.$user->last_name}}!</p>
                    <div class="wrap-icon">
                        <div class="wrap-img-email">
                            <img style="width: 100%"
                                 src="https://res.cloudinary.com/dn3bmj5ex/image/upload/v1633005089/wjsfk7c7dg2a2gw9x8ua.png"
                                 alt="">
                        </div>
                    </div>
                    <h4>Đã nhận đơn hàng</h4>
                    <div class="text-bicon">
                        <p>Cảm ơn bạn đã quan tâm sản phẩm của Cơm chay.</p>
                        <p>Đơn hàng của bạn đã được nhận và sẽ được xử lý ngay khi bạn xác nhận thanh toán.</p>
                    </div>
                </div>
                <div class="row" style="margin: 20px;justify-content: center">
                    <div class="btn-detail-order">
                        <a href="{{route('detailOrder',$order->id)}}">Xem đơn hàng</a>
                    </div>
                </div>
                @break
                @case(2)
                <div class="row" style="margin-left: 10px">
                    <p style="font-size: 22px;">Xin chào {{$user->first_name.' '.$user->last_name}}!</p>
                    <div class="wrap-icon">
                        <div class="wrap-img-email">
                            <img style="width: 100%"
                                 src="https://res.cloudinary.com/dn3bmj5ex/image/upload/v1633005089/wjsfk7c7dg2a2gw9x8ua.png"
                                 alt="">
                        </div>
                    </div>
                    <h4>Thanh toán thành công</h4>
                    <div class="text-bicon">
                        <p>Đơn hàng của bạn đã được thanh toán thành công.</p>
                    </div>
                </div>
                @break
                @case(3)
                <div class="row" style="margin-left: 10px">
                    <p style="font-size: 22px;">Xin chào {{$user->first_name.' '.$user->last_name}}!</p>
                    <div class="wrap-icon">
                        <div class="wrap-img-email">
                            <img style="width: 100%"
                                 src="https://res.cloudinary.com/dn3bmj5ex/image/upload/v1633007840/gr3f9kng8nnn7ltokmiq.jpg"
                                 alt="">
                        </div>
                    </div>
                    <h4>Đang vận chuyển</h4>
                    <div class="text-bicon">
                        <p>Đơn hàng của quý khách đang được vận chuyển.</p>
                    </div>
                </div>
                @break
                @case(4)
                <div class="row" style="margin-left: 10px">
                    <p style="font-size: 22px;">Xin chào {{$user->first_name.' '.$user->last_name}}!</p>
                    <div class="wrap-icon">
                        <div class="wrap-img-email">
                            <img style="width: 100%"
                                 src="https://res.cloudinary.com/dn3bmj5ex/image/upload/v1633005089/wjsfk7c7dg2a2gw9x8ua.png"
                                 alt="">
                        </div>
                    </div>
                    <h4>Đã nhận hàng</h4>
                    <div class="text-bicon">
                        <p>Cảm ơn quý khách đã mua món ăn của chúng tôi.</p>
                        <p>Chúc quý khách ngon miệng.</p>
                    </div>
                </div>
                @break
            @endswitch
        </div>
    </div>
</div>
</body>
</html>
