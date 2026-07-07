<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecureFlow - Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; }
        .card { border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.2); }
        .btn-primary { background: #667eea; border: none; }
        .btn-primary:hover { background: #5a6fd6; }
    </style>
</head>
<body class="d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card p-4">
                    <div class="text-center mb-4">
                        <h2 class="fw-bold">SecureFlow</h2>
                        <p class="text-muted">Sistema SaaS para Gestão de Serviços</p>
                    </div>
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Senha</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Entrar</button>
                    </form>
                    
                    <div class="text-center mt-3">
                        <a href="{{ route('register') }}" class="text-decoration-none">Criar conta</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>