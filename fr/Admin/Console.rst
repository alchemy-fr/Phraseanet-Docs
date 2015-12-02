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

Chaque commande fourni une aide via la commande *help*:

.. code-block:: bash

    php bin/console help nomdecommande

Se référer à ces aides pour l'utilisation des commandes disponibles.

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

.. _Setup:

Setup
-----

.. versionadded:: 3.8

Setup s'exécute simplement depuis le répertoire d'installation de
l'application :

.. code-block:: bash

    php bin/setup

Une liste de commandes disponibles s'affiche.

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
