@extends('layouts.app')

@section('content')
<style>
    .bg-gradient-brand { background: linear-gradient(135deg, #0a1f5c, #0f2557, #1a3a7c); }
    .text-brand { color: #0a1f5c; }
    .bg-brand { background-color: #0f2557; }
    .bg-brand:hover { background-color: #1e3a8a; }
    
    .text-xs { font-size: 0.75rem; }
    .text-sm { font-size: 0.875rem; }
    
    .rounded-4 { border-radius: 1rem !important; }
    
    .book-card {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .book-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1) !important;
    }

    .book-cover {
        height: 160px;
        background: linear-gradient(135deg, #f1f5f9, #e2e8f0);
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }
</style>

<div class="d-flex flex-column gap-4">

    <nav class="d-flex align-items-center gap-2 text-sm text-secondary">
        <a href="{{ route('dashboard') }}" class="text-decoration-none text-secondary text-primary-hover fw-medium">Beranda</a>
        <svg style="width: 14px; height: 14px;" class="text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        <span class="text-muted">Personal</span>
        <svg style="width: 14px; height: 14px;" class="text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        <span class="text-dark fw-bold">Perpustakaan Digital</span>
    </nav>

    <div class="position-relative bg-gradient-brand rounded-4 p-4 p-md-5 text-white overflow-hidden shadow-sm d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
        <div class="position-absolute bg-white bg-opacity-10 rounded-circle" style="top: -2rem; right: -2rem; width: 12rem; height: 12rem;"></div>
        
        <div class="position-relative z-1">
            <h1 class="fw-bold mb-2 h3">Perpustakaan Digital</h1>
            <p class="mb-0 text-white-50 text-sm" style="max-width: 500px;">Akses ribuan e-book, jurnal perbankan, regulasi terbaru, dan Standar Operasional Prosedur (SOP) BPR Arto Moro.</p>
        </div>
        
        <div class="position-relative z-1 d-flex gap-3">
            <div class="bg-white bg-opacity-10 rounded-4 p-3 border border-light border-opacity-25 text-center min-w-[100px]">
                <p class="text-xs text-white-50 mb-1 text-uppercase tracking-wider">Koleksi</p>
                <p class="h4 fw-bold text-white mb-0">124+</p>
            </div>
            <div class="bg-white bg-opacity-10 rounded-4 p-3 border border-light border-opacity-25 text-center min-w-[100px]">
                <p class="text-xs text-white-50 mb-1 text-uppercase tracking-wider">Kategori</p>
                <p class="h4 fw-bold text-white mb-0">8</p>
            </div>
        </div>
    </div>

    <div class="card rounded-4 border-0 shadow-sm p-3">
        <div class="d-flex flex-column flex-md-row gap-3 justify-content-between">
            
            <div class="d-flex flex-wrap gap-2">
                <button class="btn bg-brand text-white rounded-pill px-4 py-2 text-sm fw-bold">Semua</button>
                <button class="btn btn-outline-secondary border-opacity-25 rounded-pill px-4 py-2 text-sm fw-medium hover-bg-light">Modul Materi</button>
                <button class="btn btn-outline-secondary border-opacity-25 rounded-pill px-4 py-2 text-sm fw-medium hover-bg-light">SOP</button>
                <button class="btn btn-outline-secondary border-opacity-25 rounded-pill px-4 py-2 text-sm fw-medium hover-bg-light">Regulasi OJK</button>
                <button class="btn btn-outline-secondary border-opacity-25 rounded-pill px-4 py-2 text-sm fw-medium hover-bg-light">Jurnal</button>
            </div>

            <div class="input-group" style="max-width: 300px;">
                <span class="input-group-text bg-light border-end-0 text-muted">
                    <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </span>
                <input type="text" class="form-control bg-light border-start-0 ps-0 text-sm" placeholder="Cari judul buku atau dokumen...">
            </div>
        </div>
    </div>

    <div class="row g-4 mt-1">

        @php
            $books = [
                ['title' => 'Strategi Penyaluran Kredit UMKM', 'type' => 'Modul Materi', 'size' => '2.4 MB', 'format' => 'PDF', 'color' => 'primary', 'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253'],
                ['title' => 'SOP Penagihan & Recovery Asset', 'type' => 'SOP', 'size' => '1.1 MB', 'format' => 'PDF', 'color' => 'danger', 'icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'],
                ['title' => 'POJK Tata Kelola BPR 2024', 'type' => 'Regulasi OJK', 'size' => '5.6 MB', 'format' => 'PDF', 'color' => 'success', 'icon' => 'M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3'],
                ['title' => 'Teknik Negosiasi & Handling Complaint', 'type' => 'Modul Materi', 'size' => '3.2 MB', 'format' => 'PDF', 'color' => 'primary', 'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253'],
                ['title' => 'Jurnal Ekonomi Makro & Perbankan', 'type' => 'Jurnal', 'size' => '4.8 MB', 'format' => 'EPUB', 'color' => 'warning', 'icon' => 'M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z'],
                ['title' => 'Panduan Anti-Fraud (APU PPT)', 'type' => 'Modul Materi', 'size' => '1.9 MB', 'format' => 'PDF', 'color' => 'primary', 'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253'],
            ];
        @endphp

        @foreach($books as $b)
        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
            <div class="card rounded-4 border-0 shadow-sm book-card h-100 overflow-hidden">
                
                <div class="book-cover bg-{{ $b['color'] }}-subtle">
                    <div class="position-absolute top-0 end-0 m-2">
                        <span class="badge bg-white text-{{ $b['color'] }} shadow-sm text-xs">{{ $b['format'] }}</span>
                    </div>
                    
                    <div class="bg-white rounded-circle p-3 shadow-sm text-{{ $b['color'] }}">
                        <svg style="width: 32px; height: 32px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $b['icon'] }}"/>
                        </svg>
                    </div>
                </div>

                <div class="card-body p-3 d-flex flex-column">
                    <span class="text-xs fw-bold text-muted text-uppercase tracking-wider mb-2">{{ $b['type'] }}</span>
                    <h5 class="fw-bold text-dark h6 mb-1 lh-base">{{ $b['title'] }}</h5>
                    <p class="text-xs text-muted mb-3">{{ $b['size'] }} &middot; Diperbarui 2 hari lalu</p>
                    
                    <div class="mt-auto d-flex gap-2">
                        <button class="btn btn-outline-brand flex-grow-1 text-sm py-1.5 fw-bold border-brand text-brand rounded-3">Baca</button>
                        <button class="btn btn-light rounded-3 px-3 border border-light" title="Unduh">
                            <svg style="width: 16px; height: 16px;" class="text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                        </button>
                    </div>
                </div>

            </div>
        </div>
        @endforeach

    </div>
    
    <div class="d-flex justify-content-center mt-4">
        <nav aria-label="Page navigation">
            <ul class="pagination pagination-sm">
                <li class="page-item disabled"><a class="page-link border-0 text-muted" href="#">Sebelumnya</a></li>
                <li class="page-item active"><a class="page-link bg-brand border-brand rounded-2 mx-1" href="#">1</a></li>
                <li class="page-item"><a class="page-link border-0 text-dark rounded-2 mx-1" href="#">2</a></li>
                <li class="page-item"><a class="page-link border-0 text-dark rounded-2 mx-1" href="#">3</a></li>
                <li class="page-item"><a class="page-link border-0 text-dark" href="#">Selanjutnya</a></li>
            </ul>
        </nav>
    </div>

</div>
@endsection