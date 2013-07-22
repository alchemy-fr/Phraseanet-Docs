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

    Sendfile permet de delester PHP de l'envoi des fichiers aux navigateurs.
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

    bin/console xsendfile:generate-mapping nginx --enable

Cette commande va afficher à l'ecran la partie de la configuration telle qu'elle
va être écrite. Pour l'écrire, re-executer la commande avec l'option
**--write**.

.. code-block:: none

    bin/console xsendfile:generate-mapping nginx --enable --write

Une fois la configuration Phraseanet écrite, il faut mettre à jour les
directives nginx avec la commande `xsendfile:dump-configuration`

.. code-block:: none

    bin/console xsendfile:dump-configuration

Il suffit de copier coller ce code dans le virtual host Nginx et de recharger
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
