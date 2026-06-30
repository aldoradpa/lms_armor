<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }

    public function downloadCertificate($id)
    {
        // TODO: Logika generate PDF sertifikat
        return response("Ini nanti akan mendownload file PDF Sertifikat ID: " . $id);
    }
}