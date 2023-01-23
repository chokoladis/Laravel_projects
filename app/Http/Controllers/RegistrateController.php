<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegistrateRequest;


class RegistrateController extends Controller
{
    // public function newUser(Request $req){

    //     $User = new User();
    //     $Mess = array();
    //     $Mess_status = 'error';
    //     $route = 'page-reg';

    //     if ($req->input('fio') == NULL || strlen($req->input('fio')) < 2){
    //         $Mess[] = 'Поле ФИО должно иметь более 1 символа';
    //     }
    //     if ($req->input('email') == NULL){
    //         $Mess[] = 'Поле Email должно иметь более 8 символов'; 
    //     }
    //     if ($req->input('password') == NULL || strlen($req->input('password'))){
    //         $Mess[] = 'Поле Пароль должно иметь более 5 символов';
    //     } 
    //     if($req->input('password') != $req->input('password_conf')){
    //         $Mess[] = 'Введите одинаковые пароли';
    //     }

    //     if (empty($Mess)){
    //         $Mess[] = 'Пользователь успешно добавлен';
    //         $Mess_status = 'success';
    //         $route = 'page-account';

    //         $User->fio = $req->input('fio');
    //         $User->email = $req->input('email');
    //         $User->password = $req->input('password');

    //         $User->save();
            
    //     }


    //     return redirect()->route($route)->with($Mess_status, $Mess);
    // }

    public function show()
    {
        return view('auth.registrate');
    }

    public function newUser(RegistrateRequest $req){

        
        $User = User::create($req->validated());

        auth()->login($User);

        return redirect()->route('page-account')->with('success', 'Пользователь успешно добавлен');
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
