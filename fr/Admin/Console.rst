Console
=======

Phraseanet fournit deux utilitaires en ligne de commande ;
:ref:`bin/console<Konsole Kommander>` et :ref:`bin/setup<Setup>`.
:ref:`Console<Konsole Kommander>` ne peut être exécuté que si Phraseanet est
installé ou mis à jour tandis que :ref:`Setup` peut être utilisé en amont de
:doc:`l'installation <Installation>` ou pour la detection de pannes.

.. _Konsole Kommander:

Konsole Kommander
-----------------

Konsole Kommander est une application en ligne de commande pour piloter
Phraseanet. Elle n'est disponible que lorsque Phraseanet est installé.
Elle s'exécute simplement depuis le répertoire d'installation de l'application :

.. code-block:: bash

    php bin/console

L'exemple ci-dessus affiche les commandes disponibles :

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

Chaque commande fourni une aide via la commande *help*:

.. code-block:: bash

    php bin/console help nomdecommande

Se référer à ces aides pour l'utilisation des commandes disponibles.

.. note::

    Chaque commande retourne un code de retour (exitcode) qui peut-être
    utilisée pour exécuter des scripts automatisés.


Code de retour de la commande task-manager:scheduler:state
**********************************************************

Cette commande retourne une valeur différente pour chaque état du gestionnaire
de tache.

+------------------+------------------+
|  Etat            | Valeur de retour |
+==================+==================+
| erreur setup     | 1                |
+------------------+------------------+
| mauvais argument | 2                |
+------------------+------------------+
| erreur fatale    | 3                |
+------------------+------------------+
| démarré          | 10               |
+------------------+------------------+
| arrété           | 11               |
+------------------+------------------+
| à arréter        | 13               |
+------------------+------------------+
| à démarrer       | 14               |
+------------------+------------------+
| à redémarrer     | 15               |
+------------------+------------------+
| à supprimer      | 16               |
+------------------+------------------+
| tâche inconnue   | 20               |
+------------------+------------------+
| état inconnu     | 21               |
+------------------+------------------+

.. _Setup:

Setup
-----

Setup s'exécute simplement depuis le répertoire d'installation de
l'application :

.. code-block:: bash

    php bin/setup

Une liste de commandes disponibles s'affiche :

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

De la même manière que `console`, l'aide d'une commande est disponible via l'
argument *help*.

.. code-block:: bash

    php bin/setup help nomdecommande

Se référer à ces aides pour l'utilisation des commandes disponibles.

.. note::

    L'ensemble des commandes disponibles dans cet utilitaire sont executables
    que Phraseanet soit installé ou pas.

Code de retour de la commande check:system
******************************************

Cette commande retourne un code de retour parmi les suivants :

+----------------------------------------------+------------------+
|  Etat                                        | Valeur de retour |
+==============================================+==================+
| Le système est correctement configuré        | 0                |
+----------------------------------------------+------------------+
| Le système est correctement configuré,       | 1                |
| des ajustements peuvent être faits           |                  |
+----------------------------------------------+------------------+
| Le système n'est pas correctement configuré, | 2                |
| il faut corriger les erreurs                 |                  |
| avant de poursuivre,                         |                  |
+----------------------------------------------+------------------+
