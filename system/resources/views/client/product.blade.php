<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>VERPESHOP SHOP</title>

    <!-- Fav Icon -->
    <link rel="icon" href="{{ 'public' }}/assets/images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ 'public' }}/assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="{{ 'public' }}/assets/css/flaticon.css" rel="stylesheet">
    <link href="{{ 'public' }}/assets/css/owl.css" rel="stylesheet">
    <link href="{{ 'public' }}/assets/css/bootstrap.css" rel="stylesheet">
    <link href="{{ 'public' }}/assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="{{ 'public' }}/assets/css/animate.css" rel="stylesheet">
    <link href="{{ 'public' }}/assets/css/jquery-ui.css" rel="stylesheet">
    <link href="{{ 'public' }}/assets/css/jquery.bootstrap-touchspin.css" rel="stylesheet">
    <link href="{{ 'public' }}/assets/css/nice-select.css" rel="stylesheet">
    <link href="{{ 'public' }}/assets/css/color.css" rel="stylesheet">
    <link href="{{ 'public' }}/assets/css/style.css" rel="stylesheet">
    <link href="{{ 'public' }}/assets/css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper">

        <!-- main header -->
        <header class="main-header">
            <div class="header-lower">
                <div class="large-container">
                    <div class="outer-box">
                        <figure class="logo-box"><a href="#"><img
                                    src="{{ 'public' }}/assets/images/logo.png" alt=""></a></figure>
                        <div class="menu-area">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li><a href="{{ 'home' }}">Home</a>
                                        </li>
                                        <li><a href="{{ 'shop' }}">shop</a>
                                        </li>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <ul class="menu-right-content clearfix">
                            <li><a href="my-account.html"><i class="flaticon-user"></i></a></li>
                            <li class="shop-cart">
                                <a href="{{ 'cart' }}"><i
                                        class="flaticon-shopping-cart-1"></i><span>3</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box clearfix">
                        <div class="logo-box pull-left">
                            <figure class="logo"><a href="#"><img
                                        src="{{ 'public' }}/assets/images/small-logo.png" alt=""></a>
                            </figure>
                        </div>
                        <div class="menu-area pull-right">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="#"><img src="{{ 'public' }}/assets/images/logo-2.png"
                            alt="" title=""></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        <!-- page-title -->
        <section class="page-title centred">
            <div class="pattern-layer"
                style="background-image: url({{ 'public' }}/assets/images/background/page-title.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Product Details</h1>
                    <ul class="bread-crumb clearfix">
                        <li><i class="flaticon-home-1"></i><a href="#">Home</a></li>
                        <li>Product Details 01</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- product-details -->
        <section class="product-details product-details-1">
            <div class="auto-container">
                <div class="product-details-content">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <figure class="product-image">
                                <img src="{{ 'public' }}/assets/images/resource/shop/product-details-1.jpg"
                                    alt="">
                                <a href="{{ 'public' }}/assets/images/resource/shop/product-details-1.jpg"
                                    class="lightbox-image"><i class="flaticon-search-2"></i></a>
                            </figure>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="product-info">
                                <h3>Multi-Way Ultra Crop Top</h3>
                                <div class="customer-review clearfix">
                                    <ul class="rating-box clearfix">
                                        <li><i class="flaticon-star"></i></li>
                                        <li><i class="flaticon-star"></i></li>
                                        <li><i class="flaticon-star"></i></li>
                                        <li><i class="flaticon-star"></i></li>
                                        <li><i class="flaticon-star"></i></li>
                                    </ul>
                                </div>
                                <span class="item-price">$90.00</span>
                                <div class="text">
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                        deserunt mollit anim id est laborum. sed ut perspic atis unde omnis iste natus
                                        error sit voluptam accusan enim ipsam voluptam quia voluptas sit aspern odit aut
                                        fugit.</p>
                                    <ul class="list clearfix">
                                        <li>Armchair chair is made.</li>
                                        <li>Used on the seat and backrest.</li>
                                        <li>Solid wood and chipboard.</li>
                                    </ul>
                                </div>
                                <div class="othre-options clearfix">
                                    <div class="item-quantity">
                                        <input class="quantity-spinner" type="text" value="1"
                                            name="quantity">
                                    </div>
                                    <div class="btn-box"><button type="button" class="theme-btn-two">Add to
                                            cart</button></div>
                                    <ul class="info clearfix">
                                        <li><a href="product-details.html"><i class="flaticon-heart"></i></a></li>
                                        <li><a href="product-details.html"><i class="flaticon-search"></i></a></li>
                                    </ul>
                                </div>
                                <div class="other-links">
                                    <ul class="clearfix">
                                        <li>SKU: 05</li>
                                        <li>Category: <a href="product-details.html">Accessories</a></li>
                                        <li>Tags: <a href="product-details.html">glasses</a>,<a
                                                href="product-details.html">t-shirts</a>,<a
                                                href="product-details.html">watches</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- product-details end -->


        <!-- main-footer -->
        <footer class="main-footer light">
            <div class="footer-bottom">
                <div class="auto-container clearfix">
                    <div class="copyright pull-right">
                        <p><a href="#">Castro</a> &copy; 2020 All Right Reserved</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->


        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-long-arrow-alt-up"></i>
        </button>
    </div>


    <!-- jequery plugins -->
    <script src="{{ 'public' }}/assets/js/jquery.js"></script>
    <script src="{{ 'public' }}/assets/js/popper.min.js"></script>
    <script src="{{ 'public' }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ 'public' }}/assets/js/owl.js"></script>
    <script src="{{ 'public' }}/assets/js/wow.js"></script>
    <script src="{{ 'public' }}/assets/js/validation.js"></script>
    <script src="{{ 'public' }}/assets/js/jquery.fancybox.js"></script>
    <script src="{{ 'public' }}/assets/js/TweenMax.min.js"></script>
    <script src="{{ 'public' }}/assets/js/appear.js"></script>
    <script src="{{ 'public' }}/assets/js/scrollbar.js"></script>
    <script src="{{ 'public' }}/assets/js/jquery.nice-select.min.js"></script>
    <script src="{{ 'public' }}/assets/js/isotope.js"></script>
    <script src="{{ 'public' }}/assets/js/jquery-ui.js"></script>
    <script src="{{ 'public' }}/assets/js/jquery.bootstrap-touchspin.js"></script>

    <!-- main-js -->
    <script src="{{ 'public' }}/assets/js/script.js"></script>
</body><!-- End of .page_wrapper -->

</html>
