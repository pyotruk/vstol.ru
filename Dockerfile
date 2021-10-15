FROM wyveo/nginx-php-fpm:php73

COPY . /var/www/vstol.ru/
COPY ./vstol.ru.nginx.conf /etc/nginx/conf.d/
