# Stage 1: Build PHP-FPM
FROM php:8.3.3-fpm-alpine3.19 AS php-fpm

# Add the install-php-extensions script
ADD --chmod=0755 https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

# Install required PHP extensions
RUN install-php-extensions ctype curl dom fileinfo filter hash mbstring openssl pcre pdo pdo_mysql phar posix readline session SimpleXML tokenizer xml xmlwriter zlib

# Install required packages
RUN apk add --no-cache nodejs npm

# Copy project files
COPY --chown=www-data:www-data . /var/www/html

# Install Composer and dependencies
COPY --from=composer:2.7.7 /usr/bin/composer /usr/bin/composer
RUN composer install

# npm run commands
RUN npm install
RUN npm run build

# Set the working directory
WORKDIR /var/www/html

# Stage 2: Set up NGINX
FROM nginx:1.24.0-alpine-slim

# Copy the NGINX configuration file
COPY ./laravel.conf /etc/nginx/conf.d/default.conf

# Copy the entrypoint script
COPY ./entrypoint.sh /usr/local/bin/entrypoint.sh

# Make the entrypoint script executable
RUN chmod +x /usr/local/bin/entrypoint.sh

# Copy the application from the PHP-FPM build stage
COPY --from=php-fpm /var/www/html /var/www/html

# Set the entrypoint to use the custom script
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]

# Expose port 80 (for local use, this can be overridden in docker-compose)
EXPOSE 80
