# Gunakan image dasar Ubuntu 22.04
FROM ubuntu:22.04

# Gunakan root untuk menginstal Nginx, PHP, dan utilitas tambahan
USER root

# Install Nginx, PHP, dan ekstensi yang dibutuhkan
RUN apt-get update && apt-get install -y \
    nginx \
    php-fpm \
    php-mysql \
    php-zip \
    php-gd \
    php-mbstring \
    php-xml \
    php-curl \
    php-bcmath \
    php-json \
    php-soap \
    php-intl \
    unzip \
    curl \
    git \
    sudo

# Hapus file konfigurasi Nginx yang ada
RUN rm -f /etc/nginx/sites-available/default && \
    rm -f /etc/nginx/sites-enabled/default

# Salin file konfigurasi Nginx dari folder nginx-config ke dalam container
# COPY nginx-config/default /etc/nginx/sites-available/default

# Buat symlink untuk mengaktifkan konfigurasi Nginx
RUN ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/

# Set working directory ke /var/www/html
WORKDIR /var/www/html

# Salin seluruh file dari folder portfolio ke dalam container
COPY portfolio /var/www/html

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install dependencies Laravel dengan Composer
RUN composer install

# Ubah permission storage dan bootstrap/cache agar dapat diakses
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 80 untuk akses HTTP
EXPOSE 80

# Jalankan Nginx dan PHP-FPM di foreground
CMD service php7.4-fpm start && nginx -g "daemon off;"
