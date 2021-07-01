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


  _____  _    _ _____            _____ ______          _   _ ______ _______
 |  __ \| |  | |  __ \    /\    / ____|  ____|   /\   | \ | |  ____|__   __|
 | |__) | |__| | |__) |  /  \  | (___ | |__     /  \  |  \| | |__     | |
 |  ___/|  __  |  _  /  / /\ \  \___ \|  __|   / /\ \ | . ` |  __|    | |
 | |    | |  | | | \ \ / ____ \ ____) | |____ / ____ \| |\  | |____   | |
 |_|    |_|  |_|_|  \_|_/    \_\_____/|______/_/    \_\_| \_|______|  |_|
  _  __                 _       _  __                             _
 | |/ /___ _ _  ___ ___| |___  | |/ /___ _ __  _ __  __ _ _ _  __| |___ _ _
 | ' </ _ \ ' \(_-</ _ \ / -_) | ' </ _ \ '  \| '  \/ _` | ' \/ _` / -_) '_|
 |_|\_\___/_||_/__/\___/_\___| |_|\_\___/_|_|_|_|_|_\__,_|_||_\__,_\___|_|

 Phraseanet Copyright (C) 2004 Alchemy
 This program comes with ABSOLUTELY NO WARRANTY.
 This is free software, and you are welcome to redistribute it
 under certain conditions; type `about:license' for details.

 KONSOLE KOMMANDER version Buxus 4.1.3

 Usage:
   command [options] [arguments]

 Options:
   -h, --help            Display this help message
   -q, --quiet           Do not output any message
   -V, --version         Display this application version
       --ansi            Force ANSI output
       --no-ansi         Disable ANSI output
   -n, --no-interaction  Do not ask any interactive question
   -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for
                         more verbose output and 3 for debug

 Available commands:
   help                                      Displays help for a command
   list                                      Lists commands
  about
   about:authors                             Lists authors and contributors
   about:license                             Displays this program license
  check
   check:config                              Performs a check against the environment
                                             and configuration. Give some advices for
                                             production settings.
  collection
   collection:create                         Creates a collection in Phraseanet
   collection:list                           List all collection in Phraseanet
   collection:publish                        Publish collection in Phraseanet
   collection:unpublish                      Unpublish collection in Phraseanet
  compile
   compile:configuration                     Compiles YAML configuration to plain PHP
  databox
   databox:create
   databox:list                              List all databox in Phraseanet
   databox:mount                             Mount databox
   databox:unmount                           Unmount databox
  fields
   fields:delete                             Deletes a documentation field from a Databox
   fields:list                               Lists all databoxes documentation fields
   fields:merge                              Merges databox documentation fields
   fields:rename                             Renames a documentation field from a Databox
  h264-pseudo-streaming
   h264-pseudo-streaming:dump-configuration  Dump the virtual host configuration
                                             depending on Phraseanet configuration
   h264-pseudo-streaming:generate-mapping    Generates Phraseanet H264 pseudo streaming
                                             mapping configuration depending on databoxes
                                             configuration
  mail
   mail:test                                 Sends an email to a given address to test
                                             mail-server configuration
  plugins
   plugins:add                               Installs a plugin to Phraseanet
   plugins:list                              Lists installed plugins
   plugins:remove                            Removes a plugin given its name
  records
   records:add                               Adds a record to Phraseanet
   records:build-missing-subdefs             Builds subviews that previously failed to
                                             be generated / did not exist when records
                                             were added
   records:build-permalinks                  Build permalinks
   records:build-subdefs                     Build subviews
   records:rescan-technical-datas            Rescans records for technical datas
  searchengine
   searchengine:index                        Manipulates search index
   searchengine:index:create                 Creates search index (Deprecated use
                                             searchengine:index instead)
   searchengine:index:drop                   Deletes the search index (Deprecated
                                             use searchengine:index instead)
   searchengine:index:populate               Populate search index (Deprecated use
                                             searchengine:index instead)
   searchengine:mapping:update               Update index mapping
   searchengine:query:parse                  Debug a search query
   searchengine:query:sample                 Generate sample queries from grammar
  system
   system:apply-rights                       Apply right on databox, inject
                                             appbox:basusr to dboxes:collusr
   system:backup-db                          Backups Phraseanet Databases
   system:clear-cache                        Empties cache directories and
                                             cache-server data
   system:export                             Exports all phraseanet records to a
                                             given directory
   system:mail-check                         Checks if email addresses are uniques
                                             (mandatory since 3.5)
   system:upgrade-datas                      Upgrades Phraseanet datas, useful after
                                             migrations
  task-manager
   task-manager:scheduler:pause-tasks        Pause scheduler started tasks jobs
   task-manager:scheduler:resume-tasks       Resume scheduler started tasks jobs
   task-manager:scheduler:run                Run the scheduler
   task-manager:scheduler:state              Returns scheduler state
   task-manager:task:list                    Lists tasks
   task-manager:task:run                     Runs a task
   task-manager:task:start                   Starts a task
   task-manager:task:state                   Returns the state of a task
   task-manager:task:stop                    Stops a task
  thesaurus
   thesaurus:find:concepts                   Infer concepts using thesaurus
  user
   user:applications                         List, Create, Edit, Delete application
                                             in Phraseanet (experimental)
   user:create                               Create user in Phraseanet
   user:list                                 List of all user (experimental)
   user:password                             Set user password in Phraseanet
                                             (experimental)
  validation
   validation:remind                         Send validation reminders. (experimental)
  worker
   worker:execute                            Listen queues define on configuration,
                                             launch corresponding service for execution
   worker:run-service                        Execute a service
   worker:show-configuration                 Show queues configuration
  xsendfile
   xsendfile:dump-configuration              Dump the virtual host configuration
                                             depending on Phraseanet configuration
   xsendfile:generate-mapping                Generates Phraseanet xsendfile mapping
                                             configuration depending on databoxes configuration


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

Phraseanet provides a setup command line utility. From the Phraseanet install
directory type:

.. code-block:: bash

    php bin/setup

This command displays available commands in Setup:

.. code-block:: bash

  _____  _    _ _____            _____ ______          _   _ ______ _______
 |  __ \| |  | |  __ \    /\    / ____|  ____|   /\   | \ | |  ____|__   __|
 | |__) | |__| | |__) |  /  \  | (___ | |__     /  \  |  \| | |__     | |
 |  ___/|  __  |  _  /  / /\ \  \___ \|  __|   / /\ \ | . ` |  __|    | |
 | |    | |  | | | \ \ / ____ \ ____) | |____ / ____ \| |\  | |____   | |
 |_|    |_|  |_|_|  \_|_/    \_\_____/|______/_/    \_\_| \_|______|  |_|
                          __
               ________  / /___  ______
              / ___/ _ \/ __/ / / / __ \
             (__  )  __/ /_/ /_/ / /_/ /
            /____/\___/\__/\__,_/ .___/
                              /_/

 Phraseanet Copyright (C) 2004 Alchemy
 This program comes with ABSOLUTELY NO WARRANTY.
 This is free software, and you are welcome to redistribute it
 under certain conditions; type `about:license' for details.

 SETUP version Buxus 4.1.3

 Usage:
   command [options] [arguments]

 Options:
   -h, --help            Display this help message
   -q, --quiet           Do not output any message
   -V, --version         Display this application version
       --ansi            Force ANSI output
       --no-ansi         Disable ANSI output
   -n, --no-interaction  Do not ask any interactive question
   -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output,
                         2 for more verbose output and 3 for debug

 Available commands:
   help                       Displays help for a command
   list                       Lists commands
  about
   about:authors              Lists authors and contributors
   about:license              Displays this program license
  check
   check:system               Performs a check against the environment
  crossdomain
   crossdomain:generate       Generate crossdomain.xml file according to configuration
  patch
   patch:log_coll_id          Fix empty (null) coll_id in "log_docs"
                              and "log_view" tables.
  plugins
   plugins:add                Installs a plugin to Phraseanet
   plugins:disable            Disables a plugin
   plugins:download           Downloads a plugin to Phraseanet
   plugins:enable             Enables a plugin
   plugins:list               Lists installed plugins
   plugins:remove             Removes a plugin given its name
   plugins:reset              Reset plugins in case a failure occured
  system
   system:config
   system:fix-autoincrements  Fix autoincrements
   system:install             Installs Phraseanet
   system:upgrade             Upgrades Phraseanet to the latest version
   system:upgrade-datas       Upgrades Phraseanet datas, useful after migrations

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
