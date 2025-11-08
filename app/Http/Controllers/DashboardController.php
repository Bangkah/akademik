<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\Jurusan;
use App\Models\Prodi;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahMahasiswa = Mahasiswa::count();
        $jumlahJurusan = Jurusan::count();
        $jumlahProdi = Prodi::count();
        $jumlahDosen = Dosen::count();

        return view('dashboard', compact(
            'jumlahMahasiswa',
            'jumlahDosen',
            'jumlahJurusan',
            'jumlahProdi'
        ));
    }
}
