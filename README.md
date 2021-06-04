<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

Esse é um projeto criado utilizando a framework Laravel para demonstrar um CRUD de contatos.

## Requisitos

Para rodar essa aplicação é necessário ter instalado em seu computador:
- [Composer](https://getcomposer.org/doc/00-intro.md)
- [Node (a partir da 12.2.0)](https://nodejs.org/en/)
- [PHP 7.4](https://www.php.net/)

## Instalando as dependências

Ao clonar o repositório, instale as dependências:

```sh
npm install
composer install
```

## Configurando a aplicação

Disponibilizamos um arquivo chamado `.env.example` que contém todas as variáveis de ambiente necessárias para o funcionamento da aplicação.

É importante notar que o `DB_HOST` está `mysql` devido ao container mysql que é criado no arquivo `docker-compose.yml`, portanto, caso você queira executar a aplicação de maneira local, é necessário mudar o valor da variável para sua instância do banco `mysql`.

É necessário que você copie o conteúdo do arquivo `.env.example` para um arquivo chamado `.env` e mude as variáveis de acordo com sua necessidade.

Se atente às variáveis de conexão com o banco de dados, pois elas precisam ser direcionadas à sua própria instância de [MySQL](https://www.mysql.com/).

## Executando a aplicação localmente

Inicie o servidor do [Laravel Elixir](https://laravel.com/docs/5.3/elixir), para que ele possa atualizar nossa aplicação sempre que um código ser modificado:

```
npm run watch
```

Execute as migrations no banco de dados

```
php artisan migrate
```

Inicie a aplicação:

```
php artisan serve
```

## Executando a aplicação em um container Docker.

### Requisitos

Certifique-se de que o [Docker](https://docs.docker.com/engine/install/ubuntu) e o [Docker Compose](https://docs.docker.com/compose/install/) estejam instalados no seu computador.

### Criando os containers 

Em uma aba do terminal, execute o seguinte comando:

```
docker-compose up -d --build
```

Após o término do processo, instale as dependências do `composer` dentro do container:

```
docker exec app composer install
```

Gere uma chave para a sua aplicação:

```
docker exec app php artisan key:generate
```

E por fim, execute as migrations do banco de dados:

```
docker exec app php artisan migrate
```

No término desse processo, teremos três containers criados:

- **nginx**: Servidor HTTP responsável por hospedar e redirecionar para nossa aplicação.
- **mysql**: Um banco de dados responsável por armazenar os contatos do
- **app**: A aplicação Laravel.

Você consegue acessar o servidor nginx através do endereço: `http://localhost:8000`
