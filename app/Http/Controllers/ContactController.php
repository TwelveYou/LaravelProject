<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest; 
use App\Models\Contact;

class ContactController extends Controller{
    public function submit(){
        return 'ok, lets go!';
    }

    public function submit_with_request(Request $req){
        dd($req->input('subject'));
    }

    public function valid(ContactRequest $req){
        $contact = new Contact(); // создаем объект класса модели Contact
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('home')->with('success', 'Сообщение успешно ушло');
    }

}
