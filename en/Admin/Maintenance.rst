Maintenance
===========

Backups
-------

Phraseanet uses MySQL as database and stores documents n the filesystem.
Backups should take care of both data stores, and application sources.

Filesystem datas
****************

These datas are saved in directories you probably defined during setup.

An incremental backup is recommended.

MySQL databases
***************

ApplicationBox and DataBoxes are MySQL databases related to a Phraseanet
install.

Live backups should work.

:doc:`Konsole Kommander <Console>` has a command to backup your DBs :

.. code-block:: bash

    php bin/console system:backup-db /path/to/DBBackupDirectory/

This command can be included in a backup script.

Application sources
*******************

Applciation sources are genrally only modified when updating Phraseanet.

It can nevertheless be good to save at one time the sources after install and
setup.

.. note:

    You may just save the config/ directory as everything you setup is
    stored in it.

Maintenance
-----------

You can setup your application in maintenance mode to prevent user from login
and display an alert message on the frontpage.
This configuration has to be done in the *config.yml* file.
Please refer to the :doc:`admin manual </Admin/Configuration>`.
