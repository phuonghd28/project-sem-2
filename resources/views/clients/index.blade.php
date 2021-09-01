@extends('clients.master')
@section('title')

@endsection
@section('custom_css')
    <style>
        .background-img {
            background-image: url("https://afamilycdn.com/2019/10/12/8-15708979312971424397195.jpg");
            width: 100%;
            height: 100vh;
            background-size: cover;
            position: relative;
            background-repeat: no-repeat;
            background-position: 50%;
        }

        .form-login {
            width: 360px;
            position: absolute;
            bottom: 40px;
            padding: 35px 24px 35px;
            margin-left: 118px;
            box-shadow: 0 6px 12px 0 rgb(0 0 0 / 40%);
            background: white;
        }
        .btn-login {
            width: 100%;
            background-color: #00c6d7;
            color: #ffffff;
            border-radius: 0;
            height: 48px;
            transition: all .2s cubic-bezier(.645,.045,.355,1);
        }
        .btn-login:hover {
            color: white;
            background-color: #00E5EE;
            box-shadow: none;
            outline: none;
        }
        .btn-login:active {
            box-shadow: none;
            outline: none;
        }
        .btn:active,
        .btn:focus,
        .btn.active {
            background-image: none;
            outline: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        .input-user-name, .input-pass {
            padding: 0;
            border: 0;
            vertical-align: baseline;
            width: 100%;
            outline: none;
            transition: all .3s cubic-bezier(.645,.045,.355,1);
            position: relative;
        }
        .user-name,.pass {
            background: none;
            padding: 15px 66px 15px 19px;
            text-align: left;
            border: 0;
            border-left: 2px solid #00c6d7;
            font-size: 15px;
            letter-spacing: 1.5px;
            outline: 0;
            width: 75%;
            -webkit-box-shadow: 0 6px 12px 0 rgb(37 37 37);
            -moz-box-shadow: 0 6px 12px 0 rgb(37, 37, 37);
            box-shadow: 0 6px 12px 0 rgb(0 0 0 / 20%);
        }
        .heading {
            font-size: 1.5rem;
            line-height: 1.33333333;
            font-weight: 500;
        }
        .icon-w3 {
            right: 0;
            bottom: 0;
            width: 53px;
            height: 52px;
            display: inline-block;
            position: absolute;
            text-align: center;
            background: #00c6d7;
        }
        .icon-w3 i {
            color: #ffffff;
            font-size: 19px;
            line-height: 49px;
        }
    </style>
@endsection

@section('banner')
<div class="background-img"></div>
    <div class="form-login">
        <div class="heading text-center pb-4">Đăng nhập</div>
        <form action="#">
            <div class="input-user-name mb-4">
                <input class="user-name" type="text" placeholder="Tên người dùng">
                <div class="icon-w3">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>
            </div>
            <div class="input-pass mb-4">
                <input class="pass" type="password" placeholder="Mật khẩu">
                <div class="icon-w3">
                    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                </div>
            </div>
        </form>
        <button class="btn btn-login mt-2 pb-2"><b>Đăng nhập</b></button>
    </div>
@endsection

@section('content')

@endsection

@section('custom_js')
    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop()) {
                    $('header').addClass('sticky')
                } else {
                    $('header').removeClass('sticky')
                }
            })
        })
    </script>
@endsection
