<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\State
 *
 * @property int $id
 * @property int $likes
 * @property int $views
 * @property int $cat_id
 * @method static \Database\Factories\StateFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|State newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State query()
 * @method static \Illuminate\Database\Eloquent\Builder|State whereCatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereLikes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereViews($value)
 * @mixin \Eloquent
 */
class State extends Model
{
    use HasFactory;

    protected $fillable = ['likes', 'views', 'cat_id'];
    public $timestamps = false;
}
