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

    public function createMahasiswa()
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim = "1234567890";
        $mahasiswa->nama = "Marcellus Armstrong";
        $mahasiswa->jenis_kelamin = "perempuan";
        $mahasiswa->tanggal_lahir = "2000-01-01";
        $mahasiswa->alamat = "Jl. Contoh Alamat No. 123";
        $mahasiswa->jurusan = "Teknik Informatika";
        $mahasiswa->email = "marcellus@example.com";
        $mahasiswa->save();

    }
}
