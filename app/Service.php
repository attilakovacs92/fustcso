<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['product_id', 'description'];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
