<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class main extends Controller{
    public function login(){
        return view("login");
    }
    public function signup(){
        return view("signup");
    }
    public function mainPage(){
        return view("landing");
    }
    public function logout(){
        return view("login");
    }
}
