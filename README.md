echo 'create database curso_forum' | mysql -u<user> -p<password>

php artisan migrate
php artisan db:seed
