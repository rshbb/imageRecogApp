<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DATA;
class main extends Controller{
    private $imgDir = "images/";
    public function login(){
        if(!session()->has("login"))
            return view("login");
        else
            return $this->mainPage();
    }
    public function signup(){
        return view("signup");
    }
    public function mainPage(){
        //Find all the images of logged in user
        $uid = session("login");
        $images = DATA::where("uid","=",$uid)->get();
        return view("landing",["images" => $images,"dir"=>$this->imgDir]);
    }
    public function logout(){
        session()->forget("login");
        return redirect("/");
    }
    public function upload(){
        return view("upload");
    }
}
