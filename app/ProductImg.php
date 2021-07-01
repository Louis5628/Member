<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImg extends Model
{
    //
    protected $fillable = ['photos', 'product_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
