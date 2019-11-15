FROM nginx:alpine

ARG USER_ID=1000
ARG GROUP_ID=1000


RUN \
  if getent group www-data; then deluser www-data; fi\
  && if getent group www-data; then delgroup www-data; fi \
  && if [ -d "/home/www-data" ]; then rmdir /home/www-data; fi \
  && addgroup -g ${GROUP_ID} www-data \
  && echo "Created group: `getent group www-data`" \
  && adduser -DHS -u ${USER_ID} -s /sbin/nologin -G www-data www-data \
  && echo "Created user: `getent passwd www-data`" \
  && echo "Creating /var/www owner and adding ownership to www-data" \
  && mkdir /var/www \
  && chown -R www-data:www-data /var/www \
  && rm /etc/nginx/conf.d/default.conf

COPY containers/nginx/nginx.conf /etc/nginx/nginx.conf
COPY containers/nginx/sites/* /etc/nginx/conf.d/

VOLUME /var/www/laravel
VOLUME /var/log/nginx

CMD ["nginx"]