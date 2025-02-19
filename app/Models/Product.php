<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    #One to Many (Inverse) / Belongs To
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function orderproducts()
    {
        return $this->hasMany(Orderproducts::class);
    }
    public function shopcart()
    {
        return $this->hasMany(Shopcart::class);
    }
}
