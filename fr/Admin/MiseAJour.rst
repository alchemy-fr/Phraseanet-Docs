Mise à jour
===========

.. warning::

    Pour mettre à jour en version 4.0, il est impératif de disposer d'une
    version 3.8.8 installée.

    `Se reporter aux procédures de mise à jour en version 3.8`_

Lors de la publication d'une nouvelle version, pour procéder à la mise à jour
de votre installation, suivre les étapes suivantes :

* **Arrêter les processus lancés par le scheduler** via l'interface
  d'administration ou
  :ref:`en ligne de commande<Arrets-et-Demarrages-Alternatifs>`. Stopper toutes
  les tâches en cours d'exécution.
* **Déconnecter tous les utilisateurs** de l'application (y compris vous).
* Facultatif : Passer en mode maintenance (faire le lien en configuration.yml)
* **Sauvegarder les bases de données** via l'outil prévu :

.. code-block:: bash

    bin/console system:backup-db

* **Remplacer les anciennes sources** en suivant la procédure :
    * Renommer le dossiers contentant les anciennes sources
      (par exemple : phraseanet-backup-date).
    * Placer les nouvelles sources à l'emplacement des précedentes.
* **Ecraser le dossier 'config'** par celui de l'ancienne installation.
* **Recharger le serveur web** Apache ou Nginx, et éventuellement de PHP-FPM
  pour la prise en charge de la nouvelle extension.
* **Vérifier que l'environnement de déploiement est conforme aux prérequis**
  de la version de Phraseanet que vous mettez à jour. Dans un terminal, à la
  racine des sources, éxecuter la commande suivante :

  .. code-block:: bash

      bin/setup check:system

  Le résultat de la commande indique à l'écran les points nécessitant une
  vigilance particulière.
* **Executer la commande suivante pour lancer la mise à jour** :

  .. code-block:: bash

      bin/setup system:upgrade

* **Verifier que Phraseanet est mis à jour** via la commande :

  .. code-block:: bash

      bin/console --version

* Pour finir, **relancer les tâches** via le
  :doc:`gestionnaire de tâches<MoteurDeTaches>`.

.. _Se reporter aux procédures de mise à jour en version 3.8: https://docs.phraseanet.com/3.8/fr/Admin/MiseAJour.html