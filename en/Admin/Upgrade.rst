Upgrade Procedure
=================

.. warning::

    To upgrade to Phraseanet version 4.0, installed version of Phraseanet
    must be 3.8.8.

    Please have a look to `Phraseanet 3.8 upgrade procedure`_ if required.

To upgrade Phraseanet to the latest version, it is strongly recommended to
follow this upgrade procedure:

* In the "Administration" panel of Phraseanet, stop the scheduler
* Log out all users (including you, the upgrade operator)
* Optional: Switch to maintenance mode (in `config/configuration.yml`)
* Backup databases with the provided tool:

.. code-block:: bash

    bin/console system:backup-db

* Replace old source by following these steps:
    * Rename the folder containing the previous sources
      (ex: phraseanet-backup-date).
    * Place the latest sources where the previous one were.
* Overwrite the config folder with the one of the previous installation.
* Reload Apache or Nginx server, eventually PHP-FPM to support the new
  version of the extension.
* Check that the deployment environment meets the prerequisites ** of the version
  of Phraseanet you update. In a terminal, in the application root directory,
  run the following command:

  .. code-block:: bash

      bin/setup check:system

  The result of the command shows on the screen points requiring your
  attention.
* In a terminal, at sources root, execute the following command. Please note
  that execution time in this step could be long.

.. code-block:: bash

    bin/setup system:upgrade

* Verify that Phraseanet has been upgraded with the command:

.. code-block:: bash

    bin/console --version

* Restart the tasks in Phraseanet "Administration" panel.

.. _Phraseanet 3.8 upgrade procedure: https://docs.phraseanet.com/3.8/en/Admin/Upgrade.html
