<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $number
 * @property integer $score
 * @property Carbon $rolled_at
 */


class Game extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $casts = [
        'rolled_at' => 'datetime'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->rolled_at = now();
        });
    }

}
