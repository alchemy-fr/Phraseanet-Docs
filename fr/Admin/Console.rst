Console
=======

Phraseanet fourni deux utilitaires en ligne de commande ; bin/console` et
`bin/setup`.
`console` ne peut être executé que si Phraseanet est installé et à jour tandis
que `setup` est à utilisé en amont, pour l'installation et la detection des
pannes.

Konsole Kommander
-----------------

Konsole Kommander est une application en ligne de commande pour piloter
Phraseanet. Elle n'est disponible que lorsque Phraseanet est installé.
Elle s'exécute simplement :

.. code-block:: bash

    php bin/console

Vous aurez sur votre écran une liste de commande de la sorte :

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

Chaque commande fourni une aide via la commande help:

.. code-block:: bash

    php bin/console help nomdecommande

.. note::

    Chaque commande retourne un code de retour (exitcode) qui peut-être
    utilisée pour exécuter des scripts automatisés.


Code de retour de la commande scheduler:state
*********************************************

Cette commande retourne une valeur différente pour chaque état du gestionnaire de tache.

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

Setup
-----

.. versionadded:: 3.8

   La commande setup a été ajoutée en version 3.8

Setup s'exécute simplement :

.. code-block:: bash

    php bin/setup

Une liste de commandes disponible s'affiche.

.. code-block:: bash

    Available commands:
      help                      Displays help for a command
      list                      Lists commands
    about
      about:authors             List authors and contributors
      about:license             This program license
    assets
      assets:build-javascript   Compile less files
      assets:compile-less       Compile less files
    check
      check:system              Check environment
    system
      system:install            Install Phraseanet
      system:upgrade            Upgrade Phraseanet to the latest version
      system:upgrade-datas      Upgrade Phraseanet datas

De la même manière que `console`, l'aide d'une commande est disponible via la
commande help.

.. code-block:: bash

    php bin/setup help nomdecommande

..note ::

    L'ensemble des commandes disponibles dans cet utilitaire sont executables
    même lorsque Phraseanet n'est pas installé, contrairement à Konsole
    Kommander qui requiert une installation complète.

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
