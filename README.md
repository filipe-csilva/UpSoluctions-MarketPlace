# 🛒 UpSoluctions Marketplace

Aplicação web de marketplace desenvolvida com Laravel.

O projeto está em sua fase inicial de fundação e servirá como base para a construção de uma plataforma de produtos, vendedores, clientes, pedidos e pagamentos.

> 🚧 **Status:** Em desenvolvimento inicial.

## 📌 Objetivo

Criar uma plataforma de marketplace com recursos para:

* Cadastro e gerenciamento de produtos;
* Vendedores e lojas;
* Clientes e autenticação;
* Carrinho de compras;
* Pedidos e pagamentos;
* Controle de estoque;
* Avaliações e comunicação;
* Administração e relatórios.

## 🛠️ Stack

### Backend

* PHP 8.3+
* Laravel 13
* Laravel Tinker
* Laravel Boost

### Frontend

* Blade
* Vite
* JavaScript
* CSS

### Qualidade

* Pest
* PHPUnit
* Laravel Pint

### Banco de dados

* MySQL

## 📂 Estrutura

```text
app/
├── Http/Controllers/
├── Models/
└── Providers/

database/
├── factories/
├── migrations/
└── seeders/

resources/
├── css/
├── js/
└── views/

routes/
├── console.php
└── web.php

tests/
├── Feature/
└── Unit/
```

## 🚀 Instalação

### 1. Clonar o projeto

```bash
git clone <URL_DO_REPOSITORIO>
cd UpSoluctions-MarketPlace
```

### 2. Instalar dependências

```bash
composer install
npm install
```

### 3. Configurar o ambiente

No Windows:

```powershell
copy .env.example .env
```

No Linux/macOS:

```bash
cp .env.example .env
```

Gere a chave da aplicação:

```bash
php artisan key:generate
```

### 4. Configurar o banco de dados

Edite o arquivo `.env` com os dados do seu banco:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=upsoluctions_marketplace
DB_USERNAME=root
DB_PASSWORD=
```

Execute as migrations:

```bash
php artisan migrate
```

### 5. Executar a aplicação

Para iniciar o ambiente completo:

```bash
composer dev
```

Ou execute os serviços separadamente:

```bash
php artisan serve
npm run dev
```

A aplicação estará disponível em:

```text
http://localhost:8000
```

## 🔐 Acesso inicial

Após a configuração do banco, o usuário inicial estará disponível com:

```text
E-mail: admin@upsoluctions.com.br
```

> ⚠️ A senha inicial foi definida localmente e deve ser alterada no primeiro acesso. Não armazene senhas reais no repositório.

## 🧪 Comandos úteis

### Testes

```bash
php artisan test
```

### Formatação de código

```bash
vendor/bin/pint
```

### Limpar caches

```bash
php artisan optimize:clear
```

### Listar rotas

```bash
php artisan route:list
```

### Recriar o banco de dados

```bash
php artisan migrate:fresh --seed
```

> ⚠️ `migrate:fresh` apaga todas as tabelas existentes.

## 🗺️ Roadmap

### Fase 01 — Fundação

* ✅ Estrutura inicial do Laravel;
* ✅ Configuração do Composer e NPM;
* ✅ Vite;
* ✅ Migrations padrão;
* ✅ Configuração do Laravel Boost;
* ✅ Testes iniciais.

### Fase 02 — Usuários e acesso

* ⬜ Autenticação;
* ⬜ Perfis de usuário;
* ⬜ Vendedores e clientes;
* ⬜ Roles e permissões;
* ⬜ Policies e autorização.

### Fase 03 — Catálogo

* ⬜ Categorias;
* ⬜ Produtos;
* ⬜ Imagens;
* ⬜ Estoque;
* ⬜ Variações e preços.

### Fase 04 — Compras

* ⬜ Carrinho;
* ⬜ Checkout;
* ⬜ Pedidos;
* ⬜ Pagamentos;
* ⬜ Entregas e acompanhamento.

### Fase 05 — Administração

* ⬜ Dashboard;
* ⬜ Gerenciamento de usuários;
* ⬜ Gerenciamento de lojas e produtos;
* ⬜ Relatórios;
* ⬜ Auditoria.

### Fase 06 — Qualidade e produção

* ⬜ Testes de domínio;
* ⬜ API REST;
* ⬜ Documentação OpenAPI;
* ⬜ Cache e filas;
* ⬜ CI/CD;
* ⬜ Deploy.

## 👨‍💻 Desenvolvedor

**Filipe Silva**

Projeto desenvolvido para aplicação prática de PHP, Laravel, banco de dados, arquitetura, autenticação, autorização, testes e DevOps.

## 📄 Licença

Este projeto está licenciado sob a licença **MIT**.
