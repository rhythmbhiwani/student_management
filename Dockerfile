FROM ubuntu

# Update and install necessary packages
RUN apt update
RUN apt upgrade -y
RUN apt install software-properties-common -y
RUN add-apt-repository ppa:ondrej/php -y
RUN apt update
ENV TZ=Asia/Kolkata \
    DEBIAN_FRONTEND=noninteractive

# Install PHP and SQLite3
RUN apt install php7.4 -y
RUN apt install php7.4-sqlite3 -y
RUN apt install sqlite3 -y

# Set up the working directory and copy files
WORKDIR /var/www/html
RUN rm index.html
COPY . /var/www/html

# Add a script to import the .sql file into SQLite3 database
RUN echo "sqlite3 /var/www/html/std.db < /var/www/html/Database/stdmgmtsystem.sql" > /setup_db.sh

# Set permissions to make the script executable
RUN chmod +x /setup_db.sh

# Start the database setup and then enable the Apache server
CMD /setup_db.sh && apachectl -D FOREGROUND

EXPOSE 80
