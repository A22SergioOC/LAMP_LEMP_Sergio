FROM debian

RUN apt update && apt install -y php-fpm

RUN apt install -y php8.2-mysql php-xml php-gd  php-json php-curl php-mbstring php-zip php-intl openssl

EXPOSE 9000

ENTRYPOINT [ "php-fpm8.2", "-F" ]