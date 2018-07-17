<?php

namespace App;

use App\Service;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'img_path', 'type', 'webshop_link'];

    public function service()
    {
        return $this->hasOne(Service::class);
    }
}
