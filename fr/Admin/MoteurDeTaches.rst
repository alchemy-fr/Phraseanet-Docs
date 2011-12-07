Moteur de Tâches
================
(Gestionnaire de tâches)

L'application Phraseanet utilise un certain nombres de taches pour l'indexation,
la creation des sous definitions ou encore la lecture/ecriture des matedonnées
d'un document...
Ces differentes taches sont gérées par un scheduler, qui s'occupe de leur
demarrage, de leur arret mais aussi de les relancer.

Le Plannificateur de taches
---------------------------

Demarre, arrete et redemarre les differentes taches

  - demarrer les taches
  
      Menu contectuel > start

  - arreter les taches

      Menu contextuel > stop

  - voir les logs

      Menu contextuel > Show log

  - Les Preferences du gestionnare de taches
    
      Le Plannificateur de tache (Scheduler) peut etre demarré depuis
      un gestionnaire comme Cron.
      Dans le menu contextuel du plannificateur de tache, cliquer sur Preferences.
      L'url dans cette fenetre permet via un navigateur ou wget de demarrer
      le plannificateur de taches


La Tache d'indexation
---------------------

Permet de lancer l'excutable phraseanet_indexer.
Cet executable indexe les informations descriptives des
documents dans les bases de données.

L'indexeur doit etre parametré avec les informations ci-dessous :

    - chemin d'accès : Chemin vers l'executable phraseanet_indexer
    - Hote : Adresse du serveur MySQL
    - Port : Port du serveur MySQL
    - Database : Base de donnée MySQL (ApplicationBox)
    - Utilisateur : identiifiant de l'utilisateur MySQL
    - mot de passe : Mot de passe de l'utilisateur MySQL
    - Port de controle :  Port de controle de l'indexer (choix aleatoire, selon les ports disponibles)

.. code-block:: bash
    
    /usr/local/bin/phraseanet_indexer -h=host -P=port -b=database -u=user 
    -p=password --socket=PortControle --default-character-set=utf8 -o


La Tache de création des Sous Definitions
-----------------------------------------

S'occupent de créer les sous definitions (images de choix et vignettes) à partir
du document original.


La Tache de Lecture/Ecriture des Metadonnées
--------------------------------------------

Lit et et indexe les metadonnées incluses dans un document en fonction 
des pré-reglages de la structure de base. 


  .. warning:: Ces taches doivent etre demarrées pour le bon fontionnement de 
    l'application.

Autres Taches disponibles 
------------------------- 

Les taches ci-dessous sont optionnelles :

Archiver dans la collection
***************************

Cette tache permet de scrutter un repertoire d'inserer (archiver) son contenu
dans une collection pré-selectionnnée.

  Parametres de la tache :


        - Archive dans la base et la collection : Choix de la 
          colection de destination des fichiers

        - HotFolder : repertoire à scruter 

        - intervalle d'éxecution : intevalle entre deux execution de la tache 

        - délais avant traitement. : Temps d'attente avant action 

        - Déplacer les documents archivé dans "_archived" : garder 
          ou pas un exemplaire du fichier traité

        - Déplacer les documents non-archivé dans "_error" : garder 
          ou pas un exemplaire du fichier en erreur

   .. warning:: un fichier vide nommé ".phrasea.xml" doit etre
                deposé à la racine du HotFolder pour que la
                tache puisse fonctionner.

Déplacement des documents périmés
*********************************

Cette tache permet d'effectuer automatiquement une action ("changement 
de collection" ou "application d'un status")
sur des documents presents dans une base/collection, à la condition que
des criteres de type date ou status bits, soient validés par ces documents.
