<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function Product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }


}
