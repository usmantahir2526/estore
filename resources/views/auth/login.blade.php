<!DOCTYPE html>
<html>
<head>
    <title> Login </title>
    <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="MediaCenter, Template, eCommerce">
        <meta name="robots" content="all">

        <title>My Ecommerce Store</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
        
        <!-- Customizable CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/main.cs')}}s">
        <link rel="stylesheet" href="{{ asset('assets/css/blue.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/rateit.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css')}}">
        <link href="{{asset('assets/css/lightbox.css')}}" rel="stylesheet">
        
        <!-- Icons/Glyphs -->
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css')}}">

        <!-- Fonts --> 
        <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        @stack('css')
</head>
<body>
        <!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">

    <!-- ============================================== TOP MENU ============================================== -->
<div class="top-bar animate-dropdown">
    <div class="container">
        <div class="header-top-inner">
            <div class="cnt-account">
                <ul class="list-unstyled">
                    <li><a href="#"><i class="icon fa fa-user"></i>My Account</a></li>
                    <li><a href="#"><i class="icon fa fa-heart"></i>Wishlist</a></li>
                    <li><a href="#"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
                    <li><a href="/cart"><i class="icon fa fa-check"></i>Checkout</a></li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    
                </ul>
            </div><!-- /.cnt-account -->

            <div class="cnt-block">
                <ul class="list-unstyled list-inline">
                    <li class="dropdown dropdown-small">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">USD </span><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">USD</a></li>
                            <li><a href="#">INR</a></li>
                            <li><a href="#">GBP</a></li>
                        </ul>
                    </li>

                    <li class="dropdown dropdown-small">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">English </span><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">English</a></li>
                            <li><a href="#">French</a></li>
                            <li><a href="#">German</a></li>
                        </ul>
                    </li>
                </ul><!-- /.list-unstyled -->
            </div><!-- /.cnt-cart -->
            <div class="clearfix"></div>
        </div><!-- /.header-top-inner -->
    </div><!-- /.container -->
</div><!-- /.header-top -->
<!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                    <!-- ============================================================= LOGO ============================================================= -->
<div class="logo">
    <a href="/">
        
        <img src="/assets/images/logo.png" alt="">

    </a>
</div><!-- /.logo -->
<!-- ============================================================= LOGO : END ============================================================= -->             </div><!-- /.logo-holder -->

                <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
                    <!-- /.contact-row -->

<!-- ============================================================= SEARCH AREA : END ============================================================= -->              </div><!-- /.top-search-holder -->

                <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
                    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

<!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->                </div><!-- /.top-cart-row -->
            </div><!-- /.row -->

        </div><!-- /.container -->

    </div><!-- /.main-header -->

    <!-- ============================================== NAVBAR ============================================== -->
<div class="header-nav animate-dropdown">
    <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="nav-bg-class">
                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
    <div class="nav-outer">
        <ul class="nav navbar-nav">
            <li class="active dropdown yamm-fw">
                <a href="{{ url('/') }}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                
            </li>
            <li class="dropdown yamm mega-menu">
                <a href="home.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Clothing</a>
                <ul class="dropdown-menu container">
                    <li>
                                    <div class="yamm-content ">
            <div class="row">
                
                   <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                        <h2 class="title">Men</h2>
                        <ul class="links">
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Shoes </a></li>
                            <li><a href="#">Jackets</a></li>
                            <li><a href="#">Sunglasses</a></li>
                            <li><a href="#">Sport Wear</a></li>
                             <li><a href="#">Blazers</a></li>
                              <li><a href="#">Shirts</a></li>
                          
                        </ul>
                    </div><!-- /.col -->

                    <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                        <h2 class="title">Women</h2>
                        <ul class="links">
                            <li><a href="#">Handbags</a></li>
                            <li><a href="#">Jwellery</a></li>
                            <li><a href="#">Swimwear </a></li>                   
                            <li><a href="#">Tops</a></li>
                            <li><a href="#">Flats</a></li>
                             <li><a href="#">Shoes</a></li>
                              <li><a href="#">Winter Wear</a></li>
                       
                        </ul>
                    </div><!-- /.col -->

                    <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                        <h2 class="title">Boys</h2>
                        <ul class="links">
                            <li><a href="#">Toys & Games</a></li>
                            <li><a href="#">Jeans</a></li>
                            <li><a href="#">Shirts</a></li>
                            <li><a href="#">Shoes</a></li>
                             <li><a href="#">School Bags</a></li>
                              <li><a href="#">Lunch Box</a></li> 
                               <li><a href="#">Footwear</a></li>
                                                                   
                        </ul>
                    </div><!-- /.col -->

                    <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                        <h2 class="title">Girls</h2>
                        <ul class="links">
                            <li><a href="#">Sandals </a></li> 
                            <li><a href="#">Shorts</a></li>
                            <li><a href="#">Dresses</a></li>
                            <li><a href="#">Jwellery</a></li>
                            <li><a href="#">Bags</a></li>
                             <li><a href="#">Night Dress</a></li>
                              <li><a href="#">Swim Wear</a></li>
                          
                                   
                        </ul>
                    </div><!-- /.col -->

                    
       <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image">
                                    <img class="img-responsive" src="assets/images/banners/top-menu-banner.jpg" alt="">  
       
 
