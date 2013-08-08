Plugins
=======

Phraseanet est doté depuis la version 3.8 d'un méchanisme de plugin permettant
de customiser aussi bien l'éxecution de services (log, authentification) de
Phraseanet que les vues (home page personalisées, etc ...).

Un plugin Phraseanet est un dossier dans lequel se trouve un fichier
**manifest.json** décrivant ce plugin, un fichier **composer.json** servant à
la résolution des dépendances du plugin et d'un dossier **public** contenant
une arborescence à exposer publiquement (icônes, css, js, etc...).

Ajout/Suppression de plugin
---------------------------

Deux commandes sont à disposition pour ajouter et enlever des plugins :

Ajouter un plugin :

 - bin/console plugin:add /chemin/vers/le/plugin

Enlever un plugin :

 - bin/console plugin:remove nom-du-plugin

Structure des plugin
--------------------

Il est très simple d'écrire un plugin ; voici l'arborescence minimale du plugin
qu'il doit avoir :

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
        "name": "null-plugin",
        "description" : "A plugin that does nothing."
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
        "minimum-phraseanet-version": "3.8",
        "maximum-phraseanet-version": "3.9",
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

- name (requis, string) : Le nom du plugin. Doit être unique, ne peut contenir ni espace
  ni caractère spécial.
- description (requis, string) : Une description texte du plugin.
- keywords (array) : Un tableau de mot-clés propres au plugin.
- authors (array) : Un tableau d'objets authors. L'objet authors accepte les propriétés "name", "email" et "homepage".
- homepage (string) : Un lien vers la home page du plugin.
- license (string) : Un identifiant de license tel que fourni par `SPDX`_.
- version (string) : Un numéro de version au format `semver`_.
- minimum-phraseanet-version (string) : le numéro de version minimum de Phraseanet compatible (inclu).
- maximum-phraseanet-version (string) : le numéro de version maximum de Phraseanet compatible (exclu).
- twig-paths (string) : Un tableau de chemin relatifs au plugin qui seront utilisés comme path de Twig (permet de customiser les templates Phraseanet par défaut).
- services : Un tableau d'objets de services de plugin à déclarer auprès de Phraseanet. Un service de plugin est configuré avec une propriété "class".
- commands : Un tableau d'objets de commandes à déclarer auprès de Phraseanet. Une commande est configurée avec une propriété "class".
- extra : Un object de propriétés personnalisable comme bon souhaite le developpeur.

.. note::

    Twig est automatiquement configuré pour les plugins : Si un dossiers "views"
    est présent à la racine, alors un namespace "plugins-%nom-du-plugin%" est
    créé dans Twig (Ajouter un lien vers plus bas).

composer.json
*************

Le fichier composer.json sert à gérer les dépendances PHP du plugin et créer un
autoloader dédié.

.. code-block:: json

    {
        "name": "vendor/phraseanet-plugin-name",
        "description": "A test plugin",
        "license" : "MIT",
        "autoload": {
            "psr-0": {
                "Vendor" : "src"
            }
        }
    }

Le fichier précédent déclare ainsi que les sources du plugin seront
automatiquement charger depuis le dossier **src** selon une structure `PSR-0`_.
Il est recommandé de consulter la documentation de `composer`_ pour davantage
d'informations.

Ecriture de plugin
------------------

Beaucoup de personnalisations sont possibles via les plugins, la plupart d'entre
elles requièrent une connaissance assez approfondi de `Silex`_, `Twig`_ et des
autres composants utilisés par Phraseanet.

La consultation de plugins existants comme `Mail log plugin`_ et
`Syslog plugin`_  donne des pistes sur le développement de ceux ci.

Il faut noter deux pistes pour l'écriture de plugins :

Personalisation de service
**************************

Les services ajoutés via la propriété "services" du fichier *manifest.json*
doivent implémenter l'interface
**Alchemy\Phrasea\Plugin\PluginProviderInterface**.

Ajout d'une commande de console
*******************************

Les commandes ajouteés via la propriété "commands" du fichier *manifest.json*
doivent implémenter l'interface
**Alchemy\Phrasea\Command\CommandInterface**. Une base simple est d'étendre la
classe abstraite **Alchemy\Phrasea\Command\Command**.

.. _Mail log plugin: https://github.com/Phraseanet/mail-log-plugin
.. _Syslog plugin: https://github.com/Phraseanet/syslog-plugin
.. _PSR-0: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md
.. _composer: http://getcomposer.org/doc/
.. _Silex: http://silex.sensiolabs.org/
.. _Twig: http://twig.sensiolabs.org/
.. _semver: http://semver.org/
.. _SPDX: https://spdx.org/licenses/
