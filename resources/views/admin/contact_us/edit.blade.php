@extends('layouts.app')

@section('page_title', '聯絡我們查看')

@section('css')

@endsection

@section('h1_title', '聯絡我們查看')

@section('content')

<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ asset('/admin/home') }}">首頁</a></li>
            <li class="breadcrumb-item"><a href="{{ asset('/admin/contact_us') }}">聯絡我們管理</a></li>
            <li class="breadcrumb-item active" aria-current="page">聯絡我們查看</li>
        </ol>
    </nav>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>聯絡我們查看</h2>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="name">姓名</label>
                        <input type="text" class="form-control" id="name" name="name" readonly value="{{ $record->name }}">
                    </div>

                    <div class="form-group">
                        <label for="email">信箱</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" autocomplete="email" readonly value="{{ $record->email }}">
                    </div>

                    <div class="form-group">
                        <label for="title">標題</label>
                        <input type="text" class="form-control" id="title" name="title" readonly value="{{ $record->title }}">
                    </div>

                    <div class="form-group">
                        <label for="content">內容</label>
                        <textarea class="form-control" name="content" id="content" cols="30" rows="10"
                            readonly>{{ $record->content }}</textarea>
                    </div>

                    <a href="{{ asset('/admin/contact_us') }}" class="btn btn-primary">返回</a>

                </div>
            </div>
        </div>
    </div>
</div>



@endsection


@section('js')

@endsection