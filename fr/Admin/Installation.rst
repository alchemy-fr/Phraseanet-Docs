Installation
============

Récupérer les sources
---------------------

Depuis le serveur, télécharger *Phraseanet* depuis la page Téléchargement du
site `Phraseanet.com`_ puis décompacter les sources vers le répertoire
d'installation.

**A titre d'exemple**, utiliser les commandes :

.. code-block:: bash

    wget --no-check-certificate https://www.phraseanet.com/builds/alchemy-fr-Phraseanet-v3.8.x.zip

et

.. code-block:: bash

    unzip alchemy-fr-Phraseanet-v3.8.x.zip

**Bien que cela ne soit pas obligatoire** (mais plutôt conseillé), vérifier
:doc:`les prérequis <Prerequis>` au moyen de la commande suivante, à exécuter à
la racine du répertoire d’installation :

.. code-block:: bash

    php bin/setup check:system

Cette commande effectue une vérification de l'environnement. Il liste les points
qui nécessitent d'être corrigés pour installer l'application avec succès.

.. seealso::

    Voir la page consacrée à l'utilisation des applications en ligne de
    commande :doc:`Setup et Console <Console>`.

Configuration du serveur web
----------------------------

Selon le serveur web utilisé, consulter les notes de configuration suivantes :

.. toctree::
    :maxdepth: 1

    Configuration/Nginx
    Configuration/Apache

.. _install-create-database:

Création des bases de données
-----------------------------

Il est nécessaire de créer préalablement à l'installation deux bases de données
pour pouvoir initialiser l’application. Ces bases sont utilisées pour :

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

*Phraseanet* s’installe de deux façons :

* :ref:`En ligne de commande <install-cli>` depuis la version 3.8

**Ou bien**

* :ref:`En mode graphique <install-graphique>`

.. _install-cli:

Installation en ligne de commande
*********************************

Dans le répertoire d’installation *Phraseanet*, lancer la commande suivante :

.. code-block:: bash

    bin/setup system:install

La procédure d'installation s'initialise.

  .. image:: ../images/Admin_Install_cli-01.jpg
    :align: center


* Si les deux bases créées sont disponibles, **poursuivre**, sinon,
  :ref:`les créer <install-create-database>`

* **Renseigner les informations de connexion au serveur de base de données**
  puis indiquer le nom de la base exploitée par l'*Application box*

* **Indiquer le nom de la base exploitée par la** *Data Box*

* **Indiquer la langue à utiliser** (**fr** ou **en**) pour la structure
  documentaire initiale

* **Créer un compte administrateur** : indiquer une adresse e-mail valide ainsi
  qu'un mot de passe de connexion.

.. note::

    L'adresse e-mail est utilisée comme identifiant de compte.

* **Paramétrer le chemin de stockage des médias**

.. note::

    **Pour utiliser le chemin de stockage par défaut**, répondre **N**.

    **Pour utiliser un autre répertoire**, répondre **y**. Le répertoire doit
    exister et l'application *Phraseanet* doit pouvoir y acceder en lecture et
    écriture.

* **Indiquer un nom** pour l'instance *Phraseanet*

* **Lancer la procédure d'installation** et patienter jusqu'au message
  *Install successful*

  .. image:: ../images/Admin_Install_cli-02.jpg
    :align: center

Pour rendre le système opérationnel, il est nécessaire de
:ref:`démarrer le planificateur de tâches <demarrage-scheduler>`.

.. _install-graphique:

Installation en mode graphique
******************************

Pour installer l'application en mode graphique, lancer un navigateur et se
rendre à l’url de l’application. Un redirection conduit à la page
*/setup/installer/*.

L’installation nécessite de remplir un jeu de formulaires affichés à la suite
de l'écran d’accueil :

* Cliquer sur le bouton **Suivant** / **Next** pour démarrer le paramétrage

* Contrôler et modifier si besoin le chemin d’accès aux exécutables listés puis
  poursuivre

  .. image:: ../images/Admin_Install_screen-01.jpg
    :align: center

* Créer un compte Administrateur puis poursuivre

  .. image:: ../images/Admin_Install_screen-02.jpg
    :align: center

.. note::

    L'adresse e-mail renseignée est utilisée comme identifiant de connexion
    du compte d'administration.

* Renseigner les paramètres de connexion à la base de données destinée à
  l’*Application box* puis poursuivre

  .. image:: ../images/Admin_Install_screen-03.jpg
    :align: center

* Indiquer le chemin d’accès au répertoire de stockage des médias puis
  poursuivre

  .. image:: ../images/Admin_Install_screen-04.jpg
    :align: center

.. note::

    Le répertoire doit exister et l'application *Phraseanet* doit pouvoir y
    acceder en lecture et écriture.

* Renseigner le nom de la base de données destinée à la *Databox*

* Indiquer la langue à utiliser (**fr** pour français ou **en** pour anglais)
  pour la structure documentaire initiale

* Le programme d'installation créée les tâches nécessaires au fonctionnement de
  l'application. Laisser les cases cochées.

  .. image:: ../images/Admin_Install_screen-05.jpg
    :align: center

* Cliquer sur le bouton *Install* pour lancer le script d'installation

A l'issu du processus l'utilisateur est conduit à la rubrique **Gestionnaire de
tâches** de l'Administration. Il reste à
:ref:`démarrer les tâches <demarrage-scheduler>`.

.. _demarrage-scheduler:

Démarrage des tâches
--------------------

Le démarrage des tâches s'effectue dans la rubrique *Gestionnaire de tâches* du
module d'administration.

Si l'installer en mode graphique conduit d'utilisateur à cette rubrique, les
utilisateurs effectuant l'installation en ligne de commande doivent, à partir de
la page d'accueil de l'application :

* Avec un navigateur, **se rendre à l'url de l'application**
* **S'authentifier avec le compte administrateur** créé lors de l'installation
* **Cliquer sur la rubrique Admin** de :doc:`la barre de menu Phraseanet <../User/Manuel/MenuPhraseanet>`
* **Cliquer sur la rubrique** :ref:`Gestionnaire de tâches <Edition-de-taches>`

Pour démarrer les tâches, cliquer le rubrique **Start** du menu contextuel du
Scheduler.

  .. image:: ../images/Admin_Scheduler_start.jpg
    :align: center

.. note::

    Une méthode alternative consiste à utiliser la Console Phraseanet en ligne
    de commande.

.. seealso::

    Se reporter à
    :ref:`la page consacrée au moteur de tâches <Arrets-et-Demarrages-Alternatifs>`.

Les tâches lancées, l’installation est terminée et le système opérationnel.

Pour utiliser *Phraseanet* il est nécessaire de disposer d'au moins une
:term:`collection <Collection>`. Une collection *test* est créée par les
programmes d'installation pour effectuer les essais de fonctionnement.

La structure documentaire (champs documentaires, fichiers de sous-résolution)
peut être paramétrée pour s’adapter aux besoins du projet et des documents
peuvent être importés via le module :doc:`Upload <../User/Manuel/Importer>`.

.. seealso::

    Se reporter à
    :doc:`la page consacrée à l’Administration des bases et des collections<../User/Manuel/Importer>`
    et à :doc:`l’Upload<../User/Manuel/Importer>` dans le manuel utilisateur.

.. _Phraseanet.com: https://www.phraseanet.com/

