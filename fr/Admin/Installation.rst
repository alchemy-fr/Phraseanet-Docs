Installation
============


Après avoir télécharger les sources, vérifié les :doc:`prérequis <Prerequis>`, 
vous pouvez vérifier votre configuration ; à la racine de votre installation :

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

Si tout se passe correctement, vous pourrez vous rendre à l’Url décrite 
(sub.domain.tld dans l'exemple) et continuer la procédure d'installation.

Au total, l’installation se déroule en cinq étapes :

 - Création du socle ApplicationBox et création du compte administrateur 
   (étape précédente)
 - Connexion au module administrateur et création d’une base de stockage 
   DataBox
 - Mise en place des tâches d’indexation et de sous-définitions


Démarrage des tâches
--------------------

Dans le module admin, rendez-vous sur la zone Gestionnaire de tâches. Lancez
le planificateur de tâches.

Félicitations, votre installation est terminée !

Vous pouvez maintenant importer vos documents via le module Upload ou configurer 
votre structure documentaire pour l’adapter à vos besoins.
