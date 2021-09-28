@extends('clients.master')
@section('title')
    Giới thiệu về comchay
@endsection
@section('custom_css')
    <style>
        body {
            background-color: #FFFFFF;
        }

        img {
            height: auto;
            max-width: 100%;
        }

        ul, ol {
            list-style: outside none none;
        }

        ul {
            margin: 0;
            padding: 0;
        }

        img {
            transform-style: preserve-3d;
        }

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

        /* Mobile Media */
        /* Extra small devices (portrait phones, less than 576px) */
        @media (max-width: 575.98px) {
            span.title-thank {
                font-size: 40px;
                font-weight: 500;
            }
            i.icon-check {
                font-size: 45px;
            }
            div.p-thank p {
                font-size: 15px;
            }

        }

        /* Small devices (landscape phones, 576px and up) */
        @media (min-width: 576px) and (max-width: 767.98px) {
            span.title-thank {
                font-size: 50px;
                font-weight: 500;
            }
            i.icon-check {
                font-size: 60px;
            }
        }

        /* Medium devices (tablets, 768px and up) */
        @media (min-width: 768px) and (max-width: 991.98px) {
            span.title-thank {
                font-size: 50px;
                font-weight: 500;
            }
            i.icon-check {
                font-size: 60px;
            }
        }

        /* Large devices (desktops, 992px and up) */
        @media (min-width: 992px) and (max-width: 1199.98px) {

        }

        /* Extra large devices (large desktops, 1200px and up) */
        @media (min-width: 1200px) {
        }

        .icon-check {
            font-size: 85px;
            color: #4CBB17;
        }

        .title-thank {
            font-size: 65px;
            font-weight: 700;
            color: #0c0b0f;
        }
        .p-thank {
            font-size: 20px;
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
        .wrap-btn-back {
            height: 40px;
            border-radius: 20px;
            background-color: #00c6d7;
            width: 200px;
            margin: 0 auto;
        }
    </style>
@endsection

@section('banner')

@endsection


@section('content')
    <div class="wrap-title-thank text-center mt-5">
        <span class="title-thank">Thank You!</span>
    </div>
    <div class="wrap-icon my-3">
        <div class="wrap-thank text-center">
            <i class="fas fa-check icon-check"></i>
        </div>
    </div>
    <div class="p-thank text-center">
        <p class="m-0">Chân thành cảm ơn bạn đã ủng hộ món ăn của chúng tôi.</p>
        <p class="m-0">Chúc bạn thật nhiều sức khoẻ và niềm vui</p>
    </div>
    <div class="back-home text-center mt-4 mb-5">
        <div class="wrap-btn-back d-flex align-self-center justify-content-center">
            <i class="fas fa-long-arrow-alt-left d-flex align-self-center"></i>
            <a class="btn-back-home" href="{{route('index')}}">Tiếp tục mua sắm</a>
        </div>
    </div>

@endsection



@section('custom_js')
@endsection
