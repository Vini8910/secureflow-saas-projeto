# Design System - SecureFlow

## Análise do Projeto de Referência

O arquivo `refs/index.html` é um site WordPress/Elementor com as seguintes características:

### Tecnologias Identificadas
- **WordPress** com Elementor Page Builder
- **Bootstrap** (via CSS)
- **Font Awesome** (ícones)
- **Swiper.js** (carrosséis)
- **Google Fonts** (Poppins, Montserrat, Roboto, Oswald, Open Sans)

### Layout e Componentes Observados

#### Header
- Logo à esquerda
- Menu de navegação horizontal
- Ícones de contato (email, telefone, localização)
- Botão de call-to-action

#### Seções Principais
- **Hero Section** com título e vídeo
- **Benefícios** em cards com ícones (6 colunas)
- **Antes/Depois** em colunas
- **Segmentos** com abas (Residencial, Comercial, Industrial)
- **Depoimentos** com carrossel
- **Parceiros** com carrossel de logos
- **Footer** com informações de contato

### Paleta de Cores (Extraída)
- **Primary:** #667eea (roxo/azul)
- **Secondary:** #764ba2 (roxo escuro)
- **Success:** #00d084 (verde)
- **Warning:** #fcb900 (amarelo)
- **Danger:** #cf2e2e (vermelho)
- **Info:** #0693e3 (azul claro)
- **Background:** #f5f7fa (cinza claro)

### Tipografia
- **Fontes:** Poppins, Montserrat, Roboto, Open Sans
- **Tamanhos:** 13px (small), 20px (medium), 36px (large), 42px (x-large)

### Componentes a Criar

1. **Botões** - Primary, Secondary, Success, Warning, Danger
2. **Cards** - Com sombra, cantos arredondados
3. **Tabelas** - Hover, responsivas
4. **Formulários** - Inputs com validação
5. **Modais** - Bootstrap modals
6. **Sidebar** - Fixa com navegação
7. **Navbar** - Topo com menu
8. **Badges** - Status dos itens
9. **Alertas** - Success, error, warning
10. **Carrosséis** - Swiper.js
11. **Aba/Tabs** - Navegação em abas
12. **Icon Boxes** - Cards com ícones

### Sistema de Espaçamentos
- 0.44rem, 0.67rem, 1rem, 1.5rem, 2.25rem, 3.38rem, 5.06rem

### Responsividade
- Desktop, Tablet, Mobile
- Menu hamburguer em mobile
- Colunas responsivas (16 colunas no Elementor)