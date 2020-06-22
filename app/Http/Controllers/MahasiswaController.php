<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_mahasiswa = \App\Mahasiswa::where('nama','LIKE','%' .$request->cari. '%')->get();
        } else{
            $data_mahasiswa = \App\Mahasiswa::all();
        }
        return view('mahasiswa.index',['data_mahasiswa' => $data_mahasiswa]);
    }

    public function create(Request $request)
    {
        

        //Insert ke Table Users
        $user = new \App\User;
        $user->role = 'mahasiswa';
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt('rahasia');
        $user->remember_token = str_random(60);
        $user->save();

        //Insert ke Table Siswa
        $request->request->add(['user_id' => $user->id]);
        $mahasiswa = \App\Mahasiswa::create($request->all());
        

        return redirect('/mahasiswa')->with('sukses','Data berhasil disimpan');

    }

    public function edit($id)
    {
        $mahasiswa = \App\Mahasiswa::find($id);
        return view('mahasiswa/edit',['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = \App\Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $mahasiswa->avatar = $request->file('avatar')->getClientOriginalName();
            $mahasiswa->save();
        }
        return redirect('/mahasiswa')->with('sukses', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $mahasiswa = \App\Mahasiswa::find($id);
        $mahasiswa->delete($mahasiswa);
        return redirect('/mahasiswa')->with('sukses','Data berhasil dihapus');
    }

    public function profile($id)
    {
        $mahasiswa = \App\Mahasiswa::find($id);
        return view('mahasiswa.profile', ['mahasiswa' => $mahasiswa]);
    }
}
