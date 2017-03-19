#!/usr/bin/env sh

set -x

chown -R www-data:www-data /var/www/rutorrent

rm -f /etc/nginx/sites-enabled/*
rm -rf /etc/nginx/ssl

# Basic auth enabled by default
site=rutorrent-basic.nginx

cp /root/$site /etc/nginx/sites-enabled/

nginx -g "daemon off;"
