<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DosenPembimbing;

class DospemController extends Controller
{
    public function index()
    {
        $dospem = DosenPembimbing::all(); // Mengambil semua data dospem
        return $dospem;
    }
}
