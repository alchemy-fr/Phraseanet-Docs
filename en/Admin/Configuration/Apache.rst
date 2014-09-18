Apache
======

Apache 2 virtual host configuration for Phraseanet:

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

.. topic:: The essential

    XSendfile allows PHP to move file download handling to Apache. It is
    strongly recommended to use this feature. If XSendfile is disabled,
    Phraseanet will work as expected.

Since version 3.8, Phraseanet XSendFile configuration is much more simple.
A command of `bin/console` generates mappings for Phraseanet configuration, a
second one dumps Apache2 configuration.

.. note::

    `XSendfile`_ module is required.

First step generates Phraseanet configuration mappings with the
`bin/console xsendfile:generate-mapping` command.

.. code-block:: none

    bin/console xsendfile:generate-mapping apache --enabled

This command prompts a piece of Phraseanet configuration as it will be
written. To do write, re execute the command with **--write** option.

.. code-block:: none

    bin/console xsendfile:generate-mapping apache --enabled --write

Once Phraseanet configuration has been written, Apache2 directives should be
updated with the `xsendfile:dump-configuration` command.

.. code-block:: none

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

.. _apache-pseudo-streaming:

H264 pseudo-streaming Configuration
-----------------------------------

.. topic:: The essential

    H264 Pseudo-streaming emulates a stream server and allow browsing video
    content without loading the whole file in the player.

Since version 3.8.4, Phraseanet H264 pseudo-streaming configuration is much more
simple. A command of `bin/console` generates mappings for Phraseanet
configuration, a second one dumps Apache2 configuration.

.. note::

    `MP4`_ and `Auth token`_ modules are required.

First step generates Phraseanet configuration mappings with the
`h264-pseudo-streaming:generate-mapping` command.

.. code-block:: none

    bin/console h264-pseudo-streaming:generate-mapping apache --enabled

This command prompts a piece of Phraseanet configuration as it will be
written. To do write, re execute the command with **--write** option.

.. code-block:: none

    bin/console h264-pseudo-streaming:generate-mapping apache --enabled --write

Once Phraseanet configuration has been written, Apache2 directives should be
updated with the `h264-pseudo-streaming:dump-configuration` command.

.. code-block:: none

    bin/console h264-pseudo-streaming:dump-configuration

Copy-paste the code in Apache virtual host and finally reload Apache.

.. warning::

    Generating mappings and virtual host update has to be done on any databox
    creation or when a sub-definitions structure is modified.

Example of Apache 2 virtual host configuration that includes an H264
pseudo-streaming configuration.

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
