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

        $qty = 0;

    @endphp
    @foreach ($order->details as $detail)
        @php
            $product = json_decode($detail->old);
            $qty += $detail->qty;
        @endphp

        <!-- product-1 -->
        <div class="col-12 product d-flex flex-row justify-content-between mt-5">
            <!-- 產品與數量 -->
            <div class="col-6 col-md-5 d-flex flex-row align-items-center px-0">
                <!-- 產品 -->
                <div class="col-4 col-md-2 px-0">
                    <img class="rounded-circle p-0" src="{{asset($product->photo)}}" alt="">
                </div>
                <div class="col-8 ml-2 col-md-10 d-flex flex-column px-0">
                    <span style="font-size: 16px; font-weight: 500;">{{ $product->product_name }}</span>
                    <small class="num">#41551</small>
                </div>
                <!-- 產品 -->
            </div>
            <!-- 數量 -->
            <div class="col-6 col-md-4 p-0 d-flex justify-content-end align-items-center">
                <p class="pr-4 mb-0" style="font-size: 14px;">x {{ $detail->qty }}</p>
                <small class="pr-4">
                    ${{ number_format($product->price * $detail->qty) }}
                </small>
            </div>

        </div>
        <!-- product-1 -->
        <hr class="my-4 w-100">

    @endforeach

</div>
<div class="row py-4">
    <div class="col-12" style="font-size: 24px;">寄送資料</div>
    <div class="col-2 col-md-1 pr-0 mr-3 mr-md-2 pt-4 mt-2" style="font-size: 20px;">姓名</div>
    <div class="col-9 col-md-10 pl-0 pt-4 mt-2" style="font-size: 20px;">{{ $order->name }}</div>

    <div class="col-2 col-md-1 pr-0 mr-3 mr-md-2 pt-4 mt-2" style="font-size: 20px;">電話</div>
    <div class="col-9 col-md-10 pl-0 pt-4 mt-2" style="font-size: 20px;">{{ $order->phone }}</div>

    <div class="col-2 col-md-1 pr-0 mr-3 mr-md-2 pt-4 mt-2" style="font-size: 20px;">Email</div>
    <div class="col-9 col-md-10 pl-0 pt-4 mt-2" style="font-size: 20px;">{{ $order->email }}</div>


    <div class="col-2 col-md-1 pr-0 mr-3 mr-md-2 pt-4 mt-2" style="font-size: 20px;">地址</div>
    <div class="col-9 col-md-10 pl-0 pt-4 mt-2" style="font-size: 20px;">{{ $order->zipcode }}
        {{ $order->county.$order->district.$order->address }}</div>

</div>


<div class="col-12 row no-gutters d-flex flex-column align-content-end">
    <div class="col-3 d-flex justify-content-between align-items-center">
        <span class="text-muted">數量:</span>
        <span id="qty" class="total-qty number">{{$qty}}</span>
    </div>
    <div class="col-3 d-flex justify-content-between align-items-center">
        <span class="text-muted d-flex col-1 col-md-3 px-0 mr-1">小計:</span>
        <span class="sub-total number">$ {{number_format($order->price)}}</span>
    </div>
    <div class="col-3 d-flex justify-content-between align-items-center">
        <span class="text-muted d-flex col-1 col-md-3 px-0 mr-1">運費:</span>
        <span class="shipping number">$ {{number_format($order->shippingFee)}}</span>
    </div>
    <div class="col-3 d-flex justify-content-between align-items-center">
        <span class="text-muted d-flex col-1 col-md-3 px-0 mr-1">總計:</span>
        <span class="total number">$ {{number_format($order->price+$order->shippingFee)}}</span>
    </div>
</div>

@endsection


@section('buttons')

<div class="row no-gutters">
    <div class="col-12 d-flex justify-content-end">
        <a href="{{ asset('/') }}"><button type="button" class="btn btn-primary px-5 py-3">返回首頁</button></a>
    </div>
</div>

@endsection