Upgrade Procedure
=================

.. toctree::

    Upgrade/3.6
    Upgrade/3.7

To upgrade Phraseanet to the latest version, it is strongly recommended to
follow this upgrade procedure :

* In the "Administration" panel of Phraseanet, stop the scheduler.
* Log out all users (including you, the upgrade operator).
* Backup databases with the provided tool :

.. code-block:: bash

    bin/console system:backup-db

* :doc:`Compile and update the php_phrasea extension <Prerequisite>`.
* :doc:`Compile and replace the new indexer binary <Prerequisite>`.
* Replace old source by following these steps :
    * Rename the folder containing the previous sources
      (ex : phraseanet-backup-date).
    * Place the latest sources where the previous one were.
* Overwrite the config folder with the one of the previous installation.
* Reloading Apache or Nginx server, eventually PHP-FPM to support the new
  version of the extension.
* In a terminal, at sources root, execute the following command. Please note
  that execution time in this step could be long.

.. code-block:: bash

    bin/console system:upgrade

After upgrading from old versions (before 3.6), the output asks to run more
commands :

.. code-block:: bash

    Your install requires data migration, please execute the following command

            bin/setup system:upgrade-datas --from=3.1

    Your install might need to re-read technical datas

            bin/console records:rescan-technical-datas

    Your install might need to re-read technical datas

            bin/console records:build-missing-subdefs

These commands should be executed in the same order to ensure a correct upgrade.

* Verify that Phraseanet has been upgraded with the command :

.. code-block:: bash

    bin/console --version

* Restart the tasks in Phraseanet "Administration" panel.
