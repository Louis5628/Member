<?php

namespace App\Http\Controllers;

use App\News;
use App\Order;
use App\Product;
use App\ContactUs;
use App\OrderDetail;
use App\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class FrontController extends Controller
{
    //
    public function index()
    {
        return view('front.index');
    }

    public function member()
    {
        return view('front.member');
    }

    public function cart_1()
    {
        //抓取購物車資料並傳送到購物車前端頁面
        $cartProducts = \Cart::getContent()->sortKeys();

        return view('front.shopping-cart.cart-1', compact('cartProducts'));
    }

    //購物車二
    public function cart_2()
    {

        $qty = \Cart::getTotalQuantity();
        $subTotal = \Cart::getSubTotal();
        $shippingFee = \Cart::getSubTotal() > 1000 ? 0 : 60;
        $total = $subTotal + $shippingFee;

        return view('front.shopping-cart.cart-2', compact('qty', 'subTotal', 'shippingFee', 'total'));
    }

    public function paymentCheck(Request $request)
    {
        Session::put('payment', $request->payment);
        Session::put('shipment', $request->shipment);
        return redirect('/shopping-cart/cart-3');
    }


    public function cart_3()
    {
        if ((Session::has('payment')) && Session::has('shipment')) {

            $qty = \Cart::getTotalQuantity();
            $subTotal = \Cart::getSubTotal();
            $shippingFee = \Cart::getSubTotal() > 1000 ? 0 : 60;
            $total = $subTotal + $shippingFee;

            return view('front.shopping-cart.cart-3', compact('qty', 'subTotal', 'shippingFee', 'total'));
        } else {
            return redirect('/shopping-cart/cart-2');
        }
    }

    public function shipmentCheck(Request $request)
    {

        $cartProducts = \Cart::getContent();

        // $totalPrice = 0;
        // $totalQty = 0;
        // foreach ($cartProducts as $cartProduct) {
        //     $product = Product::find($cartProduct->id);
        //     $totalPrice += $product->price * $cartProduct->quantity;
        //     $totalQty += $cartProduct->quantity;
        // }

        $order = Order::create([
            'order_no' => 'DP' . time() . rand(1, 999),
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'county' => $request->county,
            'district' => $request->district,
            'zipcode' => $request->zipcode,
            'address' => $request->address,
            // 'price' =>  $totalPrice,
            'price' =>  9999999,
            'pay_type' => Session::get('payment'),
            'shipping' => Session::get('shipment'),
            //三元運算子      //判斷            對的前錯的後  
            // 'shipping_fee' => $totalPrice > 1000 ? 0 : 60,
            'shipping_fee' => 999999,
            'shipping_status_id' =>  0,
            'order_status_id' =>  0,
        ]);

        $totalPrice = 0;

        foreach ($cartProducts as $cartProduct) {
            $product = Product::find($cartProduct->id);
            $totalPrice += $product->price * $cartProduct->quantity;

            OrderDetail::create([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'qty' => $cartProduct->quantity,
                'old' => json_encode($product)
            ]);
        }

        $order->update([
            'price' => $totalPrice,
            'shipping_fee' => $totalPrice > 1000 ? 0 : 60,
        ]);

        Session::forget('payment');
        Session::forget('shipment');

        \Cart::clear();

        return redirect('/shopping-cart/cart-4')->with('order', $order);
    }

    public function cart_4()
    {
        if (Session::has('order')) {
            return view('front.shopping-cart.cart-4');
        } else {

            return redirect('/');
        }
    }



    //加入購物車
    public function add(Request $request)
    {
        // dd($request->all());
        $product = Product::find($request->productId);
        \Cart::add(array(
            'id' => $product->id, // inique row ID
            'name' => $product->product_name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(
                'photo' => $product->photo
            )
        ));
        return 'success';
    }

    public function update(Request $request)
    {
        \Cart::update($request->productId, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->newQty
            ),
        ));
        return 'success';
    }

    //加入購物車完成頁面
    public function content()
    {
        $cartCollection = \Cart::getContent();
        dd($cartCollection);
    }

    //清除購物車資料
    public function clear()
    {
        \Cart::clear();
        return 'success';
    }

    //刪除購物車商品
    public function delete(Request $request)
    {
        \Cart::remove($request->productId);
        return 'success';
    }






    public function contactUs()
    {
        return view('front.contact_us.index');
    }

    public function contactusSend(Request $request)
    {
        ContactUs::create([
            'name' => $request->name,
            'email' => $request->email,
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect('/contact_us')->with('message', '成功聯絡我們');
    }

    public function product(Request $request)
    {

        $types = ProductType::get();

        if ($request->type_id) {
            $products = Product::where('product_type_id', $request->type_id)->get();
        } else {
            $products = Product::get();
        }

        // dd($products);

        // return view('front.product.index', compact('products', 'types'));
        return view('front.product.index', compact('products', 'types'));
    }


    public function news()
    {
        $news = News::First();
        return view('front.news.index', compact('news'));
    }
}