</div><!-- /.yamm-content -->                   
</div>
</div>

</li>
                </ul>
                
            </li>

            <li class="dropdown mega-menu">
                <a href="category.html"  data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Electronics
                   <span class="menu-label hot-menu hidden-xs">hot</span>
                </a>
                <ul class="dropdown-menu container">
                    <li>
                        <div class="yamm-content">
    <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                <h2 class="title">Laptops</h2>
                <ul class="links">
                   <li><a href="#">Gaming</a></li>
                   <li><a href="#">Laptop Skins</a></li>
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">Dell</a></li>
                    <li><a href="#">Lenovo</a></li>
                    <li><a href="#">Microsoft</a></li>
                    <li><a href="#">Asus</a></li>
                     <li><a href="#">Adapters</a></li>
                     <li><a href="#">Batteries</a></li>
                     <li><a href="#">Cooling Pads</a></li>
                </ul>
            </div><!-- /.col -->

            <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                <h2 class="title">Desktops</h2>
                <ul class="links">
                    <li><a href="#">Routers & Modems</a></li>
                    <li><a href="#">CPUs, Processors</a></li>
                    <li><a href="#">PC Gaming Store</a></li>
                    <li><a href="#">Graphics Cards</a></li>
                    <li><a href="#">Components</a></li>
                    <li><a href="#">Webcam</a></li>
                    <li><a href="#">Memory (RAM)</a></li>
                    <li><a href="#">Motherboards</a></li>
                    <li><a href="#">Keyboards</a></li>
                    <li><a href="#">Headphones</a></li>
                </ul>
            </div><!-- /.col -->

            <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                <h2 class="title">Cameras</h2>
                <ul class="links">
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Binoculars</a></li>
                    <li><a href="#">Telescopes</a></li>
                    <li><a href="#">Camcorders</a></li>
                    <li><a href="#">Digital</a></li>
                     <li><a href="#">Film Cameras</a></li>
                     <li><a href="#">Flashes</a></li>
                     <li><a href="#">Lenses</a></li>
                     <li><a href="#">Surveillance</a></li>
                      <li><a href="#">Tripods</a></li>
                     
                </ul>
            </div><!-- /.col -->
            <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                <h2 class="title">Mobile Phones</h2>
                <ul class="links">
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">Samsung</a></li>
                    <li><a href="#">Lenovo</a></li>
                    <li><a href="#">Motorola</a></li>
                    <li><a href="#">LeEco</a></li>
                    <li><a href="#">Asus</a></li>
                    <li><a href="#">Acer</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Headphones</a></li>
                     <li><a href="#">Memory Cards</a></li>
                </ul>
            </div>
            
             <div class="col-xs-12 col-sm-12 col-md-4 col-menu custom-banner">
             <a href="#"><img alt="" src="assets/images/banners/banner-side.png"></a>
             </div>
    </div><!-- /.row -->
</div><!-- /.yamm-content -->                   </li>
                </ul>
            </li>
            <li class="dropdown hidden-sm">
                
                <a href="category.html">Health & Beauty
                    <span class="menu-label new-menu hidden-xs">new</span>
                </a>
            </li>

            <li class="dropdown hidden-sm">
                <a href="category.html">Watches</a>
            </li>

            <li class="dropdown">
                <a href="contact.html">Jewellery</a>
            </li>
            
            <li class="dropdown">
                <a href="contact.html">Shoes</a>
            </li>
            <li class="dropdown">
                <a href="contact.html">Kids & Girls</a>
            </li>
            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Pages</a>
                <ul class="dropdown-menu pages">
                    <li>
                        <div class="yamm-content">
                            <div class="row">
                                
                                    <div class="col-xs-12 col-menu">
                                      <ul class="links">
                                            <li><a href="home.html">Home</a></li>
                                            <li><a href="category.html">Category</a></li>
                                            <li><a href="detail.html">Detail</a></li>
                                            <li><a href="shopping-cart.html">Shopping Cart Summary</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Detail</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="sign-in.html">Sign In</a></li>
                                            <li><a href="my-wishlist.html">Wishlist</a></li>
                                            <li><a href="terms-conditions.html">Terms and Condition</a></li>
                                            <li><a href="track-orders.html">Track Orders</a></li>
                                            <li><a href="product-comparison.html">Product-Comparison</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                            <li><a href="404.html">404</a></li>
                                            
                                      </ul>
                                    </div>
                                                                    
                            </div>
                        </div>
                    </li>
                    
                   
                    
                </ul>
            </li>
             <li class="dropdown  navbar-right special-menu">
                <a href="#">Todays offer</a>
            </li>
                    
            
        </ul><!-- /.navbar-nav -->
        <div class="clearfix"></div>                
    </div><!-- /.nav-outer -->
