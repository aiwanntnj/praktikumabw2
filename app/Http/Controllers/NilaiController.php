<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function showNilaiMahasiswa($mahasiswaId)
    {
        $mahasiswa = Mahasiswa::find($mahasiswaId);
        if (!$mahasiswa) {
            return response()->json(['message' => 'Mahasiswa not found'], 404);
        }

        return view('nilai_mahasiswa', ['mahasiswa' => $mahasiswa]);
    }
}

