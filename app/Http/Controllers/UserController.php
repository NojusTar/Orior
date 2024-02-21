<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function create()
    {
        return view("user.register");
    }

    public function store(Request $request) 
    {
        $formFields = $request->validate([
            "name" => ["required" ,"min:3"],
            "email" => ["required", "email", Rule::unique("users", "email")],
            "password" => ["required", "confirmed", "min:5"]
        ]);

        //hash pass
        $formFields["password"] = bcrypt($formFields["password"]);

        //create user
        $user = User::create($formFields);

        //login
        auth()->login($user);

        return redirect("/")->with("message", "account created and logged in!");
    }
}
