<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\tasks;

class review extends Model
{
    use SoftDeletes;

    use HasApiTokens, HasFactory, Notifiable;

    public $timestamps = false;

    protected $table = 'review';

    protected $primaryKey = 'review_id';

    protected $fillable = [
        'review_id', 'review_ice', 'review_date', 'review_layer', 'review_genre', 'review_impre','task_id'
    ];
    public function tasks()
    {
        return $this->belongsTo(tasks::class,'task_id');
    }

}