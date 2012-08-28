Mise à jour
===========


.. toctree::

    Upgrade/3.6
    Upgrade/3.7

Lors de la publication d'une nouvelle version, pour procéder à la mise à jour
de votre installation, suivez les étapes suivantes :

  * Arrêt des processus lancés par le scheduler via l'interface
    d'administration et stopper toutes les tâches en cours d'exécution.

  * Déconnectez tous les utilisateurs (y compris vous-même) de l'application

  * Sauvegarder les bases de données et les anciennes sources.

  * :doc:`Compiler et mettre à jour l'extension php_phrasea <Prerequis>`

  * :doc:`Compiler et remplacer le nouveau binaire indexeur <Prerequis>`

  * Mettre à jour les sources

  * Ecrasez le dossier config par celui de votre ancienne installation

  * Recharger le serveur web APACHE ou NGINX pour la prise en charge de la nouvelle extension

  * Se connecter au module administration, éditer la configuration,
    et sauvegarder-là pour la prise en charge de nouvelles variables

  * Dans la zone "bases", cliquer sur le lien "réparer les tables",
    les scripts de mise à jour se lancent.
    Suivant l'installation, cette opération peut être longue.

  * Vider votre serveur de cache, si vous en utilsez un,
    en utilisant le bouton prévu dans le tableau de bord du module administration

  * Pour finir, relancer les tâches via le gestionnaire de tâches.



