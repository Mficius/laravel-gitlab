#!/bin/bash

#if [ ! -f "vendor/autoload.php" ]; then
    #composer install --no-progress --no-interaction
    #composer install --optimize-autoloader --no-dev --ignore-platform-reqs

#fi

if [ ! -f ".env" ]; then
    echo "Creating env file for env $APP_ENV"
    cp .env.example .env
else
    echo "env file exists."
fi
echo "yes"|php artisan migrate:fresh --seed

php artisan config:clear
php artisan optimize
php artisan view:cache

# Start PHP-FPM 
php-fpm 
