<?php

namespace App\Http\Controllers;


use App\Makul;
use App\User;
use App\Nilai;

use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::with(['mahasiswa'],['user'])->get(); //select * from nama_table
        return view('nilai.index', compact('nilai'));
    }

    public function create()
    {
        $makul = Makul::all();
        $user = User::all();
        return view('nilai.create',  compact('makul','user'));
    }

    public function store(Request $request) // dd($request->all());
    {
        Nilai::create($request->all());
        alert()->success('Sukses','Data Mahasiswa berhasil di simpan');
        return redirect()->route('nilai'); 
    }

    public function edit($id) 
    // dd($id);
    // dd($makul);
    {
        $makul = Makul::all();
        $user = User::all();
        $username = User::find($id);
        $nilai = Nilai::find($id); //select * from nama_table where id= $id;
        return view('nilai.edit', compact('nilai','username','user','makul'));
    }
    public function update(Request $request, $id)
    {
        $nilai = Nilai::find($id); //select * from nama_table where id= $id;
        $nilai->update($request->all());
        toast('Data Berhasl Diedit','success');
        return redirect()->route('nilai'); 
    }

    public function destroy($id)
    {
        $nilai = Nilai::find($id); //select * from nama_table where id= $id;
        $nilai->delete();
        alert()->warning('Sukses','Data Nilai Berhasil DiHapus');
        return redirect()->route('nilai'); 
    }
}
