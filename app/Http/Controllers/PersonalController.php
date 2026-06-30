<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function sertifikasi()
    {
        // Mengarah ke file resources/views/personal/sertifikasi.blade.php
        return view('personal.sertifikasi'); 
    }

    public function perpustakaan()
    {
        return view('personal.perpustakaan'); 
    }

    public function forum()
    {
        return view('personal.forum'); 
    }

    public function webinar()
    {
        return view('personal.webinar'); 
    }
}