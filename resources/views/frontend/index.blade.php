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
            <!-- header start -->
            @include('frontend.layout.header')

            @include('frontend.layout.slider')

            @include('frontend.layout.overview')

            @include('frontend.layout.banner')

            @include('frontend.layout.product');


            <div class="latest-product-area pt-205 pb-145 bg-img" style="background-image: url({{asset('asset/frontend/assets/img/banner/banner-4.jpg')}})">
                <div class="container-fluid">
                    <div class="latest-product-slider owl-carousel">
                        <div class="single-latest-product slider-animated-2">
                            <div class="row">
                                <div class="col-lg-7 col-md-12 col-12">
                                    <div class="latest-product-img">
                                        <img class="animated" src="{{asset('asset/frontend/assets/img/banner/banner-2.png')}}" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 col-12">
                                    <div class="latest-product-content">
                                        <h2 class="animated">LATEST OFFER <br>FOR POPULAR BIKES</h2>
                                        <p class="animated"><span>OSWAN</span> the most latgest bike store in the wold can serve you latest            qulity of motorcycle also you can sell here your motorcycle it quo minus iduod maxie placeat facere possimus, omnis voluptas assumenda est, omnis dolor llendus. Temporibus autem quibusdam </p>
                                        <div class="latest-price">
                                            <h3 class="animated">NOW AT <span>$1250</span></h3>
                                            <span class="animated">35% DISCOUNT</span>
                                        </div>
                                        <div class="latext-btn">
                                            <a class="animated" href="#">SELECT A BIKE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-latest-product slider-animated-2">
                            <div class="row">
                                <div class="col-lg-7 col-col-12 col-12">
                                    <div class="latest-product-img">
                                        <img class="animated" src="{{asset('asset/frontend/assets/img/banner/banner-3.png')}}" alt="image">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-col-12 col-12">
                                    <div class="latest-product-content">
                                        <h2 class="animated">LATEST OFFER <br>FOR POPULAR BIKES</h2>
                                        <p class="animated"><span>OSWAN</span> the most latgest bike store in the wold can serve you latest            qulity of motorcycle also you can sell here your motorcycle it quo minus iduod maxie placeat facere possimus, omnis voluptas assumenda est, omnis dolor llendus. Temporibus autem quibusdam </p>
                                        <div class="latest-price">
                                            <h3 class="animated">NOW AT <span>$1250</span></h3>
                                            <span class="animated">35% DISCOUNT</span>
                                        </div>
                                        <div class="latext-btn">
                                            <a class="animated" href="#">SELECT A BIKE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accessories-area pt-152 pb-130">
                <div class="container-fluid">
                    <div class="section-title section-fluid text-center mb-60">
                        <h2>ACCESSORIES</h2>
                        <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest            qulity of motorcycle also you can sell here your motorcycle</p>
                    </div>
                    <div class="accessories-wrapper">
                        <div class="product-accessories-active owl-carousel">
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="{{asset('asset/frontend/assets/img/product/product-7.jpg')}}" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus-2" title="Add To Cart" href="#">
                                            <i class=" ti-shopping-cart"></i>
                                        </a>
                                        <a class="action-cart-2" title="Wishlist" href="#">
                                            <i class=" ti-heart"></i>
                                        </a>
                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class=" ti-zoom-in"></i>
                                        </a>
                                    </div>
                                    <div class="product-content-wrapper-2">
                                        <div class="product-title-price-2 text-center">
                                            <span>Price: $120</span>
                                            <h4><a href="product-details.html">Aerion Carbon Helmet</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{asset('asset/frontend/assets/img/product/product-8.jpg')}}" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus-2" title="Add To Cart" href="#">
                                            <i class=" ti-shopping-cart"></i>
                                        </a>
                                        <a class="action-cart-2" title="Wishlist" href="#">
                                            <i class=" ti-heart"></i>
                                        </a>
                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class=" ti-zoom-in"></i>
                                        </a>
                                    </div>
                                    <div class="product-content-wrapper-2">
                                        <div class="product-title-price-2 text-center">
                                            <span>Price: $180</span>
                                            <h4><a href="product-details.html">Reckles Jacket</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{asset('asset/frontend/assets/img/product/product-9.jpg')}}" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus-2" title="Add To Cart" href="#">
                                            <i class=" ti-shopping-cart"></i>
                                        </a>
                                        <a class="action-cart-2" title="Wishlist" href="#">
                                            <i class=" ti-heart"></i>
                                        </a>
                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class=" ti-zoom-in"></i>
                                        </a>
                                    </div>
                                    <div class="product-content-wrapper-2">
                                        <div class="product-title-price-2 text-center">
                                            <span>Price: $25</span>
                                            <h4><a href="product-details.html">Softy Original Glove</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{asset('asset/frontend/assets/img/product/product-10.jpg')}}" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus-2" title="Add To Cart" href="#">
                                            <i class=" ti-shopping-cart"></i>
                                        </a>
                                        <a class="action-cart-2" title="Wishlist" href="#">
                                            <i class=" ti-heart"></i>
                                        </a>
                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class=" ti-zoom-in"></i>
                                        </a>
                                    </div>
                                    <div class="product-content-wrapper-2">
                                        <div class="product-title-price-2 text-center">
                                            <span>Price: $140</span>
                                            <h4><a href="product-details.html">Flicky Traco Boot</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{asset('asset/frontend/assets/img/product/product-11.jpg')}}" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus-2" title="Add To Cart" href="#">
                                            <i class=" ti-shopping-cart"></i>
                                        </a>
                                        <a class="action-cart-2" title="Wishlist" href="#">
                                            <i class=" ti-heart"></i>
                                        </a>
                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class=" ti-zoom-in"></i>
                                        </a>
                                    </div>
                                    <div class="product-content-wrapper-2">
                                        <div class="product-title-price-2 text-center">
                                            <span>Price: $150</span>
                                            <h4><a href="product-details.html">Flicky Traco Boot</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{asset('asset/frontend/assets/img/product/product-7.jpg')}}" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus-2" title="Add To Cart" href="#">
                                            <i class=" ti-shopping-cart"></i>
                                        </a>
                                        <a class="action-cart-2" title="Wishlist" href="#">
                                            <i class=" ti-heart"></i>
                                        </a>
                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class=" ti-zoom-in"></i>
                                        </a>
                                    </div>
                                    <div class="product-content-wrapper-2">
                                        <div class="product-title-price-2 text-center">
                                            <span>Price: $150</span>
                                            <h4><a href="product-details.html">Aerion Carbon Helmet</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{asset('asset/frontend/assets/img/product/product-8.jpg')}}" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus-2" title="Add To Cart" href="#">
                                            <i class=" ti-shopping-cart"></i>
                                        </a>
                                        <a class="action-cart-2" title="Wishlist" href="#">
                                            <i class=" ti-heart"></i>
                                        </a>
                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class=" ti-zoom-in"></i>
                                        </a>
                                    </div>
                                    <div class="product-content-wrapper-2">
                                        <div class="product-title-price-2 text-center">
                                            <span>Price: $160</span>
                                            <h4><a href="product-details.html">Reckles Jacket</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img src="{{asset('asset/frontend/assets/img/product/product-9.jpg')}}" alt="">
                                    </a>
                                    <div class="product-action">
                                        <a class="action-plus-2" title="Add To Cart" href="#">
                                            <i class=" ti-shopping-cart"></i>
                                        </a>
                                        <a class="action-cart-2" title="Wishlist" href="#">
                                            <i class=" ti-heart"></i>
                                        </a>
                                        <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                            <i class=" ti-zoom-in"></i>
                                        </a>
                                    </div>
                                    <div class="product-content-wrapper-2">
                                        <div class="product-title-price-2 text-center">
                                            <span>Price: $120</span>
                                            <h4><a href="product-details.html">Aerion Carbon Helmet</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('frontend.layout.testimonial')

            @include('frontend.layout.blog')

            @include('frontend.layout.news')

            @include('frontend.layout.footer')


            <!-- modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="icofont icofont-close" aria-hidden="true"></span>
                </button>
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="qwick-view-left">
                                <div class="quick-view-learg-img">
                                    <div class="quick-view-tab-content tab-content">
                                        <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                            <img src="{{asset('asset/frontend/assets/img/quick-view/l1.jpg')}}" alt="">
                                        </div>
                                        <div class="tab-pane fade" id="modal2" role="tabpanel">
                                            <img src="{{asset('asset/frontend/assets/img/quick-view/l2.jpg')}}" alt="">
                                        </div>
                                        <div class="tab-pane fade" id="modal3" role="tabpanel">
                                            <img src="{{asset('asset/frontend/assets/img/quick-view/l3.jpg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="quick-view-list nav" role="tablist">
                                    <a class="active" href="#modal1" data-toggle="tab" role="tab">
                                        <img src="{{asset('asset/frontend/assets/img/quick-view/s1.jpg')}}" alt="">
                                    </a>
                                    <a href="#modal2" data-toggle="tab" role="tab">
                                        <img src="{{asset('asset/frontend/assets/img/quick-view/s2.jpg')}}" alt="">
                                    </a>
                                    <a href="#modal3" data-toggle="tab" role="tab">
                                        <img src="{{asset('asset/frontend/assets/img/quick-view/s3.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="qwick-view-right">
                                <div class="qwick-view-content">
                                    <h3>Aerion Carbon Helmet</h3>
                                    <div class="price">
                                        <span class="new">$90.00</span>
                                        <span class="old">$120.00  </span>
                                    </div>
                                    <div class="rating-number">
                                        <div class="quick-view-rating">
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                                    <div class="quick-view-select">
                                        <div class="select-option-part">
                                            <label>Size*</label>
                                            <select class="select">
                                                <option value="">- Please Select -</option>
                                                <option value="">900</option>
                                                <option value="">700</option>
                                            </select>
                                        </div>
                                        <div class="select-option-part">
                                            <label>Color*</label>
                                            <select class="select">
                                                <option value="">- Please Select -</option>
                                                <option value="">orange</option>
                                                <option value="">pink</option>
                                                <option value="">yellow</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="quickview-plus-minus">
                                        <div class="cart-plus-minus">
											<input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
										</div>
                                        <div class="quickview-btn-cart">
                                            <a class="btn-style" href="#">add to cart</a>
                                        </div>
                                        <div class="quickview-btn-wishlist">
                                            <a class="btn-hover" href="#"><i class="icofont icofont-heart-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

    </body>



<!-- Mirrored from preview.hasthemes.com/oswan/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jul 2020 05:13:09 GMT -->
</html>
