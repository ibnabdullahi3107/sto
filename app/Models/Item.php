<?php

namespace App\Models;

use App\Models\Store;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['product_id',  'store_id', 'quantity', ];


    // Item Model
public function product()
{
    return $this->belongsTo(Product::class);
}

// Item Model
public function store()
{
    return $this->belongsTo(Store::class);
}

}
