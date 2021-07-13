<?php

namespace App\Http\Controllers;

use App\Makul;
use Illuminate\Http\Request;

class MakulController extends Controller
{
    public function index()
    {
        $makul = Makul::all(); //select * from nama_table
        return view('makul.index', compact('makul'));
    }

    public function create()
    {
        return view('makul.create');
    }

    public function store(Request $request) // dd($request->all());
    {
        Makul::create($request->all());
        alert()->success('Sukses','Data mata kuliah berhasil di simpan');
        return redirect()->route('makul'); 
    }

    public function edit($id) 
    // dd($id);
    // dd($makul);
    {
        $makul = Makul::find($id); //select * from nama_table where id= $id;
        return view('makul.edit', compact('makul'));
    }

    public function update(Request $request, $id)
    {
        $makul = Makul::find($id); //select * from nama_table where id= $id;
        $makul->update($request->all());
        toast('Data Berhasl Diedit','success');
        return redirect()->route('makul'); 
    }

    public function destroy($id)
    {
        $makul = Makul::find($id); //select * from nama_table where id= $id;
        $makul->delete();
        alert()->warning('Sukses','Data Mata Kuliah Berhasil DiHapus');
        return redirect()->route('makul'); 
    }
}
