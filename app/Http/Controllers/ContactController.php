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
        return view('one-message', ['data' => Contact::find($id)]);
    }

    public function updateMessage($id){
        $contact = new Contact();
        return view('update-message', ['data' => $contact->find($id)]);
    }

    public function updateMessageSubmit($id, ContactRequest $req){
        // $contact = Contact::find($id);
        $contacts = new Contact();
        $contact = $contacts->find($id);
        
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save(); 

        return redirect()->route('contact-data-one', $id)->with('success', 'Сообщение обновлено');
    }

    public function deleteMessage($id){
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Сообщение было удалено');
    }
}