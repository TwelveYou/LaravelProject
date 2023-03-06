<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller{
    public function submit(){
        return 'ok, lets go!';
    }

    public function submit_with_request(Request $req){
        dd($req->input('subject'));
    }

    public function valid(Request $req){
        $validation = $req->validate([
            'subject' => 'required|min:5|max:50',
            'message' => 'required|min:15|max:500'
        ]);

        
    }

}
