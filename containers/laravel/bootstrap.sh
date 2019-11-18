#!usr/bin/env sh

# install node_modules with yarn if they aren't installed
if [ ! -d "/var/www/laravel/node_modules" ]; then
  yarn install;
fi

# install vendor files with composer if they aren't installed
if [ ! -d "/var/www/laravel/vendor" ]; then
  composer install;
fi

exec php-fpm