<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function profile()
    {
        return view('/profile');
    }
    public function profile_picture(Request $req)
    {
        if($req->hasFile('picture')){
            Storage::disk('public')->delete('picture/'.auth()->user()->picture);
            $file_name = $req->picture->getClientOriginalName();
            $req->picture->StoreAs('picture',$file_name,'public');
            auth()->user()->update([
                'picture' => $file_name
            ]);
            return back();
        }else{
            return back();
        }
       
    }
}
