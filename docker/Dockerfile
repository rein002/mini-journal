FROM php:8.1-apache

WORKDIR /var/www/html/mini-journal

ADD /app/php.ini /usr/local/etc/php/
ADD /app/000-default.conf /etc/apache2/sites-enabled/

# composerのインストール
RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer

# ミドルウェアのインストール
RUN apt-get update \
&& apt-get install -y \
git \
zip \
unzip \
vim \
libpng-dev \
libpq-dev \
&& docker-php-ext-install pdo_mysql

# Laravelで必要になるmodRewriteを有効化するため、mods-enabledからmods-available/rewrite.loadへのシンボリックリンクを貼る
# これをしておかないと、Laravelのリダイレクト処理が正しく行われなくなってしまう
RUN mv /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled
RUN /bin/sh -c a2enmod rewrite