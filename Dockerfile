# Start from the official WordPress image
FROM wordpress:latest

# Make any custom changes (e.g., add packages, change PHP settings, etc.)
# In this example, we ensure the uploads folder (or entire /var/www/html) has the right owner

RUN chown -R www-data:www-data /var/www/html
