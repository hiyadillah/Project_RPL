<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Rules\MatchOldPass;
use Illuminate\Support\Facades\Auth;

class ChangePasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('pages/changePassword');
    }

    public function store(Request $request){
        $request->validate([
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password']
        ]);

        User::find(Auth::user()->id)->update(['password'=>Hash::make($request->new_password)]);
        return redirect()->back()->with('alert','Password Berhasil Diganti!');
    }
}
