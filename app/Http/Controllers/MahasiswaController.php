<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all(); // Mengambil semua data mahasiswa
        return $mahasiswa;
    }
    public function DeleteMahasiswa(){
        $mahasiswa = Mahasiswa::find(2);

        $mahasiswa->delete();
        return $mahasiswa;
    }

    public function UpdateMahasiswa(){
        $mahasiswa = Mahasiswa::find(3);

        $mahasiswa->nama = "Marcellus Armstrong";
        $mahasiswa->save();
    }
}
