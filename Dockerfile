FROM php:7.4.1-apache
COPY .docker/php/php.ini /usr/local/etc/php/
COPY . /src/app
COPY .docker/apache/vhost.conf /etc/apache2/sites-available/000-default.conf

RUN apt-get update
RUN apt-get install -y libonig-dev libicu-dev && \
    docker-php-ext-install -j$(nproc) intl
#RUN apt-get update
#RUN apt-get install libicu-dev -y
#RUN docker-php-ext-install -j$(nproc) mbstring
#RUN pecl install intl-3.0.0
#RUN docker-php-ext-enable intl