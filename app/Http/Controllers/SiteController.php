<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('sites.home');
    }

    public function about()
    {
        return view('sites.about');
    }

    public function contact()
    {
        return view('sites.contact');
    }

    public function register()
    {
        return view('sites.register');
    }

    public function postregister(Request $request)
    {
        $user = new \App\User;
        $user->role = 'mahasiswa';
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = str_random(60);
        $user->save();

        $request->request->add(['user_id' => $user->id]);
        $mahasiswa = \App\Mahasiswa::create($request->all());

        return redirect('/')->with('sukses', 'Anda telah terdaftar!');
    }
}
