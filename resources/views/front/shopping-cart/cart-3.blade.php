@extends('layouts.shoppingcart-template')

@section('title', '購物車-3')

@section('css')

<link rel="stylesheet" href="{{ asset('css/digipack-shopping cart template.css') }}">
<link rel="stylesheet" href="{{ asset('css/digipack-shopping cart-3.css') }}">

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
            <div class="step active line text-center">
                <div class="round mb-2">3</div>
                <div class="text">填寫資料</div>
            </div>
            <div class="step text-center">
                <div class="round mb-2">4</div>
                <div class="text">完成訂購</div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('cart')

<form class="shipment" action="{{ asset('/shopping-cart/cart-3/check') }}" method="POST">
    @csrf
    <div class="row d-flex justify-content-center pt-0 pb-3">
        <div class="col-12">
            <span style="font-size: 24px; font-weight: 400;">寄送資料</span>
        </div>
        <div class="col-12 mt-2">
            <label for="name" class="w-100 p-1 mb-0" style="font-size: 20px;">姓名</label>
        </div>
        <div class="col-12">
            <input type="text" class="w-100 py-2 px-4" id="name" name="name" placeholder="王小明">
        </div>

        <div class="col-12 mt-2">
            <label for="phone" class="w-100 p-1 mb-0" style="font-size: 20px;">電話</label>
        </div>
        <div class="col-12">
            <input type="text" class="w-100 py-2 px-4" id="phone" name="phone" placeholder="0912345678">
        </div>

        <div class="col-12 mt-2">
            <label for="email" class="w-100 p-1 mb-0" style="font-size: 20px;">Email</label>
        </div>
        <div class="col-12">
            <input type="email" class="w-100 py-2 px-4" id="email" name="email" placeholder="abc123@gmail.com">
        </div>


        <div class="col-12 mt-2">
            <label for="address" class="w-100 p-1 mb-0" style="font-size: 20px;">地址</label>
            <div class="row city-selector-set">
                <div class="col-4 pr-1">
                    <!-- 縣市選單 -->
                    <select class="county form-control"></select>
                </div>
                <div class="col-4 pr-1">
                    <!-- 區域選單 -->
                    <select class="district form-control"></select>
                </div>
                <div class="col-4 pl-1">
                    <!-- 郵遞區號欄位 (建議加入 readonly 屬性，防止修改) -->
                    <input class="zipcode form-control" type="text" size="3" name="zipcode" readonly placeholder="郵遞區號">
                </div>
            </div>
        </div>
        <div class="col-12 mt-2">
            <input type="text" class="form-control" id="address" name="address" placeholder="地址">
        </div>

        <hr class="my-4 w-100">
        <div class="col-12 row no-gutters d-flex flex-column align-content-end">
            <div class="col-3 d-flex justify-content-between align-items-center">
                <span class="text-muted">數量:</span>
                <span id="qty" class="total-qty number">{{$qty}}</span>
            </div>
            <div class="col-3 d-flex justify-content-between align-items-center">
                <span class="text-muted d-flex col-1 col-md-3 px-0 mr-1">小計:</span>
                <span class="sub-total number">$ {{number_format($subTotal)}}</span>
            </div>
            <div class="col-3 d-flex justify-content-between align-items-center">
                <span class="text-muted d-flex col-1 col-md-3 px-0 mr-1">運費:</span>
                <span class="shipping number">$ {{$shippingFee}}</span>
            </div>
            <div class="col-3 d-flex justify-content-between align-items-center">
                <span class="text-muted d-flex col-1 col-md-3 px-0 mr-1">總計:</span>
                <span class="total number">$ {{number_format($total)}}</span>
            </div>
        </div>
        <hr class="my-4 w-100">

        <div class="col-12 mt-2 d-flex justify-content-between">
            <a href="{{ asset('/shopping-cart/cart-2') }}" class="btn btn-outline-primary px-5 py-3">上一步</a>
            <button type="submit" class="btn btn-primary px-5 py-3">前往付款</button>
        </div>
    </div>
</form>

@endsection


@section('buttons')
@endsection

@section('js')

<script src="{{ asset('js/tw-city-selector.js') }}"></script>
<script>
    new TwCitySelector({
          el: '.city-selector-set',
          elCounty: '.county', // 在 el 裡查找 element
          elDistrict: '.district', // 在 el 裡查找 element
          elZipcode: '.zipcode' // 在 el 裡查找 element
        });
</script>

@endsection