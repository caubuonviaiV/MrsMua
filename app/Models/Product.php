<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'content',
        'cat_id',
        'price',
        'price_sale',
        'active', 
        'thumb'
    ]; 

    public function productCategory()
    {
        return $this->hasOne(productCategory::class, 'id', 'cat_id')
        ->withDefault(['name' => '']);
    }
}
