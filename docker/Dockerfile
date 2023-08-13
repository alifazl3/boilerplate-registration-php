FROM php:7.4-apache

# Install additional PHP extensions
RUN docker-php-ext-install mysqli && \
    a2enmod rewrite
# Set the working directory
WORKDIR /var/www/html

# Copy the custom apache configuration to set the DocumentRoot
COPY docker-config/000-default.conf /etc/apache2/sites-available/000-default.conf

# Enable the site (this might be optional since 000-default is usually enabled by default, but added for clarity)
RUN a2ensite 000-default.conf

# Expose port 80
EXPOSE 80


