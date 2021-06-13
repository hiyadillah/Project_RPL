<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request){
        User::create([
            'name'=>$request->input("name"),
            'email'=>$request->input("email"),
            'password'=>Hash::make($request->input("password"))
        ]);

        return redirect()->route('auth.login');
    }

    public function login(Request $request){
        $user = User::where("email",$request->input("email"))->first();
        //dd($user);
        if($user == NULL){
            return redirect()->back()->with('alert', 'Email belum terdaftar!');
        }

        if(!Hash::check($request->input("password"),$user->password)){
            return redirect()->back()->with('alert','Password salah!');
        }

        Auth::login($user);
        return redirect()->route("dashboard");
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('auth.login');
    }
}
