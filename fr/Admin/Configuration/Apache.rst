Apache
======

Exemple de fichier de configuration Apache.

.. code-block:: bash

    #/etc/apache2/sites-available/phraseanet.conf
    <VirtualHost *:80>
       ServerName sub.domain.tld

       DocumentRoot "/var/www/Phraseanet/www"

       <Directory "/var/www/Phraseanet/www">
           DirectoryIndex index.php
           Options Indexes FollowSymLinks
           AllowOverride All
       </Directory>

    </VirtualHost>

Gestion des videos
------------------

Depuis la version 3.0.6, Phraseanet peut prendre en compte deux modules
apaches, permettant un pseudo-streaming sur les prévisualisation h264
des videos.

Mod Auth Token
**************

Télécharger
^^^^^^^^^^^

Télécharger les sources du module Auth Token pour apache

.. code-block:: bash

    cd ~
    wget https://code.google.com/p/mod-auth-token/downloads/detail?name=mod_auth_token-1.0.5.tar.gz
    tar -zxvf mod_auth_token-1.0.5.tar.gz

Compiler
^^^^^^^^
.. code-block:: bash

    rm -f configure
    autoreconf -fi
    automake -f
    ./configure --with-apxs=/usr/bin/apxs
    make

Activer
^^^^^^^
Editer le ficher de configuration d'apache (en general dans
/etc/apache/httpd.conf).

.. code-block:: bash

    LoadModule auth_token_module  /usr/lib/httpd/modules/mod_auth_token.so

Mod H264 Streaming
******************

Télécharger
^^^^^^^^^^^

Télécharger les sources du module H264 Streaming pour Apache.

.. code-block:: bash

    cd ~
    wget http://h264.code-shop.com/download/apache_mod_h264_streaming-2.2.7.tar.gz
    tar -zxvf apache_mod_h264_streaming-2.2.7.tar.gz

Compiler
^^^^^^^^

.. code-block:: bash

    cd ~/mod_h264_streaming-2.2.7
    ./configure --with-apxs=`which apxs2`
    make
    sudo make install

Activer
^^^^^^^

Editer le ficher de configuration d'apache (en général dans
/etc/apache/httpd.conf) afin que les requêtes se terminant par .mp4 soit prises
en charge par le module h264_streaming.

.. code-block:: bash

    LoadModule h264_streaming_module /usr/lib/apache2/modules/mod_h264_streaming.so
    AddHandler h264-streaming.extensions .mp4

Puis redémarrer Apache pour que les modifications soient prises en compte.

Paramètres videos
*****************

Une fois ces deux modules ajoutés, il est possible de consulter leurs prises en
charge dans le tableau de bord.

Modifier l'Hôte Virtuel Apache :

.. code-block:: bash

    ...
    Alias /mp4_videos/ "/votre_path_vers_phraseanet_datas/datas/noweb"

    <Location /downloadmp4/>
            AuthTokenSecret       "votre passphrase secrete"
            AuthTokenPrefix       /mp4_videos/
            AuthTokenTimeout      120
            AuthTokenLimitByIp    off
    </Location>
    ....

Une fois Apache redémarré, activer le mode pseudo-streaming h264 dans le setup
de l'installation, renseigner la pass-phrase, le point de montage des données et
le path complet vers les données.

.. warning::

    si les vidéos précédemment archivées étaient en flv, alors il faudra
    reconstruire les sous-définitions (via le menu "outil") pour bénéficier du
    stream sur ces enregistrements.

Mod XSendFile
-------------

Configuration du module xsendfile sous apache

Depuis la version 3.0.14 de Phraseanet, la configuration du module xsendfile
n'est plus fournie dans un fichier .htaccess comme auparavant.

La raison pour laquelle nous avons cessé cette pré-configuration provient d'un
changement majeur dans la configuration du module entre ses versions 0.9 et 0.10

Exemple de configuration en version >= 0.10 dans le virtualhost :

.. code-block:: bash

    <IfModule mod_xsendfile.c>
      <Files *>
        XSendFile on
        XSendFilePath /var/www/phraseanet/datas
        XSendFilePath /var/www/phraseanet/tmp/download
        XSendFilePath /var/www/phraseanet/tmp/lazaret
      </Files>
    </IfModule>

Exemple de configuration en version < 0.10 dans le virtualhost :

.. code-block:: bash

    <IfModule mod_xsendfile.c>
      <Files *>
        XSendFile on
        XSendFileAllowAbove on
      </Files>
    </IfModule>
