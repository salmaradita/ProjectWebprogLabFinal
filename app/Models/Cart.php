<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cart extends Model
{
    use HasFactory;
    protected $table='cart';
    protected $fillable = [
        'image',
        'name',
        'price',
        'desc',
    ];

    public function carts(): HasMany
    {
        return $this->hasMany(carts::class, 'cart_id', 'id');
    }
}
