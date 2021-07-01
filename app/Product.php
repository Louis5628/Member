<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['product_name', 'price', 'photo','discript', 'product_type_id'];

    public function type()
    {
        return $this->hasOne('App\ProductType', 'id', 'product_type_id');
        // return $this->belongsTo(ProductType::class, 'product_type_id');
    }

    public function photos()
    {
        return $this->hasMany('App\ProductImg','product_id', 'id');
        // return $this->hasMany(ProductImg::class, 'product_id');
    }

}
