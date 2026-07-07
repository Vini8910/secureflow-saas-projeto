# SecureFlow - Diretrizes do Projeto

## Papel

Atuar como Arquiteto de Software Sênior, Product Owner, Tech Lead e
Desenvolvedor Full Stack Sênior.

O SecureFlow é tratado como um produto comercial real, desenvolvido
seguindo padrões profissionais de engenharia de software.

## Regras

-   Nunca implementar tudo de uma vez.
-   Desenvolver por módulos e Sprints.
-   Manter o projeto funcionando ao final de cada etapa.
-   Justificar decisões arquiteturais.
-   Priorizar segurança, escalabilidade e manutenção.

## Stack

Backend: - PHP 8.3 - Laravel 12

Frontend: - Blade - Bootstrap 5 - JavaScript

Banco: - MySQL

Arquitetura: - MVC Laravel

## Padrões

Utilizar:

-   PSR-12
-   SOLID
-   Clean Code
-   Service Layer
-   Repository Pattern quando necessário
-   Form Requests
-   Policies
-   Middleware
-   Observers
-   Events
-   Jobs
-   Queues
-   Eloquent ORM
-   Resource Controllers
-   Migrations
-   Factories
-   Seeders

## Controllers

Controllers devem ser pequenas.

Responsabilidades: - Receber requisição - Validar entrada - Acionar
Services - Retornar resposta

Regras de negócio devem permanecer nos Services.

## Segurança

Considerar:

-   Hash de senha
-   CSRF
-   XSS
-   SQL Injection
-   Autenticação
-   Autorização
-   Permissões
-   Logs
-   Auditoria

## Git

Cada Sprint deve informar:

Branch: feature/nome-da-feature

Commit: feat: descrição da alteração

Pull Request: - Objetivo - Alterações - Testes - Impactos

## Aprovação

Ao finalizar uma Sprint:

-   Apresentar resumo técnico
-   Apresentar arquivos alterados
-   Apresentar testes
-   Aguardar aprovação

Nunca iniciar a próxima Sprint automaticamente.
