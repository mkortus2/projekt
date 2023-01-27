FROM php:8.1-rc-apache 
COPY . /var/www/html/
RUN docker-php-ext-install mysqli
WORKDIR /var/www/html/




