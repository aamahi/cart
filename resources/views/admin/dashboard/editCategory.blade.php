@extends('admin.admin')

@section('admin.content')
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row">
                <div class="col-lg-8 offset-md-2">
                    <section class="card">
                        <header class="card-header">
                            Edit Category
                        </header>

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

                        <div class="card-body">
                            <form enctype="multipart/form-data" method="post" action="{{route('editCategory',$category->id)}}">
                                @csrf
                                <div class="form-group">
                                    <label for="categoryName">Category Name</label>
                                    <input type="text" class="form-control" id="categoryName" name="categoryName"  value="{{$category->categoryName}}" placeholder="Category Name">
                                </div>
                                <div class="form-group">
                                    <label for="slug">Slug Name</label>
                                    <input type="text" class="form-control" id="slug" name="slug"  value="{{$category->slug}}" placeholder="slug Name">
                                </div>
                                <div class="form-group">
                                    <label for="categoryPhoto">Old Category Photo</label>
                                    <img src="{{asset('uploads/category/'.$category->categoryPhoto)}}" width="200">
                                    <input type="file" class="form-control" id="categoryPhoto" name="categoryPhoto" >
                                </div>
                                <button type="submit" class="btn btn-primary">Upload Category</button>
                            </form>

                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>
@endsection
