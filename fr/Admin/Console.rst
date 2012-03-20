Konsole Kommander
=================

Konsole Kommander est une application en ligne de commande pour piloter
Phraseanet. Elle s'exécute simplement :

  .. code-block:: bash

    php bin/console

Vous aurez sur votre écran une liste de commande de la sorte :

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

Les commandes disponibles sont listées.

**Pour obtenir de l'aide sur une commande**

  .. code-block:: bash

    php bin/console help nomdecommande

  .. note:: Les commandes renvoient un code de retour qui peut être utilisé dans
    un script d'automatisation

  * **check:config** : Parse et vérifie la structure des
    `fichiers de configurations </Admin/Configuration>`_
  * **check:ensureDevSettings** : Valide la cohérence des valeurs de
    configuration pour un environnement de développmement.

    * option *--strict* : Echoue si il y a des alertes.

  * **check:ensureProdSettings** : Valide la cohérence des valeurs
    de configuration pour un environnement de production.

    * option *--strict* : Echoue si il y a des alertes.

  * **check:system** Valide la `configuration </Admin/Prerequisite>`_

    * Des binaires
    * Du système de fichiers
    * Du cache `opcode </Admin/Optimization>`_
    * Du `serveur de cache </Admin/Optimization>`_
    * PHP
    * Extensions PHP
    * Extensions Phrasea
    * Locales système

    nécessaire au bon fonctionnement de l'application phraseanet.
  * **scheduler:start** : Instruction permettant de démarrer le
    `gestionnaire de tâches </Admin/Admin/MoteurDeTaches>`_.
  * **scheduler:stop** : Instruction permettant l'arret du
    `gestionnaire de tâches </Admin/Admin/MoteurDeTaches>`_.
  * **scheduler:state** : Instruction permettant de voir l'état du
    `gestionnaire de tâches </Admin/Admin/MoteurDeTaches>`_.
  * **system:backupDB** : Sauvegarde l'état des base de données.

    * argument *directory* : Le répertoire ou stocker les backups.

  * **system:clearCache** : Vide les systèmes de cache utilisés par Phraseanet.
  * vsystem:mailCheck** : Vérifie l'unicité des adresses mails des utilisateurs.

    * option *--list* : Liste tous les doublons.

  * **system:templateGenerator** : Charge les fichiers de templates compilés.
  * **system:upgrade** : Met à jour Phraseanet avec la dernière version.

