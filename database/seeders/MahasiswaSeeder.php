<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        Mahasiswa::factory()->count(2)->create();
    }
}

