<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Users;
use App\DATA;

use Clarifai\API\ClarifaiClient;
use Clarifai\DTOs\Inputs\ClarifaiFileImage;
use Clarifai\DTOs\Outputs\ClarifaiOutput;
use Clarifai\DTOs\Predictions\Concept;
class crud extends Controller{
    private $imgDir = "images/";
    private $apiKey = "6b9991178a91426db65d15a73a91aea2";
    private function callAPI($imagePath){
        $client = new ClarifaiClient($this->apiKey);
        $model = $client->publicModels()->generalModel();
        $input = new ClarifaiFileImage(file_get_contents($imagePath));
        $resp = $model->predict($input)
                ->withModelVersionID("aa7f35c01e0642fda5cf400f543e7c40")
                ->executeSync();
        
        if($resp->isSuccessful()){
            $out = $resp->get();
            $out = $out->data();
            $res = '';
            for($i = 0;$i<3;$i++){
                $res .= $out[$i]->name();
                if($i != 2)
                    $res .= ',';
            }
            return $res;
        }
        else{
            return "FAILED";
        }

    }
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
            return redirect("/");
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
    public function create(Request $request){
        $file = $request->file("image");
        $fk = session("login");
        $fname = substr($file->getPathName(),5,strlen($file->getPathName())-1);
        $path = $this->imgDir.$fname.'.'.$file->extension();
        $entry = new DATA;
        $entry->uid = $fk;
        $entry->filePath = $fname;
        $entry->extension = $file->extension();
        //Save the file in server
        $file->move($this->imgDir,$fname.$file->getPathName() .'.'. $file->extension());
        $entry->result =  $this->callAPI($path);
        $entry->save();
        $images = DATA::where("uid","=",$fk)->get();
        return redirect("/");    
    }
}
