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
      check:ensureDevSettings          Ensure development settings
      check:ensureProductionSettings   Ensure production settings
      check:system                     Check the configuration
    scheduler
      scheduler:start                  Start the scheduler
      scheduler:state                  Get scheduler state
      scheduler:stop                   Stop the scheduler
    system
      system:backupDB                  Backup Phraseanet Databases
      system:clearCache                Empty cache directories, clear Memcached, Redis if avalaible
      system:mailCheck                 Check if email addresses are unique (mandatory since 3.5)
      system:templateGenerator         Generate template files
      system:upgrade                   Upgrade Phraseanet to the lastest version
    task
      task:list                        List tasks
      task:run                         Run task

Commands are listed

**To get some halp about a command** :

  .. code-block:: bash

    php bin/console help CommandName


Détails.

  * **check:config** : Parse and check the structure of 
    `configuration files  </Admin/Configuration>`_
  * **check:ensureDevSettings** : Validate the consistency of configuration values ​​
    for a development environment.
    
    * option *--strict* : Fails on alerts.

  * **check:ensureProdSettings** : Validate the consistency of configuration values ​​
    for a production environment.
    
    * option *--strict* : Fails on alerts.

  * **check:system** : Validate system `configuration </Admin/Prerequisite>`_
    
    * Binaries
    * File system
    * `Opcode </Admin/Optimization>`_ cache
    * `Cache servers </Admin/Optimization>`_
    * PHP
    * PHP extensions
    * Phrasea extensions
    * Locales system

    necessary for Pheaseanet to work properly.
  * **scheduler:start** : Start Phraseanet task scheduler.
  * **scheduler:stop** : Stop Phraseanet task scheduler
  * **scheduler:state** : Get the current state of the Phraseanet task scheduler.
  * **system:backupDB** : Save states of current databases state.
      
    * option *directory* : Directory where backups are stocked.

  * **ystem:clearCache** : Clear all cach sytems used by Phraseanet.
  * **system:mailCheck** : Check user's mail unicity.
    
    * option *--list* : List all duplicates.

  * **system:templateGenerator** : Load compiled templates.
  * **system:upgrade** : Upgrade Phraseanet to the latest version.


