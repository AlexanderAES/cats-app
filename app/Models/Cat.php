<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Cat extends Model
{
    use HasFactory;

    protected $fillable = ['breed', 'slug',
        'color', 'age', 'sex', 'size',
        'description', 'img', 'price',
        'sale', 'active'];

    protected $casts = [
        'img' => 'collection',
        'active' => 'bool',
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function state(): HasOne
    {
        return $this->hasOne(State::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

}
