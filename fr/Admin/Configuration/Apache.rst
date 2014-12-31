Apache
======

L'exemple suivant présente la configuration d'un *virtual host* Apache 2 pour
Phraseanet dans le cas d'un répertoire d'installation nommé Phraseanet dans
*/var/www/* :

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

.. _apache-xsendfile:

Configuration XSendFile
-----------------------

.. topic:: L'essentiel

    XSendfile permet de délester PHP de l'envoi des fichiers au navigateur.
    Il est fortement recommandé d'utiliser cette configuration pour alleger les
    process sur le serveur. Si XSendfile est désactivé, l'application Phraseanet
    fonctionnera normallement.

Depuis la version 3.8, la configuration XSendFile de Phraseanet est simplifiée.
Une commande de l'utilitaire `bin/console` permet de générer les mappings pour
la configuration Phraseanet, une seconde permet d'en générer le supplément de
configuration Apache 2.

.. note::

    Il est nécessaire d'installer le module `XSendfile`_.

La première étape consiste à générer le mapping Phraseanet Sendfile à l'aide
de la commande `bin/console xsendfile:generate-mapping`

.. code-block:: none

    bin/console xsendfile:generate-mapping apache --enabled

Cette commande va afficher à l'ecran la partie de la configuration telle qu'elle
va être écrite. Pour l'écrire, re-executer la commande avec l'option
**--write**.

.. code-block:: none

    bin/console xsendfile:generate-mapping apache --enabled --write

Une fois la configuration Phraseanet écrite, il faut mettre à jour les
directives Apache 2 avec la commande `xsendfile:dump-configuration`

.. code-block:: none

    bin/console xsendfile:dump-configuration

Il suffit de copier-coller ce code dans le *virtual host* Apache et de recharger
Apache.

.. warning::

    L'opération de génération des mappings et de mise à jour du virtual host est
    à refaire à chaque création de databox ou lors de la modification de la
    structure des sous définitions de l'une d'elles.

Exemple de *virtual host* Apache intégrant une configuraton sendfile :

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

        <IfModule mod_xsendfile.c>
          <Files *>
              XSendFile on
              XSendFilePath  /storage/phraseanet/lazaret
              XSendFilePath  /storage/phraseanet/download
              XSendFilePath  /storage/phraseanet/databox/documents
              XSendFilePath  /storage/phraseanet/databox/subdefs
          </Files>
        </IfModule>
    </VirtualHost>

.. _apache-h264-pseudo-streaming:

Configuration H264 Pseudo-streaming
-----------------------------------

.. topic:: L'essentiel

    H264 Pseudo-streaming permet d'émuler un serveur de stream et la navigation
    dans le flux video avant le chargement complet de celui-ci.

Depuis la version 3.8.4, la configuration H264 pseudostreaming de Phraseanet
est simplifiée. Une commande de l'utilitaire `bin/console` permet de générer les
mappings pour la configuration Phraseanet. Une autre permet de générer le
supplément de configuration pour Apache 2.

.. note::

    Il est nécessaire d'installer les module `MP4`_ et `Auth token`_.

La première étape consiste à générer le mapping Phraseanet H264 pseudo-streaming
à l'aide de la commande `bin/console h264-pseudo-streaming:generate-mapping`

.. code-block:: none

    bin/console h264-pseudo-streaming:generate-mapping apache --enabled

Cette commande va afficher à l'ecran la partie de la configuration telle qu'elle
va être écrite. Pour l'écrire, re-executer la commande avec l'option
**--write**.

.. code-block:: none

    bin/console h264-pseudo-streaming:generate-mapping apache --enabled --write

Une fois la configuration Phraseanet écrite, il faut mettre à jour les
directives apache 2 avec la commande `h264-pseudo-streaming:dump-configuration`

.. code-block:: none

    bin/console h264-pseudo-streaming:dump-configuration

Copier-coller le code affiché dans le *virtual host* Apache et recharger
Apache.

.. warning::

    L'opération de génération des mappings et de mise à jour du *virtual host*
    est à refaire à chaque création de databox ou lors de la modification de la
    structure des sous définitions de l'une d'elles.

Exemple de *virtual host* Apache intégrant une configuraton h254
pseudo-streaming :

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

        Alias /mp4-videos-1 "/storage/phraseanet/databox/subdefs"

        <Location /mp4-videos-1>
            AuthTokenSecret       "s3cr3tstr1ng"
            AuthTokenPrefix       /mp4-videos-1
            AuthTokenTimeout      3600
            AuthTokenLimitByIp    off
        </Location>
    </VirtualHost>

.. _XSendfile: https://tn123.org/mod_xsendfile/
.. _MP4: http://h264.code-shop.com/trac/wiki/Mod-H264-Streaming-Apache-Version2
.. _Auth token: https://code.google.com/p/mod-auth-token/
