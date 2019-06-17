@extends('layouts.main')

@section('title', 'ItemName')

@section('navbar')
    @parent
@endsection

@section('content')
    <section class="section-main bg padding-top-sm pb-3">
        <div class="container">

            {{-- breadcum --}}
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3-24"> <strong>Your are here:</strong></div>
                        <nav class="col-md-18-24"> 
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">Categories</li>
                                <li class="breadcrumb-item"><a href="#">SubCatName</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Item Name</li>
                            </ol>  
                        </nav>
                    </div>
                </div>
            </div>

            {{-- details --}}
            <div class="card mt-3">
                <div class="row no-gutters">
                    <aside class="col-sm-5 border-right">
                        <article class="gallery-wrap"> 
                            <div class="img-big-wrap">
                                <div> <a href="/images/items/1.jpg" data-fancybox=""><img src="/images/items/1.jpg"></a></div>
                            </div>
                            <div class="img-small-wrap">
                                <div class="item-gallery"> <img src="/images/items/1.jpg"></div>
                                <div class="item-gallery"> <img src="/images/items/2.jpg"></div>
                                <div class="item-gallery"> <img src="/images/items/3.jpg"></div>
                                <div class="item-gallery"> <img src="/images/items/4.jpg"></div>
                            </div>
                        </article>
                    </aside>
                    <aside class="col-sm-7">
                        <article class="p-5">
                            <h3 class="title mb-3">Original Version of Some product name</h3>
                            <div class="mb-3"> 
                                <var class="price h3 text-warning"> 
                                    <span class="currency">US $</span><span class="num">1299</span>
                                </var> 
                                {{-- <span>/per kg</span>  --}}
                            </div>
                            <dl>
                                <dt>Description</dt>
                                <dd><p>Here goes description consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco </p></dd>
                            </dl>
                            <dl class="row">
                                <dt class="col-sm-3">Model#</dt>
                                <dd class="col-sm-9">12345611</dd>

                                <dt class="col-sm-3">Color</dt>
                                <dd class="col-sm-9">Black and white </dd>

                                <dt class="col-sm-3">Delivery</dt>
                                <dd class="col-sm-9">Russia, USA, and Europe </dd>
                            </dl>
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
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <dl class="dlist-inline">
                                        <dt>Quantity: </dt>
                                        <dd> 
                                            <select class="form-control form-control-sm" style="width:70px;">
                                                <option> 1 </option>
                                                <option> 2 </option>
                                                <option> 3 </option>
                                            </select>
                                        </dd>
                                    </dl>
                                </div>
                                <div class="col-sm-7">
                                    <dl class="dlist-inline">
                                        <dt>Size: </dt>
                                        <dd>
                                            <label class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <span class="form-check-label">SM</span>
                                            </label>
                                            <label class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <span class="form-check-label">MD</span>
                                            </label>
                                            <label class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <span class="form-check-label">XXL</span>
                                            </label>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                            <hr>
                            <a href="#" class="btn  btn-primary"> Buy now </a>
                            <a href="#" class="btn  btn-outline-primary"> <i class="fas fa-shopping-cart"></i> Add to cart </a>
                        </article>
                    </aside>
                </div>
            </div>

            @include('may_also_like')

        </div>
    </section>
@endsection

@section('footer')
    @parent
@endsection