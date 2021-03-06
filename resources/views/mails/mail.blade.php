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

                    <p style="font-size: 22px;text-align: center">Xin ch??o {{$user->first_name.' '.$user->last_name}}!</p>
                    <div class="wrap-icon">
                        <div class="wrap-img-email" style="margin-left:460px">
                            <img style="width: 50%"
                                 src="https://res.cloudinary.com/dn3bmj5ex/image/upload/v1633005089/wjsfk7c7dg2a2gw9x8ua.png"
                                 alt="">
                        </div>
                    </div>
                    <h4>???? nh???n ????n h??ng</h4>
                    <div class="text-bicon">
                        <p>C???m ??n b???n ???? quan t??m s???n ph???m c???a C??m chay.</p>
                        <p>????n h??ng c???a b???n ???? ???????c nh???n v?? s??? ???????c x??? l?? ngay khi b???n x??c nh???n thanh to??n.</p>
                    </div>
                </div>
                <div class="row" style="margin: 20px;justify-content: center">
                    <div class="btn-detail-order">
                        <a href="{{route('detailOrder',$order->id)}}">Xem ????n h??ng</a>
                    </div>
                </div>
                @break
                @case(2)
                <div class="row" style="margin-left: 10px">
                    <p style="font-size: 22px;text-align: center">Xin ch??o {{$user->first_name.' '.$user->last_name}}!</p>
                    <div class="wrap-icon">
                        <div class="wrap-img-email" style="margin-left:460px">
                            <img style="width: 50%"
                                 src="https://res.cloudinary.com/dn3bmj5ex/image/upload/v1633005089/wjsfk7c7dg2a2gw9x8ua.png"
                                 alt="">
                        </div>
                    </div>
                    <h4 style="text-align: center">Thanh to??n th??nh c??ng</h4>
                    <div class="text-bicon">
                        <p>????n h??ng c???a b???n ???? ???????c thanh to??n v?? ??ang ???????c x??? l??</p>
                    </div>
                </div>
                @break
                @case(3)
                <div class="row" style="margin-left: 10px">
                    <p style="font-size: 22px;text-align: center">Xin ch??o {{$user->first_name.' '.$user->last_name}}!</p>
                    <div class="wrap-icon">
                        <div class="wrap-img-email" style="margin-left:460px">
                            <img style="width: 50%"
                                 src="https://res.cloudinary.com/dn3bmj5ex/image/upload/v1633005089/wjsfk7c7dg2a2gw9x8ua.png"
                                 alt="">
                        </div>
                    </div>
                    <h4 style="text-align: center">??ang v???n chuy???n</h4>
                    <div class="text-bicon">
                        <p>????n h??ng c???a qu?? kh??ch ??ang ???????c v???n chuy???n.</p>
                        <p>Vui l??ng li??n h??? s??? ??i???n tho???i: 0344590349 ????? bi???t th??m th??ng tin v??? th???i gian giao h??ng</p>
                    </div>
                </div>
                @break
                @case(4)
                <div class="row" style="margin-left: 10px">
                    <p style="font-size: 22px;text-align: center">Xin ch??o {{$user->first_name.' '.$user->last_name}}!</p>
                    <div class="wrap-icon">
                        <div class="wrap-img-email" style="margin-left:460px">
                            <img style="width: 50%"
                                 src="https://res.cloudinary.com/dn3bmj5ex/image/upload/v1633005089/wjsfk7c7dg2a2gw9x8ua.png"
                                 alt="">
                        </div>
                    </div>
                    <h4 style="text-align: center">???? nh???n h??ng</h4>
                    <div class="text-bicon">
                        <p>C???m ??n qu?? kh??ch ???? mua m??n ??n c???a ch??ng t??i.</p>
                        <p>Ch??c qu?? kh??ch ngon mi???ng.</p>
                    </div>
                </div>
                @break
            @endswitch
        </div>
    </div>
</div>
</body>
</html>
