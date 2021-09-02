@extends('clients.master')
@section('title')

@endsection
@section('custom_css')
    <style>
        body {
            background: #FFF;
            font-family: 'Nunito', sans-serif;
            font-size: 16px;
            line-height: 1.8;
            font-weight: 400;
            -webkit-text-size-adjust: 100%;
            -webkit-overflow-scrolling: touch;
            color: #757575;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden
        }

        h1, h2, h3, h4, h5, h6 {
            position: relative;
            margin: 0;
            margin-bottom: 0;
            color: #231900;
            text-decoration: none;
            font-weight: 700;
            line-height: 1.5;
            font-family: 'Montserrat', sans-serif;
            clear: both;
            /*text-align: center*/
        }

        a {
            color: #0d6efd;
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
            bottom: 40px;
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
            background-color: #fff
        }

        .res-2-img {
            overflow: hidden;
            position: relative
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

        .res-2-text .text-s1 {
            font-size: 24px;
            margin-bottom: 10px;
            text-transform: capitalize;
            color: #071c1f;
            font-weight: 700
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
            padding: 15px 20px
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

        .res-3-box ul li a {
            font-size: 18px;
            color: #757575;
            vertical-align: super
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
            font-size: 16px;
            color: #757575
        }

        .res-2-map-product span.location-png {
            margin-left: 10px
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

        /*.res-2-inner {*/
        /*    padding: 20px*/
        /*}*/

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
            right: 6%
        }

        .border-style-3::after {
            content: "";
            top: -15px;
            height: 60px;
            position: absolute;
            border-left: 1px solid #e9e9e9;
            left: 25px
        }

        .res-3-icons i {
            background-color: #fff;
            border-radius: 25px;
            padding: 10px;
            font-size: 14px;
            color: #757575;
            line-height: 13px
        }

        .res-3-icons i.fa-heart {
            color: #757575;
            cursor: pointer
        }

        .res-3-icons i.fa-heart:hover, .res-3-icons i.fa-heart.favorite {
            color: #07c750
        }

        .res-3-box {
            position: relative;
            border: 1px solid #f3f5ff;
            width: 100%;
            margin-bottom: 30px;
            background: #fff
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
            font-family: 'Font Awesome 5 Free', serif;
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
            font-family: 'Montserrat', sans-serif
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
            margin: 24px 0;
        }

        [type=reset], [type=submit], button, html [type=button] {
            -webkit-appearance: button;
            background-color: #d7d7db;
        }

        .ant-layout, .ant-layout * {
            box-sizing: border-box;
        }

        .ant-btn-block {
            width: 100%;
        }

        .ant-btn, .ant-btn:active, .ant-btn:focus {
            outline: 0;
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
            border: 1px solid #676767;
        }

        button, select {
            text-transform: none;
        }

        button, input {
            overflow: visible;
        }

        button, input, optgroup, select, textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
            color: inherit;
        }

        [role=button], a, area, button, input:not([type=range]), label, select, summary, textarea {
            touch-action: manipulation;
        }

        *, :after, :before {
            box-sizing: border-box;
        }

        user agent stylesheet
        button {
            appearance: auto;
            -webkit-writing-mode: horizontal-tb !important;
            text-rendering: auto;
            letter-spacing: normal;
            word-spacing: normal;
            text-transform: none;
            text-indent: 0px;
            text-shadow: none;
            display: inline-block;
            text-align: center;
            align-items: flex-start;
            cursor: default;
            box-sizing: border-box;
            margin: 0em;
            font: 400 13.3333px Arial;
            padding: 1px 6px;
            border-width: 2px;
            border-style: outset;
            border-image: initial;
        }

        .ant-layout {
            display: -webkit-box;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column;
            -webkit-box-flex: 1;
            flex: auto;
            background: transparent;
        }

        body {
            margin: 0;
            font-family: SanomatGrabApp, -apple-system, BlinkMacSystemFont, Segoe UI, PingFang SC, Hiragino Sans GB, Microsoft YaHei, Helvetica Neue, Helvetica, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;
            font-size: 14px;
            font-variant: tabular-nums;
            line-height: 1.42857143;
            color: #1c1c1c;
            background-color: #fff;
        }

        injected stylesheet
        :root {
            --simple-translate-main-text: #0c0c0d;
            --simple-translate-sub-text: #737373;
            --simple-translate-line: #ededf0;
            --simple-translate-button: #d7d7db;
            --simple-translate-highlight: #5595ff;
            --simple-translate-main-bg: #ffffff;
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
            display: none;
        }

        *, :after, :before {
            box-sizing: border-box;
        }

        *, :after, :before {
            box-sizing: border-box;
        }

        ::selection {
            background: #00b14f;
            color: #fff;
        }

        .seo___2UD4U .hide___1cQi5 {
            display: none;
        }

        .ant-divider-horizontal {
            display: none;
            height: 1px;
            width: 100%;
            margin: 24px 0;
            clear: both;
        }

        .ant-btn:focus + .ant-divider ant-divider-horizontal {
            display: block;
        }

    </style>
@endsection

@section('content')
    <body>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-174d16b elementor-section-full_width elementor-section-height-default elementor-section-height-default"
        data-id="174d16b" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div
                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c04d29d"
                data-id="c04d29d" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-64a2156 elementor-widget elementor-widget-food-item-categories4"
                        data-id="64a2156" data-element_type="widget" data-widget_type="food-item-categories4.default">
                        <div class="elementor-widget-container">
                            <section class="res-cat cat-new-design white-section">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xxl-12 col-xl-12 col-lg-12">
                                            <div class="heading-minimal">
                                                <div class="sub-title">Top Foods</div>
                                                <h3 class="head-title">Our Categories</h3>
                                                <div class="bottom-dots  clearfix">
                                                    <span class="dot line-dot"></span>
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 category-items-new">
                                            <div class="category-main">
                                                <a href="#"> <img
                                                        loading="lazy" alt="" class="cate-images"
                                                        src="https://marketplace.foodotawp.com/wp-content/uploads/2021/05/Layer256-1.png"></a>
                                                <div class="category-text-box">
                                                    <div class="category-text-inner">
                                                        <a href="https://marketplace.foodotawp.com/all-vendors/?cat_id=82">
                                                            <h3>Pizza</h3></a></div>
                                                    <div class="category-text-desc">
                                                        <span class="text-center">14 Restaurants</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 category-items-new">
                                            <div class="category-main">
                                                <a href="#"> <img
                                                        loading="lazy" alt="" class="cate-images"
                                                        src="https://marketplace.foodotawp.com/wp-content/uploads/2021/05/1qLayer-1.png"></a>
                                                <div class="category-text-box">
                                                    <div class="category-text-inner">
                                                        <a href="https://marketplace.foodotawp.com/all-vendors/?cat_id=116">
                                                            <h3>Broast</h3></a></div>
                                                    <div class="category-text-desc">
                                                        <span class="text-center">4 Restaurants</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 category-items-new">
                                            <div class="category-main">
                                                <a href="#"> <img
                                                        loading="lazy" alt="" class="cate-images"
                                                        src="https://marketplace.foodotawp.com/wp-content/uploads/2021/05/sa1.png"></a>
                                                <div class="category-text-box">
                                                    <div class="category-text-inner">
                                                        <a href="https://marketplace.foodotawp.com/all-vendors/?cat_id=100">
                                                            <h3>Chicken</h3></a></div>
                                                    <div class="category-text-desc">
                                                        <span class="text-center">5 Restaurants</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 category-items-new">
                                            <div class="category-main">
                                                <a href="#"> <img
                                                        loading="lazy" alt="" class="cate-images"
                                                        src="https://marketplace.foodotawp.com/wp-content/uploads/2021/05/pngwing.png"></a>
                                                <div class="category-text-box">
                                                    <div class="category-text-inner">
                                                        <a href="https://marketplace.foodotawp.com/all-vendors/?cat_id=85">
                                                            <h3>Burgers</h3></a></div>
                                                    <div class="category-text-desc">
                                                        <span class="text-center">19 Restaurants</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 category-items-new">
                                            <div class="category-main">
                                                <a href="#"> <img
                                                        loading="lazy" alt="" class="cate-images"
                                                        src="https://marketplace.foodotawp.com/wp-content/uploads/2021/05/qawLayer-1.png"></a>
                                                <div class="category-text-box">
                                                    <div class="category-text-inner">
                                                        <a href="#">
                                                            <h3>Shakes</h3></a></div>
                                                    <div class="category-text-desc">
                                                        <span class="text-center">22 Restaurants</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 category-items-new">
                                            <div class="category-main">
                                                <a href="#"> <img
                                                        loading="lazy" alt="" class="cate-images"
                                                        src="https://marketplace.foodotawp.com/wp-content/uploads/2021/05/sssssa1.png"></a>
                                                <div class="category-text-box">
                                                    <div class="category-text-inner">
                                                        <a href="#">
                                                            <h3>Sandwiches</h3></a></div>
                                                    <div class="category-text-desc">
                                                        <span class="text-center">6 Restaurants</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 category-items-new">
                                            <div class="category-main">
                                                <a href="#"> <img
                                                        loading="lazy" alt="" class="cate-images"
                                                        src="https://marketplace.foodotawp.com/wp-content/uploads/2021/05/Layezr-1.png"></a>
                                                <div class="category-text-box">
                                                    <div class="category-text-inner">
                                                        <a href="#">
                                                            <h3>Pasta</h3></a></div>
                                                    <div class="category-text-desc">
                                                        <span class="text-center">10 Restaurants</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 category-items-new">
                                            <div class="category-main">
                                                <a href="#"> <img
                                                        loading="lazy" alt="" class="cate-images"
                                                        src="https://marketplace.foodotawp.com/wp-content/uploads/2021/05/asasLayer-1.png"></a>
                                                <div class="category-text-box">
                                                    <div class="category-text-inner">
                                                        <a href="#">
                                                            <h3>Desserts</h3></a></div>
                                                    <div class="category-text-desc">
                                                        <span class="text-center">15 Restaurants</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-9b3df88 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
        data-id="9b3df88" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-no">
            <div
                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-58c2229"
                data-id="58c2229" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-3c43e9f elementor-widget elementor-widget-simple-grid-restaurants"
                        data-id="3c43e9f" data-element_type="widget" data-widget_type="simple-grid-restaurants.default">
                        <div class="elementor-widget-container">
                            <section class="res-2-featured bg-color cols-padding white-section">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
                                            <div class="heading-minimal">
                                                <div class="sub-title">TOP Products</div>
                                                <h3 class="head-title">Featured products</h3>
                                                <div class="res-view-btn">

                                                </div>
                                                <div class="bottom-dots  clearfix">
                                                    <span class="dot line-dot"></span>
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12 col-xxl-12 col-md-12">
                                            <div class="row">
                                                <div class="eq-height col-xl-4 col-lg-6 col-md-6">
                                                    <div class="res-3-box ">
                                                        <div class="res-2-img parallex-new"><a
                                                                href="https://marketplace.foodotawp.com/store/arcadian-cafe/">
                                                                <img
                                                                    src="https://marketplace.foodotawp.com/wp-content/uploads/2021/04/Arcadian.jpg"
                                                                    alt="" class="img-fluid"> </a>
                                                            <div class="res-3-icons fav-check"><i class="fa fa-heart  "
                                                                                                  data-id="29"></i>
                                                            </div>
                                                            <div class="new-stars-main">
                                                                <div class="stars"><i class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i>
                                                                </div>
                                                                <div class="rating-number"></div>
                                                            </div>
                                                        </div>
                                                        <div class="res-2-bg-white">
                                                            <div class="res-2-inner">
                                                                <div class="res-2-text">
                                                                    <a href="https://marketplace.foodotawp.com/store/arcadian-cafe/">
                                                                        <div class="text-s1">Organic Arcadian Food</div>
                                                                    </a>
                                                                    <div class="food_cats"><span class="cat_names"><a
                                                                                href="#"
                                                                                class="badge bg-light" title="Shakes">Shakes</a><a
                                                                                href="#"
                                                                                class="badge bg-light" title="Steaks">Steaks</a><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="Sea Food">Sea Food</a><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="Chicken">Chicken</a><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="Appetizers">Appetizers</a><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="Rolls">Rolls</a></span></div>
                                                                </div>
                                                            </div>
                                                            <div class="res-2-box">
                                                                <ul>
                                                                    <li>
                                                                        {{--                                                                        <div class="res-3-logo-img-container">--}}
                                                                        {{--                                                                            <a href="#">--}}
                                                                        {{--                                                                                <img--}}
                                                                        {{--                                                                                    src="https://marketplace.foodotawp.com/wp-content/uploads/2021/05/066-50x50.jpg"--}}
                                                                        {{--                                                                                    alt="" class="img-fluid"></a></div>--}}
                                                                        <p><span class="wcfmfa fa-clock"></span><span
                                                                                class="today-status"></span><span
                                                                                class="today-timing">10p-15p</span>
                                                                        </p>
                                                                        <div class="res-2-map-product"><span
                                                                                class="location-png">
                       <img
                           src="https://png.pngtree.com/png-clipart/20191120/original/pngtree-coins-dollar-line-icon-vector-png-image_5073032.jpg"
                           alt=""
                           class="img-fluid"></span>
                                                                            <span>10$-15$</span></div>

                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="eq-height col-xl-4 col-lg-6 col-md-6">
                                                    <div class="res-3-box ">
                                                        <div class="res-2-img parallex-new"><a
                                                                href="#">
                                                                <img
                                                                    src="https://marketplace.foodotawp.com/wp-content/uploads/2021/04/broadway.jpg"
                                                                    alt="" class="img-fluid"> </a>
                                                            <div class="res-3-icons fav-check"><i class="fa fa-heart  "
                                                                                                  data-id="28"></i>
                                                            </div>
                                                            <div class="new-stars-main">
                                                                <div class="stars"><i class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i>
                                                                </div>
                                                                <div class="rating-number"></div>
                                                            </div>
                                                        </div>
                                                        <div class="res-2-bg-white">
                                                            <div class="res-2-inner">
                                                                <div class="res-2-text">
                                                                    <a href="#">
                                                                        <div class="text-s1">Tasty Food Pizza</div>
                                                                    </a>
                                                                    <div class="food_cats"><span class="cat_names"><a
                                                                                href="#"
                                                                                class="badge bg-light" title="Pizza">Pizza</a><a
                                                                                href="#"
                                                                                class="badge bg-light" title="Deals">Deals</a><a
                                                                                href="#"
                                                                                class="badge bg-light" title="Sauces">Sauces</a><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="Specialities">Specialities</a><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="Calzone">Calzone</a><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="New Arrival">New Arrival</a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="res-2-box">
                                                                <ul>
                                                                    <li>
{{--                                                                        <div class="res-3-logo-img-container">--}}
{{--                                                                            <a href="#">--}}
{{--                                                                                <img--}}
{{--                                                                                    src="https://marketplace.foodotawp.com/wp-content/uploads/2021/05/066-50x50.jpg"--}}
{{--                                                                                    alt="" class="img-fluid"></a></div>--}}
                                                                        <p><span class="wcfmfa fa-clock"></span><span
                                                                                class="today-status"></span><span
                                                                                class="today-timing">10p-15p</span>
                                                                        </p>
                                                                        <div class="res-2-map-product"><span
                                                                                class="location-png">
                                                                            <img src="https://png.pngtree.com/png-clipart/20191120/original/pngtree-coins-dollar-line-icon-vector-png-image_5073032.jpg" alt="" class="img-fluid"></span>
                                                                            <span>10$-20$</span></div>

                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="eq-height col-xl-4 col-lg-6 col-md-6">
                                                    <div class="res-3-box ">
                                                        <div class="res-2-img parallex-new"><a
                                                                href="#">
                                                                <img
                                                                    src="https://marketplace.foodotawp.com/wp-content/uploads/2021/04/downtown.jpg"
                                                                    alt="" class="img-fluid"> </a>
                                                            <div class="res-3-icons fav-check"><i class="fa fa-heart  "
                                                                                                  data-id="30"></i>
                                                            </div>
                                                            <div class="new-stars-main">
                                                                <div class="stars"><i class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i>
                                                                </div>
                                                                <div class="rating-number"></div>
                                                            </div>
                                                        </div>
                                                        <div class="res-2-bg-white">
                                                            <div class="res-2-inner">
                                                                <div class="res-2-text">
                                                                    <a href="#">
                                                                        <div class="text-s1">Food Chef Italian</div>
                                                                    </a>
                                                                    <div class="food_cats"><span class="cat_names"><a
                                                                                href="#"
                                                                                class="badge bg-light" title="Pasta">Pasta</a><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="Beverages">Beverages</a><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="Rice">Rice</a><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="Vegetarian Dishes">Vegetarian Dishes</a><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="Starters">Starters</a><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="New Arrival">New Arrival</a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="res-2-box">
                                                                <ul>
                                                                    <li>
{{--                                                                        <div class="res-3-logo-img-container">--}}
{{--                                                                            <a href="#">--}}
{{--                                                                                <img--}}
{{--                                                                                    src="https://marketplace.foodotawp.com/wp-content/uploads/2021/05/downtown-50x50.jpg"--}}
{{--                                                                                    alt="" class="img-fluid"></a></div>--}}
                                                                        <p><span class="wcfmfa fa-clock"></span><span
                                                                                class="today-status"></span><span
                                                                                class="today-timing">20p-23p</span>
                                                                        </p>
                                                                        <div class="res-2-map-product"><span
                                                                                class="location-png">
                                                                                <img src="https://png.pngtree.com/png-clipart/20191120/original/pngtree-coins-dollar-line-icon-vector-png-image_5073032.jpg" alt="" class="img-fluid"></span>
                                                                            <span>25$-35$ </span></div>

                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="eq-height col-xl-4 col-lg-6 col-md-6">
                                                    <div class="res-3-box ">
                                                        <div class="res-2-img parallex-new"><a
                                                                href="#">
                                                                <img
                                                                    src="https://marketplace.foodotawp.com/wp-content/uploads/2021/04/hardees.jpg"
                                                                    alt="" class="img-fluid"> </a>
                                                            <div class="res-3-icons fav-check"><i class="fa fa-heart  "
                                                                                                  data-id="26"></i>
                                                            </div>
                                                            <div class="new-stars-main">
                                                                <div class="stars"><i class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i>
                                                                </div>
                                                                <div class="rating-number"></div>
                                                            </div>
                                                        </div>
                                                        <div class="res-2-bg-white">
                                                            <div class="res-2-inner">
                                                                <div class="res-2-text">
                                                                    <a href="#">
                                                                        <div class="text-s1">Toni Food Hub</div>
                                                                    </a>
                                                                    <div class="food_cats"><span class="cat_names"><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="Beverages">Beverages</a><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="Desserts">Desserts</a><a
                                                                                href="#"
                                                                                class="badge bg-light" title="Sauces">Sauces</a><a
                                                                                href="#"
                                                                                class="badge bg-light" title="Wraps">Wraps</a><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="Sandwiches">Sandwiches</a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="res-2-box">
                                                                <ul>
                                                                    <li>
                                                                        <p><span class="wcfmfa fa-clock"></span><span
                                                                                class="today-status"></span><span
                                                                                class="today-timing">20p-30p</span>
                                                                        </p>
                                                                        <div class="res-2-map-product"><span
                                                                                class="location-png">
                       <img src="https://png.pngtree.com/png-clipart/20191120/original/pngtree-coins-dollar-line-icon-vector-png-image_5073032.jpg" alt="" class="img-fluid"></span>
                                                                            <span>50$-55$</span></div>

                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="eq-height col-xl-4 col-lg-6 col-md-6">
                                                    <div class="res-3-box ">
                                                        <div class="res-2-img parallex-new"><a
                                                                href="#">
                                                                <img
                                                                    src="https://marketplace.foodotawp.com/wp-content/uploads/2021/04/Howdy.jpg"
                                                                    alt="" class="img-fluid"> </a>
                                                            <div class="res-3-icons fav-check"><i class="fa fa-heart  "
                                                                                                  data-id="35"></i>
                                                            </div>
                                                            <div class="new-stars-main">
                                                                <div class="stars"><i class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i>
                                                                </div>
                                                                <div class="rating-number"></div>
                                                            </div>
                                                        </div>
                                                        <div class="res-2-bg-white">
                                                            <div class="res-2-inner">
                                                                <div class="res-2-text">
                                                                    <a href="#">
                                                                        <div class="text-s1">Masterchef Chinese Food
                                                                        </div>
                                                                    </a>
                                                                    <div class="food_cats"><span class="cat_names"><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="Burgers">Burgers</a><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="Beverages">Beverages</a><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="Chicken">Chicken</a><a
                                                                                href="#"
                                                                                class="badge bg-light" title="Steaks">Steaks</a><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="New Arrival">New Arrival</a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="res-2-box">
                                                                <ul>
                                                                    <li>
                                                                        <p><span class="wcfmfa fa-clock"></span><span
                                                                                class="today-status"></span><span
                                                                                class="today-timing">15p-20p</span>
                                                                        </p>
                                                                        <div class="res-2-map-product"><span
                                                                                class="location-png">
                                                                                 <img src="https://png.pngtree.com/png-clipart/20191120/original/pngtree-coins-dollar-line-icon-vector-png-image_5073032.jpg" alt="" class="img-fluid"></span>
                                                                            <span>25$-35$</span></div>

                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="eq-height col-xl-4 col-lg-6 col-md-6">
                                                    <div class="res-3-box ">
                                                        <div class="res-2-img parallex-new"><a
                                                                href="#">
                                                                <img
                                                                    src="https://marketplace.foodotawp.com/wp-content/uploads/2021/04/mcdonalds.jpg"
                                                                    alt="" class="img-fluid"> </a>
                                                            <div class="res-3-icons fav-check"><i class="fa fa-heart  "
                                                                                                  data-id="33"></i>
                                                            </div>
                                                            <div class="new-stars-main">
                                                                <div class="stars"><i class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i>
                                                                </div>
                                                                <div class="rating-number"></div>
                                                            </div>
                                                        </div>
                                                        <div class="res-2-bg-white">
                                                            <div class="res-2-inner">
                                                                <div class="res-2-text">
                                                                    <a href="#">
                                                                        <div class="text-s1">Fun Chicken Meals</div>
                                                                    </a>
                                                                    <div class="food_cats"><span class="cat_names"><a
                                                                                href="#"
                                                                                class="badge bg-light" title="Shakes">Shakes</a><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="Hot Drinks">Hot Drinks</a><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="Happy Meal">Happy Meal</a><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="Burgers">Burgers</a><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="Breakfast">Breakfast</a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="res-2-box">
                                                                <ul>
                                                                    <li>
                                                                        <p><span class="wcfmfa fa-clock"></span><span
                                                                                class="today-status"></span><span
                                                                                class="today-timing">23p-25p</span>
                                                                        </p>
                                                                        <div class="res-2-map-product"><span
                                                                                class="location-png">
                       <img
                           src="https://png.pngtree.com/png-clipart/20191120/original/pngtree-coins-dollar-line-icon-vector-png-image_5073032.jpg"
                           alt=""
                           class="img-fluid"></span>
                                                                            <span>60$-65$</span></div>

                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="eq-height col-xl-4 col-lg-6 col-md-6">
                                                    <div class="res-3-box ">
                                                        <div class="res-2-img parallex-new"><a
                                                                href="#">
                                                                <img
                                                                    src="https://marketplace.foodotawp.com/wp-content/uploads/2021/04/monal.jpg"
                                                                    alt="" class="img-fluid"> </a>
                                                            <div class="res-3-icons fav-check"><i class="fa fa-heart  "
                                                                                                  data-id="27"></i>
                                                            </div>
                                                            <div class="new-stars-main">
                                                                <div class="stars"><i class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i>
                                                                </div>
                                                                <div class="rating-number"></div>
                                                            </div>
                                                        </div>
                                                        <div class="res-2-bg-white">
                                                            <div class="res-2-inner">
                                                                <div class="res-2-text">
                                                                    <a href="#">
                                                                        <div class="text-s1">Chef Ganteng Restaurant
                                                                        </div>
                                                                    </a>
                                                                    <div class="food_cats"><span class="cat_names"><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="Desserts">Desserts</a><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="Sunday Brunch">Sunday Brunch</a><a
                                                                                href="#"
                                                                                class="badge bg-light" title="Hi Tea">Hi Tea</a><a
                                                                                href="#"
                                                                                class="badge bg-light" title="Pizza">Pizza</a><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="Continental">Continental</a><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="Dinner Buffet">Dinner Buffet</a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="res-2-box">
                                                                <ul>
                                                                    <li>
                                                                        <p><span class="wcfmfa fa-clock"></span><span
                                                                                class="today-status"></span><span
                                                                                class="today-timing">15p-25p</span>
                                                                        </p>
                                                                        <div class="res-2-map-product"><span
                                                                                class="location-png">
                                                                                <img src="https://png.pngtree.com/png-clipart/20191120/original/pngtree-coins-dollar-line-icon-vector-png-image_5073032.jpg" alt="" class="img-fluid"></span>
                                                                            <span>25-35</span></div>

                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="eq-height col-xl-4 col-lg-6 col-md-6">
                                                    <div class="res-3-box ">
                                                        <div class="res-2-img parallex-new"><a
                                                                href="#">
                                                                <img
                                                                    src="https://marketplace.foodotawp.com/wp-content/uploads/2021/04/nandos.jpg"
                                                                    alt="" class="img-fluid"> </a>
                                                            <div class="res-3-icons fav-check"><i class="fa fa-heart  "
                                                                                                  data-id="34"></i>
                                                            </div>
                                                            <div class="new-stars-main">
                                                                <div class="stars"><i class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i>
                                                                </div>
                                                                <div class="rating-number"></div>
                                                            </div>
                                                        </div>
                                                        <div class="res-2-bg-white">
                                                            <div class="res-2-inner">
                                                                <div class="res-2-text">
                                                                    <a href="#">
                                                                        <div class="text-s1">Marshall Steak House</div>
                                                                    </a>
                                                                    <div class="food_cats"><span class="cat_names"><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="Appetizers">Appetizers</a><a
                                                                                href="#"
                                                                                class="badge bg-light" title="Deals">Deals</a><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="Casa Deals">Casa Deals</a><a
                                                                                href="#"
                                                                                class="badge bg-light" title="Salads">Salads</a><a
                                                                                href="#"
                                                                                class="badge bg-light" title="Shakes">Shakes</a><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="Desserts">Desserts</a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="res-2-box">
                                                                <ul>
                                                                    <li>
                                                                        <p><span class="wcfmfa fa-clock"></span><span
                                                                                class="today-status"></span><span
                                                                                class="today-timing">25p-30p</span>
                                                                        </p>
                                                                        <div class="res-2-map-product"><span
                                                                                class="location-png">
                                                                                <img src="https://png.pngtree.com/png-clipart/20191120/original/pngtree-coins-dollar-line-icon-vector-png-image_5073032.jpg" alt="" class="img-fluid"></span>
                                                                            <span>30$-35~$</span></div>

                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="eq-height col-xl-4 col-lg-6 col-md-6">
                                                    <div class="res-3-box ">
                                                        <div class="res-2-img parallex-new"><a
                                                                href="#">
                                                                <img
                                                                    src="https://marketplace.foodotawp.com/wp-content/uploads/2021/04/Normas.jpg"
                                                                    alt="" class="img-fluid"> </a>
                                                            <div class="res-3-icons fav-check"><i class="fa fa-heart  "
                                                                                                  data-id="25"></i>
                                                            </div>
                                                            <div class="new-stars-main">
                                                                <div class="stars"><i class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i><i
                                                                        class="fa fa-star "></i>
                                                                </div>
                                                                <div class="rating-number"></div>
                                                            </div>
                                                        </div>
                                                        <div class="res-2-bg-white">
                                                            <div class="res-2-inner">
                                                                <div class="res-2-text">
                                                                    <a href="#">
                                                                        <div class="text-s1">Chickenzilla Pizza Fusion
                                                                        </div>
                                                                    </a>
                                                                    <div class="food_cats"><span class="cat_names"><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="Paratha">Paratha</a><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="Burgers">Burgers</a><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="BBQ">BBQ</a><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="Continental">Continental</a><a
                                                                                href="#"
                                                                                class="badge bg-light"
                                                                                title="Rice">Rice</a><a
                                                                                href="#"
                                                                                class="badge bg-light" title="Karahi">Karahi</a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="res-2-box">
                                                                <ul>
                                                                    <li>
{{--                                                                        <div class="res-3-logo-img-container">--}}
{{--                                                                            <a href="https://marketplace.foodotawp.com/store/normas/">--}}
{{--                                                                                <img--}}
{{--                                                                                    src="https://marketplace.foodotawp.com/wp-content/uploads/2021/05/0112-50x50.jpg"--}}
{{--                                                                                    alt="" class="img-fluid"></a></div>--}}
                                                                        <p><span class="wcfmfa fa-clock"></span><span
                                                                                class="today-status"></span><span
                                                                                class="today-timing">22p-25p</span>
                                                                        </p>
                                                                        <div class="res-2-map-product"><span
                                                                                class="location-png">

                                                                                <img src="https://png.pngtree.com/png-clipart/20191120/original/pngtree-coins-dollar-line-icon-vector-png-image_5073032.jpg" alt="" class="img-fluid"></span>
                                                                            <span>65$-70$</span></div>

                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="sectionContainer___3GDBD seo___2UD4U ant-layout">
            <div class="sectionContent___2XGJB"><h3>Tại sao nên lựa chọn AptechFood?</h3>
                <ul class="whyGrabfoodList___2Fjpg">
                    <li><span class="bold___2_Blq">Nhanh nhất</span><span> - GrabFood cung cấp dịch vụ giao đồ ăn nhanh nhất thị trường.</span>
                    </li>
                    <li><span class="bold___2_Blq">Dễ dàng nhất</span><span> - Giờ đây, bạn chỉ cần thực hiện vài cú nhấp chuột hoặc chạm nhẹ là đã có thể đặt đồ ăn. Hãy đặt đồ ăn trực tuyến hoặc tải xuống siêu ứng dụng Grab của chúng tôi để có trải nghiệm nhanh hơn và thú vị hơn.</span>
                    </li>
                    <li><span class="bold___2_Blq">Đáp ứng mọi nhu cầu</span><span> - Từ món ăn đặc sản địa phương đến các nhà hàng được ưa thích, nhiều lựa chọn đa dạng chắc chắn sẽ luôn làm hài lòng khẩu vị của bạn.</span>
                    </li>
                    <li><span class="bold___2_Blq">Thanh toán dễ dàng</span><span> - Giao và nhận đồ ăn thật dễ dàng. Thanh toán bằng GrabPay thậm chí còn dễ dàng hơn nữa.</span>
                    </li>
                    <li><span class="bold___2_Blq">Nhiều quà tặng hơn</span><span> - Tích điểm GrabRewards cho mỗi đơn hàng của bạn và sử dụng điểm thưởng để đổi lấy nhiều ưu đãi hơn.</span>
                    </li>
                </ul>
                <h3>Các câu hỏi thường gặp</h3><h4>AptechFood là gì?</h4>
                <p>Lunch, Bún Cá Chấm Gốc Đa - Vũ Thạnh for Dinner! We are here to satisfy your hunger with a wide
                    selection of merchant partners in Vietnam.

                    AptechFood là dịch vụ Giao đồ ăn nhanh nhất tại Việt Nam. Chúng tôi đã sắp xếp tất cả các món ăn,
                    nhà
                    hàng và thực phẩm yêu thích của bạn một cách hợp lý để giúp bạn tìm được đồ ăn dễ dàng và nhanh
                    chóng nhất có thể. Tìm và đặt món ăn yêu thích trên khắp Việt Nam - đặt đồ ăn trực tuyến chỉ bằng
                    vài thao tác, từ món Lifted Coffee &amp; Brunch cho bữa sáng, đến Maazi Indian – Nhà Hàng Ấn Độ cho
                    bữa trưa, đến Bún Cá Chấm Gốc Đa – Vũ Thạnh cho bữa tối! Hãy để chúng tôi xua tan cơn đói của bạn
                    nhờ một loạt đối tác bán đồ ăn ở Việt Nam.
                </p>
                <button type="button" class="ant-btn readMore___1HEqB ant-btn-block"><span>Read More</span></button>
                <div class="hide___1cQi5">
                    <div class="ant-divider ant-divider-horizontal"></div>
                    <h4>Làm cách nào để đặt đồ ăn ở Việt Nam?</h4>
                    <p>Sau đây là cách đơn giản nhất để đặt đồ ăn qua AptechFood khi bạn ở Việt Nam:</p>
                    <ol>
                        <li><span class="bold___2_Blq">Tìm kiếm nhà hàng hoặc món ăn yêu thích</span><span> - Nhập địa chỉ của bạn vào trang chủ. Xem các Nhà hàng và điểm ăn uống gần chỗ bạn trong danh sách của GrabFood. Chọn nhà hàng yêu thích, duyệt hết thực đơn và chọn món ăn bạn muốn đặt.</span>
                        </li>
                        <li><span class="bold___2_Blq">Kiểm tra &amp; Thanh toán</span><span> - Sau khi chắc chắn rằng bạn đã đặt đầy đủ các món theo nhu cầu, hãy nhấp vào tab “ORDER NOW” (ĐẶT MÓN NGAY) và nhập địa chỉ giao đồ ăn cuối cùng. Chọn phương thức thanh toán phù hợp nhất với bạn và thanh toán.</span>
                        </li>
                        <li><span class="bold___2_Blq">Giao hàng</span><span> - GrabFood đã thiết kế một hành trình phục vụ khách hàng liền mạch để bạn có thể thưởng thức món ăn một cách trọn vẹn. Chúng tôi sẽ gửi cho bạn email và tin nhắn SMS tức thời xác nhận đơn đặt hàng của bạn và thời gian giao hàng dự kiến. Sau đó chúng tôi sẽ giao ngay đồ ăn cho bạn.
</span></li>
                    </ol>
                    <div class="ant-divider ant-divider-horizontal"></div>
                    <h4>AptechFood có cung cấp dịch vụ giao đồ ăn 24x7 không?</h4>
                    <p>Chúng tôi chỉ biết một điều duy nhất, đó là "đồ ăn", vậy nên tất nhiên chúng tôi cung cấp dịch vụ
                        này rồi. Xin lưu ý, mặc dù chúng tôi là đối tác giao đồ ăn phục vụ 24x7, nhưng một số nhà hàng
                        trong danh mục của chúng tôi có thể hạn chế giao đồ ăn khuya hoặc có thể không phục vụ đối với
                        các đơn đặt hàng. Tuy nhiên, chúng tôi đã liệt kê danh sách những nhà hàng phục vụ nhu cầu ăn
                        khuya của bạn trong mục Late Night Delivery (Giao hàng khuya).</p>
                    <div class="ant-divider ant-divider-horizontal"></div>
                    <h4>AptechFood có chấp nhận tiền mặt không?</h4>
                    <p>Tất nhiên là có! GrabFood chấp nhận mọi hình thức thanh toán cho dịch vụ giao đồ ăn, bao gồm cả
                        tiền mặt khi giao hàng tại Việt Nam.</p>
                    <div class="ant-divider ant-divider-horizontal"></div>
                    <h4>Tôi có thể thanh toán trực tuyến trên GrabFood cho đơn hàng của mình không?</h4>
                    <p>AptechFood chấp nhận nhiều hình thức thanh toán cho các đơn đặt đồ ăn trực tuyến, bao gồm cả
                        thanh
                        toán trực tuyến tại Việt Nam bằng thẻ tín dụng, thẻ ghi nợ, PayPal hoặc trả tiền lúc nhận hàng.
                        Hãy nhớ sử dụng <a href="https://www.grab.com/vn/pay/">Moca</a> để tích điểm thưởng mà bạn có
                        thể sử dụng để được giảm giá cho đơn hàng tiếp theo và cho các dịch vụ khác của Grab nhé.</p>
                    <div class="ant-divider ant-divider-horizontal"></div>
                    <h4>Tôi có thể đặt đồ ăn trên ApteechFood cho người khác không?</h4>
                    <p>Tất nhiên rồi, hãy chăm sóc những người thân yêu của mình bằng cách gửi những món ăn mà họ yêu
                        thích đến tận nhà. Bạn chỉ cần cập nhật địa chỉ giao hàng và tên người nhận trước khi đặt đơn
                        hàng của bạn.</p>
                    <div class="ant-divider ant-divider-horizontal"></div>
                    <h4>AptechFood tính phí giao đồ ăn như thế nào?</h4>
                    <p>Phí giao hàng của chúng tôi phụ thuộc vào nhiều yếu tố hoạt động như khoảng cách từ vị trí của
                        bạn đến nhà hàng. Bạn có thể kiểm tra phí giao hàng chính xác cần phải trả trước khi thanh toán
                        tại mục thanh toán trên ứng dụng. Ngoài ra còn có phần “Free Delivery” (Giao hàng miễn phí)
                        liệt kê các nhà hàng gần chỗ bạn mà không tính phí giao hàng.</p>
                    <div class="ant-divider ant-divider-horizontal"></div>
                    <h4>Những nhà hàng nào được liệt kê trong AptechFood?</h4>
                    <p>Chúng tôi có gì trên AptechFood? Chúng tôi tự hào có nhiều nhà hàng và món ăn nhất so với bất kỳ
                        ứng dụng giao đồ ăn nào ở Việt Nam. Bạn có thể lựa chọn trong số hàng nghìn nhà hàng trên
                        AptechFood Việt Nam. Bạn có thể đặt đồ ăn trực tuyến từ tất cả các điểm ăn uống yêu thích của
                        Burger King, Jollibee, KFC, McDonalds, Long John Silver, Pastamania, Dominos Pizza, Pizza Hut,
                        Subway!</p>
                    <p>AptechFood cũng có mã khuyến mãi, ưu đãi và giảm giá có hạn dành riêng cho các nhà hàng trong
                        danh
                        mục. Bạn có thể được hưởng chiết khấu lớn và hàng loạt ưu đãi khác cho đơn đặt đồ ăn của mình.
                        Giờ thì đặt đồ ăn thôi! </p>
                    <div class="ant-divider ant-divider-horizontal"></div>
                    <h4>AptechFood có áp dụng giá trị đơn hàng tối thiểu không?</h4>
                    <p>Có! Nhưng bạn có thể trả số tiền chênh lệch nếu giá trị đơn hàng của bạn nhỏ hơn số tiền đặt hàng
                        tối thiểu.</p></div>
            </div>
        </div>
    </section>

    @endsection

    @section('custom_js')
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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

            // document.getElementsByClassName("ant-btn-block").onclick = function (){
            //     document.getElementsByClassName("hide___1cQi5").style.display = 'none'
            // }
            // document.getElementsByClassName("ant-btn-block").onclick = function () {
            //     document.getElementsByClassName("hide___1cQi5").style.display = 'block';
        </script>
@endsection
