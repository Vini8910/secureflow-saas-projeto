# Sprint 03 - Usuários

## Objetivo

Implementar o módulo de **Usuários**.

## Escopo

-   CRUD de usuários, perfis, permissões básicas

## User Stories

-   Como administrador, posso listar todos os usuários
-   Como administrador, posso visualizar detalhes de um usuário
-   Como administrador, posso criar novos usuários
-   Como administrador, posso editar usuários existentes
-   Como administrador, posso desativar usuários
-   Como usuário, posso visualizar e editar meu próprio perfil

## Critérios de Aceite

-   Funcionalidade concluída.
-   Validações implementadas.
-   Testes executados.
-   Documentação atualizada.

## Desenvolvimento

### Migrations

-   `2024_01_01_000000_add_fields_to_users_table.php` - Adiciona campos status, role e soft deletes
-   Tabela `users` já existe do Sprint 1

### Models

-   `User.php` - Model de usuário com Sanctum, SoftDeletes, role e status

### Controllers

-   `UserController.php` - Controller de usuários
  -   `index()` - Listagem de usuários (admin)
  -   `show()` - Detalhes de um usuário
  -   `store()` - Criação de usuário (admin)
  -   `update()` - Atualização de usuário (admin)
  -   `destroy()` - Desativação de usuário (admin)
  -   `me()` - Dados do usuário autenticado
  -   `updateMe()` - Atualização do próprio perfil

### Services

-   `UserService.php` - Lógica de negócio de usuários

### Requests

-   `StoreUserRequest.php` - Validação de criação
-   `UpdateUserRequest.php` - Validação de atualização
-   `UpdateProfileRequest.php` - Validação de atualização de perfil

### Policies

-   `UserPolicy.php` - Políticas de acesso
  -   `viewAny` - Visualizar lista (admin)
  -   `view` - Visualizar detalhes (admin ou próprio usuário)
  -   `create` - Criar usuário (admin)
  -   `update` - Atualizar usuário (admin ou próprio usuário)
  -   `delete` - Desativar usuário (admin, exceto próprio usuário)

### Views

-   Nenhuma view adicional (API only)

### Rotas

-   `api.php`
  -   `GET /api/users` - Listagem (admin)
  -   `GET /api/users/{id}` - Detalhes (admin)
  -   `POST /api/users` - Criação (admin)
  -   `PUT /api/users/{id}` - Atualização (admin)
  -   `DELETE /api/users/{id}` - Desativação (admin)
  -   `GET /api/me` - Dados do usuário autenticado
  -   `PUT /api/me` - Atualização do próprio perfil

## Qualidade

-   Testes de CRUD de usuários
-   Revisão de código
-   Validação funcional

## Git

-   Branch: feature/03-usuarios
-   Commit: feat: usuários

## Entrega

-   Resumo técnico
-   Arquivos alterados
-   Testes realizados
-   Aguardar aprovação antes da próxima Sprint.

## Status: ✅ Concluído

### Notas Técnicas

-   Soft deletes para desativação de usuários
-   Validação de email único
-   Campos: name, email, password, status, role
-   Integração com Sprint 2 (autenticação)
-   Paginação com 15 itens por página
-   UserResource para formatação de resposta JSON