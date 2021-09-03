
@extends('admin.master')
@section('content')
    <div class="row main-card mb-3 card">
        <div class="container">
            <div class="card-body"><h5 class="card-title">Table bordered</h5>
                <table class="mb-0 table table-bordered">

                    <tr>
                        <th>Id</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Actions</th>
                    </tr>


                    @foreach($list as $listUser)
                        <tr>
                        <td>{{$listUser->id}}</td>
                        <td>{{$listUser->email}}</td>
                        <td>{{$listUser->username}}</td>
                        <td><a href="/users/edit/{{$listUser->id}}"><button>update</button></a>
                            <a onclick="return confirm('bạn chắc chắn muốn xóa ?')" href="/users/delete/{{$listUser->id}}"><button>delete</button></a></td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
@endsection

