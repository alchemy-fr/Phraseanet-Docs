Maintenance
===========

Sauvegarde
----------

Phraseanet dissocie le stockage des documents physiques
(images, vidéos, audio, pdf ect ...), les bases de données MySQL, et les index
de recherche Elasticsearch.
La sauvegarde devra donc prendre en compte de façon synchrone ses
trois éléments.
S'ajoute à ces éléments, les fichiers sources de l'application qui n'évoluent
qu'après une mise à jour.

Les données physiques
*********************

Les données physiques sont stockées dans des répertoires prédéfinis à
l’installation de l’application.

Une sauvegarde différentielle est préconisée pour ces fichiers.
(le volume de données pouvant être très important).

Les Bases MySQL
***************

L'ApplicationBox et les DataBoxes sont les bases MySQL associées
à une installation Phraseanet.

Une sauvegarde à chaud de ces bases est envisageable.

L'utilitaire en ligne de commande :doc:`Konsole Kommander <Console>`
intégré à l'application permet de lancer une sauvegarde de l'ensemble des bases.

.. code-block:: bash

    php bin/console system:backup-db /repertoire/de/sauvegarde/

Cette commande peut être incluse dans un script de sauvegarde.

Les index de recherche Elasticsearch
************************************

Se référer à `la documentation Elasticsearch`_

Les sources de l'application
****************************

Les sources de l'application ne sont en général modifiées qu'en cas de
mise à jour.

Néanmoins il peut être judicieux de faire une sauvegarde ponctuelle des sources
après l’installation ou le paramétrage.

.. note::

    Vous ne devriez avoir à sauvegarder que le dossier config  qui contient
    vos informations de setup.

Etat de maintenance
-------------------

Le bloc "Etat de maintenance" dans la configuration de l'application,
permet d'activer les logs et d'alerter les utilisateurs (ex: maintenance en
cours). Ce paramètrage se fait dans le fichier *configuration.yml*.

Se référer à :doc:`la page consacrée à la configuration </Admin/Configuration>`.

.. _la documentation Elasticsearch: https://www.elastic.co/guide
