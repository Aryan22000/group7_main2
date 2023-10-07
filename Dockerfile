FROM php:8.0-apache

# PHP Extensions
RUN docker-php-ext-install mysqli pdo_mysql
RUN a2enmod rewrite

# Copy php.ini
COPY ./php.ini /usr/local/etc/php/

# Install msmtp
RUN apt-get update && apt-get install -y msmtp msmtp-mta

# Copy configuration for msmtp
COPY msmtp.rc /etc/msmtprc

# Update sendmail_path for PHP to use msmtp
RUN echo "sendmail_path = /usr/bin/msmtp -t" >> /usr/local/etc/php/php.ini
