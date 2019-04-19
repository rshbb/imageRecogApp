<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Users;
class crud extends Controller{
    public function auth(){
        $name = $_POST["name"];
        $pass = $_POST["password"];
        $check = Users::where("name",$name)->count();
        if($check == 0)
            return "<h1>USER DOESN'T EXIST</h1>";
        else{
            $org = Users::where("name",$name)->first();
            if($org->password == $pass){
                return view("landing");
            }
            else{
                return "Password is wrong";
            }
        }
    }
    public function register(){
        $name = $_POST["name"];
        $pass = $_POST["password"];
        $ver  = $_POST["password2"];
        //if username already exists then you cant create
        $entry = new Users;
        $entry->name = $name;
        $entry->password = $pass;
        $entry->save();
        return view("login");
    }
}
