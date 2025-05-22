<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenPembimbing extends Model
{
    /** @use HasFactory<\Database\Factories\DosenPembimbingFactory> */
    use HasFactory;

    protected $fillable = ["nama", "nidn", "mahasiswa_id"];


    public function Mahasiswa(){

        return $this->hasMany(Mahasiswa::class);
    }
}
