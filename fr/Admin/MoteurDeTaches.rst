Gestionnaire de Tâches
======================

Phraseanet intègre un moteur de tâches afin de réaliser des opérations
asynchrones.

Ces différentes tâches sont gérées par un Planificateur (Scheduler),
qui s'occupe de leur démarrage, et de leur arrêt.

Pour la création des tâches, rendez vous dans `manuel d'Administration
</User/Manuel/Administration>`_

Le Planificateur de taches
---------------------------

Vous trouverez dans le menu contextuel du planificateur de tâches des menus pour
démarrer, arreter, consulter les logs des tâches;

Arrêts et démarrages alternatifs
********************************

Si vous souhaitez automatiser des arrêts et des démarrages du planificateur de
tâches, vous pouvez utiliser l'utilitaire `KonsoleKommander <Console>`_ et l'une
des commandes suivantes via Cron par exemple.


  .. code-block:: bash

    bin/console scheduler:start
    bin/console scheduler:stop
    bin/console scheduler:state
    bin/console task:run

Les tâches
----------

Indexation
**********

Permet de lancer l’exécutable phraseanet_indexer.
Cet exécutable indexe les informations descriptives des
documents dans les bases de données.

L’indexer doit être paramétré avec les informations ci-dessous :

  * chemin d'accès : Chemin vers l’exécutable phraseanet_indexer
  * Hôte : Adresse du serveur MySQL
  * Port : Port du serveur MySQL
  * Database : Nom de la base de donnée MySQL
  * Utilisateur : identifiant de l'utilisateur MySQL
  * Mot de passe : Mot de passe de l'utilisateur MySQL
  * Port de contrôle : Port de contrôle de l'indexer

.. code-block:: bash

    /usr/local/bin/phraseanet_indexer -h=host \
                                      -P=port \
                                      -b=database \
                                      -u=user \
                                      -p=password \
                                      --socket=13800 \
                                      --default-character-set=utf8 \
                                      -o

  .. note:: Cette tâche est nécessaire au bon fonctionnement de l'application

Création des Sous Définitions
*****************************

Cette tâche créé les sous définitions (images de choix et vignettes) à partir
du document original.

  .. note:: Cette tâche est nécessaire au bon fonctionnement de l'application

Ecriture des Métadonnées
************************

Cette tâche écrit les métadonnées dans un document en fonction des réglages de
la structure documentaire.

Archiver dans la collection
***************************

Cette tache permet de scruter un répertoire (Hot Folder) et d'archiver son
contenu dans une :term:`Collection`.

Paramètrage
^^^^^^^^^^^

  * Archive dans la base et la :term:`Collection` : Choix de la
    collection de destination des fichiers
  * HotFolder : répertoire à scruter
  * intervalle d’exécution : intervalle entre deux exécution de la tâche
  * délais avant traitement. : Temps d'attente avant action
  * Déplacer les documents archivés dans "_archived" : garder
    ou pas un exemplaire du fichier traité
  * Déplacer les documents non-archivés dans "_error" : garder
    ou pas un exemplaire du fichier en erreur

   .. warning:: Pour des raisons de sécurité, il faut créér un fichier
      .phrasea.xml à la racine du HotFolder.


FTP Push
********

Permet de gérer une file d'attente de documents à envoyer par ftp.
Cette fonction nécessite l'activation de la fonction d'export ftp.

Paramètrage
^^^^^^^^^^^

  * proxy : adresse du proxy (optionnelle)
  * proxy port: Port du proxy (optionnel)
  * périodicité de la tache : intervalle d’exécution de la tache

FTP Pull
********

Permet de récupérer en local des documents depuis un server FTP. Peut être
combinées avec la tache d'archivage afin de rapatrier et archiver des documents.

Paramètrage
^^^^^^^^^^^

  * proxy : adresse du proxy (optionnelle)
  * proxy port: port du proxy (optionnel)
  * host : adresse du serveur ftp
  * port : port du serveur ftp
  * user : identifiant sur le serveur ftp
  * password : mot de passe sur le serveur ftp
  * chemin distant : répertoire d’accès distant
  * localpath : chemin de stockage local des fichiers récupérés
  * mode passif : utiliser le mode passif
  * SSL: connexion en ssl (sécurisée)
  * périodicité de la tache : intervalle d’exécution de la tache


Déplacement des documents périmés
*********************************

Cette tache permet d'effectuer automatiquement une action ("changement de
collection " ou "application d'un status") sur des documents
présents dans une base/collection, à la condition que des critères
de type date ou status bits, soient validés par ces documents.

API Bridge Uploader
*******************
Cette tache s'occupe de traiter la liste des documents à uploader via
le module :term:`Bridge`, vers Youtube, DailyMotion ou Flickr.

Workflow 01
***********

Cette tache permet de déplacer un document d'une collection
vers une autre. On peut aussi ajouter comme critère pour déplacer
un document, un status-bit.

Paramètrage
^^^^^^^^^^^

  * Database : choix de la Base de données (databox)
  * intervalle d’exécution :  intervalle d’exécution de la tache
  * Collection : collection d'origine ====>	collection de destination
  * Status : status-bit à l'origine   ====> status-bit final

.. todo:: Batch upload process (XML Service)
