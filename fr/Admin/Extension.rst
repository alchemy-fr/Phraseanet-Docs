Phraseanet-Extension
====================

Le moteur de recherche Phraseanet est disponible par l'intermédiaire de
l'extension PHP "php_phrasea2".

Installation
------------

Après compilation et installation de "Phraseanet-Extension" (voir spécificités
Linux, OSX et Windows), vérifier la présence des extensions pré-requises avec
php -m

  .. code-block:: none

    [PHP Modules]
    ...
    phrasea2
    ...

Redémarrer le serveur web.


Spécificités Linux et OSX
-------------------------

Après compilation, "sudo make install" va copier l'extension à l'emplacement des
extensions php.

Spécificités Windows
--------------------

L'extension est livrée pré-compilée pour Windows.

Télécharger l'extension correspondant à votre version de PHP
(ex. "https://github.com/alchemy-fr/Phraseanet-Extension/tree/master/_WIN32%20(visual%20C++%202008)/Release_TS_php-5.4.0")
, prendre la dernière version disponible
d'après son numéro de version (par ex. "php_phrasea2_UTF-8_1.20.1.0.dll").

Renommer le fichier en "php_phrasea2.dll" et copier dans le répertoire "ext" de
PHP (normalement "C:\\Program Files\\PHP\\ext" si PHP a été installé avec les
settings par défaut).

Activer l'extension dans le fichier php.ini :

.. code-block:: none

    [PHP_PHRASEA]
    extension=php_phrasea2.dll

.. warning::

    en cas d'erreur "... icu*.dll introuvable ...", télécharger les ICU
    libraries requises par l'extension "php_intl" et copier les différents
    fichiers "icu*.dll" dans le répertoire principal de PHP.


