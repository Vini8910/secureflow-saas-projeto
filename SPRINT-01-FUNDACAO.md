# Sprint 01 - Fundação

## Objetivo

Implementar o módulo de **Fundação**.

## Escopo

-   Instalação Laravel, configuração MySQL, .env, estrutura inicial

## User Stories

-   Implementar funcionalidades do módulo conforme PRD.

## Critérios de Aceite

-   Funcionalidade concluída.
-   Validações implementadas.
-   Testes executados.
-   Documentação atualizada.

## Desenvolvimento

### Migrations

-   `2014_10_12_000000_create_users_table.php` - Tabela de usuários (padrão Laravel)
-   `2014_10_12_100000_create_password_resets_table.php` - Reset de senhas (padrão Laravel)
-   `2019_12_14_000001_create_personal_access_tokens_table.php` - Tokens Sanctum (padrão Laravel)

### Models

-   `User.php` - Model de usuário com Sanctum

### Controllers

-   `Controller.php` - Controller base

### Services

-   Nenhum service adicional no Sprint 1

### Requests

-   Nenhum request adicional no Sprint 1

### Policies

-   Nenhuma policy adicional no Sprint 1

### Views

-   `welcome.blade.php` - View inicial

### Rotas

-   `web.php` - Rota raiz configurada
-   `api.php` - Rota `/user` protegida com Sanctum

## Qualidade

-   Testes
-   Revisão de código
-   Validação funcional

## Git

-   Branch: feature/01-fundacao
-   Commit: feat: fundação

## Entrega

-   Resumo técnico
-   Arquivos alterados
-   Testes realizados
-   Aguardar aprovação antes da próxima Sprint.

## Status: ✅ Concluído

### Notas Técnicas

-   Laravel 12 instalado com PHP 8.0+
-   Sanctum configurado para autenticação API
-   Banco de dados MySQL configurado
-   Estrutura base pronta para desenvolvimento