#!/bin/bash

# Get environment and base path from parameters
ENVIRONMENT=${1:-production}
BASE_PATH=${2:-/var/www}  # Default to /var/www/html if not specified

echo " "
echo "//--- Running after-deploy-web-container.sh for $ENVIRONMENT at $BASE_PATH -----------------------------\\"
echo " "

# Navigate to the correct directory
cd $BASE_PATH

# Path to the changed files list
CHANGED_FILES_PATH="$BASE_PATH/changed_files.txt"

if [ -f "$CHANGED_FILES_PATH" ]; then
    CHANGED_FILES=$(cat "$CHANGED_FILES_PATH")
    echo "Last changed files:"
    echo "  ----------"
    echo "  $CHANGED_FILES"
    echo "  ----------"
else
    echo "No changed files found."
    CHANGED_FILES=""
fi

echo " "
echo "1 - Running Composer install..."
composer install --no-interaction --prefer-dist --optimize-autoloader || { echo "Composer install failed"; exit 1; }

echo "2 - Running database migrations..."
php artisan migrate --force || { echo "Database migrations failed"; exit 1; }

echo "3 - Running Caching views"
php artisan view:cache

echo "4 - Running Caching routes"
php artisan route:cache

echo "5 - Running Caching config"
php artisan config:cache

echo " "
echo "\--- Finished after-deploy-web-container.sh for $ENVIRONMENT _______________________________/"
echo " "