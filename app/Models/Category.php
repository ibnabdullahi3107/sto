<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    // Define the relationship to the Product model
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id'); // 'category_id' is the foreign key column in the products table
    }

}
