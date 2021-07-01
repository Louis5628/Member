@extends('layouts.app')

@section('page-title', '產品種類管理')


@section('css')
    <style>
        .card-header h2{
            margin-bottom: 0;
        }
    </style>
@endsection


@section('content')

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ asset('/admin/home') }}">首頁</a></li>
            <li class="breadcrumb-item active" aria-current="page">產品種類管理</li>
            </ol>
        </nav>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h2>產品種類管理</h2></div>


                    <div class="card-body">

                        <a class="btn btn-success btn-sm mb-3" href="{{ asset('/admin/product/type/add') }}">新增</a>

                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>產品種類名稱</th>
                                    <th>產品品項總數</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $item)
                                <tr>
                                    <td>{{ $item->type_name }}</td>
                                    <td>{{ $item->product->count() }}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{ asset('/admin/product/type/edit') }}/{{ $item->id }}">編輯</a>
                                        <form style="display: inline-block" action="{{ asset('/admin/product/type/delete') }}/{{ $item->id }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm">刪除</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
      
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>產品種類名稱</th>
                                    <th>產品品項總數</th>
                                    <th>操作</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection




@section('js')

    <script>
            $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
   
@endsection
