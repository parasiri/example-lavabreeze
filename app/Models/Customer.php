<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    use HasFactory;

    protected $table = "customers";

   public function order():BelongsTo
    {
        return $this->belongsTo(orders::class, 'customers_id');
    }
}