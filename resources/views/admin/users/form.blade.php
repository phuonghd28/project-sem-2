@extends('admin.master')
@section('content')
    <h1>Create User</h1>
    <div class="container">
        <form action="" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Firstname:</label>
                        <input type="text" class="form-control" placeholder="Firstname" name="firstname">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Lastname:</label>
                        <input type="text" class="form-control" placeholder="Lastname" name="lastname">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Address:</label>
                        <input type="text" class="form-control" placeholder="Address" name="address">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" class="form-control" placeholder="Email" name="email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Phone:</label>
                        <input type="text" class="form-control" placeholder="Phone" name="phone">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Username:</label>
                        <input type="text" class="form-control" placeholder="Username" name="username">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label> Password:</label>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Re-password:</label>
                        <input type="password" class="form-control" placeholder="Re-password" name="re-password">
                    </div>

                </div>
            </div>
            <div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

