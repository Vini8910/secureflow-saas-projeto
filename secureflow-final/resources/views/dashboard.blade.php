<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecureFlow - Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f5f7fa; }
        .sidebar { background: #667eea; min-height: 100vh; }
        .sidebar .nav-link { color: white; }
        .sidebar .nav-link:hover { background: rgba(255,255,255,0.1); }
        .card { border-radius: 10px; border: none; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="sidebar col-md-3 col-lg-2 d-md-block d-none">
                <div class="p-3">
                    <h4 class="text-white mb-4">SecureFlow</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.index') }}">Usuários</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Orçamentos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile') }}">Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">Sair</a>
                        </li>
                    </ul>
                </div>
            </nav>
            
            <main class="col-md-9 col-lg-10 p-4">
                <h2 class="mb-4">Dashboard</h2>
                
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card p-3">
                            <h5>Usuários</h5>
                            <h2 class="text-primary">0</h2>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card p-3">
                            <h5>Clientes</h5>
                            <h2 class="text-success">0</h2>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card p-3">
                            <h5>Orçamentos</h5>
                            <h2 class="text-warning">0</h2>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>