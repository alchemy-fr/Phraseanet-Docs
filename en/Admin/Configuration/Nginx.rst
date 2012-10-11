NGINX
=====

Nginx configuration example.

.. code-block:: bash

  #/etc/nginx/sites-available/phraseanet.conf
  server {
          listen       80;
          server_name  yourdomain.tld;
          root         /var/www/Phraseanet/www;

          index        index.php;
          include      rewrite_rules.inc;

          # PHP scripts -> PHP-FPM server listening on 127.0.0.1:9000
          location ~ \.php(/|$) {
                   fastcgi_pass   127.0.0.1:9000;
                   fastcgi_index  index.php;
                   include fastcgi_params;
                   fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
          }
  }

.. note::
    Copy the rewrite rules file `rewrite_rules.inc` included in
    `config/nginx.rewrite.rules`.


Configuration Sendfile / X-Accel-Redirect
-----------------------------------------

As Apache provides mod_xsendfile, Nginx provides a "sendfile" tool.
First, configure Nginx, then Phraseanet.


.. code-block:: bash

    server {

        ...

        # sub-views configuration
        location /files { # Mount-Point 'X-Accel-Redirect'
                internal;
                alias /path/to/your/datas; # 'X-Accel-Redirect' access path
        }

        # Quarantine configuration
        location /lazaret {
                internal;
                alias /path/to/your/phraseanet/install/tmp/lazaret;
        }

        # Download configuration
        location /download {
                internal;
                alias /path/to/your/phraseanet/install/tmp/download;
        }
    }

Once the configuration has been updated and the server restarted, update
Phraseanet configuration :

- activate "xsendfile"
- Provide the mount-point name ("files" in the previous example)
- Provide the mount-point path (The path to the sub-views directory)

