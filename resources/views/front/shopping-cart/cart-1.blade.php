@extends('layouts.shoppingcart-template')


@section('title', '購物車-1')

@section('css')

<link rel="stylesheet" href="{{ asset('css/digipack-shopping cart template.css') }}">
<link rel="stylesheet" href="{{ asset('css/digipack-shopping cart-1.css') }}">

@endsection

@section('steps')

<div class="row no-gutters">
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
</div>

@endsection

@section('cart')

<div class="row no-gutters">
    <div class="col-12 mb-5">
        <span style="font-size: 24px; font-weight: 400;">訂單明細</span>
    </div>
    @foreach ($cartProducts as $product)
    <!-- product-1 -->
    <div class="col-12 product d-flex flex-row justify-content-between">
        <!-- 產品與數量 -->
        <div class="col-6 col-md-5 d-flex flex-row align-items-center px-0">
            <button type="button" class="del-btn mr-2 btn-sm" data-id="{{ $product->id }}">X</button>
            <!-- 產品 -->
            <div class="col-4 col-md-2 px-0">
               
                <img class="rounded-circle p-0" src="{{ asset($product->attributes->photo) }}" alt="">
            </div>
            <div class="col-8 ml-2 col-md-10 d-flex flex-column px-0">
                <span style="font-size: 16px; font-weight: 500;">{{ $product->name }}</span>
                <small class="num">#41551</small>
            </div>
            <!-- 產品 -->
        </div>
        <!-- 數量 -->
        <div class="col-6 col-md-4 p-0 d-flex justify-content-end align-items-center ">
            <div class="pr-4 position-relative">
                <div>
                    <button type="button" id="subBtn" class="subBtn">-</button>
                    <input class="qty-input number text-center rounded" type="number" placeholder="1"
                        value="{{ $product->quantity }}" data-price="{{ $product->price }}"
                        data-id="{{ $product->id }}">
                    <button type="button" id="addBtn" class="addBtn" style="margin-right: 55px;">+</button>
                </div>
                <small data-price="{{ $product->price }}" class="price position-absolute"
                    style="top: calc(50% - 9.5px); right: 30px;">$
                    {{ number_format($product->price * $product->quantity) }}
                </small>
            </div>
        </div>

    </div>
    <hr class="my-4 w-100">
    <!-- product-1 -->
    @endforeach


    {{-- <!-- product-2 -->
    <div class="col-12 product d-flex flex-row justify-content-between">
        <!-- 產品與數量 -->
        <div class="col-6 col-md-5 d-flex flex-row align-items-center px-0">
            <!-- 產品 -->
            <div class="col-4 col-md-2 px-0">
                <img class="rounded-circle p-0"
                    src="https://cdn.shopify.com/s/files/1/0266/9841/6315/products/TY_34_300x.jpg?v=1603020281" alt="">
            </div>
            <div class="col-8 ml-2 col-md-10 d-flex flex-column px-0">
                <span style="font-size: 16px; font-weight: 500;">Spicy Mexican potatoes</span>
                <small class="num">#66999</small>
            </div>
            <!-- 產品 -->
        </div>
        <!-- 數量 -->
        <div class="col-6 col-md-4 p-0 d-flex justify-content-end align-items-center">
            <div class="pr-4 position-relative">
                <button id="subBtn" class="subBtn">-</button>
                <input type="number" value="1" class="number text-center rounded">
                <button id="addBtn" class="addBtn" style="margin-right: 55px;">+</button>
                <small data-price="10.5" class="price position-absolute" style="top: calc(50% - 9.5px); right: 30px;">
                    $10.50
                </small>
            </div>
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
            <div class="pr-4 position-relative">
                <button id="subBtn" class="subBtn">-</button>
                <input type="number" value="1" class="number text-center rounded">
                <button id="addBtn" class="addBtn" style="margin-right: 55px;">+</button>
                <small data-price="10.5" class="price position-absolute" style="top: calc(50% - 9.5px); right: 30px;">
                    $10.50
                </small>
            </div>
        </div>
    </div>
    <!-- product-3 --> --}}

   
