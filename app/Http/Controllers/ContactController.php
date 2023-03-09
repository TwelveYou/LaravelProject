<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller{
    public function submit(){
        return 'ok, lets go!';
    }

    public function submit_with_request(Request $req){
        dd($req->input('subject'));
    }

    public function valid(ContactRequest $req){
        // $validation = $req->validate([
        //     'subject' => 'required|min:5|max:50',
        //     'message' => 'required|min:15|max:500'
        // ]);

        
    }

}
