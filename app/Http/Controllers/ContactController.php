<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller{
    public function submit(){
        return 'ok, lets go!';
    }

    public function submit_with_request(Request $req){
        dd($req);
    }
}