</div><!-- /.navbar-collapse -->


            </div><!-- /.nav-bg-class -->
        </div><!-- /.navbar-default -->
    </div><!-- /.container-class -->

</div><!-- /.header-nav -->
<!-- ============================================== NAVBAR : END ============================================== -->

</header>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Login') }}</div> --}}
                <h2 style="margin-left: 130px;" class="text-primary">Login</h2>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-2 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

<!-- ============================================================= FOOTER ============================================================= -->
<footer id="footer" class="footer color-bg">


    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Contact Us</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
        <ul class="toggle-footer" style="">
            <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                            <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <p>ThemesGround, 789 Main rd, Anytown, CA 12345 USA</p>
                </div>
            </li>

              <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <p>+(888) 123-4567<br>+(888) 456-7890</p>
                </div>
            </li>

              <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <span><a href="#">flipmart@themesground.com</a></span>
                </div>
            </li>
              
            </ul>
    </div><!-- /.module-body -->
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Customer Service</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                            <li class="first"><a href="#" title="Contact us">My Account</a></li>
                <li><a href="#" title="About us">Order History</a></li>
                <li><a href="#" title="faq">FAQ</a></li>
                <li><a href="#" title="Popular Searches">Specials</a></li>
                <li class="last"><a href="#" title="Where is my order?">Help Center</a></li>
                        </ul>
                    </div><!-- /.module-body -->
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Corporation</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                          <li class="first"><a title="Your Account" href="#">About us</a></li>
                <li><a title="Information" href="#">Customer Service</a></li>
                <li><a title="Addresses" href="#">Company</a></li>
                <li><a title="Addresses" href="#">Investor Relations</a></li>
                <li class="last"><a title="Orders History" href="#">Advanced Search</a></li>
                        </ul>
                    </div><!-- /.module-body -->
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="module-heading">
                        <h4 class="module-title">Why Choose Us</h4>
                    </div><!-- /.module-heading -->

                    <div class="module-body">
                        <ul class='list-unstyled'>
                            <li class="first"><a href="#" title="About us">Shopping Guide</a></li>
                <li><a href="#" title="Blog">Blog</a></li>
                <li><a href="#" title="Company">Company</a></li>
                <li><a href="#" title="Investor Relations">Investor Relations</a></li>
                <li class=" last"><a href="contact-us.html" title="Suppliers">Contact Us</a></li>
                        </ul>
                    </div><!-- /.module-body -->
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-bar">
        <div class="container">
            <div class="col-xs-12 col-sm-6 no-padding social">
                <ul class="link">
                  <li class="fb pull-left"><a target="_blank" rel="nofollow" href="#" title="Facebook"></a></li>
                  <li class="tw pull-left"><a target="_blank" rel="nofollow" href="#" title="Twitter"></a></li>
                  <li class="googleplus pull-left"><a target="_blank" rel="nofollow" href="#" title="GooglePlus"></a></li>
                  <li class="rss pull-left"><a target="_blank" rel="nofollow" href="#" title="RSS"></a></li>
                  <li class="pintrest pull-left"><a target="_blank" rel="nofollow" href="#" title="PInterest"></a></li>
                  <li class="linkedin pull-left"><a target="_blank" rel="nofollow" href="#" title="Linkedin"></a></li>
                  <li class="youtube pull-left"><a target="_blank" rel="nofollow" href="#" title="Youtube"></a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 no-padding">
                <div class="clearfix payment-methods">
                    <ul>
                        <li><img src="{{asset('assets/images/payments/1.png')}}" alt=""></li>
                        <li><img src="{{asset('assets/images/payments/2.png')}}" alt=""></li>
                        <li><img src="{{asset('assets/images/payments/3.png')}}" alt=""></li>
                        <li><img src="{{asset('assets/images/payments/4.png')}}" alt=""></li>
                        <li><img src="{{asset('assets/images/payments/5.png')}}" alt=""></li>
                    </ul>
                </div><!-- /.payment-methods -->
            </div>
        </div>
    </div>
</footer>
<!-- ============================================================= FOOTER : END============================================================= -->

    <!-- For demo purposes – can be removed on production -->
    
    
    <!-- For demo purposes – can be removed on production : End -->

    <!-- JavaScripts placed at the end of the document so the pages load faster -->
    <script src="{{ asset('assets/js/jquery-1.11.1.min.js')}}"></script>
    
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    
    <script src="{{ asset('assets/js/bootstrap-hover-dropdown.min.js')}}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
    
    <script src="{{ asset('assets/js/echo.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.easing-1.3.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap-slider.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.rateit.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/lightbox.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('assets/js/wow.min.js')}}"></script>
    <script src="{{ asset('assets/js/scripts.js')}}"></script>
    @stack('js')

</body>
</html>
