<?php

namespace App\Http\Middleware;

use Closure;
use App\Users;
class auth{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
        $name = $_POST["name"];
        $pass = $_POST["password"];
        $result = Users::where("name",'=',$name)->first();
        if(!$result){
            //If user doesn't exist then redirect to home page
        }
        else if($result->password != $pass){
            //If user enters wrong password then redirect to home page
        }
        //Else proceed the flow of route
        return $next($request);
    }
}
