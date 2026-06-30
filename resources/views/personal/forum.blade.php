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
    .rounded-5 { border-radius: 1.25rem !important; }
    
    .forum-card {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .forum-card:hover {
        background-color: #f8fafc;
        cursor: pointer;
    }

    /* Nav Tabs Custom */
    .nav-tabs-custom { border-bottom: 2px solid #e2e8f0; }
    .nav-tabs-custom .nav-link {
        color: #64748b;
        border: none;
        border-bottom: 2px solid transparent;
        margin-bottom: -2px;
        padding: 0.75rem 1rem;
        font-weight: 600;
        font-size: 0.875rem;
    }
    .nav-tabs-custom .nav-link:hover { color: #0f2557; }
    .nav-tabs-custom .nav-link.active {
        color: #0f2557;
        border-bottom: 2px solid #0f2557;
        background: transparent;
    }
</style>

<div class="d-flex flex-column gap-4">

    <nav class="d-flex align-items-center gap-2 text-sm text-secondary">
        <a href="{{ route('dashboard') }}" class="text-decoration-none text-secondary text-primary-hover fw-medium">Beranda</a>
        <svg style="width: 14px; height: 14px;" class="text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        <span class="text-muted">Personal</span>
        <svg style="width: 14px; height: 14px;" class="text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        <span class="text-dark fw-bold">Forum Diskusi</span>
    </nav>

    <div class="position-relative bg-gradient-brand rounded-4 p-4 p-md-5 text-white overflow-hidden shadow-sm d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
        <div class="position-absolute bg-white bg-opacity-10 rounded-circle" style="top: -2rem; right: -2rem; width: 12rem; height: 12rem;"></div>
        <div class="position-absolute bg-white bg-opacity-10 rounded-circle" style="bottom: -1rem; right: 10rem; width: 6rem; height: 6rem;"></div>

        <div class="position-relative z-1">
            <h1 class="fw-bold mb-2 h3">Forum Diskusi</h1>
            <p class="mb-0 text-white-50 text-sm" style="max-width: 500px;">Wadah diskusi antar karyawan BPR Arto Moro. Tanyakan kendala, bagikan pengalaman, atau diskusikan studi kasus terkini.</p>
        </div>
        
        <div class="position-relative z-1 d-flex gap-3">
            <div class="bg-white bg-opacity-10 rounded-4 p-3 border border-light border-opacity-25 text-center min-w-[100px]">
                <p class="text-xs text-white-50 mb-1 text-uppercase tracking-wider">Topik</p>
                <p class="h4 fw-bold text-white mb-0">842</p>
            </div>
            <div class="bg-white bg-opacity-10 rounded-4 p-3 border border-light border-opacity-25 text-center min-w-[100px]">
                <p class="text-xs text-white-50 mb-1 text-uppercase tracking-wider">Online</p>
                <div class="d-flex align-items-center justify-content-center gap-2">
                    <span class="bg-success rounded-circle" style="width: 8px; height: 8px; box-shadow: 0 0 0 2px rgba(25, 135, 84, 0.25);"></span>
                    <p class="h4 fw-bold text-white mb-0">56</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mt-1">
        
        <div class="col-lg-8">
            <div class="card rounded-4 border-0 shadow-sm overflow-hidden">
                <div class="card-header bg-white border-bottom p-0">
                    <ul class="nav nav-tabs-custom px-4 pt-3">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Terbaru</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Populer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Belum Dijawab</a>
                        </li>
                    </ul>
                </div>
                
                <div class="list-group list-group-flush">
                    @php
                        $threads = [
                            ['user' => 'Budi Santoso', 'role' => 'Kredit Officer', 'time' => '2 jam lalu', 'title' => 'Kendala Analisis Rasio Keuangan Calon Debitur Sektor Pertanian', 'desc' => 'Halo rekan-rekan, ada yang punya template excel atau pengalaman khusus untuk menganalisis arus kas calon debitur yang pendapatannya musiman seperti petani kelapa sawit?', 'tags' => ['Kredit', 'Analisis', 'Pertanian'], 'replies' => 12, 'views' => 45, 'likes' => 8, 'solved' => false, 'avatar' => 'BS', 'color' => 'primary'],
                            ['user' => 'Siti Aminah', 'role' => 'Customer Service', 'time' => '5 jam lalu', 'title' => 'Cara Menghadapi Nasabah yang Komplain Terkait Biaya Admin', 'desc' => 'Belakangan ini sering ada komplain mengenai potongan biaya admin bulanan. Bagaimana script komunikasi yang paling elegan untuk menjelaskannya?', 'tags' => ['Service', 'Komplain'], 'replies' => 24, 'views' => 112, 'likes' => 15, 'solved' => true, 'avatar' => 'SA', 'color' => 'success'],
                            ['user' => 'Andi Pratama', 'role' => 'Funding Officer', 'time' => 'Kemarin', 'title' => 'Strategi Cross-Selling Produk Deposito ke Nasabah Tabungan Reguler', 'desc' => 'Mohon pencerahannya, apa trigger poin yang pas untuk menawarkan deposito berhadiah kepada nasabah tabungan reguler yang saldonya lumayan mengendap?', 'tags' => ['Funding', 'Strategi', 'Deposito'], 'replies' => 5, 'views' => 30, 'likes' => 3, 'solved' => false, 'avatar' => 'AP', 'color' => 'warning'],
                            ['user' => 'Rina Wijaya', 'role' => 'Compliance', 'time' => 'Kemarin', 'title' => 'Update Regulasi APU PPT Terbaru 2024 (File Terlampir)', 'desc' => 'Berikut saya lampirkan poin-poin penting perubahan kebijakan APU PPT sesuai POJK terbaru. Mohon semua rekan membaca poin nomor 3 terkait mitigasi risiko nasabah baru.', 'tags' => ['Kepatuhan', 'Regulasi', 'OJK'], 'replies' => 42, 'views' => 256, 'likes' => 55, 'solved' => false, 'avatar' => 'RW', 'color' => 'danger'],
                        ];
                    @endphp

                    @foreach($threads as $t)
                    <div class="list-group-item p-4 forum-card border-bottom border-light">
                        <div class="d-flex gap-3">
                            <div class="flex-shrink-0">
                                <div class="rounded-circle d-flex align-items-center justify-content-center text-white fw-bold shadow-sm bg-{{ $t['color'] }}" style="width: 48px; height: 48px; font-size: 1.1rem;">
                                    {{ $t['avatar'] }}
                                </div>
                            </div>
                            
                            <div class="flex-grow-1 min-vw-0">
                                <div class="d-flex align-items-center justify-content-between mb-1">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="fw-bold text-dark text-sm">{{ $t['user'] }}</span>
                                        <span class="badge bg-secondary bg-opacity-10 text-secondary text-xs rounded-pill fw-medium">{{ $t['role'] }}</span>
                                    </div>
                                    <span class="text-xs text-muted">{{ $t['time'] }}</span>
                                </div>
                                
                                <h5 class="fw-bold text-dark h6 mb-2 lh-base">
                                    {{ $t['title'] }}
                                    @if($t['solved'])
                                    <span class="badge bg-success text-white ms-2 px-2 py-1" style="font-size: 0.6rem; vertical-align: middle;">TERJAWAB</span>
                                    @endif
                                </h5>
                                <p class="text-muted text-sm mb-3" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                    {{ $t['desc'] }}
                                </p>
                                
                                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                                    <div class="d-flex gap-2">
                                        @foreach($t['tags'] as $tag)
                                        <span class="badge bg-light text-secondary border text-xs fw-medium px-2 py-1">{{ $tag }}</span>
                                        @endforeach
                                    </div>
                                    
                                    <div class="d-flex gap-3 text-muted text-xs fw-medium">
                                        <div class="d-flex align-items-center gap-1" title="Likes">
                                            <svg style="width: 14px; height: 14px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/></svg>
                                            {{ $t['likes'] }}
                                        </div>
                                        <div class="d-flex align-items-center gap-1" title="Balasan">
                                            <svg style="width: 14px; height: 14px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                                            {{ $t['replies'] }}
                                        </div>
                                        <div class="d-flex align-items-center gap-1" title="Dilihat">
                                            <svg style="width: 14px; height: 14px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                            {{ $t['views'] }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <div class="card-footer bg-white p-3 text-center border-top-0">
                    <button class="btn btn-light text-primary fw-bold text-sm rounded-pill px-4 py-2">Muat Lebih Banyak</button>
                </div>
            </div>
        </div>

        <div class="col-lg-4 d-flex flex-column gap-4">
            
            <div class="card rounded-4 border-0 shadow-sm p-4">
                <button class="btn bg-brand text-white w-100 rounded-3 py-2.5 fw-bold shadow-sm d-flex justify-content-center align-items-center gap-2 mb-4">
                    <svg style="width: 18px; height: 18px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    Buat Diskusi Baru
                </button>

                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 ps-3 text-sm py-2.5" placeholder="Cari topik diskusi..." style="border-radius: 0.5rem 0 0 0.5rem;">
                    <button class="btn bg-light border-0 text-muted" style="border-radius: 0 0.5rem 0.5rem 0;">
                        <svg style="width: 16px; height: 16px;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </button>
                </div>
            </div>

            <div class="card rounded-4 border-0 shadow-sm p-4">
                <h6 class="fw-bold text-dark mb-3">Topik Populer Mingguan</h6>
                <div class="d-flex flex-wrap gap-2">
                    <a href="#" class="badge bg-primary-subtle text-primary border border-primary border-opacity-25 text-decoration-none px-3 py-2 rounded-pill fw-medium">#KreditMacet</a>
                    <a href="#" class="badge bg-light text-secondary border text-decoration-none px-3 py-2 rounded-pill fw-medium hover-bg-light">#PromoDeposito</a>
                    <a href="#" class="badge bg-light text-secondary border text-decoration-none px-3 py-2 rounded-pill fw-medium hover-bg-light">#HandlingComplaint</a>
                    <a href="#" class="badge bg-light text-secondary border text-decoration-none px-3 py-2 rounded-pill fw-medium hover-bg-light">#BPRArtoMoro</a>
                    <a href="#" class="badge bg-light text-secondary border text-decoration-none px-3 py-2 rounded-pill fw-medium hover-bg-light">#AuditOJK</a>
                    <a href="#" class="badge bg-light text-secondary border text-decoration-none px-3 py-2 rounded-pill fw-medium hover-bg-light">#PelatihanService</a>
                </div>
            </div>

            <div class="card rounded-4 border-0 shadow-sm p-4">
                <h6 class="fw-bold text-dark mb-3">Top Kontributor</h6>
                <div class="d-flex flex-column gap-3">
                    
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                            <div class="rounded-circle d-flex align-items-center justify-content-center text-white fw-bold shadow-sm bg-danger" style="width: 32px; height: 32px; font-size: 0.8rem;">
                                RW
                            </div>
                            <div>
                                <p class="fw-bold text-dark text-sm mb-0 lh-1">Rina Wijaya</p>
                                <p class="text-muted mb-0" style="font-size: 10px;">124 Jawaban Terbaik</p>
                            </div>
                        </div>
                        <span class="text-warning" title="Peringkat 1">🏆</span>
                    </div>

                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                            <div class="rounded-circle d-flex align-items-center justify-content-center text-white fw-bold shadow-sm bg-success" style="width: 32px; height: 32px; font-size: 0.8rem;">
                                SA
                            </div>
                            <div>
                                <p class="fw-bold text-dark text-sm mb-0 lh-1">Siti Aminah</p>
                                <p class="text-muted mb-0" style="font-size: 10px;">98 Jawaban Terbaik</p>
                            </div>
                        </div>
                        <span class="text-secondary" title="Peringkat 2">🥈</span>
                    </div>

                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                            <div class="rounded-circle d-flex align-items-center justify-content-center text-white fw-bold shadow-sm bg-warning" style="width: 32px; height: 32px; font-size: 0.8rem;">
                                AP
                            </div>
                            <div>
                                <p class="fw-bold text-dark text-sm mb-0 lh-1">Andi Pratama</p>
                                <p class="text-muted mb-0" style="font-size: 10px;">65 Jawaban Terbaik</p>
                            </div>
                        </div>
                        <span class="text-danger" title="Peringkat 3">🥉</span>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection