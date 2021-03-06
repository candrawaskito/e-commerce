<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">

        <title>AmetkCommerce</title>

        <!-- start:stylesheet -->
        <link rel="stylesheet" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('node_modules/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('node_modules/owl-carousel-2/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('node_modules/owl-carousel-2/assets/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('stylesheets/app.css') }}">

        @yield('styles')
        <!-- end:/stylesheet -->
    </head>
    <body>
        <!-- start:header -->
        <header id="header">
            <!-- start:navbar-main -->
            <section id="navbar-main">
                <nav class="navbar">
                    <div class="container">                 
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="header-top-left">
                                <a href="#" class="navbar-brand">
                                    AmtekCommerce
                                </a>
                                <i class="navbar-text fa fa-bars"></i>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="header-top-right pull-right">
                                <img src="{{ asset('assets/images/icon/chart.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </nav>
            </section>
            <!-- end:/navbar-main -->

            <!-- start:navbar-content -->
            <section id="navbar-content">
                <div class="container">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <div class="col-lg-8">
                                <input type="email" class="form-control form-search" id="inputEmail3" placeholder="Type Something ...">
                            </div>
                            <div class="col-lg-2">
                                <select class="form-control form-search" name="" id="">
                                    <option value="">All Category</option>
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-search btn-block">Search</button>
                            </div>
                        </div>
                    </form> 
                </div>
            </section>
            <!-- end:/navbar-content -->

            <!-- start:header main -->
            <section id="header-main">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="{{ asset('assets/images/slider.jpg') }}" alt="Slider">
                            <div class="carousel-caption">
                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                    <div class="content-caption">
                                        <h1>The World's Leading Platform for Global Trade</h1>
                                        <button class="btn btn-lg btn-caption" type="button">Learn More</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <img src="{{ asset('assets/images/slider.jpg') }}" alt="Slider">
                            <div class="carousel-caption">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="content-caption">
                                        <h1>The World's Leading Platform for Global Trade</h1>
                                        <button class="btn btn-lg btn-caption" type="button">Learn More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </section>
            <!-- end:/header-main -->

            <!-- start:header-content -->
            <section id="header-content">
                <div class="container">                 
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="header-content text-center">
                            <img src="{{ asset('assets/images/icon/product.svg') }}" alt="">
                            <h4>Discover Product & Supplier</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="header-content text-center">      
                            <img src="{{ asset('assets/images/icon/orders.svg') }}" alt="">                 
                            <h4>Manage Order Online</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="header-content text-center">
                            <img src="{{ asset('assets/images/icon/protections.svg') }}" alt="">                
                            <h4>Get Full Orders Protections</h4>
                        </div>
                    </div>              
                </div>
            </section>
            <!-- end:/header-content -->
        </header>
        <!-- end:/header -->

        <!-- start:main content -->
        <section id="content">
            <!-- start:popular-supplier -->
            <div class="popular-supplier">
                <div class="container">
                    <div class="popular-supplier-title">
                        <div class="text-center">
                            <h4>Popular Suppliers</h4>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="content-popular-supplier">
                                <a href="#" class="thumbnail">
                                    <img src="../assets/images/1.jpg" alt="">
                                    <div class="price">
                                        <h4>Batik</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                         <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="content-popular-supplier">
                                <a href="#" class="thumbnail">
                                    <img src="../assets/images/1.jpg" alt="">
                                    <div class="price">
                                        <h4>Batik</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                         <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="content-popular-supplier">
                                <a href="#" class="thumbnail">
                                    <img src="../assets/images/1.jpg" alt="">
                                    <div class="price">
                                        <h4>Price</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                         <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="content-popular-supplier">
                                <a href="#" class="thumbnail">
                                    <img src="../assets/images/1.jpg" alt="">
                                    <div class="price">
                                        <h4>Batik</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="" class="btn btn-link btn-see-all">See All</a>
                    </div>
                </div>
            </div>
            <!-- end:/popular-supplier -->

            <!-- start:hot-product -->          
            <div class="hot-product">                   
                <div class="container">
                    <div class="hot-product-title">
                        <img src="../assets/images/icon/bookmark.svg" alt="">
                        <h4>Hot Products</h4>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <a href="#">
                                    <img src="../assets/images/popular.jpg" alt="">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="../assets/images/popular.jpg" alt="">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="../assets/images/popular.jpg" alt="">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="../assets/images/popular.jpg" alt="">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="../assets/images/popular.jpg" alt="">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="../assets/images/popular.jpg" alt="">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="../assets/images/popular.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end:/hot-product -->

            <!-- start:popular-product -->
            <div class="popular-product">
                <div class="container">
                    <div class="popular-product-title">
                        <img src="../assets/images/icon/bookmark.svg" alt="">
                        <h4>Popular Products</h4>
                    </div>
                    <div class="container">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <a href="#">
                                    <img src="../assets/images/popular.jpg" alt="">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="../assets/images/popular.jpg" alt="">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="../assets/images/popular.jpg" alt="">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="../assets/images/popular.jpg" alt="">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="../assets/images/popular.jpg" alt="">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="../assets/images/popular.jpg" alt="">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="../assets/images/popular.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end:/popular-product -->
        </section>
        <!-- end:/main content -->

        <!-- start:footer -->
        <footer class="footer">
            <div class="container">
                    <!-- start:footer-top -->
                    <div class="footer-top">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h4>Kami Menerima Pembayaran Melalui :</h4>
                                <div class="payment-card">
                                    <img src="../assets/images/icon/Visa-Dark.svg" alt="visa">
                                    <img src="../assets/images/icon/MasterCard-dark.svg" alt="master">
                                    <img src="../assets/images/icon/Maestro-dark.svg" alt="maestro">
                                    <img src="../assets/images/icon/Cirrus-dark.svg" alt="cirrus">
                                    <img src="../assets/images/icon/AmericanExpress-dark.svg" alt="americanex">
                                    <img src="../assets/images/icon/DinersClub-dark.svg" alt="dinerdclub">
                                    <img src="../assets/images/icon/JCB-dark.svg" alt="jbc">
                                    <img src="../assets/images/icon/UnionPay-dark.svg" alt="unionpay">
                                    <img src="../assets/images/icon/Discover-dark.svg" alt="discover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end:/footer-top -->
                    <!-- start:footer-content -->
                    <div class="footer-content">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-sm-3">
                                    <h4>About Us</h4>
                                    <ul>
                                        <li><a href="#">About AmtekCommerce</a></li>
                                        <li><a href="#">Sitemap</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-3">
                                    <h4>Customer Service</h4>
                                    <ul>
                                        <li><a href="#">Help center</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Submit & Complaint</a></li>
                                        <li><a href="#">Policies & Rules</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-3">
                                    <h4>Buy on AmtekCommerce</h4>
                                    <ul>
                                        <li><a href="#">By Category</a></li>
                                        <li><a href="#">Get Quotations</a></li>
                                        <li><a href="#">Wholesaler</a></li>
                                        <li><a href="#">Popular Products Trends</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-3">
                                    <h4>Sell on AmtekCommerce</h4>
                                    <ul>
                                        <li><a href="#">Supplier Memberships</a></li>
                                        <li><a href="#">Learning Center</a></li>
                                        <li><a href="#">Training Center</a></li>
                                        <li><a href="#">AmtekCommerce Source</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end:/footer-content -->
                    <!-- start:footer-bottom -->
                    <div class="footer-bottom">                 
                        <p><i class="fa fa-copyright"></i> Copyright 2016 - <a href="#">Amteklab</a> E-Commerce System.</p>
                    </div>
                    <!-- end:/footer-bottom -->
            </div>
        </footer>
        <!-- end:/footer -->

        <!-- start:javascript -->
        <script src="{{ asset('node_modules/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('node_modules/owl-carousel-2/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('build.js') }}"></script>

        @yield('scripts')
        
        <!-- end:/javascript -->
        <script>
            $('.owl-carousel').owlCarousel({
                loop:true,
                items:3,
                margin:10,
                nav:true,
                autoplay:true,
                autoplayTimeout:5000,
                autoplayHoverPause:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            })
        </script>
    </body>
</html>