<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Item extends Model
{
    use HasFactory;
    
    // public function variant(): HasManyThrough
    // {
    //     return $this->hasManyThrough(Image::class, ItemVariant::class);
    // }

    public function image(): HasMany
    {
        return $this->hasMany(Image::class);
    }
}
