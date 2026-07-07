# Sprint 02 - Autenticação

## Objetivo

Implementar o módulo de **Autenticação**.

## Escopo

-   Login, logout, recuperação de senha, registro de usuários

## User Stories

-   Como usuário, posso me registrar no sistema
-   Como usuário, posso fazer login com email e senha
-   Como usuário, posso fazer logout
-   Como usuário, posso recuperar minha senha via email

## Critérios de Aceite

-   Funcionalidade concluída.
-   Validações implementadas.
-   Testes executados.
-   Documentação atualizada.

## Desenvolvimento

### Migrations

-   `2014_10_12_000000_create_users_table.php` - Tabela de usuários (já existe)
-   `2014_10_12_100000_create_password_resets_table.php` - Reset de senhas (já existe)

### Models

-   `User.php` - Model de usuário com Sanctum, SoftDeletes, role e status

### Controllers

-   `AuthController.php` - Controller de autenticação
  -   `register()` - Registro de novos usuários
  -   `login()` - Autenticação e geração de token
  -   `logout()` - Revogação de token
  -   `forgotPassword()` - Envio de link de recuperação
  -   `resetPassword()` - Redefinição de senha

### Services

-   `AuthService.php` - Lógica de autenticação

### Requests

-   `RegisterRequest.php` - Validação de registro
-   `LoginRequest.php` - Validação de login
-   `ForgotPasswordRequest.php` - Validação de recuperação
-   `ResetPasswordRequest.php` - Validação de redefinição

### Policies

-   `UserPolicy.php` - Políticas de acesso ao usuário

### Views

-   Nenhuma view adicional (API only)

### Rotas

-   `api.php`
  -   `POST /api/register` - Registro
  -   `POST /api/login` - Login
  -   `POST /api/logout` - Logout (auth:sanctum)
  -   `POST /api/forgot-password` - Recuperação de senha
  -   `POST /api/reset-password` - Redefinição de senha

## Qualidade

-   Testes de autenticação
-   Revisão de código
-   Validação funcional

## Git

-   Branch: feature/02-autenticacao
-   Commit: feat: autenticação

## Entrega

-   Resumo técnico
-   Arquivos alterados
-   Testes realizados
-   Aguardar aprovação antes da próxima Sprint.

## Status: ✅ Concluído

### Notas Técnicas

-   Usar Laravel Sanctum para autenticação API
-   Tokens com expiração configurável
-   Validação de email único
-   Hash de senha com bcrypt
-   Soft deletes para desativação de usuários
-   Campos: name, email, password, status, role
-   Locale: pt_BR (Brasil)