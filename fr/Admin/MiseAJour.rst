Mise à jour
===========

.. toctree::

    Upgrade/3.8
    Upgrade/3.7
    Upgrade/3.6

Lors de la publication d'une nouvelle version, pour procéder à la mise à jour
de votre installation, suivre les étapes suivantes :

* **Arrêter les processus lancés par le scheduler** via l'interface
  d'administration ou
  :ref:`en ligne de commande<Arrets-et-Demarrages-Alternatifs>`. Stopper toutes
  les tâches en cours d'exécution.
* Déconnecter tous les utilisateurs de l'application (y compris vous).
* Sauvegarder les bases de données via l'outil prévu :

.. code-block:: bash

    bin/console system:backup-db

* :ref:`Compiler et mettre à jour l'extension php_phrasea <Installer-Extension>`
  si nécessaire.
* :ref:`Compiler et remplacer le nouveau binaire indexeur <Installer-Indexeur>`
  si nécessaire.
* Remplacer les anciennes sources en suivant la procédure :
    * Renommer le dossiers contentant les anciennes sources
      (par exemple : phraseanet-backup-date).
    * Placer les nouvelles sources à l'emplacement des précedentes.
* Ecraser le dossier 'config' par celui de l'ancienne installation.
* Recharger le serveur web Apache ou Nginx, et éventuellement de PHP-FPM pour
  la prise en charge de la nouvelle extension.
* Vérifier que l'environnement de déploiement est conforme aux prérequis de la
  version de Phraseanet que vous installez. Dans un terminal, à la racine des
  sources, éxecuter la commande suivante :

  .. code-block:: bash

      bin/setup check:system

  Le résultat de la commande indique à l'écran les points nécessitant une
  vigilance particulière.
* Dans un terminal, à la racine des sources, éxecuter la commande suivante,
  la mise à jour va être effectuée, elle peut prendre du temps :

  .. code-block:: bash

      bin/setup system:upgrade

  Lors de l'execution de cette commande depuis des version anciennes
  (antérieures à 3.6), il est demandé d'executer des commandes supplémentaires :

  .. code-block:: bash

      Your install requires data migration, please execute the following command

              bin/setup system:upgrade-datas --from=3.1

      Your install might need to re-read technical datas

              bin/console records:rescan-technical-datas

      Your install might need to re-read technical datas

              bin/console records:build-missing-subdefs

  L'execution de ces commandes dans l'ordre indiqué est alors impératif pour que
  la mise à jour soit correctement effectuée.

* Verifier que Phraseanet est mis à jour via la commande :

  .. code-block:: bash

      bin/console --version

* Pour finir, relancer les tâches via le
  :doc:`gestionnaire de tâches<MoteurDeTaches>`.
