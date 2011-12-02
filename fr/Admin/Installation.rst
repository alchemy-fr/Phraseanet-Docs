Installation
============

.. toctree::
   :maxdepth: 3
   :hidden:

   Configuration/Nginx
   Configuration/Apache

Phraseanet nécessite certains :doc:`prérequis <Prerequis>`, vérifiez votre 
configuration avant de commencer.

Téléchargez les sources
----------------------- 

  .. code-block:: bash

    git clone https://github.com/alchemy-fr/Phraseanet Phraseanet
    cd Phraseanet

Verifiez votre configuration
----------------------------

  .. code-block:: bash

    php bin/console system:configCheck


Configurez votre serveur web
----------------------------

  * :doc:`Sous Nginx <Configuration/Nginx>`

  * :doc:`Sous Apache <Configuration/Apache>`


Si tout se passe correctement, vous pourrez vous rendre à l’Url décrite 
(sub.domain.tld dans l'exemple) et continuer la procédure d'installation.

Au total, l’installation se déroule en cinq étapes :

 - Création du socle ApplicationBox et création du compte administrateur 
   (étape précédente)
 - Connexion au module administrateur et création d’une base de stockage 
   DataBox
 - Mise en place des tâches d’indexation et de sous-définitions


Création des tâches essentielles
--------------------------------

Dans le module admin, rendez-vous sur la zone Gestionnaire de tâches. 
Créez les tâches suivantes :

   - Ecriture de meta-données
   - Sous-définitions
   - Indexation

Les pré-réglages originaux suffisent dans un premier temps.
La création de la tâche d’indexation est un plus compliquée :

Créer la tâche. L’application va vous demander plusieurs informations dont

 - le chemin vers le binaire indexeur compilé précédemment
 - les paramètres de connexion à la base de donnée (ApplicationBox)
 - Un port de contrôle (le port de votre choix qui ne doit pas être déjà 
   utilisé sur le serveur)

Si toutes les tâches sont correctement configurées, vous pouvez démarrer le 
planificateur en cliquant sur sa ligne

Félicitations, votre installation est terminée !

Vous pouvez maintenant importer vos documents via le module Upload ou configurer 
votre structure documentaire pour l’adapter à vos besoins.
