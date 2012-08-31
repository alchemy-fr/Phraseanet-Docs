Apache
======

Apache Configuration sample.

.. code-block:: bash

   #/etc/apache2/sites-available/phraseanet.conf
  <VirtualHost *:80>
      ServerName sub.domain.tld

      DocumentRoot "/var/www/Phraseanet/www"

      <Directory "/var/www/Phraseanet/www">
          DirectoryIndex index.php
          Options Indexes FollowSymLinks -Multiviews
          AllowOverride All
      </Directory>

  </VirtualHost>

Auth Token Configuration
------------------------

Pseudo Stream H264 Configuration
--------------------------------

XSendFile Configuration
-----------------------