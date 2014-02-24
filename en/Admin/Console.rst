Console
=======

Phraseanet provides two commandline tools: `bin/console` and `bin/setup`.
`bin/console` can be executed once Phraseanet has been installed, whereas
`bin/setup` can be executed at any moment, for example for troubleshooting.

Konsole Kommander
-----------------

Konsole Kommander is a commandline tool to manage Phraseanet. It is simple
to use:

.. code-block:: bash

    php bin/console

You will see something like:

.. code-block:: bash

    Available commands:
      help                                  Displays help for a command
      list                                  Lists commands
    about
      about:authors                         Lists authors and contributors
      about:license                         Displays this program license
    check
      check:config                          Performs a check against the environment and configuration. Give some advices for production settings.
      check:extension                       Performs a serie of tests against Phrasea Engine PHP Extension
    collection
      collection:create                     Creates a collection in Phraseanet
    compile
      compile:configuration                 Compiles YAML configuration to plain PHP
    fields
      fields:delete                         Deletes a documentation field from a Databox
      fields:list                           Lists all databoxes documentation fields
      fields:merge                          Merges databox documentation fields
      fields:rename                         Renames a documentation field from a Databox
    mail
      mail:test                             Sends an email to a given address to test mail-server configuration
    plugins
      plugins:add                           Installs a plugin to Phraseanet
      plugins:list                          Lists installed plugins
      plugins:remove                        Removes a plugin given its name
    records
      records:add                           Adds a record to Phraseanet
      records:build-missing-subdefs         Builds subviews that previously failed to be generated / did not exist when records were added
      records:rescan-technical-datas        Rescans records for technical datas
    sphinx
      sphinx:generate-suggestions           Generates suggestions for Sphinx Search Engine, useful for query auto-completion
    system
      system:backup-db                      Backups Phraseanet Databases
      system:clear-cache                    Empties cache directories and cache-server data
      system:export                         Exports all phraseanet records to a given directory
      system:mail-check                     Checks if email addresses are uniques (mandatory since 3.5)
      system:upgrade-datas                  Upgrades Phraseanet datas, useful after migrations
    task-manager
      task-manager:scheduler:pause-tasks    Pause scheduler started tasks jobs
      task-manager:scheduler:resume-tasks   Resume scheduler started tasks jobs
      task-manager:scheduler:run            Run the scheduler
      task-manager:scheduler:state          Returns scheduler state
      task-manager:task:list                Lists tasks
      task-manager:task:run                 Runs a task
      task-manager:task:start               Starts a task
      task-manager:task:state               Returns the state of a task
      task-manager:task:stop                Stops a task
    ws-server
      ws-server:run                         Runs the websocket server
    xsendfile
      xsendfile:dump-configuration          Dump the virtual host configuration depending on Phraseanet configuration
      xsendfile:generate-mapping            Generates Phraseanet xsendfile mapping configuration depending on databoxes configuration

Every command provides help with the *help* command:

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

Phraseanet provides a setup command line utility:

.. code-block:: bash

    php bin/setup

This command results in such screen output:

.. code-block:: bash

    Available commands:
      help                   Displays help for a command
      list                   Lists commands
    about
      about:authors          Lists authors and contributors
      about:license          Displays this program license
    check
      check:system           Performs a check against the environment
    plugins
      plugins:add            Installs a plugin to Phraseanet
      plugins:disable        Disables a plugin
      plugins:enable         Enables a plugin
      plugins:list           Lists installed plugins
      plugins:remove         Removes a plugin given its name
      plugins:reset          Reset plugins in case a failure occured
    system
      system:install         Installs Phraseanet
      system:upgrade         Upgrades Phraseanet to the latest version
      system:upgrade-datas   Upgrades Phraseanet datas, useful after migrations

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
