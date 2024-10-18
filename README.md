# PHP
<p align="center">
  <img alt="PHP version" src="https://img.shields.io/static/v1?label=php&message=8.3&color=18181B&labelColor=5354FD">
    <img alt="Laravel version" src="https://img.shields.io/static/v1?label=laravel&message=11.26&color=18181B&labelColor=5354FD">
</p>

## Descrição
O PDV é um sistema onde você consegue vender seus produtos através do código de barras

## O que foi utilizado
Antes de começar a usar este projeto, é necessário ter o seguinte configurado em seu ambiente de desenvolvimento:

- PHP (versão 8.3 ou superior)
- Composer 2
- Laravel (versão 11.x)
- Banco de dados MySQL

## Funcionalidades
- Executando vendas como um PDV

## Atividades
- [X]  - Fundamentos do PHP e do Laravel
- [X]  - Funcionalidades
- [X]  - Finalização da aplicação

## Instalação
Siga as etapas abaixo para configurar o projeto em seu ambiente local:

1. Clone este repositório para sua máquina local:
```
git clone https://github.com/bhcosta90/laravel-pdv.git
```

2. Navegue até o diretório do projeto:
```
cd lara-freelance-hours
```

3. Copie o arquivo `.env` na raiz do projeto a partir do arquivo .env.example para configurar em seguida as informações do seu ambiente, incluindo as credenciais do banco de dados.
```
cp .env .env.example
```
4. Instale as dependências do Composer com o comando:
```
composer install
```

5. Gere a chave de aplicativo Laravel:
```
php artisan key:generate
```

6. Execute as migrações do banco de dados para criar as tabelas necessárias:
```
php artisan migrate
```

7. Se necessário, execute os *seeders* para preencher o banco de dados com dados de exemplo:
```
php artisan db:seed
```

8. Instale as dependências do node:
```
npm install
```

9. Iniciando o servidor de desenvolvimento para o Tailwind
```
npm run build
```
