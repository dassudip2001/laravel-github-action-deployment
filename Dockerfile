# Base image
FROM php:8.0-fpm

# Set working directory
WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libonig-dev \
    libzip-dev \
    zip \
    unzip \
    git

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy application files
COPY . .

# Install project dependencies
RUN composer install --optimize-autoloader --no-dev

# Generate application key
RUN php artisan key:generate

# Set file permissions
RUN chown -R www-data:www-data storage bootstrap/cache

# Expose port 9000 (default for PHP-FPM)
EXPOSE 9000

# Start PHP-FPM
CMD ["php-fpm"]

