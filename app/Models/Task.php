<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
    	"name", "due_at", "completed_at", "assigned_to", "assigned_by", "tagged", "is_completed", "completed"
    ] ;

}
