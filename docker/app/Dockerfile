FROM php:8.3-fpm

# 必要なパッケージインストール
RUN apt-get update && apt-get install -y \
    git \
    zsh \
    unzip \
    libzip-dev \
    zip \
    && docker-php-ext-install zip pdo_mysql

# Composerインストール（最新安定版を指定）
COPY --from=composer:2.8 /usr/bin/composer /usr/bin/composer

# 作業ディレクトリ
WORKDIR /var/www