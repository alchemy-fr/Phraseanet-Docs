Moteur de recherche
===================

.. topic:: L'essentiel

    Phraseanet utilise le moteur de recherche Elasticsearch.
    Ses principaux avantages sont :

    * la rapidité
    * la scalabilité

    Basé sur Apache Lucene, il permet, entre autre, la mise en oeuvre de
    recherches à :term:`facettes <Facette>` dans Phraseanet.
    Il s'installe sur le serveur hôte de l'application ou sur un serveur
    distant.

.. note::

    Le paramétrage du moteur de recherche se fait à l'installation de
    Phraseanet. Par la suite les paramètres ne devraient pas nécessiter de
    réajustements.

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

Configuration dans Phraseanet
*****************************

Elasticsearch est un prérequis et les installeurs Phraseanet proposent de
renseigner le nom d'hôte (Host) ainsi que le port pour établir la
communication.

Ces paramètres peuvent être édités après installation par l'interface graphique
ou l'édition du fichier de configuration.

Configuration avec l'interface graphique
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Comme administrateur Phraseanet, Aller à Admin / Paramètres du moteur de
recherche.

Dans l'onglet **Configuration Elasticsearch**, renseigner l'adresse, le port et
le nom d'index désiré dans le formulaire de paramétrage.

Configurer en éditant le fichier de configuration
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

[Source]/config/confuguration.yml

.. code-block:: none

    search-engine:
        type: Alchemy\Phrasea\SearchEngine\Elastic\ElasticSearchEngine
        options:
            host: 127.0.0.1
            port: 9200
            index: phraseanet

Une fois cette configuration effectuée, executer dans la console les commandes
suivantes pour valider la configuration et créer l'index de recherche.

.. code-block:: none

    bin/console compile:configuration
    bin/console searchengine:index:create


.. _Operations-sur-les-index:

Opérations sur les index
^^^^^^^^^^^^^^^^^^^^^^^^

**Pour supprimer les index** :

.. code-block:: none

    bin/console s:i:d


**Pour construire les index** :

.. code-block:: none

    bin/console s:i:c


**Pour alimenter, "peupler/populate", les index** :

.. code-block:: none

    bin/console s:i:p

Options pour "populate"

.. code-block:: none

    Usage:
      searchengine:index:populate [options]

    Options:
          --thesaurus                Only populate thesaurus data
          --records                  Only populate record data
          --databox_id[=DATABOX_ID]  Only populate chosen databox (multiple values allowed)
      -h, --help                     Display this help message
      -q, --quiet                    Do not output any message
      -V, --version                  Display this application version
          --ansi                     Force ANSI output
          --no-ansi                  Disable ANSI output
      -n, --no-interaction           Do not ask any interactive question
      -v|vv|vvv, --verbose           Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug


