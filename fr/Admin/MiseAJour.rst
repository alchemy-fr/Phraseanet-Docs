Mise à jour
===========

.. toctree::

    Upgrade/3.6
    Upgrade/3.7

Lors de la publication d'une nouvelle version, pour procéder à la mise à jour
de votre installation, suivre les étapes suivantes :

* Arrêter les processus lancés par le scheduler via l'interface
  d'administration, stopper toutes les tâches en cours d'exécution.
* Déconnecter tous les utilisateurs de l'application (y compris vous).
* Sauvegarder les bases de données via l'outil prévu :

.. code-block:: bash

    bin/console system:backup-db

* :doc:`Compiler et mettre à jour l'extension php_phrasea <Prerequis>`.
* :doc:`Compiler et remplacer le nouveau binaire indexeur <Prerequis>`.
* Remplacer les anciennes sources en suivant la procédure :
    * Renommer le dossiers contentant les anciennes sources
      (ex : phraseanet-backup-date).
    * Placer les nouvelles sources à l'emplacement des précedentes.
* En cas d'utilisation de Nginx, prendre soin de mettre à jour les règles de
  re-écriture (fournies dans ``config/nginx.rewrite.rules``).
* Ecraser le dossier 'config' par celui de l'ancienne installation.
* Recharger le serveur web Apache ou Nginx, et éventuellement de PHP-FPM pour
  la prise en charge de la nouvelle extension.
* Dans un terminal, à la racine des sources, éxecuter la commande suivante,
  la mise à jour va être effectuée, elle peut prendre du temps :

.. code-block:: bash

    bin/console system:upgrade

* Verifier que Phraseanet est mis à jour via la commande :

.. code-block:: bash

    bin/console --version

* Se connecter au module administration, éditer la configuration,
  et la sauvegarder pour prendre en charge les nouvelles options.
* Pour finir, relancer les tâches via le gestionnaire de tâches.
