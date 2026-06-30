<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BPR Arto Moro Academy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * { font-family: 'Inter', sans-serif; }
        
        /* Custom Scrollbar */
        .scrollbar-thin::-webkit-scrollbar { width: 4px; }
        .scrollbar-thin::-webkit-scrollbar-track { background: transparent; }
        .scrollbar-thin::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }

        /* Sidebar Styling & Interactive Effects */
        .sidebar-link { 
            transition: all 0.2s ease-in-out; 
            color: rgba(255, 255, 255, 0.75) !important;
        }
        .sidebar-link:hover { 
            background: rgba(255, 255, 255, 0.1); 
            color: #ffffff !important;
        }
        .sidebar-link.active { 
            background: rgba(255, 255, 255, 0.18); 
            color: #ffffff !important;
            font-weight: 600;
        }
        .sidebar-link svg {
            color: #93c5fd;
            transition: color 0.2s ease;
        }
        .sidebar-link:hover svg, .sidebar-link.active svg {
            color: #ffffff !important;
        }
    </style>
</head>
<body class="bg-light text-dark antialiased">

<div class="d-flex vh-100 overflow-hidden">

    <aside class="d-none d-md-flex flex-column text-white flex-shrink-0 overflow-y-auto scrollbar-thin" style="width: 260px; background-color: #0f2557;">
        
        <div class="px-4 py-4 border-bottom" style="border-color: rgba(255,255,255,0.1) !important;">
            <div class="d-flex align-items-center gap-3">
                <div class="bg-white rounded-3 d-flex align-items-center justify-content-center flex-shrink-0" style="width: 36px; height: 36px;">
                    <span class="font-black text-center lh-tight" style="color: #0f2557; font-size: 11px; font-weight: 900;">BPR</span>
                </div>
                <div>
                    <div class="fw-bold small lh-tight">BPR ARTO MORO</div>
                    <div class="text-uppercase tracking-wider" style="font-size: 10px; color: #93c5fd; letter-spacing: 0.05em;">Academy</div>
                </div>
            </div>
        </div>

        <nav class="flex-grow-1 py-3 px-2">
            <a href="{{ route('dashboard') }}" class="sidebar-link {{ request()->routeIs('dashboard') ? 'active' : '' }} d-flex align-items-center gap-3 px-3 py-2.5 rounded-3 text-sm text-decoration-none mb-1">
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                <span style="font-size: 0.875rem;">Beranda</span>
            </a>

            <div class="pt-3 pb-1 px-3">
                <p class="fw-semibold text-uppercase" style="font-size: 10px; color: #60a5fa; letter-spacing: 0.1em; margin-bottom: 0;">Akademi</p>
            </div>

            <a href="{{ route('academy.show', 'funding') }}" class="sidebar-link {{ request()->is('academy/funding') ? 'active' : '' }} d-flex align-items-center gap-3 px-3 py-2.5 rounded-3 text-sm text-decoration-none mb-1">
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <span>Akademi Funding</span>
            </a>

            <a href="{{ route('academy.show', 'kredit') }}" class="sidebar-link {{ request()->is('academy/kredit') ? 'active' : '' }} d-flex align-items-center gap-3 px-3 py-2.5 rounded-3 text-sm text-decoration-none mb-1">
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 11h.01M12 11h.01M15 11h.01M4 19h16a2 2 0 002-2V7a2 2 0 00-2-2H4a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                <span>Akademi Kredit</span>
            </a>

            <a href="{{ route('academy.show', 'collection') }}" class="sidebar-link {{ request()->is('academy/collection') ? 'active' : '' }} d-flex align-items-center gap-3 px-3 py-2.5 rounded-3 text-sm text-decoration-none mb-1">
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                <span>Akademi Collection</span>
            </a>

            <a href="{{ route('academy.show', 'service') }}" class="sidebar-link {{ request()->is('academy/service') ? 'active' : '' }} d-flex align-items-center gap-3 px-3 py-2.5 rounded-3 text-sm text-decoration-none mb-1">
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138-3.138z"/></svg>
                <span>Akademi Service</span>
            </a>

            <a href="{{ route('academy.show', 'kepatuhan') }}" class="sidebar-link {{ request()->is('academy/kepatuhan') ? 'active' : '' }} d-flex align-items-center gap-3 px-3 py-2.5 rounded-3 text-sm text-decoration-none mb-1">
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                <span>Akademi Kepatuhan</span>
            </a>

            <a href="{{ route('academy.show', 'kepemimpinan') }}" class="sidebar-link {{ request()->is('academy/kepemimpinan') ? 'active' : '' }} d-flex align-items-center gap-3 px-3 py-2.5 rounded-3 text-sm text-decoration-none mb-1">
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                <span>Akademi Kepemimpinan</span>
            </a>

            <div class="pt-3 pb-1 px-3">
                <p class="fw-semibold text-uppercase" style="font-size: 10px; color: #60a5fa; letter-spacing: 0.1em; margin-bottom: 0;">Personal</p>
            </div>

            <a href="{{ route('personal.sertifikasi') }}" class="sidebar-link {{ request()->routeIs('personal.sertifikasi') ? 'active' : '' }} d-flex align-items-center gap-3 px-3 py-2.5 rounded-3 text-sm text-decoration-none mb-1">
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                <span style="font-size: 0.875rem;">Sertifikasi</span>
            </a>

            <a href="{{ route('personal.perpustakaan') }}" class="sidebar-link {{ request()->routeIs('personal.perpustakaan') ? 'active' : '' }} d-flex align-items-center gap-3 px-3 py-2.5 rounded-3 text-sm text-decoration-none mb-1">
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                <span style="font-size: 0.875rem;">Perpustakaan Digital</span>
            </a>

            <a href="{{ route('personal.forum') }}" class="sidebar-link {{ request()->routeIs('personal.forum') ? 'active' : '' }} d-flex align-items-center gap-3 px-3 py-2.5 rounded-3 text-sm text-decoration-none mb-1">
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                <span style="font-size: 0.875rem;">Forum Diskusi</span>
            </a>

            <a href="{{ route('personal.webinar') }}" class="sidebar-link {{ request()->routeIs('personal.webinar') ? 'active' : '' }} d-flex align-items-center gap-3 px-3 py-2.5 rounded-3 text-sm text-decoration-none mb-1">
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.069A1 1 0 0121 8.82v6.36a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                <span style="font-size: 0.875rem;">Webinar & Event</span>
            </a>

            <a href="#" class="sidebar-link d-flex align-items-center gap-3 px-3 py-2.5 rounded-3 text-sm text-decoration-none mb-1">
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                <span style="font-size: 0.875rem;">Dashboard Kinerja</span>
            </a>
        </nav>

        <div class="p-3 border-top" style="border-color: rgba(255,255,255,0.1) !important;">
            <div class="d-flex align-items-center gap-3 rounded-3 p-3" style="background-color: rgba(255,255,255,0.1);">
                <div class="rounded-circle bg-warning d-flex align-items-center justify-content-center flex-shrink-0" style="width: 40px; height: 40px;">
                    <svg width="20" height="20" class="text-dark" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                </div>
                <div class="min-w-0">
                    <p class="mb-0 text-white-50" style="font-size: 11px;">Level Anda</p>
                    <p class="fw-bold text-white mb-0" style="font-size: 0.875rem;">Gold Learner</p>
                    <p class="fw-semibold text-warning mb-0" style="font-size: 11px;">3.250 Poin</p>
                </div>
            </div>
        </div>
    </aside>

    <div class="flex-grow-1 d-flex flex-column overflow-hidden">

        <header class="bg-white border-bottom px-4 py-2 d-flex align-items-center justify-content-between flex-shrink-0" style="z-index: 10; height: 60px;">
            <button class="d-md-none btn btn-light p-2 rounded-3 border-0">
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>

            <div class="d-none d-md-flex align-items-center gap-2 bg-light border rounded-3 px-3 py-2" style="width: 18rem;">
                <svg width="16" height="16" class="text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                <input type="text" placeholder="Cari modul, materi..." class="bg-transparent border-0 w-100 p-0 text-secondary" style="font-size: 0.875rem; outline: none; box-shadow: none;">
            </div>

            <div class="d-flex align-items-center gap-3">
                <button class="position-relative btn btn-light p-2 rounded-3 border-0">
                    <svg width="20" height="20" class="text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
                    <span class="position-absolute bg-danger rounded-circle" style="top: 8px; right: 8px; width: 6px; height: 6px;"></span>
                </button>

                <div class="d-flex align-items-center gap-2" style="cursor: pointer;">
                    <div class="text-end d-none d-sm-block">
                        <p class="fw-semibold text-dark lh-tight mb-0" style="font-size: 0.875rem;">{{ auth()->user()->name ?? 'Andi Pratama' }}</p>
                        <p class="text-muted mb-0" style="font-size: 11px;">Funding Officer</p>
                    </div>
                    <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 text-white fw-bold shadow-sm" style="width: 36px; height: 36px; background-color: #0f2557; font-size: 0.875rem;">
                        AP
                    </div>
                </div>
            </div>
        </header>

        <main class="flex-grow-1 overflow-y-auto p-4 bg-light">
            @yield('content')
        </main>
    </div>

</div>

</body>
</html>