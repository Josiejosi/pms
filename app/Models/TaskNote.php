<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskNote extends Model
{
    protected $fillable = [
    	"name", "description", "task_id",
    ] ;
}
