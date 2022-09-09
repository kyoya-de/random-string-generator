FROM php:8.0

RUN apt-get update -y && \
    apt-get install -y libzip-dev zip && \
    docker-php-source extract && \
    docker-php-ext-install -j$(nproc) zip && \
    pecl install xdebug && \
    docker-php-ext-enable xdebug && \
    curl -sSL https://getcomposer.org/installer -o /tmp/composer-setup && \
    php /tmp/composer-setup --filename=composer --install-dir=/usr/bin && \
    rm -f /tmp/composer-setup && \
    docker-php-source delete && \
    apt-get clean && \
    echo "xdebug_mode=coverage" >> $(php-config --extension-dir)/zz-config.ini

COPY * /app

WORKDIR /app

RUN composer install

CMD ["/app/vendor/bin/phpspec", "run"]
