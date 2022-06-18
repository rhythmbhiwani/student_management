FROM ubuntu
RUN apt update
RUN apt upgrade -y
RUN apt install software-properties-common -y
RUN add-apt-repository ppa:ondrej/php -y
RUN apt update
ENV TZ=Asia/Kolkata \
    DEBIAN_FRONTEND=noninteractive
RUN apt install php7.4 -y
RUN apt install php7.4-mysql -y
WORKDIR /var/www/html
RUN rm index.html
COPY . /var/www/html
RUN systemctl enable apache2.service
EXPOSE 80

CMD apachectl -D FOREGROUND