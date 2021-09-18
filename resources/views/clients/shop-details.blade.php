@extends('clients.master')
@section('title')
    {{$product->name}}
@endsection
@section('custom_css')
    <style>


        img {
            max-width: 100%;
        }

        .preview {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        @media screen and (max-width: 996px) {
            .preview {
                margin-bottom: 20px;
            }
        }

        .preview-pic {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .preview-thumbnail.nav-tabs {
            border: none;
            margin-top: 15px;
        }

        .preview-thumbnail.nav-tabs li {
            width: 18%;
            margin-right: 2.5%;
        }

        .preview-thumbnail.nav-tabs li img {
            max-width: 100%;
            margin-bottom: 45px;
            display: block;
        }

        .preview-thumbnail.nav-tabs li a {
            padding: 0;
            margin: 0;
            cursor: pointer;
        }

        .preview-thumbnail.nav-tabs li:last-of-type {
            margin-right: 0;
        }

        .tab-content {
            overflow: hidden;
        }

        .tab-content img {
            width: 100%;
            -webkit-animation-name: opacity;
            animation-name: opacity;
            -webkit-animation-duration: .3s;
            animation-duration: .3s;
        }

        .card {
            margin: 90px 0 90px 0;
            background: #eee;
            padding: 3em;
            line-height: 1.5em;

        }

        @media screen and (min-width: 997px) {
            .wrapper {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
            }
        }

        .details {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .colors {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        .product-title, .price, .sizes, .colors {
            text-transform: UPPERCASE;
            font-weight: bold;
        }

        .checked, .price span {
            color: #dbcc8f;
        }
        .copy-right-item a, span {
            color: #6c757d;
        }

        .product-title, .rating, .product-description, .price, .vote, .sizes {
            margin-bottom: 15px;
        }

        .product-title {
            margin-top: 0;
        }

        .size {
            margin-right: 10px;
        }

        .size:first-of-type {
            margin-left: 40px;
        }

        .color {
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
            height: 2em;
            width: 2em;
            border-radius: 2px;
        }

        .color:first-of-type {
            margin-left: 20px;
        }

        .add-to-cart, .like {
            background: #00c6d7;
            padding: 1.2em 1.5em;
            border: none;
            text-transform: UPPERCASE;
            font-weight: bold;
            color: #fff;
            text-decoration: none;
            -webkit-transition: background .3s ease;
            transition: background .3s ease;
        }

        .add-to-cart:hover, .like:hover {
            background: #00c6d7;
            color: #fff;
            text-decoration: none;
        }

        .not-available {
            text-align: center;
            line-height: 2em;
        }

        .not-available:before {
            font-family: fontawesome;
            content: "\f00d";
            color: #fff;
        }

        .orange {
            background: #00c6d7;
        }

        .green {
            background: #85ad00;
        }

        .blue {
            background: #0076ad;
        }

        .tooltip-inner {
            padding: 1.3em;
        }

        @-webkit-keyframes opacity {
            0% {
                opacity: 0;
                -webkit-transform: scale(3);
                transform: scale(3);
            }
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes opacity {
            0% {
                opacity: 0;
                -webkit-transform: scale(3);
                transform: scale(3);
            }
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        .product__details__cart__option .quantity .pro-qty .qtybtn {
            font-size: 18px;
            color: #0d0d0d;
            position: absolute;
            right: 15px;
            top: 3px;
            height: 10px;
            width: 10px;
            cursor: pointer;
            font-weight: 600;
        }

        .product__details__cart__option .quantity .pro-qty {
            width: 100px;
            height: 40px;
            border: 1px solid #e5e5e5;
            position: relative;
        }

        .product__details__cart__option .quantity .pro-qty input {
            color: #00c6d7;
            font-size: 15px;
            font-weight: 700;
            width: 70px;
            height: 100%;
            text-align: center;
            border: none;
        }

        .product__details__cart__option .quantity .pro-qty .qtybtn.inc {
            top: 16px;
        }

        .product__details__cart__option .quantity .pro-qty .qtybtn {
            font-size: 18px;
            color: #00c6d7;
            position: absolute;
            right: 15px;
            top: 3px;
            height: 10px;
            width: 10px;
            cursor: pointer;
            font-weight: 600;
        }

        .fa fa-angle-up dec qtybtn {
            width: 10px;
        }

        .pro-qty input {
            width: 100px;
        }

        .product__details__tab {
            padding-top: 80px;
            margin-bottom: 65px;
        }

        .nav {
            border-bottom: none;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            position: relative;
            margin-bottom: 40px;
        }

        .nav::before {
            position: absolute;
            left: 0;
            top: 13px;
            height: 1px;
            width: 335px;
            /*background: #e1e1e1;*/
            content: "";
        }

        .nav::after {
            position: absolute;
            right: 0;
            top: 13px;
            height: 1px;
            width: 335px;
            /*background: #e1e1e1;*/
            content: "";
        }

        .nav-item {
            margin-right: 46px;
        }

        .nav-item:last-child {
            margin-right: 0;
        }

        .nav-item .nav-link {
            font-size: 18px;
            color: #666666;
            border-radius: inherit ;
            font-weight: 600;
            border: none;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            padding: 0;
        }

        .nav-item .nav-link.active {
            color: #111111;
            border: 1px solid #00c6d7 ;
            border-radius: 15px;
            background-color:#00c6d7 ;
        }

        .tab-content .tab-pane h6 {
            color: #666666;
            font-weight: 600;
            margin-bottom: 24px;
        }

        .tab-content .tab-pane p:last-child {
            margin-bottom: 0;
        }

        .related__title h5 {
            font-size: 20px;
            color: #111111;
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 35px;
        }
        .review {
            width: 100%;
            margin-bottom: 30px;
            display: block;
            float: left;
        }
        review .desc h4 span:first-child {
            font-size: 16px;
        }
        .review .desc h4 span {
            width: 49%;
            font-size: 16px;
            display: inline-block;
        }
        .review .desc h4 span:last-child {
            font-size: 12px;
            color: #b3b3b3;
        }
        .text-right {
            text-align: right !important;
        }
        .review .user-img {
            width: 80px;
            height: 80px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            border-radius: 50%;
            float: left;
        }
        .hero-wrap, .img, .blog-img, .user-img {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }
        .review .desc .star i {
            color: #dbcc8f;
        }
        p {
            margin-top: 0;
            margin-bottom: 1rem;
        }
        .woocommerce #review_form #respond .form-submit {
            margin-bottom: 0;
        }
        .woocommerce #review_form #respond p {
            margin: 0 0 30px;
            line-height: 1;
        }
        .woocommerce #review_form #respond p {
            margin: 0 0 10px;
        }
        .woocommerce #review_form #respond .form-submit input {
            max-width: 220px;
        }
        .woocommerce #review_form #respond .form-submit input {
            left: auto;
        }
        .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button .woocommerce-mini-cart__buttons #respond input#submit, .woocommerce-mini-cart__buttons a.button, .woocommerce-mini-cart__buttons button.button, .woocommerce-mini-cart__buttons input.button {
            margin: 0;
            padding: 0 30px;
            position: relative;
            overflow: hidden;
            text-transform: uppercase;
            font-size: 12px;
            display: inline-block;
            letter-spacing: 2px;
            font-weight: 800;
            margin-right: 15px;
            margin-bottom: 10px;
            background: #f39c12;
            color: #20202a;
            height: 50px;
            line-height: 54px;
            text-align: center;
            transition: .4s ease-in-out;
            border: none;
            outline: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button {
            font-size: 100%;
            margin: 0;
            line-height: 1;
            cursor: pointer;
            position: relative;
            text-decoration: none;
            overflow: visible;
            padding: .618em 1em;
            font-weight: 700;
            border-radius: 3px;
            left: auto;
            color: #515151;
            background-color: #ebe9eb;
            border: 0;
            display: inline-block;
            background-image: none;
            box-shadow: none;
            text-shadow: none;
        }
        .woocommerce input {
            margin-bottom: 0;
            height: 50px;
            border-radius: 5px;
            padding: 0 30px;
            background-color: #fff;
        }

        element.style {
        }
        .woocommerce #review_form #respond .form-submit input {
            max-width: 220px;
        }
        .woocommerce #review_form #respond .form-submit input {
            left: auto;
        }
        .woocommerce input {
            margin-bottom: 0;
            height: 50px;
            border-radius: 5px;
            padding: 0 30px;
            background-color: #fff;
        }

    </style>
