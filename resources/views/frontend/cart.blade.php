<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from preview.hasthemes.com/oswan/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jul 2020 05:08:26 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ecommerce</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('asset/frontend/assets/img/favicon.png')}}">

    <!-- all css here -->

    <link rel="stylesheet" href="{{asset('asset/frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/frontend/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('asset/frontend/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/frontend/assets/css/chosen.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/frontend/assets/css/icofont.css')}}">
    <link rel="stylesheet" href="{{asset('asset/frontend/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('asset/frontend/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/frontend/assets/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/frontend/assets/css/bundle.css')}}">

    <link href="{{asset('css/toaster.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('asset/frontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('asset/frontend/assets/css/responsive.css')}}">
    <script src="{{asset('asset/frontend/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
<body>
<div class="wrapper">
    @include('frontend.layout.header')
    <div class="breadcrumb-area pt-255 pb-170" style="background-image: url({{asset('asset/frontend/assets/img/banner/banner-4.jpg')}})">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <h2>Cart page</h2>
                <ul>
                    <li>
                        <a href="#">home</a>
                    </li>
                    <li>Cart page</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="product-cart-area pt-120 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                            <tr>
                                <th class="product-name">products</th>
                                <th class="product-price">products name</th>
                                <th class="product-name">price</th>
                                <th class="product-price">quantity</th>
                                <th class="product-quantity">total</th>
                                <th class="product-subtotal">delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($carts as $cart)
                                <tr>
                                <td class="product-thumbnail">
                                    <a href="#"><img  width="82" src="{{asset('uploads/product/'.($cart->products)->photo)}}" alt=""></a>
                                </td>
                                <td class="product-name">
                                    <a href="#">{{($cart->products)->productName}}</a>
                                </td>
                                <td class="product-price"><span class="amount">{{($cart->products)->cc}}</span></td>
                                <td class="product-quantity">
                                    <div class="quantity-range">
                                        <input class="input-text qty text" type="number" step="1" min="0" value="{{$cart->quantity}}" title="Qty" size="4">
                                    </div>
                                </td>
                                <td class="product-subtotal">{{(($cart->products)->cc)*($cart->quantity)}}</td>
                                <td class="product-cart-icon product-subtotal"><a href="#"><i class="ti-trash"></i></a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="cart-shiping-update">
                        <div class="cart-shipping">
                            <a class="btn-style cr-btn" href="#">
                                <span>continue shopping</span>
                            </a>
                        </div>
                        <div class="update-checkout-cart">
                            <div class="update-cart">
                                <button class="btn-style cr-btn"><span>update</span></button>
                            </div>
                            <div class="update-cart">
                                <a class="btn-style cr-btn" href="#">
                                    <span>checkout</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 col-sm-6">
                    <div class="discount-code">
                        <h4>enter your discount code</h4>
                        <div class="coupon">
                            <input type="text">
                            <input class="cart-submit" type="submit" value="enter">
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6">
                    <div class="shop-total">
                        <h3>cart total</h3>
                        <ul>
                            <li>
                                sub total
                                <span>$909.00</span>
                            </li>
                            <li>
                                tax
                                <span>$9.00</span>
                            </li>
                            <li class="order-total">
                                shipping
                                <span>0</span>
                            </li>
                            <li>
                                order total
                                <span>$918.00</span>
                            </li>
                        </ul>
                    </div>
                    <div class="cart-btn text-center mb-15">
                        <a href="#">payment</a>
                    </div>
                    <div class="continue-shopping-btn text-center">
                        <a href="#">continue shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.layout.news')

    @include('frontend.layout.footer')
</div>














<!-- all js here -->
<script src="{{asset('asset/frontend/assets/js/vendor/jquery-1.12.0.min.js')}}"></script>
<script src="{{asset('asset/frontend/assets/js/popper.js')}}"></script>
<script src="{{asset('asset/frontend/assets/js/bootstrap.min.js')}}"></script>

<script src="{{asset('js/toaster.js')}}"></script>


<script src="{{asset('asset/frontend/assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('asset/frontend/assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('asset/frontend/assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('asset/frontend/assets/js/waypoints.min.js')}}"></script>
<script src="{{asset('asset/frontend/assets/js/ajax-mail.js')}}"></script>
<script src="{{asset('asset/frontend/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('asset/frontend/assets/js/plugins.js')}}"></script>
<script src="{{asset('asset/frontend/assets/js/main.js')}}"></script>

<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
</script>


<!-- Mirrored from preview.hasthemes.com/oswan/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jul 2020 05:19:52 GMT -->
</html>
