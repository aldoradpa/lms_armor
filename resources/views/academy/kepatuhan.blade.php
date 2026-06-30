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
    
    .decorative-blob {
        position: absolute;
        background-color: rgba(255, 255, 255, 0.05);
        border-radius: 50%;
    }
    
    .badge-soft-white {
        background-color: rgba(255, 255, 255, 0.15);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: white;
    }

    .cursor-pointer { cursor: pointer; }
    
    /* Nav Tabs Custom */
    .nav-custom .nav-link {
        color: rgba(255, 255, 255, 0.7);
        border: none;
        border-bottom: 2px solid transparent;
        padding: 0.75rem 1rem;
        font-weight: 500;
        font-size: 0.875rem;
    }
    .nav-custom .nav-link:hover { color: white; }
    .nav-custom .nav-link.active {
        color: white;
        border-bottom: 2px solid white;
        background: transparent;
    }
</style>

<div class="d-flex flex-column gap-4">

    <!-- Breadcrumb -->
    <nav class="d-flex align-items-center gap-2 text-sm text-secondary">
        <a href="{{ route('dashboard') }}" class="text-decoration-none text-secondary text-primary-hover fw-medium">Beranda</a>
        <svg style="width: 14px; height: 14px;" class="text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        <span class="text-dark fw-bold">Akademi Kepatuhan</span>
    </nav>

    <!-- Hero Banner -->
    <div class="position-relative bg-gradient-brand rounded-5 p-4 p-md-5 text-white overflow-hidden shadow">
        <div class="decorative-blob" style="top: -2.5rem; right: -2.5rem; width: 14rem; height: 14rem;"></div>
        <div class="decorative-blob" style="bottom: -2rem; right: -1rem; width: 9rem; height: 9rem;"></div>
        <div class="decorative-blob" style="top: 1.5rem; right: 10rem; width: 5rem; height: 5rem;"></div>

        <div class="position-relative z-1 d-flex flex-column flex-md-row align-items-start align-items-md-center gap-4">
            <div class="flex-grow-1">
                <span class="badge badge-soft-white rounded-pill px-3 py-2 mb-3">Learning Path</span>
                <h1 class="fw-bolder mb-2 h2">Akademi Kepatuhan</h1>
                <p class="mb-4 small text-white-50" style="max-width: 500px;">Pelajari kepatuhan regulasi Otoritas Jasa Keuangan (OJK), Anti Pencucian Uang & Pencegahan Pendanaan Terorisme (APU PPT), dan etika bisnis perbankan.</p>

                <div class="d-flex flex-wrap gap-4">
                    <div>
                        <p class="text-xs text-white-50 mb-1">Total Progress</p>
                        <p class="h4 fw-bold mb-0">25%</p>
                    </div>
                    <div class="border-start border-light border-opacity-25 ps-4">
                        <p class="text-xs text-white-50 mb-1">Sertifikat</p>
                        <p class="h4 fw-bold mb-0">0 / 3</p>
                    </div>
                </div>
            </div>
            
            <div class="w-100" style="max-width: 200px;">
                <div class="progress bg-white bg-opacity-10 rounded-pill mb-2" style="height: 10px;">
                    <div class="progress-bar bg-success rounded-pill" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="text-xs text-white-50 text-md-end mb-0">25% selesai</p>
            </div>
        </div>

        <ul class="nav nav-custom border-bottom border-light border-opacity-25 mt-4 position-relative z-1">
            @foreach(['Learning Path','Tentang Program','Mentor','FAQ'] as $tab)
            <li class="nav-item">
                <a class="nav-link {{ $loop->first ? 'active' : '' }}" href="#">{{ $tab }}</a>
            </li>
            @endforeach
        </ul>
    </div>

    <!-- Content Grid -->
    <div class="row g-4 mt-1">

        <!-- Level List (Kolom Kiri) -->
        <div class="col-lg-5 d-flex flex-column gap-3">
            <h3 class="fw-bold text-secondary text-xs text-uppercase tracking-wider px-1 mb-1">Level Pembelajaran</h3>

            <!-- Level 1 Aktif -->
            <div class="card rounded-4 border-2 border-primary border-opacity-50 shadow cursor-pointer">
                <div class="card-body p-4 d-flex align-items-center gap-3">
                    <div class="bg-primary-subtle rounded-3 d-flex flex-column align-items-center justify-content-center flex-shrink-0 border border-2 border-primary" style="width: 3rem; height: 3rem;">
                        <span class="text-primary fw-bolder text-xs">L1</span>
                    </div>
                    <div class="flex-grow-1 min-vw-0">
                        <h4 class="fw-bold text-brand text-sm mb-1">Compliance Basic</h4>
                        <p class="text-xs text-muted mb-2">Certified Compliance Basic Officer (CCBO)</p>
                        <div class="d-flex align-items-center gap-2">
                            <div class="progress flex-grow-1 rounded-pill" style="height: 6px;">
                                <div class="progress-bar bg-primary rounded-pill" style="width: 30%"></div>
                            </div>
                            <span class="text-xs fw-bold text-primary">30%</span>
                        </div>
                    </div>
                    <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-2">Aktif</span>
                </div>
            </div>

            <!-- Level 2 Terkunci -->
            <div class="card rounded-4 border border-secondary border-opacity-25 bg-light opacity-75 border-dashed">
                <div class="card-body p-4 d-flex align-items-center gap-3">
                    <div class="bg-secondary bg-opacity-10 rounded-3 d-flex flex-column align-items-center justify-content-center flex-shrink-0" style="width: 3rem; height: 3rem;">
                        <span class="text-secondary fw-bolder text-xs">L2</span>
                    </div>
                    <div class="flex-grow-1 min-vw-0">
                        <h4 class="fw-bold text-secondary text-sm mb-1">Compliance Professional</h4>
                        <p class="text-xs text-muted mb-1">Certified Compliance Professional (CCP)</p>
                        <p class="text-xs text-muted mb-0 d-flex align-items-center gap-1">
                            <svg style="width: 12px; height: 12px;" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/></svg>
                            Selesaikan Level 1 untuk membuka
                        </p>
                    </div>
                    <span class="badge bg-secondary bg-opacity-10 text-secondary rounded-pill px-3 py-2">Terkunci</span>
                </div>
            </div>

            <!-- Level 3 Terkunci -->
            <div class="card rounded-4 border border-secondary border-opacity-25 bg-light opacity-75 border-dashed">
                <div class="card-body p-4 d-flex align-items-center gap-3">
                    <div class="bg-secondary bg-opacity-10 rounded-3 d-flex flex-column align-items-center justify-content-center flex-shrink-0" style="width: 3rem; height: 3rem;">
                        <span class="text-secondary fw-bolder text-xs">L3</span>
                    </div>
                    <div class="flex-grow-1 min-vw-0">
                        <h4 class="fw-bold text-secondary text-sm mb-1">Compliance Master</h4>
                        <p class="text-xs text-muted mb-1">Certified Compliance Manager (CCM)</p>
                    </div>
                    <span class="badge bg-secondary bg-opacity-10 text-secondary rounded-pill px-3 py-2">Terkunci</span>
                </div>
            </div>
        </div>

        <!-- Modul Detail (Kolom Kanan) -->
        <div class="col-lg-7">
            <div class="card rounded-4 border-0 shadow-sm overflow-hidden">
                <div class="card-header bg-white border-bottom p-4 p-md-5">
                    <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-1 mb-2">Level 1</span>
                    <h2 class="h5 fw-bold text-dark mt-1">Compliance Basic</h2>
                    <p class="text-sm text-muted">Pemahaman mendasar mengenai tata kelola BPR, regulasi dasar OJK, APU PPT dasar, dan pencegahan kecurangan (fraud).</p>
                    
                    <div class="d-flex flex-wrap gap-4 mt-4 text-sm">
                        <div>
                            <p class="text-xs text-muted mb-1">Sertifikat</p>
                            <p class="fw-bold text-dark mb-0">Certified Compliance Basic</p>
                        </div>
                        <div>
                            <p class="text-xs text-muted mb-1">Minimal Nilai</p>
                            <p class="fw-bold text-dark mb-0">75</p>
                        </div>
                        <div>
                            <p class="text-xs text-muted mb-1">Durasi Total</p>
                            <p class="fw-bold text-dark mb-0">18 Jam</p>
                        </div>
                    </div>
                </div>

                <div class="card-body p-4 p-md-5">
                    <p class="text-xs fw-bold text-muted text-uppercase tracking-wider mb-3">Modul dalam Level Ini</p>
                    
                    <div class="d-flex flex-column gap-3 mb-4">
                        @php
                            $modules = [
                                ['code'=>'K01','title'=>'Regulasi Dasar BPR & Tata Kelola','duration'=>'6 Jam','soal'=>'25 Soal','status'=>'done'],
                                ['code'=>'K02','title'=>'Penerapan APU PPT Dasar','duration'=>'6 Jam','soal'=>'30 Soal','status'=>'active'],
                                ['code'=>'K03','title'=>'Etika Bisnis & Fraud Awareness','duration'=>'6 Jam','soal'=>'25 Soal','status'=>'locked'],
                            ];
                        @endphp
                        
                        @foreach($modules as $m)
                        <div class="d-flex align-items-center gap-3 p-3 rounded-4 
                            {{ $m['status']=='done' ? 'bg-light' : ($m['status']=='active' ? 'border border-primary-subtle bg-primary-subtle' : 'opacity-50 bg-light') }} cursor-pointer">
                            
                            <div class="rounded-3 d-flex align-items-center justify-content-center flex-shrink-0 
                                {{ $m['status']=='done' ? 'bg-success-subtle' : ($m['status']=='active' ? 'bg-white' : 'bg-secondary bg-opacity-10') }}" 
                                style="width: 2.5rem; height: 2.5rem;">
                                
                                @if($m['status']=='done')
                                <svg style="width: 16px; height: 16px;" class="text-success" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                @elseif($m['status']=='active')
                                <svg style="width: 16px; height: 16px;" class="text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/></svg>
                                @else
                                <svg style="width: 16px; height: 16px;" class="text-secondary" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/></svg>
                                @endif
                            </div>
                            
                            <div class="flex-grow-1 min-vw-0">
                                <div class="d-flex align-items-center gap-2 mb-1">
                                    <span class="text-xs fw-bold text-muted">{{ $m['code'] }}</span>
                                    <h4 class="text-sm fw-bold text-dark mb-0 text-truncate">{{ $m['title'] }}</h4>
                                </div>
                                <p class="text-xs text-muted mb-0">{{ $m['duration'] }} &middot; {{ $m['soal'] }}</p>
                            </div>
                            
                            @if($m['status']=='done')
                            <span class="text-sm fw-bold text-success flex-shrink-0">100%</span>
                            @elseif($m['status']=='active')
                            <a href="#" class="btn bg-brand text-white text-xs px-3 py-1 rounded-3">Lanjutkan</a>
                            @endif
                        </div>
                        @endforeach

                        <!-- Ujian Final (Terkunci) -->
                        <div class="d-flex align-items-center gap-3 p-3 rounded-4 bg-light border border-secondary border-opacity-10 mt-2 opacity-50">
                            <div class="rounded-3 d-flex align-items-center justify-content-center flex-shrink-0 bg-secondary bg-opacity-10" style="width: 2.5rem; height: 2.5rem;">
                                <svg style="width: 16px; height: 16px;" class="text-secondary" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                            <div class="flex-grow-1">
                                <h4 class="text-sm fw-bold text-secondary mb-1">Ujian Level 1 - Compliance Basic</h4>
                                <p class="text-xs text-muted mb-0">Final Exam &middot; 50 Soal</p>
                            </div>
                            <span class="badge bg-secondary bg-opacity-10 text-secondary rounded-pill">Terkunci</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection