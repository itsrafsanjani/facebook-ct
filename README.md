## Installation Instructions

- Clone the repo.

```sh
    cd facebook-ct
    
    composer install
    
    php -r "file_exists('.env') || copy('.env.example', '.env');"
    
    or
    
    cp .env.example .env
    
    php artisan key:generate --ansi
    
    mysql -uroot
    
    create database facebook_ct;
```    

- update `.env` file

```shell
    php artisan migrate --seed
    
    npm install && npm run dev / npm run watch
```

- For tests run this command

```shell
    ./vendor/bin/phpunit
```
