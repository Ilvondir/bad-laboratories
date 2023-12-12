php -r "copy('.env.example', '.env');"

call composer install

call php artisan migrate:fresh --seed

call php artisan key:generate

call php artisan jwt:secret

code .
