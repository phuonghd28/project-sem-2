@extends('admin.master')
@section('title')
    Create Product
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
            display: block;
        !important;
        }

        .btn_choose_images {
            width: 100%;
            height: 100%;
            border: none;
            background: none;
            padding: 9px;
            color: #fff;
            font-size: 15px;
        }

        .img-products {
            height: 140px;
            width: 140px;
            object-fit: cover;
            margin-right: 30px;
        }
    </style>
@endsection
@section('content')
    <div class="row main-card mb-3 card">
        <div class="container">
            <div class="card-body mb-2"><h2 class="mb-2">
                    @if($data)
                        Update Product
                    @else
                        Create Product
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
                        <label class="col-sm-1 col-form-label">Name</label>
                        <div class="col-sm-3">
                            <input name="name" value="{{$data ? $data->name : ''}}" type="text"
                                   class="form-control form-control" placeholder="Enter name">
                            @error('name')
                            <div class="mt-1 mb-1 ml-1 text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <label class="col-sm-1 col-form-label">Price</label>
                        <div class="col-sm-3">
                            <input name="price" value="{{$data ? $data->price : ''}}" type="text" class="form-control"
                                   placeholder="Enter price">
                            @error('price')
                            <div class="mt-1 mb-1 ml-1 text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <label class="col-sm-1 px-1 col-form-label">Category</label>
                        <div class="col-sm-3">
                            <select class="form-control" name="category_id">
                                <option selected disabled hidden>Category</option>
                                @foreach($category as $item)
                                    <option
                                        {{$data && $data->category_id === $item->id ? 'selected' : ''}} value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="mt-1 mb-1 ml-1 text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label class="col-sm-1 col-form-label">Description</label>
                        <div class="col-sm-11">
                            <textarea id="description" name="description" type="text" class="form-control"
                                      placeholder="Enter description"
                                      rows="3">{{$data ? $data->description : ''}}</textarea>
                            @error('description')
                            <div class="mt-1 mb-1 ml-1 text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="position-relative row form-group mb-0">
                        <label for="exampleFile" class="col-sm-1 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <div class="button_outer">
                                <div class="btn_upload">
                                    <input type="file" name="imageChooser" class="custom-file-input" style="opacity: 0">
                                    <input type="hidden" name="image">
                                    <button type="button" class="btn_choose_images">Upload Image</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative row form-groupn">
                        <div class="col-sm-1"></div>
                        <div id="image-preview" class="col-sm-11">
                            @if($data)
                                <?php
                                $images = explode(',', $data->image);
                                ?>
                                @foreach($images as $item)
                                    <img class="img-products" alt=""
                                         src="{{$item}}" {{end($images) ? 'hidden' : ''}}/>

                                @endforeach
                            @endif
                            @error('image')
                            <div class="mt-1 mb-1 ml-1 text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label class="col-sm-1 col-form-label"></label>
                        <div class="col-sm-11 d-flex justify-content-end">
                            <button class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('custom_js')
    <script src="{{url('https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace('description');
        const cloudName = 'dn3bmj5ex';
        const unsignedUploadPreset = 'm9kz74zz';

        var img = document.querySelector('[name="imageChooser"]');
        let thumbnails = [];

        img.onchange = function () {
            var file = this.files[0];
            var url = `https://api.cloudinary.com/v1_1/${cloudName}/upload`;
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var responseDataJson = JSON.parse(this.responseText);
                    console.log(responseDataJson.url);
                    var imageUrl = document.querySelector('input[name="image"]');
                    imageUrl.value += `${responseDataJson.url},`;
                    let imagePreview = document.getElementById('image-preview');
                    imagePreview.innerHTML += `<img class="img-product" alt="" style="height: 140px;width: 140px;object-fit: cover; margin: 0 30px 30px 0; position: relative" src="${responseDataJson.url}">`;
                }
            }
            xhr.open('POST', url, true);
            var fd = new FormData();
            fd.append('upload_preset', unsignedUploadPreset);
            fd.append('tags', 'browser_upload');
            fd.append('file', file);
            xhr.send(fd);
        }
    </script>
@endsection

