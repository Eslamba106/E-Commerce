<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory , SoftDeletes ;
    protected $fillable = ['id', 'name', 'description', 'image_path', 'price', 'discount_price', 'category_id'];
    protected $table    = 'products';


    public function category(){
        return $this->belongsTo(Category::class , 'category_id');
    }
    public function productcolor(){
        return $this->hasMany(ProductColor::class , 'product_id');
    }
    public function productsize(){
        return $this->hasMany(ProductSize::class , 'product_id');
    }
    public function productcolorsize(){
        return $this->hasMany(ProductColorSize::class , 'product_id');
    }

    
}
