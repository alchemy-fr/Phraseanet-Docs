NGINX
=====

Configuration d'un virtual host Nginx pour Phraseanet :

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

Configuration Sendfile
----------------------

.. topic:: L'essentiel

    Sendfile permet de délester PHP de l'envoi des fichiers aux navigateurs.
    Il est fortement recommandé d'utiliser cette configuration pour alleger les
    process sur le serveur. Si Sendfile et désactivé, l'application Phraseanet
    fonctionnera normallement.

Depuis la version 3.8, la configuration SendFile de Phraseanet est simplifiée.
Une commande de l'utilitaire `bin/console` permet de générer les mappings pour
la configuration Phraseanet, une seconde permet d'en générer le supplément de
configuration Nginx.

La première étape consiste à générer le mapping Phraseanet Sendfile à l'aide
de la commande `bin/console xsendfile:generate-mapping`

.. code-block:: none

    bin/console xsendfile:generate-mapping nginx --enabled

Cette commande va afficher à l'ecran la partie de la configuration telle qu'elle
va être écrite. Pour l'écrire, re-executer la commande avec l'option
**--write**.

.. code-block:: none

    bin/console xsendfile:generate-mapping nginx --enabled --write

Une fois la configuration Phraseanet écrite, il faut mettre à jour les
directives nginx avec la commande `xsendfile:dump-configuration`

.. code-block:: none

    bin/console xsendfile:dump-configuration

Il suffit de copier-coller ce code dans le virtual host Nginx et de recharger
Nginx.

.. warning::

    L'opération de génération des mappings et de mise à jour du virtual host est
    à refaire à chaque création de databox ou lors de la modification de la
    structure des sous définitions de l'une d'elles.

Example de configuration Nginx intégrant une configuraton sendfile :

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

.. _nginx-h264-pseudo-streaming:

Configuration H264 pseudo-streaming
-----------------------------------

.. topic:: L'essentiel

    H264 Pseudo-streaming permet d'émuler un serveur de stream et la navigation
    dans le flux video avant le chargement complet de celui-ci.

Depuis la version 3.8.4, la configuration H264 pseudo-streaming de Phraseanet est
simplifiée. Une commande de l'utilitaire `bin/console` permet de générer les
mappings pour la configuration Phraseanet, une seconde permet d'en générer le
supplément de configuration Nginx.

.. note::

    Il est nécessaire d'installer les modules `Secure link`_ et `MP4`_ de Nginx.

La première étape consiste à générer le mapping Phraseanet H264 pseudo-streaming
à l'aide de la commande `bin/console h264-pseudo-streaming:generate-mapping`

.. code-block:: none

    bin/console h264-pseudo-streaming:generate-mapping nginx --enabled

Cette commande va afficher à l'ecran la partie de la configuration telle qu'elle
va être écrite. Pour l'écrire, re-executer la commande avec l'option
**--write**.

.. code-block:: none

    bin/console h264-pseudo-streaming:generate-mapping nginx --enable --write

Une fois la configuration Phraseanet écrite, il faut mettre à jour les
directives nginx avec la commande `h264-pseudo-streaming:dump-configuration`

.. code-block:: none

    bin/console h264-pseudo-streaming:dump-configuration

Il suffit de copier-coller ce code dans le virtual host Nginx et de recharger
Nginx.

.. warning::

    L'opération de génération des mappings et de mise à jour du virtual host est
    à refaire à chaque création de databox ou lors de la modification de la
    structure des sous définitions de l'une d'elles.

Example de configuration Nginx intégrant une configuraton H264 pseudo-streaming :

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

.. _Secure link: http://nginx.org/en/docs/http/ngx_http_secure_link_module.html
.. _MP4: http://nginx.org/en/docs/http/ngx_http_mp4_module.html
