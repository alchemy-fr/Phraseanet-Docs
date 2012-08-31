NGINX
=====

Nginx configuration sample.

.. code-block:: bash

  #/etc/nginx/sites-available/phraseanet.conf
  server {
          listen       80;
          server_name  yourdomain.tld;
          root         /var/www/Phraseanet/www;

          index  index.php;
          include rewrite_rules.inc;

          # PHP scripts -> PHP-FPM server listening on 127.0.0.1:9000
          location ~ \.php(/|$) {
                   fastcgi_pass   127.0.0.1:9000;
                   fastcgi_index  index.php;
                   include fastcgi_params;
                   fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
          }
  }

.. note:: Do not forget to copy the rewrite rules file `rewrite_rules.inc` that
  you will find in `config/nginx.rewrite.rules`.


Auth Token Configuration
------------------------

Pseudo Stream H264 Configuration
--------------------------------

XSendFile Configuration
-----------------------