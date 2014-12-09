Installation
============

Après téléchargement , décompacter les sources vers le répertoire
d’installation.

Vérifier :doc:`les prérequis <Prerequis>` au moyen de la commande suivante,
exécutée à la racine de l’installation :

.. code-block:: bash

    php bin/setup check:system

.. seealso::

    Voir la page consacrée à l'utilisation des applications en ligne de
    commande :doc:`Setup et Console <Console>`.

Configuration du serveur web
----------------------------

Selon le serveur web utilisé, voir les notes de configuration suivantes :

.. toctree::
    :maxdepth: 1

    Configuration/Nginx
    Configuration/Apache

Création des bases de données
-----------------------------

Il est nécessaire de créer deux bases de données pour pouvoir initialiser
l’application. Ces bases sont utilisées pour :

* L’*Application box*
* La *Databox*

Le serveur de base de données mis en oeuvre peut être un serveur local ou
distant.

.. note::

    Selon le contexte de déploiement, il est peut-être nécessaire de créer un
    utilisateur MySQL spécifique pour exploiter les bases créées pour
    Phraseanet.

Setup
-----

Phraseanet s’installe en deux étapes. La première étape consiste à lancer une
commande dans un terminal, la seconde à renseigner une série de formulaires
dans une interface web.

Initialiser l’installation
**************************

Depuis la version 3.8, l’utilitaire en ligne de commande setup system permet
d’initialiser l’installation.

Dans le répertoire d’installation de Phraseanet, lancer la commande suivante :

.. code-block:: bash

    bin/setup system:install

Paramétrage de l’installation
*****************************

Pour poursuivre l’installation, lancer un navigateur puis se rendre à l’url
de l’application.

L’installation se poursuit par un jeu de formulaires affichés à la suite
d’un écran d’accueil :

* Cliquer sur le bouton **Suivant** / **Next** pour démarrer le paramétrage
* Contrôler et modifier si besoin le chemin d’accès aux exécutables listés puis
  poursuivre

  .. image:: ../images/Admin_Install_screen-01.jpg
    :align: center

* Créer un compte Administrateur puis poursuivre

  .. image:: ../images/Admin_Install_screen-02.jpg
    :align: center

* Renseigner les paramètres de connexion à la base de données destinée à
  l’*Application box* puis poursuivre

  .. image:: ../images/Admin_Install_screen-03.jpg
    :align: center

* Contrôler et modifier si besoin le chemin d’accès au répertoire de stockage
  des documents puis poursuivre

  .. image:: ../images/Admin_Install_screen-04.jpg
    :align: center

* Renseigner les paramètres de connexion à la base de données destinée à la
  *Databox* Phraseanet puis cliquer sur le bouton **Installer** / **Install**

  .. image:: ../images/Admin_Install_screen-05.jpg
    :align: center

Démarrage des tâches
--------------------

La procédure d’installation s’occupe de lancer des tâches nécessaires à
l’exécution de Phraseanet.

Pour un lancement manuel ou une simple vérification par l’interface :

* S’authentifier avec le compte administrateur
* Se rendre dans le module Admin
* Cliquer sur la rubrique Gestionnaire de tâches et
* Vérifier l’état du planificateur de tâches

Une méthode alternative consiste à utiliser la Console Phraseanet en ligne de
commande.

L’installation est terminée et le système opérationnel.

Pour utiliser Phraseanet il est nécessaire de créer au moins une collection.

La structure documentaire peut être paramétrée pour s’adapter aux besoins du
projet et des documents peuvent être importés via le module
:doc:`Upload <../User/Manuel/Importer>`.

.. seealso::

    Se reporter à
    :doc:`la page consacrée à l’Administration des bases et des collections<../User/Manuel/Importer>`
    et à :doc:`l’Upload<../User/Manuel/Importer>` dans le manuel utilisateur.
