@extends('layouts.app')

@section('content')

<style>
    :root {
        --brand-navy: #0B2F64;
        --brand-navy-hover: #071F43;
    }
    
    .btn-brand {
        background-color: var(--brand-navy);
        color: white;
    }
    .btn-brand:hover {
        background-color: var(--brand-navy-hover);
        color: white;
    }

    /* Style untuk kotak opsi jawaban */
    .quiz-option-label {
        border: 1px solid #dee2e6;
        transition: all 0.2s ease;
        cursor: pointer;
    }
    .quiz-option-label:hover {
        border-color: #b6d4fe;
        background-color: #f8f9fa;
    }
    .quiz-option-label.selected {
        border-color: #0d6efd;
        background-color: rgba(13, 110, 253, 0.05);
    }
    
    /* Lingkaran navigasi soal */
    .nav-circle {
        width: 32px;
        height: 32px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 0.75rem;
        font-weight: bold;
    }
</style>

<div class="container py-4" style="max-width: 900px;">

    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb small mb-0">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="text-decoration-none text-secondary">Beranda</a></li>
            <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-secondary">Akademi Funding</a></li>
            <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-secondary">Level 1</a></li>
            <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-secondary">F02</a></li>
            <li class="breadcrumb-item active text-dark fw-semibold" aria-current="page">Quiz</li>
        </ol>
    </nav>

    <div class="card shadow-sm border-0 rounded-4 mb-4">
        
        <div class="card-header bg-white border-bottom p-4 d-flex justify-content-between align-items-center rounded-top-4">
            <div>
                <h4 class="mb-1 fw-bold">Quiz: Product Knowledge Funding</h4>
                <p class="text-muted small mb-0">Soal 10 dari 30</p>
            </div>
            <div class="text-end">
                <p class="text-muted small mb-1">Waktu Tersisa</p>
                <h4 class="mb-0 fw-bold text-dark font-monospace">28:45</h4>
            </div>
        </div>

        <div class="card-body p-0">
            @if(isset($quizStatus) && $quizStatus == 'pending')
            <div class="p-5 text-center">
                <div class="d-inline-flex align-items-center justify-content-center bg-warning bg-opacity-10 text-warning rounded-3 p-3 mb-3">
                    <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h5 class="fw-bold">Menunggu Persetujuan Admin</h5>
                <p class="text-muted small mx-auto" style="max-width: 400px;">Kamu sudah menyelesaikan kuis ini. Hasil akhir akan keluar setelah Admin melakukan review dan persetujuan.</p>
            </div>

            @elseif(isset($quizStatus) && $quizStatus == 'failed')
            <div class="p-5 text-center">
                <div class="d-inline-flex align-items-center justify-content-center bg-danger bg-opacity-10 text-danger rounded-3 p-3 mb-3">
                    <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </div>
                <h5 class="fw-bold">Belum Memenuhi KKM</h5>
                <p class="text-muted mb-1">Nilai kamu: <strong class="text-danger">{{ $score ?? 60 }}</strong> | KKM: <strong>75</strong></p>
                <p class="text-muted small">Pelajari lagi materinya dan coba lagi!</p>
                <a href="/quiz/retake" class="btn btn-danger px-4 py-2 mt-3 fw-semibold rounded-3">Kerjakan Ulang</a>
            </div>

            @elseif(isset($quizStatus) && $quizStatus == 'passed')
            <div class="p-5 text-center">
                <div class="d-inline-flex align-items-center justify-content-center bg-success bg-opacity-10 text-success rounded-3 p-3 mb-3">
                    <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h5 class="fw-bold">Selamat! Kamu Lulus 🎉</h5>
                <p class="text-muted mb-1">Nilai kamu: <strong class="text-success fs-5">{{ $score ?? 86 }}</strong></p>
                <a href="/module/next" class="btn btn-brand px-4 py-2 mt-3 fw-semibold rounded-3">Lanjut Modul Berikutnya</a>
            </div>

            @else
            <div class="p-4 p-md-5">
                
                <div class="mb-4">
                    <p class="fw-semibold text-dark fs-5 mb-0">Produk deposito yang memberikan hadiah kepada nasabah setelah jangka waktu tertentu disebut?</p>
                </div>

                <form action="/quiz/submit" method="POST">
                    @csrf
                    <div class="mb-5">
                        @php
                            $options = [
                                ['val'=>'A','label'=>'Deposito Reguler','selected'=>false],
                                ['val'=>'B','label'=>'Deposito Berhadiah','selected'=>true],
                                ['val'=>'C','label'=>'Deposito On Call','selected'=>false],
                                ['val'=>'D','label'=>'Deposito Special','selected'=>false],
                            ];
                        @endphp
                        
                        @foreach($options as $opt)
                        <label class="quiz-option-label d-flex align-items-center p-3 mb-3 rounded-3 {{ $opt['selected'] ? 'selected' : '' }}">
                            <div class="form-check mb-0 d-flex align-items-center">
                                <input class="form-check-input mt-0 me-3 shadow-none" type="radio" name="answer_10" value="{{ $opt['val'] }}" {{ $opt['selected'] ? 'checked' : '' }} style="transform: scale(1.2);">
                                <span class="fw-medium text-dark">{{ $opt['val'] }}. {{ $opt['label'] }}</span>
                            </div>
                        </label>
                        @endforeach
                    </div>

                    <div class="border-top pt-4 mb-4">
                        <h6 class="text-muted small fw-bold mb-3">Progress Quiz</h6>
                        <div class="d-flex flex-wrap gap-2">
                            @for($i=1; $i<=30; $i++)
                                <div class="nav-circle rounded-circle border 
                                    {{ $i <= 9 ? 'bg-success text-white border-success' : ($i == 10 ? 'bg-primary text-white border-primary' : 'bg-white text-secondary border-secondary') }}">
                                    {{ $i }}
                                </div>
                            @endfor
                        </div>
                        
                        <div class="d-flex gap-4 mt-3">
                            <div class="d-flex align-items-center gap-2">
                                <div class="rounded-circle bg-success" style="width: 10px; height: 10px;"></div>
                                <span class="text-muted small">Sudah Dijawab</span>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <div class="rounded-circle bg-white border border-secondary" style="width: 10px; height: 10px;"></div>
                                <span class="text-muted small">Belum Dijawab</span>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#ffc107" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                                <span class="text-muted small">Ditandai</span>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center border-top pt-4">
                        <button type="button" class="btn btn-outline-secondary px-4 py-2 rounded-3 fw-semibold d-flex align-items-center gap-2">
                            Sebelumnya
                        </button>
                        <button type="submit" class="btn btn-brand px-4 py-2 rounded-3 fw-semibold d-flex align-items-center gap-2">
                            Selanjutnya
                        </button>
                    </div>
                </form>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection