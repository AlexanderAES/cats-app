<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Models\Cat
 *
 * @property int $id
 * @property string $breed
 * @property string $slug
 * @property string $color
 * @property string $age
 * @property string $sex
 * @property string $size
 * @property string $description
 * @property \Illuminate\Support\Collection $img
 * @property int $price
 * @property int $sale
 * @property bool $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Comment> $comments
 * @property-read int|null $comments_count
 * @property-read \App\Models\State|null $state
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Tag> $tags
 * @property-read int|null $tags_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Database\Factories\CatFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Cat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cat query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cat whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cat whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cat whereBreed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cat whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cat whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cat whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cat wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cat whereSale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cat whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cat whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cat whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cat whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
