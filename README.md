# SecureFlow - Sistema SaaS para Gestão de Serviços

## 📋 Sobre o Projeto

SecureFlow é um sistema SaaS completo desenvolvido em Laravel 12 para gestão de serviços, clientes, orçamentos, contratos e documentos. O projeto está estruturado em sprints para desenvolvimento ágil.

## 🚀 Tecnologias

- **Laravel 12** - Framework PHP
- **PHP 8.3+** - Linguagem de programação
- **MySQL** - Banco de dados
- **Laravel Sanctum** - Autenticação API
- **Português (pt_BR)** - Locale padrão

## ✨ Sprints Concluídos

### Sprint 1 - Fundação ✅
- Estrutura base do Laravel 12
- Configuração do Sanctum para autenticação API
- Banco de dados configurado

### Sprint 2 - Autenticação ✅
- Registro de usuários
- Login com geração de token
- Logout (revogação de token)
- Recuperação de senha via email
- Validações em português

### Sprint 3 - Usuários ✅
- CRUD de usuários (admin)
- Perfil do usuário autenticado
- Soft deletes para desativação
- Políticas de acesso (Policies)

## 📁 Estrutura do Projeto

```
secureflow-final/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── AuthController.php
│   │   │   └── UserController.php
│   │   ├── Requests/
│   │   │   ├── RegisterRequest.php
│   │   │   ├── LoginRequest.php
│   │   │   ├── ForgotPasswordRequest.php
│   │   │   ├── ResetPasswordRequest.php
│   │   │   ├── StoreUserRequest.php
│   │   │   ├── UpdateUserRequest.php
│   │   │   └── UpdateProfileRequest.php
│   │   └── Resources/
│   │       └── UserResource.php
│   ├── Models/
│   │   └── User.php
│   ├── Policies/
│   │   └── UserPolicy.php
│   ├── Services/
│   │   ├── AuthService.php
│   │   └── UserService.php
│   └── Providers/
│       └── AuthServiceProvider.php
├── config/
│   └── app.php
├── database/
│   └── migrations/
├── lang/
│   └── pt_BR/
│       └── validation.php
└── routes/
    └── api.php
```

## 🔌 API Endpoints

### Autenticação
```
POST /api/register       - Registro de usuário
POST /api/login          - Login e geração de token
POST /api/logout         - Logout (auth:sanctum)
POST /api/forgot-password - Recuperação de senha
POST /api/reset-password  - Redefinição de senha
```

### Usuários
```
GET /api/users           - Listagem (admin)
GET /api/users/{id}      - Detalhes (admin)
POST /api/users          - Criação (admin)
PUT /api/users/{id}      - Atualização (admin)
DELETE /api/users/{id}   - Desativação (admin)
GET /api/me              - Dados do usuário autenticado
PUT /api/me              - Atualização do próprio perfil
```

## ⚙️ Configuração

1. Clone o repositório
2. Instale as dependências: `composer install`
3. Copie o .env: `cp .env.example .env`
4. Configure o banco de dados no .env
5. Gere a chave: `php artisan key:generate`
6. Execute as migrações: `php artisan migrate`

## 📊 Status do Projeto

| Sprint | Módulo | Status |
|--------|--------|--------|
| 1 | Fundação | ✅ Concluído |
| 2 | Autenticação | ✅ Concluído |
| 3 | Usuários | ✅ Concluído |
| 4 | Permissões | ⏳ Pendente |
| 5 | Clientes | ⏳ Pendente |
| ... | ... | ... |

## 👨‍💻 Desenvolvedor

Projeto desenvolvido como parte do portfólio de desenvolvimento Laravel.

---

**Próximos passos:** Sprint 4 - Permissões (Roles e Permissions com Spatie Laravel Permission)
