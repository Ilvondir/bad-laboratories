/opt/lampp/bin/mysql -uroot -e "CREATE DATABASE IF NOT EXISTS pab_lab6;" # Linux

/Applications/xampp/xamppfiles/bin/mysql -uroot -e "CREATE DATABASE IF NOT EXISTS pab_lab6;"  # Mac

php -r "copy('.env.example', '.env');"

composer install

php artisan migrate:fresh --seed

php artisan key:generate

code .
