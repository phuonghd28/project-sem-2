@extends('clients.master')
@section('title')
    Home
@endsection
@section('custom_css')

    <style>
        h1, h2, h3, h4, h5, h6 {
            text-decoration: none;
            line-height: 1.5;
            clear: both
        }

        a {
            text-decoration: none
        }

        ul {
            padding: 0;
            margin: 0;
            list-style: none
        }

        .category-items-new {
            margin-bottom: 30px;
            position: relative;
            min-height: 1px
        }

        .category-items-new .category-main {
            position: relative;
            display: block;
            width: auto;
            height: auto;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            border-radius: 0;
            background-color: transparent
        }

        .category-items-new .category-main .cate-images {
            position: relative;
            z-index: 1;
            display: block;
            width: auto;
            height: 150px;
            margin-right: auto;
            margin-bottom: -83px;
            margin-left: auto
        }

        .category-items-new .category-main .category-text-box {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            padding: 120px 15px 15px;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: stretch;
            -webkit-align-items: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
            border-radius: 10px;
            background-color: #fff;
            -webkit-transition: .3s;
            transition: .3s
        }

        .category-items-new .category-main .category-text-inner {
            position: absolute;
            left: 0;
            right: 0;
            display: block;
            margin: 0 auto;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            text-align: center
        }

        .category-items-new .category-main .category-text-inner h3 {
            font-size: 24px;
            margin-bottom: 5px
        }

        .category-items-new .category-main .category-text-desc {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            height: 50px;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: end;
            -webkit-align-items: flex-end;
            -ms-flex-align: end;
            align-items: flex-end;
            justify-content: center
        }

        .heading-minimal {
            text-align: center;
            margin-bottom: 55px;
            position: relative;
            z-index: 1
        }

        .bg-color {
            background-color: #f2f2f2
        }

        .res-2-bg-white {
            overflow: hidden;
            border: 1px solid #e9e9e9;
            border-top: none;
            border-radius: 0 0 10px 10px;
        }

        .res-2-img {
            overflow: hidden;
            border-radius: 10px 10px 0 0;
            position: relative;
        }

        .res-fl-deals .res-2-img {
            min-height: 200px
        }

        .res-2-text i {
            font-size: 13px;
            margin-right: 3px;
            color: #6565
        }

        .res-2-bg-white .res-2-inner .res-2-text .foodota-product-price .woocommerce-Price-amount {
            color: #c70909;
            font-weight: 600;
            font-size: 16px
        }

        .res-2-bg-white .res-2-inner .res-2-text .foodota-product-price ins {
            background: transparent
        }

        .res-2-bg-white .res-2-inner .res-2-text .foodota-product-price del .woocommerce-Price-amount {
            color: #000;
            font-weight: 500;
            font-size: 14px;
            margin-right: 3px
        }

        .res-2-text i.starts-on {
            color: #ffb413
        }

        .res-2-inner {
            padding: 10px;
        }

        .res-2-text .text-s1 {
            font-size: 16px;
            text-transform: capitalize;
            color: #071c1f;
            font-weight: 600
        }

        .res-2-box ul li:last-child {
            margin-right: 0
        }

        .res-2-box ul li.order-now {
            margin-left: 15px
        }

        .res-2-box {
            overflow: hidden;
            width: 100%;
            border-top: 1px solid #e9e9e9;
            padding: 10px;
        }

        .res-2-box .slider-btn {
            margin-top: 0;
            width: 100%
        }

        .res-2-box .slider-btn .btn {
            width: 100%;
            border-radius: 0
        }

        .res-2-box ul li {
            float: left;
            width: 100%
        }

        .res-3-box ul li .weight {
            color: #000;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 0
        }

        .res-3-box .food_cats {
            position: relative
        }

        .res-3-box .food_cats .weight {
            color: #000;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 0;
            float: left;
            margin-right: 8px
        }

        .res-3-box .food_cats .cat_names a {
            font-size: 15px;
            color: #071c1f;
            margin-right: 5px;
            float: left;
            margin-top: 5px;
            padding: 10px 17px;
            font-weight: 600
        }

        .res-3-box .food_cats .cat_names a:nth-child(6) {
            display: none
        }

        .res-2-map-product {
            overflow: hidden
        }

        .res-2-map-product span {
            font-size: 15px;
            color: #757575;
            font-weight: 300;
        }

        .location-png .dollar-icon {
            text-align: center;
            font-size: 10px;
            width: 17px;
            height: 17px;
            border: 1px solid;
            border-radius: 50%;
            line-height: 15px;
            vertical-align: top;
            margin-top: 3px;
            margin-right: 3px;
        }


        .res-2-box ul li p {
            color: #c70909;
            font-weight: 600;
            margin-bottom: 0;
            display: contents;
            font-size: 16px
        }

        .res-2-box ul li p .fa-clock {
            margin-right: 5px;
            color: green;
            margin-left: 10px
        }

        .border-style-3 {
            text-align: center
        }

        .res-2-text {
            margin-bottom: 0;
            display: inline-block
        }

        .res-2-box .location-now {
            text-align: center
        }

        .new-stars-main {
            position: absolute;
            bottom: 10px;
            width: 100%
        }

        .new-stars-main .stars {
            float: left;
            position: relative;
            margin-left: 20px
        }

        .new-stars-main .stars i {
            font-size: 13px;
            margin-right: 3px;
            color: #999
        }

        .res-3-box .new-stars-main .stars i {
            color: #fff
        }

        .new-stars-main .stars i.starts-on {
            color: #ffb413
        }

        .new-stars-main .rating-number {
            float: right;
            position: relative;
            margin-right: 20px;
            color: #fff;
            font-size: 14px
        }

        .res-2-inner .right-2-content i {
            margin-left: 6px;
            border: 1px solid #f71735;
            border-radius: 30px;
            font-size: 12px;
            padding: 7px 8px
        }

        .border-style-3 {
            position: relative
        }

        .border-style-3::before {
            content: "";
            top: -15px;
            height: 60px;
            position: absolute;
            border-left: 1px solid #e9e9e9;
            right: 25px
        }

        .res-3-icons {
            position: absolute;
            top: 8%;
            right: 6%;
            height: 34px;
            width: 34px;
        }

        .border-style-3::after {
            content: "";
            top: -15px;
            height: 60px;
            position: absolute;
            border-left: 1px solid #e9e9e9;
            left: 25px
        }


        .res-3-box {
            position: relative;
            border-radius: 10px;
            width: 100%;
            margin-bottom: 30px;
        }

        .res-3-box:hover {
            cursor: pointer;
            transition: all .3s;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }

        .res-2-img {
            position: relative
        }

        .res-3-logo-img img {
            width: 100%;
            height: 100%;
            border-radius: 4px !important
        }

        .res-3-box .res-2-map-product img {
            width: 16px !important;
            display: inline-block !important;
            margin-right: 5px
        }

        .res-3-logo-img {
            position: absolute;
            right: 8%;
            bottom: -8%;
            width: 50px;
            height: 50px
        }

        .res-3-logo-img-container {
            position: relative;
            float: left;
            width: 50px;
            height: 50px
        }

        .res-3-star {
            position: absolute;
            bottom: -4%;
            left: 4%
        }

        .res-3-star i {
            background: #c70909;
            color: #fff;
            font-size: 14px;
            padding: 8px 9px;
            border-radius: 30px
        }

        .res-2-img .ribbon-title {
            top: 9%
        }

        .wcfmfa, .fas {

            font-weight: 900
        }

        .heading-minimal {
            text-align: center;
            margin-bottom: 55px;
            position: relative;
            z-index: 1
        }

        .heading-minimal .sub-title {
            color: #FC0;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 0;

        }

        .heading-minimal .bottom-dots {
            position: absolute;
            left: 50%;
            bottom: -10px;
            width: 100%;
            margin-left: -25px
        }

        .bottom-dots .dot {
            position: relative;
            display: block;
            float: left;
            width: 3px;
            height: 3px;
            border-right: 3px solid #FC0;
            margin-right: 3px
        }

        .seo___2UD4U .readMore___1HEqB {
            margin: 24px 0
        }

        [type=reset], [type=submit], button, html [type=button] {
            -webkit-appearance: button;
            background-color: #d7d7db
        }

        .ant-layout, .ant-layout * {
            box-sizing: border-box
        }

        .ant-btn-block {
            width: 100%
        }

        .ant-btn, .ant-btn:active, .ant-btn:focus {
            outline: 0
        }

        .ant-btn {
            line-height: 1.42857143;
            display: inline-block;
            font-weight: 700;
            text-align: center;
            touch-action: manipulation;
            cursor: pointer;
            background-image: none;
            white-space: nowrap;
            padding: 0 15px;
            font-size: 14px;
            border-radius: 6px;
            height: 48px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-transition: all .3s cubic-bezier(.645, .045, .355, 1);
            transition: all .3s cubic-bezier(.645, .045, .355, 1);
            position: relative;
            color: #676767;
            background-color: #fff;
            border: 1px solid #676767
        }

        button, select {
            text-transform: none
        }

        button, input {
            overflow: visible
        }

        button, input, optgroup, select, textarea {
            margin: 0;

            font-size: inherit;
            line-height: inherit;
            color: inherit
        }

        [role=button], a, area, button, input:not([type=range]), label, select, summary, textarea {
            touch-action: manipulation
        }

        *, :after, :before {
            box-sizing: border-box
        }

        user agent stylesheet
        button {
            appearance: auto;
            -webkit-writing-mode: horizontal-tb !important;
            text-rendering: auto;
            letter-spacing: normal;
            word-spacing: normal;
            text-transform: none;
            text-indent: 0;
            text-shadow: none;
            display: inline-block;
            text-align: center;
            align-items: flex-start;
            cursor: default;
            box-sizing: border-box;
            margin: 0;
            font: 400 13.3333px Arial;
            padding: 1px 6px;
            border-width: 2px;
            border-style: outset;
            border-image: initial
        }

        .ant-layout {
            display: -webkit-box;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column;
            -webkit-box-flex: 1;
            flex: auto;
            background: transparent
        }


        injected stylesheet:root {
            --simple-translate-main-text: #0c0c0d;
            --simple-translate-sub-text: #737373;
            --simple-translate-line: #ededf0;
            --simple-translate-button: #d7d7db;
            --simple-translate-highlight: #5595ff;
            --simple-translate-main-bg: #fff
        }

        .ant-btn:before {
            position: absolute;
            top: -1px;
            left: -1px;
            bottom: -1px;
            right: -1px;
            background: #fff;
            opacity: .35;
            content: "";
            border-radius: inherit;
            z-index: 1;
            -webkit-transition: opacity .2s;
            transition: opacity .2s;
            pointer-events: none;
            display: none
        }

        *, :after, :before {
            box-sizing: border-box
        }


        ::selection {
            background: #00b14f;
            color: #fff
        }

        .seo___2UD4U .hide___1cQi5 {
            display: none
        }

        .ant-divider-horizontal {
            display: none;
            height: 1px;
            width: 100%;
            margin: 24px 0;
            clear: both
        }

        .ant-btn:focus + .ant-divider ant-divider-horizontal {
            display: block
        }

        .background-img {
            background-image: url(https://afamilycdn.com/2019/10/12/8-15708979312971424397195.jpg);
            width: 100%;
            height: 100vh;
            background-size: cover;
            position: relative;
            transition: all .4s;
            background-repeat: no-repeat;
            background-position: 50%
        }

        .main-nav .t-home {
            border-bottom: 4px solid #00c6d7;
            color: #00c6d7;
        }
        .btn-adding {
            font-size: 20px;
            cursor: pointer;
            font-weight: 700;
            line-height: 17px;
            width: 22px;
            height: 22px;
            background-color: #00c6d7;
            text-align: center;
            color: #fff;
            display: inline-block;
            border-radius: 50%;
        }
        .btn-adding:hover {
            background-color: #09b0be;
        }
        .wrap-adding {
            width: 22px;
            height: 22px;
        }
        .wrap-adding a {
            display: inline-block;
        }
        .icon-box-text p {
            line-height: 1.6;
            font-size: 18px;
            margin-top: 0;
            margin-bottom: 1rem;
            font-weight: 500;
        }
    </style>

    <link rel="stylesheet" href="/assets/css/index-content.css">

@endsection

@section('banner')
    <div class="background-img"></div>
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12">
                <div class="heading-minimal">
                    <div class="sub-title">Top Foods</div>
                    <h3 class="head-title">Our Categories</h3>
                </div>
            </div>
            @foreach($categories as $category)
                <div class="col-xl-3 col-lg-6 col-md-6 category-items-new">
                    <div class="category-main">
                        <a href="/products?category={{$category->id}}">
                            <img
                                loading="lazy" alt="" class="cate-images"
                                src="{{$category->image}}" style="object-fit: cover;width: 100% !important;"></a>
                        <div class="category-text-box">
                            <div class="category-text-inner">
                                <a href="#">
                                    <h3>{{$category->name}}</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
                <div class="heading-minimal">
                    <div class="sub-title">TOP FOODS</div>
                </div>
            </div>

            <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
                <div class="heading-minimal">
                    <h3 class="head-title">Featured Foods</h3>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-xxl-12 col-md-12">
                <div class="row">
                    @foreach($featured as $featured_food)
                        <div class="eq-height col-xl-3 col-lg-6 col-md-6">
                            <div class="res-3-box ">
                                <div class="res-2-img parallex-new">
                                    <a href="#">
                                        <img src="{{explode(',',$featured_food->image)[0]}}" alt=""
                                             class="img-fluid">
                                    </a>
                                </div>
                                <div class="res-2-bg-white">
                                    <div class="res-2-inner">
                                        <div class="res-2-text">
                                            <a href="https://marketplace.foodotawp.com/store/arcadian-cafe/">
                                                <div class="text-s1">{{$featured_food->name}}</div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="res-2-box">
                                        <ul>
                                            <li>
                                                <div class="res-2-map-product d-flex justify-content-sm-between">
                                                <span class="location-png">
                                                    <i class="fas fa-dollar-sign dollar-icon"></i>
                                                    {{number_format($featured_food->price)}} đ
                                                </span>
                                                    <span class="location-png wrap-adding">
                                                    <a href="#">
                                                        <div class="btn-adding">+</div>
                                                    </a>
                                                </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
                <div class="heading-minimal">
                    <h3 class="head-title">Selling Foods</h3>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-xxl-12 col-md-12">
                <div class="row">
                    @if($selling)
                        @foreach($selling as $selling_food)
                            <div class="eq-height col-xl-3 col-lg-6 col-md-6">
                                <div class="res-3-box ">
                                    <div class="res-2-img parallex-new">
                                        <a href="#">
                                            <img height="200px" width="100%" style="object-fit: cover"
                                                 src="{{explode(',',$selling_food->image)[0]}}" alt="">
                                        </a>
                                    </div>
                                    <div class="res-2-bg-white">
                                        <div class="res-2-inner">
                                            <div class="res-2-text">
                                                <a href="https://marketplace.foodotawp.com/store/arcadian-cafe/">
                                                    <div class="text-s1">{{$selling_food->name}}</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="res-2-box">
                                            <ul>
                                                <li>
                                                    <div class="res-2-map-product d-flex justify-content-sm-between">
                                                        <span class="location-png">
                                                            <i class="fas fa-dollar-sign dollar-icon"></i>
                                                            {{number_format($selling_food->price)}} đ
                                                        </span>
                                                                <span class="location-png wrap-adding">
                                                            <a href="#">
                                                                <div class="btn-adding">+</div>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @endif
                </div>
            </div>

            <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
                <div class="heading-minimal">
                    <h3 class="head-title">New Foods</h3>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-xxl-12 col-md-12">
                <div class="row">
                    @foreach($new as $new_food)
                        <div class="eq-height col-xl-3 col-lg-6 col-md-6">
                            <div class="res-3-box ">
                                <div class="res-2-img parallex-new">
                                    <a href="#">
                                        <img height="200px" width="100%" style="object-fit: cover"
                                             src="{{explode(',',$new_food->image)[0]}}" alt="">
                                    </a>
                                </div>
                                <div class="res-2-bg-white">
                                    <div class="res-2-inner">
                                        <div class="res-2-text">
                                            <a href="https://marketplace.foodotawp.com/store/arcadian-cafe/">
                                                <div class="text-s1">{{$new_food->name}}</div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="res-2-box">
                                        <ul>
                                            <li>
                                                <div class="res-2-map-product d-flex justify-content-sm-between">
                                                <span class="location-png">
                                                    <i class="fas fa-dollar-sign dollar-icon"></i>
                                                    {{number_format($new_food->price)}} đ
                                                </span>
                                                    <span class="location-png wrap-adding">
                                                    <a href="#">
                                                        <div class="btn-adding">+</div>
                                                    </a>
                                                </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="row my-5">
            <div class="col-4">
                <div class="icon-box-img mb-4" style="width: 99px; margin: 0 auto">
                    <i class="fas fa-hand-holding-heart fa-5x"></i>
                </div>
                <div class="icon-box-text">
                    <h4 style="text-align: center;">Sản phẩm chất lượng, an toàn</h4>
                    <p style="text-align: center;">Tất cả các mặt hàng Comchay bán đều là những sản phẩm chất lượng,an
                        toàn và có nguồn gốc xuất xứ rõ ràng.</p>
                    <p style="text-align: center;">Comchay hiểu rằng chất lượng và tốt cho sức khỏe là yếu tố hàng đầu
                        khi khách hàng lựa chọn thực phẩm chay.</p>
                    <p style="text-align: center;">Comchay có những tiêu chuẩn chất lượng nghiêm ngặt nhất để cung cấp
                        các sản phẩm chất lượng.</p>
                </div>
            </div>
            <div class="col-4" style="border-left: 1px solid #ececec;">
                <div class="icon-box-img mb-4" style="width: 99px; margin: 0 auto">
                    <i class="fas fa-check fa-5x"></i>
                </div>
                <div class="icon-box-text last-reset text-center">
                    <h4>Dịch vụ ưu đãi tốt nhất, đổi trả miễn phí.</h4>
                    <p>Comchay luôn nỗ lực mang đến một dịch vụ ưu đãi tốt nhất cho khách hàng.</p>
                    <p>Chúng tôi cam kết hoàn tiền đổi trả hàng miễn phí với bất kỳ lý do gì.</p>
                    <p>Comchay hỗ trợ vận chuyển tận nhà cho các khàng hàng.</p>
                </div>
            </div>
            <div class="col-4" style="border-left: 1px solid #ececec;">
                <div class="icon-box-img mb-4" style="width: 99px; margin: 0 auto">
                    <i class="fas fa-piggy-bank fa-5x"></i>
                </div>
                <div class="icon-box-text last-reset text-center">
                    <h4>Khuyến mãi, tặng quà và giảm giá để tri ân</h4>
                    <p>Comchay luôn mong muốn khách hàng được thưởng thức nhiều hơn và tiết kiệm hơn khi đi mua sắm thực
                        phẩm chay.</p>
                    <p>Comchay thường xuyên khuyến mãi, tặng quà và giảm giá để tri ân tất cả khách hàng kính yêu của
                        mình.</p>
                </div>
            </div>
        </div>
    </section>

@endsection



@section('custom_js')
    <script>
        var elements = document.querySelectorAll('.ant-btn-block .ant-divider-horizontal');

        show(elements, 'inline-block'); // The second param allows you to specify a display value

        show(document.getElementById('hidden-input'));

        function show(elements, specifiedDisplay) {
            elements = elements.length ? elements : [elements];
            for (var index = 0; index < elements.length; index++) {
                elements[index].style.display = specifiedDisplay || 'block';
            }
        }
    </script>
@endsection
