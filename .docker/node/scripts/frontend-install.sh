#!/bin/sh

cd /var/www/html/

if [ -z "$(ls -A node_modules/)" ]; then
    npm install &

    NPM_PID=$!

    wait $NPM_PID
fi

exec "$@"
