FROM ubuntu:22.04

RUN apt update
RUN apt upgrade -y
RUN apt install software-properties-common -y
RUN add-apt-repository ppa:ondrej/php -y
RUN apt update
ENV TZ=Asia/Kolkata \
    DEBIAN_FRONTEND=noninteractive
RUN apt install php7.4 -y
RUN apt install php7.4-sqlite3 -y
RUN apt install sqlite3 -y
RUN apt install apache2 -y

WORKDIR /var/www/html

# Remove the default index.html file from the Apache root directory
RUN rm index.html

# Copy the application files into the container
COPY . /var/www/html

# Set permissions for the SQLite database file and the parent directory
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html
RUN chmod -R 777 /var/www/html/std.db

RUN sqlite3 /var/www/html/std.db < /var/www/html/Database/stdmgmtsystem.sql

RUN systemctl enable apache2.service
EXPOSE 80

CMD apachectl -D FOREGROUND
