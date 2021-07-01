Gestionnaire de workers
=======================

*Pour éviter toute incompréhension, nous utiliserons ci-dessous l'anglicisme* "**worker**" *pour désigner le terme* "**travail**"

############
Introduction
############

Phraseanet intègre un gestionnaire de workers afin de réaliser des travaux asynchrones.
Ce gestionnaire remplacera à terme le :doc:`Gestionnaire de tâches <MoteurDeTaches>`.

Chaque worker permet de manière asynchrone d'être assigné pour les types de tâches suivantes :

* L'indexation de databox par ElasticSearch (populateIndex)
* La création de sous-définition (subdefCreation)
* L'écriture des méta-données (writeMetadatas)
* La notification via par mail de validations non terminées
* Edition des fiches d'indexation des records
* Injestion de document (relayé par un uploader phraseanet-service)
* Creation de records
* Suppression de records
* Export de medias
* Sous-titrage de vidéos
* Emission de webhooks
* Export de documents via protocole FTP
* Main Queue (pour certaines actions, un message principal est posté dans la "Main Queue" qui va produire des messages unitaires, exemple "recordEdit")

Ainsi chaque type de tâche à réaliser, on peut assigner un ou plusieurs worker selon le besoin.

Les workers utilisent `RabbitMQ`_, un agent de messages (message broker) pour fonctionner.

#######
Console
#######

Des commandes propres aux workers sont intégrées dans l'utilitaire en ligne de commande :doc:`Konsole Commander <Console>` :

.. code-block:: bash

 worker
  worker:execute                            Listen queues define on configuration, launch
                                            corresponding service for execution
  worker:run-service                        Execute a service
  worker:show-configuration                 Show queues configuration

Exemples de configuration
-------------------------

* Lancer 10 workers sans spécialités :

.. code-block:: bash

  bin/console worker:execute -m 10

* Lancer 10 workers sur la file **recordedit** :

.. code-block:: bash

  bin/console worker:execute --queue-name=recordedit -m 10

* Lancer 10 workers sur la queue **recordedit** et la queue **FTP**. Note : il y a pas de priorité entre les jobs.

.. code-block:: bash

  bin/console worker:execute --queue-name=recordedit --queue-name=ftp -m 10

* On attribue ici 3 workers pour un ensemble de queues :

.. code-block:: bash

  bin/console worker:execute --queue-name=assetsIngest --queue-name=createRecord
  --queue-name=deleteRecord --queue-name=exportMail --queue-name=exposeUpload
  --queue-name=ftp --queue-name=mainQueue --queue-name=populateIndex
  --queue-name=pullAssets --queue-name=subtitle --queue-name=validationReminder
  --queue-name=webhook -m 3


###############################
Accès via l'interface graphique
###############################
Pour accéder au panel "Worker manager" :

* Se connecter à l'application **avec un compte Administrateur Phraseanet**
* Lancer l'interface **Admin**
* Cliquer sur la rubrique *Worker Manager* dans le menu latéral

.. image:: ../images/Administration-workerManager.png
    :align: center

Réglages généraux
-----------------
Cette rubrique permet de définir pour chaque type de tâche le nombre maximum de tentative ainsi que le délai entre chaque tentative.

.. note::
    Pour certaines tâches (exemple: "Subdef creation"), un troisième paramètre permet de régler l'intervalle (en secondes) de tentative d'exécution pour les messages différés.

.. note::
    Pour tout changement de paramétrage sur une queue, il faudra la détruire via l'onglet **Files de Messages** pour que les modifications soient prisent en compte.

Journal
-------
Cette rubrique permet d'afficher sous forme de liste l'état des travaux. Chaque travail présentant quatre états possibles :

* En cours
* Terminé
* En erreur
* Interrompu

.. warning::

    Les travaux en erreurs publiés dans les queues **dead-letter** dédiées aux erreurs (nommées "xxx_failed") sont automatiquement effacées de la file RabbitMQ au bout de 96 heures.


    Exemples de queues **dead-letter** dédiées aux erreurs (encadrées en rouge) :

    .. image:: ../images/Administration-workerManager-queues.png
        :align: center

Indexation
----------
Cette rubrique permet de relancer manuellement l'indexation sur une ou plusieurs base.

FTP
---
Cette rubrique permet le paramétrage d'un serveur :term:`FTP` pour le dépôt des documents.



.. _RabbitMQ: https://www.rabbitmq.com/