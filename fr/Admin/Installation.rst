Installation
============


Après téléchargement des sources , vérifier les :doc:`prérequis <Prerequis>`,
vous pouvez vérifier votre configuration à la racine de votre installation :

  .. code-block:: bash

    php bin/console check:system
    php bin/console check:config

  .. seealso:: Utilisation de l'application :doc:`Konsole Kommander <Console>`

Configuration du serveur web
----------------------------

.. toctree::
   :maxdepth: 1

   Configuration/Nginx
   Configuration/Apache


Setup
-----



Si les étapes précédentes ont été réalisées avec succès, se rendre à l’url décrite dans le paramétrage du serveur web (sub.domain.tld) au moyen d’un navigateur web.

Le setup se déroule en cinq étapes :

 * Création du socle d’ApplicationBox
 * Création d’un compte administrateur
 * Connexion au module d’administration
 * Création d’une base de stockage type DataBox
 * Mise en place des tâches d’indexation et de sous-définitions


Démarrage des tâches
--------------------

Dans le module admin, cliquer sur la rubrique :doc:`Gestionnaire de tâches <MoteurDeTaches>`
et lancer le planificateur de tâches.

L’installation est terminée et le système opérationnel.

La structure documentaire peut être paramétrée pour s’adapter à vos besoins et
des documents peuvent être importés via le module Phraseanet :doc:`Upload <../User/Manuel/Importer>`
