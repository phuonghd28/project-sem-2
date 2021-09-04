@extends('admin.master')
@section('content')
    <div class="row main-card mb-3 card">
        <div class="container">
            <div class="card-body"><h5 class="card-title">Table bordered</h5>
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left mb-2">
                            <a class="btn btn-success" href="{{route('createCategory')}}">Add +</a>
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
                        <th>Image</th>
                        <th style="width: 174px;">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td class="text-center">{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td><img src="{{ \Illuminate\Support\Facades\Storage::url($category->image) }}" height="75" width="75" alt="" /></td>
                            <td>
                                <a class="btn btn-primary mr-2" href="{{route('editCategory', $category->id)}}"><i class="fas fa-edit"></i></a>
                                <a type="submit" href="{{route('deleteCategory', $category->id)}}"
                                   class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xoá ?')">
                                    <i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
