FROM php:7.3-fpm

RUN apt-get update && \
   apt-get install -y \
       zlib1g-dev


RUN apt-get update && apt-get install -y \
       wget \
       build-essential \
       libmp3lame-dev \
       libvorbis-dev \
       libtheora-dev \
       libspeex-dev \
       yasm \
       pkg-config \
       libx264-dev \
       libfreetype6 \
       libfreetype6-dev \
       libfribidi-dev \
       libfontconfig1-dev \
       libcurl4-openssl-dev \
       libssl-dev \
       libxrender1 \
       libxext6 \
       pkg-config \
       software-properties-common


RUN apt-get update && apt-get install -y \
   && docker-php-ext-install gd \
   && docker-php-ext-install mbstring \
   && docker-php-ext-enable gd


RUN pecl install redis-3.1.4 \
   && docker-php-ext-enable redis
RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install bcmath

RUN apt-get update -y
RUN apt-get install -y libgmp-dev re2c libmhash-dev libmcrypt-dev file
RUN ln -s /usr/include/x86_64-linux-gnu/gmp.h /usr/local/include/
RUN docker-php-ext-configure gmp
RUN docker-php-ext-install gmp


RUN apt-get install -y \
        libzip-dev \
        zip \
  && docker-php-ext-install zip

RUN apt update && apt install curl && \
   curl -sS https://getcomposer.org/installer | php \
   && chmod +x composer.phar && mv composer.phar /usr/local/bin/composer

RUN apt-get update && \
    apt-get install curl && \
    curl https://deb.nodesource.com/setup_12.x | bash - && \
    apt-get install -y nodejs