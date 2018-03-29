@extends('layouts.app')
@section('content')
<!--//==Checkout Page Start==//-->
<section class="checkout-page">
    <div class="container">
        <div class="row pad-s15">
            <div class="col-md-12 login_link">
                <ul>
                    <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Returning customer? <span>Click here to login</span></a></li>
                    <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> Have a coupon? <span>Click here to enter your code</span></a></li>
                </ul>
            </div>
            <form class="contact-form" action="{{route('post.checkout')}}" method="POST">
                <div class="col-sm-6 col-md-6 wv_checkout_left marT30">
                    <h2>Billings details</h2>
                    <!--//==Contact Form Start==//-->

                    <div class="row">
                        <!--//==Contact Input Field==//-->
                        <div class="col-md-12 form-group">
                            <input class="wv_form_focus" type="text" name="name"  placeholder="First Name:">
                        </div>

                        <div class="col-md-12 form-group">
                            <input class="wv_form_focus" type="text" name="company"  placeholder="Company Name:">
                        </div>
                        <!--//==Contact Input Field==//-->
                        <div class="col-md-6 form-group">
                            <input class="wv_form_focus" type="email" name="email" id="exampleInputEmail" placeholder="Email:">
                        </div>
                        <div class="col-md-6 form-group">
                            <input class="wv_form_focus" type="number" name="phone" placeholder="Phone Number:">
                        </div>
                        <div class="col-md-12 form-group">
                            <select class="wv_form_focus">
                                @foreach($city as $city)
                                <option value="{{$city->region_id}}">{{$city->region_name}}</option>

                                @endforeach
                            </select>
                        </div>
                        <!--//==Contact Input Field==//-->
                        <div class="col-md-12 form-group">
                            <input class="wv_form_focus" type="text" name="address" placeholder="Street Address:">
                        </div>
                        <!--//==Contact Input Field==//-->
                        <div class="col-md-6 form-group">
                            <input class="wv_form_focus" type="text" name="city"  placeholder="Town/City:">
                        </div>
                        <div class="col-md-6 form-group">
                            <input class="wv_form_focus" type="text" name="postcode"  placeholder="Postcode/zip:">
                        </div>
                        <div class="wv_widget wv_checkout_check">
                            <input type="checkbox" class="grey" name="pink" id="grey">
                            <label for="grey">Create an account?</label>
                        </div>
                    </div>

                    <!--//==Contact Form End==//-->
                </div>

                    <div class="col-sm-6 col-md-6 marT30">
                        <div class="wv_checkout_right">
                            <h2>Order detail</h2>
                            <div class="wv_subtotaling wv_checkout_subtotal">
                                <div class="col-xs-6 col-md-6 wv_subtotal_left textL">
                                    <p>Products</p>
                                </div>
                                <div class="col-xs-6 col-md-6 wv_subtotal_right textR">
                                    <p>Total</p>
                                </div>
                            </div>
                            <div class="wv_subtotaling wv_checkout_subtotal1">
                                @foreach($data as $data)
                                <div class="col-xs-6 col-md-6 wv_subtotal_left textL">
                                    <p>{{$data->name}}</p>
                                </div>
                                <div class="col-xs-6 col-md-6 wv_subtotal_right textR">
                                    <p>{{number_format($data->price)}}</p>
                                </div>
                                <div class="clear"></div>
                                @endforeach
                            </div>
                            <div class="wv_subtotaling">
                                <div class="col-xs-6 col-md-6 wv_subtotal_left textL">
                                    <p>subtotal</p>
                                </div>
                                <div class="col-xs-6 col-md-6 wv_subtotal_right textR">
                                    <p>{{Cart::subtotal()}}</p>
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
                                    <p>{{Cart::subtotal()}}</p>
                                </div>
                            </div>
                            <div class="wv_payment">
                                <ul>
                                    <li>
                                        <label class="control control--radio">
                                            Direct bank transfer
                                            <input type="radio" name="radio" checked="checked"/>
                                            <span class="control__indicator"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="control control--radio">
                                            Check payment
                                            <input type="radio" name="radio"/>
                                            <span class="control__indicator"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="control control--radio">
                                            Cash on delivery
                                            <input type="radio" name="radio"/>
                                            <span class="control__indicator"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="control control--radio">
                                            Paypal
                                            <input type="radio" name="radio"/>
                                            <span class="control__indicator"></span>
                                        </label>
                                    </li>
                                </ul>
                                <div class="wv_payment_button">
                                     {{ csrf_field() }}
                                    <button type="submit" class="wv_button wv_button_style1 marT0">Place order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--//==Checkout Page End==//-->
    <!--//==Partner Section Start==//-->
    <div class="partners">
        <div class="container">
            <div class="row pad-s15">
                <div class="col-md-12">
                    <div class="row pad-s15">
                        <div class="wa-partner-carousel responsive_owl_button owl-carousel-style2 text-center">
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
    <!--//==Partner Section End==//-->
    @endsection