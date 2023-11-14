/opt/lampp/bin/mysql -uroot -e "CREATE DATABASE IF NOT EXISTS pab_lab4;" # Linux

/Applications/xampp/xamppfiles/bin/mysql -uroot -e "CREATE DATABASE IF NOT EXISTS pab_lab4;"  # Mac

php -r "copy('.env.example', '.env');"

composer install

php artisan migrate:fresh --seed

php artisan key:generate

code .
