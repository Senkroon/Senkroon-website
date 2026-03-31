php artisan make:filament-user


docker exec -it $(docker ps -qf name=php-fpm-mailcow) php -r "echo '{BLF-CRYPT}' . password_hash('YeniSifreniz', PASSWORD_BCRYPT)"



php artisan 

php artisan serve --host=0.0.0.0 --port=8000
