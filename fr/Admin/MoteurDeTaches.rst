Gestionnaire de Tâches
======================

Phraseanet intègre un moteur de tâches afin de réaliser des opérations
asynchrones.

Ces différentes tâches sont gérées par un Planificateur (Scheduler),
qui s'occupe de leur démarrage, et de leur arrêt.

Pour la édition de tâches,
:ref:`se reporter au paragraphe consacré aux tâches<Edition-de-taches:>` dans
le manuel utilisateur.

Le Planificateur de taches
---------------------------

Le menu contextuel du Gestionnaire de tâches (et de chacune des tâches) propose
des rubriques pour démarrer, arrêter, ou consulter les logs des tâches.

.. _Arrets-et-Demarrages-Alternatifs:

Arrêts et démarrages alternatifs
********************************

Pour automatiser des arrêts et des démarrages du planificateur de tâches, utiliser l’utilitaire
`KonsoleKommander <Console>`_ et l'une des commandes suivantes dans une tâche Cron par exemple.

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

* Hôte : Adresse du serveur MySQL
* Port : Port du serveur MySQL
* Database : Nom de la base de données MySQL
* Utilisateur : identifiant de l'utilisateur MySQL
* Mot de passe : Mot de passe de l'utilisateur MySQL
* MySQL charset : encodage
* Port de contrôle : Port de contrôle de l'indexer

* Default language for thesaurus candidates : langue par défaut des nouveaux
  termes (placés en candidats), ex: "fr"

