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
                                    <select name="status" class="custom-select" id="role">
                                        <option hidden selected disabled>All</option>
                                        @foreach(\App\Enums\Status::getValues() as $type)
                                            <option
                                                value="{{$type}}" {{$status && $status == $type ? 'selected' : ''}}>
                                                {{\App\Enums\Status::getDescription($type)}}
                                            </option>
                                        @endforeach
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
                        <th>Check</th>
                        <th>Id</th>
                        <th>Tên người nhận</th>
                        <th>Địa chỉ</th>
                        <th>Giá đơn hàng</th>
                        <th>Ngày đặt</th>
                        <th>Trạng thái</th>
                        <th>Actions</th>
                    </tr>


                    @foreach($orders as $order)
                        <tr>
                            <td><input class="checkbox_choice" type="checkbox" value="{{$order->id}}"></td>
                            <td>{{$order->id}}</td>
                            <td>{{$order->shipName}}</td>
                            <td>{{$order->shipAddress}}</td>
                            <td>{{$order->totalPrice}}</td>
                            <td>{{date_format($order->created_at,'d/m/Y')}}</td>
                            <td>{{\App\Enums\Status::getDescription($order->status)}}</td>
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
                    <div class="col-4">
                        <form id="filter-date">
                            <select name="date" id="date" class="custom-select" style="width: 50%">
                                <option selected disabled hidden>Lọc theo thời gian</option>
                                <option value="1" {{$date && $date == 1 ? 'selected' : ''}}>Đơn hàng trong ngày</option>
                                <option value="2" {{$date && $date == 2 ? 'selected' : ''}}>Đơn hàng trong tháng</option>
                                <option value="3" {{$date && $date == 3 ? 'selected' : ''}}>Đơn hàng trong năm</option>
                            </select>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <span style="margin-right: 30px">Check all <input id="check_all" type="checkbox"
                                                                          style="transform: translateY(2px)"></span>
                        <select name="order_status" id="order_status" class="custom-select" style="width: 130px">
                            <option disabled hidden selected>Change status</option>
                            @foreach(\App\Enums\Status::getValues() as $type)
                                <option value="{{$type}}">{{\App\Enums\Status::getDescription($type)}}</option>
                            @endforeach
                        </select>
                        <button class="btn btn-primary btn_submit" style="width: 120px">Apply</button>
                        <form action="{{route('updateStatus')}}" id="form_update_status" method="post"
                              style="width: 0;height: 0;overflow: hidden!important;">
                            @csrf
                            <div style="width: 0;height: 0;overflow: hidden!important;">
                                <input type="text" name="array_id" id="array_id">
                                <input type="text" name="desire" id="desire">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom_js')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            $('#check_all').change(function () {
                if ($(this).is(':checked')) {
                    $('.checkbox_choice').prop("checked", true)
                } else {
                    $('.checkbox_choice').prop("checked", false)
                }
            })
            $('#order_status').change(function () {
                $('#desire').val(this.value)
            })
            $('.btn_submit').click(function () {
                var checkboxs = document.querySelectorAll('.checkbox_choice')
                var items = []
                for (let i = 0; i < checkboxs.length; i++) {
                    if (checkboxs[i].checked) {
                        items.push(checkboxs[i].value)
                    }
                }
                $('#array_id').val(JSON.stringify(items))
                if ($('#desire').val() === '') {
                    alert('Vui lòng chọn thao tác để tiếp tục')
                } else {
                    $('#form_update_status').submit()
                }
            })
            let submit = false
            $('#search').click(function () {
                if (submit) {
                    $('#filterForm').submit()
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
            $('#date').change(function (){
                $('#filter-date').submit()
            })
        })

    </script>
@endsection
