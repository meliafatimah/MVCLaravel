<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request){
        return view('form');
    }
    public function welcome(Request $request){
        $firstname = $request['firstname'];
        $lastname = $request['lastname'];
        return view('welcome',['firstname'=>$firstname, 'lastname'=>$lastname]);
    }
}
