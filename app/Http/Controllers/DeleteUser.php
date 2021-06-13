<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DeleteUser extends Controller
{
    public function deleteuser(Request $request){
        User::destroy($request->id);
        return redirect()->route('home')->with('Alert', 'Akun Berhasil Dihapus!');
    }
}
