FROM php:8.1-apache

COPY ./webserver-pub.pem /etc/ssl/certs/mycert.crt
COPY ./webserver-key.pem /etc/ssl/private/mycert.key
COPY ./000-default.conf /etc/apache2/sites-available/000-default.conf
COPY ./init.sh /home/init.sh
COPY ./wait-for-it.sh /home/wait-for-it.sh

RUN chmod 0755 /home/init.sh && \
    chmod 0755 /home/wait-for-it.sh

RUN apt-get update && \
    a2enmod rewrite && \
    a2enmod socache_shmcb && \
    apt install -y apt-utils libicu-dev libxml2-dev libonig-dev curl libsqlite3-dev libsqlite3-0 && \
    docker-php-ext-install -j$(nproc) intl && \
    docker-php-ext-install mysqli pdo pdo_mysql pdo_sqlite sockets simplexml mbstring && \
    docker-php-ext-enable mysqli pdo pdo_mysql pdo_sqlite sockets simplexml mbstring intl

RUN apt-get -y install nano net-tools mc git python3 gcc build-essential sudo
RUN curl -fsSL https://deb.nodesource.com/setup_lts.x | bash - &&\
    apt-get install -y nodejs
RUN npm install -g npm@9.4.1
RUN npm install -g @soketi/soketi

EXPOSE 80
EXPOSE 3000
EXPOSE 6001
EXPOSE 9601

CMD ["bash", "-c", "/home/init.sh"]
