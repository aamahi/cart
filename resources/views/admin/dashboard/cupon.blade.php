@extends('admin.admin')

@section('admin.content')
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row">
                <div class="col-sm-7">
                    <section class="card">
                        <header class="card-header">
                            Cupon
                        </header>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Title </th>
                                <th>Discount Persantage</th>
                                <th>Expaire Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cupons as $cupon)
                                <tr>
                                    <td>{{$cupon->title}}</td>
                                    <td>{{$cupon->discount}} %</td>
                                    <td>{{$cupon->expaire}}</td>
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
                <div class="col-lg-5">
                    <section class="card">
                        <header class="card-header">
                            Add Cupon
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
                            <form enctype="multipart/form-data" method="post" action="{{route('cupon')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Category Title</label>
                                    <input type="text" class="form-control" id="title" name="title"  value="{{old('title')}}" placeholder="Title ">
                                </div>
                                <div class="form-group">
                                    <label for="discount">Discount Persentage (%)</label>
                                    <input type="number" class="form-control" id="discount" name="discount"  value="{{old('discount')}}" placeholder="Discount Persantage">
                                </div>
                                <div class="form-group">
                                    <label for="expaire">Expaire Date</label>
                                    <input type="date" class="form-control"  min="{{\Carbon\Carbon::now()->format('Y-m-d')}}" id="expaire" name="expaire" >
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
