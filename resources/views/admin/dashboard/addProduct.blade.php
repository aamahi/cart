@extends('admin.admin')

@section('admin.content')
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row">
                <div class="col-lg-12">
                    <section class="card">
                        <header class="card-header text-center font-weight-bold text-info">
                            Add Product
                        </header>
                        <div class="card-body">
                            @if($errors->any())
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{$error}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endforeach
                            @endif

                            <form class="form-horizontal tasi-form" method="post" action="{{route('addProduct')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-sm-2 control-label">Selete Category</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="categoryId">
                                            <option disabled selected> Selete Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}"> {{$category->categoryName}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-sm-2 control-label">Product Name</label>
                                    <div class="col-sm-10">
                                        <input name="productName" value="{{old('productName')}}" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-sm-2 control-label">Product Subtitle</label>
                                    <div class="col-sm-10">
                                        <input name="subtitle" value="{{old('subtitle')}}" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-sm-2 control-label">Product Model</label>
                                    <div class="col-sm-10">
                                        <input name="model" value="{{old('model')}}" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-sm-2 control-label">Fuel Type</label>
                                    <div class="col-sm-10">
                                        <input name="fuel" value="{{old('fuel')}}" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-sm-2 control-label">CC</label>
                                    <div class="col-sm-10">
                                        <input name="cc" value="{{old('cc')}}" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-sm-2 control-label">Description</label>
                                    <div class="col-sm-10">
                                        <input name="description" value="{{old('description')}}" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-sm-2 control-label">Photo</label>
                                    <div class="col-sm-10">
                                        <input name="photo"  type="file" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-sm-2 control-label">Multiple Photo</label>
                                    <div class="col-sm-10">
                                        <input name="multiple_image[]"  type="file"  class="form-control" multiple>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-info btn-md">Add Product</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>
@endsection
