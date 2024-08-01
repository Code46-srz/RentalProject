#!/bin/bash
echo "PORT environment variable is set to: $PORT"

if [ ! -f "vendor/autoload.php" ]; then
    composer install --no-progress --no-interaction
fi

if [ ! -f ".env" ]; then
    echo "Creating env file for env $APP"
    cp .env.exmple .env
else
    echo "env file exists."
fi

php artisan migrate
php artisan key:generate
php artisan cache:clear
php artisan config:clear
php aritsan route:clear

php artisan serve --port=${PORT:-8000} --host=0.0.0.0 --env=.env
exec docker-php-entrypoint "$@"
