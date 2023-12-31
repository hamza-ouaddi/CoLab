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

    //Log user out
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out.');
    }

    //Show login user
    public function login(){
        return view('users.login');
    }

    //Authenticate User Login
    public function authenticate(Request $request){
        $formInputs = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(auth()->attempt($formInputs)){
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in.');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
