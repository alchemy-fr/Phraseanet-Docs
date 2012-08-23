Spécificités Windows
====================


L'extension "Phraseanet-Extension" ainsi que l'indexeur "Phraseanet-Indexer"
sont disponibles pré-compilés pour Windows.

.. note::

    Certaines versions (comportant des corrections pour des versions
    précédentes de l'application) sont disponibles au téléchargement.

    Pour une installation de la dernière version de l'application, télécharger
    la dernière version de l'extension et de l'indexeur (vérifier les numéros de
    version)

La version des fichiers est visible dans l'onglet des propriétés.


Installation de "Phraseanet-Indexer"
------------------------------------

Télécharger "https://github.com/alchemy-fr/Phraseanet-Indexer/tree/master/WIN32/out/Release/bin/phraseanet_indexer.exe",
et placer l'éxécutable dans un répertoire distinct (par ex. dans "Progam Files\
Phraseanet-Indexer\phraseanet_indexer.exe").

L'indexeur nécessite la présence des librairies suivantes :

* libexpat.dll (http://sourceforge.net/projects/expat/files/expat_win32/2.0.1/expat-win32bin-2.0.1.exe/download), installer
* iconv.dll (http://xmlsoft.org/sources/win32/iconv-1.9.2.win32.zip)
* libxml2.dll (http://xmlsoft.org/sources/win32/libxml2-2.7.8.win32.zip)
* zlib1.dll (http://xmlsoft.org/sources/win32/zlib-1.2.3.win32.zip)
* libmysql.dll (http://dev.mysql.com/downloads/mysql/ ; download Windows (x86, 32-bit), MSI Installer "mysql-5.5.21-win32.msi"), installer

Pour des raisons de concordance de versions il est recommandé de copier ces dll
dans le répertoire de l'éxécutable (à coté de phraseanet_indexer.exe).

L'indexeur peut être testé avec l'option '-?' qui doit afficher l'aide :

  .. code-block:: none

    C:\Phraseanet-Indexer>phraseanet_indexer.exe -?
    phraseanet_indexer version 3.9.0.4
    Usage : phraseanet_indexer <options>
    [-?     | --help]                   : this help
    [-v     | --version                 : display version and quit
    [-h     | --host]=<addr>            : host addr. of applicationBox (default '127.0.0.1')
    [-P     | --port]=<port>            : port of applicationBox (default '3306')
    [-b     | --base]=<base>            : database of applicationBox (default 'phrasea')
    [-u     | --user]=<user>            : user account for connection to applicationBox (default 'root')
    [-p     | --password]=<pwd>         : password for connection to applicationBox (default '')
    [-s     | --socket]=<port>          : port for telnet control (default none)
    [-f     | --flush]=<n>              : flush every n records (default 50)
    [-o     | --old]                    : use old 'sbas' table instead of 'xbas'
    [         --quit]                   : index once and quit
    [-c     | --clng]=<lng>             : default language for new candidates terms (default 'fr')
    [-n     | --nolog]                  : do not log, but out to console
    [-d     | --debug]=<mask>           : debug mask (to console)
                            1           : xml parsing
                            2           : sql errors
                            4           : sql ok
                            8           : memory alloc.
                            16          : record ops.
                            32          : structure ops.
                            64          : flush ops.
    [-@     | --optfile]=<file>         : read (more) arguments from text file (see 'sample_args.txt')
    [--default-character-set]=<charset> : charset of applicationBox AND dataBoxes (default none)
    Windows specific options :
    [--install]                         : install as service
    [--remove]                          : remove installed service
    [--run]                             : run into console
    example:
    phraseanet_indexer.exe -h 192.168.0.1 --base dbTest --clng en --nolog --run

    /----- xbas from 127.0.0.1:3306:phrasea ----
    Can't connect to applicationBox
    \-----------------------------


Installation en service Windows
*******************************

Classiquement l'indexeur est éxécuté par une tâche Phraseanet "Indexation".
Sous Windows l'indexeur peut également être installé en service via 3 options
spécifiques

.. code-block:: none

    --install : installe le service "Phraseanet-Indexer"
    --remove : désinstalle le service
    --run : éxécute simplement en ligne de commande (à utiliser impérativement pour l'éxécution en tâche)

ex :

.. code-block:: none

    C:\Phraseanet-Indexer\phraseanet_indexer.exe -h=localhost -P=3306 -b=ab_test
    -u=phuser -p=**** --socket=25200 --default-character-set=utf8 -o -n
    -d=0 --install

Si l'indexeur est installé comme service Windows, supprimer -ou ne pas activer-
la tâche correspondante



Logs
****

Le log des actions (masque de log réglé par l'option -d=N) est effectué dans
l'observateur d'événements (journal Application). L'option '-n' (nolog) permet
d'effectuer le log sur l'écran.

.. note::
    un masque de log réglé à -d=64 (flush ops.) permet de contrôler le
    fonctionnement sans trop charger les logs.


Installation de "Phraseanet-Extension"
--------------------------------------

Télécharger l'extension correspondant à votre version de PHP
(ex. "https://github.com/alchemy-fr/Phraseanet-Extension/tree/master/_WIN32%20
(visual%20C++%202008)/Release_TS_php-5.4.0"), prendre la dernière version disponible
d'après son numéro de version (par ex. "php_phrasea2_UTF-8_1.20.1.0.dll").

Renommer le fichier en "php_phrasea2.dll" et copier dans le répertoire "ext" de
PHP (normalement "C:\Program Files\PHP\ext" si PHP a été installé avec les
settings par défaut).

Activer l'extension dans le fichier php.ini :

  .. code-block:: none

    [PHP_PHRASEA]
    extension=php_phrasea2.dll

Installer / vérifier la présence des extensions pré-requises avec php -m

  .. code-block:: none

    [PHP Modules]
    ...
    phrasea2
    ...

.. warning::
    en cas d'erreur "... icu*.dll introuvable ...", télécharger les ICU
    libraries requises par l'extension "php_intl" et copier les différents
    fichiers "icu*.dll" dans le répertoire principal de PHP.

Redémarrer le serveur web.

