<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $fillable = ['title', 'starts_at', 'ends_at'];

    protected $table = 'polls';

    public function options()
    {
        return $this->hasMany(Option::class);
    }

    public static function boot()
    {
        parent::boot();
        static::deleting(function ($poll) {
            $poll->options()->delete();
        });
    }
}
