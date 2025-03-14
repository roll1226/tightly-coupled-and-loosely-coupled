FROM php:8.2-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    libonig-dev \
    libicu-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libxml2-dev \
    git \
    curl \
    zip \
    unzip

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql \
    mysqli \
    zip \
    bcmath \
    exif \
    gd \
    intl \
    pcntl \
    opcache

# Configure GD extension
RUN docker-php-ext-configure gd --with-freetype --with-jpeg

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Configure PHP
COPY php.ini /usr/local/etc/php/conf.d/custom.ini

# Set user permissions
RUN chown -R www-data:www-data /var/www/html

# Switch to non-root user
USER www-data

