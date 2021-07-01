<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    //
    protected $table = 'contact_us'; // 確保 Model 與 table 綁定在一起
    protected $fillable = ['name', 'email', 'title', 'content'];
}
