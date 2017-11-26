FROM php:7.1.11-cli

RUN pecl install "channel://pecl.php.net/vld-0.14.0"
RUN echo "extension=vld.so" > /usr/local/etc/php/conf.d/docker-php-ext-vld.ini

#RUN apt-get update && apt-get install -y git
#RUN git clone https://github.com/ericzhang-cn/opdumper.git && cd opdumper && phpize && ./configure && make && make install

# Configure xdebug
#RUN pecl install xdebug
#RUN docker-php-ext-enable xdebug
#COPY ext-xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
#COPY custom-php.ini /usr/local/etc/php/conf.d/zz-custom-php.ini

CMD ["php", "-a"]