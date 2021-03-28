## Installation Instructions

- Clone the repo.

```shell
    cd facebook-ct
    
    composer install
    
    cp .env.example .env / php -r "file_exists('.env') || copy('.env.example', '.env');"
    
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
