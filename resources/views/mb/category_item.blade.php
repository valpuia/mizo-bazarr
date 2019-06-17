@extends('layouts.main')

@section('title', $subCategory->name)

@section('navbar')
    @parent
@endsection

@section('content')
    <section class="section-main bg padding-top-sm pb-3">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3-24"> <strong>Your are here:</strong></div>
                        <nav class="col-md-18-24"> 
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">Categories</li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $subCategory->name }}</li>
                            </ol>  
                        </nav>
                        <div class="col-md-3-24 text-right"> 
                            <a href="#" data-toggle="tooltip" title="List view"> <i class="fa fa-bars"></i></a>
                            <a href="#" data-toggle="tooltip" title="Grid view"> <i class="fa fa-th"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- grid view --}}
            <div class="row mt-3">
                <div class="col-md-3">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="/images/items/1.jpg"></div>
                        <figcaption class="info-wrap">
                                <h4 class="title"><a href="/{{ $subCategory->name }}/item/item-id/item-name" class="text-decoration-none">Another name of item</a></h4>
                                <p class="desc">Some small description goes here</p>
                                <div class="rating-wrap">
                                    <ul class="rating-stars">
                                        <li style="width:80%" class="stars-active"> 
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
                                        </li>
                                    </ul>
                                    <div class="label-rating">132 reviews</div>
                                    <div class="label-rating">154 orders </div>
                                </div>
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">Order Now</a>	
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-md-3">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="/images/items/2.jpg"> </div>
                        <figcaption class="info-wrap">
                                <h4 class="title"><a href="/{{ $subCategory->name }}/item/item-id/item-name" class="text-decoration-none">Good product</a></h4>
                                <p class="desc">Some small description goes here</p>
                                <div class="rating-wrap">
                                    <ul class="rating-stars">
                                        <li style="width:80%" class="stars-active"> 
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
                                        </li>
                                    </ul>
                                    <div class="label-rating">132 reviews</div>
                                    <div class="label-rating">154 orders </div>
                                </div>
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">Order Now</a>	
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-md-3">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="/images/items/3.jpg"></div>
                        <figcaption class="info-wrap">
                                <h4 class="title"><a href="/{{ $subCategory->name }}/item/item-id/item-name" class="text-decoration-none">Product name goes here</a></h4>
                                <p class="desc">Some small description goes here</p>
                                <div class="rating-wrap">
                                    <ul class="rating-stars">
                                        <li style="width:80%" class="stars-active"> 
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
                                        </li>
                                    </ul>
                                    <div class="label-rating">132 reviews</div>
                                    <div class="label-rating">154 orders </div>
                                </div>
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">Order Now</a>	
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-md-3">
                    <figure class="card card-product">
                        <div class="img-wrap"><img src="/images/items/2.jpg"> </div>
                        <figcaption class="info-wrap">
                                <h4 class="title"><a href="/{{ $subCategory->name }}/item/item-id/item-name" class="text-decoration-none">Good product</a></h4>
                                <p class="desc">Some small description goes here</p>
                                <div class="rating-wrap">
                                    <ul class="rating-stars">
                                        <li style="width:80%" class="stars-active"> 
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
                                        </li>
                                    </ul>
                                    <div class="label-rating">132 reviews</div>
                                    <div class="label-rating">154 orders </div>
                                </div>
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="" class="btn btn-sm btn-primary float-right">Order Now</a>	
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span> <del class="price-old">$1980</del>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>

            {{-- list view --}}
            <article class="card card-product">
                <div class="card-body">
                    <div class="row">
                        <aside class="col-sm-3">
                            <div class="img-wrap"><img src="/images/items/2.jpg"></div>
                        </aside>
                        <article class="col-sm-6">
                                <h4 class="title"><a href="/{{ $subCategory->name }}/item/item-id/item-name" class="text-decoration-none">Ut wisi enim ad minim veniam </a></h4>
                                <div class="rating-wrap">
                                    <ul class="rating-stars">
                                        <li style="width:80%" class="stars-active"> 
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                                            <i class="fa fa-star"></i> 
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                                            <i class="fa fa-star"></i> 
                                        </li>
                                    </ul>
                                    <div class="label-rating">132 reviews</div>
                                    <div class="label-rating">154 orders </div>
                                </div>
                                <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Ut wisi enim ad minim veniam </p>
                                <dl class="dlist-align">
                                    <dt>Color</dt>
                                    <dd>Black and white</dd>
                                </dl>
                                <dl class="dlist-align">
                                    <dt>Material</dt>
                                    <dd>Syntetic, wooden</dd>
                                </dl>
                                <dl class="dlist-align">
                                    <dt>Delivery</dt>
                                    <dd>Russia, USA, and Europe</dd>
                                </dl>
                        </article>
                        <aside class="col-sm-3 border-left">
                            <div class="action-wrap">
                                <div class="price-wrap h4">
                                    <span class="price"> $56 </span>	
                                    <del class="price-old"> $98</del>
                                </div>
                                <p class="text-success">Free shipping</p>
                                <br>
                                <p>
                                    <a href="#" class="btn btn-primary"> Buy now </a>
                                    <a href="#" class="btn btn-secondary"> Details  </a>
                                </p>
                                <a href="#"><i class="fa fa-heart"></i> Add to wishlist</a>
                            </div>
                        </aside>
                    </div>
                </div>
            </article>

            <article class="card card-product">
                <div class="card-body">
                    <div class="row">
                        <aside class="col-sm-3">
                            <div class="img-wrap"><img src="/images/items/3.jpg"></div>
                        </aside>
                        <article class="col-sm-6">
                                <h4 class="title"><a href="/{{ $subCategory->name }}/item/item-id/item-name" class="text-decoration-none">Ut wisi enim ad minim veniam</a></h4>
                                <div class="rating-wrap">
                                    <ul class="rating-stars">
                                        <li style="width:80%" class="stars-active"> 
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                                            <i class="fa fa-star"></i> 
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                                            <i class="fa fa-star"></i> 
                                        </li>
                                    </ul>
                                    <div class="label-rating">132 reviews</div>
                                    <div class="label-rating">154 orders </div>
                                </div>
                                <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Ut wisi enim ad minim veniam </p>
                                <dl class="dlist-align">
                                    <dt>Color</dt>
                                    <dd>Black and white</dd>
                                </dl>
                                <dl class="dlist-align">
                                    <dt>Material</dt>
                                    <dd>Syntetic, wooden</dd>
                                </dl>
                                <dl class="dlist-align">
                                    <dt>Delivery</dt>
                                    <dd>Russia, USA, and Europe</dd>
                                </dl>
                        </article>
                        <aside class="col-sm-3 border-left">
                            <div class="action-wrap">
                                <div class="price-wrap h4">
                                    <span class="price"> $56 </span>	
                                    <del class="price-old"> $98</del>
                                </div>
                                <p class="text-success">Free shipping</p>
                                <br>
                                <p>
                                    <a href="#" class="btn btn-primary"> Buy now </a>
                                    <a href="#" class="btn btn-secondary"> Details  </a>
                                </p>
                                <a href="#"><i class="fa fa-heart"></i> Add to wishlist</a>
                            </div>
                        </aside>
                    </div>
                </div>
            </article>

            <article class="card card-product">
                <div class="card-body">
                    <div class="row">
                        <aside class="col-sm-3">
                            <div class="img-wrap"><img src="/images/items/1.jpg"></div>
                        </aside>
                        <article class="col-sm-6">
                                <h4 class="title"><a href="/{{ $subCategory->name }}/item/item-id/item-name" class="text-decoration-none">Ut wisi enim ad minim veniam</a></h4>
                                <div class="rating-wrap">
                                    <ul class="rating-stars">
                                        <li style="width:80%" class="stars-active"> 
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                                            <i class="fa fa-star"></i> 
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
                                            <i class="fa fa-star"></i> 
                                        </li>
                                    </ul>
                                    <div class="label-rating">132 reviews</div>
                                    <div class="label-rating">154 orders </div>
                                </div>
                                <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Ut wisi enim ad minim veniam </p>
                                <dl class="dlist-align">
                                    <dt>Color</dt>
                                    <dd>Black and white</dd>
                                </dl>
                                <dl class="dlist-align">
                                    <dt>Material</dt>
                                    <dd>Syntetic, wooden</dd>
                                </dl>
                                <dl class="dlist-align">
                                    <dt>Delivery</dt>
                                    <dd>Russia, USA, and Europe</dd>
                                </dl>
                        </article>
                        <aside class="col-sm-3 border-left">
                            <div class="action-wrap">
                                <div class="price-wrap h4">
                                    <span class="price"> $56 </span>	
                                    <del class="price-old"> $98</del>
                                </div>
                                <p class="text-success">Free shipping</p>
                                <br>
                                <p>
                                    <a href="#" class="btn btn-primary"> Buy now </a>
                                    <a href="#" class="btn btn-secondary"> Details  </a>
                                </p>
                                <a href="#"><i class="fa fa-heart"></i> Add to wishlist</a>
                            </div>
                        </aside>
                    </div>
                </div>
            </article>

        </div>
    </section>
@endsection

@section('footer')
    @parent
@endsection