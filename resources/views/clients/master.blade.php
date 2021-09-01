<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/index.css">
    @yield('custom_css')
    <title>@yield('title')</title>
</head>
<body>
<div class="main" style="height: 2000px">
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
                                <a class="color-cart" href="#"><b style="font-size: 14px">Đăng kí</b></a>
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
    <div class="container">
        @yield('content')
    </div>
    <footer></footer>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@yield('custom_js')
</body>
</html>
