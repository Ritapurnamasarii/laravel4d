<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
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
        return view('mahasiswa.create');
    }
}
