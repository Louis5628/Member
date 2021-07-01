<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    //加 static 才可以呼叫這個 controller 的 function
    //在別的class 呼叫function 該function 必須是 static
    public static function imageUpload($file,$dir)//imageUpload取出file
    {

       //如上傳沒有資料夾
       if(!is_dir('upload/')) {
           //就創造一個上傳檔案資料夾
           mkdir('upload/');
       }

       if(!is_dir('upload/'.$dir.'/')) {
        //就創造一個上傳檔案資料夾
        mkdir('upload/'.$dir.'/');
    }
       //取得圖片附檔名
       $extension = $file->getClientOriginalExtension();
       //重新命名唯一亂數檔名
       $filename = md5(uniqid(rand())) . '.' . $extension;
       //重新賦予路徑變數，設定圖片儲存路徑
        //$path = '/upload/' . $filename;
       $path = '/upload/'.$dir.'/' . $filename;
       // dd('$filename' . '$extension');
       //上傳圖片並移動到對應位置
       move_uploaded_file($file, public_path() . $path);

       //function 執行完，將路徑回傳
       return $path;
    }



}
