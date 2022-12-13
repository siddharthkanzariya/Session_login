<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

class mycontroller extends Controller
{
    public function home(){
        return view('home');
    }

    public function login(){
        return view('login');
    }


    public function process(request $request)
    {
        
       $name = $request->input('txt1');

        Session::put('txt1', $name);

        Session::get('txt1', $name);
       echo "Name is : ".$name;
       
        return view("home", ["Name is " => $name]);
    }

    public function Sessionremove(){
        Session::flush();
        return view('login');
    }
}
