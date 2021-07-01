<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //TYPE寫死的
    //TYPE['key']
    const TYPE = [
        // 'key' => 'value'
        'announcement' => '公告',
        'event' => '活動',
        'promotion' => '促銷'
    ];

    protected $fillable = ['type', 'publish_date', 'title', 'img', 'content'];
}
