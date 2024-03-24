<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
à¸µ

class orders extends Model
{
    use HasFactory;

    protected $table = "orders";
    protected $primartKey = "order_id";
/* 
    public function order():HasMany
    {
        return $this->hasMany(customers::class, 'order_id');
    }

    public function match(): BelongsTo
    {
        return $this->belongsTo(order_item::class, 'order_item_id');
    } */
}