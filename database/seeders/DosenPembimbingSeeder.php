<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenPembimbing extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DosenPembimbing::factory->count(10)->create();
    }
}
