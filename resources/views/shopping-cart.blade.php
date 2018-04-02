@extends('layouts.app')
@section('content')
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
                     <tr id="cart_{{$item->id}}">
                        <td><a href="#"><img src="{{ $item->image_link}}" alt=""></a></td>
                        <td class="cart-product-title"><a href="#">{{$item->name}}</a></td>
                        <td class="cart-product-price"><span>{{ number_format($item->price)}} VNĐ</span></td>
                        <td class="p-qty">
                            <a class="increase-qty"  data-id="{{$item->rowId}}" "><button>+</button></a>
                            <li id="qty-{{$item->rowId}}"  style="width: 50px !important;margin-left:10px !important;margin-right:10px !important" class="quantity_field" value="{{$item->qty}}" type="text">
                             {{$item->qty}}
                         </li>
                         <a class="reduced-qty"  data-id="{{$item->rowId}}" "><button>-</button></a>
                     </td>
                     <td class="cart-product-price "><span id="price-{{$item->rowId}}">{{ number_format($item->subtotal)}} VNĐ</span></td>
                     <td class="delete-products">
                        <a href="javascript:;" onclick="removeCart({{$item->id}})" class="btn_remove" data-rel="tooltip" title="Delete">
                            <i class="fa fa-times"></i>
                        </a>
                    </td>

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
                                        <p id="subtotal">{{Cart::subtotal()}}</p>
                                    </div>
                                </div>
                                <div class="wv_subtotaling">
                                    <div class="col-xs-6 col-md-6 wv_subtotal_left textL">
                                        <p>Free shipping</p>
                                    </div>
                                    <div class="col-xs-6 col-md-6 wv_subtotal_right textR">
                                        <p>0.00</p>
                                    </div>
                                </div>
                                <div class="wv_totaling">
                                    <div class="col-xs-6 col-md-6 wv_total_left textL">
                                        <p>Total</p>
                                    </div>
                                    <div class="col-xs-6 col-md-6 wv_total_right textR">
                                        <p id="total">{{Cart::subtotal()}} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-6 wv_checkout wv_form_field">
                                <button type="submit" class="wv_button wv_button_style1 marT0"><a href="{{route('get.checkout')}}">checkout</a></button>
                            </div>
                            <div class="col-xs-6 col-md-6 wv_checkout wv_form_field1 responsive_field1">
                                <button class="wv_button wv_button_style1 marT0"><a href="{{route('home')}}">continue shopping</a></button>
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
        @endsection 
        @section('script')
        <script>
         $(".increase-qty").click(function() {
          //  ret = DetailsView.GetProject($(this).attr("#data-id"), OnComplete, OnTimeOut, OnError);
          var rowId = $(this).attr("data-id");

          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
          $.ajax({
            url: '{{route( 'add.qty')}}',
            type: 'POST',
            dataType: 'JSON',
            data: {rowId: rowId},
            success:function(res){
                var data = res.data;
                var price = res.price;
                $('#qty-' + rowId).html(data.qty);
                $('#price-' + rowId).html(price);
                toastr.success('Đã thêm 1 sản phẩm !');
            }
        });
      });
         $(".reduced-qty").click(function() {
          //  ret = DetailsView.GetProject($(this).attr("#data-id"), OnComplete, OnTimeOut, OnError);
          var rowId = $(this).attr("data-id");

          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
          $.ajax({
            url: '{{route( 'minus.qty')}}',
            type: 'POST',
            dataType: 'JSON',
            data: {rowId: rowId},
            success:function(res){
                var data = res.data;
                var price = res.price;
                console.log(data.qty);
                if(data.qty > 1){
                    $('#qty-' + rowId).html(data.qty);
                    $('#price-' + rowId).html(price);
                    toastr.warning('Đã giảm 1 sản phẩm !');
                }else if(data.qty==1){
                    console.log(data.subtotal);
                     $('#qty-' + rowId).html(data.qty);
                      $('#price-' + rowId).html(price);
                   toastr.warning('Tối thiểu 1 sản phẩm !');
               }
           }
       });
      });

  </script>
  <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    function removeCart(id){
        $('.btn_remove').click(function(){
            swal({
                title: "Bạn có chắc xóa sản phẩm này khỏi giỏ hàng?",
                text: "Bạn sẽ không thể khôi phục lại bản ghi này !",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                cancelButtonText: "Không",
                confirmButtonText: "Có",
                closeOnConfirm: true,
            },
            function(isConfirm){
                if (isConfirm) {
                    $.ajax({
                        url: '{{ route('remove.cart') }}',
                        type: 'POST',
                        data: {id: id},

                        success : function(res) {
                            if (res.status) {
                              var data = res.data;
                              console.log(data);
                              var subtotal = res.subtotal;
                              $('#cart_'+id).remove();
                              $('#subtotal').html(subtotal);
                              $('#total').html(subtotal);

                              toastr.success('Xoá thành công!', '',{timeOut: 1000});
                          }
                      },
                      error: function(xhr, ajaxOptions, thrownError,) {
                        toastr.error('Xoá thất bại!', '',{timeOut: 1000});
                    }
                });

                }else{
                    toastr.error('Thao tác bị huỷ!', '',{timeOut: 1000});
                }
            });

        });
    }

</script>
@endsection