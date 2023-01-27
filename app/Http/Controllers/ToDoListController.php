<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ToDoList;

class ToDoListController extends Controller
{
    public function show(){
        return view('todolist');
    }

    public function addTask(){
        
        return '1';
    }
}
