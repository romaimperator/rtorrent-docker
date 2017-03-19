FROM ubuntu
USER root

RUN apt-get update && apt-get install -y git && \
    apt-get install -y rtorrent unzip unrar mediainfo curl php-fpm php-cli php-geoip nginx wget ffmpeg supervisor && \
    rm -rf /var/lib/apt/lists/* && \
    mkdir -p /var/www && cd /var/www && \
    git clone https://github.com/Novik/ruTorrent.git rutorrent && \
    rm -rf ./rutorrent/.git* && cd / && \
    #cp ./a/config.php /var/www/rutorrent/conf/ && \
    #cp ./a/startup-rtorrent.sh ./a/startup-nginx.sh ./a/startup-php.sh ./a/.rtorrent.rc /root/ && \
    #cp ./a/supervisord.conf /etc/supervisor/conf.d/
COPY . /a
RUN cp /a/supervisord.conf /etc/supervisor/conf.d/ && \
    cp /a/config.php /var/www/rutorrent/conf/ && \
    cp /a/startup-{rutorrent,nginx,php}.sh /a/.rtorrent.rc /root/

EXPOSE 80 443 6399
VOLUME /mnt/torrents

CMD ["supervisord"]

