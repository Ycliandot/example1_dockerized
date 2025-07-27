FROM php:7-apache

COPY . /var/www/html
#
WORKDIR /var/www/html

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN docker-php-ext-install pdo pdo_mysql && docker-php-ext-enable pdo pdo_mysql

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite

#EXPOSE 80

CMD ["apache2-foreground"]
