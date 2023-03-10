FROM php:8.1-fpm
ARG uid=1000
ARG user=user
RUN apt-get update && apt-get install -y \
    unixodbc \
    unixodbc-dev \
    wget \
    libpcre3-dev \
    gnupg2 \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip
RUN apt-get update 
RUN apt-get clean && rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-install bcmath sockets pcntl mbstring exif gd intl
RUN pecl install xdebug
RUN docker-php-ext-enable  xdebug
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
WORKDIR /var/www
USER $user