@extends('admin.master')
@section('content')
    <div class="row main-card mb-3 card">
        <div class="container">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-4">
                        <h2>List Order</h2>
                    </div>
                    <div class="col-8">
                        <form id="filterForm">
                            <div class="row justify-content-end">
                                <div class="col-4 form-group input-group">
                                    <input type="text" class="form-control" name="search">
                                    <div class="input-group-append">
                                        <span class="btn input-group-text" id="search"><i
                                                class="fas fa-search"></i></span>
                                    </div>
                                </div>
                                <div class="col-4 form-group">
                                    <select name="isCheckout" class="custom-select" id="role">
                                        <option hidden selected disabled>All</option>
                                        <option
                                            value="0">
                                            Admin
                                        </option>
                                        <option
                                            value="1">
                                            User
                                        </option>
                                    </select>
                                </div>
                                <div class="col-4 form-group">
                                    <select name="sort" class="custom-select" id="sort">
                                        <option hidden selected disabled>Sort</option>
                                        <option value="1" {{$sort == 1 ? 'selected' : ''}}>Mới nhất</option>
                                        <option value="2" {{$sort == 2 ? 'selected' : ''}}>Cũ nhất</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <table class="mb-0 table table-bordered">

                    <tr>
                        <th>Id</th>
                        <th>Tên người nhận</th>
                        <th>Địa chỉ</th>
                        <th>Trạng thái</th>
                        <th>Actions</th>
                    </tr>


                    @foreach($orders as $order)
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->shipName}}</td>
                            <td>{{$order->shipAddress}}</td>
                            <td>{{$order->isCheckout ? 'Đã thanh toán' : 'Chờ thanh toán'}}</td>
                            <td>
                                <a onclick="return confirm('Bạn có chắc muốn xóa đơn hàng này ?')"
                                   href="{{route('deleteOrder',$order->id)}}">
                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </a></td>
                        </tr>
                    @endforeach

                </table>
                <div class="row justify-content-end mt-3">
                    <div class="col-4">
                        @include('admin.components.pagination',['list' => $orders])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom_js')
    <script>
        let submit = false
        $('#search').click(function () {
            if (submit) {
                $('filterForm').submit()
            } else {
                submit = true
            }
        })
        $('#role').change(function () {
            $('#filterForm').submit()
        })
        $('#sort').change(function () {
            $('#filterForm').submit()
        })
    </script>
@endsection
