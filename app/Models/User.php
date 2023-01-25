<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'fio',
        'email',
        'username',
        'password'
    ];

    public function setPasswordAttribute($value) {
        $this->attributes['password'] = bcrypt($value);
    }

    public function toDoList() {
        return $this->belongsToMany('App\ToDoList');
    }
}
