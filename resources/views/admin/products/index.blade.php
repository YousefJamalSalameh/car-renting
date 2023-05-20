@extends('layouts.adminbase')

@section('title', 'Products List')

@section('content')

    @include("admin.sidebar")
    <div class="page-wrapper">
        <div class="container-fluid">
            <h1>Product List</h1>
            <h3><a href="{{route('admin.products.create')}}"class="badge badge-pill badge-secondary" >Add New Products</a></h3>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title m-b-0">Product List</h5>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Category Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Keywords</th>
                        <th scope="col">detail</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Show</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rs)
                        <tr>
                            <th scope="row">{{$rs->id}}</th>
                            <th scope="row">{{$rs->CategoryId}}</th>
                            <td>{{$rs->title}}</td>
                            <td>{{$rs->keywords}}</td>
                             <td>{{$rs->detail}}</td>
                            <td>{{$rs->price}}</td>
                            <td>{{$rs->status}}</td>
                            <td><a href="{{route('admin.category.edit',['id'=>$rs])}}"class="btn btn-success btn-sm">Edit</a></td>
                            <td><a href="{{route('admin.category.destroy',['id'=>$rs])}}"class="btn btn-danger btn-sm">Delete</a></td>
                            <td><a href="{{route('admin.category.show',['id'=>$rs])}}"class="btn btn-info btn-sm">Show</a></td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>









        </div>
    </div>
@endsection
