<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Users;
class crud extends Controller{
    public function auth(Request $request){
        //create session of user and move him to landing page
        $name = $_POST["name"];
        $id = Users::where("name","=",$name)->first()->id;
        $request->session()->put([$name => $id]);
        return "LOGGED IN SUCCESSFULLY";   
    }
    public function register(){
    }
}
