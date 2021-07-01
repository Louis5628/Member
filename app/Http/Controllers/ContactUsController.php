<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    //
    function __construct()
    {
        $this->index = 'admin.contact_us.index';//變數宣告
        $this->edit = 'admin.contact_us.edit';

    }


    public function index(){
        $list = ContactUs::orderby('id', 'asc')->get();
        return view($this->index, compact('list'));
    }

    public function edit($id){
        $record = ContactUs::find($id);
        return view($this->edit, compact('record'));
    }

    public function delete($id){
        $old_record = Contactus::find($id);
        $old_record->delete();

        return redirect('/admin/contact_us')->with('message', '刪除聯絡我們成功!');
    }


     


}
