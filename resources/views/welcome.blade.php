@extends('layouts.main')

@section('title', 'Home')

@section('navbar')
    @parent
@endsection

@section('content')
    <section class="section-main bg padding-top-sm pb-3">
        <div class="container">
            
            {{-- carousel and side item --}}
            <div class="row-sm mb-4">
                <div class="col-lg-8 col-md-12 mb-3">
                    <div class="owl-carousel owl-init slider-main" data-items="1" data-dots="false" data-nav="true">
                        <div class="item-slide">
                            <img src="images/banners/slide1.jpg">
                            <article class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt.</p>
                            </article>
                        </div>
                        <div class="item-slide">
                            <img src="images/banners/slide2.jpg">
                            <article class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt.</p>
                            </article>
                        </div>
                        <div class="item-slide">
                            <img src="images/banners/slide3.jpg">
                            <article class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt.</p>
                            </article>
                        </div>
                    </div>
                </div>
                <aside class="col-lg-4 col-md-12">
                    <div class="box rounded-0 shadow-sm" style="min-height:324px;">
                        <figure class="itemside mb-3">
                            <div class="aside">	<img class="img-sm" width="80" src="images/items/7.jpg"> </div>
                            <figcaption class="text-wrap">
                                <p class="title">Just name of title or name</p>
                                <span class="mr-3">$1280</span>
                                <a href="#" class="btn btn-dark btn-sm"> Button </a>
                                <button class="btn btn-sm btn-info" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                            </figcaption>
                        </figure>  <!-- itemside.// -->
                        <figure class="itemside mb-4">
                            <div class="aside">	<img class="img-sm" width="80" src="images/items/4.jpg"> </div>
                            <figcaption class="text-wrap">
                                <p class="title"> The name of product or item</p>
                                <span class="mr-3">$1280</span>
                                <a href="#" class="btn btn-dark btn-sm"> Button </a>
                                <button class="btn btn-sm btn-info" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                            </figcaption>
                        </figure>  <!-- itemside.// -->
                        <figure class="itemside">
                            <div class="aside">	<img class="img-sm" width="80" src="images/items/1.jpg"> </div>
                            <figcaption class="text-wrap">
                                <p class="title">Some name of item</p>
                                <span class="mr-3">$1280</span>
                                <a href="#" class="btn btn-dark btn-sm"> Button </a>
                                <button class="btn btn-sm btn-info" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                            </figcaption>
                        </figure>  <!-- itemside.// -->
                    </div> <!-- box.// -->
                </aside>
            </div>

            {{--  new or discount  --}}
            <div class="row">
                <div class="col-md-3">
                    <figure class="card card-sm card-product">
                        <span class="badge-new"> NEW </span>
                        <div class="img-wrap"> <img src="images/items/3.jpg"> </div>
                        <figcaption class="info-wrap text-center">
                            <h6 class="title text-truncate"><a href="#">Good item name</a></h6>
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span>
                                <a href="#" class="btn btn-dark btn-sm"> Button </a>
                                <button class="btn btn-sm btn-info" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-3">
                    <figure class="card card-sm card-product">
                        <span class="badge-offer"><b> - 50%</b></span>
                        <div class="img-wrap"> <img src="images/items/4.jpg"> </div>
                        <figcaption class="info-wrap text-center">
                            <h6 class="title text-truncate"><a href="#">The name of product</a></h6>
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span>
                                <del class="price-old">$1980</del>
                                <a href="#" class="btn btn-dark btn-sm"> Button </a>
                                <button class="btn btn-sm btn-info" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-3">
                    <figure class="card card-sm card-product">
                        <div class="img-wrap"> <img src="images/items/5.jpg">	</div>
                        <figcaption class="info-wrap text-center">
                            <h6 class="title text-truncate"><a href="#">Name of product</a></h6>
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span>
                                <a href="#" class="btn btn-dark btn-sm"> Button </a>
                                <button class="btn btn-sm btn-info" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-3">
                    <figure class="card card-sm card-product">
                        <div class="img-wrap"> <img src="images/items/6.jpg">	</div>
                        <figcaption class="info-wrap text-center">
                            <h6 class="title text-truncate"><a href="#">The name of this product goes here</a></h6>
                            <div class="price-wrap h5">
                                <span class="price-new">$1280</span>
                                <a href="#" class="btn btn-dark btn-sm"> Button </a>
                                <button class="btn btn-sm btn-info" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>

            {{--  new item container  --}}
            <header class="clearfix">
                    <div class="title-text">
                        <span class="h4">Thlengthar</span>
                        <div class="btn-group btn-group-sm float-right">
                        <button type="button" class="custom-nav-first owl-custom-prev btn btn-secondary"> < </button>
                        <button type="button" class="custom-nav-first owl-custom-next btn btn-secondary"> > </button>
                        </div>
                    </div>
            </header>

            {{-- new item featured --}}
            <div class="owl-carousel owl-init slide-items" id="slide_custom_nav" data-custom-nav="custom-nav-first" data-items="5" data-margin="20" data-dots="true" data-nav="false">
                <div class="item-slide">
                    <figure class="card card-product">
                        <span class="badge-new"> NEW </span>
                        <div class="img-wrap"> <img src="images/items/1.jpg"> </div>
                        <figcaption class="info-wrap text-center">
                            <h6 class="title text-truncate"><a href="#">First item name</a></h6>
                        </figcaption>
                    </figure>
                </div>
                <div class="item-slide">
                    <figure class="card card-product">
                        <div class="img-wrap"> <img src="images/items/2.jpg"> </div>
                        <figcaption class="info-wrap text-center">
                            <h6 class="title text-truncate"><a href="#">Second item name</a></h6>
                        </figcaption>
                    </figure>
                </div>
                <div class="item-slide">
                    <figure class="card card-product">
                        <div class="img-wrap"> <img src="images/items/3.jpg"> </div>
                        <figcaption class="info-wrap text-center">
                            <h6 class="title text-truncate"><a href="#">Third item name</a></h6>
                        </figcaption>
                    </figure>
                </div>
                <div class="item-slide">
                    <figure class="card card-product">
                        <div class="img-wrap"> <img src="images/items/4.jpg"> </div>
                        <figcaption class="info-wrap text-center">
                            <h6 class="title text-truncate"><a href="#">Good item name</a></h6>
                        </figcaption>
                    </figure>
                </div>
                <div class="item-slide">
                    <figure class="card card-product">
                        <div class="img-wrap"> <img src="images/items/5.jpg"> </div>
                        <figcaption class="info-wrap text-center">
                            <h6 class="title text-truncate"><a href="#">Another item name</a></h6>
                        </figcaption>
                    </figure>
                </div>
                <div class="item-slide">
                    <figure class="card card-product">
                        <div class="img-wrap"> <img src="images/items/3.jpg"> </div>
                        <figcaption class="info-wrap text-center">
                            <h6 class="title text-truncate"><a href="#">Third item name</a></h6>
                        </figcaption>
                    </figure>
                </div>
            </div>

            {{-- pheichham --}}
            <header class="section-heading mt-5">
                <h4 class="title-section bg text-uppercase">Pheichham</h4>
            </header>
            
            {{-- pheichham item --}}
            <div class="card">
                <div class="row no-gutters">
                    <div class="col-md-3">
                    
                        <article class="card-banner h-100 bg2 rounded-0">
                            <div class="card-body rounded-0 pheichham-img" style="background-image: url('images/posts/5.jpg');">
                                <div class="text-bottom"><h5 class="title">Recommended</h5></div>
                            </div>
                        </article>
                    
                    </div>
                    <div class="col-md-9">
                        <ul class="row no-gutters border-cols">
                            <li class="col-6 col-md-3 pheichham-data">
                                <a href="#" class="itembox"> 
                                    <div class="card-body">
                                        <p class="word-limit">Home and kitchen electronic  stuff collection  </p>
                                        <img class="img-sm" src="images/items/1.jpg">
                                    </div>
                                </a>
                            </li>
                            <li class="col-6 col-md-3 pheichham-data">
                                <a href="#" class="itembox"> 
                                    <div class="card-body">
                                        <p class="word-limit">Kitchen equipments collection</p>
                                        <img class="img-sm" src="images/items/2.jpg">
                                    </div>
                                </a>
                            </li>
                            <li class="col-6 col-md-3 pheichham-data">
                                <a href="#" class="itembox"> 
                                    <div class="card-body">
                                        <p class="word-limit">Accessiries and other good items</p>
                                        <img class="img-sm" src="images/items/3.jpg">
                                    </div>
                                </a>
                            </li>
                            <li class="col-6 col-md-3 pheichham-data">
                                <a href="#" class="itembox"> 
                                    <div class="card-body">
                                        <p class="word-limit">Techs, Electronics</p>
                                        <img class="img-sm" src="images/items/4.jpg">
                                    </div>
                                </a>	
                            </li>
                        </ul>
                        <ul class="row no-gutters border-cols">
                            <li class="col-6 col-md-3 pheichham-data">
                                <a href="#" class="itembox"> 
                                    <div class="card-body">
                                        <p class="word-limit">Home and kitchen electronic stuff </p>
                                        <img class="img-sm" src="images/items/1.jpg">
                                    </div>
                                </a>
                            </li>
                            <li class="col-6 col-md-3 pheichham-data">
                                <a href="#" class="itembox"> 
                                    <div class="card-body">
                                        <p class="word-limit">Kitchen equipments collection</p>
                                        <img class="img-sm" src="images/items/2.jpg">
                                    </div>
                                </a>
                            </li>
                            <li class="col-6 col-md-3 pheichham-data">
                                <a href="#" class="itembox"> 
                                    <div class="card-body">
                                        <p class="word-limit">Accessiries and other good items</p>
                                        <img class="img-sm" src="images/items/3.jpg">
                                    </div>
                                </a>
                            </li>
                            <li class="col-6 col-md-3 pheichham-data">
                                <a href="#" class="itembox"> 
                                    <div class="card-body">
                                        <p class="word-limit">Techs, Electronics</p>
                                        <img class="img-sm" src="images/items/4.jpg">
                                    </div>
                                </a>	
                            </li>
                        </ul>
                    </div>
                </div>     
            </div>

            {{-- services --}}
            <div class="row mt-5">
                <aside class="col-md-3 col-sm-6 col-xs-6">
                    <figure class="itembox text-center">
                        <span class="icon-wrap icon-sm bg-warning white"><i class="fa fa-envelope-open"></i></span>
                        <figcaption class="text-wrap">
                            <h4 class="title">Free Delivery</h4>
                        </figcaption>
                    </figure>
                </aside>
                <aside class="col-md-3 col-sm-6 col-xs-6">
                    <figure class="itembox text-center">
                        <span class="icon-wrap icon-sm bg-warning white"><i class="fa fa-heart"></i></span>
                        <figcaption class="text-wrap">
                            <h4 class="title">Easy to Customize</h4>
                        </figcaption>
                    </figure>
                </aside>
                <aside class="col-md-3 col-sm-6 col-xs-6">
                    <figure class="itembox text-center">
                        <span class="icon-wrap icon-sm bg-warning white"><i class="fa fa-cogs"></i></span>
                        <figcaption class="text-wrap">
                            <h4 class="title">24/7 Support</h4>
                        </figcaption>
                    </figure>
                </aside>
                <aside class="col-md-3 col-sm-6 col-xs-6">
                    <figure class="itembox text-center">
                        <span class="icon-wrap icon-sm bg-warning white"><i class="fa fa-users"></i></span>
                        <figcaption class="text-wrap">
                            <h4 class="title">15 days money back quaranteed</h4>
                        </figcaption>
                    </figure>
                </aside>
            </div>

        </div>
    </section>
@endsection

@section('footer')
    @parent
@endsection