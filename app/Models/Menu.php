<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    // protected $table = "menus";

    public function separate(): BelongsTo
    {
        return $this->belongsTo(categories::class, 'category_id');
    }
    public function contain():BelongsToMany
    {
        return $this->belongsToMany(order_items::class, 'contains');
    } 
}