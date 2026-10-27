<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function profil()
    {
        $mahasiswa = [
            ['id' => 1, 'nama' => 'Fauzian Mijil Darmawan', 'nim' => '242520046', 'prodi' => 'TI-A']
        ];

        return view('mahasiswa.index', compact('mahasiswa'));
    }
}