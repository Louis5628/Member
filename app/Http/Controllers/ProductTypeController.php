<?php

namespace App\Http\Controllers;


use App\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    //
    function __construct()
    {
        $this->index = 'admin.product.type.index';//變數宣告
        $this->create = 'admin.product.type.create';
        $this->edit = 'admin.product.type.edit';
        $this->show = 'admin.product.type.show';

    }

    public function index(){
        $list = ProductType::with('product')->orderby('id', 'asc')->get();
        return view($this->index, compact('list'));
    }

    public function add(){
        return view($this->create);
    }

    public function store(Request $request){
       ProductType::create([
           'type_name' => $request->type_name
       ]);

       return redirect('/admin/product/type')->with('message', '新增產品種類成功!');

    }

    public function edit($id){
        $record = ProductType::find($id);
        return view($this->edit, compact('record'));
    }

    public function update(Request $request, $id){
        
        $old_record = ProductType::find($id);
        $old_record->type_name = $request->type_name;
        $old_record->save();

        return redirect('/admin/product/type')->with('message', '更新產品種類成功!');
    }


    public function delete(Request $request, $id){
        $old_record = ProductType::with('product')->find($id);
        //防呆，避免種類裡面有產品資料還是被刪掉
        //用if 判斷裡面是否為0就刪除資料
        $count = $old_record->product->count();
        if($count != 0) {
            return redirect('/admin/product/type')->with('message', 
            '無法刪除該產品種類!該產品種類內還有' . $count . ' 筆產品品項資料，請先刪除產品種類內的產品品項!');
        } elseif($count ==0){
            $old_record->delete();
            return redirect('/admin/product/type')->with('message', '刪除產品種類成功!');
        }
    }

}
