<?php

namespace App\Http\Controllers;


use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;


class NewsController extends Controller
{
    //
    function __construct()
    {
        $this->index = 'admin.news.index';//變數宣告
        $this->create = 'admin.news.create';
        $this->edit = 'admin.news.edit';
        $this->show = 'admin.news.show';

    }

    public function index(){
        $list = News::orderby('id', 'asc')->get();
        return view($this->index, compact('list'));
    }


    public function create(){

        $type = News::TYPE;

        return view($this->create, compact('type'));
    }

    public function store(Request $request){

        if($request->hasFile('img')) {
            //用 $path 接住 return 的值
            $path = FileController::imageUpload($request->file('img'),'news');
                                    //img存到imageUpload裡
        }

        News::create([
            'type' => $request->type,
            'publish_date' => date('Y-m-d'),
            'title' => $request->title,
            'img' => $path??'',
            'content' => $request->content,
        ]);
        return redirect('/admin/news')->with('message', '新增消息成功!');
     }


     public function edit($id){
        $record = News::find($id);
        $type = News::TYPE;
        return view($this->edit, compact('record', 'type'));
    }
     

    public function update(Request $request, $id){


        $old_record = News::find($id);

        if($request->hasFile('img')) {
            //刪舊圖片
            File::delete(public_path() . $old_record->img);
            //抓圖片
            $file = $request->file('img');
            //如上傳沒有資料夾
            if(!is_dir('upload/')) {
                //就創造一個上傳檔案資料夾
                mkdir('upload/');
            }

            //取得圖片附檔名
            $extension = $request->img->getClientOriginalExtension();
            //重新命名唯一亂數檔名
            $filename = md5(uniqid(rand())) . '.' . $extension;
            //重新賦予路徑變數，設定圖片儲存路徑
            $path = '/upload/' . $filename;
            // dd('$filename' . '$extension');
            //上傳圖片並移動到對應位置
            move_uploaded_file($file, public_path() . $path);

            $old_record->img = $path;
        };
        
        $old_record->type = $request->type;
        $old_record->title = $request->title;
        $old_record->content = $request->content;
        $old_record->save();

        return redirect('/admin/news')->with('message', '編輯消息成功!');
        
    }

    public function delete(Request $request, $id){

        $old_record = News::find($id);
        File::delete(public_path() . $old_record->img);
        $old_record->delete();

        return redirect('/admin/news')->with('message', '刪除消息成功!');
    }






    // public function index(){
    //     // 判斷身分是否是admin，連到 Auth 的 Gate 的 Function

    //     if (Gate::allows('admin')) {
    //         return view('admin.news.index');
    //     } else {
    //         return 'not admin';
    //     };
    // }

    
}
