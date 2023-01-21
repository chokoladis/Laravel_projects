<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Registrate extends Controller
{
    public function newUser(Request $req){

        $User = new User();
        $User->fio = $req->input('fio');
        $User->email = $req->input('email');
        $User->password = $req->input('password');

        $User->save();

        return redirect()->route('page-account')->with('success', 'Сообщение успешно отправлено');

        return view('registrate');
    }

    public function test(){
        $user = User::find(1);
        dump($user);
    }


    // 
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

    public function messageUpdate($id){
        $contactUpdate = new Contact();
        return view('messageUpdate', [ 'data' => $contactUpdate->find($id)]);
    }

    public function messageUpdateSubmit(ContactRequest $request, $id){
      
        $contact_mess = Contact::find($id);
        $contact_mess->name = $request->input('name');
        $contact_mess->email = $request->input('email');
        $contact_mess->message = $request->input('message');

        $contact_mess->save();

        return redirect()->route('contact-message-update', $id )->with('success', 'Сообщение успешно изменено');
    }

    public function messageDelete($id){

        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Сообщение успешно удалено');

    }
}
