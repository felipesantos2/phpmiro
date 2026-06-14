FROM php:8.4-alpine3.24

RUN echo "UTC" > /etc/timezone

WORKDIR /app

COPY . .

RUN apk update && apk upgrade && apk clean cache

RUN apk add --no-cache build-base ca-certificates openssl tar unzip zip

RUN apk add --no-cache bash \
    git \
    curl \
    git \
    openssl-dev \
    libzip-dev \
    zlib-dev \
    freetype-dev \
    libjpeg-turbo-dev \
    libpng-dev \
    icu-dev

RUN curl -sS https://getcomposer.org/installer -o composer-setup.php && \
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
    rm -rf composer-setup.php

EXPOSE 8000

CMD [ "php", "-S", "localhost:8000", "-t","public/" ]
