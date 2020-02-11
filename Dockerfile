FROM php:7.3-cli

ENV composer_script composer_installer.sh

COPY ./_/docker/${composer_script} /root/

RUN apt-get update
RUN apt-get install zip curl
RUN bash /root/${composer_script}

WORKDIR /var/www/html

