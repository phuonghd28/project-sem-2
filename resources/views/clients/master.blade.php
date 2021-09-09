<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/index.css">
    @yield('custom_css')
    <title>@yield('title')</title>
</head>
<body>
<div class="main">
    <!-- Header -->
    <header class="header-main position-fixed">
        <div class="container">
            <div class="row header-height">
                <!-- Logo -->
                <div class="col-lg-2 col-sm-3 col-3 align-self-center">
                    <div class="logo">
                        <a href="#">
                            <img style="width: 100%;" src="">
                            LOGO
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-9 order-lg-3 align-self-center">
                    <div class="d-flex justify-content-end">
                        <div class="shopping-cart d-flex justify-content-center">
                            <div class="align-self-center">
                                <a class="color-cart" href="#"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="wrap-log-in d-flex ml-3">
                            <div class="log-in px-3 align-self-center">
                                @if(\Illuminate\Support\Facades\Auth::check())
                                    <a class="color-cart"><b style="font-size: 14px">{{\Illuminate\Support\Facades\Auth::user()->username}}</b></a>
                                @else
                                    <button style="background: none;border: none" type="button" class="btn-account" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <a class="color-cart"><b style="font-size: 14px">Đăng ký</b></a>
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="banner">
        @yield('banner')
    </div>
    <div class="modal fade" id="exampleModal" tabindex="10" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="border: none;padding: 0;position: relative">
                    <button style="background: none;border: none; color: #8c8c8c" type="button"
                            class="close d-flex align-items-center justify-content-center" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="form-login" id="form-account">
                    @if(session('error-login'))
                        <div class="text-danger" style="font-weight: bold; margin-bottom: 10px;">
                            {{session('error-login')}}
                        </div>
                    @endif
                    <div class="heading text-center pb-3">
                        <span onclick="login()" class="mb-2">Đăng nhập</span>
                        <span onclick="register()" class="mb-2">Đăng kí</span>
                        <hr id="indicator">
                    </div>
                    <form id="log-form" action="{{route('login')}}" method="post">
                        @csrf
                        <div class="input-user-name mb-4">
                            <input class="user-name" type="text" placeholder="Tên người dùng" name="username">
                            <div class="icon-w3">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="input-pass mb-4">
                            <input class="pass" type="password" placeholder="Mật khẩu" name="password">
                            <div class="icon-w3">
                                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                            </div>
                        </div>
                        <button class="btn btn-login mt-2 pb-2"><b>Đăng nhập</b></button>
                    </form>
                    <form id="reg-form" action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="input-user-name d-flex m-0 mb-4">
                            <input style="margin-right: 18px" class="user-name input-form-reg d-inline-block"
                                   type="text"
                                   placeholder="First Name" name="first_name">
                            <input type="text" class="justify-content-end pass d-inline-block input-form-reg"
                                   placeholder="Last Name" name="last_name">
                        </div>
                        <div class="input-pass mb-4">
                            <input class="pass" type="text" placeholder="Address" name="address">
                        </div>
                        <div class="input-user-name d-flex m-0 mb-4">
                            <input style="margin-right: 18px" class="input-form-reg user-name d-inline-block"
                                   type="text"
                                   placeholder="User name" name="username">
                            <input type="text" class="input-form-reg justify-content-end pass d-inline-block"
                                   placeholder="Phone" name="phone">
                        </div>
                        <div class="input-pass mb-4">
                            <input class="pass" type="text" placeholder="Email" name="email">
                        </div>
                        <div class="input-user-name d-flex m-0 mb-4">
                            <input style="margin-right: 18px" class="input-form-reg user-name d-inline-block"
                                   type="password" placeholder="Password" name="password">
                            <input class="input-form-reg justify-content-end pass d-inline-block" type="password"
                                   placeholder="Re-password" name="password_confirmation">
                        </div>
                        <button class="btn btn-login mt-2 pb-2"><b>Đăng ký</b></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
    <footer>
        <div class="footer">
            <div class="container py-3">
                <div class="logo-footer row">
                    <a class="col-lg-2 mt-3 " href="#">
                        <img class="img-footer" src="/assets/images/coollogo_com-1065994.png" alt="">
                    </a>
                </div>
                <div class="divider my-4"></div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="link-item">
                            <a href="#">Về Cơm Chay</a>
                        </div>
                        <div class="link-item">
                            <a href="#">Blog</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="link-item">
                            <a href="#">Trung tâm hỗ trợ</a>
                        </div>
                        <div class="link-item">
                            <a href="#">Câu hỏi thường gặp</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="link-item">
                            <a href="#" class="mr-2"><i class="icon-footer fab fa-facebook-square"></i></a>
                            <a href="#" class="mx-2"><i class="icon-footer fab fa-instagram"></i></a>
                            <a href="#" class="mx-2"><i class="icon-footer fab fa-twitter-square"></i></a>
                        </div>
                    </div>
                </div>
                <div class="divider my-4"></div>
                <div class="d-flex mb-3 justify-content-center">
                    <div class="and-copyright d-flex ">
                        <div class="copy-right mr-5">© 2021 Cơm Chay</div>
                        <div class="copy-right-item">
                            <a href="#">Câu hỏi thường gặp</a>
                            <span class="mx-1">•</span>
                            <a href="#">Chính sách bảo mật</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
@yield('custom_js')
</body>
</html>
