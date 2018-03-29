
<!DOCTYPE html>
<html lang="en">
    <!--
        **********************************************************************************************************
        Copyright (c) 2017 Webvillee
        ********************************************************************************************************** -->
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--[if IE]>
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <![endif]-->
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="My Shop Multipurpose Responsive HTML Template" />
    <meta name="author" content="webvillee.com"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Lemon Shop</title>
    <!-- Bootstrap -->
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <!-- Master Css -->

    <link href="css/main.css" rel="stylesheet">
    <link href="css/switcher.css" rel="stylesheet">
    <link href="css/color.css" rel="stylesheet" id="colors">
    @yield('css')
</head>
<body>
    <!--//==Preloader Start==//-->
    <div class="preloader">
        <div class="cssload-container">
            <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
        </div>
    </div>
    <!--//==Preloader End==//-->
    <!--//==Header Start==//-->
    <header id="main-header">
        <!--//=======Top Bar Start=======//-->
        <div class="top-bar">
            <div class="container">
                <!--======Hidden for xs device========-->
                <div class="row hidden-xs">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="top-bar-menu">
                            <nav>
                                <ul>
                                    <li><a href="#">Offers</a></li>
                                    <li><a href="#">Track Order</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="top-bar-menu textR">
                            <nav id="user-top-bar">
                                <ul class="list-inline textL">
                                    <li>
                                        <a href="#">VNĐ <i class="fa fa-caret-down"></i></a>
                                        <ul>
                                            <li><a href="#">EUR</a></li>
                                            <li><a href="#">USD</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Việt Nam <i class="fa fa-caret-down"></i></a>
                                        <ul>
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">Français</a></li>
                                        </ul>
                                    </li>
                                    @if(null !== Auth::user())
                                        <li>
                                            {{Auth::user()->name}}
                                        </li>
                                    @endif
                              </ul>
                          </nav>
                      </div>
                  </div>
              </div>
              <!--======Hidden for sm, md and lg device========-->
              <div class="row hidden-sm hidden-md hidden-lg">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="top-bar-menu">
                        <nav>
                            <ul>
                                <li>
                                    <a href="#">English <i class="fa fa-caret-down"></i></a>
                                    <ul>
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Français</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">USD <i class="fa fa-caret-down"></i></a>
                                    <ul>
                                        <li><a href="#">Việt Nam</a></li>
                                        <li><a href="#">VNĐ</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Middle header -->
    <div class="middle header">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <a class="logo" href="{{route('home')}}">
                        <img class="site_logo" alt="Site Logo"  src="img/logo.png"/>
                    </a>    
                </div>
                <div class="col-md-8 middle-search">
                    <form class="search-form">
                        <div class="input-group">
                            <input type="text" class="form-control input-lg search-input" placeholder="Search here..." required="required">
                            <div class="input-group-btn">
                                <div class="input-group">
                                    <select class="form-control input-lg search-select">
                                        <option>All Categories</option>
                                        <option>Deals</option>
                                        <option>Coupons</option>
                                        <option>Discounts</option>
                                    </select>
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-lg btn-search btn-block">
                                            <i class="fa fa-search font-16"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-2">
                    <ul class="middle-icon">
                        <li id="cart"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i><sup class="shop-cart-total site-bg-color">02</sup></a>
                            <div class="mini-cart-wrapper top-sub-menu sub-menu-right shop_hide">
                                <!-- Product List -->
                                <div class="mc-pro-list fix">
                                    <div class="mc-sin-pro fix">
                                        <a href="#" class="mc-pro-image float-left"><img src="img/1.jpg" alt=""></a>
                                        <div class="mc-pro-details fix">
                                            <h5>Blue jeans lorem</h5>
                                            <span>1 x $100.00</span>
                                            <a><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="mc-sin-pro fix">
                                        <a href="#" class="mc-pro-image float-left"><img src="img/2.jpg" alt=""></a>
                                        <div class="mc-pro-details fix">
                                            <h5>T-shirt full lorem</h5>
                                            <span>1 x $100.00</span>
                                            <a><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sub Total -->
                                    <!--<div class="mc-subtotal fix">
                                        <h4>Subtotal <span>$200.00</span></h4>
                                    </div>-->
                                    <!-- Cart Button -->
                                    <div class="mc-button">
                                        <a href="#" class="button color-hover small">View</a>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i></a></li>
                            <li><a href="{{route('shopping.cart')}}"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--//==Navbar Start==//-->
        <div id="main-menu" class="wv-main-menu">
            <!-- Menu -->
            <div class="wathemes-menu relative">
                <!-- navbar -->
                <div class="navbar navbar-default navbar-bg-light" role="navigation">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="navbar-header">
                                    <!-- Button For Responsive toggle -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span> 
                                        <span class="icon-bar"></span> 
                                        <span class="icon-bar"></span> 
                                        <span class="icon-bar"></span></button> 
                                        <!-- Logo -->
                                        <a class="navbar-brand responsive_logo" href="index.html">
                                            <img class="site_logo" alt="Site Logo"  src="img/logo1.png"/>
                                        </a>
                                    </div>
                                    <!-- Navbar Collapse -->
                                    <div class="navbar-collapse collapse">
                                        <!-- nav -->
                                        <ul class="nav navbar-nav">
                                            <!-- Home Menu -->
                                            <li>
                                                <a href="{{route('home')}}">Home</a> 
                                            </li>
                                            <li class="mega-menu">
                                                <a href="">Danh Mục <span class="caret menu-arrow"></span></a>
                                                <ul class="dropdown-menu wv_menu_color">
                                                    <li>
                                                        <!-- Home Mage Menu grids Begins -->
                                                        <div class="row">
                                                            <!-- Home Variation 1 Block -->
                                                            @foreach($catalogs as $catalog)
                                                            <div class="col-sm-3 page-links">
                                                               <div>
                                                                <a href="{{route('home.show.product.by.catalog',$catalog->slug)}}">{{$catalog->name}}</a>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- Pages Menu Ends -->
                                            <!--Menu -->
                                            <li>
                                                <a href="#">Nhà Cung Cấp<span class="caret menu-arrow"></span></a> 
                                                <!--  Dropdown Menu -->
                                                <ul class="dropdown-menu wv_menu_color">
                                                    <!--  Grid Block -->
                                                    <li>
                                                        <a href="#">Categoty</a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a href="shop-left-sidebar.html">category left Sidebar</a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-right-sidebar.html">category right Sidebar</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!-- Ends  Grid Block -->
                                                    <li>
                                                        <a href="#">Categoty list</a>
                                                        <ul class="dropdown-menu wv_menu_color">
                                                            <li>
                                                                <a href="shop-list-left-sidebar.html">list left Sidebar</a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-list-right-sidebar.html">list right Sidebar</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!-- Ends  Grid Block -->
                                                    <li>
                                                        <a href="#">Shop single</a>
                                                        <ul class="dropdown-menu wv_menu_color">
                                                            <li>
                                                                <a href="shop-single-left-sidebar.html">Shop Sidebar</a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-single.html">Shop fullwidth</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!-- Ends Grid Block -->
                                                </ul>
                                            </li>
                                            <!-- Blog Menu -->
                                            <li>
                                                <a href="#">Khách Hàng<span class="caret menu-arrow"></span></a> 
                                                <ul class="dropdown-menu wv_menu_color">
                                                    <li>
                                                        <a href="{{route('get.user.login')}}">Đăng Nhập</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('get.user.logout')}}">Đăng Xuất</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-single.html">Thay đổi thông tin</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- Ends blog Menu -->
                                            <!-- Contact Block -->
                                            <li>
                                                <a href="contact.html">Contact us</a>
                                            </li>
                                            <!-- Ends Contact Block -->
                                            <!-- pages Block -->
                                            <li>
                                                <a href="#">pages<span class="caret menu-arrow"></span></a>
                                                <ul class="dropdown-menu wv_menu_color">
                                                    <li>
                                                        <a href="{{route('shopping.cart')}}">shopping cart</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('get.checkout')}}">checkout</a>
                                                    </li>
                                                    <li>
                                                        <a href="wishlist.html">wishlist</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- Ends pages Block -->
                                            <!-- Ends Widgets Block -->
                                        </ul>
                                        <!-- Right nav -->
                                    </div>
                                    <!-- /.navbar-collapse -->
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- navbar -->
                </div>
                <!--  Menu -->
            </div>
            <!--//==Navbar End==//-->
        </header>
        <!--//==Header End==//-->

        @yield('content')


        <!--//=======Footer Start=======//--> 
        <footer id="main-footer"  class="dark-footer">
            <!--Upper Footer Block-->
            <div class="upper-footer wv_footer">
                <div class="container">
                    <div class="row pad-s15">
                        <!--Widget Block-->
                        <div class="col-md-3 col-sm-6">
                            <div class="widget contact-widget">
                                <h3>Contact</h3>
                                <p><span class="square-icon"><i class="fa fa-map-marker"></i></span>PO Box 16122 Collins Street <br>
                                    West Victoria 8007 Australia
                                </p>
                                <p><span class="square-icon"><i class="fa fa-phone"></i></span>+61 3 8376 6284 <br>
                                    +61 3 8376 6284
                                </p>
                                <p><span class="square-icon"><i class="fa fa-envelope-o"></i></span>+61 3 8376 6284<br>
                                    +61 3 8376 6284
                                </p>
                            </div>
                        </div>
                        <!--Widget Block-->
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h3>Account Info</h3>
                                <ul>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> My Account</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Wishlist</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Order Detail</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Gift Card</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Offers</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Track Order</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Return Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Widget Block-->
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h3>Category</h3>
                                <ul>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Women</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Man</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Accessories</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Shoes</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Watch</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Sunglasses</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Shocks</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Widget Block-->
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h3>Information</h3>
                                <ul>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Products</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Advanced Search</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Site Map</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> FAQ</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Location</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Terms & Condition</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o wv_circle"></i> Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 wv_social">
                            <ul class="col-md-12 social">
                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                <li><a href=""><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--Copyright Footer Block-->
            <div class="bottom-footer">
                <div class="container">
                    <div class="row pad-s15">
                        <div class="col-md-6 copy-right">
                            <p>Copyright © 2017 My Shop All Rights Reserved</p>
                        </div>
                        <div class="col-md-6 payment-method text-right">
                            <ul class="col-md-12 wv_pay">
                                <li><a href=""></a><img src="img/icons/pay1.png" alt=""></li>
                                <li><a href=""></a><img src="img/icons/pay2.png" alt=""></li>
                                <li><a href=""></a><img src="img/icons/pay3.png" alt=""></li>
                                <li><a href=""></a><img src="img/icons/pay4.png" alt=""></li>
                                <li><a href=""></a><img src="img/icons/pay5.png" alt=""></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--//=======Footer End=======//--> 
        <div id="quickView" class="modal quickView" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close-modal" data-dismiss="modal">×</button>
                    <div class="modal-body">
                        <div class="quick-view-container">
                            <!--//==Product Item Start==//-->
                            <div class="col-md-12 col-sm-12">
                                <div class="wa-theme-design-block">
                                    <div class="col-md-6 wv_list_img">
                                        <div class="item_left_slider product--image">
                                            <div class="single_display_image"> 
                                                <img class="display-img" alt="" id="image-link-quickView" /> 
                                            </div>
                                            {{-- <div class="icon-images"> 
                                                <a href="img/product/product1.jpg"> 
                                                    <img src="img/product/small_product1.jpg" alt="small_product1"/></a> 
                                                    <a href="img/product/product2.jpg"> <img src="img/product/small_product2.jpg" alt="small_product2"/></a> 
                                                    <a href="img/product/product1.jpg"> <img src="img/product/small_product1.jpg" alt="small_product3"/></a> 
                                                    <a href="img/product/product2.jpg"> <img src="img/product/small_product2.jpg" alt="small_product4"/></a>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="col-md-6 wv_list_text wv_single_text">
                                            <div class="block-caption1 wv_single_heading">
                                                <h5 class="responsive_single_title" id="namequickView"></h5>
                                                <div class="col-xs-4 col-sm-4 col-md-6 text_left">
                                                    <span class="price-text-color " id="catalog-name-quickView"></span>
                                                </div>
                                                <div class="col-xs-8 col-sm-8 col-md-6 review_right">
                                                    <ul class="wv_rating">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><span class="review">1 review</span></li>
                                                    </ul>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="price list_price col-md-12">
                                                    <span class="sell-price" id="price-quickView"></span>
                                                    <span class="actual-price" id="price-discount-quickView"></span>
                                                    <h5>Mô tả ngắn:</h5>
                                                    <p id="sort-content-quickView"></p>
                                                    <div class="single_specification">
                                                        <div class="col-xs-3 col-md-3 single_color_left">
                                                            <h5>Nhà cung cấp:</h5>
                                                        </div>
                                                        <div class="col-xs-9 col-md-9 single_color_right wv_widget">
                                                            <span id="supplier-name-quickView"></span>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                    <div class="single_specification">
                                                        <div class="col-xs-3 col-md-3 single_size_left">
                                                            <h4>Size:</h4>
                                                        </div>
                                                        <div class="col-xs-9 col-md-9 single_color_right wv_widget">
                                                            <ul class="wv_size">
                                                                <li><a href="#">xs</a></li>
                                                                <li><a href="#">s</a></li>
                                                                <li><a href="#">m</a></li>
                                                                <li><a href="#">l</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                    <div class="show-item wv_grid_right wv_single_numproduct">
                                                        <div class="box-option responsive_box">
                                                            <select>
                                                                <option>12</option>
                                                                <option>18</option>
                                                                <option>24</option>
                                                            </select>
                                                            <span class="icon"></span>
                                                        </div>
                                                    </div>
                                                    <ul class="shop_list_icon wv_single_icon">
                                                        <li><a href="">ADD TO CART</a></li>
                                                        <li><a href=""><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                    <div class="single_specification specification_social">
                                                        <div class="col-xs-3 col-md-3 single_social_left">
                                                            <h4>Share:</h4>
                                                        </div>
                                                        <div class="col-xs-9 col-md-9 single_color_right wv_widget">
                                                            <ul class="wv_single_social">
                                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <!--//==Product Item End==//-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal_backdrop"></div>
            <!-- Switcher Section Start -->
            <div id="style-switcher">
                <h2>Choose Color<a href="#"><i class="fa fa-cog fa-spin"></i></a></h2>
                <div>
                    <ul class="colors" id="color1">
                        <li>
                            <a href="#" class="color"></a>
                        </li>
                        <li>
                            <a href="#" class="color1"></a>
                        </li>
                        <li>
                            <a href="#" class="color2"></a>
                        </li>
                        <li>
                            <a href="#" class="color3"></a>
                        </li>
                        <li>
                            <a href="#" class="color4"></a>
                        </li>
                        <li>
                            <a href="#" class="color5"></a>
                        </li>
                        <li>
                            <a href="#" class="color6"></a>
                        </li>
                        <li>
                            <a href="#" class="color7"></a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- / Switcher Section End -->
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="js/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>
            <!-- jQuery plugins library-->
            <script type="text/javascript" src="js/hover-dropdown-menu.js"></script> 
            <script type="text/javascript" src="js/jquery.hover-dropdown-menu-addon.js"></script>   
            <script src="js/owl.carousel.js"></script>  
            <script type="text/javascript" src="js/jquery.countTo.js"></script> 
            <script type="text/javascript" src="js/jquery.appear.js"></script>   
            <script src="js/jquery.mixitup.js"></script>   
            <script src="js/jquery.fancybox.pack.js"></script>
            <script src="js/jquery.fancybox-media.js"></script>
            <script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
            <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
            <script type="text/javascript" src="js/switcher.js"></script> 
            <!-- Custom JS -->
            <script type="text/javascript" src="js/main.js"></script> 
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
            @yield('script')
        </body>
        </html>