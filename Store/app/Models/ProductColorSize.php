<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColorSize extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'product_color_id', 'product_size_id', 'quantity', 'second_price', 'discount', 'status'];
    protected $table    = 'product_color_size';

    public function productcolor(){
        return $this->belongsTo(ProductColor::class );
    }
    public function productsize(){
        return $this->belongsTo(ProductSize::class );
    }
}
