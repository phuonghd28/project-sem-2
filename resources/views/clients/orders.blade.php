@extends('clients.master')
@section('title')
    Orders
@endsection
@section('custom_css')
    <style>
        .shop-cart {
            padding-top: 70px;
            padding-bottom: 90px;
        }

        .shop__cart__table {
            margin-bottom: 30px;
        }

        .shop__cart__table table {
            width: 100%;
        }

        .shop__cart__table thead {
            border-bottom: 1px solid #f2f2f2;
        }

        .shop__cart__table thead th {
            font-size: 18px;
            color: #111111;
            font-weight: 600;
            text-transform: uppercase;
            padding-bottom: 20px;
        }

        .shop__cart__table tbody tr {
            border-bottom: 1px solid #f2f2f2;
        }

        .shop__cart__table tbody tr td {
            padding: 30px 0;
        }

        .shop__cart__table tbody tr .cart__product__item {
            overflow: hidden;
            width: 585px;
        }

        .shop__cart__table tbody tr .cart__product__item img {
            float: left;
            margin-right: 25px;
            width: 130px;
            height: 100px;
        }

        .shop__cart__table tbody tr .cart__product__item .cart__product__item__title {
            overflow: hidden;
            padding-top: 23px;
        }

        .shop__cart__table tbody tr .cart__product__item .cart__product__item__title h6 {
            color: #111111;
            font-weight: 600;
        }

        .shop__cart__table tbody tr .cart__product__item .cart__product__item__title .rating i {
            font-size: 10px;
            color: #e3c01c;
            margin-right: -4px;
        }

        .shop__cart__table tbody tr .cart__price {
            font-size: 16px;
            color: #212529FF;
            font-weight: 600;
            width: 190px;
        }

        .shop__cart__table tbody tr .cart__quantity {
            width: 190px;
        }

        .shop__cart__table tbody tr .cart__quantity .pro-qty {
            border: none;
            padding: 0;
            width: 110px;
            border-radius: 0;
        }

        .shop__cart__table tbody tr .cart__quantity .pro-qty input {
            color: #444444;
        }

        .shop__cart__table tbody tr .cart__quantity .pro-qty .qtybtn {
            font-size: 16px;
            color: #444444;
        }

        .shop__cart__table tbody tr .cart__total {
            font-size: 16px;
            color: #212529FF;
            font-weight: 600;
            width: 150px;
        }

        .shop__cart__table tbody tr .cart__close {
            text-align: right;
        }

        .shop__cart__table tbody tr .cart__close span {
            height: 45px;
            width: 45px;
            background: #cecaca;
            border-radius: 50%;
            font-size: 18px;
            color: #111111;
            line-height: 44px;
            text-align: center;
            display: inline-block;
            font-weight: 600;
            cursor: pointer;
        }

        .cart__btn {
            margin-bottom: 50px;
        }

        .cart__btn.update__btn {
            text-align: right;
        }

        .cart__btn a {
            font-size: 14px;
            color: #111111;
            font-weight: 600;
            text-transform: uppercase;
            display: inline-block;
            padding: 14px 30px 12px;
            background: #f5f5f5;
        }

        .cart__btn a span {
            color: #212529FF;
            font-size: 14px;
            margin-right: 5px;
        }

        .site-btn {
            font-size: 14px;
            color: #ffffff;
            background: #212529FF;
            font-weight: 600;
            border: none;
            text-transform: uppercase;
            display: inline-block;
            padding: 12px 30px;
            border-radius: 50px;
        }

        .discount__content h4 {
            color: #111111;
            font-weight: 600;
            text-align: center;
            text-transform: uppercase;
        }

        .discount__content form {
            position: relative;
            width: 370px;
            display: inline-block;
        }

        .discount__content form input {
            height: 53px;
            width: 100%;
            border: 1px solid #444444;
            border-radius: 50px;
            padding-left: 30px;
            padding-right: 115px;
            font-size: 14px;
            color: #444444;
        }

        .discount__content form input:focus {
            outline: none;
        }

        .discount__content form input::-webkit-input-placeholder {
            color: #444444;
        }

        .discount__content form input::-moz-placeholder {
            color: #444444;
        }

        .discount__content form input:-ms-input-placeholder {
            color: #444444;
        }

        .discount__content form input::-ms-input-placeholder {
            color: #444444;
        }

        .discount__content form input::placeholder {
            color: #444444;
        }

        .discount__content form button {
            position: absolute;
            right: 4px;
            bottom: 4px;
        }

        .cart__total__procced {
            background: #f5f5f5;
            padding: 40px;
        }

        .cart__total__procced h6 {
            color: #111111;
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .cart__total__procced ul {
            margin-bottom: 25px;
        }

        .cart__total__procced ul li {
            list-style: none;
            font-size: 16px;
            color: #111111;
            font-weight: 600;
            overflow: hidden;
            line-height: 40px;
        }

        .cart__total__procced ul li span {
            color: #212529FF;
            float: right;
        }

        .cart__total__procced .primary-btn {
            display: block;
            border-radius: 50px;
            text-align: center;
            padding: 12px 0 10px;
        }

        .primary-btn {
            display: inline-block;
            font-size: 14px;
            text-transform: uppercase;
            font-weight: 600;
            padding: 12px 30px 10px;
            color: #ffffff;
            background: #111111;
        }

        .btn:focus,
        .btn:active {
            background-image: none;
            outline: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        button:focus {
            outline: none;
        }


    </style>
@endsection
@section('content')
    <section class="shop-cart spad">
        <div class="container">
            @if(session('success-msg'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Success!</strong>{{session('success-msg')}}
                </div>
            @endif
            <h2><strong>Đơn hàng #{{$orders->id}}</strong></h2>
            <div class="row">
                <div>Trạng thái :
                    @switch($orders->status)
                        @case(1)
                        Đang chờ
                        @break
                        @case(2)
                        Đã thanh toán
                        @break
                        @case(3)
                        Đang giao hàng
                        @break
                        @case(4)
                        Hoàn thành
                        @break
                    @endswitch
                </div>
                <div>Tên người nhận : {{$orders->shipName}}</div>
                <div>Số điện thoại : {{$orders->shipPhone}}</div>
                <div>Địa chỉ : {{$orders->district->name. '-' .$orders->ward->name. '-'. $orders->shipAddress}}</div>
                <div>Ghi chú : {{$orders->note}}</div>
            </div>
            <?php
            $totalPrice = 0
            ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop__cart__table">
                        <table>
                            <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>SubTotal</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders->orderDetails as $orderDetail)
                                <?php
                                if (!empty($orderDetail)) {
                                    $totalPrice += $orderDetail->unitPrice * $orderDetail->quantity;
                                }
                                ?>
                                <tr>
                                    <td class="cart__product__item">
                                        <img
                                            src="{{explode(',',$orderDetail->product->image)[0]}}"
                                            alt="">
                                        <div class="cart__product__item__title">
                                            <h6>{{$orderDetail->product->name}}</h6>
                                        </div>
                                    </td>
                                    <td class="cart__price">{{number_format($orderDetail->product->price)}} đ</td>
                                    <td class="cart__quantity">
                                        <div class="pro-qty">
                                            {{$orderDetail->quantity}}
                                        </div>
                                    </td>
                                    <td>{{number_format($orderDetail->unitPrice*$orderDetail->quantity)}} đ</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-6">
                    <strong>Total Price : {{number_format($totalPrice)}} đ</strong>
                </div>
                @if($orders->status == 1)
                    <div class="col-6">
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="hide"
                                       value="option1" checked>
                                <label class="form-check-label" for="inlineRadio1">Thanh toán ngay khi nhận hàng
                                    (COD)</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="show"
                                       value="option2">
                                <label class="form-check-label" for="inlineRadio2">Các hình thức thanh toán khác</label>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-3" id="pay" style="display: none">
                            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                <i class="fab fa-paypal" style="margin-right: 20px"></i> Thanh toán
                                                Paypal
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                             aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body d-flex justify-content-center mt-2">
                                                <div id="paypal-button"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                <i class="fas fa-university" style="margin-right: 20px"></i>Chuyển khoản
                                                ngân hàng
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                             aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <td colspan="2" class="text-center">Thông tin thanh toán</td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td><strong>Tên ngân hàng</strong></td>
                                                        <td><i class="fas fa-clone"></i> MB Bank</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Tên tài khoản</strong></td>
                                                        <td><i class="fas fa-clone"></i> Hoàng Đắc Phương</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Số tài khoản</strong></td>
                                                        <td><i class="fas fa-clone"></i> 093094203809</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Nội dung chuyển khoản</strong></td>
                                                        <td><i class="fas fa-clone"></i> Thanh toán đơn hàng
                                                            #{{$orders->id}} </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endif
            </div>
        </div>
        </div>
    </section>
@endsection
@section('custom_js')
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script>
        paypal.Button.render({
            env: 'sandbox', // Or 'production'
            // Set up the payment:
            // 1. Add a payment callback
            payment: function (data, actions) {
                // 2. Make a request to your server
                return actions.request.post('/paypal/create-payment', {
                    orderId: {{$orders->id}},
                })
                    .then(function (res) {
                        // 3. Return res.id from the response
                        return res.id;
                    });
            },
            // Execute the payment:
            // 1. Add an onAuthorize callback
            onAuthorize: function (data, actions) {
                // 2. Make a request to your server
                return actions.request.post('/paypal/execute-payment', {
                    paymentID: data.paymentID,
                    payerID: data.payerID
                })
                    .then(function (res) {
                        alert('Payment Success !!')
                        location.reload();
                        // 3. Show the buyer a confirmation message.
                    });
            }
        }, '#paypal-button');
    </script>
    <script>
        $('#hide').click(function () {
            $('#pay').hide();
        });
        $('#show').click(function () {
            $('#pay').show();
        })
    </script>
@endsection
