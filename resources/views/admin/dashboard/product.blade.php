@extends('admin.admin')

@section('admin.content')
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row">
                <div class="col-sm-12">
                    <section class="card">
                        <header class="card-header">
                            All Product
                        </header>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Photo</th>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Subtitle</th>
                                <th>Model</th>
                                <th>Fuel</th>
                                <th>CC</th>
                                <th>Details</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                <td><img width="95" src="{{asset('uploads/product/'.$product->photo)}}"></td>
                                <td>{{$product->id}}</td>
                                <td>{{$product->productName}}</td>
                                <td>{{$product->subtitle}}</td>
                                <td>{{$product->model}}</td>
                                <td>{{$product->fuel}}</td>
                                <td>{{$product->cc}}</td>
                                <td>{{$product->description}}</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </section>
                </div>
            </div>
        </section>
    </section>
@endsection
