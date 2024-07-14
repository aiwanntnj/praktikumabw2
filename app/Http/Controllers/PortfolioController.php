<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function profil()
    {
        $nama = 'BAMBANG SAKTIAWAN';
        $npm = '218160023';
        return view('profil', compact('nama', 'npm'));
    }

    public function pendidikan()
    {
        $kampus = 'UNIVERSITAS MEDAN AREA';
        $prodi = 'TEKNIK INFORMATIKA';
        return view('pendidikan', compact('kampus', 'prodi'));
    }

    public function keahlian()
    {
        $skills = ['DESAIN GRAFIS', 'UI/UX DESIGN', 'WEB DEVElOPER'];
        return view('keahlian', compact('skills'));
    }
}
