<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecureFlow - Usuários</title>
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
                        <li class="nav-item"><a class="nav-link active" href="{{ route('users.index') }}">Usuários</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('profile') }}">Perfil</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">Sair</a></li>
                    </ul>
                </div>
            </nav>
            
            <main class="col-md-9 col-lg-10 p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Usuários</h2>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createUserModal">Novo Usuário</button>
                </div>
                
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover">
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
                                    <td><span class="badge bg-success">Ativo</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary">Editar</button>
                                        <button class="btn btn-sm btn-outline-danger">Desativar</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>