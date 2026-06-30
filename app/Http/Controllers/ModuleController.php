<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function show($id)
    {
        // Menampilkan UI halaman materi video
        return view('materi.show');
    }
}