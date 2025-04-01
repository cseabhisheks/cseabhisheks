# Use an official PHP image
FROM php:8.2-apache

# Copy project files to Apache's root directory
COPY . /var/www/html/

# Expose port 80 (Apache default port)
EXPOSE 80

# Start Apache when the container runs
CMD ["apache2-foreground"]
