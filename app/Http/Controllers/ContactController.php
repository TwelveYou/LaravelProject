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

    public function allData(){
        // $contact = new Contact(); // можно не указывать "()"
        // dd($contact->all()); // есть в классе "Model"
        
        // $cont = Contact::all();
        // dd($cont);

        // dd(Contact::all());

        // return view('messages', ['data' => 'hello']);

        // $contact->orderBy('id', 'asc')-> skip(1)->take(1)->get()
        return view('messages', ['data' => Contact::all()]);
        // return view('messages', ['data' => Contact::all()->where('subject', '=', 'Hello')->get()]);

    }

    public function showOneMessage($id){
        return view('oneMessage', ['data' => Contact::find($id)]);
    }

}
