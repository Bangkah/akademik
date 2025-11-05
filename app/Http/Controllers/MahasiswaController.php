<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $table = \App\Models\Mahasiswa::all();
        return view('mahasiswa.index', compact('table'));
    }

}
