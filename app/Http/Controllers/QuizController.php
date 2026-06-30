<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function show($id)
    {
        // Dummy data untuk ngetes UI. 
        // Silakan ganti status ini jadi 'pending', 'failed', 'passed', atau 'taking' untuk melihat perubahan UI-nya.
        $data = [
            'quizStatus' => 'taking', // Status default: user sedang mengerjakan
            'score' => 60
        ];

        return view('quiz.show', $data);
    }

    public function submit(Request $request)
    {
        // TODO: Logika hitung nilai pilihan ganda
        // Setelah submit, kita lempar kembali ke halaman kuis dengan pesan sukses
        return redirect()->back()->with('success', 'Kuis berhasil disubmit. Menunggu penilaian admin.');
    }

    public function retake(Request $request)
    {
        // TODO: Logika hapus history nilai sebelumnya dan reset status
        return redirect()->back();
    }
}