Apache
======

Configuration d'un virtual host Apache 2 pour Phraseanet :

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

    XSendfile permet de delester PHP de l'envoi des fichiers aux navigateurs.
    Il est fortement recommandé d'utiliser cette configuration pour alleger les
    process sur le serveur. Si XSendfile et désactivé, l'application Phraseanet
    fonctionnera normallement.

Depuis la version 3.8, la configuration XSendFile de Phraseanet est simplifiée.
Une commande de l'utilitaire `bin/console` permet de générer les mappings pour
la configuration Phraseanet, une seconde permet d'en générer le supplément de
configuration Apache 2.

La première étape consiste à générer le mapping Phraseanet Sendfile à l'aide
de la commande `bin/console xsendfile:generate-mapping`

.. code-block::

    bin/console xsendfile:generate-mapping apache --enable

Cette commande va afficher à l'ecran la partie de la configuration telle qu'elle
va être écrite. Pour l'écrire, re-executer la commande avec l'option
**--write**.

.. code-block::

    bin/console xsendfile:generate-mapping apache --enable --write

Une fois la configuration Phraseanet écrite, il faut mettre à jour les
directives apache 2 avec la commande `xsendfile:dump-configuration`

.. code-block::

    bin/console xsendfile:dump-configuration

Il suffit de copier coller ce code dans le virtual host Apache et recharger
Apache.

.. warning::

    L'operation de generation des mappings et mise à jour du virtual host est à
    refaire à chaque création de databox ou lors de la modification de la
    structure des sous définitions de l'une d'elles.

Example de virtual host Apache intégrant une configuraton sendfile :

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
