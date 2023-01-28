<?php

namespace App\Http\Controllers;

use App\Models\ToDoList;
use Illuminate\Http\Request;
use App\Http\Requests\ToDoListRequest;

class ToDoListController extends Controller
{
    public function show(){

        $todolist = ToDoList::all();
        if($todolist->isEmpty()) $todolist = false;

        return view('todolist')->with('todolist', $todolist);
    }

    public function addTask(ToDoListRequest $req){

        $task = new ToDoList();

        $req->validate([
            'title'  => 'required|max:100',
            'date_start' => 'required',
        ]);

        if ($req->input('complited') == NULL){
            $req->complited = 0;
        } else {
            $req->complited = 1;
        }

        $task->title = $req->input('title');
        $task->description = $req->input('description');
        $task->date_start = $req->input('date_start');
        $task->date_end = $req->input('date_end');
        
        $task->complited = $req->complited;

        $task->save();

        return redirect()->route('page-todolist')->with('success', 'Задача успешно добавлена');

    }
    
}
