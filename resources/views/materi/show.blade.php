@extends('layouts.app')

@section('content')
<style>
    .text-brand { color: #0f2557; }
    .bg-brand { background-color: #0f2557; color: white; }
    .bg-brand:hover { background-color: #1e3a8a; color: white; }
    
    .text-xs { font-size: 0.75rem; }
    .text-sm { font-size: 0.875rem; }
    
    .rounded-4 { border-radius: 1rem !important; }
    .rounded-circle-top { border-top-left-radius: 50rem; border-top-right-radius: 50rem; }
    
    .cursor-pointer { cursor: pointer; }
    .backdrop-blur { 
        backdrop-filter: blur(4px); 
        -webkit-backdrop-filter: blur(4px);
    }
    
    /* Hover effect untuk list materi */
    .hover-bg-light:hover { background-color: #f8f9fa !important; }
</style>

<div class="d-flex flex-column gap-4">

    <nav class="d-flex align-items-center gap-2 text-sm text-secondary flex-wrap">
        <a href="{{ route('dashboard') }}" class="text-decoration-none text-secondary fw-medium">Beranda</a>
        <svg style="width: 14px; height: 14px;" class="text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        <a href="#" class="text-decoration-none text-secondary">Akademi Funding</a>
        <svg style="width: 14px; height: 14px;" class="text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        <a href="#" class="text-decoration-none text-secondary">Level 1</a>
        <svg style="width: 14px; height: 14px;" class="text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        <span class="text-dark fw-bold">F02 — Materi 2</span>
    </nav>

    <div class="row g-4">

        <div class="col-xl-8 col-xxl-9 d-flex flex-column gap-4">

            <div class="card rounded-4 border-0 shadow-sm">
                <div class="card-body p-3 p-md-4 d-flex align-items-center justify-content-between gap-3">
                    <div class="min-vw-0">
                        <h1 class="h4 fw-bold text-dark mb-1">Produk Deposito</h1>
                        <p class="text-muted text-sm mb-0">Video 2 dari 5 &middot; F02 - Product Knowledge Funding</p>
                    </div>
                    <div class="d-flex gap-2 flex-shrink-0">
                        <button class="btn btn-outline-secondary border-opacity-25 d-flex align-items-center justify-content-center p-2 rounded-3" style="width: 36px; height: 36px;">
                            <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                        </button>
                        <button class="btn btn-outline-secondary border-opacity-25 d-flex align-items-center justify-content-center p-2 rounded-3" style="width: 36px; height: 36px;">
                            <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="position-relative bg-dark rounded-4 overflow-hidden shadow-lg" style="aspect-ratio: 16/9;">
                <div class="position-absolute top-0 bottom-0 start-0 end-0 d-flex align-items-center justify-content-center" style="background: linear-gradient(135deg, #0a1f5c, #1a3a7c);">
                    
                    <div class="position-absolute bottom-0 bg-white bg-opacity-10 rounded-circle-top" style="right: 3rem; width: 12rem; height: 16rem;"></div>
                    
                    <div class="position-absolute top-0 start-0 m-4 m-md-5 bg-white bg-opacity-10 backdrop-blur rounded-4 p-4 border border-light border-opacity-25 text-white" style="max-width: 300px;">
                        <p class="text-info text-xs fw-bold mb-2">Materi Hari Ini</p>
                        <h3 class="fw-bold mb-3 h5">Jenis – Jenis Deposito</h3>
                        <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
                            <li class="text-white-50 text-sm"><span class="fw-bold text-white me-2">1.</span> Deposito Reguler</li>
                            <li class="text-white-50 text-sm"><span class="fw-bold text-white me-2">2.</span> Deposito Berhadiah</li>
                            <li class="text-white-50 text-sm"><span class="fw-bold text-white me-2">3.</span> Prepsito Umroh</li>
                        </ul>
                    </div>
                </div>
                
                <div class="position-absolute top-0 bottom-0 start-0 end-0 d-flex align-items-center justify-content-center">
                    <button class="btn btn-light bg-opacity-25 backdrop-blur rounded-circle d-flex align-items-center justify-content-center border border-2 border-white border-opacity-50" style="width: 64px; height: 64px;">
                        <svg style="width: 28px; height: 28px; margin-left: 4px;" class="text-white" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"/></svg>
                    </button>
                </div>
                
                <div class="position-absolute bottom-0 start-0 end-0 px-4 py-3" style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                    <div class="progress bg-white bg-opacity-25 rounded-pill mb-3 cursor-pointer" style="height: 4px;">
                        <div class="progress-bar bg-white rounded-pill" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between text-white text-xs">
                        <div class="d-flex align-items-center gap-3">
                            <button class="btn btn-link p-0 text-white text-opacity-75 text-primary-hover">
                                <svg style="width: 20px; height: 20px;" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"/></svg>
                            </button>
                            <span class="font-monospace">06:24 / 13:30</span>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            <button class="btn btn-link p-0 text-white text-opacity-75 text-primary-hover text-xs fw-bold text-decoration-none">1x</button>
                            <button class="btn btn-link p-0 text-white text-opacity-75 text-primary-hover">
                                <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/></svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card rounded-4 border-0 shadow-sm">
                <div class="card-body p-3 p-md-4 d-flex justify-content-between align-items-center">
                    <a href="#" class="btn btn-outline-secondary rounded-3 text-sm fw-bold d-flex align-items-center gap-2 px-4">
                        <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                        Sebelumnya
                    </a>
                    <a href="/quiz/f02" class="btn bg-brand rounded-3 text-sm fw-bold d-flex align-items-center gap-2 px-4">
                        Selanjutnya
                        <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            <div class="card rounded-4 border-0 shadow-sm">
                <div class="card-body p-4 p-md-5">
                    <h3 class="fw-bold text-dark h6 mb-4">Materi Pendukung</h3>
                    <div class="row g-3">
                        @php
                            $files = [
                                ['name'=>'Slide Presentasi','size'=>'PDF · 2.4 MB','color'=>'bg-danger-subtle','icon_color'=>'text-danger','icon'=>'M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z'],
                                ['name'=>'Ebook Produk Funding','size'=>'PDF · 5.1 MB','color'=>'bg-danger-subtle','icon_color'=>'text-danger','icon'=>'M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z'],
                                ['name'=>'Template Simulasi','size'=>'Excel · 890 KB','color'=>'bg-success-subtle','icon_color'=>'text-success','icon'=>'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'],
                                ['name'=>'Contoh Perhitungan','size'=>'Excel · 120 KB','color'=>'bg-success-subtle','icon_color'=>'text-success','icon'=>'M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'],
                            ];
                        @endphp
                        
                        @foreach($files as $f)
                        <div class="col-12 col-sm-6">
                            <div class="d-flex align-items-center gap-3 p-3 border rounded-4 hover-bg-light cursor-pointer transition">
                                <div class="rounded-3 {{ $f['color'] }} d-flex align-items-center justify-content-center flex-shrink-0" style="width: 36px; height: 36px;">
                                    <svg style="width: 20px; height: 20px;" class="{{ $f['icon_color'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $f['icon'] }}"/></svg>
                                </div>
                                <div class="flex-grow-1 min-vw-0">
                                    <p class="text-sm fw-bold text-dark mb-0 text-truncate">{{ $f['name'] }}</p>
                                    <p class="text-xs text-muted mb-0">{{ $f['size'] }}</p>
                                </div>
                                <a href="#" class="btn btn-light rounded-3 d-flex align-items-center justify-content-center text-muted p-2 flex-shrink-0" style="width: 32px; height: 32px;">
                                    <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <button class="btn btn-outline-primary w-100 rounded-3 mt-4 py-2 text-sm fw-bold">Download Semua</button>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-xxl-3 d-flex flex-column gap-4">

            <div class="card rounded-4 border-0 shadow-sm overflow-hidden">
                <div class="card-header bg-white border-bottom p-3 d-flex align-items-center justify-content-between">
                    <h3 class="fw-bold text-dark text-sm mb-0">Materi Pembelajaran</h3>
                    <span class="text-xs text-muted">2/5</span>
                </div>
                <div class="list-group list-group-flush">
                    @php
                        $materis = [
                            ['title'=>'Produk Tabungan','duration'=>'Video · 45 Menit','status'=>'done'],
                            ['title'=>'Produk Deposito','duration'=>'Video · 60 Menit','status'=>'active'],
                            ['title'=>'Program Promo','duration'=>'Video · 30 Menit','status'=>'locked'],
                            ['title'=>'Simulasi Produk','duration'=>'Praktik · 45 Menit','status'=>'locked'],
                            ['title'=>'Rangkuman','duration'=>'PDF · 20 Halaman','status'=>'locked'],
                        ];
                    @endphp
                    
                    @foreach($materis as $m)
                    <div class="list-group-item border-bottom-0 px-4 py-3 d-flex align-items-start gap-3 cursor-pointer {{ $m['status']=='active' ? 'bg-primary-subtle' : ($m['status']=='locked' ? 'opacity-50' : 'hover-bg-light') }}">
                        <div class="flex-shrink-0 mt-1">
                            @if($m['status']=='done')
                            <div class="rounded-circle bg-success-subtle d-flex align-items-center justify-content-center" style="width: 20px; height: 20px;">
                                <svg style="width: 12px; height: 12px;" class="text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            @elseif($m['status']=='active')
                            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 20px; height: 20px;">
                                <svg style="width: 10px; height: 10px; margin-left: 2px;" class="text-white" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"/></svg>
                            </div>
                            @else
                            <div class="rounded-circle bg-secondary bg-opacity-25 d-flex align-items-center justify-content-center" style="width: 20px; height: 20px;">
                                <svg style="width: 12px; height: 12px;" class="text-secondary" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/></svg>
                            </div>
                            @endif
                        </div>
                        <div class="min-vw-0">
                            <p class="text-sm mb-1 lh-sm fw-{{ $m['status']=='active' ? 'bold text-brand' : 'medium text-dark' }}">{{ $m['title'] }}</p>
                            <p class="text-xs mb-0 {{ $m['status']=='active' ? 'text-primary' : 'text-muted' }}">{{ $m['duration'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="card rounded-4 border-0 shadow-sm p-4">
                <h3 class="fw-bold text-dark text-sm mb-3">Mentor</h3>
                <div class="d-flex align-items-center gap-3 mb-4">
                    <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 48px; height: 48px; background: linear-gradient(135deg, #f472b6, #9333ea);">
                        <span class="text-white fw-bold">DS</span>
                    </div>
                    <div>
                        <p class="fw-bold text-dark text-sm mb-0">Dewi Sarika</p>
                        <p class="text-xs text-muted mb-0">Funding Manager</p>
                    </div>
                </div>
                <button class="btn btn-outline-brand w-100 rounded-3 py-2 text-sm fw-bold" style="border-color: #0f2557; color: #0f2557;">
                    Hubungi Mentor
                </button>
            </div>

        </div>
    </div>
</div>
@endsection