<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $jenis_kelamin = ["laki-laki", "perempuan"];

        $jurusan = ["Teknik Informatika", "Sistem Informasi", "Sistem Informasi Akutansi"];
        
        return [
            'nim' => $this->faker->unique()->numerify('########'), // 8 digit NIM
            'nama' => $this->faker->name(),
            'jenis_kelamin' => $this->faker->randomElement($jenis_kelamin),
            'email' => $this->faker->unique()->safeEmail(),
            'alamat' => $this->faker->address(),
            'jurusan' => $this->faker->randomElement($jurusan),
            'tanggal_lahir' => $this->faker->date('Y-m-d', '2003-12-31'),
        ];
    }
}
