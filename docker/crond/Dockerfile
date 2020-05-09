FROM docker_php_fpm

RUN apt-get update && apt-get -y install apt-utils cron

COPY tasks /etc/cron.d/tasks
RUN  chmod 0644 /etc/cron.d/tasks \
    && sed -i 's/\r//g' /etc/cron.d/tasks \
    && crontab /etc/cron.d/tasks

CMD ["cron", "-f"]