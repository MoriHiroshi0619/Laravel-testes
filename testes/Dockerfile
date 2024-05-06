FROM php:8.2

# Instalando dependências
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    libzip-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql zip

# Copiando arquivos da aplicação
COPY . /app

# Definindo o diretório de trabalho
WORKDIR /app

# Copiando o arquivo composer.lock (se existir)
COPY composer.lock /app/composer.lock

# Instalando dependências do Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install

# Definindo permissões
RUN chown -R www-data:www-data /app

EXPOSE 8001


CMD php artisan serve --host=0.0.0.0 --port=8001
