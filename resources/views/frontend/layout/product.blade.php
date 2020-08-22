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

                                    <form method="post" action="{{route('cart')}}">
                                        @csrf
{{--                                        <a class="action-plus-2" title="Add To Cart" type="submit"  href="">--}}
{{--                                            <i class=" ti-shopping-cart"></i>--}}
{{--                                        </a>--}}
                                        <input type="hidden" value="{{$product->id}}" name="product_id">
                                        <button  type="submit" class="action-plus-2 btn"> <i class=" ti-shopping-cart"></i></button>
                                    </form>

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


