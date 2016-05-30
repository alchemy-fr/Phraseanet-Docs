Plugins
=======

Un mécanisme de plugin permet
de personnaliser l'éxecution de services (log, authentification) que les vues
(home page personalisées, etc ...).

Un plugin Phraseanet est un dossier dans lequel se trouve un fichier
**manifest.json** décrivant ce plugin, un fichier **composer.json** servant à
la résolution des dépendances du plugin et d'un dossier **public** contenant
une arborescence à exposer publiquement (icônes, css, js, etc...).

.. toctree::

    plugins/install
    plugins/configure