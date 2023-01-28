<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDoList extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'date_start_task',
        'date_end_task'
    ];


    public function users(){
        return $this->belongsToMany('App\User');
    }
}
