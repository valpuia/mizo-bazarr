<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mizo Bazarr : @yield('title')</title>

    <link href="/css/bootstrap.css?v=1.0" rel="stylesheet" type="text/css"/>
    <link href="/fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">
    <link href="/plugins/fancybox/fancybox.min.css" type="text/css" rel="stylesheet">
    <link href="/plugins/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/plugins/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">
    <link href="/css/ui.css" rel="stylesheet" type="text/css"/>
    <link href="/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />
    <link rel="stylesheet" href="/css/style.css">
    
    <script src="/js/jquery-2.0.0.min.js" type="text/javascript"></script>
    <script src="/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="/plugins/fancybox/fancybox.min.js" type="text/javascript"></script>
    <script src="/plugins/owlcarousel/owl.carousel.min.js"></script>
    <script src="/js/script.js" type="text/javascript"></script>

</head>
<body>
    
    
    @section('navbar')
        <header class="section-header bg">
            <section class="header-main">
                <div class="container">
                    <div class="row align-items-center">
                        {{-- logo screen-lg --}}
                        <div class="col-lg-3">
                            <a href="/" class="brand-wrap d-none d-lg-block">
                                <img class="logo" src="/images/logo-dark.png">
                                <h2 class="logo-text">Mizo Bazarr</h2>
                            </a>
                        </div>

                        {{-- search --}}
                        <div class="col-lg-6 col-sm-6 d-none d-sm-block">
                            <form action="#" class="search-wrap">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        {{-- cart, ac --}}
                        <div class="col-lg-3 col-sm-6">
                            <div class="widgets-wrap d-flex justify-content-end">
                                {{-- wishlist (auth::user) --}}
                                <a href="#" class="widget-header mr-3">
                                    <div class="icontext">
                                        <div class="icon-wrap"><i class="icon-xs bg round border fa fa-heart"></i></div>
                                        <span class="badge badge-pill badge-danger notify">3</span>
                                    </div>
                                </a>

                                {{-- cart --}}
                                <a href="/cart" class="widget-header">
                                    <div class="icontext">
                                        <div class="icon-wrap icon-xs bg round border"><i class="fa fa-shopping-cart"></i></div>
                                    </div>
                                    <span class="badge badge-pill badge-danger notify">7</span>
                                </a>

                                {{-- ac --}}
                                <div class="widget-header dropdown">
                                    <a href="#" class="ml-3 icontext" data-toggle="dropdown" data-offset="20,10">
                                        <div class="icon-wrap icon-xs bg round border">
                                            <i class="fa fa-user"></i>
                                            <span class="notify">1</span>
                                        </div>
                                        <div class="text-wrap text-secondary">
                                            <small>Hello.</small>
                                            <span>Login <i class="fa fa-caret-down"></i></span>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <form class="px-4 py-3">
                                            <div class="form-group">
                                                <label>Email address</label>
                                                <input type="email" class="form-control" placeholder="email@example.com">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Sign in</button>
                                            </form>
                                            <hr class="dropdown-divider">
                                            <a class="dropdown-item" href="/registration">Don't have account? Sign up</a>
                                            <a class="dropdown-item" href="#">Forgot password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
                <div class="container">

                    {{-- logo screen-sm --}}
                    <a class="navbar-brand d-block d-lg-none" href="/">
                        <img class="logo" src="/images/logo-dark.png">
                        <h2 class="logo-text">Mizo Bazarr</h2>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link pl-0"> <strong>Categories</strong></a>
                            </li>
                            @foreach ($categories as $menu)
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="{{ $menu->id }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $menu->name }}</a>
                                    <div class="dropdown-menu" aria-labelledby="{{ $menu->id }}">
                                        @foreach ($sub_categories as $menu_item)
                                            @if ($menu_item->categories_id == $menu->id)
                                                <a class="dropdown-item" href="/categories/{{ $menu_item->id }}/{{ $menu_item->name }}">{{ $menu_item->name }}</a>
                                            @endif
                                        @endforeach
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </nav>

            {{-- mobile search --}}
            <div class="container bg d-block d-sm-none pt-3">
                <form action="#">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                        </div>
                    </div>
                </form>
            </div>
        </header>
    @show

    @yield('content')

    @section('footer')
        <footer class="section-footer bg-secondary">
            <div class="container">
                <section class="footer-top padding-top">
                    <div class="row">
                        <aside class="col-sm-3 col-md-3 white">
                            <h5 class="title">Customer Services</h5>
                            <ul class="list-unstyled">
                                <li> <a href="#">Help center</a></li>
                                <li> <a href="#">Money refund</a></li>
                                <li> <a href="#">Terms and Policy</a></li>
                                <li> <a href="#">Open dispute</a></li>
                            </ul>
                        </aside>
                        <aside class="col-sm-3  col-md-3 white">
                            <h5 class="title">My Account</h5>
                            <ul class="list-unstyled">
                                <li> <a href="#"> User Login </a></li>
                                <li> <a href="#"> User register </a></li>
                                <li> <a href="#"> Account Setting </a></li>
                                <li> <a href="#"> My Orders </a></li>
                                <li> <a href="#"> My Wishlist </a></li>
                            </ul>
                        </aside>
                        <aside class="col-sm-3  col-md-3 white">
                            <h5 class="title">About</h5>
                            <ul class="list-unstyled">
                                <li> <a href="#"> Our history </a></li>
                                <li> <a href="#"> How to buy </a></li>
                                <li> <a href="#"> Delivery and payment </a></li>
                                <li> <a href="#"> Advertice </a></li>
                                <li> <a href="#"> Partnership </a></li>
                            </ul>
                        </aside>
                        <aside class="col-sm-3">
                            <article class="white">
                                <h5 class="title">Contacts</h5>
                                <p>
                                    <strong>Phone: </strong> +123456789 <br> 
                                    <strong>Fax:</strong> +123456789
                                </p>

                                <div class="btn-group white">
                                    <a class="btn btn-facebook" title="Facebook" target="_blank" href="#"><i class="fab fa-facebook-f  fa-fw"></i></a>
                                    <a class="btn btn-instagram" title="Instagram" target="_blank" href="#"><i class="fab fa-instagram  fa-fw"></i></a>
                                    <a class="btn btn-twitter" title="Twitter" target="_blank" href="#"><i class="fab fa-twitter  fa-fw"></i></a>
                                </div>
                            </article>
                        </aside>
                    </div>
                    <br> 
                </section>
                <section class="footer-bottom row border-top-white">
                    <div class="col-sm-6"> 
                        <p class="text-white-50">Crafted with care by *My Company*</p>
                    </div>
                    <div class="col-sm-6 text-right">
                        <p class="text-sm-right text-white-50">Copyright &copy; @php echo(date('Y')); @endphp by Mizo Bazarr. All right Reserved.</p>
                    </div>
                </section>
            </div>
        </footer>
    @show
    
</body>
</html>