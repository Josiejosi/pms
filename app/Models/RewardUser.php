<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RewardUser extends Model
{
    protected $fillable = [
        'user_id', 'reward_id',
    ] ;
}
