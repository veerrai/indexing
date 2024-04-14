<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class AuthController extends Controller
{
  public function register(){
    return view('auth.register');
  }

  public function postregister(Request $request){
$request->validate([
"name" => "required",
"email" => "required|email|unique:users",
"password" => "required|min:4"
]);

$data = $request->all();
$this->create($data);

return redirect("auth.login")->withSuccess("User registered successfully");


  }

  public function create(array $data)
  {
      return User::create([
          "name" => $data["name"],
          "email" => $data["email"],
          "password" => bcrypt($data["password"]), // Use bcrypt to hash the password
      ]);
  }


  public function login(){
    return view('auth.login');
  }


  public function addlink(){
    return view ('auth.addlink');
  }
}
