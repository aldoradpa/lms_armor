<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AcademyController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ProfileController;

// Route untuk Guest (Belum Login)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

// Route untuk User yang sudah Login (Peserta & Admin)
Route::middleware('auth')->group(function () {
    
    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Dashboard Utama
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Learning Path (Akademi)
    Route::get('/academy', [AcademyController::class, 'index'])->name('academy.index');
    Route::get('/academy/{id}', [AcademyController::class, 'show'])->name('academy.show');

    Route::get('/personal/sertifikasi', [PersonalController::class, 'sertifikasi'])->name('personal.sertifikasi');
    Route::get('/personal/perpustakaan', [PersonalController::class, 'perpustakaan'])->name('personal.perpustakaan');
    Route::get('/personal/forum', [PersonalController::class, 'forum'])->name('personal.forum');
    Route::get('/personal/webinar', [PersonalController::class, 'webinar'])->name('personal.webinar');

    // Modul & Materi Pembelajaran
    Route::get('/module/{id}', [ModuleController::class, 'show'])->name('module.show');
    
    // Kuis
    Route::get('/quiz/{id}', [QuizController::class, 'show'])->name('quiz.show');
    Route::post('/quiz/submit', [QuizController::class, 'submit'])->name('quiz.submit');
    Route::post('/quiz/retake', [QuizController::class, 'retake'])->name('quiz.retake');

    // Profil & Sertifikat
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/certificate/{id}/download', [ProfileController::class, 'downloadCertificate'])->name('certificate.download');

});

// (Opsional) Route khusus Super Admin nantinya bisa di-group pakai middleware terpisah
// Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () { ... });