FROM php:8.1-fpm-buster AS base

LABEL maintainer="thomersonroncally@outlook.com"

RUN apt-get -y update \
    && apt-get install -y gnupg ca-certificates wget curl gzip zip unzip vim git netcat gettext

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/bin/

RUN install-php-extensions bcmath pdo_mysql pcntl zip gd redis

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN cp /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini \
    && sed -i 's/^memory_limit =.*/memory_limit = 2048M/g' /usr/local/etc/php/php.ini

COPY ./scripts /tmp/scripts

RUN chmod +x /tmp/scripts

FROM base AS fpm

ENTRYPOINT [ "/tmp/scripts/backend-install.sh", "docker-php-entrypoint" ]

FROM base AS worker

CMD /tmp/scripts/worker-entrypoint.sh
