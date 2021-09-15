@extends('admin.master')
@section('title')
    List Product
@endsection
@section('content')
    <div class="row main-card mb-3 card">
        <div class="container">
            <div class="card-body"><h2 class="">List Product</h2>
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left mb-2">
                            <a class="btn btn-success" href="{{route('createProduct')}}">Add +</a>
                        </div>
                    </div>
                </div>
                @if ($message = \Illuminate\Support\Facades\Session::get('success'))
                    <div class="alert alert-success">
                        <p class="m-0">{{ $message }}</p>
                    </div>
                @endif
                <table class="mb-0 table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 50px">Id</th>
                        <th>Name</th>
                        <th >Image</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th style="width: 110px;">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $data)
                        <tr>
                            <td class="text-center">{{$data->id}}</td>
                            <td>{{$data->name}}</td>
                            <td><img src="{{explode(',', $data->image)[0]}}" height="75"
                                     width="75" alt=""/></td>
                            <td>{!! html_entity_decode($data->description) !!}</td>
                            <td>{{$data->category_id}}</td>
                            <td>{{$data->price}}</td>
                            <td>
                                <a class="btn btn-primary mr-2" href="{{route('editProduct', $data->id)}}"><i
                                        class="fas fa-edit"></i></a>
                                <a type="submit" href="{{route('deleteProduct', $data->id)}}"
                                   class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xoá ?')">
                                    <i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
