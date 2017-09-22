FROM silintl/php7:latest

RUN apt-get update -y \
	&& apt-get install -y php7.0-imap php7.0-xml php-xdebug php7.0-gd

COPY ./vhost-config.conf /etc/apache2/sites-enabled/vhost-config.conf
COPY ./php.ini /etc/php/7.0/apache2/php.ini

CMD ["apache2ctl", "-D", "FOREGROUND"]

#RUN mkdir /joomla_run
#COPY ./run.sh /joomla_run/
#RUN chmod 777 /joomla_run/run.sh
#CMD ["/joomla_run/run.sh"]