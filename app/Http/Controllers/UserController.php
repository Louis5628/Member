<?php

namespace App\Http\Controllers;

use App\User;
use App\UserClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //PHP語法，建構子，宣告在class內
    function __construct()
    {
        $this->index = 'admin.user.index';//變數宣告
        $this->create = 'admin.user.create';
        $this->edit = 'admin.user.edit';
        $this->show = 'admin.user.show';

    }

    public function index(){
        $list = User::orderby('id', 'asc')->get();
        return view($this->index, compact('list'));
    }

    
    public function create(){
        return view($this->create);
    }


    public function store(Request $request)
    {
        //判斷以下三個值是否正確
        //用變數存validation 的 True or False，只要下列三個有一個錯誤就是False
        $v = Validator::make($request->all(), [
            //'欄位' => ['驗證規則']
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:App\User,email'],//unique 判斷是否唯一，抓App\User的email值
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            //confirmed 在 前端也要有後綴 _confirmed
        ]);

        //如果 False 要做什麼事，倒回原本頁面，並出現錯誤訊息(resource->lang->validation)
        if ($v->fails()) {
            return redirect()->back()->withErrors($v->errors());
        }

        $new_record = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => $request['role'], 
        ]);

        if($request->role == 'user'){
            UserClient::create([
                'phone' => $request['phone'],
                'address' => $request['address'],
                'user_id' => $new_record->id,
            ]);
        }
        //new
        $role = User::get();

        return redirect('/admin/user', compact('role'))->with('message', '新增會員成功!');
    }


    public function edit($id){
        $record = User::find($id);
        return view($this->edit, compact('record'));
    }

    public function update(Request $request, $id){
        $v = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        if ($v->fails()) {
            return redirect()->back()->withErrors($v->errors());
        }

        $old_record = User::find($id);
        $old_record->name = $request->name;
        $old_record->password = Hash::make($request->password);
       
        $old_record->save();

        if($old_record->role == 'user'){
            //where 出來的資料會是多筆資料，就算只找出一筆也是陣列，必須要先改為一筆資料才能操作
            $old_client_record = UserClient::where('user_id', $old_record->id)->first();
            $old_client_record->phone = $request->phone;
            $old_client_record->address = $request->address;
            $old_client_record->save();
        }

        return redirect('/admin/user')->with('message', '更新會員成功!');
    }


    public function delete(Request $request, $id){
        $old_record = User::find($id);
        if($old_record->client){
            $old_record->client->delete();
        }
        $old_record->delete();

        return redirect('/admin/user')->with('message', '刪除會員成功!');
    }







}

