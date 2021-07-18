@extends('layouts.app')

@section('page_title', '最新消息新增')

@section('css')

@endsection

@section('h1_title', '最新消息新增')

@section('content')


    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ asset('/admin/home') }}">首頁</a></li>
                <li class="breadcrumb-item"><a href="{{ asset('/admin/news') }}">最新消息管理</a></li>
                <li class="breadcrumb-item active" aria-current="page">最新消息新增</li>
            </ol>
        </nav>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h2>最新消息新增</h2></div>

                    <div class="card-body">
                        <form action="{{ asset('/admin/news/store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="type">最新消息分類</label>
                                    <select class="form-control" id="type" name="type">
                                        {{-- foreach 取出 type 的 item 就是 value 的值( Model 內的 key value 值)--}}
                                        @foreach ($type as $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                               
                                <div class="form-group">
                                    <label for="title">標題</label>
                                    <input type="text" class="form-control" id="title" name="title">
                                  </div>

                                  <div class="form-group">
                                    <label for="img">圖片</label>
                                    <input type="file" class="form-control" id="img" name="img">
                                  </div>

                                  <div class="form-group">
                                    <label for="content">內容</label>
                                    <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
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
    $(document).ready(function() {
        $('#content').summernote();
    });
</script>

@endsection
