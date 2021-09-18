@extends('clients.master')
@section('title')
    Shoping-Cart
@endsection
@section('custom_css')
    <link rel="stylesheet" href="/assets/css/cart.css">
@endsection
@section('content')
    <section class="shop-cart spad">
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
                                            </div>
                                        </td>
                                        <td class="cart__price">{{number_format($data->price*$data->qty)}}</td>
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
                            <input name="shipAddress" type="text" class="mb-3" placeholder="Enter street">
                            <input name="shipName" type="text" class="mb-3" placeholder="Enter name" value="{{\Illuminate\Support\Facades\Auth::check() ? \Illuminate\Support\Facades\Auth::user()->first_name. ' ' . \Illuminate\Support\Facades\Auth::user()->last_name : ''}}">
                            <input name="shipPhone" type="text" class="mb-3" placeholder="Enter phone" value="{{\Illuminate\Support\Facades\Auth::check() ? \Illuminate\Support\Facades\Auth::user()->phone : ''}}">
                            <input name="note" type="text" placeholder="Enter note">
                            <button class="site-btn">Send</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-2">
                    <div class="cart__total__procced">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Total<span>{{\Gloudemans\Shoppingcart\Facades\Cart::total()}}</span></li>
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
