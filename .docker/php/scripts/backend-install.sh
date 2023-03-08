#!/bin/sh

cd /var/www/html

if [ ! -d "vendor" ]; then
    chown -R www-data.www-data storage/
    chown -R www-data.www-data bootstrap/cache

    composer install &

    COMPOSER_PID=$!

    wait $COMPOSER_PID

    php artisan key:generate

    php artisan migrate:fresh --seed
fi

exec "$@"
