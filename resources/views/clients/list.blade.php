@extends('clients.master')
@section('title')
    AptechFood
@endsection
@section('custom_css')
    <style>
        @import "https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700;800;900&display=swap";
        @import "https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap";

        .breadcrumb{-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;background:none;padding:0}.breadcrumb li a{color:var(--graycolor)}.breadcrumb li a:hover{color:#212529;text-decoration:underline}.breadcrumb .active{color:#212529}.breadcrumb-item + .breadcrumb-item::before{color:#212529}.pagination{-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;padding:15px 25px;border-radius:3px;background:var(--whitecolor)}.page-item{margin:0 6px}.page-item:first-child .page-link,.page-item:last-child .page-link{border-radius:3px}.page-item .active{color:var(--whitecolor);background:#212529}.page-link{width:40px;height:40px;line-height:40px;text-align:center;border-radius:3px;border:none;padding:0;color:#212529;background:var(--graycolor)}.page-link:hover{color:var(--whitecolor);background:#212529}.page-link:focus{-webkit-box-shadow:none;box-shadow:none}@media (max-width: 991px){.pagination{margin-top:0;margin-bottom:60px}.page-link{width:35px;height:35px;line-height:35px}}#slider-range{border-radius:30px;margin-top:15px}#slider-range span{border-radius:50%}#amount{color:#212529;font-size:18px;font-weight:500;border:none;background:none;text-align:center;margin-top:15px;width:100%}.ui-state-active{background:#212529!important;border-color:#212529!important}.custom-checkbox{padding-left:25px}.custom-control-label::before,.custom-control-label::after{left:-25px}.custom-control-input:checked ~ .custom-control-label::before{background:#212529;border-color:#212529;-webkit-box-shadow:none;box-shadow:none}.section{padding:100px 0 0}.section-heading{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;margin-bottom:50px}.title{position:relative}.title::before{position:absolute;content:"";top:50%;right:-80px;-webkit-transform:translateY(-50%);transform:translateY(-50%);width:60px;height:2px;border-radius:30px;background:#212529}.title::after{position:absolute;content:"";top:70%;right:-55px;-webkit-transform:translateY(-50%);transform:translateY(-50%);width:35px;height:2px;border-radius:30px;background:#212529}@media (max-width: 767px){.section{padding:60px 0 0}.section-heading{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;margin-bottom:30px}.section-heading h2{margin-bottom:45px}.title::before,.title::after{top:0;right:50%;-webkit-transform:translate(50%,0);transform:translate(50%,0)}.title::before{top:50px}.title::after{top:55px}}.product-slider .product-card{margin:0 15px}.product-card{width:100%;border-radius:3px;background:var(--whitecolor)}.product-card:hover{-webkit-box-shadow:0 8px 15px 0 rgba(0,0,0,0.1);box-shadow:0 8px 15px 0 rgba(0,0,0,0.1)}.product-card:hover .product-widget{opacity:1;bottom:15px}.product-card:hover .product-name h6 a{color:#212529}.product-img{position:relative}.product-img img{width:100%;border-radius:3px}.product-widget{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;position:absolute;bottom:0;left:0;width:100%;opacity:0;transition:all linear .3s;-webkit-transition:all linear .3s;-moz-transition:all linear .3s;-ms-transition:all linear .3s;-o-transition:all linear .3s}.product-widget li{margin:0 5px}.product-widget li button{border:none;outline:none;background:none}.product-widget li button i{width:38px;height:38px;font-size:14px;line-height:38px;text-align:center;border-radius:3px;color:var(--whitecolor);background:#212529;-webkit-box-shadow:var(--biconshadow);box-shadow:var(--biconshadow)}.product-content{padding:15px;border-top:1px solid var(--bordercolor)}.product-name h6{font-weight:500;margin-bottom:13px}.product-name h6 a{color:var(--headingcolor)}.product-price{margin-bottom:15px;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.product-price h6{letter-spacing:-.5px;color:var(--textcolor)}.product-price h6 del{color:#212529;font-size:16px;margin-right:5px}.product-rating{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:baseline;-ms-flex-align:baseline;align-items:baseline}.product-rating i{color:var(--starcolor);font-size:15px;margin-right:5px}.product-rating span{color:var(--textcolor);font-size:15px;font-weight:500}.product-btn a{width:100%;height:40px;font-size:14px;font-weight:500;padding:12px 0;border-radius:3px;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;color:#212529;border:1px solid #212529;text-shadow:var(--tshadow);transition:all linear .3s;-webkit-transition:all linear .3s;-moz-transition:all linear .3s;-ms-transition:all linear .3s;-o-transition:all linear .3s}.product-btn a:hover{color:var(--whitecolor);background:#212529}.product-btn i{margin-top:-2px;margin-right:8px}@media (max-width: 575px){.product-slider .product-card{width:200px;margin:0 10px}}.single-banner{background-repeat:no-repeat;background-position:center;background-size:cover;padding:100px 0;position:relative;z-index:1}.single-banner::before{position:absolute;content:"";top:0;left:0;width:100%;height:100%;background:-webkit-gradient(linear,left top,left bottom,from(rgba(92,186,71,0.3)),to(rgba(85,172,65,0.2)));z-index:-1}.single-content{text-align:center}.single-content h2{font-size:38px;margin-bottom:18px;color:var(--whitecolor)}@media (max-width: 767px){.single-banner{padding:80px 0}.single-content h2{font-size:35px}}.product-list{padding:60px 0}.product-ad{margin-bottom:30px}.product-ad a img{width:100%;border-radius:3px}.product-bar{padding:25px 15px;border-radius:3px;background:var(--whitecolor)}.product-bar h6{padding-bottom:15px;text-transform:uppercase;border-bottom:1px solid var(--bordercolor)}.product-bar-content input{width:100%;height:40px;padding:0 15px;border-radius:3px;margin-bottom:10px;border:1px solid var(--bordercolor)}.product-bar-content .custom-control-label{font-size:15px;cursor:pointer;text-transform:capitalize}.scroll-list{height:254px;padding:0 8px;overflow-y:scroll}.scroll-list li{margin:8px 0;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.scroll-list li:hover .custom-control-label,.scroll-list li:hover .product-cate-number{color:#212529}.product-cate-number{font-size:15px}.clear-filter-btn{border:none;outline:none;background:none;width:100%;height:40px;font-size:14px;font-weight:500;padding:12px 0;margin-top:10px;border-radius:3px;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;color:#212529;border:1px solid #212529;text-shadow:2px 3px 8px rgba(0,0,0,0.1);transition:all linear .3s;-webkit-transition:all linear .3s;-moz-transition:all linear .3s;-ms-transition:all linear .3s;-o-transition:all linear .3s}.clear-filter-btn:hover{color:var(--whitecolor);background:#212529}.clear-filter-btn i{margin-top:-2px;margin-right:5px}.product-filter{background:var(--whitecolor);border-radius:3px;padding:15px 25px;margin-bottom:30px;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.product-card-type{display:-webkit-box;display:-ms-flexbox;display:flex}.product-card-type li{margin-left:12px}.product-card-type li i{width:40px;height:40px;line-height:40px;text-align:center;border-radius:3px;cursor:pointer;background:var(--graycolor)}.grid-verti.active i,.grid-hori.active i{color:var(--whitecolor);background:#212529}.card-gape{margin-bottom:30px}body{background:var(--graycolor)}.pagination{margin-bottom:30px}.nasted-dropdown{height:254px}@media (max-width: 991px){.product-bar{margin-bottom:30px}.product-ad{text-align:center}}@media (max-width: 767px){.product-list{padding:80px 0}.product-filter{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.product-page-number,.product-short-select{margin-bottom:15px}}@media (max-width: 575px){.product-list{padding:60px 0}.product-card-parent .col-6{padding:0 10px}}@media (min-width: 992px) and (max-width: 1199px){.scroll-list,.nasted-dropdown{height:210px}}:root{--h1size:50px;--h2size:28px;--h3size:24px;--h4size:20px;--h5size:18px;--h6size:16px;--bodysize:16px;--rweight:400;--mweight:500;--sweight:600;--bweight:700;--eweight:800;--bcweight:900;--pfamily:Heebo,sans-serif;--sfamily:'Playfair Display',serif;--textcolor:#555;--brandcolor:#212529;--whitecolor:#fff;--headingcolor:#232d3b;--headerborder:#212529;--navbarcolor:#ddffd5;--bordercolor:#e8e8e8;--graycolor:#f5f5f5;--pldrcolor:#777;--starcolor:#ffcc23;--removecolor:#ff3838;--brandlight:#212529;--bshadow:0 15px 35px 0 rgba(0,0,0,0.1);--bcardshadow:0 2px 48px 0 rgba(0,0,0,0.08);--biconshadow:0 8px 15px 0 rgba(0,0,0,0.1);--tshadow:2px 3px 8px rgba(0,0,0,0.1)}*{margin:0;padding:0;outline:0}img{vertical-align:middle}a{text-decoration:none;display:inline-block}a:hover{text-decoration:none}ul,ol{list-style:none}h1,h2,h3,h4,h5,h6,p,ul,li,span,label{margin-bottom:0}html,body{scroll-behavior:smooth}body{font-size:var(--bodysize);font-weight:var(--rweight);font-family:var(--pfamily);line-height:26px;color:var(--textcolor);background:var(--graycolor)}h1{font-size:var(--h1size);font-weight:var(--bweight);font-family:var(--sfamily);color:var(--headingcolor)}h2{font-size:var(--h2size);font-weight:var(--bweight);font-family:var(--sfamily);color:var(--headingcolor)}h3{font-size:var(--h3size);font-weight:var(--bweight);font-family:var(--sfamily);color:var(--headingcolor)}h4{font-size:var(--h4size);font-weight:var(--mweight);font-family:var(--pfamily);color:var(--headingcolor)}h5{font-size:var(--h5size);font-weight:var(--mweight);font-family:var(--pfamily);color:var(--headingcolor)}h6{font-size:var(--h6size);font-weight:var(--mweight);font-family:var(--pfamily);color:var(--headingcolor)}input::-webkit-input-placeholder,textarea::-webkit-input-placeholder{color:var(--pldrcolor);font-size:15px;letter-spacing:.3px}input:-ms-input-placeholder,textarea:-ms-input-placeholder{color:var(--pldrcolor);font-size:15px;letter-spacing:.3px}input::-ms-input-placeholder,textarea::-ms-input-placeholder{color:var(--pldrcolor);font-size:15px;letter-spacing:.3px}input::placeholder,textarea::placeholder{color:var(--pldrcolor);font-size:15px;letter-spacing:.3px}button:focus{outline:none}@media (max-width: 991px){.cont-rev{-webkit-box-orient:vertical;-webkit-box-direction:reverse;-ms-flex-direction:column-reverse;flex-direction:column-reverse}}.header-select{border:none;width:100px;height:45px;padding:8px;font-size:15px;color:var(--whitecolor);background:transparent;text-transform:capitalize;cursor:pointer}.header-select:focus{-webkit-box-shadow:none;box-shadow:none}.header-select .clr{color:var(--headingcolor)}.product-short-select{height:40px;width:250px;font-size:15px;border-radius:8px;cursor:pointer}.product-short-select:focus{border-color:var(--brandcolor);-webkit-box-shadow:none;box-shadow:none}.navbar-dropdown{position:relative}.navbar-dropdown:hover .dropdown-list{visibility:visible;opacity:1;top:56px}.dropdown-indicator{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.dropdown-indicator span{margin-right:5px}.dropdown-indicator i{font-size:10px}.dropdown-list{position:absolute;top:80px;left:0;z-index:3;width:225px;opacity:0;overflow:hidden;visibility:hidden;border-radius:3px;background:var(--whitecolor);border-top:2px solid var(--brandcolor);-webkit-box-shadow:0 15px 35px 0 rgba(0,0,0,0.1);box-shadow:0 15px 35px 0 rgba(0,0,0,0.1);transition:all linear .3s;-webkit-transition:all linear .3s;-moz-transition:all linear .3s;-ms-transition:all linear .3s;-o-transition:all linear .3s}.dropdown-list li{border-bottom:1px solid var(--bordercolor)}.dropdown-list li:last-child{border-bottom:none}.dropdown-link{width:100%;font-size:15px;font-weight:500;padding:12px 25px;color:var(--textcolor);transition:all linear .3s;-webkit-transition:all linear .3s;-moz-transition:all linear .3s;-ms-transition:all linear .3s;-o-transition:all linear .3s}.dropdown-link:hover{color:var(--whitecolor);background:var(--brandcolor)}@media (max-width: 767px){.navbar-dropdown{position:inherit}.dropdown-indicator{-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.dropdown-list{position:inherit;visibility:visible;opacity:1;width:100%;border:none;display:none;-webkit-box-shadow:none;box-shadow:none;padding:0 25px;background:transparent}.dropdown-link{font-size:14px;padding:7px 15px;border-radius:8px}}.nasted-dropdown{height:402px;padding:0 8px;overflow-y:scroll}.nasted-dropdown li{border-bottom:1px solid var(--bordercolor)}.nasted-dropdown li:last-child{border-bottom:none}.nasted-dropdown li a{width:100%;padding:8px;color:var(--textcolor);text-transform:capitalize;font-size:15px;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;transition:all linear .3s;-webkit-transition:all linear .3s;-moz-transition:all linear .3s;-ms-transition:all linear .3s;-o-transition:all linear .3s}.nasted-dropdown li a:hover{color:var(--brandcolor)}.nasted-dropdown li a i{font-size:12px}.nasted-dropdown li ul{padding:0 18px;display:none}.nasted-dropdown li ul li a{font-size:14px;padding:6px 0;position:relative;margin-left:25px}.nasted-dropdown li ul li a::before{position:absolute;content:"";top:50%;left:-20px;-webkit-transform:translateY(-50%);transform:translateY(-50%);width:10px;height:1px;background:var(--textcolor)}@media (min-width: 992px) and (max-width: 1199px){.nasted-dropdown{height:266px}}.navbar-megamenu{position:static}.navbar-megamenu:hover .megamenu{visibility:visible;opacity:1;top:56px}.megamenu{position:absolute;top:80px;left:0;z-index:3;width:100%;opacity:0;overflow:hidden;visibility:hidden;border-radius:3px;padding:15px;background:var(--whitecolor);border-top:2px solid var(--brandcolor);-webkit-box-shadow:0 15px 35px 0 rgba(0,0,0,0.1);box-shadow:0 15px 35px 0 rgba(0,0,0,0.1);transition:all linear .3s;-webkit-transition:all linear .3s;-moz-transition:all linear .3s;-ms-transition:all linear .3s;-o-transition:all linear .3s}.megamenu ul{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-ms-flex-wrap:wrap;flex-wrap:wrap}.megamenu ul li{margin:10px 15px}.megamenu ul li a{width:240px;padding:18px 30px;border-radius:3px;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;background:var(--graycolor);transition:all linear .3s;-webkit-transition:all linear .3s;-moz-transition:all linear .3s;-ms-transition:all linear .3s;-o-transition:all linear .3s}.megamenu ul li a:hover{background:#212529}.megamenu ul li a:hover i,.megamenu ul li a:hover span{color:var(--whitecolor)}.megamenu ul li a i{font-size:30px;border-radius:3px;display:inline-block;color:#212529;margin-right:12px;transition:all linear .3s;-webkit-transition:all linear .3s;-moz-transition:all linear .3s;-ms-transition:all linear .3s;-o-transition:all linear .3s}.megamenu ul li a span{font-size:15px;font-weight:500;color:var(--textcolor);text-transform:capitalize;transition:all linear .3s;-webkit-transition:all linear .3s;-moz-transition:all linear .3s;-ms-transition:all linear .3s;-o-transition:all linear .3s}@media (max-width: 767px){.navbar-megamenu{position:inherit}.dropdown-indicator{-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.megamenu{position:inherit;visibility:visible;opacity:1;width:100%;height:250px;border:none;display:none;-webkit-box-shadow:none;box-shadow:none;background:transparent;overflow-y:scroll;padding:0 15px}.megamenu ul li{margin:0;border-bottom:1px solid var(--bordercolor)}.megamenu ul li a{width:210px;padding:15px 0}.megamenu ul li a:hover{background:transparent}.megamenu ul li a:hover i,.megamenu ul li a:hover span{color:#212529}}@media (min-width: 768px) and (max-width: 1199px){.megamenu{height:200px;overflow-y:scroll}.megamenu ul li{margin:10px}.megamenu ul li a{width:210px}}.btn{border:none;font-size:13px;font-weight:500;text-transform:uppercase;padding:13px 32px;letter-spacing:.5px;border-radius:3px;border:2px solid #212529}.btn:focus{-webkit-box-shadow:none!important;box-shadow:none!important}.btn i{margin-right:8px}.btn-inline{color:var(--whitecolor);background:#212529}.btn-inline:hover{color:#212529;background:var(--whitecolor)}.btn-outline{color:#212529;background:var(--whitecolor)}.btn-outline:hover{color:var(--whitecolor);background:#212529}.search-form{width:100%;display:block;position:relative}.search-form input{width:58%;height:45px;border:none;outline:none;border-radius:3px;background:var(--whitecolor);padding:0 150px 0 20px}.search-form .btn{top:0;right:0;height:45px;padding:11px 32px}.footer-form{width:100%}.footer-form form{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.footer-form form input{width:100%;height:50px;border:none;background:var(--graycolor);border-radius:8px;padding:0 20px;margin-bottom:20px}.footer-form form .btn{width:100%;border-radius:8px;text-align:center;padding:12px 0;font-size:13px}.footer-form form .btn i{margin-right:8px}.review-form h3{margin:0 0 25px 15px}.review-form .btn{margin-left:15px}.grid-input{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;margin-bottom:30px}.grid-input input{width:100%;height:50px;margin:0 15px;padding:0 20px;border-radius:8px;background:var(--whitecolor);border:1px solid var(--bordercolor)}.grid-input input:focus-within{border-color:#212529}.row-input{margin:0 15px 20px}.row-input input{width:100%;height:50px;padding:15px 20px;border-radius:8px;background:var(--whitecolor);border:1px solid var(--bordercolor)}.row-input input:focus-within{border-color:#212529}.row-input textarea{width:100%;height:250px;padding:15px 20px;border-radius:8px;background:var(--whitecolor);border:1px solid var(--bordercolor)}.row-input textarea:focus-within{border-color:#212529}.review-rating{margin:0 15px 30px;display:-webkit-box;display:-ms-flexbox;display:flex}.review-rating li{margin-right:15px}.review-rating li i{width:45px;height:45px;line-height:45px;text-align:center;border-radius:50%;background:var(--graycolor);color:var(--textcolor);font-size:14px;text-shadow:2px 3px 8px rgba(0,0,0,0.1);cursor:pointer}.review-rating li i:hover{color:var(--whitecolor);background:var(--starcolor)}@media (max-width: 767px){.grid-input{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;margin-bottom:0}.grid-input input{margin-bottom:20px}.row-input{margin:0 0 20px}.star-rating{margin:0 0 20px!important}.review-form .btn{margin-left:0}}.form-group{margin-bottom:25px}.form-group textarea{height:180px;padding:12px 20px}.form-label{font-weight:500;margin:0 0 7px 3px}.form-control{width:100%;height:45px;padding:0 20px;border-radius:8px;background:var(--whitecolor);border:1px solid var(--bordercolor)}.form-control:focus-within{background:var(--whitecolor);border-color:#212529;-webkit-box-shadow:none;box-shadow:none;outline:0}.form-control::-webkit-file-upload-button{height:45px;border:none;background:none}.form-control::-webkit-file-upload-button:focus{border:none;outline:none}.icon{font-size:14px;width:30px;height:30px;line-height:40px;text-align:center;border-radius:3px;text-shadow:var(--tshadow);-webkit-box-shadow:var(--bshadow);box-shadow:var(--bshadow);transition:all linear .3s;-webkit-transition:all linear .3s;-moz-transition:all linear .3s;-ms-transition:all linear .3s;-o-transition:all linear .3s}.icon-inline{color:var(--textcolor);background:var(--whitecolor)}.icon-inline:hover{color:var(--whitecolor);background:#212529}@media (max-width: 767px){.icon{width:30px;height:25px;line-height:35px}}.slider-arrow:hover .dandik,.slider-arrow:hover .bamdik{visibility:visible;opacity:1}.slider-dots ul{position:absolute;bottom:30px;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}.slider-dots ul li{width:25px;height:5px;border-radius:30px;background:var(--graycolor);margin:0 10px;display:inline-block;cursor:pointer;-webkit-box-shadow:0 15px 35px 0 rgba(0,0,0,0.1);box-shadow:0 15px 35px 0 rgba(0,0,0,0.1)}.slider-dots ul li button{display:none}.slider-dots ul li.slick-active{background:#212529}.dandik,.bamdik{position:absolute;top:38%;-webkit-transform:translateY(-50%);transform:translateY(-50%);font-size:16px;width:45px;height:45px;line-height:45px;text-align:center;border-radius:3px;color:#212529;background:var(--whitecolor);text-shadow:var(--tshadow);-webkit-box-shadow:var(--bshadow);box-shadow:var(--bshadow);visibility:hidden;opacity:0;cursor:pointer;z-index:1;transition:all linear .3s;-webkit-transition:all linear .3s;-moz-transition:all linear .3s;-ms-transition:all linear .3s;-o-transition:all linear .3s}.dandik:hover,.bamdik:hover{color:var(--whitecolor);background:#212529}.dandik{right:-10px}.bamdik{left:-10px}@media (min-width: 576px) and (max-width: 1199px){.dandik{right:-18px}.bamdik{left:-18px}}.section{padding:100px 0 0}.section-heading{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;margin-bottom:50px}.title{position:relative}.title::before{position:absolute;content:"";top:50%;right:-80px;-webkit-transform:translateY(-50%);transform:translateY(-50%);width:60px;height:2px;border-radius:30px;background:#212529}.title::after{position:absolute;content:"";top:70%;right:-55px;-webkit-transform:translateY(-50%);transform:translateY(-50%);width:35px;height:2px;border-radius:30px;background:#212529}@media (max-width: 767px){.section{padding:60px 0 0}.section-heading{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;margin-bottom:30px}.section-heading h2{margin-bottom:45px}.title::before,.title::after{top:0;right:50%;-webkit-transform:translate(50%,0);transform:translate(50%,0)}.title::before{top:50px}.title::after{top:55px}}.header-part{background:#212529}.header-info{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:start;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.header-info li{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;padding:10px 25px;border-right:1px solid #212529}.header-info li:last-child{border-right:0}.header-info li i{margin-right:8px}.header-info li i,.header-info li p{font-size:15px;color:var(--whitecolor)}.header-option,.header-curr,.header-lang{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.header-option{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end}.header-curr i,.header-lang i{font-size:15px;color:var(--whitecolor);margin-top:2px}.header-lang{padding-left:30px;border-left:1px solid #212529}@media (max-width: 767px){.header-info{display:none}.header-option{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.header-curr{padding-left:30px}}.navbar-part{background:var(--navbarcolor)}.navbar-fixed{position:-webkit-sticky;position:sticky;top:0;left:0;width:100%;z-index:3;-webkit-box-shadow:0 5px 10px 0 rgba(0,0,0,0.15);box-shadow:0 5px 10px 0 rgba(0,0,0,0.15);transition:all linear .3s;-webkit-transition:all linear .3s;-moz-transition:all linear .3s;-ms-transition:all linear .3s;-o-transition:all linear .3s}.navbar-element{padding-top:20px;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.left-widget{display:none}.navbar-logo img{width:180px;height:auto}.navbar-src{margin:0 12px}.right-widget{display:-webkit-box;display:-ms-flexbox;display:flex}.right-widget li{margin-right:15px}.right-widget li:last-child{margin-right:0}.right-widget li a{position:relative}.right-widget li a sup{position:absolute;top:-5px;right:-5px;height:18px;font-size:12px;line-height:18px;padding:0 5px;border-radius:30px;color:var(--whitecolor);background:var(--brandcolor);text-shadow:var(--tshadow)}.navbar-slide{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.navbar-slide-cross,.navbar-slide-logo,.navbar-slide-src{display:none}.navbar-list{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.navbar-link{font-weight:500;padding:15px 24px;border-radius:5px;color:var(--headingcolor);text-transform:capitalize;transition:all linear .3s;-webkit-transition:all linear .3s;-moz-transition:all linear .3s;-ms-transition:all linear .3s;-o-transition:all linear .3s}.navbar-link:hover{color:var(--brandcolor)}.navbar-item.active .navbar-link{color:var(--brandcolor)}@media (max-width: 767px){.navbar-element{padding:12px 0}.left-widget{display:block}.right-widget li{margin-right:0}.navbar-logo{margin:0 15px}.navbar-logo img{width:160px}.navbar-src,.right-widget li{display:none}.right-widget li:first-child{display:block}.navbar-slide{position:fixed;top:0;left:0;width:100%;height:100vh;z-index:3;background:rgba(0,0,0,0.7);visibility:hidden;opacity:0;transition:all linear .3s;-webkit-transition:all linear .3s;-moz-transition:all linear .3s;-ms-transition:all linear .3s;-o-transition:all linear .3s}.navbar-slide.active{visibility:visible;opacity:1}.navbar-slide.active .navbar-content{left:0}.navbar-content{position:fixed;top:0;left:-275px;z-index:3;width:270px;height:100vh;padding:15px 15px 0;overflow-y:scroll;overflow-x:hidden;background:var(--graycolor);-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;-webkit-box-shadow:0 3px 7px 0 rgba(0,0,0,0.1);box-shadow:0 3px 7px 0 rgba(0,0,0,0.1);-webkit-transition:all linear .4s;transition:all linear .4s}.navbar-slide-cross,.navbar-slide-logo,.navbar-slide-src{display:block}.navbar-slide-cross{text-align:center;margin-bottom:25px}.navbar-slide-logo{text-align:center;padding-bottom:20px;border-bottom:1px solid var(--bordercolor)}.navbar-slide-logo a img{width:180px}.navbar-slide-src{margin:30px 0}.navbar-slide-src .btn{font-size:14px;padding:12px 15px}.navbar-slide-src .btn i{margin-right:0}.navbar-slide-src .btn span{display:none}.navbar-list{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start;margin-bottom:70px}.navbar-item{width:100%;border-bottom:1px solid var(--bordercolor)}.navbar-link{padding:12px 0;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}}@media (min-width: 768px) and (max-width: 991px){.navbar-link{padding:15px 18px}.navbar-logo img{width:160px;height:auto}.navbar-src .btn{font-size:14px;padding:12px 15px}.navbar-src .btn i{margin-right:0}.navbar-src .btn span{display:none}}.btmbar-part{position:fixed;bottom:0;left:0;width:100%;z-index:3;background:var(--whitecolor);border-radius:10px 10px 0 0;-webkit-box-shadow:0 -5px 15px 0 rgba(0,0,0,0.1);box-shadow:0 -5px 15px 0 rgba(0,0,0,0.1);display:none}.btmbar-widget{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.btmbar-widget li a{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;width:70px;padding:8px 0;border-radius:8px;position:relative}.btmbar-widget li a:hover{background:var(--graycolor)}.btmbar-widget li a:hover i{color:var(--brandcolor)}.btmbar-widget li a:hover span{color:var(--brandcolor)}.btmbar-widget li a i{color:var(--textcolor);font-size:13px;text-shadow:2px 3px 8px rgba(0,0,0,0.1)}.btmbar-widget li a span{color:var(--textcolor);font-size:11px;line-height:18px}.btmbar-widget li a sup{position:absolute;top:0;right:15px;height:18px;line-height:18px;padding:0 5px;border-radius:30px;background:var(--brandcolor);color:var(--whitecolor);font-size:12px;text-shadow:2px 3px 8px rgba(0,0,0,0.1)}@media (max-width: 767px){.btmbar-part{display:block}}.news-part{padding:70px 0;background-repeat:no-repeat;background-position:center;background-size:cover;position:relative;z-index:1}.news-part::before{position:absolute;content:"";top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.3);z-index:-1}.news-content{margin-top:8px}.news-content h2{font-size:35px;color:var(--whitecolor)}.news-form input{height:55px}.news-form .btn{top:5px;right:5px}@media (max-width: 767px){.news-part{padding:60px 0}.news-content{margin:0 0 30px;text-align:center}.news-form input{padding:0 75px 0 20px}.news-form .btn{padding:11px 20px}.news-form .btn i{margin-right:0}.news-form .btn span{display:none}}@media (min-width: 768px) and (max-width: 991px){.news-content{margin-top:0}.news-form{margin-top:15px}.news-form input{padding:0 90px 0 20px}}.footer-part{padding:100px 0 80px;border-top:1px solid var(--bordercolor)}.footer-content h3{margin-bottom:25px;display:inline-block}.footer-content a img{width:180px;margin-bottom:25px}.footer-content p{margin-bottom:30px}.footer-icon{display:-webkit-box;display:-ms-flexbox;display:flex}.footer-icon li{margin-right:15px}.footer-widget{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.footer-widget ul{margin-right:50px}.footer-widget ul li{margin:15px 0}.footer-widget ul li a{color:var(--textcolor);margin-left:25px;position:relative}.footer-widget ul li a::before{position:absolute;content:"";top:50%;left:-25px;-webkit-transform:translateY(-50%);transform:translateY(-50%);width:15px;height:2px;border-radius:30px;background:var(--brandcolor)}.footer-widget ul li a:hover{color:var(--brandcolor);text-decoration:underline}.download-app{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.download-app li{margin-right:15px}.download-app li:last-child{margin-right:0}.download-app li a img{width:160px}@media (max-width: 767px){.footer-part{padding:60px 0 0}.footer-content{text-align:center;margin-bottom:50px}.footer-content h3{margin-bottom:45px}.footer-icon{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.footer-icon li{margin:0 8px}.footer-widget{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.footer-widget ul{margin:0 15px}.download-app{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.download-app li{margin:0 8px}.download-app li a img{width:130px}}@media (min-width: 576px) and (max-width: 767px){.footer-widget ul{margin:0 30px}.download-app{-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.download-app a img{width:160px}}@media (min-width: 768px) and (max-width: 991px){.footer-icon{margin-bottom:60px}}@media (min-width: 992px) and (max-width: 1199px){.footer-widget ul{margin-right:35px}.download-app li a img{width:135px}}.footer-bottom{padding:15px 0;background:var(--brandcolor)}.footer-bottom .container{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.footer-bottom .container p{color:var(--graycolor);font-size:15px}.footer-bottom .container p a{color:var(--whitecolor)}.footer-bottom .container p a:hover{text-decoration:underline}.pay-card li{display:inline-block;margin-left:10px}.pay-card li a img{width:45px;border-radius:3px}@media (max-width: 767px){.footer-bottom{padding:15px 0 60px;margin-top:60px}.footer-bottom .container{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;text-align:center}.footer-bottom .container p{margin-bottom:15px}}
    </style>
@endsection
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="navbar-element">
                <ul class="left-widget">
                    <li><a class="icon icon-inline menu-bar" href="#"><i class="fas fa-align-left"></i></a></li>
                </ul>
                <form class="search-form navbar-src"><input type="text" placeholder="Search anything...">
                    <button class="btn btn-inline"><i class="fas fa-search"></i><span>search</span></button>
                </form>
                <ul class="right-widget">
                    <li><a class="icon icon-inline" href="#"><i class="fas fa-user"></i></a></li>
                    <li><a class="icon icon-inline" href="#"><i
                                class="fas fa-heart"></i><sup>0</sup></a></li>
                    <li><a class="icon icon-inline" href="#"><i
                                class="fas fa-shopping-cart"></i><sup>0</sup></a></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="product-list">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product-filter">
                                <div class="product-page-number"><p>Showing 1–12 of 60 results</p></div>
                                <select class="product-short-select custom-select">
                                    <option selected>Short by Best Sell</option>
                                    <option value="1">Short by New Item</option>
                                    <option value="2">Short by Popularity</option>
                                    <option value="3">Short by Average review</option>
                                </select>
                                <ul class="product-card-type">
                                    <li class="grid-verti active"><i class="fas fa-grip-vertical"></i></li>
                                    <li class="grid-hori"><i class="fas fa-grip-horizontal"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row product-card-parent">
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                            <div class="product-card card-gape">
                                <div class="product-img"><img
                                        src="https://marketplace.foodotawp.com/wp-content/uploads/2021/04/Normas.jpg"
                                        alt="product">
                                    <ul class="product-widget">
                                        <li>
                                            <button><i class="fas fa-eye"></i></button>
                                        </li>
                                        <li>
                                            <button><i class="fas fa-heart"></i></button>
                                        </li>
                                        <li>
                                            <button><i class="fas fa-exchange-alt"></i></button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name"><h6><a href="#">Pizza</a></h6></div>
                                    <div class="product-price">
                                        <h6>
                                            <del>$80</del>
                                            $150
                                        </h6>
                                        <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                                    </div>
                                    <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                            <div class="product-card card-gape">
                                <div class="product-img"><img
                                        src="https://upload.wikimedia.org/wikipedia/commons/d/de/Korean_fried_chicken_2.jpg"
                                        alt="product">
                                    <ul class="product-widget">
                                        <li>
                                            <button><i class="fas fa-eye"></i></button>
                                        </li>
                                        <li>
                                            <button><i class="fas fa-heart"></i></button>
                                        </li>
                                        <li>
                                            <button><i class="fas fa-exchange-alt"></i></button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name"><h6><a href="#">fried chicken</a></h6></div>
                                    <div class="product-price">
                                        <h6>
                                            <del>$80</del>
                                            $150
                                        </h6>
                                        <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                                    </div>
                                    <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                            <div class="product-card card-gape">
                                <div class="product-img"><img
                                        src="https://chupanhmonan.com/wp-content/uploads/2016/11/blueberry-cake.jpg"
                                        alt="product">
                                    <ul class="product-widget">
                                        <li>
                                            <button><i class="fas fa-eye"></i></button>
                                        </li>
                                        <li>
                                            <button><i class="fas fa-heart"></i></button>
                                        </li>
                                        <li>
                                            <button><i class="fas fa-exchange-alt"></i></button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name"><h6><a href="#">avocado sandwich</a></h6></div>
                                    <div class="product-price">
                                        <h6>
                                            <del>$80</del>
                                            $150
                                        </h6>
                                        <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                                    </div>
                                    <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                            <div class="product-card card-gape">
                                <div class="product-img"><img
                                        src="https://cdn.pixabay.com/photo/2019/01/30/08/25/drink-3964022_1280.jpg"
                                        alt="product">
                                    <ul class="product-widget">
                                        <li>
                                            <button><i class="fas fa-eye"></i></button>
                                        </li>
                                        <li>
                                            <button><i class="fas fa-heart"></i></button>
                                        </li>
                                        <li>
                                            <button><i class="fas fa-exchange-alt"></i></button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name"><h6><a href="#">milk coffee</a></h6></div>
                                    <div class="product-price">
                                        <h6>
                                            <del>$80</del>
                                            $150
                                        </h6>
                                        <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                                    </div>
                                    <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                            <div class="product-card card-gape">
                                <div class="product-img"><img
                                        src="https://vietnamaviation.vn/hinh-anh-nhung-mon-an-ngon/imager_11_6675_700.jpg"
                                        alt="product">
                                    <ul class="product-widget">
                                        <li>
                                            <button><i class="fas fa-eye"></i></button>
                                        </li>
                                        <li>
                                            <button><i class="fas fa-heart"></i></button>
                                        </li>
                                        <li>
                                            <button><i class="fas fa-exchange-alt"></i></button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name"><h6><a href="#">fried shrimp</a></h6></div>
                                    <div class="product-price">
                                        <h6>
                                            <del>$80</del>
                                            $150
                                        </h6>
                                        <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                                    </div>
                                    <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                            <div class="product-card card-gape">
                                <div class="product-img"><img
                                        src="https://marketplace.foodotawp.com/wp-content/uploads/2021/04/monal.jpg"
                                        alt="product">
                                    <ul class="product-widget">
                                        <li>
                                            <button><i class="fas fa-eye"></i></button>
                                        </li>
                                        <li>
                                            <button><i class="fas fa-heart"></i></button>
                                        </li>
                                        <li>
                                            <button><i class="fas fa-exchange-alt"></i></button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name"><h6><a href="#">burgers with ham</a></h6></div>
                                    <div class="product-price">
                                        <h6>
                                            <del>$80</del>
                                            $150
                                        </h6>
                                        <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                                    </div>
                                    <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                            <div class="product-card card-gape">
                                <div class="product-img"><img
                                        src="https://marketplace.foodotawp.com/wp-content/uploads/2021/04/mcdonalds.jpg"
                                        alt="product">
                                    <ul class="product-widget">
                                        <li>
                                            <button><i class="fas fa-eye"></i></button>
                                        </li>
                                        <li>
                                            <button><i class="fas fa-heart"></i></button>
                                        </li>
                                        <li>
                                            <button><i class="fas fa-exchange-alt"></i></button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name"><h6><a href="#">salad sandwich</a></h6></div>
                                    <div class="product-price">
                                        <h6>
                                            <del>$80</del>
                                            $150
                                        </h6>
                                        <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                                    </div>
                                    <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                            <div class="product-card card-gape">
                                <div class="product-img"><img
                                        src="https://marketplace.foodotawp.com/wp-content/uploads/2021/04/Howdy.jpg"
                                        alt="product">
                                    <ul class="product-widget">
                                        <li>
                                            <button><i class="fas fa-eye"></i></button>
                                        </li>
                                        <li>
                                            <button><i class="fas fa-heart"></i></button>
                                        </li>
                                        <li>
                                            <button><i class="fas fa-exchange-alt"></i></button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name"><h6><a href="#">Sausage salad-soft drink</a></h6></div>
                                    <div class="product-price">
                                        <h6>
                                            <del>$80</del>
                                            $150
                                        </h6>
                                        <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                                    </div>
                                    <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                            <div class="product-card card-gape">
                                <div class="product-img"><img
                                        src="https://massageishealthy.com/wp-content/uploads/2019/06/hinh-anh-do-an-hinh-anh-mon-an-thuc-an-ngon-dep-viet-nam-the-gioi-2.jpg"
                                        alt="product">
                                    <ul class="product-widget">
                                        <li>
                                            <button><i class="fas fa-eye"></i></button>
                                        </li>
                                        <li>
                                            <button><i class="fas fa-heart"></i></button>
                                        </li>
                                        <li>
                                            <button><i class="fas fa-exchange-alt"></i></button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name"><h6><a href="#">egg sandwich</a></h6></div>
                                    <div class="product-price">
                                        <h6>
                                            <del>$80</del>
                                            $150
                                        </h6>
                                        <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                                    </div>
                                    <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                            <div class="product-card card-gape">
                                <div class="product-img"><img
                                        src="https://marketplace.foodotawp.com/wp-content/uploads/2021/04/hardees.jpg"
                                        alt="product">
                                    <ul class="product-widget">
                                        <li>
                                            <button><i class="fas fa-eye"></i></button>
                                        </li>
                                        <li>
                                            <button><i class="fas fa-heart"></i></button>
                                        </li>
                                        <li>
                                            <button><i class="fas fa-exchange-alt"></i></button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name"><h6><a href="#">sandwich bread</a></h6></div>
                                    <div class="product-price">
                                        <h6>
                                            <del>$80</del>
                                            $150
                                        </h6>
                                        <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                                    </div>
                                    <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                            <div class="product-card card-gape">
                                <div class="product-img"><img
                                        src="https://marketplace.foodotawp.com/wp-content/uploads/2021/04/downtown.jpg">
                                    <ul class="product-widget">
                                        <li>
                                            <button><i class="fas fa-eye"></i></button>
                                        </li>
                                        <li>
                                            <button><i class="fas fa-heart"></i></button>
                                        </li>
                                        <li>
                                            <button><i class="fas fa-exchange-alt"></i></button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name"><h6><a href="#">Sausage bread</a></h6></div>
                                    <div class="product-price">
                                        <h6>
                                            <del>$80</del>
                                            $150
                                        </h6>
                                        <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                                    </div>
                                    <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                            <div class="product-card card-gape">
                                <div class="product-img"><img
                                        src="https://marketplace.foodotawp.com/wp-content/uploads/2021/04/Arcadian.jpg"
                                        alt="product">
                                    <ul class="product-widget">
                                        <li>
                                            <button><i class="fas fa-eye"></i></button>
                                        </li>
                                        <li>
                                            <button><i class="fas fa-heart"></i></button>
                                        </li>
                                        <li>
                                            <button><i class="fas fa-exchange-alt"></i></button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name"><h6><a href="#">coffee milk cake</a></h6></div>
                                    <div class="product-price">
                                        <h6>
                                            <del>$80</del>
                                            $150
                                        </h6>
                                        <div class="product-rating"><i class="fas fa-star"></i><span>4.5/2</span></div>
                                    </div>
                                    <div class="product-btn"><a href="#"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="pagination ">
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="fas fa-long-arrow-alt-left"></i></a></li>
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">...</li>
                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="fas fa-long-arrow-alt-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
@section('content')

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
    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop()) {
                    $('header').addClass('sticky')
                } else {
                    $('header').removeClass('sticky')
                }
            })
        });
    </script>
@endsection