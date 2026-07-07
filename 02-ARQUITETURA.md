# Arquitetura SecureFlow

## Arquitetura Geral

Laravel seguindo padrão MVC.

## Camadas

Controller

Responsável pela entrada HTTP.

Service

Contém regras de negócio.

Repository

Centraliza consultas complexas quando necessário.

Model

Representação das entidades.

Request

Validação de dados.

Policy

Controle de autorização.

## Estrutura

app/

-   Models
-   Http/Controllers
-   Http/Requests
-   Services
-   Repositories
-   Policies
-   Observers
-   Events
-   Jobs

## Princípios

-   Baixo acoplamento
-   Alta coesão
-   Código reutilizável
-   Facilidade de testes
