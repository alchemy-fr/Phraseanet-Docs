Konsole Kommander
=================

Konsole Kommander is a commandline tool to manage Phraseanet. It is simple
to use :

  .. code-block:: bash

    php bin/console

You will see something like :

  .. code-block:: bash

    Available commands:
      help                       		Displays help for a command
      list                       		Lists commands
    about
      about:authors              		List authors and contributors
      about:license              		This program license
	check
	  check:config           		    check configuration file
	  check:ensureProductionSettings 	Ensure production settings
	  check:system       		        Check the configuration
    scheduler
      scheduler:start       		    Start the scheduler
      scheduler:state        		    Get scheduler state
      scheduler:stop         		    Stop the scheduler
    system
      system:backupDB          		  	Backup Phraseanet Databases
      system:clearCache        		  	Empty cache directories, clear Memcached, Redis if avalaible
      system:templateGenerator  		Generate template files
      system:upgrade            		Upgrade Phraseanet to the lastest version
    task
      task:list                		 	List tasks
      task:run                 			Run task

Commands are listed

To get some halp about a command :

  .. code-block:: bash

    php bin/console help CommandName

