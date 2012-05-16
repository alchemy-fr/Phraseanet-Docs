Mise à jour
===========


.. toctree::

    Upgrade/3.6

Lors de la publication d'une nouvelle version, pour procéder à la mise à jour
de votre installation, suivez les étapes suivantes :

  * Arrêt des processus lancés par le scheduler via l'interface
    d'administration, stopper toutes les tâches en cours d'exécution.

  * Déconnectez tous les utilisateurs (y compris vous-même) de l'application

  * Backup des bases de données et des anciennes sources.

  * :doc:`Compilation et mise à jour de l'extension php_phrasea <Prerequis>`

  * :doc:`Compilation et remplacement du nouveau binaire indexeur <Prerequis>`

  * Mise a jour des sources des anciennes sources

  * Ecrasez le dossier config par celui de votre ancienne installation

  * Rechargement d'apache pour la prise en charge de la nouvelle extension

  * Connectez vous au module administration, éditez la configuration,
    et sauvegardez-là pour la prise en charge de nouvelles variables

  * Dans la zone "bases", utilisez le bouton "réparer les tables",
    les scripts de mise à jour se lanceront.
    Suivant votre installation, cette opération peut être longue.

  * Si vous utilisez un module memcached, flushez ce cache,
    soit en redémarrant le serveur memcached,
    soit en utilisant le bouton prévu dans le tableau de bord
    du module administration

  * Relancer les tâches via le gestionnaire de tâches.



