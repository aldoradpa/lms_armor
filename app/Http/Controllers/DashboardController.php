<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        $user = auth()->user();

        $depositos = [
            ['no_rekening' => '123.456.789', 'nominal' => 50000000, 'status' => 'Aktif']
        ];

        return view('dashboard', compact('user', 'depositos'));
    }
}