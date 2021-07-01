@extends('layouts.app')

@section('page_title', '編輯產品種類')

@section('css')

@endsection

@section('h1_title', '編輯產品種類')

@section('content')


    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ asset('/admin/home') }}">首頁</a></li>
                <li class="breadcrumb-item"><a href="{{ asset('/admin/product/type') }}">產品種類管理</a></li>
                <li class="breadcrumb-item active" aria-current="page">編輯產品種類</li>
            </ol>
        </nav>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h2>編輯產品種類</h2></div>

                    <div class="card-body">

                            <form action="{{ asset('/admin/product/type/update') }}/{{ $record->id }}" method="POST" >
                                @csrf
                                <div class="form-group">
                                  <label for="type_name">產品種類名稱</label>
                                  <input type="text" class="form-control" id="type_name" name="type_name" value="{{ $record->type_name }}" required>
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

@endsection
