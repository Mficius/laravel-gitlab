# Used for dev build.
FROM php:8.2-fpm

# Set environment variables
ENV PHP_OPCACHE_ENABLE=1
ENV PHP_OPCACHE_ENABLE_CLI=0
ENV PHP_OPCACHE_VALIDATE_TIMESTAMPS=0
ENV PHP_OPCACHE_REVALIDATE_FREQ=0

# Install system dependencies
RUN apt-get update && apt-get install -y \
        zlib1g-dev libicu-dev g++ \
        libzip-dev \
		libfreetype-dev \
		libjpeg62-turbo-dev \
		libpng-dev \
	&& docker-php-ext-configure gd --with-freetype --with-jpeg \
	&& docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && docker-php-ext-install zip
    

RUN apt-get update && apt-get install -y unzip libpq-dev libcurl4-gnutls-dev libonig-dev
RUN docker-php-ext-install pdo pdo_mysql bcmath curl opcache mbstring

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy configuration files.
COPY ./docker/php/php.ini /usr/local/etc/php/php.ini
COPY ./docker/php/php-fpm.conf /usr/local/etc/php-fpm.d/www.conf

# Set working directory to /var/www.
WORKDIR /var/www

# Copy files from current folder to container current folder (set in workdir).
COPY entrypoint.sh /usr/local/bin/entrypoint.sh

# Make the entrypoint script executable
RUN chmod +x /usr/local/bin/entrypoint.sh

COPY --chown=www-data:www-data . .


# Install application dependencies
RUN composer install --optimize-autoloader 


# Create laravel caching folders.
RUN mkdir -p /var/www/storage/framework
RUN mkdir -p /var/www/storage/framework/cache
RUN mkdir -p /var/www/storage/framework/testing
RUN mkdir -p /var/www/storage/framework/sessions
RUN mkdir -p /var/www/storage/framework/views

# Fix files ownership.
RUN chown -R www-data /var/www/storage
RUN chown -R www-data /var/www/storage/logs
RUN chown -R www-data /var/www/storage/framework
RUN chown -R www-data /var/www/storage/framework/sessions

# Adjust user permission & group
RUN usermod --uid 1000 www-data
RUN groupmod --gid 1001 www-data


# Define the entrypoint
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]

EXPOSE 9000

# Start PHP-FPM
CMD ["php-fpm"]