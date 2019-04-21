<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Users;
class crud extends Controller{
    public function auth(Request $request){
        //create session of user and move him to landing page
        $name = $_POST["name"];
        $pass = $_POST["password"];
        $count = Users::where("name","=",$name)->count();
        if($count == 1){
            $user = Users::where("name",'=',$name)->first();
            if($user->password != $pass){
                return "WRONG PASSWORD";
            }
            $request->session()->put(["login" => $user->id]);
            //get method is used to fetch the id from session
            return view("landing");
        }
        else{
            return "USER DOESN'T EXIST";
        }
    }
    public function register(){
        $name = $_POST["name"];
        $pass = $_POST["password"];
        $pass2 = $_POST["password2"];
        //Check whether user exist already or not
        if(Users::where("name","=",$name)->count()){
            return "USER ALREADY EXISTS";
        }
        else if($pass == $pass2){
            $newUser = new Users;
            $newUser->name = $name;
            $newUser->password = $pass;
            $newUser->save();
            return redirect("/");
        }
        else{
            return "PASSWORDS DO NOT MATCH";
        }
    }
}
