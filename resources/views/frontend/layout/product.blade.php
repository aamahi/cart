<div class="product-area pb-190">
    <div class="container">
        <div class="section-title text-center mb-50">
            <h2>CHOOSE YOUR BIKE</h2>
            <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest            qulity of motorcycle also you can sell here your motorcycle</p>
        </div>
        <div class="product-tab-list text-center mb-80 nav product-menu-mrg" role="tablist">
            @foreach($categories as $category)
                <a class="active" href="#category{{$category->id}}" data-toggle="tab" >
                    <h4>{{$category->categoryName}} </h4>
                </a>
            @endforeach

        </div>
        <div class="tab-content jump">
            @foreach($categories as $category)
                <div class="tab-pane active" id="category{{$category->id}}">
                <div class="product-slider-active owl-carousel">
                    <div class="product-wrapper-bundle">
                        @foreach(\App\Model\Product::where('categoryId',$category->id)->get() as $product)
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="{{asset('uploads/product/'.$product->photo)}}" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>{{$product->productName}}</li>
                                        <li>MANUAL</li>
                                        <li>PETROL</li>
                                        <li>250 CC</li>
                                    </ul>
                                </div>
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
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="product-details.html">Gloriori GSX 250 R</a></h4>
                                        <span>6600 RPM</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$2549</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


<div class="product-area pb-190">
    <div class="container">
        <div class="section-title text-center mb-50">
            <h2>CHOOSE YOUR BIKE</h2>
            <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest            qulity of motorcycle also you can sell here your motorcycle</p>
        </div>
        <div class="product-tab-list text-center mb-80 nav product-menu-mrg" role="tablist">
            <a class="active" href="#home1" data-toggle="tab" >
                <h4>NEW BIKES </h4>
            </a>
            <a href="#home2" data-toggle="tab">
                <h4> USED BIKES </h4>
            </a>
        </div>
        <div class="tab-content jump">
            <div class="tab-pane active" id="home1">
                <div class="product-slider-active owl-carousel">
                    <div class="product-wrapper-bundle">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-1.jpg" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>2018</li>
                                        <li>MANUAL</li>
                                        <li>PETROL</li>
                                        <li>250 CC</li>
                                    </ul>
                                </div>
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
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="product-details.html">Gloriori GSX 250 R</a></h4>
                                        <span>6600 RPM</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$2549</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper-bundle">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-2.jpg" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>2018</li>
                                        <li>MANUAL</li>
                                        <li>PETROL</li>
                                        <li>200 CC</li>
                                    </ul>
                                </div>
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
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="product-details.html">Klager GSX 250 R</a></h4>
                                        <span>5500 RPM</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$2549</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-5.jpg" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>2018</li>
                                        <li>MANUAL</li>
                                        <li>PETROL</li>
                                        <li>150 CC</li>
                                    </ul>
                                </div>
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
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="product-details.html">Maxclon ZPE 54</a></h4>
                                        <span>3300 RPM</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$2549</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper-bundle">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-3.jpg" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>2018</li>
                                        <li>MANUAL</li>
                                        <li>PETROL</li>
                                        <li>150 CC</li>
                                    </ul>
                                </div>
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
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="product-details.html">Matrio Max</a></h4>
                                        <span>4600 RPM</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$2549</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-6.jpg" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>2018</li>
                                        <li>MANUAL</li>
                                        <li>PETROL</li>
                                        <li>250 CC</li>
                                    </ul>
                                </div>
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
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="product-details.html">Rigoniss Z 1000</a></h4>
                                        <span>8000 RPM</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$2549</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper-bundle">
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-2.jpg" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>2018</li>
                                        <li>MANUAL</li>
                                        <li>PETROL</li>
                                        <li>250 CC</li>
                                    </ul>
                                </div>
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
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="product-details.html">Klager GSX 250 R</a></h4>
                                        <span>5500 RPM</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$2549</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrapper">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-5.jpg" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>2018</li>
                                        <li>MANUAL</li>
                                        <li>PETROL</li>
                                        <li>350 CC</li>
                                    </ul>
                                </div>
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
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="product-details.html">Maxclon ZPE 54</a></h4>
                                        <span>3300 RPM</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$2549</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="home2">
                <div class="product-slider-active owl-carousel">
                    <div class="product-wrapper-bundle">
                        <div class="product-wrapper mb-30">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-6.jpg" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>2018</li>
                                        <li>MANUAL</li>
                                        <li>PETROL</li>
                                        <li>250 CC</li>
                                    </ul>
                                </div>
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
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="product-details.html">Gloriori GSX 250 R</a></h4>
                                        <span>6600 RPM</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$2549</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrapper mb-30">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-5.jpg" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>2018</li>
                                        <li>MANUAL</li>
                                        <li>PETROL</li>
                                        <li>480 CC</li>
                                    </ul>
                                </div>
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
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="product-details.html">Demonissi Gori</a></h4>
                                        <span>6700 RPM</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$2549</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper-bundle">
                        <div class="product-wrapper mb-30">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-4.jpg" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>2018</li>
                                        <li>MANUAL</li>
                                        <li>PETROL</li>
                                        <li>200 CC</li>
                                    </ul>
                                </div>
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
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="product-details.html">Klager GSX 250 R</a></h4>
                                        <span>5500 RPM</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$2549</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrapper mb-30">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-3.jpg" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>2018</li>
                                        <li>MANUAL</li>
                                        <li>PETROL</li>
                                        <li>150 CC</li>
                                    </ul>
                                </div>
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
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="product-details.html">Maxclon ZPE 54</a></h4>
                                        <span>3300 RPM</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$2549</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper-bundle">
                        <div class="product-wrapper mb-30">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-2.jpg" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>2018</li>
                                        <li>MANUAL</li>
                                        <li>PETROL</li>
                                        <li>150 CC</li>
                                    </ul>
                                </div>
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
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="product-details.html">Matrio Max</a></h4>
                                        <span>4600 RPM</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$2549</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrapper mb-30">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-1.jpg" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>2018</li>
                                        <li>MANUAL</li>
                                        <li>PETROL</li>
                                        <li>250 CC</li>
                                    </ul>
                                </div>
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
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="product-details.html">Rigoniss Z 1000</a></h4>
                                        <span>8000 RPM</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$2549</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrapper-bundle">
                        <div class="product-wrapper mb-30">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-2.jpg" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>2018</li>
                                        <li>MANUAL</li>
                                        <li>PETROL</li>
                                        <li>250 CC</li>
                                    </ul>
                                </div>
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
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="product-details.html">Klager GSX 250 R</a></h4>
                                        <span>5500 RPM</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$2549</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-wrapper mb-30">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-5.jpg" alt="">
                                </a>
                                <div class="product-item-dec">
                                    <ul>
                                        <li>2018</li>
                                        <li>MANUAL</li>
                                        <li>PETROL</li>
                                        <li>350 CC</li>
                                    </ul>
                                </div>
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
                                <div class="product-content-wrapper">
                                    <div class="product-title-spreed">
                                        <h4><a href="product-details.html">Maxclon ZPE 54</a></h4>
                                        <span>3300 RPM</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$2549</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
