@extends('admin.master')
@section('title')
    Feed Back
@endsection
@section('content')
    <div class="row main-card mb-3 card">
        <div class="container">
            <div class="card-body"><h2 class="">List Feed Back</h2>
                @if ($message = \Illuminate\Support\Facades\Session::get('success'))
                    <div class="alert alert-success">
                        <p class="m-0">{{ $message }}</p>
                    </div>
                @endif
                <table class="mb-0 table table-bordered">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th style="width: 110px;">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($fback as $data)
                        <tr>
                            <td class="text-center">{{$data->id}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->subject}}</td>
                            <td>{{$data->message}}</td>
                            <td>
                                <a type="submit" href="{{route('deleteFBack', $data->id)}}"
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
