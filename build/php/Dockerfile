FROM php:8.3-apache
RUN apt-get update && \
docker-php-ext-install pdo pdo_mysql
ENV APACHE_DOCUMENT_ROOT=/var/www/mydocker/
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
RUN a2enmod rewrite
RUN apt update && apt upgrade
RUN apt install -y nano git man libmcrypt-dev wget gcc ssl-cert libcurl4-openssl-dev
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.7/install.sh | bash
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug
RUN docker-php-ext-install curl
RUN docker-php-ext-enable curl
RUN a2enmod ssl
RUN a2ensite default-ssl.conf