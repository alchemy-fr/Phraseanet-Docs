Moteur de recherche
===================

.. topic:: L'essentiel

    Phraseanet utilise le moteur de recherche Elasticsearch.
    Ses principaux avantages sont :

    * la rapidité
    * la scalabilité

    Basé sur Apache Lucene, il permet, entre autre, la mise en oeuvre des
    facettes Phraseanet.
    Il s'installe sur le serveur hote de l'application ou sur un serveur
    distant.

.. note::

    Le paramétrage du moteur de recherche se fait à l'installation de
    Phraseanet. Par la suite les paramètres ne devraient pas être réajustés.

.. _Elasticsearch:

Elasticsearch
-------------

Le moteur Elasticsearch permet l'indexation et la recherche des données.

Indexation
**********

L'indexation effectue la mise en index du contenu des bases publiées dans une
application Phraseanet et permet ainsi la recherche dans le contenu des fiches
descriptives des documents.

L'indexation fonctionne en arrière plan. Elle surveille les bases à indexer
(apparition, modification ou disparition de documents) et maintient
des index de recherche à jour.

Il est nécessaire de disposer d'une version d'Elasticsearch 0.90.7 ou supérieure
pour utiliser le moteur Elasticsearch dans Phraseanet.

Configuration dans Phraseanet
*****************************

Après avoir installé Elasticsearch, Phraseanet doit être configuré.

Il faudra renseigner l'adresse, le port et le nom d'index désiré de
Elasticsearch dans la configuration de Phraseanet pour cela :

.. code-block:: none

    search-engine:
        type: Alchemy\Phrasea\SearchEngine\Elastic\ElasticSearchEngine
        options:
            host: 127.0.0.1
            port: 9200
            index: phraseanet

Une fois cette configuration effectuée, executer dans la console la commande
suivante pour indexer Phraseanet.

.. code-block:: none

    bin/console searchengine:index


.. _Operations-sur-les-index:

Opérations sur les index
^^^^^^^^^^^^^^^^^^^^^^^^

**Pour supprimer les index** :

.. code-block:: none

    bin/console s:i:d


**Pour construire les index** :

.. code-block:: none

    bin/console s:i:d


**Pour alimenter, "peupler", les index** :

.. code-block:: none

    bin/console s:i:p


Arguments
^^^^^^^^^

* --host: adresse de la base
* --port: port (normalement 3306 pour MySQL)
* --base: nom de la base "application-box"
* --user: compte SQL pour la connexion
* --password: mot de passe du compte de connexion
* --default-character-set: jeu de caractères de la connexion
* --old: argument obligatoire !

Ces 7 précédentes options sélectionnent l'"application-box" (base SQL de
Phraseanet) où les bases ("data-boxes") à indexer sont publiées.

* --socket: port de contrôle via telnet
    En cours d'éxécution, l'indexeur peut être interrompu par Ctrl-C (ou sous
    linux et OSX par l'envoi du signal sigint).
    L'argument "socket" permet d'interrompre également l'indexeur via telnet.
* --flush: Ecrire les index tous les 'n' documents.
    Pour optimiser les performances, l'indexeur indexe les documents par lots
    (par défaut 50).
    Si la mémoire consommée est trop importante il est possible de diminuer ce
    nombre avec l'option "flush" (au détriment de la vitesse).
* --clng: Langue par défaut des termes candidats
    Lors de l'indexation de champs liés à un thésaurus, les nouveaux termes sont
    placés comme "termes candidats".
    L'option "clng" permet de spécifier la langue à attribuer par défaut aux termes
    candidats.
* --stem: indexe les racines (voir http://fr.wikipedia.org/wiki/Racinisation)
    des mots, permettant de rechercher en full-text différentes formes d'un mot
    comme le pluriel ou les conjugaisons.

La liste des langues disponibles est affichée avec l'option --help

La recherche par racine est disponible dans Phraseanet Production / recherche avancée..
ex. : chercher "oiseau vole" trouvera les documents renseignés avec "oiseaux volants".

* --optfile: lire les arguments dans un fichier
    Il peut être souhaitable de ne pas afficher certaines options de la ligne de
    commmande (notamment le mot de passe).
    L'indexeur peut lire des options dans un fichier, ce fichier devant être placé
    dans le même répertoire que l'éxécutable.
* --quit:
    L'indexeur est censé fonctionner en continu.
    Cette option permet d'indexer les documents concernés puis de quitter l'indexeur
    immédiatement.
* --version: Affiche la version
* --debug: A des fins de contrôle, l'indexeur peut écrire différents types d'opérations
    effectuées (traitement xml, opérations sql...).
    Ces 7 types de messages peuvent être filtrés par les 7 bits (masque) de la
    valeur de debug.

Un masque de log réglé à --debug=64 (flush ops.) permet de contrôler le
fonctionnement sans trop charger les logs.

* --nolog: Les "logs" sont normalement envoyés au système (syslog pour linux ou OSX,
    journal des événements pour Windows).
    L'option "nolog" permet d'envoyer les messages sur l'écran.

* --help: L'option "help" détaille les différentes options précédemment citées ainsi que
    leurs valeurs par défaut.


Exécution par le Task-Manager
*****************************

L'indexation peut être éxécutée par la tâche "Indexation", les réglages des
attributs sont alors disponibles via l'interface graphique de la tâche.


