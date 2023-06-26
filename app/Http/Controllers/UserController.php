<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserController extends Controller
{
    public function index(){
       return view('index');
    }

    public function register(){
        return view('register');
    }

    public function verify(){
        return view('otp_verification');
    }
    
    public function user_dashboard(){
        return view('pages.user_dashboard');
    }

    public function admin_dashboard(){
        return view('pages.admin_dashboard');
    }

    public function add_user(Request $request){
        $validated = $request->validate([
            "firstname" => ['required'],
            "middlename" => ['required'],
            "lastname" => ['required'],
            "birthdate" => ['required'],
            "address" => ['required'],
            "mobile_number" => ['required'],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            "password"=> 'required|confirmed|min:6',
            "access" => ['required']
        ]);

        $validated['password'] = Hash::make($validated['password']); //pwede bycrypt instead hash:make
        

        $user = User::create($validated);

        auth()->login($user);
        if(auth()->user()->access == "0"){
            $name = auth()->user()->firstname;
            return redirect('/user_dashboard')->with('message', 'Welcome, '.$name.'!');
        }
        return redirect('/admin_dashboard')->with('message', 'Welcome!');
        
    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function login(Request $request){
        $validated = $request->validate([
            "email" => ['required', 'email'],
            "password"=> 'required'
        ]);

        if(auth()->attempt($validated)){
            $request->session()->regenerate();

            $name = auth()->user()->firstname;

            if(auth()->user()->access == "0"){
                return redirect('/user_dashboard')->with('message', 'Welcome back, '.$name.'!');
            }
            return redirect('/admin_dashboard')->with('message', 'Welcome back, '.$name.'!');

        }

        return back()->withErrors(['email' => 'Email and Password does not match.'])->onlyInput('email');
    }

    
}
