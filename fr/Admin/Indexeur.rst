Phraseanet-Indexeur
===================

L'indexeur indexe le contenu des bases publiées dans une application Phraseanet
et permet ainsi la recherche dans le contenu des fiches descriptives
des documents.

L'indexeur fonctionne en arrière plan, il "surveille" les bases à indexer
(apparition ou disparition des bases) et maintient les index "full-text",
"valeur" et "thésaurus".

Installation
------------

L'indexeur est un éxécutable en ligne de commande, "phraseanet_indexer".

Il peut être éxécuté directement en console, planifié (cron, tâche planifiée...)
ou bien via le "Task-manager" de Phraseanet.

L'indexeur nécessite la présence des bibliothèques suivantes :

* libexpat
* iconv
* libxml2
* zlib1
* libmysql

Après compilation (voir spécificités Windows), copier l'éxécutable dans un
répertoire avec les droits d'éxécution.

Arguments
---------

Ces arguments spécifient l' "application-box" (base SQL de l'application
Phraseanet) dans laquelle sont publiées les bases à indexer.

* --host : adresse de la base
* --port : port (normalement 3306 pour MySQL)
* --base : nom de la base "application-box"
* --user : compte SQL pour la connexion
* --password : mot de passe du compte de connexion
* --default-character-set : jeu de caractères de la connexion
* --old : argument obligatoire !
* --socket : port de contrôle via telnet
    En cours d'éxécution, l'indexeur peut être interrompu par Ctrl-C (ou sous linux
    et OSX par l'envoi du signal sigint).
    L'argument "socket" permet d'interrompre également l'indexeur via telnet.
* --flush : Ecrire les index tous les 'n' documents.
    Pour optimiser les performances, l'indexeur indexe les documents par lots
    (par défaut 50).
    Si la mémoire consommée est trop importante il est possible de diminuer ce
    nombre avec l'option "flush" (au détriment de la vitesse).
* --clng : Langue par défaut des termes candidats
    Lors de l'indexation de champs liés à un thésaurus, les nouveaux termes sont
    placés comme "termes candidats".
    L'option "clng" permet de spécifier la langue à attribuer par défaut aux termes
    candidats.
* --debug : Type des messages générés.
* --optfile : lire les arguments dans un fichier
    Il peut être souhaitable de ne pas afficher certaines options de la ligne de
    commmande (notamment le mot de passe).
    L'indexeur peut lire des options dans un fichier, ce fichier devant être placé
    dans le même répertoire que l'éxécutable.
* --quit : indexer et quitter
    L'indexeur est censé fonctionner en continu.
    Cette option permet d'indexer les documents concernés puis de quitter l'indexeur
    immédiatement.
* --help : Affiche l'aide
* --version : Affiche la version
    L'argument "help" détaille les différentes options précédemment citées ainsi que
    les valeurs par défaut.
* --nolog : Ecrire les message sur la console.
    A des fins de contrôle, l'indexeur peut écrire différents types d'opérations
    effectuées (traitement xml, opérations sql...).
    Ces 7 types de messages peuvent être filtrés par les 7 bits (masque) de la
    valeur de debug.

Ces "logs" sont normalement envoyés au système (syslog pour linux ou OSX,
journal des événements pour Windows).
L'option "nolog" permet d'envoyer les messages sur l'écran.

.. note::

    Un masque de log réglé à --debug=64 (flush ops.) permet de contrôler le
    fonctionnement sans trop charger les logs.

Exemples
********

L'indexeur peut être testé avec l'option '-?' qui doit afficher l'aide :

.. code-block:: none

    phraseanet_indexer -?
    phraseanet_indexer version 3.9.0.4
    Usage : phraseanet_indexer <options>
    [-?     | --help]                   : this help
    [-v     | --version                 : display version and quit
    [-h     | --host]=<addr>            : host addr. of applicationBox (default '127.0.0.1')
    [-P     | --port]=<port>            : port of applicationBox (default '3306')
    [-b     | --base]=<base>            : database of applicationBox (default 'phrasea')
    [-u     | --user]=<user>            : user account for connection to applicationBox
                                          (default 'root')
    [-p     | --password]=<pwd>         : password for connection to applicationBox
                                          (default '')
    [-s     | --socket]=<port>          : port for telnet control (default none)
    [-f     | --flush]=<n>              : flush every n records (default 50)
    [-o     | --old]                    : use old 'sbas' table instead of 'xbas'
    [         --quit]                   : index once and quit
    [-c     | --clng]=<lng>             : default language for new candidates terms
                                          (default 'fr')
    [-n     | --nolog]                  : do not log, but out to console
    [-d     | --debug]=<mask>           : debug mask (to console)
                            1           : xml parsing
                            2           : sql errors
                            4           : sql ok
                            8           : memory alloc.
                            16          : record ops.
                            32          : structure ops.
                            64          : flush ops.
    [-@     | --optfile]=<file>         : read (more) arguments from text file
                                          (see 'sample_args.txt')
    [--default-character-set]=<charset> : charset of applicationBox AND dataBoxes
                                          (default none)

Exemple d'arguments dans un fichier...

    .. code-block:: none

        phraseanet_indexer --debug=64 --nolog --optfile=indexerargs.txt

    ...avec le fichier "indexerargs.txt"

    .. code-block:: none

        #  connection to application-box...
        # ...host, port, base, user, password
        --host=127.0.0.1
        --port=3306
        --base=phrasea
        --user=phraseanet
        --password=xxxxxxxxx

        # socket to talk (telnet) to indexer
        --socket=2055

        # use 'sbas' table (mandatory)
        -o

        # candidates default language
        --clng=fr

        # sql connections encoding
        --default-character-set=utf8

Exécution par le Task-Manager
-----------------------------

L'indexeur peut être éxécuté par la tâche "Indexation", les réglages des
attributs sont alors disponibles via l'interface graphique de la tâche.

Spécificités Linux et OSX
-------------------------

Après compilation, "sudo make install" va copier l'éxécutable dans le répertoire
des binaires (par ex . /usr/local/bin).

Spécificités Windows
--------------------

L'indexeur est livré pré-compilé pour Windows.

Télécharger la dernière version "https://github.com/alchemy-fr/Phraseanet-Indexer/tree/master/WIN32/out/Release/bin/phraseanet_indexer.exe",
et placer l'éxécutable dans un répertoire distinct (par ex. dans "Program
Files\\Phraseanet-Indexer\\phraseanet_indexer.exe").

.. note::

    Certaines versions (comportant des corrections pour des versions
    précédentes de l'application) sont également disponibles au téléchargement.

Pour des raisons de concordance de versions il est recommandé de copier les dll
des bibliothèques requises dans le répertoire de l'éxécutable (à coté de
phraseanet_indexer.exe).

Ces bibliothèques peuvent être téléchargées dans :

* libexpat.dll (http://sourceforge.net/projects/expat/files/expat_win32/2.0.1/expat-win32bin-2.0.1.exe/download),
  installer
* iconv.dll (http://xmlsoft.org/sources/win32/iconv-1.9.2.win32.zip)
* libxml2.dll (http://xmlsoft.org/sources/win32/libxml2-2.7.8.win32.zip)
* zlib1.dll (http://xmlsoft.org/sources/win32/zlib-1.2.3.win32.zip)
* libmysql.dll (http://dev.mysql.com/downloads/mysql/ ; download Windows (x86,
  32-bit), MSI Installer "mysql-5.5.21-win32.msi"), installer

Installation en service
***********************

Classiquement l'indexeur est éxécuté par une tâche Phraseanet "Indexation".
Sous Windows l'indexeur peut également être installé en service via 3 options
spécifiques

.. code-block:: none

    --install : installe le service "Phraseanet-Indexer"
    --remove : désinstalle le service
    --run : éxécute simplement en ligne de commande (à utiliser impérativement
    pour l'éxécution en tâche)

ex :

.. code-block:: none

    C:\Phraseanet-Indexer\phraseanet_indexer.exe -h=localhost -P=3306 -b=ab_test
    -u=phuser -p=**** --socket=25200 --default-character-set=utf8 -o -n
    -d=0 --install

Si l'indexeur est installé comme service Windows, supprimer -ou ne pas activer-
la tâche "Indexeur" correspondante
