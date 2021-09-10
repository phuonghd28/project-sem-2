@extends('admin.master')
@section('content')
    <div class="row main-card m-3 card">
        <div class="container p-5">
            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong> {{ implode('', $errors->all(':message')) }}</strong>
                </div>
            @endif
            <h2 class="mb-3">
                @if($data)
                    Update User
                @else
                    Create User
                @endif
            </h2>
            <form action="" method="post" id="form-user">
                @if($data)
                    @method('put')
                @endif
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Firstname:</label>

                            <input value="{{$data ? $data->first_name : ''}}" type="text" class="form-control"
                                   placeholder="Firstname" name="first_name" >
                            @error('first_name')
                            <div class="text-danger"> * {{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Lastname:</label>
                            <input value="{{$data ? $data->last_name : ''}}" type="text" class="form-control"
                                   placeholder="Lastname" name="last_name">
                            @error('last_name')
                            <div class="text-danger"> * {{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Address:</label>
                            <input value="{{$data ? $data->address : ''}}" type="text" class="form-control"
                                   placeholder="Address" name="address">
                            @error('address')
                            <div class="text-danger"> * {{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email:</label>
                            <input value="{{$data ? $data->email : ''}}" type="text" class="form-control"
                                   placeholder="Email" name="email">
                            @error('email')
                            <div class="text-danger"> * {{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone:</label>

                            <input value="{{$data ? $data->phone : ''}}" type="text" class="form-control"
                                   placeholder="Phone" name="phone">
                            @error('phone')
                            <div class="text-danger"> * {{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Username:</label>

                            <input value="{{$data ? $data->Username : ''}}" type="text" class="form-control"
                                   placeholder="Username" name="username">
                            @error('username')
                            <div class="text-danger"> * {{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Role:</label>
                            <select name="role" class="custom-select">
                                <option hidden selected disabled>Role</option>
                                <option value="{{\App\Enums\Role::ADMIN}}" {{$data && $data->role === 2 ? 'selected' : ''}}>Admin</option>
                                <option value="{{\App\Enums\Role::USER}}" {{$data && $data->role === 1 ? 'selected' : ''}}>User</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Password:</label>

                            <input value="{{$data ? $data->Password : ''}}" type="password" class="form-control"
                                   placeholder="Password" name="password">
                            @error('password')
                            <div class="text-danger"> * {{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Re-password:</label>

                            <input value="{{$data ? $data->password : ''}}" type="password" class="form-control"
                                   placeholder="Re-password" name="password_confirmation" >
                            @error('password_confirmation')
                            <div class="text-danger"> * {{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end mt-3">
                    <div class="col-1">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('custom_js')

@endsection
