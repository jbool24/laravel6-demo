ARG PHP_VERSION=7.3
FROM php:fpm-alpine

ARG USER_ID=1000
ARG GROUP_ID=1000


RUN \
  if getent group www-data; then deluser www-data; fi\
  && if getent group www-data; then delgroup www-data; fi \
  && addgroup -g ${GROUP_ID} www-data \
  && echo "Created group: `getent group www-data`" \
  && adduser -DHS -u ${USER_ID} -s /sbin/nologin -G www-data www-data \
  && echo "Created user: `getent passwd www-data`" \
  && mkdir /var/www/laravel


WORKDIR /var/www/laravel

# Install php dependancies and Composer for laravel dependancies
RUN apk update && apk add --no-cache nodejs npm yarn \
  && docker-php-ext-install pdo_mysql \
  && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
  && php -r "if (hash_file('sha384', 'composer-setup.php') === 'a5c698ffe4b8e849a443b120cd5ba38043260d5c4023dbf93e1558871f1f07f58274fc6f4c93bcfd858c6bd0775cd8d1') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
  && php composer-setup.php \
  && php -r "unlink('composer-setup.php');" \
  && mv /var/www/laravel/composer.phar /usr/local/bin/composer \
  && alias composer="composer --no-cache" \
  && yarn install

VOLUME /var/www/laravel
