Apache
======


Apache Configuration sample.

.. code-block:: bash

   #/etc/apache2/sites-available/phraseanet.conf
  <VirtualHost *:80>
      ServerName sub.domain.tld
      ServerAdmin email@example.com 

      DocumentRoot "/var/www/Phraseanet/www"

      <Directory "/var/www/Phraseanet/www">
          DirectoryIndex index.php
          Options Indexes FollowSymLinks
          AllowOverride All
      </Directory>

      #publish thumbnail content
      Alias /web /var/www/Phraseanet/datas/web

      ErrorLog logs/phraseanet_error_log
      CustomLog logs/phrseanet_access_log combined
      LogLevel warn
  </VirtualHost>

*Note:* adapt the paths `logs/phraseanet_error/access_log` to your project path

Auth Token Configuration
------------------------

Pseudo Stream H264 Configuration
--------------------------------

XSendFile Configuration
-----------------------