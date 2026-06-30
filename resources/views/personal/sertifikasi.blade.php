@extends('layouts.app')

@section('content')
<!-- Custom Styles -->
<style>
    .bg-gradient-brand { background: linear-gradient(135deg, #0a1f5c, #0f2557, #1a3a7c); }
    .text-brand { color: #0a1f5c; }
    .bg-brand { background-color: #0f2557; }
    .bg-brand:hover { background-color: #1e3a8a; }
    
    .text-xs { font-size: 0.75rem; }
    .text-sm { font-size: 0.875rem; }
    
    .rounded-4 { border-radius: 1rem !important; }
    .rounded-5 { border-radius: 1.25rem !important; }
    
    .certificate-card {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .certificate-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 3rem rgba(0,0,0,0.1) !important;
    }

    .badge-soft-white {
        background-color: rgba(255, 255, 255, 0.15);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: white;
    }
</style>

<div class="d-flex flex-column gap-4">

    <!-- Breadcrumb -->
    <nav class="d-flex align-items-center gap-2 text-sm text-secondary">
        <a href="{{ route('dashboard') }}" class="text-decoration-none text-secondary text-primary-hover fw-medium">Beranda</a>
        <svg style="width: 14px; height: 14px;" class="text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        <span class="text-muted">Personal</span>
        <svg style="width: 14px; height: 14px;" class="text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        <span class="text-dark fw-bold">Sertifikasi</span>
    </nav>

    <!-- Header Banner -->
    <div class="position-relative bg-gradient-brand rounded-4 p-4 text-white overflow-hidden shadow-sm d-flex justify-content-between align-items-center">
        <!-- Decorative blobs -->
        <div class="position-absolute bg-white bg-opacity-10 rounded-circle" style="top: -2rem; right: 5rem; width: 8rem; height: 8rem;"></div>
        <div class="position-absolute bg-white bg-opacity-10 rounded-circle" style="bottom: -3rem; right: -2rem; width: 12rem; height: 12rem;"></div>

        <div class="position-relative z-1">
            <h1 class="fw-bold mb-1 h3">Koleksi Sertifikat Saya</h1>
            <p class="mb-0 text-white-50 text-sm">Unduh, cetak, atau bagikan pencapaian yang telah Anda raih.</p>
        </div>
        
        <div class="position-relative z-1 text-center bg-white bg-opacity-10 rounded-4 p-3 border border-light border-opacity-25 d-none d-md-block">
            <p class="text-xs text-white-50 mb-0 text-uppercase tracking-wider">Total Sertifikat</p>
            <p class="h2 fw-bold text-white mb-0">4</p>
        </div>
    </div>

    <!-- Filter & Sort (Opsional) -->
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mt-2">
        <div class="d-flex gap-2">
            <button class="btn bg-brand text-white rounded-pill px-4 py-2 text-sm fw-bold shadow-sm">Semua</button>
            <button class="btn btn-white border rounded-pill px-4 py-2 text-sm fw-medium text-muted hover-bg-light">Funding</button>
            <button class="btn btn-white border rounded-pill px-4 py-2 text-sm fw-medium text-muted hover-bg-light">Kredit</button>
            <button class="btn btn-white border rounded-pill px-4 py-2 text-sm fw-medium text-muted hover-bg-light">Collection</button>
        </div>
        <div class="input-group" style="width: 250px;">
            <span class="input-group-text bg-white border-end-0 text-muted">
                <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            </span>
            <input type="text" class="form-control border-start-0 ps-0 text-sm" placeholder="Cari sertifikat...">
        </div>
    </div>

    <!-- Sertifikat Grid -->
    <div class="row g-4 mt-1">

        @php
            $sertifikats = [
                [
                    'title' => 'Certified Funding Basic Officer',
                    'category' => 'Akademi Funding',
                    'date' => '20 Mei 2024',
                    'score' => '86',
                    'id_cert' => 'CFBO/2024/05/00012',
                    'color' => 'success'
                ],
                [
                    'title' => 'Certified Credit Basic Officer',
                    'category' => 'Akademi Kredit',
                    'date' => '15 April 2024',
                    'score' => '92',
                    'id_cert' => 'CCBO/2024/04/00045',
                    'color' => 'primary'
                ],
                [
                    'title' => 'Certified Service Basic Officer',
                    'category' => 'Akademi Service',
                    'date' => '10 Maret 2024',
                    'score' => '88',
                    'id_cert' => 'CSBO/2024/03/00089',
                    'color' => 'warning'
                ],
                [
                    'title' => 'Basic Anti-Fraud Awareness',
                    'category' => 'Akademi Kepatuhan',
                    'date' => '02 Februari 2024',
                    'score' => '95',
                    'id_cert' => 'CBAF/2024/02/00102',
                    'color' => 'danger'
                ],
            ];
        @endphp

        @foreach($sertifikats as $s)
        <div class="col-12 col-md-6 col-xl-4">
            <div class="card rounded-4 border-0 shadow-sm certificate-card h-100 overflow-hidden">
                
                <!-- Desain Atas Card Sertifikat -->
                <div class="bg-{{ $s['color'] }} bg-opacity-10 p-4 border-bottom border-{{ $s['color'] }} border-opacity-25 text-center position-relative">
                    
                    <!-- Badge Icon Kategori -->
                    <div class="position-absolute top-0 start-0 m-3">
                        <span class="badge bg-{{ $s['color'] }} bg-opacity-25 text-{{ $s['color'] }} rounded-pill text-xs px-2 py-1 border border-{{ $s['color'] }} border-opacity-25">
                            {{ $s['category'] }}
                        </span>
                    </div>

                    <div class="mt-4 mb-2">
                        <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center shadow-sm p-2 mb-3" style="width: 56px; height: 56px;">
                            <svg style="width: 28px; height: 28px;" class="text-{{ $s['color'] }}" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        </div>
                        <h4 class="fw-bold text-dark h6 lh-base px-2">{{ $s['title'] }}</h4>
                        <p class="text-xs text-muted mb-0">ID: {{ $s['id_cert'] }}</p>
                    </div>
                </div>

                <!-- Info Kelulusan -->
                <div class="card-body p-4 bg-white">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <p class="text-xs text-muted mb-1 text-uppercase tracking-wider">Tanggal Lulus</p>
                            <p class="text-sm fw-bold text-dark mb-0">{{ $s['date'] }}</p>
                        </div>
                        <div class="text-end">
                            <p class="text-xs text-muted mb-1 text-uppercase tracking-wider">Nilai Akhir</p>
                            <p class="text-lg fw-bolder text-{{ $s['color'] }} mb-0">{{ $s['score'] }}</p>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="d-flex gap-2">
                        <button class="btn btn-outline-secondary w-100 rounded-3 text-sm fw-bold d-flex align-items-center justify-content-center gap-2 py-2">
                            <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                            Lihat
                        </button>
                        <button class="btn bg-brand text-white w-100 rounded-3 text-sm fw-bold d-flex align-items-center justify-content-center gap-2 py-2">
                            <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                            Unduh
                        </button>
                    </div>
                </div>

            </div>
        </div>
        @endforeach

        <!-- Placeholder Belum Ada Sertifikat (Opsional, disembunyikan/muncul jika array kosong) -->
        @if(empty($sertifikats))
        <div class="col-12">
            <div class="bg-white rounded-4 border border-dashed border-2 border-secondary border-opacity-25 p-5 text-center shadow-sm">
                <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 64px; height: 64px;">
                    <svg style="width: 32px; height: 32px;" class="text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                </div>
                <h4 class="h5 fw-bold text-dark">Belum Ada Sertifikat</h4>
                <p class="text-muted text-sm max-w-sm mx-auto">Anda belum menyelesaikan program akademi apapun. Ayo mulai belajar dan dapatkan sertifikat pertamamu!</p>
                <a href="{{ route('dashboard') }}" class="btn bg-brand text-white rounded-3 px-4 py-2 mt-3 text-sm fw-bold">Mulai Belajar</a>
            </div>
        </div>
        @endif

    </div>
</div>
@endsection