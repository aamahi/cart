<div class="banner-area pt-135 pb-120">
    <div class="container">
        <div class="row">
            @foreach($categories as $category)
                <div class="col-md-4 col-lg-4">
                <div class="banner-wrapper mb-30">
                    <a href="#"><img src="{{asset('uploads/category/'.$category->categoryPhoto)}}" alt="image"></a>
                    <div class="banner-content">
                        <h2>{{$category->categoryName}}</h2>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
