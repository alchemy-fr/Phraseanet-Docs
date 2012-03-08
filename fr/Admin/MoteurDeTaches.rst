Gestionnaire de Tâches
======================

Phraseanet intègre un moteur de tâches afin de réaliser des opérations
asynchrones.

Les tâches disponibles

      * Création de sous-définitions
      * Déplacement de docs périmés
      * Indexation
      * API :term:`Bridge` Uploader
      * Archive dans la :term:`Collection`
      * Batch upload process (XML Service)
      * FTP Push
      * FTP Pull
      * Ecriture de méta-données
      * Workflow 01

Ces différentes taches sont gérées par un Planificateur (scheduler),
qui s'occupe de leur démarrage, de leur arrêt mais aussi de les relancer.

Comment créer une nouvelle tache
--------------------------------

  * Voir la Rubrique Nouvelle tâche du `manuel d'Administration
    </User/Manuel/Administration>`_

Le Planificateur de taches
---------------------------

Démarre, arrête et redémarre les différentes taches

  * démarrer les taches

      Menu contextuel > start

  * arrêter les taches

      Menu contextuel > stop

  * voir les logs

      Menu contextuel > Show log

  * Les Préférences du gestionnaire de tâches

      Le Planificateur de tache (Scheduler) peut être démarré depuis
      un gestionnaire comme Cron.
      Dans le menu contextuel du planificateur de tache,
      cliquer sur Préférences. L’URL dans cette fenêtre permet via
      un navigateur ou wget de démarrer le planificateur de tâches


La Tache d'indexation
---------------------

Permet de lancer l’exécutable phraseanet_indexer.
Cet exécutable indexe les informations descriptives des
documents dans les bases de données.

L’indexer doit être paramétré avec les informations ci-dessous :

    * chemin d'accès : Chemin vers l’exécutable phraseanet_indexer
    * Hôte : Adresse du serveur MySQL
    * Port : Port du serveur MySQL
    * Database :ApplicationBox
    * Utilisateur : identifiant de l'utilisateur MySQL
    * mot de passe : Mot de passe de l'utilisateur MySQL
    * Port de contrôle : Port de contrôle de l'indexer (ports disponibles)

.. code-block:: bash

    /usr/local/bin/phraseanet_indexer -h=host -P=port -b=database -u=user
    -p=password --socket=PortControle --default-character-set=utf8 -o


La Tache de création des Sous Définitions
-----------------------------------------

S'occupent de créer les sous définitions (images de choix et vignettes) à partir
du document original.


La Tache de Lecture/Ecriture des Métadonnées
--------------------------------------------

Lit et et indexe les métadonnées incluses dans un document en fonction
des pré-réglages de la structure de base.


  .. warning:: Ces taches doivent être démarrées pour le bon fonctionnement de
    l'application.

Autres Taches disponibles
-------------------------

Les taches ci-dessous sont optionnelles :

Archiver dans la collection
***************************

Cette tache permet de scruter un répertoire d’insérer (archiver) son contenu
dans une :term:`Collection` pré-sélectionnée.

Paramètres de la tache
^^^^^^^^^^^^^^^^^^^^^^

    * Archive dans la base et la :term:`Collection` : Choix de la
      collection de destination des fichiers
    * HotFolder : répertoire à scruter
    * intervalle d’exécution : intervalle entre deux exécution de la tache
    * délais avant traitement. : Temps d'attente avant action
    * Déplacer les documents archivés dans "_archived" : garder
      ou pas un exemplaire du fichier traité
    * Déplacer les documents non-archivés dans "_error" : garder
      ou pas un exemplaire du fichier en erreur

   .. warning:: un fichier vide nommé ".phrasea.xml" doit être
                déposé à la racine du HotFolder pour que la
                tache puisse fonctionner.

FTP Push
********

Permet de gérer une file d'attente de documents à envoyer par ftp.
Cette fonction nécessite l'activation de la fonction d'export ftp.

   Paramètres de la tache :

      * proxy : adresse du proxy (optionnelle)
      * proxy port: Port du proxy (optionnel)
      * périodicité de la tache : intervalle d’exécution de la tache

FTP Pull
********

Permet de récupérer en local des documents depuis un server FTP.

   Paramètres de la tache :

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


NB: cette tache peut être couplée avec la tache "Archiver dans la collection"
afin de rapatrier et archiver des documents.

Dans ce cas, la variable "Hotfolder" de la tache d'archivage devra correspondre
à la variable "localpath" décrite ci-dessus

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

   Paramètres de la tache :

    * Database : choix de la Base de données (databox)
    * intervalle d’exécution :  intervalle d’exécution de la tache
    * Collection : collection d'origine ====>	collection de destination
    * Status : status-bit à l'origine   ====> status-bit final

.. todo:: Batch upload process (XML Service)
