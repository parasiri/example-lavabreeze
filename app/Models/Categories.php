<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class categories extends Model
{
    use HasFactory;

    protected $table = "categories";

    public function separate():BelongsToMany
    {
        return $this->belongsToMany(menus::class, 'menu_id');
    }

    // public function 
}