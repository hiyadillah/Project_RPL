<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function profile(){
        $user = Auth::user();
        return view('pages.profile', compact('user'));
    }

    public function myproject(){
        $user = Auth::user();
        $user->load('projects');
        return view('pages.mypro', compact('user'));
    }

    public function showpro(){
        $projects = Project::all();
        return view('pages.dashboard', compact('projects'));
    }

    public function lihatpro($id){
        $projects = Project::find($id);
        return view('pages.project', compact('projects'));
    }

    public function search(Request $request){
        $projects = Project::where('name', 'LIKE' , '%'.$request->input('name').'%')->get();
        return view('pages.search', compact('projects'));
    }
}
