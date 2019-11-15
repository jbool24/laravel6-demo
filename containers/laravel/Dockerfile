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
  && echo "Created user: `getent passwd www-data`"


VOLUME /var/www/laravel
