<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_item extends Model
{
    use HasFactory;

    protected $table = "order_items";
/* 
    public function match():hasMany
    {
        return $this->hasMany(orders::class, 'order_id');
    }

    public function contain():BelongsToMany
    {
        return $this->belongsToMany(menus::class, 'menu_id');
    }

    public function contain():BelongsToMany
    {
        return $this->belongsToMany(order_items::class, 'contains');
    } */
}