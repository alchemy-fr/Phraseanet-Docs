Upgrade Procedure
=================

.. toctree::

    Upgrade/3.6

When releasing a new version, we suggest you to follow the update procedure:

  * Stop the processes launched by the scheduler
    - from the “Administration” application - stop all the tasks running

  * Log out all the users (including yourself)

  * Backup of databases and old sources

  * :doc:`Compile and update the php_phrasea extension <Prerequisite>`

  * :doc:`Compile and replace the new indexer binary <Prerequisite>`

  * Update sources of old sources

  * Overwrite the config folder with the one of your old installation

  * Reloading Apache for the support of the new extension

  * Log in to the Administration application, edit the configuration,
    and save it in order that the new variables are supported

  * In the zone “Databases”, use the button “Repare tables”,
    the scripts for the update will launch.
    According to your setup, this operation may take a while.

  * If you are using a memcached module, flush this cache

    (either restart the memcached server, or use the button in the dashboard
    of the Administration application).

  * Relaunch the tasks through the task manager


