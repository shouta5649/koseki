<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class tasks extends Model
{
    use SoftDeletes;

    use HasApiTokens, HasFactory, Notifiable;

    public $timestamps = false;

    protected $table = 'tasks';

    protected $primaryKey = 'task_id';

    protected $fillable = [
        'task_id', 'task_name', 'task_det', 'task_date', 'task_datetime', 'task_pri', 'task_comp','task_reach','task_sta'
    ];


}
