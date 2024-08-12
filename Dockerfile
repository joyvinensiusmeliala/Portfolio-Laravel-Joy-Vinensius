# Gunakan image dasar Ubuntu 22.04
FROM ubuntu:22.04

# Install Nginx, PHP, dan dependencies yang diperlukan
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
    git \
    curl \
    sudo \
    tzdata

# Konfigurasi zona waktu secara otomatis
ENV TZ=Asia/Jakarta
RUN ln -fs /usr/share/zoneinfo/$TZ /etc/localtime && \
    dpkg-reconfigure --frontend noninteractive tzdata

# Hapus file konfigurasi Nginx yang ada
RUN rm -f /etc/nginx/sites-available/default && \
    rm -f /etc/nginx/sites-enabled/default

# Salin file konfigurasi Nginx dari folder nginx-config ke dalam container
COPY nginx-config/default /etc/nginx/sites-available/default

# Buat symlink untuk mengaktifkan konfigurasi Nginx
RUN ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/

# Set working directory ke /var/www/html
WORKDIR /var/www/html

# Salin seluruh file dari folder portfolio ke dalam container
COPY portfolio /var/www/html

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install dependencies Laravel dengan Composer
RUN composer install --no-dev --optimize-autoloader

# Ubah permission storage dan bootstrap/cache agar dapat diakses oleh Nginx
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache && \
    chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Install Cloudflared
RUN curl -L --output cloudflared.deb https://github.com/cloudflare/cloudflared/releases/latest/download/cloudflared-linux-amd64.deb && \
    dpkg -i cloudflared.deb && \
    rm cloudflared.deb

# Install Cloudflared service dengan ID konfigurasi yang diberikan
RUN cloudflared service install eyJhIjoiOTVkMWRlYzFlYWNjNDlhNzY2OTdmYjA0MDEzYjljZjYiLCJ0IjoiYTM3Yjc2YmUtNWQ5OC00MDRiLWE4MDUtZTdhZTUyZTBlOGVjIiwicyI6IlltTTBaakF4TTJFdFpUa3hNUzAwTVRFMkxXRTRNMkl0TlRsbU5USmtNRFU1T0dZMSJ9

# Expose port 80 untuk akses HTTP
EXPOSE 80

# Jalankan PHP-FPM dan Nginx
CMD service php7.4-fpm start && nginx -g "daemon off;"
