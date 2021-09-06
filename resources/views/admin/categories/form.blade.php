@extends('admin.master')
@section('title')
    Create Category
@endsection
@section('custom_css')
    <style>
        .button_outer {
            background: #00c6d7;
            text-align: center;
            height: 40px;
            width: 140px;
            border-radius: 4px;
            display: inline-block;
            transition: .2s;
            position: relative;
            overflow: hidden;
        }
        .button_outer:hover {
            background-color: #17a2b8;
        }
        .btn_upload {
            width: 100%;
            padding: 9px;
            color: #fff;
            font-size: 15px;
            text-align: center;
            position: relative;
            display: inline-block;
            overflow: hidden;
            z-index: 3;
            white-space: nowrap;
        }
        .btn_upload input {
            position: absolute;
            width: 100%;
            left: 0;
            top: 0;
            height: 100%;
            cursor: pointer;
        }
        .uploaded_file_view {
            transition: .2s;
            display: none;
        }
        .uploaded_file_view.show {
            display: block;!important;
        }
    </style>
@endsection
@section('content')
    <div class="row main-card mb-3 card">
        <div class="container">
            <div class="card-body mb-2"><h2 class="mb-3">
                    @if($data)
                        Update Category
                    @else
                        Create Category
                    @endif
                </h2>
                @if(session('status'))
                    <div class="alert alert-success mb-1 mt-1">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="" method="POST" enctype="multipart/form-data">
                    @if($data)
                        @method('PUT')
                    @endif
                    @csrf
                    <div class="position-relative row form-group">
                        <label for="exampleEmail" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input name="name" value="{{$data ? $data->name : ''}}" type="text" class="form-control" placeholder="Enter name">
                            @error('name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="exampleFile" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <div class="button_outer">
                                <div class="btn_upload">
                                    <input style="opacity: 0" name="image" type="file" id="upload_file" class="">
                                    Upload Image
                                </div>
                            </div>
                            <div class="uploaded_file_view my-2" id="uploaded_view">
                            </div>
                            @if($data)
                                <div class="my-2">
                                    <img id="img-edit" src="{{ \Illuminate\Support\Facades\Storage::url($data ? $data ->image : '') }}" height="150" width="150" alt="" />
                                </div>
                            @endif
                            @error('image')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="position-relative row form-check">
                        <div class="col-sm-10 offset-sm-2 p-0">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
@section('custom_js')
    <script>
        var btnUpload = $("#upload_file"),
            btnOuter = $(".button_outer");
        btnUpload.on("change", function (e) {
            $("#uploaded_view").removeClass("show");
            $("#uploaded_view").find("img").remove();
            $("#img-edit").remove();
            var ext = btnUpload.val().split('.').pop().toLowerCase();
            if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                $(".error_msg").text("Not an Image...");
            } else {
                $(".error_msg").text("");
                btnOuter.addClass("file_uploading");
                setTimeout(function () {
                    btnOuter.addClass("file_uploaded");
                }, 0);
                var uploadedFile = URL.createObjectURL(e.target.files[0]);
                setTimeout(function () {
                    $("#uploaded_view").append('<img style="height: 150px; width: 150px" src="' + uploadedFile + '" />').addClass("show");
                }, 0);
            }
        });
    </script>
@endsection

