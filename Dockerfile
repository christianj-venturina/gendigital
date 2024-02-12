FROM richarvey/nginx-php-fpm:3.1.4

COPY . .

# Image config
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel config
ENV APP_ENV production
ENV APP_DEBUG false
ENV APP_KEY base64:AaOJ4HOEAnfzSrM2UGoibL72bdy8++i2I9y22KyBYqI=
ENV LOG_CHANNEL stderr
ENV DB_CONNECTION pgsql
ENV DB_HOST dpg-cn4l2pnsc6pc73e78c90-a.singapore-postgres.render.com
ENV DB_PORT 5432
ENV DB_DATABASE gendigital
ENV DB_USERNAME lime
ENV DB_PASSWORD PNVsg9VqF3PC1rhvB6e3aw24pRnxdzrg
ENV MYSQL_ATTR_SSL_CA cacert-2023-12-12.pem

# Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

CMD ["/start.sh"]