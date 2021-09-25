<!doctype html>
<html lang="en">
<head>
    @include('admin.components.head')
    <title>
        Template Admin @yield('title')
    </title>
    @yield('custom_css')
</head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    @include('admin.components.header')
    <div class="app-main">
        @include('admin.components.sidebar')
        <div class="app-main__outer">
            <div class="app-main__inner">
                <div class="container">
                    @yield('content')
                </div>
            </div>
            @include('admin.components.footer')
        </div>
    </div>
</div>
@include('admin.components.script')
@yield('custom_js')
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "103283908788356");
    chatbox.setAttribute("attribution", "biz_inbox");

    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v12.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
</body>
</html>
