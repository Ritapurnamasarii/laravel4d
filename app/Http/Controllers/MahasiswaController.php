<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\UserMhs;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    

    public function index()
    {
        $mahasiswa = Mahasiswa::all(); //select * from
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        $username = UserMhs::all();
        return view('mahasiswa.create', compact('username'));
    }

    public function store(Request $request) // dd($request->all());
    {
        Mahasiswa::create($request->all());
        alert()->success('Sukses','Data mata kuliah berhasil di simpan');
        return redirect()->route('mahasiswa'); 
    }

    public function edit($id) 
    // dd($id);
    // dd($makul);
    {
        $username = UserMhs::find($id);
        $mahasiswa = Mahasiswa::find($id); //select * from nama_table where id= $id;
        return view('mahasiswa.edit', compact('mahasiswa','username'));
    }

    public function update(Request $request, $id)
    {
        $username = UserMhs::find($id); //select * from nama_table where id= $id;
        $username->update($request->all());
        $mahasiswa = Mahasiswa::find($id); //select * from nama_table where id= $id;
        $mahasiswa->update($request->all());
        toast('Dara Mahasiswa Berhasil Diedit','success');
        return redirect()->route('mahasiswa'); 
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id); //select * from nama_table where id= $id;
        $mahasiswa->delete();
        $user = UserMhs::find($id); //select * from nama_table where id= $id;
        $user->delete();
        alert()->warning('Sukses','Data Mahasiswa Berhasil DiHapus');
        return redirect()->route('mahasiswa'); 
    }


}
