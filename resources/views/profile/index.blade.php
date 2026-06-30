@extends('layouts.app')

@section('content')
<!-- Custom Styles -->
<style>
    .bg-brand { background-color: #0f2557; color: white; }
    .bg-brand:hover { background-color: #1e3a8a; color: white; }
    .text-brand { color: #0f2557; }
    .border-brand { border-color: #0f2557; }
    
    .text-xs { font-size: 0.75rem; }
    .text-sm { font-size: 0.875rem; }
    
    .rounded-4 { border-radius: 1rem !important; }
    .rounded-5 { border-radius: 1.25rem !important; }
    .rounded-top-4 { border-top-left-radius: 1rem !important; border-top-right-radius: 1rem !important; }
    
    /* Custom Colors for Stats & Badges */
    .bg-purple-subtle { background-color: #f3e8ff; }
    .text-purple { color: #7e22ce; }
    .border-purple { border-color: #e9d5ff; }
    
    .bg-amber-subtle { background-color: #fef3c7; }
    .text-amber { color: #b45309; }
    .border-amber { border-color: #fde68a; }

    /* Hover effect tabs */
    .tab-hover:hover { color: #4b5563 !important; }
</style>

<div class="d-flex flex-column gap-4">

    <!-- Breadcrumb -->
    <nav class="d-flex align-items-center gap-2 text-sm text-secondary flex-wrap">
        <a href="{{ route('dashboard') }}" class="text-decoration-none text-secondary text-primary-hover fw-medium">Beranda</a>
        <svg style="width: 14px; height: 14px;" class="text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        <span class="text-dark fw-bold">Profil Saya</span>
    </nav>

    <div class="row g-4">

        <!-- Kolom Kiri: Profil, Statistik, Pencapaian -->
        <div class="col-lg-4 col-xl-3 d-flex flex-column gap-4">

            <!-- Card Profil Utama -->
            <div class="card rounded-4 border-0 shadow-sm text-center">
                <!-- Cover Banner -->
                <div class="position-relative rounded-top-4" style="background: linear-gradient(135deg, #0f2557, #1e40af); height: 6rem;">
                    <!-- Avatar Wrapper (Overlapping) -->
                    <div class="position-absolute start-50 translate-middle" style="top: 100%;">
                        <div class="rounded-circle border border-4 border-white shadow-sm d-flex align-items-center justify-content-center" style="width: 80px; height: 80px; background: linear-gradient(135deg, #3b82f6, #1e40af);">
                            <span class="text-white h3 fw-bold mb-0">AP</span>
                        </div>
                    </div>
                </div>
                
                <div class="card-body pt-5 pb-4 px-4 mt-2">
                    <h2 class="h5 fw-bold text-dark mb-0">{{ auth()->user()->name ?? 'Andi Pratama' }}</h2>
                    <p class="text-sm text-muted mb-1">Funding Officer</p>
                    <p class="text-xs text-muted mb-1">Bergabung sejak 2 Januari 2024</p>
                    <p class="text-xs text-primary mb-3">andipratama@bprartomoro.co.id</p>

                    <!-- Level & Points -->
                    <div class="bg-amber-subtle border border-amber rounded-3 p-3 d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center gap-2">
                            <div class="rounded-circle d-flex align-items-center justify-content-center bg-warning" style="width: 32px; height: 32px;">
                                <svg style="width: 16px; height: 16px;" class="text-dark" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                            <div class="text-start">
                                <p class="text-xs text-amber mb-0">Level Anda</p>
                                <p class="fw-bold text-amber text-sm mb-0">Gold Learner</p>
                            </div>
                        </div>
                        <div class="text-end">
                            <p class="fw-bold text-amber text-sm mb-0">3.250 Poin</p>
                            <p class="text-xs text-amber opacity-75 mb-0">Top 12%</p>
                        </div>
                    </div>

                    <button class="btn btn-outline-secondary w-100 rounded-3 text-sm fw-bold">Edit Profil</button>
                </div>

                <!-- Tabs Internal Card -->
                <div class="row m-0 border-top text-xs">
                    <div class="col py-3 border-bottom border-2 border-primary text-primary fw-bold cursor-pointer">Overview</div>
                    <div class="col py-3 text-muted fw-semibold cursor-pointer tab-hover">Sertifikat</div>
                    <div class="col py-3 text-muted fw-semibold cursor-pointer tab-hover">Riwayat Belajar</div>
                </div>
            </div>

            <!-- Statistik Belajar -->
            <div class="card rounded-4 border-0 shadow-sm p-4">
                <h3 class="fw-bold text-dark h6 mb-3">Statistik Belajar</h3>
                <div class="row g-2">
                    @php
                        $stats = [
                            ['val'=>'68%','label'=>'Total Progress','color'=>'text-primary','bg'=>'bg-primary-subtle'],
                            ['val'=>'18','label'=>'Modul Selesai','color'=>'text-success','bg'=>'bg-success-subtle'],
                            ['val'=>'26','label'=>'Jam Belajar','color'=>'text-purple','bg'=>'bg-purple-subtle'],
                            ['val'=>'4','label'=>'Sertifikat','color'=>'text-amber','bg'=>'bg-amber-subtle'],
                        ];
                    @endphp
                    @foreach($stats as $s)
                    <div class="col-6">
                        <div class="text-center p-3 {{ $s['bg'] }} rounded-3 h-100">
                            <p class="h4 fw-bold {{ $s['color'] }} mb-0">{{ $s['val'] }}</p>
                            <p class="text-xs text-muted mt-1 fw-medium mb-0">{{ $s['label'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Pencapaian -->
            <div class="card rounded-4 border-0 shadow-sm p-4">
                <h3 class="fw-bold text-dark h6 mb-3">Pencapaian</h3>
                <div class="row g-2">
                    @php
                        $badges = [
                            ['icon'=>'⭐','name'=>'Consistent Learner','desc'=>'Belajar 7 hari beruntun','color'=>'bg-primary-subtle','border'=>'border-primary'],
                            ['icon'=>'🏆','name'=>'Quiz Master','desc'=>'Skor > 80 dalam 5 kuis','color'=>'bg-amber-subtle','border'=>'border-amber'],
                            ['icon'=>'⚡','name'=>'Early Bird','desc'=>'Aktif sebelum jam 8 pagi','color'=>'bg-success-subtle','border'=>'border-success'],
                            ['icon'=>'🎯','name'=>'Top Performer','desc'=>'Top 20% terbaik','color'=>'bg-purple-subtle','border'=>'border-purple'],
                        ];
                    @endphp
                    @foreach($badges as $b)
                    <div class="col-6">
                        <div class="text-center p-2 h-100 {{ $b['color'] }} rounded-3 border border-opacity-25 {{ $b['border'] }}">
                            <div class="fs-3 mb-1">{{ $b['icon'] }}</div>
                            <p class="text-xs fw-bold text-dark lh-sm mb-1">{{ $b['name'] }}</p>
                            <p class="text-muted lh-sm mb-0" style="font-size: 0.65rem;">{{ $b['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Kolom Kanan: Preview Sertifikat -->
        <div class="col-lg-8 col-xl-9 d-flex flex-column">
            <div class="card rounded-4 border-0 shadow-sm p-4 p-md-5 h-100">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div>
                        <h3 class="fw-bold text-dark h5 mb-1">Sertifikat Saya</h3>
                        <p class="text-sm text-muted mb-0">4 sertifikat diperoleh</p>
                    </div>
                    <a href="#" class="text-sm fw-bold text-primary text-decoration-none">Lihat Semua</a>
                </div>

                <!-- Area Preview Sertifikat -->
                <div class="flex-grow-1 d-flex align-items-center justify-content-center rounded-4 p-3 p-md-5" style="background: linear-gradient(135deg, #f1f5f9, #e2e8f0);">
                    
                    <!-- Desain Kertas Sertifikat -->
                    <div class="bg-white position-relative shadow-lg w-100" style="max-width: 600px; border: 6px double #0f2557; border-radius: 12px;">
                        <!-- Top Gold Bar -->
                        <div style="height: 6px; background: linear-gradient(90deg, #f59e0b, #fde047, #f59e0b);"></div>

                        <div class="p-4 p-md-5 text-center">
                            <!-- Logo & Nama Akademi -->
                            <div class="d-flex justify-content-center align-items-center gap-2 mb-4">
                                <div class="bg-brand rounded-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                    <span class="text-white text-xs fw-bolder">BPR</span>
                                </div>
                                <div class="text-start">
                                    <p class="fw-bold text-brand text-sm lh-1 text-uppercase tracking-wider mb-0">Arto Moro</p>
                                    <p class="text-primary text-uppercase tracking-wider mb-0" style="font-size: 0.6rem;">Academy</p>
                                </div>
                            </div>

                            <p class="text-xs fw-bold text-muted text-uppercase mb-2" style="letter-spacing: 0.2em;">— Sertifikat —</p>
                            <h1 class="fw-bolder text-brand mb-2" style="letter-spacing: 0.1em; font-family: serif;">SERTIFIKAT</h1>
                            <p class="text-xs text-muted text-uppercase mb-4" style="letter-spacing: 0.1em;">Diberikan Kepada</p>

                            <h2 class="h3 fw-bold text-brand border-bottom border-2 border-warning pb-3 mx-4 mx-md-5 mb-3">Andi Pratama</h2>

                            <p class="text-xs text-muted mb-1">Telah berhasil menyelesaikan program</p>
                            <h3 class="h5 fw-bold text-dark mb-1">Funding Basic (Level 1)</h3>
                            <p class="text-xs text-muted mb-1">dan dinyatakan lulus sebagai</p>
                            <h4 class="text-sm fw-bold text-brand mb-4">Certified Funding Basic Officer (CFBO)<br>
                                <span class="text-xs fw-normal text-muted">dengan nilai <strong class="text-success">86</strong></span>
                            </h4>

                            <!-- Footer: Tanda Tangan & QR -->
                            <div class="d-flex justify-content-between align-items-end mt-4 px-2 px-md-4">
                                <div class="text-center">
                                    <p class="text-xs text-muted mb-2">Jakarta, 20 Mei 2024</p>
                                    <!-- Garis TTD Dummy -->
                                    <div class="border-bottom border-2 border-secondary mx-auto mb-1" style="width: 100px; height: 30px;">
                                        <!-- Kamu bisa insert img tanda tangan png disini nanti -->
                                    </div>
                                    <p class="text-xs fw-bold text-dark mb-0">Direktur Utama</p>
                                    <p class="text-muted mb-0" style="font-size: 0.65rem;">BPR Arto Moro</p>
                                </div>
                                <div class="text-center">
                                    <div class="bg-light border rounded-2 d-flex align-items-center justify-content-center mx-auto mb-1 p-1" style="width: 60px; height: 60px;">
                                        <img src="https://api.qrserver.com/v1/create-qr-code/?size=50x50&data=CFBO-AndiPratama-2024" alt="QR Code" class="w-100 h-100">
                                    </div>
                                    <p class="text-muted mb-0" style="font-size: 0.5rem;">No. CFBO/2024/05/00012</p>
                                </div>
                            </div>
                        </div>

                        <!-- Bottom Gold Bar -->
                        <div style="height: 6px; background: linear-gradient(90deg, #f59e0b, #fde047, #f59e0b);"></div>

                        <!-- Gold Seal/Stempel -->
                        <div class="position-absolute rounded-circle shadow d-flex align-items-center justify-content-center" style="top: 1.5rem; right: 1.5rem; width: 3.5rem; height: 3.5rem; background: linear-gradient(135deg, #fbbf24, #d97706); border: 3px solid #fef3c7;">
                            <svg style="width: 20px; height: 20px;" class="text-white" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons Sertifikat -->
                <div class="row g-3 mt-3">
                    <div class="col-12 col-md-6">
                        <button class="btn btn-outline-brand w-100 rounded-3 py-2 fw-bold text-sm d-flex align-items-center justify-content-center gap-2 border-brand text-brand">
                            <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                            Download PDF
                        </button>
                    </div>
                    <div class="col-12 col-md-6">
                        <button class="btn bg-brand w-100 rounded-3 py-2 fw-bold text-sm d-flex align-items-center justify-content-center gap-2">
                            <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/></svg>
                            Bagikan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection