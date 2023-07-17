FROM php:8.2-cli
COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /usr/src/app
COPY . .
RUN apt-get update
RUN apt-get -y install zip
RUN composer install

ENTRYPOINT [ "php", "/usr/src/app/script.php" ]