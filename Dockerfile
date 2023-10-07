FROM php:8.0-apache

# PHP Extensions
RUN docker-php-ext-install mysqli pdo_mysql
RUN a2enmod rewrite

# Copy custom php.ini
COPY ./custom-php.ini /usr/local/etc/php/conf.d/

# Install msmtp
RUN apt-get update && apt-get install -y msmtp msmtp-mta

# Copy configuration for msmtp
COPY msmtp.rc /etc/msmtprc
