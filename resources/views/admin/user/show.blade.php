@extends('layouts.app')

@section('page-title', '會員管理')


@section('css')
    <style>
        .card-header h2{
            margin-bottom: 0;
        }
    </style>
@endsection


@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ asset('/admin/home') }}">首頁</a></li>
        <li class="breadcrumb-item active" aria-current="page">會員管理</li>
        </ol>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h2>會員管理</h2></div>

                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection




@section('js')

@endsection
