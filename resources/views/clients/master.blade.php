<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @yield('custom_css')
    <title>@yield('title')</title>
</head>
<body>
<div class="main">
    <!-- Header -->
    <header id="myHeader" class="header-main">
        <div class="container">
            <div class="row header-height">
                <!-- Logo -->
                <div class="col-lg-2 col-sm-3 col-3 align-self-center">
                    <div class="logo">
                        <a href="#">
                            <img style="width: 100%;" src="https://chaysach.com/wp-content/uploads/2017/02/logo.jpg">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-9 order-lg-3 align-self-center">
                    <div class="d-flex justify-content-end">
                        <div class="main-nav col d-lex align-self-center">
                            <a class="nav-item active t-home" href="{{ route('index') }}">Home</a>
                            <a class="nav-item t-product" href="{{route('products')}}">Product</a>
                            <a class="nav-item t-blog" href="{{route('blog')}}">Blog</a>
                            <a class="nav-item t-abouts" href="{{route('abouts')}}">Abouts</a>
                            <a class="nav-item t-contact" href="{{route('contact')}}">Contact</a>

                        </div>
                        <div class="shopping-cart d-flex justify-content-center">
                            <div class="align-self-center">
                                <a class="color-cart" href="{{route('listCart')}}"><i
                                        class="fas fa-shopping-cart"> {{\Gloudemans\Shoppingcart\Facades\Cart::content()->count()}}</i></a>
                            </div>
                        </div>
                        <div class="wrap-log-in d-flex">
                            <div class="log-in align-self-center">
                                @if(\Illuminate\Support\Facades\Auth::check())
                                    <button class="dropdown-toggle"
                                            style="background: none;border: none; padding: 10px 14px;" type="button"
                                            role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                        <a class="color-cart" >
                                            <b style="font-size: 14px">{{\Illuminate\Support\Facades\Auth::user()->username}}</b>
                                        </a>
                                    </button>


                                    <div class="dropdown-menu p-0" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="/"><i class="far fa-user ic-user mr-2"></i>Tài
                                            khoản</a>
                                        <a class="dropdown-item border-0" href="{{route('logout')}}"><i
                                                class="fas fa-power-off mr-2 ic-logout"></i>Đăng xuất</a>
                                    </div>
                                @else
                                    <button style="background: none;border: none; padding: 10px 14px;" type="button"
                                            class="btn-account" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <a class="color-cart"><b style="font-size: 14px;display: flex">Đăng nhập</b></a>
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
                    <button style="font-size:30px; background: none;border: none; color: #8c8c8c" type="button"
                            class="close d-flex align-items-center justify-content-center" data-bs-dismiss="modal"
                            aria-label="Close">
                        &times;
                    </button>
                </div>
                <div class="form-login" id="form-account">
                    @if(session('error-login'))
                        <div class="text-danger" style="margin-bottom: 5px;">
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
                            @error('username')
                            <div class="text-danger my-2"> * {{$message}}</div>
                            @enderror
                        </div>

                        <div class="input-pass mb-4">
                            <input class="pass" type="password" placeholder="Mật khẩu" name="password">
                            <div class="icon-w3">
                                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                            </div>
                            @error('password')
                            <div class="text-danger my-2"> * {{$message}}</div>
                            @enderror
                        </div>
                        <button class="btn-login mt-2"><b>Đăng nhập</b></button>
                    </form>
                    <form id="reg-form" action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="input-user-name d-flex m-0 mb-4">
                            <input style="margin-right: 18px" class="user-name input-form-reg d-inline-block"
                                   type="text" placeholder="First Name" name="first_name">
                            @error('first_name')
                            <div class="text-danger my-2"> * {{$message}}</div>
                            @enderror
                            <input type="text" class="justify-content-end pass d-inline-block input-form-reg"
                                   placeholder="Last Name" name="last_name">
                            @error('first_name')
                            <div class="text-danger my-2"> * {{$message}}</div>
                            @enderror
                        </div>
                        <div class="input-pass mb-4">
                            <input class="pass" type="text" placeholder="Address" name="address">
                            @error('first_name')
                            <div class="text-danger my-2"> * {{$message}}</div>
                            @enderror
                        </div>
                        <div class="input-user-name d-flex m-0 mb-4">
                            <input style="margin-right: 18px" class="input-form-reg user-name d-inline-block"
                                   type="text"
                                   placeholder="User name" name="username">
                            @error('first_name')
                            <div class="text-danger my-2"> * {{$message}}</div>
                            @enderror
                            <input type="text" class="input-form-reg justify-content-end pass d-inline-block"
                                   placeholder="Phone" name="phone">
                            @error('first_name')
                            <div class="text-danger my-2"> * {{$message}}</div>
                            @enderror
                        </div>
                        <div class="input-pass mb-4">
                            <input class="pass" type="text" placeholder="Email" name="email">
                            @error('first_name')
                            <div class="text-danger my-2"> * {{$message}}</div>
                            @enderror
                        </div>
                        <div class="input-user-name d-flex m-0 mb-4">
                            <input style="margin-right: 18px" class="input-form-reg user-name d-inline-block"
                                   type="password" placeholder="Password" name="password">
                            @error('first_name')
                            <div class="text-danger my-2"> * {{$message}}</div>
                            @enderror
                            <input class="input-form-reg justify-content-end pass d-inline-block" type="password"
                                   placeholder="Re-password" name="password_confirmation">
                            @error('first_name')
                            <div class="text-danger my-2"> * {{$message}}</div>
                            @enderror
                        </div>
                        <button class="btn-login mt-2"><b>Đăng ký</b></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
    <footer class="text-center" style="background-color: #0b0c10;color: #c5c6c7">
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <div class="row pt-5 wrap-footer">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h5 class="fw-bold mb-4 logo">
                            <a href="{{route('index')}}">
                                <img style="width: 110px;margin-right: 20px" src="https://chaysach.com/wp-content/uploads/2017/02/logo.jpg">
                            </a>
                            Về Com Chay
                        </h5>
                        <p>Thực phẩm chay, sạch, ngon, thuần chay.</p>
                        <p>Đảm bảo vệ sinh an toàn thực phẩm.</p>
                        <p>Dịch vụ tốt nhất.</p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h5 class="fw-bold mb-4">
                            Danh sách
                        </h5>
                        <p>
                            <a href="#" class="text-reset">Đồ chay hàng ngày</a>
                        </p>
                        <p>
                            <a href="#" class="text-reset">Bánh chay</a>
                        </p>
                        <p>
                            <a href="#" class="text-reset">Rau củ</a>
                        </p>
                        <p>
                            <a href="#" class="text-reset">Giả mặn</a>
                        </p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 support-link">
                        <h5 class="fw-bold mb-4">
                            Hỗ trợ
                        </h5>
                        <p>
                            <a href="{{route('abouts')}}" class="text-reset">About</a>
                        </p>
                        <p>
                            <a href="{{route('contact')}}" class="text-reset">Contact</a>
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h5 class="fw-bold mb-4">
                            Liên hệ
                        </h5>
                        <p><i class="fas fa-home me-3"></i>Số 8 Tôn Thất Thuyết, HN</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            comchay@gmail.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 84 567 999 999</p>
                        <p><i class="fas fa-print me-3"></i> + 84 345 686 868</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="text-center p-4" style="background-color: #1f2833;color: #45A29E">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="{{route('index')}}">Comchay</a>
        </div>
    </footer>
</div>
<script src="assets/scripts/index.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
@yield('custom_js')
</body>
</html>
