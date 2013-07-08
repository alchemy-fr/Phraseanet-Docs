Apache
======

Apache 2 virtual host configuration for Phraseanet :

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

XSendFile Configuration
-----------------------

.. topic::

    XSendfile allows PHP to move file download handling to Apache. It is
    strongly recommended to use this feature. If XSendfile is disabled,
    Phraseanet will work as expected.

Since version 3.8, Phraseanet XSendFile configuration is much more simple.
A command of `bin/console` generates mappings for Phraseanet configuration, a
second one dumps Apache2 configuration.

First step generates Phraseanet configuration mappings with the
`bin/console xsendfile:generate-mapping` command.

.. code-block::

    bin/console xsendfile:generate-mapping apache --enable

This command prompts a piece of Phraseanet configuration as it will be
written. To do write, re execute the command with **--write** option.

.. code-block::

    bin/console xsendfile:generate-mapping apache --enable --write

Once Phraseanet configuration has been written, Apache2 directives should be
updated with the `xsendfile:dump-configuration` command.

.. code-block::

    bin/console xsendfile:dump-configuration

Copy-paste the code in Apache virtual host and finally reload Apache.

.. warning::

    Generating mappings and virtual host update has to be done on any databox
    creation or when a sub-definitions structure is modified.

Example of Apache 2 virtual host configuration that includes an XSendfile
configuration.

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
