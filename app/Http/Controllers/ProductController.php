<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImg;
use App\ProductType;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    //
    function __construct()
    {
        $this->index = 'admin.product.item.index';//變數宣告
        $this->create = 'admin.product.item.create';
        $this->edit = 'admin.product.item.edit';
        $this->show = 'admin.product.item.show';

    }

    public function index(){
        $list = Product::orderby('id', 'asc')->get();

        return view($this->index, compact('list'));
    }

    public function add(){

        $type = ProductType::get();

        return view($this->create, compact('type'));
    }

    public function store(Request $request){
        $requestData = $request->all();
        // dd($requestData);
        if ($request->hasFile('photo')){
            // $requestData['photo'] = FileController::imageUpload($request->file('photo'));
            $requestData['photo'] = FileController::imageUpload($request->file('photo'),'product');
        }

        $new_record = Product::create($requestData);

        // $new_record = Product::create([
        //     'product_name' => $request->product_name,
        //     'price' => $request->price,
        //     'discript' => $request->discript,
        //     'product_type_id' => $request->product_type_id,
        // ]);
       
        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $item) {
               
                $path = FileController::imageUpload($item,'product');

                ProductImg::create([
                    'photos' => $path,
                    'product_id' => $new_record->id
                ]);
            }
        }
        return redirect('/admin/product/item')->with('message', '新增產品成功!');
    }
     

    public function edit($id){

        $record = Product::with('photos')->find($id);
        $type = ProductType::get();
        
        return view($this->edit, compact('record', 'type'));
    }

    public function update(Request $request, $id){
        //   dd($request->all());
        //找到舊資料
        $record = Product::with('photos')->find($id);
        $requestData = $request->all();
        //
        if($request->hasFile('photo')){
            File::delete(public_path().$record->photo);
            //放入圖片
            $path = FileController::imageUpload($request->file('photo'),'product');
            $requestData['photo'] = $path;
        } else{
            $requestData['photo'] = $record->photo;
        }
        
        $record->update($requestData);

        // $record->product_name = $request->product_name;
        // $record->price = $request->price;
        // $record->discript = $request->discript;
        
        
        if ($request->hasFile('photos')) {
          
            foreach ($request->File('photos') as $file) {
                $path = FileController::imageUpload($file,'product');
               
                ProductImg::create([
                    'product_id'=>$record->id,
                    'photos' => $path,   
                ]);
            }
            // dd('photos');
        }

        return redirect('/admin/product/item')->with('message', '更新產品成功!');
        
    }

    public function delete(Request $request, $id){

        $record = Product::with('photos')->find($id);
        //刪除主要圖片
        File::delete(public_path().$record->photo);
        //刪除其他圖片
        foreach ($record->photos as $photo) {
            File::delete(public_path().$photo->photos);
            $photo->delete();
        }
        $record->delete();
        return redirect('/admin/product/item')->with('message', '刪除產品品項成功!');
    }


    public function deleteImage(Request $request)
    {   //先透過ID找出要刪除的資料
        $old_record = ProductImg::find($request->id);

        //  判斷要刪除檔案是否存在
        if (file_exists(public_path() . $old_record->photos)) {
            //如果檔案存在，就刪除檔案
            File::delete(public_path() . $old_record->photos);
        }
        $old_record->delete();

        return 'success';
    }

}
