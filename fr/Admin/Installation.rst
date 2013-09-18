Installation
============

Après téléchargement des sources , vérifier les :doc:`prérequis <Prerequis>`,
vous pouvez vérifier votre configuration à la racine de votre installation :

.. code-block:: bash

    php bin/setup check:system

.. seealso::

    Utilisation de l'application :doc:`Konsole Kommander <Console>`

Configuration du serveur web
----------------------------

.. toctree::
    :maxdepth: 1

    Configuration/Nginx
    Configuration/Apache

Setup
-----

Depuis la version 3.8, il est recommandé d'installer Phraseanet à l'aide de
l'utilitaire en ligne de commande :

.. code-block:: bash

    bin/setup system:install

Démarrage des tâches
--------------------

Dans le module admin, cliquer sur la rubrique :doc:`Gestionnaire de tâches <MoteurDeTaches>`
et lancer le planificateur de tâches.

L’installation est terminée et le système opérationnel.

La structure documentaire peut être paramétrée pour s’adapter à vos besoins et
des documents peuvent être importés via le module Phraseanet
:doc:`Upload <../User/Manuel/Importer>`.
