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
            //Need to do redirection here
        }
        else if($result->password != $pass){
            //Need to do redirection here as well
        }
        return $next($request);
    }
}