* Enable stemming languages : langues pour lesquelles indexer par "stemmes", ex:
  fr,en

  Le "stemming" (racinisation, voir http://fr.wikipedia.org/wiki/Racinisation)
  permet de rechercher en full-text différentes formes d'un mot comme le pluriel
  ou les conjugaisons.

  ex. : chercher "oiseau vole" trouvera les documents renseignés avec "oiseaux volants".

* Sort records with an empty fields : Comment trier les records dont le champ de
  tri n'est pas renseigné.

  Lors d'une recherche avec tri des résultats, les records dont le champ de tri
  n'est pas renseigné seront soit :

  absents des réponses ; en tête des réponses ; à la fin des réponses.


.. code-block:: bash

    /usr/local/bin/phraseanet_indexer -h=host \
                                      -P=port \
                                      -b=database \
                                      -u=user \
                                      -p=password \
                                      --socket=13800 \
                                      --clng=fr \
                                      --stem=fr,en \
                                      -o \
                                      --default-character-set=utf8 \

.. note::

    Cette tâche est nécessaire au bon fonctionnement de l'application

Création des Sous Définitions
*****************************

Cette tâche créé les sous définitions (images de choix et vignettes) à partir
du document original.

.. note::

    Cette tâche est nécessaire au bon fonctionnement de l'application

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

.. warning::

    Pour des raisons de sécurité, il faut créér un fichier .phrasea.xml à la
    racine du HotFolder.

Il est possible d'archiver des fichiers associés à une description xml. Pour
cela, il faut utiliser la vue XML.

Exemple de configuration XML pour l'archivage de fichier `.jpg` et `.tif`
associés à des fichiers de même nom `.xml` :

.. code-block:: xml

    <?xml version="1.0" encoding="UTF-8"?>
    <tasksettings>

      ...

      <files>
        <file mask="^(.*)\.jpg$" caption="$1.jpg.xml"/>
        <file mask="^(.*)\.JPG$" caption="$1.JPG.xml"/>
        <file mask="^(.*)\.tif$" caption="$1.tif.xml"/>
        <file mask="^(.*)\.TIF$" caption="$1.TIF.xml"/>
        <file mask="^(.*\.xml)$" caption="$1"/>
      </files>
    </tasksettings>

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
* Collection : collection d'origine ====> collection de destination
* Status : status-bit à l'origine   ====> status-bit final

RecordMover
***********

RecordMover execute successivement une liste de tâches.

Une tâche recherche les records correspondants à des critères (settings "from")
et applique des traitements sur ces records (settings "to").

Une tâche "RecordMover" peut remplacer un ensemble de tâches "Workflow01" et
autorise des critères plus nombreux.

Interface
^^^^^^^^^
Les settings sont editable en XML, l'interface affiche le SQL correspondant, le
nombre de records impactés par chaque tâche (si cette tâche était exécutée
maintenant), ainsi que les 10 premiers records-id's.

Une tâche peut être maintenue 'désactivée' durant sa mise au point
(une croix rouge est visible ).

Settings XML
^^^^^^^^^^^^

<tasks> énumère l'ensemble des <task>

Une <task> agit sur une base (attribut "sbas_id") et peut soit modifier des
records, soit les supprimer (attribut "action")

Une <task> peut être nommée (attribut "name"), le nom apparaît dans les logs.

Pour s'éxécuter, une <task> doit avoir l'attribut " active="1" "

Une <task> agit sur les records répondants à TOUS les critères énumérés dans la
partie <from>

Les critères possibles sont

- le type de record :

.. code-block:: xml

    <type type="RECORD" />
    seulement les documents

    <type type="STORY" />
    seulement les reportages

- les collections :

.. code-block:: xml

    <coll compare="=" id="3,5,7" />
    le record est dans une des collections 3, 5 ou 7

    <coll compare="!=" id="8,9" />
    le record est dans n'importe quelle collection, sauf la 8 ou la 9

- les status :

.. code-block:: xml

    <status mask="1x0xxxx" />
    le sb 4 = 0 ET le sb 6 = 1 (nb les sb 0-3 réservés, donc à xxxx)

- la valeur d'un champ texte :

.. code-block:: xml

    <text field="Ville" compare="=" value="Paris"/>
    la ville est Paris

    <text field="Auteur" compare="!=" value="Dupond"/>
    n'importe quel auteur sauf Dupond

- la valeur d'un champ date, comparé avec la date courante :

.. code-block:: xml

    <date direction="before" field="MISEENLIGNE"/>
    la date de mise en ligne n'est pas atteinte (= on est AVANT la date de mise en ligne)

    <date direction="after" field="MISEENLIGNE" delta="+30" />
    la date de mise en ligne est passée de 30 jours (= on est APRES la date+30j)

    <date direction="after" field="PURGE" delta="-2" />
    on est 2j avant la date de purge

Pour l'action "update", les opérations décrites dans <to> peuvent porter sur :

- la collection

.. code-block:: xml

    <coll id="2" />
    le record passe dans la collection 2

- les status

.. code-block:: xml

    <status mask="0x1xxxx" />
    baisser le sb 6, lever le sb 4

Pour l'action "delete", l'attribut *deletechildren="1"* demande la suppression
du contenu des regroupements supprimés.

Exemples
^^^^^^^^

.. code-block:: xml

    <?xml version="1.0" encoding="UTF-8"?>
    <tasksettings>
    <period>10</period>
    <logsql>0</logsql>
    <tasks>

        <!-- maintenir hors ligne (sb4=1) tous les docs sous copyright -->
        <task active="1" name="confidentiel" action="update" sbas_id="1">
        <from>
            <date direction="before" field="FIN_COPYRIGHT"/>
        </from>
        <to>
            <status mask="x1xxxx"/>
        </to>
        </task>

        <!-- mettre en ligne (sb4=0) les docs de la collection 'public' entre la date de copyright et la date d'archivage -->
        <task active="1" name="visible" action="update" sbas_id="1">
        <from>
            <coll compare="=" id="5"/>
            <date direction="after" field="FIN_COPYRIGHT"/>
            <date direction="before" field="ARCHIVAGE"/>
        </from>
        <to>
            <status mask="x0xxxx"/>
        </to>
        </task>

        <!-- avertir 10j avant l'archivage (lever sb5) -->
        <task active="1" name="bientôt la fin" action="update" sbas_id="1">
        <from>
            <coll compare="=" id="5"/>
            <date direction="after" field="ARCHIVAGE" delta="-10"/>
        </from>
        <to>
            <status mask="1xxxxx"/>
        </to>
        </task>

        <!-- déplacer dans la collection 'archive' -->
        <task active="1" name="archivage" action="update" sbas_id="1">
        <from>
            <coll compare="=" id="5"/>
            <date direction="after" field="ARCHIVAGE" />
        </from>
        <to>
            <status mask="00xxxx"/>  <!-- on nettoie les status pour la forme -->
            <coll id="666" />
        </to>
        </task>

        <!-- purger la collection 'archive' des docs archivés depuis 1 an -->
        <task active="1" name="archivage" action="delete" sbas_id="1">
        <from>
            <coll compare="=" id="666"/>
            <date direction="after" field="ARCHIVAGE" delta="+365" />
        </from>
        </task>

    </tasks>
    </tasksettings>

.. warning::

    Dans le cas de conflits ou de recouvrements entre les critères de
    <task> successives, des docs peuvent 'sauter' d'un état à l'autre à chaque
    éxécution de la tâche.

    ex :
    dans le cas précédent, si la date d'archivage d'un document est antérieure
    à sa date de fin de copyright (incohérent), le sb 4 va passer de 0 à 1 à
    chaque éxécution.

    Ce type de problème peut être évité en s'assurant qu'aucune des clauses
    'from' ne se recouvrent, par ex. en levant un sb spécifique à chaque <task>
