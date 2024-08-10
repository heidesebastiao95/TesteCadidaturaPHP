# CRUD Project

Este é um projeto de exemplo para um sistema CRUD (Create, Read, Update, Delete) desenvolvido em Laravel e Livewire.

## Requisitos

- PHP 8.1 ou superior
- Servidor web como Apache ou Nginx
- MySQL ou outro banco de dados compatível

## Instalação

Siga os passos abaixo para configurar o projeto em seu ambiente local.

### 1. Clone o repositório

```sh
git clone https://github.com/heidesebastiao95/TesteCadidaturaPHP.git
```
### 2. Acesse o diretório do projeto
```sh
cd TesteCadidaturaPHP
```
### 3. Instale as Dependências PHP
```sh
composer install
```
### 4 Configurando banco de dados
```sh
cp .env.example .env
```
### 5 Edite o arquivo .env e insira as configurações do seu banco de dados
```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=testecandidaturaphp
DB_USERNAME=root
DB_PASSWORD=

```
### 6 Crie a chave da aplicação
```sh
php artisan key:generate

```
### Execute as migrações
```sh
php artisan migrate

```
### Execute o servidor de desenvolvimento
```sh
php artisan serve


```
Agora, abra o navegador e acesse http://localhost:8080 para visualizar o CRUD.