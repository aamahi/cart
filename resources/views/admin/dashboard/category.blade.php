@extends('admin.admin')

@section('admin.content')
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row">
                <div class="col-sm-7">
                    <section class="card">
                        <header class="card-header">
                            All Category
                        </header>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Photo</th>
                                <th>Category Name</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                <td>{{$category->id}}</td>
                                <td><img width="95" src="{{asset('uploads/category/'.$category->categoryPhoto)}}"></td>
                                <td>{{$category->categoryName}}</td>
                                <td>{{$category->slug}}</td>
                                <td>
                                    <a href="{{route('editCategory',$category->id)}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                    <a href="{{route('deleteCategory',$category->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </section>
                </div>
                <div class="col-lg-5">
                    <section class="card">
                        <header class="card-header">
                            Add Category
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
                            <form enctype="multipart/form-data" method="post" action="{{route('category')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="categoryName">Category Name</label>
                                    <input type="text" class="form-control" id="categoryName" name="categoryName"  value="{{old('categoryName')}}" placeholder="Category Name">
                                </div>
                                <div class="form-group">
                                    <label for="slug">Slug Name</label>
                                    <input type="text" class="form-control" id="slug" name="slug"  value="{{old('slug')}}" placeholder="slug Name">
                                </div>
                                <div class="form-group">
                                    <label for="categoryPhoto">Category Photo</label>
                                    <input type="file" class="form-control" id="categoryPhoto" name="categoryPhoto" >
                                </div>
                                <button type="submit" class="btn btn-primary">Add Category</button>
                            </form>

                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>
@endsection
