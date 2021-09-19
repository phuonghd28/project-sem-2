@extends('clients.master')
@section('title')
    AptechFood
@endsection
@section('custom_css')
    <link rel="stylesheet" href="/assets/css/product.css">
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="navbar-element">
                <ul class="left-widget">
                    <li><a class="icon icon-inline menu-bar" href="#"><i class="fas fa-align-left"></i></a></li>
                </ul>
                <form class="search-form navbar-src">
                    <input type="text" placeholder="Search anything..." name="search">
                    <button class="btn btn-inline" id="search"><i class="fas fa-search"></i><span>search</span></button>
                </form>
                <form id="brand_filter">
                    <input type="hidden" name="category" id="category">
                </form>
            </div>
        </div>
    </div>
    <section class="product-list">
        <div class="container">
            @if(session('add'))
                <div class="alert alert-success alert-dismissible">
                    {{session('add')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product-filter">
                                <div class="product-page-number"><p>Showing 1 – {{$products->perPage()}}
                                        of {{$products->total()}} results</p></div>
                                <form id="filter-form">
                                    <select class="product-short-select custom-select" name="filter" id="filter">
                                        <option selected>Short by</option>
                                        <option value="1" {{$filter && $filter == 1 ? 'selected' : ''}}>Short by Best
                                            Sell
                                        </option>
                                        <option value="2" {{$filter && $filter == 2 ? 'selected' : ''}}>Short by New
                                            Item
                                        </option>
                                        <option value="3" {{$filter && $filter == 3 ? 'selected' : ''}}>Short by
                                            Featured
                                        </option>
                                    </select>
                                    <select class="product-short-select custom-select" name="price" id="price">
                                        <option selected>Short by price</option>
                                        <option value="1" {{$price && $price == 1 ? 'selected' : ''}}>Under 50.000
                                        </option>
                                        <option value="2" {{$price && $price == 2 ? 'selected' : ''}}>50.000 - 100.000
                                        </option>
                                        <option value="3" {{$price && $price == 3 ? 'selected' : ''}}>100.000 -
                                            200.000
                                        </option>
                                        <option value="4" {{$price && $price == 4 ? 'selected' : ''}}>200.000 -
                                            500.000
                                        </option>
                                        <option value="5" {{$price && $price == 5 ? 'selected' : ''}}>Over 500.000
                                        </option>
                                    </select>
                                </form>
                            </div>
                            <div class="row mb-3" style="background-color: #ffffff">
                                @foreach(\App\Models\Category::all() as $item)
                                    <div class="col-3 mt-3 mb-3">
                                        <button slot="{{$item->id}}" class="btn btn-inline btn_category"
                                                style="width: 100%;font-size: 10px">{{$item->name}}</button>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="row product-card-parent">
                        @if(count($products) > 0)
                            @foreach($products as $data)
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="product-card card-gape">
                                        <a href="{{route('product_detail',$data->id)}}">
                                            <div class="product-img"><img
                                                    src="{{ explode(',',$data->image)[0]  }}"
                                                    alt="product" width="100%" height="200px" style="object-fit: cover">
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
                                                <div class="product-name"><h6>{{$data->name}}</h6></div>
                                                <div class="d-flex justify-content-sm-between">
                                                    <div class="product-price">
                                                        <h6>
                                                            {{number_format($data->price)}} đ
                                                        </h6>
                                                    </div>
                                                    <div class="product-btn"><a href="{{route('addCart',$data->id)}}">
                                                            <div class="btn-adding">+</div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="row mt-3 mb-3">
                                <h2 class="text-center text-uppercase">Have no products !!</h2>
                            </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                            // config
                            $link_limit = 7; // maximum number of links (a little bit inaccurate, but will be ok for now)
                            ?>
                            <ul class="pagination ">
                                @if($products->currentPage() != 1)
                                    <li class="page-item"><a class="page-link" href="{{$products->url($products->url(1))}}"><i class="fas fa-backward"></i></a>
                                    </li>
                                @endif
                                @for ($i = 1; $i <= $products->lastPage(); $i++)
                                    <?php
                                    $half_total_links = floor($link_limit / 2);
                                    $from = $products->currentPage() - $half_total_links;
                                    $to = $products->currentPage() + $half_total_links;
                                    if ($products->currentPage() < $half_total_links) {
                                        $to += $half_total_links - $products->currentPage();
                                    }
                                    if ($products->lastPage() - $products->currentPage() < $half_total_links) {
                                        $from -= $half_total_links - ($products->lastPage() - $products->currentPage()) - 1;
                                    }
                                    ?>
                                    @if ($from < $i && $i < $to)
                                        <li class="page-item">
                                            <a class="page-link {{ ($products->currentPage() == $i) ? ' active' : '' }}"
                                               href="{{ $products->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endif
                                @endfor
                                @if($products->currentPage() != $products->lastPage())
                                        <li class="page-item"><a class="page-link"
                                                                 href="{{$products->url($products->lastPage())}}"> <i class="fas fa-forward"></i> </a></li>
                                    @endif
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@section('custom_js')
    <script>
        $(document).ready(function () {
            let submit = false
            $('#search').click(function () {
                if (submit) {
                    $('#filterForm').submit()
                } else {
                    submit = true
                }
            })
            $('.btn_category').click(function () {
                $('#category').val(this.slot)
                $('#brand_filter').submit()
            })
            $('#filter').change(function () {
                $('#filter-form').submit()
            })
            $('#price').change(function () {
                $('#filter-form').submit()
            })
        });
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
