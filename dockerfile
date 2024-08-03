# PHP stage
FROM php:8.2 as php

# Install PHP extensions and dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && docker-php-ext-install pdo pdo_mysql bcmath

# Set the working directory
WORKDIR /var/www

# Copy the application code to the container
COPY . .

# Copy Composer from the official image
COPY --from=composer:2.7.1 /usr/bin/composer /usr/bin/composer

# Install PHP dependencies with Composer
RUN composer install

# Install Node.js (including npm)
RUN curl -sL https://deb.nodesource.com/setup_16.x | bash - && \
    apt-get install -y nodejs

# Copy npm package files
COPY package.json package-lock.json* ./

# Install JavaScript dependencies with npm and build your Vite.js assets
RUN npm install && npm run build

# Set an environment variable for the port
ENV PORT=8000
EXPOSE 8000

# Define entrypoint
ENTRYPOINT ["docker/entrypoint.sh"]

#====================================================================================================#
# Node.js stage
FROM node:18.15.0-alpine as node

# Set the working directory
WORKDIR /var/www

# Copy the application code to the container
COPY . .

# Install global npm packages
RUN npm install --global cross-env vite

# Define volumes
VOLUME [ "/var/www/node_modules" ]
