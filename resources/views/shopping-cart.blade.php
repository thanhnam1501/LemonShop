
<!DOCTYPE html>
<html lang="en">
    <!--
        **********************************************************************************************************
        Copyright (c) 2017 Webvillee
        **********************************************************************************************************
        -->
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
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Lemon Shop </title>        <!-- Bootstrap -->
        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <!-- Master Css -->
        <link href="css/main.css" rel="stylesheet">
        <link href="css/switcher.css" rel="stylesheet">
        <link href="css/color.css" rel="stylesheet" id="colors">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
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
                                            <a href="#">USD <i class="fa fa-caret-down"></i></a>
                                            <ul>
                                                <li><a href="#">EUR</a></li>
                                                <li><a href="#">USD</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">English <i class="fa fa-caret-down"></i></a>
                                            <ul>
                                                <li><a href="#">English</a></li>
                                                <li><a href="#">Français</a></li>
                                            </ul>
                                        </li>
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
                                                <li><a href="#">EUR</a></li>
                                                <li><a href="#">USD</a></li>
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
										<div class="mc-button">
											<a href="#" class="button color-hover small">View</a>
										</div>
									</div>
								</li>
                                <li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
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
                                            <!-- Pages Menu Ends -->
                                            <li class="mega-menu">
                                                <a href="">Category <span class="caret menu-arrow"></span></a>
                                                <ul class="dropdown-menu wv_menu_color">
                                                    <li>
                                                        <!-- Home Mage Menu grids Begins -->
                                                        <div class="row">
                                                            <!-- Home Variation 1 Block -->
                                                            <div class="col-sm-3">
                                                                <!-- Title -->
                                                                <h6 class="title">Mens</h6>
                                                                <!-- Links -->
                                                                <div class="page-links">
                                                                    <div>
                                                                        <a href="#">T-shirt</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#">Shirt</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#">Jackets</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#">Jeans</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#">Trousers</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Home Variation 1 Block -->
                                                            <!-- Home Variation 2 Block -->
                                                            <div class="col-sm-3">
                                                                <!-- Title -->
                                                                <h6 class="title">Womens</h6>
                                                                <!-- Links -->
                                                                <div class="page-links">
                                                                    <div>
                                                                        <a href="#">T-shirt</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#">Shirt</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#">Jackets</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#">Jeans</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#">Trousers</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Home Variation 2 Block -->
                                                            <!-- One Page variation 1 -->
                                                            <div class="col-sm-3">
                                                                <!-- Title -->
                                                                <h6 class="title">Accessories</h6>
                                                                <!-- Links -->
                                                                <div class="page-links">
                                                                    <div>
                                                                        <a href="#">Shoes</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#">Watches</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#">Bags</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#">Jwellery</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#">Sunglasses</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- One Page variation 1 -->
                                                            <!-- One Page variation 2 -->
                                                            <div class="col-sm-3">
                                                                <!-- Title -->
                                                                <h6 class="title">All</h6>
                                                                <!-- Links -->
                                                                <div class="page-links">
                                                                    <div>
                                                                        <a href="#">Wallets</a>
                                                                    </div>
                                                                    <div>
                                                                        <a href="#">Bracelets</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- One Page variation 2 -->
                                                        </div>
                                                        <!-- Ends Home Mage Menu Block -->
                                                    </li>
                                                </ul>
                                            </li>
                                            <!--Menu -->
                                            <li>
                                                <a href="#">Shop pages<span class="caret menu-arrow"></span></a> 
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
                                                <a href="#">blog<span class="caret menu-arrow"></span></a> 
                                                <ul class="dropdown-menu wv_menu_color">
                                                    <li>
                                                        <a href="blog.html">blog sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-single.html">blog single</a>
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
                                                        <a href="shopping-cart.html">shopping cart</a>
                                                    </li>
                                                    <li>
                                                        <a href="checkout.html">checkout</a>
                                                    </li>
                                                    <li>
                                                        <a href="wishlist.html">wishlist</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- Ends pages Block -->
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
        <!--//==Page Header Start==//-->
        <div class="wv_breadcrumb">
            <div class="container breadcrumb-section">
                <div class="row pad-s15">
                    <div class="col-md-12">
                        <div class="clear"></div>
                        <div class="breadcrumb-box">
                            <ul class="breadcrumb">
                                <li>
                                    <a href="{{route('home')}}">Home</a>
                                </li>
                                <li>
                                    <a href="index.html">Shop</a>
                                </li>
                                <li class="active">Women</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//==Page Header End==//-->
        <!--//==Shopping Cart Page Start==//-->
        <section class="cart-page">
            <div class="container">
                <div class="row wv-pads15">
                    <div class="table-responsive table-content">
                        @if(count($cart))
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="product-thumbnail-th">Image</th>
                                    <th class="product-thumbnail-th">Product</th>
                                    <th class="product-name-th">Price</th>
                                    <th class="product-quantity-th">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach($cart as $item)
                                <tr>
                                    <td><a href=""><img src="{{ asset('image_link') }}" alt=""></a></td>
                                    <td class="cart-product-title"><a href="#">{{$item->name}}</a></td>
                                    <td class="cart-product-price"><span>{{ number_format($item->price)}} VNĐ</span></td>
                                    <td class="p-qty">
                          
                                        <input class="quantity_field" value="1" type="number" min="2" max="20" step="1" data-min="1"/>
                                    </td>
                                    <td class="cart-product-price"><span>{{ number_format($item->subtotal)}} VNĐ</span></td>
                                    <td class="delete-products"><a href="{{url("cart-remove?product_id=$item->id")}}"><i class="fa fa-times"></i></a></td>
                                </tr>
                  {{--               <tr>
                                    <td><a href="#"><img src="img/product/cart2.jpg" alt="cart"></a></td>
                                    <td class="cart-product-title"><a href="#">Lorem Women dress</a></td>
                                    <td class="cart-product-price"><span>$50.99</span></td>
                                    <td class="p-qty">
                                        <input class="quantity_field" value="1" type="number" min="2" max="20" step="1" data-min="1"/>
                                    </td>
                                    <td class="cart-product-price"><span>$50.99</span></td>
                                    <td class="delete-products"><a href="#"><i class="fa fa-times"></i></a></td>
                                </tr>
                                <tr>
                                    <td><a href="#"><img src="img/product/cart3.jpg" alt="cart"></a></td>
                                    <td class="cart-product-title"><a href="#">Lorem Women dress</a></td>
                                    <td class="cart-product-price"><span>$50.99</span></td>
                                    <td class="p-qty">
                                        <input class="quantity_field" value="1" type="number" min="2" max="20" step="1" data-min="1"/>
                                    </td>
                                    <td class="cart-product-price"><span>$50.99</span></td>
                                    <td class="delete-products"><a href="#"><i class="fa fa-times"></i></a></td>
                                </tr> --}}
                                 @endforeach
                    @else
                     <p>You have no items in the shopping cart</p>
                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="">
                        <div class="col-xs-12 col-sm-4 col-md-4 wv_shipping_outer">
                            <div class="wv_shipping">
                                <h2 class="marB15">calculate shipping</h2>
                                <form class="contact-form">
                                    <!--//==Contact Input Field==//-->
                                    <div class="col-md-12 form-group wv_form_field">
                                        <input class="wv_form_focus" type="text" placeholder="Country">
                                    </div>
                                    <div class="col-md-7 form-group wv_form_field">
                                        <input class="wv_form_focus" type="text" placeholder="State">
                                    </div>
                                    <div class="col-md-5 form-group wv_form_field1">
                                        <input class="wv_form_focus" type="text" placeholder="Postal Code">
                                    </div>
                                    <div class="col-md-12 wv_form_field">
                                        <button type="submit" class="wv_button responsive_button1 marT0">get a quote</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 wv_coupon">
                            <div class="wv_shipping responsive_coupon">
                                <h2 class="marB10">coupon code</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod temp or incididunt ut labore eot dolore magna aliqua.</p>
                                <form class="contact-form">
                                    <!--//==Contact Input Field==//-->
                                    <div class="col-md-12 form-group wv_form_field">
                                        <input class="wv_form_focus" type="text" placeholder="B589276A">
                                    </div>
                                    <div class="col-md-12 wv_form_field">
                                        <button type="submit" class="wv_button marT0">apply code</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 wv_subtotal">
                            <div class="wv_shipping">
                                <div class="wv_subtotaling">
                                    <div class="col-xs-6 col-md-6 wv_subtotal_left textL">
                                        <p>subtotal</p>
                                    </div>
                                    <div class="col-xs-6 col-md-6 wv_subtotal_right textR">
                                        <p>$450.00</p>
                                    </div>
                                </div>
                                <div class="wv_subtotaling">
                                    <div class="col-xs-6 col-md-6 wv_subtotal_left textL">
                                        <p>Free shipping</p>
                                    </div>
                                    <div class="col-xs-6 col-md-6 wv_subtotal_right textR">
                                        <p>$0.00</p>
                                    </div>
                                </div>
                                <div class="wv_totaling">
                                    <div class="col-xs-6 col-md-6 wv_total_left textL">
                                        <p>Total</p>
                                    </div>
                                    <div class="col-xs-6 col-md-6 wv_total_right textR">
                                        <p>$450.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-6 wv_checkout wv_form_field">
                                <button type="submit" class="wv_button wv_button_style1 marT0">checkout</button>
                            </div>
                            <div class="col-xs-6 col-md-6 wv_checkout wv_form_field1 responsive_field1">
                                <button type="submit" class="wv_button wv_button_style1 marT0">continue shopping</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--//==Shopping Cart Page End==//-->
        <!--//==partner Section Start==//-->
        <div class="partners">
            <div class="container">
                <div class="row pad-s15">
                    <div class="col-md-12">
                        <div class="row pad-s15">
                            <div class="wa-partner-carousel owl-carousel-style2 responsive_owl_button text-center">
                                <!--//======= Partner Items Start=======//-->	
                                <div class="partener-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="img/partner/1.png" alt="Thumbnail">						  
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="partener-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="img/partner/2.png" alt="Thumbnail">						  
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="partener-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="img/partner/3.png" alt="Thumbnail">						  
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="partener-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="img/partner/4.png" alt="Thumbnail">						  
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="partener-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="img/partner/1.png" alt="Thumbnail">						  
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="partener-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="img/partner/2.png" alt="Thumbnail">						  
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="partener-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="img/partner/3.png" alt="Thumbnail">						  
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="partener-item">
                                    <div class="col-md-12">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="img/partner/4.png" alt="Thumbnail">						  
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <!--//======= Partner Items End=======//-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--//==partner Section End==//-->
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
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
        <!-- jQuery plugins library-->
        <script type="text/javascript" src="js/hover-dropdown-menu.js"></script> 
        <script type="text/javascript" src="js/jquery.hover-dropdown-menu-addon.js"></script>	
        <script src="js/owl.carousel.js"></script>	
        <script type="text/javascript" src="js/jquery.countTo.js"></script> 
        <script type="text/javascript" src="js/jquery.appear.js"></script>  	
        <script src="js/jquery.mixitup.js"></script>	  
        <script src="js/jquery.fancybox.pack.js"></script>
        <script src="js/jquery.fancybox-media.js"></script> 
		<script type="text/javascript" src="js/switcher.js"></script> 
        <!-- Custom JS -->
        <script type="text/javascript" src="js/main.js"></script> 
    </body>
</html>