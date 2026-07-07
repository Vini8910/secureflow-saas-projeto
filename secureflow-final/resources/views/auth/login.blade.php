<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecureFlow - Login</title>
    <link href="{{ asset('css/design-system.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/yourkit.js" crossorigin="anonymous"></script>
</head>
<body class="d-flex align-items-center" style="min-height: 100vh; background: linear-gradient(135deg, var(--sf-primary) 0%, var(--sf-secondary) 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="sf-card p-4">
                    <div class="text-center mb-4">
                        <h2 class="fw-bold">SecureFlow</h2>
                        <p class="text-muted">Sistema SaaS para Gestão de Serviços</p>
                    </div>
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="sf-label">Email</label>
                            <input type="email" name="email" class="sf-input" required>
                        </div>
                        <div class="mb-3">
                            <label class="sf-label">Senha</label>
                            <input type="password" name="password" class="sf-input" required>
                        </div>
                        <button type="submit" class="sf-btn sf-btn-primary w-100">Entrar</button>
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