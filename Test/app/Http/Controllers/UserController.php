<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //
    public function create() {
        return view('user.register');
    }
    public function login() {
        return view('user.login');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password'=>'required|confirmed|min:6',
            'password_confirmation'=>'required|min:6'
        ]);
        //has password
        $formFields['password'] = bcrypt($formFields['password']);

        $user =  User::create($formFields); 

        $formFields['password_confirmation'] = bcrypt($formFields['password_confirmation']);

        $user =  User::create($formFields); 


        DB::insert('insert into users (name, email, password) values ('.$formFields.')');
        
        return redirect('/')->with('message', 'user created');
    }
    public function logins(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
    
        $email = $formFields['email'];
        $password = $formFields['password'];
    
        $user = User::where('email', $email)->first();
    
        if ($user) {
            // Porównaj hasła
            if (Hash::check($password, $user->password)) {
                // Dodaj imię do sesji
                Session::put('name', $user->name);
                return redirect('/start')->with('message', 'Login successful');
            } else {
                return redirect('/login')->with('message', 'Email or Password is not correct');
            }
        } else {
            return redirect('/login')->with('message', 'Email or Password is not correct');
        }
    }
}
