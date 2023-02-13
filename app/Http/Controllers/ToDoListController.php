<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Models\ToDoList;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\ToDoListRequest;

class ToDoListController extends BaseController
{
    public function index(){

        $todolist = ToDoList::all();

        if($todolist->isEmpty()) $todolist = false;

        return view('todolist')->with('todolist', $todolist);
    }

    public function indexPaginate(){

        
        $todolist = ToDoList::paginate(4);

        $todolist->withPath('/todolist');

        if($todolist->isEmpty()) $todolist = false;

        $count = ToDoList::all()->count();
        $qty_pages = $count/4;

        $data = [
            'todolist' => $todolist,
            'qtyPages' => ceil($qty_pages),
            'users' => User::all()
        ];

        return view('todolist')->with($data);
    }

    public function create(){
        return view('modals.todolist.todolist_add', [ 'users' => User::all()]);
    }

    public function store(ToDoListRequest $req){

        $task = new ToDoList();

        $req->validated();

        // dd($req);
        if($req->input('complited') == 'on'){
            $complited = 1;
        }else{
            $complited = 0;
        }

        $task->title = $req->input('title');
        $task->description = $req->input('description');
        $task->date_start = $req->input('date_start');
        $task->date_end = $req->input('date_end');
        
        $task->complited = $complited;
        $task->user_id = $req->input('user_id');

        // dd($req);
        $task->save();

        return redirect()->route('todolist.index')->with('success', 'Задача успешно добавлена');

    }
    
    public function edit($id){
        return view('modals.todolist.todolist_upd', [ 
            'task' => ToDoList::find($id),
            'users' => User::all()
        ]);
    }

    public function update(ToDoListRequest $req, $id){
        $task = ToDoList::find($id);
        
        $req->validate([
            'title'  => 'required|max:100',
            'date_start' => 'required',
        ]);

        if($req->input('complited') == 'on'){
            $complited = 1;
        }else{
            $complited = 0;
        }

        $task->title = $req->input('title');
        $task->description = $req->input('description');
        $task->date_start = $req->input('date_start');
        $task->date_end = $req->input('date_end');
        
        $task->complited = $complited;

        $task->save();
        
        // echo '{ "data": "Task'.$id.' success updated" }';
        return redirect()->route('todolist.index', $id)->with('success', 'Задача успешно изменена');
    }
    
    public function destroy($id){

        ToDoList::find($id)->delete();
        // echo '{ "data": "Task'.$id.' success deleted" }';

        return redirect()->route('todolist.index', $id)->with('success', 'Задача успешно удалена');
    }

}
