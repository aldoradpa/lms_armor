@extends('layouts.app')

@section('content')

<style>
    /* Menggunakan wrapper agar style dashboard tidak bocor ke navbar/header luar */
    .dashboard-wrapper {
        --brand-navy: #0B2F64;
        --brand-navy-hover: #071F43;
    }
    
    .dashboard-wrapper .text-brand-navy { color: var(--brand-navy); }
    .dashboard-wrapper .bg-brand-navy { background-color: var(--brand-navy); }
    
    .dashboard-wrapper .btn-brand {
        background-color: var(--brand-navy);
        color: white;
        transition: all 0.2s;
    }
    .dashboard-wrapper .btn-brand:hover {
        background-color: var(--brand-navy-hover);
        color: white;
    }

    /* Lingkaran Progress */
    .dashboard-wrapper .progress-ring {
        transform: rotate(-90deg);
        transform-origin: 50% 50%;
    }
    
    /* Efek hover untuk list */
    .dashboard-wrapper .hover-bg-light { transition: background-color 0.2s ease; }
    .dashboard-wrapper .hover-bg-light:hover { background-color: #f8f9fa !important; }
    
    /* Modifikasi Card */
    .dashboard-wrapper .card-custom {
        border: 1px solid rgba(0,0,0,0.05);
        border-radius: 1rem;
        box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.025);
    }
    
    /* Cover Kotak BPR Arto Moro */
    .dashboard-wrapper .course-cover {
        background: linear-gradient(135deg, #0B2F64, #1e40af);
        width: 80px;
        height: 80px;
        border-radius: 0.75rem;
    }
</style>

<!-- Pembungkus Utama Dashboard -->
<div class="dashboard-wrapper container-fluid py-4">

    <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3 mb-4">
        <div>
            <!-- PERBAIKAN: Menggunakan session kustom Anda agar tidak kosong/error -->
            <h1 class="fs-4 fw-bold text-dark mb-1">Selamat Pagi, {{ session('user')['name'] ?? 'Andi Pratama' }} 👋</h1>
            <p class="text-muted small mb-0">Terus belajar dan tingkatkan kompetensi Anda.</p>
        </div>
    </div>

    <div class="row row-cols-2 row-cols-lg-4 g-3 mb-4">
        
        <div class="col">
            <div class="card card-custom h-100 p-3 p-md-4">
                <div class="d-flex align-items-center justify-content-between h-100">
                    <div>
                        <p class="text-muted small fw-medium text-uppercase mb-1" style="letter-spacing: 1px; font-size: 0.7rem;">Total Progress</p>
                        <h3 class="fs-2 fw-bold text-dark mb-0">68%</h3>
                        <p class="text-success small fw-medium mt-1 mb-0 d-flex align-items-center gap-1">
                            <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
                            <span style="font-size: 0.75rem;">12% dari minggu lalu</span>
                        </p>
                    </div>
                    <div class="position-relative" style="width: 56px; height: 56px;">
                        <svg class="progress-ring w-100 h-100" viewBox="0 0 56 56">
                            <circle cx="28" cy="28" r="22" fill="none" stroke="#e2e8f0" stroke-width="5"/>
                            <circle cx="28" cy="28" r="22" fill="none" stroke="#0d6efd" stroke-width="5"
                                stroke-dasharray="{{ 2 * 3.14159 * 22 }}"
                                stroke-dashoffset="{{ 2 * 3.14159 * 22 * (1 - 0.68) }}"
                                stroke-linecap="round"/>
                        </svg>
                        <span class="position-absolute top-50 start-50 translate-middle" style="font-size: 0.7rem; font-weight: bold; color: #0d6efd;">68%</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom h-100 p-3 p-md-4">
                <div class="d-flex justify-content-between mb-3">
                    <p class="text-muted small fw-medium text-uppercase mb-0" style="letter-spacing: 1px; font-size: 0.7rem;">Sertifikat</p>
                    <div class="bg-warning bg-opacity-10 text-warning rounded-2 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    </div>
                </div>
                <h3 class="fs-2 fw-bold text-dark mb-0">4</h3>
                <a href="#" class="text-primary text-decoration-none mt-2 d-inline-block" style="font-size: 0.75rem; font-weight: 500;">Lihat semua sertifikat &rarr;</a>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom h-100 p-3 p-md-4">
                <div class="d-flex justify-content-between mb-3">
                    <p class="text-muted small fw-medium text-uppercase mb-0" style="letter-spacing: 1px; font-size: 0.7rem;">Modul Selesai</p>
                    <div class="bg-primary bg-opacity-10 text-primary rounded-2 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                </div>
                <h3 class="fs-2 fw-bold text-dark mb-0">18</h3>
                <p class="text-muted mt-2 mb-0" style="font-size: 0.75rem;">dari 26 modul</p>
            </div>
        </div>

        <div class="col">
            <div class="card card-custom h-100 p-3 p-md-4">
                <div class="d-flex justify-content-between mb-3">
                    <p class="text-muted small fw-medium text-uppercase mb-0" style="letter-spacing: 1px; font-size: 0.7rem;">Peringkat</p>
                    <div class="bg-purple bg-opacity-10 rounded-2 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; color: #6f42c1; background-color: rgba(111, 66, 193, 0.1);">
                        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                    </div>
                </div>
                <h3 class="fs-2 fw-bold text-dark mb-0">#12</h3>
                <p class="text-muted mt-2 mb-0" style="font-size: 0.75rem;">dari 150 peserta</p>
            </div>
        </div>
    </div>

    <div class="row g-4">

        <div class="col-lg-8 d-flex flex-column gap-4">

            <div class="card card-custom overflow-hidden">
                <div class="card-header bg-white px-4 py-3 border-bottom d-flex justify-content-between align-items-center">
                    <h5 class="fw-bold text-dark mb-0 fs-6">Lanjutkan Pembelajaran</h5>
                    <a href="#" class="text-primary text-decoration-none" style="font-size: 0.75rem; font-weight: 500;">Lihat Semua</a>
                </div>
                <div class="card-body p-4">
                    <div class="d-flex flex-column flex-md-row align-items-md-center gap-3 bg-primary bg-opacity-10 border border-primary border-opacity-25 rounded-4 p-3 p-md-4">
                        
                        <div class="course-cover flex-shrink-0 d-flex flex-column align-items-center justify-content-center text-white p-2 shadow-sm">
                            <div class="bg-white bg-opacity-25 rounded d-flex align-items-center justify-content-center mb-1" style="width: 24px; height: 24px;">
                                <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20"><path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3z"/></svg>
                            </div>
                            <p class="fw-bold text-center mb-0 text-white-50" style="font-size: 9px; line-height: 1.1;">BPR ARTO<br>MORO</p>
                        </div>
                        
                        <div class="flex-grow-1 min-w-0">
                            <p class="text-primary fw-medium mb-1" style="font-size: 0.75rem;">Akademi Funding &mdash; Level 1</p>
                            <h6 class="fw-bold text-dark mb-2">F02 - Product Knowledge Funding</h6>
                            
                            <div class="d-flex align-items-center gap-3 mt-2">
                                <div class="progress flex-grow-1 bg-white" style="height: 8px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="fw-bold text-dark" style="font-size: 0.75rem;">75%</span>
                            </div>
                        </div>
                        
                        <div class="mt-3 mt-md-0 flex-shrink-0">
                            <a href="/module/f02" class="btn btn-brand rounded-3 px-4 py-2 small fw-semibold w-100">
                                Lanjutkan
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-custom overflow-hidden">
                <div class="card-header bg-white px-4 py-3 border-bottom d-flex justify-content-between align-items-center">
                    <h5 class="fw-bold text-dark mb-0 fs-6">Pengumuman Terbaru</h5>
                    <a href="#" class="text-primary text-decoration-none" style="font-size: 0.75rem; font-weight: 500;">Lihat Semua</a>
                </div>
                <div class="list-group list-group-flush">
                    <div class="list-group-item px-4 py-3 border-0 hover-bg-light border-bottom d-flex gap-3">
                        <div class="bg-primary rounded-pill flex-shrink-0 mt-1" style="width: 4px; height: 100%;"></div>
                        <div class="flex-grow-1 min-w-0">
                            <div class="d-flex align-items-start justify-content-between gap-2">
                                <h6 class="fw-semibold text-dark mb-1 lh-base fs-6">Webinar Series: Strategi Pertumbuhan DPK di Era Digital</h6>
                                <span class="text-muted flex-shrink-0" style="font-size: 0.7rem;">20 Mei 2024</span>
                            </div>
                            <p class="text-muted mb-0" style="font-size: 0.75rem;">Jangan lewatkan webinar bersama praktisi perbankan berpengalaman.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-4 d-flex flex-column gap-4">

            <div class="card card-custom overflow-hidden">
                <div class="card-header bg-white px-4 py-3 border-bottom">
                    <h5 class="fw-bold text-dark mb-0 fs-6">Jadwal Selanjutnya</h5>
                </div>
                <div class="card-body p-4 d-flex flex-column gap-3">
                    
                    <div class="d-flex gap-3">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-3 d-flex align-items-center justify-content-center flex-shrink-0" style="width: 36px; height: 36px;">
                            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.069A1 1 0 0121 8.82v6.36a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <h6 class="fw-semibold text-dark mb-1" style="font-size: 0.85rem;">Kelas Online: Strategi DPK</h6>
                            <p class="text-muted mb-0" style="font-size: 0.7rem;">Rabu, 22 Mei 2024 &middot; 10.00 WIB</p>
                        </div>
                    </div>

                    <div class="d-flex gap-3">
                        <div class="bg-danger bg-opacity-10 text-danger rounded-3 d-flex align-items-center justify-content-center flex-shrink-0" style="width: 36px; height: 36px;">
                            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        </div>
                        <div>
                            <h6 class="fw-semibold text-dark mb-1" style="font-size: 0.85rem;">Ujian Level 1 Funding Basic</h6>
                            <p class="text-muted mb-0" style="font-size: 0.7rem;">Sabtu, 25 Mei 2024 &middot; 09.00 WIB</p>
                        </div>
                    </div>

                    <a href="#" class="text-primary text-decoration-none mt-2 d-inline-block" style="font-size: 0.75rem; font-weight: 500;">Lihat Semua</a>
                </div>
            </div>

            <div class="card card-custom overflow-hidden">
                <div class="card-header bg-white px-4 py-3 border-bottom">
                    <h5 class="fw-bold text-dark mb-0 fs-6">Leaderboard <span class="text-muted fw-normal" style="font-size: 0.8rem;">(Top 5)</span></h5>
                </div>
                <div class="card-body p-3 d-flex flex-column gap-2">
                    @php
                        $leaders = [
                            ['rank'=>1,'name'=>'Dinda Lestari','poin'=>'4.250','me'=>false,'color'=>'text-warning'],
                            ['rank'=>2,'name'=>'Andi Pratama','poin'=>'3.250','me'=>true,'color'=>'text-secondary'],
                            ['rank'=>3,'name'=>'Rudi Hermawan','poin'=>'3.100','me'=>false,'color'=>'text-danger'],
                            ['rank'=>4,'name'=>'Sri Rahma','poin'=>'2.860','me'=>false,'color'=>'text-secondary'],
                            ['rank'=>5,'name'=>'Budi Santoso','poin'=>'2.750','me'=>false,'color'=>'text-secondary'],
                        ];
                    @endphp
                    
                    @foreach($leaders as $l)
                    <div class="d-flex align-items-center gap-3 px-3 py-2 rounded-3 {{ $l['me'] ? 'bg-primary bg-opacity-10 border border-primary border-opacity-25' : 'hover-bg-light border border-transparent' }}">
                        <span class="fw-bold text-center {{ $l['color'] }} flex-shrink-0" style="width: 16px; font-size: 0.85rem;">{{ $l['rank'] }}</span>
                        
                        <div class="rounded-circle text-white d-flex align-items-center justify-content-center flex-shrink-0" style="width: 28px; height: 28px; background: linear-gradient(135deg, #6ea8fe, #0d6efd);">
                            <span class="fw-bold" style="font-size: 9px;">{{ strtoupper(substr($l['name'],0,1)) }}</span>
                        </div>
                        
                        <span class="text-truncate flex-grow-1 {{ $l['me'] ? 'fw-bold text-brand-navy' : 'fw-medium text-dark' }}" style="font-size: 0.85rem;">{{ $l['name'] }}</span>
                        
                        <span class="fw-semibold flex-shrink-0 {{ $l['me'] ? 'text-primary' : 'text-muted' }}" style="font-size: 0.75rem;">{{ $l['poin'] }} Poin</span>
                    </div>
                    @endforeach
                    
                    <a href="#" class="text-primary text-decoration-none mt-2 ms-2 d-inline-block" style="font-size: 0.75rem; font-weight: 500;">Lihat Semua</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection