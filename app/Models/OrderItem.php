<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    public function Order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function Product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
