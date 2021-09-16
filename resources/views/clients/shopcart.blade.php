@extends('clients.master')
@section('title')
    Shoping-Cart
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
            color: #f8f9fa;
            font-weight: 600;
            text-transform: uppercase;
            display: inline-block;
            padding: 14px 30px 12px;
            background: #212529;
        }

        .cart__btn a span {
            color: #cad3dc;
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

        .discount__content form select {
            height: 53px;
            width: 100%;
            padding: 10px 25px;
            border: 1px solid #444444;
            font-size: 14px;
            color: #444444;
        }
        .discount__content form input:focus {
            outline: none;
        }
        .discount__content form select:focus {
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

        .btn-update-qty {
            background-color: #cecaca;
            border: none;
        }


    </style>
@endsection
@section('content')
    <section class="shop-cart spad">
        @if(session('add'))
            <div class="alert alert-success alert-dismissible">
                <strong>Success!</strong>{{session('add')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session('update'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong>{{session('update')}}
            </div>
        @endif
        @if(session('remove'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong>{{session('remove')}}
            </div>
        @endif
        @if(session('destroy'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong>{{session('destroy')}}
            </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop__cart__table">
                        <table>
                            <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::content() as $data)
                                <form action="/update" method="get">
                                    <tr>
                                        <input type="hidden" name="rowId" value="{{$data->rowId}}">
                                        <td class="cart__product__item">
                                            <img
                                                src="{{$data->options->image}}"
                                                alt="">
                                            <div class="cart__product__item__title">
                                                <h6>{{$data->name}}</h6>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="cart__price">{{$data->subtotal()}}</td>
                                        <td class="cart__quantity">
                                            <div class="pro-qty">
                                                <input class="form-control" type="number" min="1" name="quantity"
                                                       value="{{$data->qty}}">
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-update-qty">Update</button>
                                        </td>
                                        <td class="cart__close">
                                                <span>
                                                    <a onclick="return confirm('Bạn có chắc muốn xoá sản phẩm khỏi giỏ hàng ?')"
                                                       href="/remove/{{$data->rowId}}">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                </span>
                                        </td>
                                    </tr>
                                </form>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn">
                        <a href="{{route('products')}}">Continue Shopping</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn update__btn">
                        <a onclick="return confirm('Bạn có chắc muốn xóa tất cả giỏ hàng ?')" href="/destroy">
                            <span class="fa fa-spinner">
                            </span> Remove All
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="discount__content">

                        <form name="orderForm" action="{{ route('saveOrder') }}" method="post">
                            @csrf
                            <h4 class="mb-3">Ship Information</h4>
                            <select class="mb-3" id="sel1" name="district_id">
                                <option selected disabled hidden>Quận(Huyện)</option>
                                @foreach($districts as $district )
                                    <option
                                        value="{{$district->maqh}}">{{$district->name}}</option>
                                @endforeach
                            </select>
                            <select class="mb-3" id="Ward" name="ward_id">
                                <option selected disabled hidden>Phường(Xã)</option>
                            </select>
                            <input name="shipAddress" type="text" class="mb-3" placeholder="Enter ship address">
                            <input name="shipName" type="text" class="mb-3" placeholder="Enter ship name">
                            <input name="shipPhone" type="text" class="mb-3" placeholder="Enter ship phone">
                            <input name="note" type="text" placeholder="Enter note">
                            <button class="site-btn">Send</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-2">
                    <div class="cart__total__procced">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Subtotal <span>$ 260.0</span></li>
                            <li>Total <span>$ 260.0</span></li>
                        </ul>
                        <a href="#" class="primary-btn">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('custom_js')
    <script>
        const selectDistrict = $('select[name="district_id"]');
        const selectWard = $('select[name="ward_id"]');
        selectDistrict.change(function () {
            $.ajax({
                type: 'GET',
                url: '/api/ward/' + selectDistrict.val(),
                beforeSend: function () {
                    selectWard.html('<option value hidden disabled selected></option>').prop('disabled', false);
                },
                success: function (data) {
                    data.forEach(item => selectWard.append(new Option(item.name, item.xaid)));
                },
                error: function (xhr) {
                    let errors = JSON.parse(xhr.responseText).errors;
                    alert(errors.map(a => a.msg).join(';'));
                }
            });
        })
    </script>
@endsection
