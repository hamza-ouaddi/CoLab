<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    
    //Show register user
    public function create(){
        return view('users.register');
    }

    //Create new user
    public function store(Request $request){
        $formInputs = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6'],
        ]);

        //Hash password
        $formInputs['password'] = bcrypt($formInputs['password']);

        //Create user
        $user = User::create($formInputs);

        //Login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in successfuly.');
    }
}
