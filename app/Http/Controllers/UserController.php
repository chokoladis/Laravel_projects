<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function UserUpdate($id){
        $user = User::find($id);
        $user->update([
            // поля => значение
        ]);

        return view('page-account', [ 'data' => $user->find($id)]);
    }
    
    public function UserDelete($id){

        $user = User::find($id);
        $user->delete();
        return redirect()->route('page-account')->with('success', 'Сообщение успешно удалено');

    }
}
