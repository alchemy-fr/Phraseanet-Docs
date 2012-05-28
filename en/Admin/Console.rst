Konsole Kommander
=================

Konsole Kommander is a commandline tool to manage Phraseanet. It is simple
to use :

  .. code-block:: bash

    php bin/console

You will see something like :

  .. code-block:: bash

    Available commands:
      help                             Displays help for a command
      list                             Lists commands
    about
      about:authors                    List authors and contributors
      about:license                    This program license
    check
      check:config                     check configuration file
      check:ensure-dev-settings        Ensure development settings
      check:ensure-production-settings Ensure production settings
      check:extension                  Delete a documentation field from a Databox
      check:system                     Check the configuration
    fields
      fields:delete                    Delete a documentation field from a Databox
      fields:list                      List all databox fields
      fields:merge                     Merge databox structure fields
      fields:rename                    Rename a documentation field from a Databox
    scheduler
      scheduler:start                  Start the scheduler
      scheduler:state                  Get scheduler state
      scheduler:stop                   Stop the scheduler
    sphinx
      sphinx:generate-suggestions      Generate suggestions for Sphinx Search Engine
    system
      system:backup-db                 Backup Phraseanet Databases
      system:clear-cache               Empty cache directories, clear Memcached, Redis if avalaible
      system:mail-check                Check if email addresses are unique (mandatory since 3.5)
      system:template-generator        Generate template files
      system:upgrade                   Upgrade Phraseanet to the lastest version
    task
      task:list                        List tasks
      task:run                         Run task


**To get some help about a command** :

  .. code-block:: bash

    php bin/console help CommandName


.. note:: Each commands returns a value, which can be used for automated scripts


check:config
------------

Parse and check the structure of
:doc:`configuration files  </Admin/Configuration>`

check:ensure-dev-settings
-----------------------

Validate the consistency of configuration values ​​for a development environment.
 **option** :

    * *--strict* : Fails on alerts.

check:ensure-prod-settings
------------------------

Validate the consistency of configuration values ​​for a production environment.
 **option** :

    * *--strict* : Fails on alerts.

check:system
------------

Validate system :doc:`configuration </Admin/Prerequisite>` necessary for Phraseanet
to work properly.

    * Binaries
    * File system
    * :doc:`Opcode </Admin/Optimization>` cache
    * :doc:`Cache servers </Admin/Optimization>`
    * PHP
    * PHP extensions
    * Phrasea extensions
    * Locales system

fields:delete
-------------

Delete a documentation field from the databox.
 **option** :

    * *--sbas_id (-s)* : Databox sbas_id
    * *--meta_struct_id (-m)* : Meta structure id

fields:list
-----------

List all databox documentation fields

fields:merge
------------

Merge several databox structure fields.
 **option** :

    * *--source (-f)* : Metadata structure ids for source (multiple values allowed)
    * *--destination (-d)* : Metadata structure id destination
    * *--sbas_id (-s)* : Databox sbas_id
    * *--separator* : Separator for concatenation (if destination is monovalued)
      (default: ;)


fields:rename
-------------

Rename a databox documentation fields
 **option** :

    * *--name (-n)* : The new name
    * *--meta_struct_id (-m)* : Metadata structure id
    * *--sbas_id (-s)* : Databox sbas_id

scheduler:start
---------------

Start Phraseanet task scheduler.

scheduler:stop
--------------

Stop Phraseanet task scheduler

scheduler:state
---------------

Get the current state of the Phraseanet
:doc:`task scheduler </Admin/TaskManager>`.

.. note:: This command can return different value according to the scheduler state.

+---------------+-----------------+
|  State        | Return value    |
+===============+=================+
| started       | 10              |
+---------------+-----------------+
| to start      | 14              |
+---------------+-----------------+
| to restart    | 15              |
+---------------+-----------------+
| stopped       | 11              |
+---------------+-----------------+
| to delete     | 16              |
+---------------+-----------------+
| setup error   | 1               |
+---------------+-----------------+
| bad_argument  | 2               |
+---------------+-----------------+
| fata error    | 3               |
+---------------+-----------------+
| task unkonw   | 20              |
+---------------+-----------------+
| state unknown | 21              |
+---------------+-----------------+

system:backup-db
---------------

Save states of current databases state.
 **argument** :

    * *directory* : Directory where backups are stocked.

system:clear-cache
-----------------

Clear all cach sytems used by Phraseanet.

system:mail-check
----------------

Check user's mail unicity.
 **option** :

    * *--list* : List all duplicates.

system:template-generator
------------------------

Load compiled templates.

system:upgrade
--------------

Upgrade Phraseanet to the latest version.


