<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'destination',
        'phone',
        'goods_name',
        'color',
        'quantity',
    ];

    public function user(){
        $this->hasOne(User::class, 'user_id');
    }

}
