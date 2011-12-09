Apache
======


Exemple de fichier de configuration Apache.

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


Configuration Auth Token
------------------------

Configuration Pseudo Stream H264
--------------------------------

Configuration XSendFile
-----------------------


Configuration du module xsendfile sous apache

Depuis la version 3.0.14 de Phraseanet, la configuration du module xsendfile
n'est plus fournie dans un fichier .htaccess comme auparavant.

La raison pour laquelle nous avons cessé cette pré-configuration provient d'un
changement majeur dans la configuration du module entre ses versions 0.9 et 0.10

Exemple de configuration en version >= 0.10 dans le virtualhost :

  .. code-block:: bash

    <IfModule mod_xsendfile.c>
      <Files download_prepare.php>
        XSendFile on
        XSendFilePath /var/www/phraseanet/datas/noweb
        XSendFilePath /var/www/phraseanet/tmp/download
      </Files>
      <Files download_anonymous.php>
        XSendFile on
        XSendFilePath /var/www/phraseanet/datas/noweb
        XSendFilePath /var/www/phraseanet/tmp/download
      </Files>
      <Files directprev.php>
        XSendFile on
        XSendFilePath /var/www/phraseanet/datas/noweb
      </Files>
      <Files lazaret_image.php>
        XSendFile on
        XSendFilePath /var/www/phraseanet/tmp/lazaret
      </Files>
    </IfModule>

Exemple de configuration en version < 0.10 dans le virtualhost :
  .. code-block:: bash

    <IfModule mod_xsendfile.c>
      <Files download_prepare.php>
        XSendFile on
        XSendFileAllowAbove on
      </Files>
      <Files download_anonymous.php>
        XSendFile on
        XSendFileAllowAbove on
      </Files>
      <Files directprev.php>
        XSendFile on
        XSendFileAllowAbove on
      </Files>
      <Files lazaret_image.php>
        XSendFile on
        XSendFileAllowAbove on
      </Files>
    </IfModule>

