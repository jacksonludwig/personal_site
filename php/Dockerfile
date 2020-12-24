FROM php:7.4-fpm

# Initialize default production configuration
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Install dependencies
RUN ["docker-php-ext-install", "mysqli", "sockets", "pdo", "pdo_mysql"]
RUN ["docker-php-ext-enable", "mysqli", "pdo", "pdo_mysql"]
RUN ["docker-php-ext-configure", "sockets", "--enable-sockets"]

# Copy files
WORKDIR /var/www
COPY . /var/www

EXPOSE 9000
CMD ["php-fpm"]
