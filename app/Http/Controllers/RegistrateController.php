<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegistrateRequest;
use Illuminate\Support\Facades\Auth;


class RegistrateController extends Controller
{
    public function show()
    {
        return view('auth.registrate');
    }

    public function newUser(RegistrateRequest $req){

        
        $User = User::create($req->validated());

        auth($User);
        // Auth::login($User);

        return redirect()->route('page-account')->with('success', 'Пользователь успешно добавлен');
    }

    public function allData(){
        $contact = new Contact();
        // dd($contact->all());
        
        // dd(Contact::all());

        return view('messages', ['data' => Contact::all() ]);
        // return view('messages', ['data' => $contact->inRandomOrder()->get() ]);
        // return view('messages', ['data' => $contact->orderBy('id', 'asc')->skip(2)->take(3)->get() ]);
        // return view('messages', ['data' => $contact->where('name', 'like', 'И%' )->get() ]);
    }

    public function messageOne($id){
        return view('messageOne', [ 'data' => Contact::find($id)]);
    }

}
