    @extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')

@include("admin.sidebar")
<div class="page-wrapper">
    <div class="container-fluid">


    <h1>Category List</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-0">Product List</h5>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Keywords</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
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
                    <td>{{$rs->title}}</td>
                    <td>{{$rs->keywords}}</td>
                    <td>{{$rs->description}}</td>
                    <td>{{$rs->iamge}}</td>
                    <td>{{$rs->status}}</td>
                    <td><a href="/admin/category/edit/{{$rs->id}}"class="btn btn-success btn-sm">Edit</a></td>
                    <td><a href="/admin/category/destroy/{{$rs->id}}"class="btn btn-danger btn-sm">Delete</a></td>
                    <td><a href="/admin/category/show/{{$rs->id}}"class="btn btn-info btn-sm">Show</a></td>

                </tr>
                @endforeach
                </tbody>
            </table>
        </div>









</div>
</div>
@endsection
