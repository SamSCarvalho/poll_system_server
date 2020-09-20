<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = ['describe', 'votes'];

    protected $table = 'options';

    public function poll()
    {
        return $this->belongsTo(Poll::class);
    }
}
