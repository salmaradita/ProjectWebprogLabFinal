<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Welcome extends Model
{
    use HasFactory;
    protected $table='welcome';
    protected $fillable = [
        'image',
        'name',
        'price',
        'desc',

    ];

    public function clothes(): HasMany
    {
        return $this->hasMany(clothes::class, 'welcome_id', 'id');
    }
}
