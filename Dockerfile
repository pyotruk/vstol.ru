FROM wyveo/nginx-php-fpm:php73

COPY ./../vstol.ru /var/www/vstol.ru/
WORKDIR /var/www/vstol.ru

COPY ./vstol.ru.nginx.conf /etc/nginx/conf.d/
