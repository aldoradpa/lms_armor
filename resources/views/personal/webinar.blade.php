@extends('layouts.app')

@section('content')
<!-- Custom Styles -->
<style>
    .bg-gradient-brand { background: linear-gradient(135deg, #0a1f5c, #0f2557, #1a3a7c); }
    .bg-brand { background-color: #0f2557; }
    .text-brand { color: #0f2557; }
    .rounded-4 { border-radius: 1rem !important; }
    .event-card { transition: 0.2s; border-left: 4px solid transparent; }
    .event-card:hover { border-left-color: #0f2557; box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1); }
</style>

<div class="d-flex flex-column gap-4">
    <!-- Breadcrumb -->
    <nav class="d-flex align-items-center gap-2 text-sm text-secondary">
        <a href="{{ route('dashboard') }}" class="text-decoration-none text-secondary">Beranda</a>
        <svg style="width: 14px; height: 14px;" class="text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        <span class="text-dark fw-bold">Webinar & Event</span>
    </nav>

    <!-- Header -->
    <div class="card rounded-4 border-0 shadow-sm p-4 bg-brand text-white">
        <h2 class="fw-bold h4">Webinar & Event</h2>
        <p class="text-white-50 text-sm mb-0">Jangan lewatkan agenda pelatihan dan sesi berbagi ilmu untuk meningkatkan skill kamu.</p>
    </div>

    <!-- Filter -->
    <div class="d-flex gap-2">
        <button class="btn btn-sm bg-brand text-white rounded-pill px-3">Mendatang</button>
        <button class="btn btn-sm btn-outline-secondary rounded-pill px-3">Selesai</button>
    </div>

    <!-- Event List -->
    <div class="row g-3">
        @php
            $events = [
                ['title' => 'Strategi Pertumbuhan DPK di Era Digital', 'date' => '20 Mei 2024', 'time' => '10:00 WIB', 'speaker' => 'Budi Santoso, MBA', 'type' => 'Webinar'],
                ['title' => 'Workshop Penagihan Persuasif', 'date' => '25 Mei 2024', 'time' => '09:00 WIB', 'speaker' => 'Dr. Ratna Sari', 'type' => 'Workshop'],
                ['title' => 'Townhall Meeting BPR Arto Moro', 'date' => '01 Juni 2024', 'time' => '13:00 WIB', 'speaker' => 'Direksi', 'type' => 'Event'],
            ];
        @endphp

        @foreach($events as $e)
        <div class="col-12">
            <div class="card event-card rounded-4 border-0 shadow-sm p-3 d-flex flex-row align-items-center gap-4">
                <div class="text-center bg-light rounded-3 p-3" style="width: 80px;">
                    <div class="text-xs text-uppercase fw-bold text-danger">{{ date('M', strtotime($e['date'])) }}</div>
                    <div class="h5 fw-bold mb-0">{{ date('d', strtotime($e['date'])) }}</div>
                </div>
                <div class="flex-grow-1">
                    <span class="badge bg-primary-subtle text-primary rounded-pill text-xs mb-1">{{ $e['type'] }}</span>
                    <h5 class="fw-bold text-dark mb-1">{{ $e['title'] }}</h5>
                    <p class="text-xs text-muted mb-0">
                        <span class="me-3"><i class="bi bi-clock"></i> {{ $e['time'] }}</span>
                        <span><i class="bi bi-person"></i> Speaker: {{ $e['speaker'] }}</span>
                    </p>
                </div>
                <button class="btn btn-outline-brand rounded-3 text-sm fw-bold px-4">Daftar</button>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection