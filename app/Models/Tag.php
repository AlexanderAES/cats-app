<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Models\Tag
 *
 * @property int $id
 * @property string $label
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Cat> $cats
 * @property-read int|null $cats_count
 * @method static \Database\Factories\TagFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereLabel($value)
 * @mixin \Eloquent
 */
class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['label'];
    public $timestamps = false;

    public function cats(): BelongsToMany
    {
        return $this->belongsToMany(Cat::class);
    }

}
