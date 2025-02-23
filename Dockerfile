# Base image with PHP and Apache
FROM php:8.3-apache

# Enable mod_rewrite for .htaccess
RUN a2enmod rewrite

# Set permissions for file uploads
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html