</div>
<div class="row no-gutters d-flex flex-column align-content-end">
    <div class="col-3 d-flex justify-content-between align-items-center">
        <span class="text-muted">數量:</span>
        <span id="qty" class="number total-qty">3</span>
    </div>
    <div class="col-3 d-flex justify-content-between align-items-center">
        <span class="text-muted d-flex col-1 col-md-3 px-0 mr-1">小計:</span>
        <span class="number sub-total">$ 24.9</span>
    </div>
    <div class="col-3 d-flex justify-content-between align-items-center">
        <span class="text-muted d-flex col-1 col-md-3 px-0 mr-1">運費:</span>
        <span class="number shipping">$ 24.9</span>
    </div>
    <div class="col-3 d-flex justify-content-between align-items-center">
        <span class="text-muted d-flex col-1 col-md-3 px-0 mr-1">總計:</span>
        <span class="number total">$ 24.9</span>
    </div>

</div>
@endsection

@section('buttons')

<div class="row no-gutters">
    <div class="col-12 d-flex justify-content-between">
        <a href="{{ asset('/product') }}">
            <p class="d-flex align-items-center m-0"><i class="fa fa-arrow-left text-sm pr-2"></i>返回購物
            </p>
        </a>
        <a href="{{ asset('/shopping-cart/cart-2') }}"><button type="button"
                class="btn btn-primary px-5 py-3">下一步</button></a>
    </div>
</div>

@endsection

@section('js')

<script>
    function updateQty(element,number) {
            var qtyArea = element.parentElement;
            var input = qtyArea.querySelector('input');
            var qty = Number(input.value);
            var newQty = qty + number;
            

            //送到後端
            var formData = new FormData();
            formData.append('_token', '{{csrf_token()}}')
            formData.append('productId', input.getAttribute('data-id'))
            formData.append('newQty', newQty)

            fetch('/shopping-cart/update',{
                'method':'post',
                'body':formData
            }).then(function (response) {
                return response.text();
            }).then (function (result) {
                if(result=='success'){ 
                    if (newQty < 1) {
                        input.value = 1;
                    } else{
                        input.value = newQty;
                    }
                    var price = qtyArea.nextElementSibling;
                    price.innerText = '$ ' + (price.getAttribute('data-price') * input.value).toLocaleString();
                    updateShoppingCart();
                }
            })
        }

        function updateShoppingCart(params) {
            var totalQty = 0;
            var subTotal = 0;
            var shipping = 0;
            var total = 0;

            var inputs = document.querySelectorAll('.qty-input');
            inputs.forEach(function (input) {
                totalQty += Number(input.value);
                console.log(totalQty); 
                subTotal += Number(input.value) * input.getAttribute('data-price');             
            });
           

            document.querySelector('.total-qty').innerText = totalQty;
            document.querySelector('.sub-total').innerText = '$ ' + subTotal.toLocaleString();
            
            if (subTotal > 1000) {
                shipping = 0;
            } else{
                shipping = 60;
            }
            document.querySelector('.shipping').innerText = '$ ' + shipping;

            total = subTotal + shipping;
            document.querySelector('.total').innerText = '$ ' + total.toLocaleString();

            
        }


        var plusBtns = document.querySelectorAll('.addBtn');
        plusBtns.forEach(function (plusBtn) {
            plusBtn.addEventListener('click', function () {
              
               updateQty(this,1)

            })
        })

        var subBtns = document.querySelectorAll('.subBtn')
        subBtns.forEach(function (subBtn) {
            subBtn.addEventListener('click', function () {
                updateQty(this,-1)
                
            })
        })

        var delBtns = document.querySelectorAll('.del-btn');
        delBtns.forEach(function (delBtn){
            delBtn.addEventListener('click', function () {
                var productId = this.getAttribute('data-id');

                var formData = new FormData();
                formData.append('_token','{{csrf_token()}}');
                formData.append('productId',productId);

                var delElement = this;
                fetch('/shopping-cart/delete',{
                    'method':'POST',
                    'body':formData
                }).then(function (response) {
                    return response.text();
                }).then(function (result) {
                    if(result == 'success'){
                        delElement.parentElement.parentElement.remove();
                        updateShoppingCart();
                    }
                    
                })
                
            });
        });

        window.addEventListener('load',function () {
            updateShoppingCart();
        })

</script>

{{-- <script type="text/javascript" src="{{ asset('js/cart-1.js') }}"></script> --}}

@endsection