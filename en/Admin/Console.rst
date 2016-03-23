Console
=======

Phraseanet provides two command line tools:
:ref:`bin/console<Konsole Kommander>` and :ref:`bin/setup<Setup>`.
Command :ref:`console<Konsole Kommander>` can be executed once Phraseanet has
been installed, whereas command :ref:`bin/setup<Setup>` can be executed at any
moment, for example before installing or upgrading or for any troubleshooting
purposes.

.. _Konsole Kommander:

Konsole Kommander
-----------------

Konsole Kommander is a commandline tool to manage Phraseanet. It is simple
to use, from the Phraseanet installation directory type:

.. code-block:: bash

    php bin/console

Previous example displays the available commands:

.. code-block:: bash

    Available commands:
      help                                       Displays help for a command
      list                                       Lists commands
    about
      about:authors                              Lists authors and contributors
      about:license                              Displays this program license
    check
      check:config                               Performs a check against the environment and configuration. Give some advices for production settings.
      check:extension                            Performs a serie of tests against Phrasea Engine PHP Extension
    collection
      collection:create                          Creates a collection in Phraseanet
    compile
      compile:configuration                      Compiles YAML configuration to plain PHP
    fields
      fields:delete                              Deletes a documentation field from a Databox
      fields:list                                Lists all databoxes documentation fields
      fields:merge                               Merges databox documentation fields
      fields:rename                              Renames a documentation field from a Databox
    h264-pseudo-streaming
      h264-pseudo-streaming:dump-configuration   Dump the virtual host configuration depending on Phraseanet configuration
      h264-pseudo-streaming:generate-mapping     Generates Phraseanet H264 pseudo streaming mapping configuration depending on databoxes configuration
    mail
      mail:test                                  Sends an email to a given address to test mail-server configuration
    plugins
      plugins:add                                Installs a plugin to Phraseanet
      plugins:list                               Lists installed plugins
      plugins:remove                             Removes a plugin given its name
    records
      records:add                                Adds a record to Phraseanet
      records:build-missing-subdefs              Builds subviews that previously failed to be generated / did not exist when records were added
      records:build-subdefs                      Build subviews for given subview names and record types
      records:rescan-technical-datas             Rescans records for technical datas
    scheduler
      scheduler:start                            Starts Phraseanet scheduler
      scheduler:state                            Returns Phraseanet scheduler status
      scheduler:stop                             Stops Phraseanet scheduler
    sphinx
      sphinx:generate-suggestions                Generates suggestions for Sphinx Search Engine, useful for query auto-completion
    static-file
      static-file:dump-configuration             Dump the virtual host configuration depending on Phraseanet configuration
      static-file:generate-mapping               Generates Phraseanet Static file configuration
    system
      system:backup-db                           Backups Phraseanet Databases
      system:clear-cache                         Empties cache directories and cache-server data
      system:export                              Exports all phraseanet records to a given directory
      system:mail-check                          Checks if email addresses are uniques (mandatory since 3.5)
      system:upgrade-datas                       Upgrades Phraseanet datas, useful after migrations
    task
      task:list                                  Lists Phraseanet tasks
      task:run                                   Runs a Phraseanet task given its id
      task:state                                 Returns a Phraseanet task state given its id
    xsendfile
      xsendfile:dump-configuration               Dump the virtual host configuration depending on Phraseanet configuration
      xsendfile:generate-mapping                 Generates Phraseanet xsendfile mapping configuration depending on databoxes configuration

Every command provides its own help with the *help* argument:

.. code-block:: bash

    php bin/console help CommandName

Please refer to these helps for the use of available commands.

.. note::

    Every command returns an exit code that can be used for automated scripts.

task-manager:scheduler:state exit codes
***************************************

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



.. _Setup:

Setup
-----

.. versionadded:: 3.8

Phraseanet provides a setup command line utility. From the Phraseanet install
directory type:

.. code-block:: bash

    php bin/setup

This command displays available commands in Setup:

.. code-block:: bash

    Available commands:
      help                   Displays help for a command
      list                   Lists commands
    about
      about:authors          Lists authors and contributors
      about:license          Displays this program license
    check
      check:system           Performs a check against the environment
    crossdomain
      crossdomain:generate   Generate crossdomain.xml file according to configuration
    plugins
      plugins:add            Installs a plugin to Phraseanet
      plugins:list           Lists installed plugins
      plugins:remove         Removes a plugin given its name
      plugins:reset          Reset plugins in case a failure occured
    system
      system:install         Installs Phraseanet
      system:upgrade         Upgrades Phraseanet to the latest version
      system:upgrade-datas   Upgrades Phraseanet datas, useful after migrations

Every command provides its own help with the *help* argument:

.. code-block:: bash

    php bin/setup help CommandName

Please refer to these helps for the use of available commands.

.. note::

    The whole commands available through the Setup utility are executable
    whenever Phraseanet is installed or not.

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
