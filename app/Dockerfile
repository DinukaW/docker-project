FROM php:7.4-fpm  
#install php and mysql drivers into php-fpm image
RUN docker-php-ext-install pdo_mysql
WORKDIR /var/www/html
COPY ./index.php .