#!/bin/bash

set -e

# Ensure the script fails on any error

# Check if Composer dependencies are installed
if [ ! -f "vendor/autoload.php" ]; then
    composer install --no-progress --no-interaction
fi

# Check if the .env file exists and create if it doesn't
if [ ! -f ".env" ]; then
    echo "Creating env file for env $APP"
    cp .env.example .env
else
    echo "env file exists."
fi

# Run Laravel commands
php artisan key:generate --force
php artisan migrate --force
php artisan cache:clear
php artisan config:clear
php artisan route:clear

# Start the Laravel application
php artisan serve --host=0.0.0.0 --port=$PORT --env=.env
