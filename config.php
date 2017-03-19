<?php
        // configuration parameters
        date_default_timezone_set('America/Chicago');

        // for snoopy client
        @define('HTTP_USER_AGENT', 'Mozilla/5.0 (Windows NT 6.0; WOW64; rv:12.0) Gecko/2
0100101 Firefox/12.0', true);
        @define('HTTP_TIME_OUT', 30, true);     // in seconds
        @define('HTTP_USE_GZIP', true, true);
        $httpIP = null;                         // IP string. Or null for any.

        @define('RPC_TIME_OUT', 5, true);       // in seconds

        @define('LOG_RPC_CALLS', false, true);
        @define('LOG_RPC_FAULTS', true, true);

        // for php
        @define('PHP_USE_GZIP', false, true);
        @define('PHP_GZIP_LEVEL', 2, true);

        $schedule_rand = 10;                    // rand for schedulers start, +0..X seco
nds

        $do_diagnostic = true;
        $log_file = '/tmp/errors.log';          // path to log file (comment or leave bl
ank to disable logging)

        $saveUploadedTorrents = true;           // Save uploaded torrents to profile/tor
rents directory or not
        $overwriteUploadedTorrents = false;     // Overwrite existing uploaded torrents
in profile/torrents directory or make unique name

        $topDirectory = '/';                    // Upper available directory. Absolute p
ath with trail slash.
        $forbidUserSettings = false;

        $scgi_port = 5000;
        $scgi_host = "127.0.0.1";

        // For web->rtorrent link through unix domain socket
        // (scgi_local in rtorrent conf file), change variables
        // above to something like this:
        //
        // $scgi_port = 0;
        // $scgi_host = "unix:///tmp/rpc.socket";
        //$scgi_port = 0;
        //$scgi_host = "unix:///root/rtorrent/rpc.socket";

        $XMLRPCMountPoint = "/RPC2";            // DO NOT DELETE THIS LINE!!! DO NOT COM
MENT THIS LINE!!!

        $pathToExternals = array(
                "php"   => '',                  // Something like /usr/bin/php. If empty
, will be found in PATH.
                "curl"  => '/usr/local/bin/curl',                       // Something lik
e /usr/bin/curl. If empty, will be found in PATH.
                "gzip"  => '',                  // Something like /usr/bin/gzip. If empt
y, will be found in PATH.
                "id"    => '',                  // Something like /usr/bin/id. If empty,
 will be found in PATH.
                "stat"  => '',                  // Something like /usr/bin/stat. If empt
y, will be found in PATH.
        );

        $localhosts = array(                    // list of local interfaces
                "127.0.0.1",
                "localhost",
        );

        $profilePath = '/downloads/.rutorrent';              // Path to user profiles
        $profileMask = 0777;                    // Mask for files and directory creation
 in user profiles.
                                                // Both Webserver and rtorrent users mus
t have read-write access to it.
                                                // For example, if Webserver and rtorren
t users are in the same group then the value may be 0770.

        $tempDirectory = null;                  // Temp directory. Absolute path with tr
ail slash. If null, then autodetect will be used.

        $canUseXSendFile = true;                // Use X-Sendfile feature if it exist

        $locale = "UTF8";
