Console
=======

Setup
-----

.. versionadded:: 3.8

   La commande setup a été ajoutée en version 3.8

Phraseanet fournit une application d'installation en ligne de commande :

.. code-block:: bash

    php bin/setup

Cette commande a pour résultat à l'écran :

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

L'ensemble des commandes disponibles dans cet utilitaire sont executables même
lorsque Phraseanet n'est pas installé, contrairement à Konsole Kommander qui
requiert une installation complète.

check:system
************

Cette commande retourne un code de retour parmi les suivants :

* 0 : Le système est correctement configuré.
* 1 : Le système est correctement configuré, des ajustements peuvent être faits.
* 2 : Le système n'est pas correctement configuré, il faut corriger les erreurs
  avant de poursuivre.

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

**Pour obtenir de l'aide sur une commande**

.. code-block:: bash

    php bin/console help nomdecommande

.. note::

    Chaque commande retourne une valeur qui peut-être utilisée pour
    exécuter des scripts automatisés.

check:ensure-dev-settings
*************************

Valide la cohérence des valeurs de configuration pour un environnement de
développement.

**option** :

* *--strict* : Echoue si il y a des alertes.

check:ensure-prod-settings
**************************

Valide la cohérence des valeurs de configuration pour un environnement de
production.

**option** :

* *--strict* : Echoue si il y a des alertes.

fields:delete
*************

Supprimer un champ documentaire de la databox.

**option** :

* *--sbas_id (-s)* : sbas_id de la databox
* *--meta_struct_id (-m)* : id de la metastructure

fields:list
***********

Lister tous les champs documentaires.

fields:merge
************

Fusionner plusieurs champs de la structure documentaire.

**option** :

* *--source (-f)* : ids de la metastructure source (plusieurs valeurs sont
  authorisées)
* *--destination (-d)* : id de la metastructure de destination
* *--sbas_id (-s)* : sbas_id de la databox
* *--separator* : Séparateur pour la concaténation (si la destination est
    monovaluée) (default: ;)

fields:rename
*************

Renommer un champs documentaire.

**option** :

* *--name (-n)* : Le nouveau nom
* *--meta_struct_id (-m)* : id de la metastructure
* *--sbas_id (-s)* : sbas_id de la databox

scheduler:start
***************

Instruction permettant de démarrer le
:doc:`gestionnaire de tâches </Admin/MoteurDeTaches>`.

scheduler:stop
**************

Instruction permettant l'arrêt du
:doc:`gestionnaire de tâches </Admin/MoteurDeTaches>`.

scheduler:state
***************

Instruction permettant de voir l'état du
:doc:`gestionnaire de tâches </Admin/MoteurDeTaches>`.

.. note::

    Cette commande retourne une valeur différente pour chaque état du gestionnaire de tache.

+------------------+-----------------+
|  Etat            | Valeur de retour|
+==================+=================+
| démarré          | 10              |
+------------------+-----------------+
| arrété           | 11              |
+------------------+-----------------+
| à arréter        | 13              |
+------------------+-----------------+
| à démarrer       | 14              |
+------------------+-----------------+
| à redémarrer     | 15              |
+------------------+-----------------+
| à supprimer      | 16              |
+------------------+-----------------+
| erreur setup     | 1               |
+------------------+-----------------+
| mauvais argument | 2               |
+------------------+-----------------+
| erreur fatale    | 3               |
+------------------+-----------------+
| tâche inconnue   | 20              |
+------------------+-----------------+
| état inconnu     | 21              |
+------------------+-----------------+

sphinx:generate-suggestions
***************************

Génère des suggestions pour le moteur de recherche
:doc:`Sphinx </Admin/Optimisation>`

system:backup-db
****************

Sauvegarde l'état des bases de données.

**argument** :

* *directory* : Le répertoire ou stocker la sauvegarde.

system:clear-cache
******************

Vide les systèmes de cache utilisés par Phraseanet.

system:mail-check
*****************

Vérifie l'unicité des adresses mails des utilisateurs.

**option** :

* *--list* : Liste tous les doublons.

system:template-generator
*************************

Charge les fichiers de templates compilés.

system:upgrade
**************

Met à jour Phraseanet avec la dernière version.
