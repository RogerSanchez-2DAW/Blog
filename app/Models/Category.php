<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * @return HasMany
     * @description get all posts for the category
     */
    public function posts(): BelongsTo
    {
        return $this->hasMany(Post::class);
    }
}
