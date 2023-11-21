#
# WordPress Dependencies
#
FROM composer:2.0 as builder
COPY ./composer.json composer.json
COPY ./composer.lock composer.lock
COPY ./wp-config-docker.php wp-config-docker.php
ADD ./web/wp-content/ web/wp-content/
RUN composer install --no-dev


#
# Application
#
FROM wordpress:php8.2

# Increase upload limit
COPY ./config/php/uploads.ini /usr/local/etc/php/conf.d/uploads.ini

# Install WPCLI
RUN curl -sS -o /usr/local/bin/wp https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
	chmod +x /usr/local/bin/wp

# Install MySQL Client(For WPCLI)
RUN apt-get update && apt-get install -y mariadb-client

# Forward request and error logs to Docker log collector
RUN ln -sf /dev/stdout /var/log/apache2/access.log
RUN ln -sf /dev/stderr /var/log/apache2/error.log

# Custom configuration files
ADD ./config /var/www/config
ADD ./wp-cli.yml /var/www/wp-cli.yml

# WordPress built files
COPY --from=builder /app/web /var/www/html
RUN cp /usr/src/wordpress/wp-config-docker.php /var/www/html/wp-config.php

# Update the permissions
RUN chown -R www-data:www-data /var/www/ && \
    find /var/www/ -type f -exec chmod 644 {} \; && \
    find /var/www/ -type d -exec chmod 755 {} \;

# Project folder is working directory
WORKDIR /var/www

# Expose both secure & insecure
EXPOSE 80 443

# Run WP installation script, and PHP + NGINX
CMD apache2-foreground | bash /var/www/config/scripts/init.sh

# Switch to 'www-data'
USER www-data
