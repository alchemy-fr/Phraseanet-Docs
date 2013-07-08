Console
=======

Phraseanet provides two commandline tools : `bin/console` and `bin/setup`.
`bin/console` can be executed once Phraseanet has been installed, whereas
`bin/setup` can be executed at any moment, for example for troubleshooting.

Konsole Kommander
-----------------

Konsole Kommander is a commandline tool to manage Phraseanet. It is simple
to use :

.. code-block:: bash

    php bin/console

You will see something like :

.. code-block:: bash

    Available commands:
      help                               Displays help for a command
      list                               Lists commands
    about
      about:authors                      List authors and contributors
      about:license                      This program license
    check
      check:config                     Checks environment
      check:extension                  Checks if the Phrasea PHP Extension is well installed & working properly.
    collection
      collection:create                Create a collection in Phraseanet
    compile
      compile:configuration            Compile configuration
    fields
      fields:delete                    Delete a documentation field from a Databox
      fields:list                      List all databox fields
      fields:merge                     Merge databox structure fields
      fields:rename                    Rename a documentation field from a Databox
    mail
      mail:test
    plugins
      plugins:add                      Installs a plugin to Phraseanet
      plugins:remove                   Removes a plugin given its name
    records
      records:add                      Add a record to Phraseanet
      records:build-missing-subdefs    Build missing subviews
      records:rescan-technical-datas   Rescan databases for technical datas
    scheduler
      scheduler:start                  Start the scheduler
      scheduler:state                  Get scheduler status
      scheduler:stop                   Stop the scheduler
    sphinx
      sphinx:generate-suggestions        Generate suggestions for SphinxSearch Engine
    system
      system:backup-db                 Backup Phraseanet Databases
      system:clear-cache               Empty cache directories, clear Memcached, Redis if avalaible
      system:export                    Export all phraseanet records to a directory
      system:mail-check                Check if email addresses are unique (mandatory since 3.5)
      system:template-generator        Generate template files
      system:upgrade-datas             Upgrade Phraseanet datas
    task
      task:list                        List tasks
      task:run                         Run task
      task:state                       Get task state
    xsendfile
      xsendfile:dump-configuration     Dump the virtual host configuration depending on Phraseanet configuration
      xsendfile:generate-mapping       Generates Phraseanet xsendfile mapping configuration depending on databoxes configuration

Every command provides halp with the help command :

.. code-block:: bash

    php bin/console help CommandName

.. note::

    Every command returns an exit code that can be used for automated scripts.

scheduler:state exit codes
**************************

This command returns an exit code given the state of the :doc:`task scheduler </Admin/TaskManager>`.

+---------------+-----------------+
| State         | Exit code       |
+===============+=================+
| setup error   | 1               |
+---------------+-----------------+
| bad_argument  | 2               |
+---------------+-----------------+
| fatal error   | 3               |
+---------------+-----------------+
| started       | 10              |
+---------------+-----------------+
| stopped       | 11              |
+---------------+-----------------+
| to stop       | 13              |
+---------------+-----------------+
| to start      | 14              |
+---------------+-----------------+
| to restart    | 15              |
+---------------+-----------------+
| to delete     | 16              |
+---------------+-----------------+
| task unknown  | 20              |
+---------------+-----------------+
| state unknown | 21              |
+---------------+-----------------+



Setup
-----

Setup
-----

.. versionadded:: 3.8

   The setup command has been added in version 3.8

Phraseanet provides a setup command line utility :

.. code-block:: bash

    php bin/setup

This command results in such screen output :

.. code-block:: bash

    Usage:
      [options] command [arguments]

    Options:
      --help           -h Display this help message.
      --quiet          -q Do not output any message.
      --verbose        -v Increase verbosity of messages.
      --version        -V Display this application version.
      --ansi              Force ANSI output.
      --no-ansi           Disable ANSI output.
      --no-interaction -n Do not ask any interactive question.

    Available commands:
      help                   Displays help for a command
      list                   Lists commands
    about
      about:authors          List authors and contributors
      about:license          This program license
    check
      check:system           Check environment
    system
      system:install         Install Phraseanet
      system:upgrade         Upgrade Phraseanet to the latest version
      system:upgrade-datas   Upgrade Phraseanet datas

The whole commands available through this utility are executable whenever
Phraseanet is not installed, whereas Konsole Kommander requires Phraseanet
installed and up-to-date.

check:system exit codes
***********************

This command returns an exit code.

+----------------------------------------------+------------------+
| State                                        | Exit code        |
+==============================================+==================+
| System is correctly configured               | 0                |
+----------------------------------------------+------------------+
| System is correctly configured,              | 1                |
| Adjustments can be done                      |                  |
+----------------------------------------------+------------------+
| System is not correctly configured.          | 2                |
| Errors must be fixed before continue.        |                  |
+----------------------------------------------+------------------+
