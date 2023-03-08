#!/bin/bash

cd /var/www/html

EXIT_CODE=1
while [ "$EXIT_CODE" -ne "0" ]
do

    if [ -f "artisan" ]; then
        php artisan

        EXIT_CODE=$?
    fi

    sleep 5

done

php artisan queue:work --queue=states,cities,notifications,emails,default --sleep=3 --tries=3 --max-jobs=1000 --max-time=3600

exec "$@"
