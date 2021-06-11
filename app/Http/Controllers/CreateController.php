<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;

class CreateController extends Controller
{
    private function storeImage(UploadedFile $file){
        $image_name = $file->getClientOriginalName();
        $file->move(public_path('images'), $image_name);
        return "/images/".$image_name;
    }

    public function register(Request $request){
        $image_path = '';
        if($request->hasFile('image')){
            $image_path = $this->storeImage($request->image);
        }
        Project::create([
            'name'=>$request->input("name"),
            'description'=>$request->input("description"),
            'expired'=>$request->input("expired"),
            'image_path'=>$image_path,
            'creator_id'=>Auth::id()
        ]);

        return redirect()->back()->with('alert', 'Project Berhasil Diunggah!');
    }
}
