<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecureFlow - Dashboard</title>
    <link href="{{ asset('css/design-system.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/yourkit.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="sf-sidebar col-md-3 col-lg-2 d-md-block d-none">
                <div class="p-3">
                    <h4 class="text-white mb-4">SecureFlow</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('dashboard') }}">
                                <i class="fas fa-home me-2"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.index') }}">
                                <i class="fas fa-users me-2"></i> Usuários
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-user-tie me-2"></i> Clientes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-file-invoice-dollar me-2"></i> Orçamentos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile') }}">
                                <i class="fas fa-user me-2"></i> Perfil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">
                                <i class="fas fa-sign-out-alt me-2"></i> Sair
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            
            <main class="col-md-9 col-lg-10 p-4">
                <div class="sf-navbar mb-4">
                    <h2 class="mb-0">Dashboard</h2>
                </div>
                
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="sf-card p-3">
                            <div class="d-flex align-items-center">
                                <div class="sf-icon-box-icon me-3">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Usuários</h5>
                                    <h2 class="text-primary mb-0">0</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="sf-card p-3">
                            <div class="d-flex align-items-center">
                                <div class="sf-icon-box-icon me-3" style="background: var(--sf-success);">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Clientes</h5>
                                    <h2 class="text-success mb-0">0</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="sf-card p-3">
                            <div class="d-flex align-items-center">
                                <div class="sf-icon-box-icon me-3" style="background: var(--sf-warning);">
                                    <i class="fas fa-file-invoice-dollar"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Orçamentos</h5>
                                    <h2 class="text-warning mb-0">0</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>