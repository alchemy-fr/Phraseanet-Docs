NGINX
=====

Exemple de fichier de configuration Nginx.

.. code-block:: bash

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

.. note::

    Copier le fichier des règles de ré-écriture
    `rewrite_rules.inc` que vous trouverez dans config/nginx.rewrite.rules

Configuration Sendfile / X-Accel-Redirect
-----------------------------------------

Nginx fournit un outil "sendfile" équivalent au mod_xsendfile d'Apache.
Ce module est particulièrement intéressant en cas de fort traffic ou de données
volumineuses (video, etc...)

Configurer l'hôte virtuel Nginx puis l'installation Phraseanet.

.. code-block:: bash

    server {

        ...

        # configuration pour les sous definitions
        location /files { # Point de montage 'X-Accel-Redirect'
                internal;
                alias /path/to/your/datas; # Chemin d'acces pour 'X-Accel-Redirect'
        }

        # configuration pour les fichiers de quarantaine
        location /lazaret {
                internal;
                alias /path/to/your/phraseanet/install/tmp/lazaret;
        }

        # configuration pour les telechargements
        location /download {
                internal;
                alias /path/to/your/phraseanet/install/tmp/download;
        }
    }

Une fois cette configuration effectuée, mettre à jour la configuration de
Phraseanet dans la zone adéquat du setup :

- activation du module "xsendfile"
- fournir le nom du point de montage ("files" dans l'exemple précédent)
- fournir le chemin du point de montage (le chemin vers les sous definitions)
