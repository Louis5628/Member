@extends('layouts.template')

@section('title', '購物車樣板')

@section('css')

<link rel="stylesheet" href="{{ asset('css/digipack-shopping cart template.css') }}">

@endsection


@section('content')

    <main>
        <div class="container mx-auto p-0">
            <div class="shopcart py-5">
                <div class="cart mx-auto">
                    @yield('steps')
                    {{-- <div class="row no-gutters">
                        <div class="col-12">
                            <h1 class="m-0">購物車</h1>
                        </div>
                        <div class="col-12 pt-4">
                            <div class="steps d-flex flex-row justify-content-around align-items-start">
                                <div class="step active line text-center">
                                    <div class="round mb-2">1</div>
                                    <div class="text">確認購物車</div>
                                </div>
                                <div class="step line text-center">
                                    <div class="round mb-2">2</div>
                                    <div class="text">付款與運送方式</div>
                                </div>
                                <div class="step line text-center">
                                    <div class="round mb-2">3</div>
                                    <div class="text">填寫資料</div>
                                </div>
                                <div class="step text-center">
                                    <div class="round mb-2">4</div>
                                    <div class="text">完成訂購</div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <hr class="featurette-divider">
                    <!-- 頁面新增區開始 -->
                    @yield('cart')
                    <!-- 頁面新增區結束 -->
                    {{-- <hr class="my-4 w-100"> --}}
                    {{-- <div class="row no-gutters d-flex flex-column align-content-end">
                        <div class="col-3 d-flex justify-content-between align-items-center">
                            <span class="text-muted">數量:</span>
                            <span id="qty" class="total-qty"></span>
                        </div>
                        <div class="col-3 d-flex justify-content-between align-items-center">
                            <span class="text-muted d-flex col-1 col-md-3 px-0 mr-1">小計:</span>
                            <span class="sub-total"></span>
                        </div>
                        <div class="col-3 d-flex justify-content-between align-items-center">
                            <span class="text-muted d-flex col-1 col-md-3 px-0 mr-1">運費:</span>
                            <span class="shipping"></span>
                        </div>
                        <div class="col-3 d-flex justify-content-between align-items-center">
                            <span class="text-muted d-flex col-1 col-md-3 px-0 mr-1">總計:</span>
                            <span class="total"></span>
                        </div>

                    </div> --}}
                    {{-- <hr class="featurette-divider"> --}}
                    {{-- <div class="row no-gutters">
                        <div class="col-12 d-flex justify-content-between">
                            <p class="d-flex align-items-center m-0"><i class="fa fa-arrow-left text-sm pr-2"></i>返回購物</p>
                            <a href="@yield('next')"><button type="button" class="btn btn-primary px-5 py-3" >下一步</button></a>
                        </div>
                    </div> --}}
                    @yield('buttons')
                </div>
            </div>
    </main>

@endsection




