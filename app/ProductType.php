<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    //
    protected $fillable = ['type_name'];

    public function product()
    {
                            //('對方Model','自己的要對到的','對方的要對到的')
        return $this->hasMany('App\Product', 'product_type_id', 'id');
        // return $this->hasMany(Product::class);
    }
}
