<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'tracking_number',
        'destination',
        'content',

    ];

}
