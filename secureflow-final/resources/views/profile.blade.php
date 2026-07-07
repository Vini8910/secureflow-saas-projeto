<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecureFlow - Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f5f7fa; }
        .sidebar { background: #667eea; min-height: 100vh; }
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
                        <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">Usuários</a></li>
                        <li class="nav-item"><a class="nav-link active" href="{{ route('profile') }}">Perfil</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">Sair</a></li>
                    </ul>
                </div>
            </nav>
            
            <main class="col-md-9 col-lg-10 p-4">
                <h2 class="mb-4">Meu Perfil</h2>
                
                <div class="card p-4">
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label class="form-label">Nome</label>
                            <input type="text" name="name" class="form-control" value="{{ auth()->user()->name ?? '' }}">
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ auth()->user()->email ?? '' }}">
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Nova Senha</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
</body>
</html>