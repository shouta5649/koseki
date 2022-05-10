<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class tasks extends Model
{
    public $timestamps = false;
    
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = 'task_id';

    protected $fillable = [
        'task_id', 'task_name', 'task_det', 'task_date', 'task_datetime', 'task_pri', 'task_comp',
    ];
}
