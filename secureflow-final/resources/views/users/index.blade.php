<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecureFlow - Usuários</title>
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
                            <a class="nav-link" href="{{ route('dashboard') }}">
                                <i class="fas fa-home me-2"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('users.index') }}">
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
                <div class="sf-navbar mb-4 d-flex justify-content-between align-items-center">
                    <h2 class="mb-0">Usuários</h2>
                    <button class="sf-btn sf-btn-primary" data-bs-toggle="modal" data-bs-target="#createUserModal">
                        <i class="fas fa-plus me-2"></i> Novo Usuário
                    </button>
                </div>
                
                <div class="sf-card">
                    <div class="sf-card-body">
                        <table class="sf-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Administrador</td>
                                    <td>admin@secureflow.com.br</td>
                                    <td><span class="sf-badge sf-badge-success">Ativo</span></td>
                                    <td>
                                        <button class="sf-btn sf-btn-outline-primary sf-btn-sm me-2">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="sf-btn sf-btn-danger sf-btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>