<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Projeto Super Gestão

Super Gestão é um aplicativo web para gerenciar os produtos e vendas de um ecommerce fitctício desenvolvido para testar
e treinar as últimas features tanto do framework Laravel onde usei a versão 8.83.15 quanto da linguagem PHP na 
versão 8.1.1


## Requisitos
- PHP ^8.0
- Laravel 8.75
- Composer

### Verificando a versão do PHP
Para verificar se o PHP está instalado e em qual versão basta executar o comando abaixo.

root@bb7bb6d6e40a:/var/www/html# php -v <br />
PHP 8.1.1 (cli) (built: Dec 21 2021 19:35:25) (NTS) <br />
Copyright (c) The PHP Group <br />
Zend Engine v4.1.1, Copyright (c) Zend Technologies <br />
with Xdebug v3.1.1, Copyright (c) 2002-2021, by Derick Rethans

### Instalação do framework através do composer

- Copie o .env.example,cole e renome para .env
- Execute o comando composer install
- Execute o comando php artisan key:generate

### Instalação do banco de dados

- Crie um novo banco de dados
- Vá no arquivo .env e altere o DB_DATABASE para o nome do banco criado anteriormente
- Execute o comando php arisan migrate
- Verifique se as tabelas foram criadas no banco de dados criado no primeiro passo

### Prints 
![image](https://user-images.githubusercontent.com/93061383/210179324-156689a5-a9fd-4032-9f1a-7868f83bea00.png)
