@extends('layouts.app')

@section('page_title', '編輯產品種類')

@section('css')

    <style>

        .card-header h2{
            margin-bottom: 0;
        }

        .product-img{
            width:200px;
            height:200px;
            border: 1px solid black;
            background-position:center;
            background-size: cover;
            position: relative;
            margin-right:10px;
        }

        .del-img-btn {
            position: absolute;
            right: -10px;
            top:-10px;
            width: 25px;
            height: 25px;
            background-color: red;
            color: white;
            text-align: center;
            line-height: 22px;
            font-size: 16px;
            border-radius: 50%;
            cursor: pointer;
        }

        

    </style>
    

@endsection

@section('h1_title', '編輯產品種類')

@section('content')


    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ asset('/admin/home') }}">首頁</a></li>
                <li class="breadcrumb-item"><a href="{{ asset('/admin/product/item') }}">產品種類管理</a></li>
                <li class="breadcrumb-item active" aria-current="page">編輯產品種類</li>
            </ol>
        </nav>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h2>編輯產品種類</h2></div>

                    <div class="card-body">
                        <form action="{{ asset('/admin/product/item/update') }}/{{ $record->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="product_type_id">產品種類名稱</label>
                                <select class="form-control" id="product_type_id" name="product_type_id" required>
                                    @foreach ($type as $item)
                                        <option @if($item->id === $record->type->id) selected @endif value="{{ $item->id }}">{{ $item->type_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                              <label for="product_name">產品品項名稱</label>
                              <input type="text" class="form-control" id="product_name" name="product_name" required value="{{ $record->product_name }}">
                            </div>
                            <div class="form-group">
                                <label for="price">產品價格</label>
                                <input type="text" class="form-control" id="price" name="price" value="{{ $record->price }}" required>
                            </div>
                            <hr>

                            <div class="form-group row">
                                <label class="col-12" for="">產品主要圖片</label>
                                    <div class="col-md-3">
                                        <img class="w-100" src="{{ $record->photo }}" alt="">
                                    </div>
                            </div>

                            <div class="form-group">
                                <label for="photo">修改產品主要圖片</label>
                                <input type="file" class="form-control" id="photo" name="photo">
                            </div>

                            <hr>
                            {{-- 讓使用者可以在編輯時砍掉關聯的圖片 --}}
                            <div class="form-group d-flex flex-wrap">
                                <label class="col-12" for="">產品其他圖片</label>
                                @foreach ($record->photos as $photo)
                                    <div class="product-img" style="background-image: url('{{ asset($photo->photos) }}')">
                                        <div data-id="{{ $photo->id }}" class="del-img-btn">x</div>
                                    </div>                                   
                                @endforeach
                            </div>
                           
                            <div class="form-group">
                                <label for="photos">新增產品其他圖片</label>
                                <input type="file" class="form-control" id="photos" name="photos[]" multiple>
                            </div>
                            <hr>

                            <div class="form-group">
                                <label for="discript">產品描述</label>
                                <textarea class="form-control" name="discript" id="discript" cols="30" rows="10" required>{{ $record->discript }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">送出</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')

    <script>
        $('.del-img-btn').click(function () {

            var id = $(this).attr('data-id');//抓 data-id attribute
            var parent_element = $(this).parent();//抓 del-img-btn的父層也就是圖片層
            var formData = new FormData();
            //append('key', 'value')，抓到id塞進去formdata，抓到csrf_token塞進去formdata
            formData.append('id', id);
            formData.append('_token', '{{ csrf_token() }}');
            
            var yes = confirm('你確定要刪除這張圖片嗎?')
            if (yes) {
                fetch('/admin/product/item/deleteImage', {
                    'method':'post',
                    'body': formData //送POST表單會用form表單送資料
                }).then(function (response) {
                    return response.text();
                }).then(function (result) {
                    //前端顯示畫面
                    if(result == 'success'){
                        alert('刪除圖片成功!');
                        parent_element.remove();
                    }
                });
            }
        })



        //JS
        var delBtns = document.querySelectorAll('.del-img-btn');



    </script>

@endsection
