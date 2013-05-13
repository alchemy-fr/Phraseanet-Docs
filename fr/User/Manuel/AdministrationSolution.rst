Administration de l'application
===============================
.. toctree::
    :maxdepth: 3

.. topic:: L'essentiel

    L'administration de l'application consiste à surveiller le fonctionnement
    de la solution et à apporter si besoin des modifications de paramétrage.

Tableau de bord
---------------

.. image:: ../../images/Administration-tableaudebord.jpg
    :align: center

**Accessible aux seuls administrateurs Phraseanet**, le *tableau de bord* permet
d'ajouter ou de supprimer des administrateurs Phraseanet.

Les **administrateurs Phraseanet** sont des utilisateurs dotés de pouvoirs de
paramétrage et de maintenance applicative.

En outre, le tableau de bord offre une vue sur l'état de la configuration du
système de fichier, des exécutables, des extensions, des serveurs de caches et
des serveurs web qui entrent dans la mise en oeuvre de la solution *Phraseanet*.

Setup
-----

**Accessible aux seuls administrateurs Phraseanet**, *Setup* propose une
interface graphique permettant de modifier des paramètres d'installation et de
configuration de Phraseanet.

.. image:: ../../images/Administration-setup.jpg
    :align: center

Setup propose un jeu de formulaires permettant notamment :

* **De modifier les adresses et les chemins de l'application** ou de composants
  permettant sa mise en oeuvre
* **De placer l'application en mode maintenance**
* **D'activer ou de désactiver des connectivités à des services web**
* **D'activer ou de désactiver des connectivités à des réseaux sociaux** mis en
  oeuvre dans :doc:`Bridge`
* **D'activer ou de désactiver des fonctionnalités et options de l'application**
* **De gérer les extensions de fichiers autorisés** en ajout dans Upload

.. warning::

    Setup permet de modifier en profondeur les paramètres d'
    installation de l'application. L'administrateur sera particulièrement
    attentif aux modifications apportées dans les formulaires proposés.

Utilisateurs connectés
----------------------

Cet écran liste les sessions utilisateurs actives sur le système Phraseanet.

Elle informe de l'application Phraseanet utilisée, de l'adresse "IP", ainsi que
de la date et de l'heure de connexion au système.

.. image:: ../../images/Administration-utilisateurlive.jpg
    :align: center

.. note::

    Phraseanet repose sur un mécanisme de *sessions persistantes*. Les
    dates et heures de connexion correspondent à celles de l'initialisation de
    la session de l'utilisateur.

Publications
------------

Accessible aux utilisateurs qui disposent des droits de gestion des
publications, la rubrique publications permet de gérer les flux media RSS
diffusés à partir de l'application Phraseanet.

.. image:: ../../images/Administration-publications.jpg
    :align: center

L'écran Publications dresse la liste des flux média disponibles en publication
et permet d'en créer, d'en modifier et d'en supprimer.

* **Pour créer un flux**, remplir puis valider le formulaire d'ajout
* **Pour modifier les propriétés d'un flux existant**, cliquer sur le flux à
  modifier pour ouvrir le formulaire d'édition du flux sélectionné.
* **Pour supprimer un flux**, cliquer sur bouton supprimer.

Gestionnaire de tâches
----------------------

**Accessible aux seuls administrateurs Phraseanet**, cet écran permet de gérer
les tâches d'archivage et autres traitements automatiques appliqués sur les
:term:`Bases <Base>` et :term:`Collections <Collection>` de l'application.

Les tâches sont listées dans un tableau qui indique l'identifiant de la tâche,
si elle est ou non active, son nom.

.. image:: ../../images/Administration-gestionnairedetaches.jpg
    :align: center

Le principe d’une *Tâche d’archivage* est de scruter un répertoire, d'en
capturer  le contenu, de l'archiver (recopier les fichiers dans les répertoires
de stockage de la base de destination).

* **Pour démarrer une tâche**, cliquer sur le symbole, puis cliquer sur Start.
* **Pour éditer une tâche**, cliquer sur "Éditer".
* **Pour arrêter une tâche**, cliquer sur "Stop".
* **Pour créer une nouvelle tâche**, cliquer sur nouvelle tâche.

.. image:: ../../images/Administration-taches.jpg
    :align: center

Nouvelle tâche
**************

Le paramétrage des tâches dans Phraseanet permet de mettre en place des
automatismes de traitement.

La solution est livrée en standard avec un jeu de tâches exploitables et l'
utilisateur peut en créer d'autres.

.. image:: ../../images/Administration-nouvelletache.jpg
    :align: center

Les paramètres des tâches sont stockés sous forme de fichiers XML. Dans certains
cas, les fichiers XML de paramétrage proposent une interface de saisie.

.. image:: ../../images/Administration-editertache.jpg
    :align: center

Après avoir cliqué sur *nouvelle tâche* :

* Sélectionner un des modèles de tâches disponibles.
* Renseigner les différents paramètres demandés.
* Ou modifier les paramètres directement dans la vue XML.
* Cliquer sur Valider pour enregistrer les modifications.

.. note::

    Pour plus d'informations sur le paramétrage de tâches, se reporter
    à la page :doc:`../../Admin/MoteurDeTaches`.
