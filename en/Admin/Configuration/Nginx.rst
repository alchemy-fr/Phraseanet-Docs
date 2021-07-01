NGINX
=====

Nginx virtual host configuration for Phraseanet:

.. code-block:: none

    #/etc/nginx/sites-available/phraseanet.conf
    server {
        listen       80;
        server_name  yourdomain.tld;
        root         /var/www/Phraseanet/www;

        index        index.php;

        location /api {
            rewrite ^(.*)$ /api.php/$1 last;
        }

        location / {
            # try to serve file directly, fallback to rewrite
            try_files $uri $uri/ @rewriteapp;
        }

        location @rewriteapp {
            rewrite ^(.*)$ /index.php/$1 last;
        }

        # PHP scripts -> PHP-FPM server listening on 127.0.0.1:9000
        location ~ ^/(index|index_dev|api)\.php(/|$) {
            fastcgi_pass   127.0.0.1:9000;
            fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
            include        fastcgi_params;
        }
    }

.. _nginx-sendfile:

SendFile Configuration
----------------------

.. topic:: The essential

    Sendfile allows PHP to move file download handling to Nginx. It is
    strongly recommended to use this feature. If Sendfile is disabled,
    Phraseanet will work as expected.

Since version 3.8, Phraseanet SendFile configuration is much more simple.
A command of `bin/console` generates mappings for Phraseanet configuration, a
second one dumps Nginx configuration.

First step generates Phraseanet configuration mappings with the
`bin/console xsendfile:generate-mapping` command.

.. code-block:: none

    bin/console xsendfile:generate-mapping nginx --enabled

This command prompts a piece of Phraseanet configuration as it will be
written. To do write, re execute the command with **--write** option.

.. code-block:: none

    bin/console xsendfile:generate-mapping nginx --enabled --write

Once Phraseanet configuration has been written, Nginx directives should be
updated with the `xsendfile:dump-configuration` command.

.. code-block:: none

    bin/console xsendfile:dump-configuration

Copy-paste the code in Nginx virtual host and finally reload Nginx.

.. warning::

    Generating mappings and virtual host update has to be done on any databox
    creation or when a sub-definitions structure is modified.

Example of Nginx virtual host configuration that includes an Sendfile
configuration.

.. code-block:: none

    #/etc/nginx/sites-available/phraseanet.conf
    server {
        listen       80;
        server_name  yourdomain.tld;
        root         /var/www/Phraseanet/www;

        index        index.php;

        location /api {
            rewrite ^(.*)$ /api.php/$1 last;
        }

        location / {
            # try to serve file directly, fallback to rewrite
            try_files $uri $uri/ @rewriteapp;
        }

        location @rewriteapp {
            rewrite ^(.*)$ /index.php/$1 last;
        }

        location /lazaret {
            internal;
            add_header Etag $upstream_http_etag;
            add_header Link $upstream_http_link;
            alias /storage/phraseanet/lazaret;
        }
        location /download {
            internal;
            add_header Etag $upstream_http_etag;
            add_header Link $upstream_http_link;
            alias /storage/phraseanet/download;
        }
        location /protected_dir_1 {
            internal;
            add_header Etag $upstream_http_etag;
            add_header Link $upstream_http_link;
            alias /storage/phraseanet/databox/documents;
        }
        location /protected_dir_2 {
            internal;
            add_header Etag $upstream_http_etag;
            add_header Link $upstream_http_link;
            alias /storage/phraseanet/databox/subdefs;
        }

        # PHP scripts -> PHP-FPM server listening on 127.0.0.1:9000
        location ~ ^/(index|index_dev|api)\.php(/|$) {
            fastcgi_pass   127.0.0.1:9000;
            fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
            include        fastcgi_params;
        }
    }

.. _nginx-pseudo-streaming:

H264 pseudo-streaming Configuration
-----------------------------------

.. topic:: The essential

    H264 Pseudo-streaming emulates a stream server and allow browsing video
    content without loading the whole file in the player.

Since version 3.8.4, Phraseanet H264 pseudo-streaming configuration is much
more simple. A command of `bin/console` generates mappings for Phraseanet
configuration, a second one dumps Nginx configuration.

.. note::

    It requires `Secure link`_ and `MP4`_ Nginx modules.

First step generates Phraseanet configuration mappings with the
`bin/console h264-pseudo-streaming:generate-mapping` command.

.. code-block:: none

    bin/console h264-pseudo-streaming:generate-mapping nginx --enabled

This command prompts a piece of Phraseanet configuration as it will be
written. To do write, re execute the command with **--write** option.

.. code-block:: none

    bin/console h264-pseudo-streaming:generate-mapping nginx --enabled --write

Once Phraseanet configuration has been written, Nginx directives should be
updated with the `h264-pseudo-streaming:dump-configuration` command.

.. code-block:: none

    bin/console h264-pseudo-streaming:dump-configuration

Copy-paste the code in Nginx virtual host and finally reload Nginx.

.. warning::

    Generating mappings and virtual host update has to be done on any databox
    creation or when a sub-definitions structure is modified.

Example of Nginx virtual host configuration that includes an H264
pseudo-streaming configuration.

.. code-block:: none

    #/etc/nginx/sites-available/phraseanet.conf
    server {
        listen       80;
        server_name  yourdomain.tld;
        root         /var/www/Phraseanet/www;

        index        index.php;

        location /api {
            rewrite ^(.*)$ /api.php/$1 last;
        }

        location / {
            # try to serve file directly, fallback to rewrite
            try_files $uri $uri/ @rewriteapp;
        }

        location @rewriteapp {
            rewrite ^(.*)$ /index.php/$1 last;
        }

        location /mp4-videos-1 {
            mp4;
            secure_link $arg_hash,$arg_expires;
            secure_link_md5 "$secure_link_expires$uri s3cr3tstr1ng";

            if ($secure_link = "") {
                return 403;
            }
            if ($secure_link = "0") {
                return 410;
            }

            alias /storage/phraseanet/databox/subdefs;
        }

        # PHP scripts -> PHP-FPM server listening on 127.0.0.1:9000
        location ~ ^/(index|index_dev|api)\.php(/|$) {
            fastcgi_pass   127.0.0.1:9000;
            fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
            include        fastcgi_params;
        }
    }

.. _Secure link: https://nginx.org/en/docs/http/ngx_http_secure_link_module.html
.. _MP4: https://nginx.org/en/docs/http/ngx_http_mp4_module.html
