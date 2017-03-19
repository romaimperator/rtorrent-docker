#!/usr/bin/env sh

set -x

main_dir=/mnt/torrents

# set rtorrent user and group id
RT_UID=${USR_ID:=1001}
RT_GID=${GRP_ID:=1001}

# update uids and gids
groupadd -g $RT_GID rtorrent
useradd -u $RT_UID -g $RT_GID -d /home/rtorrent -m -s /bin/bash rtorrent

# arrange dirs and configs
cp /root/.rtorrent.rc /home/rtorrent/
chown -R rtorrent:rtorrent /home/rtorrent

rm -f ${main_dir}/session/rtorrent.lock

# run
su --login --command="TERM=xterm rtorrent" rtorrent
