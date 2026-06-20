<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'status',
        'name',
        'brand',
        'description',
        'price'
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'category_item');
    }

    public function likedUsers(){
        return $this->belongsToMany(User::class, 'likes');
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function purchase(): HasOne{
        return $this->hasOne(Purchase::class);
    }
}
