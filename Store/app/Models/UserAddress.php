<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'user_id', 'address', 'city', 'status', 'country', 'postal_code', 'phone', 'email', 'name', 'sername'];
    protected $table    = 'user_addresses';

    public function user(){
        return $this->belongsTo(User::class );

    }
}
