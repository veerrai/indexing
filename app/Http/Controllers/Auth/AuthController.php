<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function postregister(Request $request)
    {
        $request->validate([
            "username" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|min:4"
        ]);

        $data = $request->all();
        $this->create($data);

        return redirect()->route("auth.login")->withSuccess("User registered successfully");
    }

    public function create(array $data)
    {
        return User::create([
            "username" => $data["username"],
            "email" => $data["email"],
            "password" => bcrypt($data["password"]),
        ]);
    }

    public function login()
    {
        return view('auth.login');
    }

    public function addlink()
    {
        return view('auth.addlink');
    }
}
