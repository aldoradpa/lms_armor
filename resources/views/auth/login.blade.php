<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - BPR Arto Moro Academy</title>
    
    @php error_reporting(E_ALL & ~E_DEPRECATED); @endphp

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f3f4f6;
        }
        .login-card {
            width: 100%;
            max-width: 350px;
            border-radius: 12px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            border: none;
        }
        .brand-title {
            color: #1e3a8a; /* Biru Gelap BPR */
            font-weight: 900;
        }
        .brand-subtitle {
            color: #2563eb;
            letter-spacing: 0.1em;
            font-size: 0.85rem;
        }
        .btn-custom {
            background-color: #1e3a8a;
            border-color: #1e3a8a;
            color: white;
        }
        .btn-custom:hover {
            background-color: #172554;
            border-color: #172554;
            color: white;
        }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center min-vh-100">

    <div class="card login-card p-3">
        <div class="card-body text-center p-2">
            
            <div class="mb-4 mt-2">
                <h3 class="brand-title mb-0">BPR ARTO MORO</h3>
                <p class="brand-subtitle fw-bold text-uppercase mt-1 mb-0">Academy</p>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger text-start py-2 px-3 small mb-3" role="alert">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <div class="mb-3 text-start">
                    <label for="username" class="form-label small fw-medium text-secondary mb-1">Username</label>
                    <input type="text" id="username" name="username" value="{{ old('username') }}" required autofocus
                        class="form-control form-control-sm py-2 px-3"
                        placeholder="Masukkan Username Anda">
                </div>

                <div class="mb-4 text-start">
                    <label for="password" class="form-label small fw-medium text-secondary mb-1">Password</label>
                    <input type="password" id="password" name="password" required
                        class="form-control form-control-sm py-2 px-3"
                        placeholder="••••••••">
                </div>

                <button type="submit" class="btn btn-custom w-100 py-2 fw-bold text-sm mb-2 rounded-3">
                    Masuk ke Akademi
                </button>
            </form>
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>