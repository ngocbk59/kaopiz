@extends('layouts.client-master')
@section('title', 'Danh sách sản phẩm')
@section('breadcrumb-area')
<div class="breadcrumb-area bg--white-6 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">{{$cate->cate_name}}</h1>
                <ul class="breadcrumb justify-content-center">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="current"><span>{{$cate->cate_name}}</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="shop-page-wrapper">
    <div class="container">
        <div class="row pt--45 pt-md--35 pt-sm--20 pb--60 pb-md--50 pb-sm--40">
            <div class="col-12">
                <div class="shop-toolbar">
                    <div class="shop-toolbar__inner">
                        <div class="row align-items-center">
                            <div class="col-md-6 text-md-left text-center mb-sm--20">
                                <div class="shop-toolbar__left">
                                    @php
                                        $from = ($products->currentPage() - 1)*$products->perPage()+1;
                                        $to = $products->lastPage() === $products->currentPage() ? $products->total() : $products->currentPage()*$products->perPage();
                                    @endphp
                                    <p class="product-pages">Showing {{$from}}-{{$to}} of {{$products->total()}} results</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="shop-toolbar__right">
                                    <a href="#" class="product-filter-btn shop-toolbar__btn">
                                        <span>Filters</span>
                                        <i></i>
                                    </a>
                                    <div class="product-ordering">
                                        <a href="#" class="product-ordering__btn shop-toolbar__btn">
                                            <span>Short By</span>
                                            <i></i>
                                        </a>
                                        <ul class="product-ordering__list">
                                            <li class="active"><a href="#">Sort by popularity</a></li>
                                            <li><a href="#">Sort by average rating</a></li>
                                            <li><a href="#">Sort by newness</a></li>
                                            <li><a href="#">Sort by price: low to high</a></li>
                                            <li><a href="#">Sort by price: high to low</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="advanced-product-filters">
                        <div class="product-filter">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="product-widget product-widget--price">
                                        <h3 class="widget-title">Price</h3>
                                        <ul class="product-widget__list">
                                            <li>
                                                <a href="shop-sidebar.html">
                                                    <span class="ammount">$20.00</span>
                                                    <span> - </span>
                                                    <span class="ammount">$40.00</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-sidebar.html">
                                                    <span class="ammount">$40.00</span>
                                                    <span> - </span>
                                                    <span class="ammount">$50.00</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-sidebar.html">
                                                    <span class="ammount">$50.00</span>
                                                    <span> - </span>
                                                    <span class="ammount">$60.00</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-sidebar.html">
                                                    <span class="ammount">$60.00</span>
                                                    <span> - </span>
                                                    <span class="ammount">$80.00</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-sidebar.html">
                                                    <span class="ammount">$80.00</span>
                                                    <span> - </span>
                                                    <span class="ammount">$100.00</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-sidebar.html">
                                                    <span class="ammount">$100.00</span>
                                                    <span> + </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="product-widget product-widget--brand">
                                        <h3 class="widget-title">Brands</h3>
                                        <ul class="product-widget__list">
                                            <li>
                                                <a href="shop-sidebar.html">
                                                    <span>Airi</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-sidebar.html">
                                                    <span>Mango</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-sidebar.html">
                                                    <span>Valention</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-sidebar.html">
                                                    <span>Zara</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="product-widget product-widget--color">
                                        <h3 class="widget-title">Color</h3>
                                        <ul class="product-widget__list product-color-swatch">
                                            <li>
                                                <a href="shop-sidebar.html" class="product-color-swatch-btn blue">
                                                    <span class="product-color-swatch-label">Blue</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-sidebar.html" class="product-color-swatch-btn green">
                                                    <span class="product-color-swatch-label">Green</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-sidebar.html" class="product-color-swatch-btn pink">
                                                    <span class="product-color-swatch-label">Pink</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-sidebar.html" class="product-color-swatch-btn red">
                                                            <span class="product-color-swatch-label">Red</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-sidebar.html" class="product-color-swatch-btn grey">
                                                            <span class="product-color-swatch-label">Grey</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="product-widget product-widget--size">
                                                <h3 class="widget-title">Size</h3>
                                                <ul class="product-widget__list">
                                                    <li>
                                                        <a href="shop-sidebar.html">
                                                            <span>L</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-sidebar.html">
                                                            <span>M</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-sidebar.html">
                                                            <span>S</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-sidebar.html">
                                                            <span>XL</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-sidebar.html">
                                                            <span>XXL</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="btn-close"><i class="dl-icon-close"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="shop-products"> 
                            <div class="row grid-space-30">
                                @foreach ($products as $item)
                                <div class="col-xl-4 col-md-6 mb--40 mb-md--30">
                                    <div class="airi-product">
                                        <div class="product-inner">
                                            <figure class="product-image">
                                                <div class="product-image--holder">
                                                    <a href="{{route('detail', ['id' => $item->id])}}">
                                                        <img src="{{$item->image}}" alt="Product Image" class="primary-image">
                                                        <img src="{{$item->image}}" alt="Product Image" class="secondary-image">
                                                    </a>
                                                </div>
                                                <div class="airi-product-action">
                                                    <div class="product-action">
                                                        <a class="quickview-btn action-btn" data-toggle="tooltip" data-placement="top" title="Quick Shop">
                                                            <span data-toggle="modal" data-target="#productModal">
                                                                <i class="dl-icon-view"></i>
                                                            </span>
                                                        </a>
                                                        <a class="add_to_cart_btn action-btn" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                            <i class="dl-icon-cart29"></i>
                                                        </a>
                                                        <a class="add_wishlist action-btn" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                            <i class="dl-icon-heart4"></i>
                                                        </a>
                                                        <a class="add_compare action-btn" href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                            <i class="dl-icon-compare"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="product-info text-center">
                                                <h3 class="product-title">
                                                    <a href="{{route('detail', ['id' => $item->id])}}">{{$item->name}}</a>
                                                </h3>
                                                <span class="product-price-wrapper">
                                                    <span class="money">${{$item->price}}</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                        <nav class="pagination-wrap">
                            {{ $products->links() }}
                            {{-- <ul class="pagination">
                                <li><a href="#" class="prev page-number"><i class="fa fa-angle-double-left"></i></a></li>
                                <li><span class="current page-number">1</span></li>
                                <li><a href="#" class="page-number">2</a></li>
                                <li><a href="#" class="page-number">3</a></li>
                                <li><a href="#" class="next page-number"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul> --}}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        @endsection