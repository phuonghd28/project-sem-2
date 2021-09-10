@extends('clients.master')
@section('title')
    Contact-Us
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
            margin-top: 90px;
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
            background: #e1e1e1;
            content: "";
        }

        .nav::after {
            position: absolute;
            right: 0;
            top: 13px;
            height: 1px;
            width: 335px;
            background: #e1e1e1;
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
                            <div class="tab-pane active" id="pic-1"><img
                                    src="https://afamilycdn.com/150157425591193600/2020/12/5/xac-5-mon-an-nhanh-duoc-ua-chuong-nhat-the-gioif413cea463-16071362188141792796206.jpg"
                                    alt="#">
                            </div>
                            <div class="tab-pane" id="pic-2"><img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwIzSEJVADpCIWIV2szVBR6fZZPqNA1ju9WvytSzVyyujNbl70p8EeVQCNy5uuRghCosI&usqp=CAU"
                                    alt="#">
                            </div>
                            <div class="tab-pane" id="pic-3"><img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQkzSg9X1k_JAtvc3Ts0aUceJ0c7psoRhAvSYBaVp6fz_mSYEjeyaGDOHd23ew0Iu9aCg&usqp=CAU"
                                    alt="#">
                            </div>
                            <div class="tab-pane" id="pic-4"><img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-EtZVOiv5XbG1sX7NwZeta0TraImWQUjVsqhUVq0zpw0tvZQPIqysf0otwV-ta3oWEkE&usqp=CAU"
                                    alt="#">
                            </div>
                            <div class="tab-pane" id="pic-5"><img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8yEZbKBxnwIPS8HpUnMeUP-vl5LBIuW_twWQFmsURNfd9h4JLjHA0dwLJEFIWxlQ9MtE&usqp=CAU"
                                    alt="#">
                            </div>
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                            <div class="logo_menuchinh"
                                 style="float:left; padding-top:5px; ; color:#fff; margin-left:auto; margin-right:auto; text-align:center; line-height:40px; font-size:16px;font-weight:bold;font-family:Arial">
                            </div>
                            <!--                        <div class="menu-icon">-->
                            <li class="active"><a data-target="#pic-1" data-toggle="tab"><img
                                        src="https://afamilycdn.com/150157425591193600/2020/12/5/xac-5-mon-an-nhanh-duoc-ua-chuong-nhat-the-gioif413cea463-16071362188141792796206.jpg"
                                        alt="#"></a>
                            </li>
                            <li><a data-target="#pic-2" data-toggle="tab"><img
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwIzSEJVADpCIWIV2szVBR6fZZPqNA1ju9WvytSzVyyujNbl70p8EeVQCNy5uuRghCosI&usqp=CAU"
                                        alt="#"></a>
                            </li>
                            <li><a data-target="#pic-3" data-toggle="tab"><img
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQkzSg9X1k_JAtvc3Ts0aUceJ0c7psoRhAvSYBaVp6fz_mSYEjeyaGDOHd23ew0Iu9aCg&usqp=CAU"
                                        alt="#"></a>
                            </li>
                            <li><a data-target="#pic-4" data-toggle="tab"><img
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-EtZVOiv5XbG1sX7NwZeta0TraImWQUjVsqhUVq0zpw0tvZQPIqysf0otwV-ta3oWEkE&usqp=CAU"
                                        alt="#"></a>
                            </li>
                            <li><a data-target="#pic-5" data-toggle="tab"><img
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8yEZbKBxnwIPS8HpUnMeUP-vl5LBIuW_twWQFmsURNfd9h4JLjHA0dwLJEFIWxlQ9MtE&usqp=CAU"
                                        alt="#"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="details col-md-6">
                        <h3 class="product-title">hamburgers</h3>
                        <div class="rating">
                            <div class="stars"><span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span> <span class="fa fa-star"></span>
                            </div>
                            <span class="review-no">123 đánh giá</span>
                        </div>
                        <p class="product-description">The name hamburger is derived from the name of the city of Hamburg,
                            Germany,[2][3] a resident from Hamburg called "Hamburger"; Accordingly, anything that originated
                            in this city or was first disseminated here is entitled to this name. (However, the name of this
                            dish is not capitalized.) The first type of cake with ground beef called "Hamburger steak" was
                            mentioned
                            in an American cookbook in 1891; This dish is placed between two slices of noodles, and is
                            called a
                            "Hamburger sandwich". By the mid-20th century, both of these names had been shortened to
                            "hamburger"
                            or "burger".!</p>
                        <h4 class="price">price: 10$</h4>
                        <p class="vote"><strong>91%</strong> of buyers are satisfied with this product <strong>(87
                                votes)</strong>
                        </p>

                        </h5>
                        <div class="action"><a href="#" target="_blank">
                                <button class="add-to-cart btn btn-default" type="button">add to cart</button>
                            </a> <a href="#" target="_blank">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="product__details__tab">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Description</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Specification</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Reviews ( 100 )</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                    <h6>Description</h6>
                    <p>A hamburger is a sandwich with a piece of ground meat (usually beef) in the middle. The meat can be
                        grilled, fried, or smoked and is usually eaten with some seasoning in the middle or a round piece
                        of bread. They are usually enjoyed with french fries.</p>

                </div>
                <div class="tab-pane" id="tabs-2" role="tabpanel">
                    <h6>Specification</h6>
                    <p>This will be the food that gives you the energy to function all day. In the midst of the hustle,
                        bustle, and modern life, you don't have time to cook yourself a nutritious and nutritious meal,
                        then a hamburger is a great choice for you. Hamburger will give you enough energy for you. With the
                        reputation we have, we are sure that you will be satisfied with our hamburger.</p>
                </div>
                <div class="tab-pane" id="tabs-3" role="tabpanel">
                    <h3 class="mb-4">23 Reviews</h3>
                    <div class="review">
                        <div class="user-img" style="background-image: url('https://scontent-sin6-3.xx.fbcdn.net/v/t1.6435-9/132201829_386303379129171_9004750516161688930_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=FmMQJ4jRfP0AX9K5buJ&_nc_ht=scontent-sin6-3.xx&oh=be820017ace541484c525b0bfb037640&oe=616013AD')"></div>
                        <div class="desc">
                            <h4>
                                <span class="text-left">Van Tien</span>
                                <span class="text-right">22 jus 2021</span>
                            </h4>
                            <p class="star">
								   				<span>
								   					<i class="fas fa-star"></i>
								   					<i class="fas fa-star"></i>
								   					<i class="fas fa-star"></i>
								   					<i class="fas fa-star"></i>
								   					<i class="fas fa-star"></i>
							   					</span>
                                <span class="text-right"><a href="#" class="reply"><i
                                            class="icon-reply"></i></a></span>
                            </p>
                            <p>When she reached the first hills of the Italic Mountains, she had a last view
                                back on the skyline of her hometown Bookmarksgrov</p>
                        </div>
                    </div>
                    <div class="review">
                        <div class="user-img" style="background-image: url('https://scontent-sin6-1.xx.fbcdn.net/v/t1.6435-9/184351179_2870905003147692_8902101709393573265_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=E6Mczk2HalIAX--oJhy&_nc_ht=scontent-sin6-1.xx&oh=d14d75c7d9eaeb7087554a1131189b03&oe=615D594F')"></div>
                        <div class="desc">
                            <h4>
                                <span class="text-left">Dac Phuong</span>
                                <span class="text-right">16 may 2021</span>
                            </h4>
                            <p class="star">
								   				<span>
								   					<i class="fas fa-star"></i>
								   					<i class="fas fa-star"></i>
								   					<i class="fas fa-star"></i>
								   					<i class="fas fa-star"></i>
								   					<i class="fas fa-star"></i>
							   					</span>
                                <span class="text-right"><a href="#" class="reply"><i
                                            class="icon-reply"></i></a></span>
                            </p>
                            <p>When she reached the first hills of the Italic Mountains, she had a last view
                                back on the skyline of her hometown Bookmarksgrov</p>
                        </div>
                    </div>
                    <div class="review">
                        <div class="user-img" style="background-image: url('https://scontent-sin6-4.xx.fbcdn.net/v/t1.6435-9/107824253_281382433289713_7935313136683057114_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=lz8tX1g_CHgAX86h-K1&tn=H2GBIisj_EzKksyK&_nc_ht=scontent-sin6-4.xx&oh=c3484d5c6e42c708045ef526419a1cdc&oe=615FC969')"></div>
                        <div class="desc">
                            <h4>
                                <span class="text-left">Quan Thang</span>
                                <span class="text-right">14 March 2021</span>
                            </h4>
                            <p class="star">
								   				<span>
								   					<i class="fas fa-star"></i>
								   					<i class="fas fa-star"></i>
								   					<i class="fas fa-star"></i>
								   					<i class="fas fa-star"></i>
								   					<i class="fas fa-star-half-alt"></i>
							   					</span>
                                <span class="text-right"><a href="#" class="reply"><i
                                            class="icon-reply"></i></a></span>
                            </p>
                            <p>When she reached the first hills of the Italic Mountains, she had a last view
                                back on the skyline of her hometown Bookmarksgrov</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rating-wrap">
                    </div>.
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom_js')
@endsection
