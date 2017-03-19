FROM ubuntu
USER root

RUN apt-get update && apt-get install -y git && \
    apt-get install -y rtorrent unzip mediainfo curl php7.0-fpm php7.0-cli php-geoip nginx supervisor && \
    rm -rf /var/lib/apt/lists/*
COPY . /a
RUN mkdir -p /var/www && cd /var/www && \
    git clone https://github.com/Novik/ruTorrent.git rutorrent && \
    rm -rf ./rutorrent/.git* && \
    cp /a/supervisord.conf /etc/supervisor/conf.d/ && \
    cp /a/config.php /var/www/rutorrent/conf/ && \
    cp /a/startup-rtorrent.sh \
       /a/startup-nginx.sh \
       /a/startup-php.sh \
       /a/.rtorrent.rc /root/

EXPOSE 80 443 6999
VOLUME /mnt/torrents

CMD ["supervisord"]

