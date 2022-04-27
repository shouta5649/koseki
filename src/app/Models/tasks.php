<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class tasks extends Model
{
    use Notifiable;

    protected $fillable = [
        'task_id', 'task_name', 'task_det', 'task_date', 'task_datetime', 'task_pri', 'task_comp',
    ];
}
