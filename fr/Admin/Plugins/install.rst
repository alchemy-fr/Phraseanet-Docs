Installation de plugins
=======================

Ajout/Suppression de plugins
----------------------------

Deux commandes permettent d'ajouter et enlever des plugins :

Ajouter un plugin :

.. code-block:: none

    bin/setup plugin:add /chemin/vers/le/plugin

Enlever un plugin :

.. code-block:: none

    bin/setup plugin:remove nom-du-plugin

Structure des plugins
---------------------

Un plugin comporte une arborescence minimale :

.. code-block:: none

    ├── composer.json
    ├── manifest.json
    └── public

manifest.json
*************

Le fichier **manifest.json** est une déclaration du plugin à Phraseanet dans un
format json.
Voici le fichier manifest.json le plus minimal qui soit :

.. code-block:: json

    {
        "name": "mon-plugin",
        "description" : "Hello World plugin!"
    }

De nombreuses propriétés peuvent être ajoutées à ce fichier, comme dans
l'exemple ci-dessous :

.. code-block:: json

    {
        "name": "custom-connector",
        "description" : "A custom class connector",
        "keywords"    : ["connector"],
        "authors" : [
            {
                "name"     : "Author name",
                "homepage" : "http://example.com",
                "email"    : "email@example.com"
            }
        ],
        "homepage" : "http://example.com/project/example",
        "license"     : "MIT",
        "version"     : "0.1",
        "minimum-phraseanet-version": "4.0",
        "maximum-phraseanet-version": "4.1",
        "twig-paths": ["custom-twig-views"],
        "services" : [
            {
                "class": "Vendor\\PluginService"
            }
        ],
        "commands" : [
            {
                "class": "Vendor\\CustomCommand"
            }
        ],
        "extra" : {
            "custom-property" : "value"
        }
    }

Détails des propriétés possibles pour le fichier manifest.json :

- name (requis, string) : Le nom du plugin. Doit être unique, en casse basse,
  ne peut contenir ni espace ni caractère spécial.
- description (requis, string) : Une description texte du plugin.
- keywords (array) : Un tableau de mot clés propres au plugin.
- authors (array) : Un tableau d'objets authors. L'objet authors accepte les
  propriétés "name", "email" et "homepage".
- homepage (string) : Un lien vers la page d'accueil du plugin.
- license (string) : Un identifiant de license tel que fourni par `SPDX`_.
- version (string) : Un numéro de version au format `semver`_.
- minimum-phraseanet-version (string) : Le numéro de version minimum de
  Phraseanet compatible (inclue).
- maximum-phraseanet-version (string) : Le numéro de version maximum de
  Phraseanet compatible (exclue).
- twig-paths (string) : Un tableau de chemin relatifs au plugin qui seront
  utilisés comme chemin pour charger les templates Twig (permet de personnaliser
  les templates Phraseanet par défaut).
- services : Un tableau d'objets de services de plugin à déclarer auprès de
  Phraseanet. Un service de plugin est configuré avec une propriété "class".
- commands : Un tableau d'objets de commandes à déclarer auprès de Phraseanet
  Konsole. Une commande est configurée avec une propriété "class".
- extra : Un objet de propriétés personnalisables par le développeur.

.. note::

    Twig est automatiquement configuré pour les plugins : Si un dossiers "views"
    est présent à la racine, alors un namespace "plugins-%nom-du-plugin%" est
    créé dans Twig.

composer.json
*************

Le fichier composer.json sert à gérer les dépendances PHP du plugin et créer un
autoloader dédié.

.. code-block:: json

    {
        "name": "vendor/phraseanet-plugin-name",
        "description": "A Hello world plugin",
        "license" : "MIT",
        "autoload": {
            "psr-0": {
                "Vendor" : "src"
            }
        }
    }

Le fichier précédent déclare que les sources du plugin sont chargées depuis le
dossier src selon une structure `PSR-0`_. Il est recommandé de consulter la
documentation de `composer`_ pour plus d'informations.

Ecriture de plugins
-------------------

Beaucoup de personnalisations sont possibles via les plugins. La plupart d'entre
elles requièrent de bonnes connaissances de `Silex`_, `Twig`_ et d'autres
composants utilisés par Phraseanet.

La consultation de plugins existants comme `Mail log plugin`_ et
`Syslog plugin`_  donne des pistes sur le développement de ceux ci.

Il faut noter deux pistes pour l'écriture de plugins :

Personalisation de service
**************************

Les services ajoutés via la propriété "services" du fichier *manifest.json*
doivent implémenter l'interface
**Alchemy\\Phrasea\\Plugin\\PluginProviderInterface**.

Ajout d'une commande de console
*******************************

Les commandes ajoutées via la propriété "commands" du fichier *manifest.json*
doivent implémenter l'interface
**Alchemy\\Phrasea\\Command\\CommandInterface**. Une base simple est d'étendre
la classe abstraite **Alchemy\\Phrasea\\Command\\Command**.

.. _Mail log plugin: https://github.com/Phraseanet/mail-log-plugin
.. _Syslog plugin: https://github.com/Phraseanet/syslog-plugin
.. _PSR-0: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md
.. _composer: https://getcomposer.org/doc/
.. _Silex: https://silex.symfony.com/
.. _Twig: https://twig.symfony.com/
.. _semver: https://semver.org/
.. _SPDX: https://spdx.org/licenses/
