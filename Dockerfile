# Gunakan image dasar Ubuntu 22.04
FROM ubuntu:22.04

# Gunakan root untuk menginstal Nginx, PHP, dan utilitas tambahan
USER root

# Set timezone dengan build argument
ARG TIMEZONE=Asia/Jakarta
RUN apt-get update && \
    DEBIAN_FRONTEND=noninteractive apt-get install -y tzdata && \
    ln -fs /usr/share/zoneinfo/$TIMEZONE /etc/localtime && \
    dpkg-reconfigure --frontend noninteractive tzdata

# Tambahkan repository PPA untuk PHP 7.4
RUN apt-get update && \
    apt-get install -y software-properties-common && \
    add-apt-repository ppa:ondrej/php

# Install Nginx, PHP 7.4, dan ekstensi yang dibutuhkan
RUN apt-get update && apt-get install -y \
    nginx \
    php7.4-fpm \
    php7.4-mysql \
    php7.4-zip \
    php7.4-gd \
    php7.4-mbstring \
    php7.4-xml \
    php7.4-curl \
    php7.4-bcmath \
    php7.4-json \
    php7.4-soap \
    php7.4-intl \
    unzip \
    curl \
    git \
    sudo \
    gnupg

# Hapus file konfigurasi Nginx yang ada
RUN rm -f /etc/nginx/sites-available/default && \
    rm -f /etc/nginx/sites-enabled/default

# Salin file konfigurasi Nginx dari folder nginx-config ke dalam container
# COPY nginx-config/default /etc/nginx/sites-available/default

# Buat symlink untuk mengaktifkan konfigurasi Nginx
RUN ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/

# Install cloudflared
RUN curl -L --output cloudflared.deb https://github.com/cloudflare/cloudflared/releases/latest/download/cloudflared-linux-amd64.deb && \
    sudo dpkg -i cloudflared.deb

# Install cloudflared service dengan konfigurasi yang diberikan
RUN sudo cloudflared service install eyJhIjoiOTVkMWRlYzFlYWNjNDlhNzY2OTdmYjA0MDEzYjljZjYiLCJ0IjoiYTM3Yjc2YmUtNWQ5OC00MDRiLWE4MDUtZTdhZTUyZTBlOGVjIiwicyI6IlltTTBaakF4TTJFdFpUa3hNUzAwTVRFMkxXRTRNMkl0TlRsbU5USmtNRFU1T0dZMSJ9

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
