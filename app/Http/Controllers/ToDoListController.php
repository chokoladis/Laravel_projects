<?php

namespace App\Http\Controllers;

use App\Models\ToDoList;
use Illuminate\Http\Request;
use App\Http\Requests\ToDoListRequest;

class ToDoListController extends Controller
{
    public function show(){

        $todolist = ToDoList::all();

        // $todolist = ToDoList::paginate(4);
    
        // $todolist->withPath('/todolist');

        if($todolist->isEmpty()) $todolist = false;

        return view('todolist')->with('todolist', $todolist);
    }

    public function showWithNav(){

        $todolist = ToDoList::paginate(4);
    
        $todolist->withPath('/todolist');

        if($todolist->isEmpty()) $todolist = false;

        $count = ToDoList::all()->count();
        $qty_pages = $count/4;

        $data = [
            'todolist' => $todolist,
            'qtyPages' => ceil($qty_pages)
        ];

        return view('todolist')->with($data);
    }



    public function addTask(){
        return view('modals.todolist_add');
    }

    public function addTaskSubmit(ToDoListRequest $req){

        $task = new ToDoList();

        $req->validate([
            'title'  => 'required|max:100',
            'date_start' => 'required',
        ]);

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

        $task->save();

        return redirect()->route('page-todolist')->with('success', 'Задача успешно добавлена');

    }
    
    public function updTask($id){
        return view('modals.todolist_upd', [ 'task' => ToDoList::find($id)]);
    }

    public function updTaskSubmit(ToDoListRequest $req, $id){
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
        return redirect()->route('page-todolist', $id)->with('success', 'Задача успешно изменена');
    }
    
    public function delTaskSubmit($id){

        ToDoList::find($id)->delete();
        // echo '{ "data": "Task'.$id.' success deleted" }';

        return redirect()->route('page-todolist', $id)->with('success', 'Задача успешно удалена');
    }

}
