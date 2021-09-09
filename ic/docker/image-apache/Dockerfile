FROM ubuntu:20.04

COPY ./sources/Paris /etc/localtime

RUN apt update && \
	apt install -y -qq nano php7.4 libapache2-mod-php7.4 php7.4-mysql \
					   php7.4-curl php7.4-json  php7.4-gd php7.4-intl \
					   php7.4-sqlite3 php7.4-gmp php7.4-mbstring php7.4-xml php7.4-zip git

RUN mkdir -p /site

COPY ./sources/httpd-foreground 	/usr/local/bin/
COPY ./sources/000-default.conf 	/etc/apache2/sites-enabled/

EXPOSE 80

CMD ["httpd-foreground"]