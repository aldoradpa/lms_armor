<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademyController extends Controller
{
    public function index()
    {
        // Jika ada halaman list semua akademi (opsional)
        return view('academy.show');
    }

    public function show($type)
{
    // Cek apakah file view-nya ada, kalau tidak ada arahkan ke 404
    if (view()->exists("academy.{$type}")) {
        return view("academy.{$type}");
    }
    
    // Default jika funding yang dipanggil
    if ($type == 'funding') {
        return view('academy.show'); // Ganti file show.blade.php jadi funding.blade.php jika perlu
    }

    abort(404);
}
}