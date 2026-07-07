# Banco de Dados SecureFlow

## Principais tabelas

users

companies

clients

contracts

budgets

budget_items

service_orders

equipments

technicians

payments

expenses

solar_projects

logs

## Relacionamentos

Cliente possui:

-   Contratos
-   Equipamentos
-   Ordens de Serviço
-   Orçamentos

Contrato possui:

-   Cliente
-   Histórico
-   Financeiro

Ordem de Serviço possui:

-   Cliente
-   Técnico
-   Equipamentos
-   Fotos
-   Checklist
