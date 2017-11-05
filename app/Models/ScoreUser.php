<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScoreUser extends Model
{
    protected $fillable = [
        'user_id', 'month', 'score',
    ] ;
}