@endsection

@section('banner')
@endsection


@section('content')
    <div class="container">
        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">
                        <div class="preview-pic tab-content">
                            <div class="tab-pane active" id="pic-0"><img
                                    src="{{explode(',',$product->image)[0]}}"
                                    alt="#" width="100%" height="400px" style="object-fit: cover">
                            </div>
                            @for($i = 1; $i < count(explode(',',$product->image)); $i++)
                            <div class="tab-pane" id="pic-{{$i}}"><img
                                    src="{{explode(',',$product->image)[$i]}}"
                                    alt="#" width="100%" height="400px" style="object-fit: cover">
                            </div>
                            @endfor
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                            <li class="active"><a data-target="#pic-0" data-toggle="tab">
                                    <img
                                        src="{{explode(',',$product->image)[0]}}"
                                        alt="#" width="100%" height="73px" style="object-fit: cover"></a>
                            </li>
                            @for($i = 1; $i < count(explode(',',$product->image)); $i++)
                            <li class="{{explode(',',$product->image)[0] ? 'active' : ''}}"><a data-target="#pic-{{$i}}" data-toggle="tab">
                                    <img
                                        src="{{explode(',',$product->image)[$i]}}"
                                        alt="#" width="100%" height="73px" style="object-fit: cover"></a>
                            </li>
                            @endfor
                        </ul>
                    </div>
                    <div class="col-md-6 details">
                           <h3 class="product-title">{{$product->name}}</h3>
                           <p class="product-description">{!! html_entity_decode($product->description) !!}</p>
                           <h4 class="price">Giá: {{number_format($product->price)}} đ</h4>
                           <div class="action"><a href="#" target="_blank">
                                   <button class="add-to-cart btn btn-default" type="button">add to cart <i class="fas fa-cart-arrow-down"></i></button>
                               </a> <a href="#" target="_blank">
                               </a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom_js')
@endsection
