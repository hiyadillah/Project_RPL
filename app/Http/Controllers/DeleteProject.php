<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class DeleteProject extends Controller
{
    public function deletepro(Request $request){
        Project::destroy($request->id);
        return redirect()->back()->with('Alert', 'Project Berhasil Dihapus!');
    }
}
