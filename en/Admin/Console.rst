Console
=======

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

The whole commands available through this utility are executables whenever
Phraseanet is not installed, whereas Konsole Kommander requires Phraseanet
installed and up-to-date.

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
      check:ensure-dev-settings          Ensure development settings
      check:ensure-production-settings   Ensure production settings
      check:extension                    Checks if the Phrasea PHP Extension is well installed & working properly.
    collection
      collection:create                  Create a collection in Phraseanet
    fields
      fields:delete                      Delete a documentation field from a Databox
      fields:list                        List all databox fields
      fields:merge                       Merge databox structure fields
      fields:rename                      Rename a documentation field from a Databox
    mail
      mail:test
    records
      records:add                        Add a record to Phraseanet
      records:build-missing-subdefs      Build missing subviews
      records:rescan-technical-datas     Rescan databases for technical datas
    scheduler
      scheduler:start                    Start the scheduler
      scheduler:state                    Get scheduler status
      scheduler:stop                     Stop the scheduler
    sphinx
      sphinx:generate-suggestions        Generate suggestions for Sphinx Search Engine
    system
      system:backup-db                   Backup Phraseanet Databases
      system:clear-cache                 Empty cache directories, clear Memcached, Redis if avalaible
      system:export                      Export all phraseanet records to a directory
      system:mail-check                  Check if email addresses are unique (mandatory since 3.5)
      system:template-generator          Generate template files
      system:upgrade-datas               Upgrade Phraseanet datas
    task
      task:list                          List tasks
      task:run                           Run task
      task:state                         Get task state

**To get some help about a command** :

.. code-block:: bash

    php bin/console help CommandName

.. note::

    Each commands returns an exit code, which can be used for automated scripts.

check:ensure-dev-settings
*************************

Validate the consistency of configuration values ​​for a development environment.

**option** :

* *--strict* : Fails on alerts.

check:ensure-prod-settings
**************************

Validate the consistency of configuration values ​​for a production environment.

**option** :

* *--strict* : Fails on alerts.

fields:delete
*************

Delete a documentation field from the databox.

**option** :

* *--sbas_id (-s)* : Databox sbas_id
* *--meta_struct_id (-m)* : Meta structure id

fields:list
***********

List all databox documentation fields

fields:merge
************

Merge several databox structure fields.

**option** :

* *--source (-f)* : Metadata structure ids for source (multiple values allowed)
* *--destination (-d)* : Metadata structure id destination
* *--sbas_id (-s)* : Databox sbas_id
* *--separator* : Separator for concatenation (if destination is monovalued)
  (default: ;)

fields:rename
*************

Rename a databox documentation fields

**option** :

* *--name (-n)* : The new name
* *--meta_struct_id (-m)* : Metadata structure id
* *--sbas_id (-s)* : Databox sbas_id

scheduler:start
***************

Start Phraseanet task scheduler.

scheduler:stop
**************

Stop Phraseanet task scheduler

scheduler:state
***************

Get the current state of the Phraseanet
:doc:`task scheduler </Admin/TaskManager>`.

.. note::

    This command can return different value according to the scheduler state.

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
****************

Save states of current databases state.

**argument** :

* *directory* : Directory where backups are stocked.

system:clear-cache
******************

Clear all cach sytems used by Phraseanet.

system:mail-check
*****************

Check user's mail unicity.

**option** :

* *--list* : List all duplicates.

system:template-generator
*************************

Load compiled templates.

system:upgrade
**************

Upgrade Phraseanet to the latest version.
