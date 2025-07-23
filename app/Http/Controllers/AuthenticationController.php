<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthenticationController extends Controller
{
    public function login(Request $request){
       $credentials= $request->validate([
        'email'=>"required",
        'password'=>"required",
    ]);
    if(Auth::attempt($credentials)){
        return redirect("/admin/dashboard");
    }else{
        return redirect("/login");
    }
    }
    public function register(Request $request){
     $request->validate([
        'name'=>"required",
        'email'=>"required",
        'password'=>"required",
    ]);
    $user=User::create([
        "name"=>$request->name,
        "email"=>$request->email,
        "phone"=>"0175623",
        "password"=> bcrypt($request->password),

    ]);
    echo "registration successfull";
}

}
