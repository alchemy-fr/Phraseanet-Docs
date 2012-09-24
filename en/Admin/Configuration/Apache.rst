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


Mod XSendFile
-------------

XSendFile configuration

Since Phraseanet 3.0.14, XSendFile configuration is not anymore provided in
.htaccess file.

We removed because a BC break between version 0.9 and 0.10 of mod_xsendfile.

You will have to update your virtual host configuration.

Here is an example of configuration with mod_xsendfile 0.10 :

.. code-block:: bash

    <IfModule mod_xsendfile.c>
      <Files *>
        XSendFile on
        XSendFilePath /var/www/phraseanet/datas
        XSendFilePath /var/www/phraseanet/tmp/download
        XSendFilePath /var/www/phraseanet/tmp/lazaret
      </Files>
    </IfModule>

Here is an example of configuration with mod_xsendfile 0.9 and below :

.. code-block:: bash

    <IfModule mod_xsendfile.c>
      <Files *>
        XSendFile on
        XSendFileAllowAbove on
      </Files>
    </IfModule>
