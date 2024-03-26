<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phonenumber',
        'address',
        'menu_name',
        'price',
        'menu_id',
        'quantity'
    ];
}
