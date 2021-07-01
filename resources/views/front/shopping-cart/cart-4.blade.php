@extends('layouts.shoppingcart-template')

@section('title', '購物車-4')

@section('css')

    <link rel="stylesheet" href="{{ asset('css/digipack-shopping cart template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/digipack-shopping cart-4.css') }}">

@endsection


@section('steps')

    <div class="row no-gutters">
        <div class="col-12">
            <h1 class="m-0">購物車</h1>
        </div>
        <div class="col-12 pt-4">
            <div class="steps d-flex flex-row justify-content-around align-items-start">
                <div class="step active line all text-center">
                    <div class="round mb-2">1</div>
                    <div class="text">確認購物車</div>
                </div>
                <div class="step active line all text-center">
                    <div class="round mb-2">2</div>
                    <div class="text">付款與運送方式</div>
                </div>
                <div class="step active line all text-center">
                    <div class="round mb-2">3</div>
                    <div class="text">填寫資料</div>
                </div>
                <div class="step active text-center">
                    <div class="round mb-2">4</div>
                    <div class="text">完成訂購</div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('cart')
@php
    $order = Session::get('order');
@endphp
    <h1 class="text-center mb-0" style="font-size: 48px; font-weight: 700;">訂單成立</h1>
    <div class="row no-gutters pb-3">
        <div class="col-12">
            <span style="font-size: 24px; font-weight: 400;">訂單明細</span>
        </div>
        @php
            
        @endphp
        @foreach ($order->details as $detail)
            @php
                $product = json_decode($details->old);
            @endphp



        @endforeach
        <!-- product-1 -->
        <div class="col-12 product d-flex flex-row justify-content-between mt-5">
            <!-- 產品與數量 -->
            <div class="col-6 col-md-5 d-flex flex-row align-items-center px-0">
                <!-- 產品 -->
                <div class="col-4 col-md-2 px-0">
                    <img class="rounded-circle p-0"
                        src="{{asset($product->photo)}}"
                        alt="">
                </div>
                <div class="col-8 ml-2 col-md-10 d-flex flex-column px-0">
                    <span style="font-size: 16px; font-weight: 500;">Chicken momo</span>
                    <small class="num">#41551</small>
                </div>
                <!-- 產品 -->
            </div>
            <!-- 數量 -->
            <div class="col-6 col-md-4 p-0 d-flex justify-content-end align-items-center">
                <p class="pr-4 mb-0" style="font-size: 14px;">x 1</p>
                <small class="pr-4">
                    $10.50
                </small>
            </div>

        </div>
        <!-- product-1 -->
        <hr class="my-4 w-100">
        <!-- product-2 -->
        <div class="col-12 product d-flex flex-row justify-content-between">
            <!-- 產品與數量 -->
            <div class="col-6 col-md-5 d-flex flex-row align-items-center px-0">
                <!-- 產品 -->
                <div class="col-4 col-md-2 px-0">
                    <img class="rounded-circle p-0"
                        src="https://cdn.shopify.com/s/files/1/0266/9841/6315/products/TY_34_300x.jpg?v=1603020281"
                        alt="">
                </div>
                <div class="col-8 ml-2 col-md-10 d-flex flex-column px-0">
                    <span style="font-size: 16px; font-weight: 500;">Spicy Mexican potatoes</span>
                    <small class="num">#66999</small>
                </div>
                <!-- 產品 -->
            </div>
            <!-- 數量 -->
            <div class="col-6 col-md-4 p-0 d-flex justify-content-end align-items-center">
                <p class="pr-4 mb-0" style="font-size: 14px;">x 1</p>
                <small class="pr-4">
                    $10.50
                </small>
            </div>
        </div>
        <!-- product-2 -->
        <hr class="my-4 w-100">
        <!-- product-3 -->
        <div class="col-12 product d-flex flex-row justify-content-between">
            <!-- 產品與數量 -->
            <div class="col-6 col-md-5 d-flex flex-row align-items-center px-0">
                <!-- 產品 -->
                <div class="col-4 col-md-2 px-0">
                    <img class="rounded-circle p-0"
                        src="https://images.pexels.com/photos/5591712/pexels-photo-5591712.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260"
                        alt="">
                </div>
                <div class="col-8 ml-2 col-md-10 d-flex flex-column px-0">
                    <span style="font-size: 16px; font-weight: 500;">Breakfast</span>
                    <small class="num">#86577</small>
                </div>
                <!-- 產品 -->
            </div>
            <!-- 數量 -->
            <div class="col-6 col-md-4 p-0 d-flex justify-content-end align-items-center">
                <p class="pr-4 mb-0" style="font-size: 14px;">x 1</p>
                <small class="pr-4">
                    $10.50
                </small>
            </div>
        </div>
        <!-- product-3 -->
    </div>
    <div class="row py-4">
        <div class="col-12" style="font-size: 24px;">寄送資料</div>
        <div class="col-2 col-md-1 pr-0 mr-3 mr-md-2 pt-4 mt-2" style="font-size: 20px;">姓名</div>
        <div class="col-9 col-md-10 pl-0 pt-4 mt-2" style="font-size: 20px;">王曉明</div>

        <div class="col-2 col-md-1 pr-0 mr-3 mr-md-2 pt-4 mt-2" style="font-size: 20px;">電話</div>
        <div class="col-9 col-md-10 pl-0 pt-4 mt-2" style="font-size: 20px;">0912345678</div>

        <div class="col-2 col-md-1 pr-0 mr-3 mr-md-2 pt-4 mt-2" style="font-size: 20px;">Email</div>
        <div class="col-9 col-md-10 pl-0 pt-4 mt-2" style="font-size: 20px;">abc123@gmail.com</div>


        <div class="col-2 col-md-1 pr-0 mr-3 mr-md-2 pt-4 mt-2" style="font-size: 20px;">地址</div>
        <div class="col-9 col-md-10 pl-0 pt-4 mt-2" style="font-size: 20px;">409 台中市小鎮村英雄路1號</div>

    </div>

@endsection


@section('buttons')

    <div class="row no-gutters">
        <div class="col-12 d-flex justify-content-end">
            <a href="{{ asset('/') }}"><button type="button" class="btn btn-primary px-5 py-3" >返回首頁</button></a>
        </div>
    </div>

@endsection

