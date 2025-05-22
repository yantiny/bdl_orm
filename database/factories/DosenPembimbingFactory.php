<?php

namespace Database\Factories;
use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DosenPembimbing>
 */
class DosenPembimbingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $mahasiswa = Mahasiswa::inRandomOrder()->first();
        return [
            "nama" => $this->faker->name(),
            "nidn" => $this->faker->unique()->numerify("########"),
            "mahasiswa_id" => $mahasiswa ? $mahasiswa->id : null,
        ];
    }
}
