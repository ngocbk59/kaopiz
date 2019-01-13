@extends('layouts.client-master')
@section('title', $model->name)
@section('breadcrumb-area')
<div class="breadcrumb-area breadcrumb-mg-btm-120 pt--70 pt-md--25">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <ul class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('cate', ['id' => $model->category->id])}}">{{$model->category->cate_name}}</a></li>
                    <li class="current"><span>{{$model->name}}</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="page-content-inner enable-full-width">
    <div class="container-fluid">
        <div class="row pt--40">
            <div class="col-md-6 product-main-image">
                <div class="product-image">
                    <div class="product-gallery vertical-slide-nav">
                        <div class="product-gallery__thumb">
                            <div class="product-gallery__thumb--image">
                                <div class="nav-slider slick-vertical" 
                                data-options='{
                                "vertical": true, 
                                "vertical_md": false, 
                                "infinite_md": false, 
                                "slideToShow_sm": 4,
                                "slideToShow_xs": 3,
                                "arrows": true,
                                "arrowPrev": "fa fa-angle-up",
                                "arrowNext": "fa fa-angle-down",
                                "arrowPrev_md": "dl-icon-left",
                                "arrowNext_md": "dl-icon-right"
                                }'>
                                    @foreach ($model->galleries as $gl)
                                    <figure class="product-gallery__thumb--single">
                                        <img src="{{$gl->img_url}}" alt="Products">
                                    </figure>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="product-gallery__large-image">
                            <div class="gallery-with-thumbs">
                                <div class="product-gallery__wrapper">
                                    <div class="main-slider product-gallery__full-image image-popup">
                                        @foreach ($model->galleries as $gl)
                                            <figure class="product-gallery__image zoom">
                                                <img src="{{$gl->img_url}}" alt="Product">
                                            </figure>
                                        @endforeach
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="product-badge new">New</span>
                </div>
            </div>
            <div class="col-md-6 product-main-details mt--40 mt-md--10 mt-sm--30">
                <div class="product-summary">
                    <div class="product-rating float-left">
                        <span>
                        	@for ($i=0; $i<$model->star; $i++)
                                <i class="dl-icon-star rated"></i>
                            @endfor
                            
                        </span>
                        <a href="#" class="review-link">(1 customer review)</a>
                    </div>
                    <div class="product-navigation">
                        <a href="#" class="prev"><i class="dl-icon-left"></i></a>
                        <a href="#" class="next"><i class="dl-icon-right"></i></a>
                    </div>
                    <div class="clearfix"></div>
                    <h3 class="product-title">{{$model->name}}</h3>
                    <span class="product-stock in-stock float-right">
                        <i class="dl-icon-check-circle1"></i>
                        in stock
                    </span>
                    <div class="product-price-wrapper mb--40 mb-md--10">
                        <span class="money">{{$model->price}}</span>
                        
                    </div>
                    <div class="clearfix"></div>
                    <p class="product-short-description mb--45 mb-sm--20">{{$model->detail}}</p>
                    <form action="#" class="form--action mb--30 mb-sm--20">
                        <div class="product-action flex-row align-items-center">
                            <div class="quantity">
                                <input type="number" class="quantity-input" name="qty" id="qty" value="1" min="1">
                            </div>
                            <button type="button" class="btn btn-style-1 btn-large add-to-cart">
                                Add To Cart
                            </button>
                            <a href="wishlist.html"><i class="dl-icon-heart2"></i></a>
                            <a href="compare.html"><i class="dl-icon-compare2"></i></a>
                        </div>  
                    </form>
                    <div class="product-extra mb--40 mb-sm--20">
                        <a href="#" class="font-size-12"><i class="fa fa-map-marker"></i>Find store near you</a>
                        <a href="#" class="font-size-12"><i class="fa fa-exchange"></i>Delivery and return</a>
                    </div>
                    <div class="product-summary-footer d-flex justify-content-between flex-sm-row flex-column">
                        <div class="product-meta">
                            <span class="sku_wrapper font-size-12">SKU: <span class="sku">REF. LA-887</span></span>
                            <span class="posted_in font-size-12">Categories: 
                                <a href="shop-sidebar.html">Fashions</a>
                            </span>
                            <span class="posted_in font-size-12">Tags: 
                                <a href="shop-sidebar.html">dress,</a>
                                <a href="shop-sidebar.html">fashions,</a>
                                <a href="shop-sidebar.html">women</a>
                            </span>
                        </div>
                        <div class="product-share-box">
                            <span class="font-size-12">Share With</span>
                            <!-- Social Icons Start Here -->
                            <ul class="social social-small">
                                <li class="social__item">
                                    <a href="facebook.com" class="social__link">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="twitter.com" class="social__link">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="plus.google.com" class="social__link">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="plus.google.com" class="social__link">
                                        <i class="fa fa-pinterest-p"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- Social Icons End Here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center pt--45 pt-lg--50 pt-md--55 pt-sm--35">
            <div class="col-12">
                <div class="product-data-tab tab-style-1">
                    <div class="nav nav-tabs product-data-tab__head mb--40 mb-md--30" id="product-tab" role="tablist">
                        <a class="product-data-tab__link nav-link active" id="nav-description-tab" data-toggle="tab" href="#nav-description" role="tab" aria-selected="true"> 
                            <span>Description</span>
                        </a>
                        <a class="product-data-tab__link nav-link" id="nav-reviews-tab" data-toggle="tab" href="#nav-reviews" role="tab" aria-selected="true">
                            <span>Reviews(1)</span>
                        </a>
                    </div>
                    <div class="tab-content product-data-tab__content" id="product-tabContent">
                        <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab">
                            <div class="product-description">
                                {!!$model->detail!!}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-reviews" role="tabpanel" aria-labelledby="nav-reviews-tab">
                            <div class="product-reviews">
                                <h3 class="review__title">1 review for Waxed-effect pleated skirt</h3>
                                <ul class="review__list">
                                    <li class="review__item">
                                        <div class="review__container">
                                            <img src="assets/img/others/comment-icon-2.png" alt="Review Avatar" class="review__avatar">
                                            <div class="review__text">
                                                <div class="product-rating float-right">
                                                    <span>
                                                        <i class="dl-icon-star rated"></i>
                                                        <i class="dl-icon-star rated"></i>
                                                        <i class="dl-icon-star rated"></i>
                                                        <i class="dl-icon-star rated"></i>
                                                        <i class="dl-icon-star rated"></i>
                                                    </span>
                                                </div>
                                                <div class="review__meta">
                                                    <strong class="review__author">John Snow </strong>
                                                    <span class="review__dash">-</span>
                                                    <span class="review__published-date">November 20, 2018</span>
                                                </div>
                                                <div class="clearfix"></div>
                                                <p class="review__description">Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="review-form-wrapper">
                                    <span class="reply-title"><strong>Add a review</strong></span>
                                    <form action="#" class="form">
                                        <div class="form-notes mb--20">
                                            <p>Your email address will not be published. Required fields are marked <span class="required">*</span></p>
                                        </div>
                                        <div class="form__group mb--30 mb-sm--20">
                                            <div class="revew__rating">
                                                <p class="stars selected">
                                                    <a class="star-1 active" href="#">1</a>
                                                    <a class="star-2" href="#">2</a>
                                                    <a class="star-3" href="#">3</a>
                                                    <a class="star-4" href="#">4</a>
                                                    <a class="star-5" href="#">5</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="form__group mb--30 mb-sm--20">
                                            <div class="form-row">
                                                <div class="col-sm-6 mb-sm--20">
                                                    <label class="form__label" for="name">Name<span class="required">*</span></label>
                                                    <input type="text" name="name" id="name" class="form__input">
                                                </div>  
                                                <div class="col-sm-6">
                                                    <label class="form__label" for="email">email<span class="required">*</span></label>
                                                    <input type="email" name="email" id="email" class="form__input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form__group mb--30 mb-sm--20">
                                            <div class="form-row">
                                                <div class="col-12">
                                                    <label class="form__label" for="email">Your Review<span class="required">*</span></label>
                                                    <textarea name="review" id="review" class="form__input form__input--textarea"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form__group">
                                            <div class="form-row">
                                                <div class="col-12">
                                                    <input type="submit" value="Submit" class="btn btn-style-1 btn-submit">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt--35 pt-md--25 pt-sm--15 pb--75 pb-md--55 pb-sm--35">
            <div class="col-12">
                <div class="row mb--40 mb-md--30">
                    <div class="col-12 text-center">
                        <h2 class="heading-secondary">Related Products</h2>
                        <hr class="separator center mt--25 mt-md--15">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="airi-element-carousel product-carousel nav-vertical-center" 
                        data-slick-options='{
                        "spaceBetween": 30,
                        "slidesToShow": 4,
                        "slidesToScroll": 1,
                        "arrows": true, 
                        "prevArrow": "dl-icon-left", 
                        "nextArrow": "dl-icon-right" 
                        }'
                        data-slick-responsive='[
                            {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                            {"breakpoint":991, "settings": {"slidesToShow": 2} },
                            {"breakpoint":450, "settings": {"slidesToShow": 1} }
                        ]'
                        >
                            @foreach ($model->relates() as $item)
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
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection