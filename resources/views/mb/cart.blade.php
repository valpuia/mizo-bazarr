@extends('layouts.main')

@section('title', 'Cart')

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
                                <li class="breadcrumb-item active" aria-current="page">Cart</li>
                            </ol>  
                        </nav>
                    </div>
                </div>
            </div>

            {{-- cart --}}
            <div class="row mt-5">
                <main class="col-sm-9">

                    <div class="card table-responsive">
                        <table class="table table-hover shopping-cart-wrap">
                            <thead class="text-muted">
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col" width="120">Quantity</th>
                                    <th scope="col" width="120">Price</th>
                                    <th scope="col" class="text-right" width="200">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <figure class="media">
                                            <div class="img-wrap"><img src="/images/items/1.jpg" class="img-thumbnail img-sm"></div>
                                            <figcaption class="media-body">
                                                <h6 class="title text-truncate">Product name goes here </h6>
                                                <dl class="dlist-inline small">
                                                    <dt>Size: </dt>
                                                    <dd>XXL</dd>
                                                </dl>
                                                <dl class="dlist-inline small">
                                                    <dt>Color: </dt>
                                                    <dd>Orange color</dd>
                                                </dl>
                                            </figcaption>
                                        </figure> 
                                    </td>
                                    <td> 
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>	
                                            <option>3</option>	
                                            <option>4</option>	
                                        </select> 
                                    </td>
                                    <td> 
                                        <div class="price-wrap"> 
                                            <var class="price">USD 145</var> 
                                            <small class="text-muted">(USD5 each)</small> 
                                        </div>
                                    </td>
                                    <td class="text-right"> 
                                        <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-outline-success" data-toggle="tooltip"> <i class="fa fa-heart"></i></a> 
                                        <a href="" class="btn btn-outline-danger"> × Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <figure class="media">
                                            <div class="img-wrap"><img src="/images/items/2.jpg" class="img-thumbnail img-sm"></div>
                                            <figcaption class="media-body">
                                                <h6 class="title text-truncate">Product name goes here </h6>
                                                <dl class="dlist-inline small">
                                                    <dt>Size: </dt>
                                                    <dd>XXL</dd>
                                                </dl>
                                                <dl class="dlist-inline small">
                                                    <dt>Color: </dt>
                                                    <dd>Orange color</dd>
                                                </dl>
                                            </figcaption>
                                        </figure> 
                                    </td>
                                    <td> 
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>	
                                            <option>3</option>	
                                            <option>4</option>	
                                        </select> 
                                    </td>
                                    <td> 
                                        <div class="price-wrap"> 
                                            <var class="price">USD 35</var> 
                                            <small class="text-muted">(USD10 each)</small> 
                                        </div>
                                    </td>
                                    <td class="text-right"> 
                                        <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-outline-success" data-toggle="tooltip"> <i class="fa fa-heart"></i></a> 
                                        <a href="" class="btn btn-outline-danger btn-round"> × Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <figure class="media">
                                            <div class="img-wrap"><img src="/images/items/3.jpg" class="img-thumbnail img-sm"></div>
                                            <figcaption class="media-body">
                                                <h6 class="title text-truncate">Product name goes here </h6>
                                                <dl class="dlist-inline small">
                                                    <dt>Size: </dt>
                                                    <dd>XXL</dd>
                                                </dl>
                                                <dl class="dlist-inline small">
                                                    <dt>Color: </dt>
                                                    <dd>Orange color</dd>
                                                </dl>
                                            </figcaption>
                                        </figure> 
                                    </td>
                                    <td> 
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>	
                                            <option>3</option>	
                                            <option>4</option>	
                                        </select> 
                                    </td>
                                    <td> 
                                        <div class="price-wrap"> 
                                            <var class="price">USD 45</var> 
                                            <small class="text-muted">(USD15 each)</small> 
                                        </div>
                                    </td>
                                    <td class="text-right"> 
                                        <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-outline-success" data-toggle="tooltip"> <i class="fa fa-heart"></i></a> 
                                        <a href="" class="btn btn-outline-danger btn-round"> × Remove</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </main>
                <aside class="col-sm-3">

                    <p class="alert alert-success">Add USD 5.00 of eligible items to your order to qualify for FREE Shipping. </p>
                    <dl class="dlist-align">
                        <dt>Total price: </dt>
                        <dd class="text-right">USD 568</dd>
                    </dl>
                    <dl class="dlist-align">
                        <dt>Discount:</dt>
                        <dd class="text-right">USD 658</dd>
                    </dl>
                    <dl class="dlist-align h4">
                        <dt>Total:</dt>
                        <dd class="text-right"><strong>USD 1,650</strong></dd>
                    </dl>
                    <hr>
                    <figure class="itemside mb-3">
                        <aside class="aside"><img src="/images/icons/pay-visa.png"></aside>
                        <div class="text-wrap small text-muted">
                            Pay 84.78 AED ( Save 14.97 AED )
                            By using ADCB Cards 
                        </div>
                    </figure>
                    <figure class="itemside mb-3">
                        <aside class="aside"> <img src="/images/icons/pay-mastercard.png"> </aside>
                        <div class="text-wrap small text-muted">
                            Pay by MasterCard and Save 40%. <br>
                            Lorem ipsum dolor 
                        </div>
                    </figure>

                </aside>
            </div>

            @include('may_also_like')

        </div>
    </section>
@endsection

@section('footer')
    @parent
@endsection