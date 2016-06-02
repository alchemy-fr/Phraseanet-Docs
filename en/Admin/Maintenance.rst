Maintenance
===========

Backups
-------

Phraseanet stores documents (images, audio, videos, pdf...) in the filesystem
uses MySQL as database to store information, and relies on Elasticsearch
indexes.

Backups should take care of those three synchronised elements, and also the
application sources

Filesystem datas
****************

These datas are saved in directories you probably defined during setup.

An incremental backup is recommended.

MySQL databases
***************

ApplicationBox and DataBoxes are MySQL databases related to a Phraseanet
install.

Live backups should work.

:doc:`Konsole Kommander <Console>` has a command to backup your DBs:

.. code-block:: bash

    php bin/console system:backup-db /path/to/DBBackupDirectory/

This command can be included in a backup script.

Elasticsearch indexes
*********************

Please, refer to `Elasticsearch guide and documentation`_

Application sources
*******************

Applciation sources are genrally only modified when updating Phraseanet.

It can nevertheless be good to save at one time the sources after install and
setup.

.. note::

    You may just save the config/ directory because everything you setup is
    stored in it.

Maintenance
-----------

You can setup your application in maintenance state to prevent user from login
and display an alert message on the frontpage.
This configuration has to be done in the *config.yml* file.

Please refer to the :doc:`configuration page </Admin/Configuration>`.

.. _Elasticsearch guide and documentation: https://www.elastic.co/guide
