# 💰 MeuPatrimonio

**MeuPatrimonio** é um software livre e open source para **gestão patrimonial e financeira pessoal**, desenvolvido com foco em simplicidade, organização e controle dos gastos, categorias e patrimônio do usuário.

O projeto utiliza **Laravel (backend)**, **Vue 3 + Vite (frontend)** e **Docker**, facilitando a instalação, execução e contribuição.

---

## 🚀 Funcionalidades

- Cadastro de categorias de gasto  
- Registro de gastos  
- Visualização de gastos por categoria  
- Totais e somatórios automáticos  
- Dashboard financeiro  
- API RESTful  
- Interface web responsiva  

---

## 🧱 Tecnologias Utilizadas

### Backend
- PHP 8+
- Laravel
- PostgreSQL
- Eloquent ORM

### Frontend
- Vue 3
- Vite
- Bootstrap 5
- Axios

### Infraestrutura
- Docker
- Docker Compose

---

## 📦 Requisitos

- Docker  
- Docker Compose  

> Não é necessário instalar PHP, Node ou banco localmente.

---

## ▶️ Como executar o projeto

Clone o repositório:

```bash
git clone https://github.com/ferpablos89/meupatrimonio.git
cd meupatrimonio
```

Suba os containers:

```bash
docker compose up -d --build
```

Acesse:

Frontend: http://localhost:5173

Backend (API): http://localhost:8080

## ⚙️ Configuração do Backend

Copie o arquivo de ambiente:

```bash
cp backend/.env.example backend/.env
```

Gere a chave da aplicação:

```bash
docker exec -it meupatrimonio-backend php artisan key:generate
```

Execute as migrations:

```bash
docker exec -it meupatrimonio-backend php artisan migrate
```

## 📁 Estrutura do Projeto

meupatrimonio/
 ├─ backend/
 ├─ frontend/
 ├─ docker-compose.yml
 └─ README.md

## 🔌 Endpoints Principais
Método	Endpoint	Descrição
GET	/api/categoriagasto	Lista categorias
GET	/api/gasto	Lista gastos
POST	/api/gasto	Cadastra gasto
POST	/api/categoriagasto	Cadastra categoria

## 🤝 Contribuindo

Faça um fork

Crie uma branch (git checkout -b feature/minha-feature)

Commit suas alterações

Push para sua branch

Abra um Pull Request


## 👤 Autores

Fernando Pablos, Mitzy Ohira e André Massahiro Shimaoka

## ⭐ Apoie o Projeto

Se este projeto te ajudou, considere deixar uma estrela ⭐ no repositório!