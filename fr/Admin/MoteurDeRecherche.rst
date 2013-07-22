Moteur de recherche
===================

.. topic:: L'essentiel

    Phraseanet est fourni par défaut avec le moteur de recherche Phrasea.
    Performant, il permet l'emploi du module thesaurus de Phraseanet.
    Toutefois, si l'utilisation du module Phraseanet Thésaurus n'est pas
    envisagée, SphinxSearch peut être utilisé.
    Cette section explique les avantages de chacun et leur installation.

.. warning::

    Le paramétrage du moteur de recherche se fait à l'installation de
    Phraseanet. Par la suite les paramètres ne devraient pas être réajustés.

Phrasea Engine
--------------

Le moteur Phrasea se compose d'un indexeur (Phraseanet-Indexer) et de
l'extension PHP Phraseanet-Extension qui permet d'effectuer des recherches dans
l'index Phraseanet.

Un des principaux avantages de ce moteur est la prise en charge du thesaurus.

Indexeur
********

L'indexeur indexe le contenu des bases publiées dans une application Phraseanet
et permet ainsi la recherche dans le contenu des fiches descriptives
des documents.

L'indexeur fonctionne en arrière plan, il "surveille" les bases à indexer
(apparition ou disparition des bases) et maintient les index "full-text",
"valeur" et "thésaurus".

Installation
^^^^^^^^^^^^

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
^^^^^^^^^

Ces arguments spécifient l' "application-box" (base SQL de l'application
Phraseanet) dans laquelle sont publiées les bases à indexer.

* --host: adresse de la base
* --port: port (normalement 3306 pour MySQL)
* --base: nom de la base "application-box"
* --user: compte SQL pour la connexion
* --password: mot de passe du compte de connexion
* --default-character-set: jeu de caractères de la connexion
* --old: argument obligatoire !

Ces 7 précédentes options sélectionnent l'"application-box" (base SQL de Phraseanet)
où les bases ("data-boxes") à indexer sont publiées.

* --socket: port de contrôle via telnet
    En cours d'éxécution, l'indexeur peut être interrompu par Ctrl-C (ou sous linux
    et OSX par l'envoi du signal sigint).
    L'argument "socket" permet d'interrompre également l'indexeur via telnet.
* --flush: Ecrire les index tous les 'n' documents.
    Pour optimiser les performances, l'indexeur indexe les documents par lots
    (par défaut 50).
    Si la mémoire consommée est trop importante il est possible de diminuer ce
    nombre avec l'option "flush" (au détriment de la vitesse).
* --clng: Langue par défaut des termes candidats
    Lors de l'indexation de champs liés à un thésaurus, les nouveaux termes sont
    placés comme "termes candidats".
    L'option "clng" permet de spécifier la langue à attribuer par défaut aux termes
    candidats.
* --stem: indexe les racines (voir http://fr.wikipedia.org/wiki/Racinisation)
    des mots, permettant de rechercher en full-text différentes formes d'un mot
    comme le pluriel ou les conjugaisons.

La liste des langues disponibles est affichée avec l'option --help

La recherche par racine est disponible dans Phraseanet Production / recherche avancée..
ex. : chercher "oiseau vole" trouvera les documents renseignés avec "oiseaux volants".

* --optfile: lire les arguments dans un fichier
    Il peut être souhaitable de ne pas afficher certaines options de la ligne de
    commmande (notamment le mot de passe).
    L'indexeur peut lire des options dans un fichier, ce fichier devant être placé
    dans le même répertoire que l'éxécutable.
* --quit:
    L'indexeur est censé fonctionner en continu.
    Cette option permet d'indexer les documents concernés puis de quitter l'indexeur
    immédiatement.
* --version: Affiche la version
* --debug: A des fins de contrôle, l'indexeur peut écrire différents types d'opérations
    effectuées (traitement xml, opérations sql...).
    Ces 7 types de messages peuvent être filtrés par les 7 bits (masque) de la
    valeur de debug.

Un masque de log réglé à --debug=64 (flush ops.) permet de contrôler le
fonctionnement sans trop charger les logs.

* --nolog: Les "logs" sont normalement envoyés au système (syslog pour linux ou OSX,
    journal des événements pour Windows).
    L'option "nolog" permet d'envoyer les messages sur l'écran.

* --help: L'option "help" détaille les différentes options précédemment citées ainsi que
    les valeurs par défaut.

Exemples
~~~~~~~~

L'indexeur peut être testé avec l'option '-?' qui doit afficher l'aide :

.. code-block:: none

    phraseanet_indexer -?
    phraseanet_indexer version 3.10.2.3
    Usage : phraseanet_indexer <options>
    [-?     | --help]                   : this help
    [-v     | --version                 : display version and quit
    [-h     | --host]=<addr>            : host addr. of applicationBox (default '127.0.0.1')
    [-P     | --port]=<port>            : port of applicationBox (default '3306')
    [-b     | --base]=<base>            : database of applicationBox (default 'phrasea')
    [-u     | --user]=<user>            : user account for connection to applicationBox
                                        : (default 'root')
    [-p     | --password]=<pwd>         : password for connection to applicationBox
                                        : (default '')
    [-s     | --socket]=<port>          : port for telnet control (default none)
    [-f     | --flush]=<n>              : flush every n records (default 50)
    [-o     | --old]                    : use old 'sbas' table instead of 'xbas'
    [         --quit]                   : index once and quit
    [-c     | --clng]=<lng>             : default language for new candidates terms
                                        : (default 'fr')
    [         --stem]=<lng>,<lng>,..    : stemm for those languages
    [-n     | --nolog]                  : do not log, but out to console
    [         --sort-empty]=<a|n|z>     : default value for unset fields with type
                                        : (default 'a')  //=sort position
                               a        : beginning (default)
                               n        : none (=record not shown when sorting)
                               z        : end
    [-d     | --debug]=<mask>           : debug mask (to console)
                               1        : xml parsing
                               2        : sql errors
                               4        : sql ok
                               8        : memory alloc.
                              16        : record ops.
                              32        : structure ops.
                              64        : flush ops.
    [-@     | --optfile]=<file>         : read (more) arguments from text file
                                        : (see 'sample_args.txt')
    [--default-character-set]=<charset> : charset of applicationBox AND dataBoxes
                                        : (default none)

    /----- stemmers --------------
    | danish     : da   dan
    | german     : de   deu  ger
    | dutch      : dut  nl   nld
    | english    : en   eng
    | spanish    : es   esl  spa
    | finnish    : fi   fin
    | french     : fr   fra  fre
    | hungarian  : hu   hun
    | italian    : it   ita
    | norwegian  : no   nor
    | portuguese : por  pt
    | porter     :
    | romanian   : ro   ron  rum
    | russian    : ru   rus
    | swedish    : sv   swe
    | turkish    : tr   tur
    \-----------------------------

Exemple d'arguments dans un fichier "indexerargs.txt"

.. code-block:: none

    phraseanet_indexer --debug=64 --nolog --optfile=indexerargs.txt

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

    # sql connections encoding
    --default-character-set=utf8

    # candidates default language
    --clng=fr

    # stemming languages
    --stemm=fr,en

Exécution par le Task-Manager
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

L'indexeur peut être éxécuté par la tâche "Indexation", les réglages des
attributs sont alors disponibles via l'interface graphique de la tâche.

Spécificités Linux et OSX
^^^^^^^^^^^^^^^^^^^^^^^^^

Après compilation, "sudo make install" va copier l'éxécutable dans le répertoire
des binaires (par ex . /usr/local/bin).

Spécificités Windows
^^^^^^^^^^^^^^^^^^^^

L'indexeur est livré pré-compilé pour Windows.

Télécharger la dernière version "https://github.com/alchemy-fr/Phraseanet-Indexer/blob/master/WIN32/Release_win32/",
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
~~~~~~~~~~~~~~~~~~~~~~~

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

Extension
*********

Le moteur de recherche Phraseanet est disponible par l'intermédiaire de
l'extension PHP "php_phrasea2".

Installation
^^^^^^^^^^^^

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
^^^^^^^^^^^^^^^^^^^^^^^^^

Après compilation, "sudo make install" va copier l'extension à l'emplacement des
extensions php.

Spécificités Windows
^^^^^^^^^^^^^^^^^^^^

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

    En cas d'erreur "... icu*.dll introuvable ...", télécharger les ICU
    libraries requises par l'extension "php_intl" et copier les différents
    fichiers "icu*.dll" dans le répertoire principal de PHP.

Sphinx-Search Engine
--------------------

SphinxSearch repose sur une technologie tierce qu'il est nécessaire d'installer.
Phraseanet requiert `SphinxSearch Engine`_ 2.0.6 ou supérieur.

Avantages
*********

Les principaux avantages de SphinxSearch Engine sont :

* la rapidité
* la scalabilité
* l'autocompletion

Configuration dans Phraseanet
*****************************

Après avoir installé SphinxSearch, Phraseanet doit être configuré.
Le paramétrage de Phraseanet pour SphinxSearch permet de générer un fichier
de configuration dédié à ce moteur de recherche.

Pour cela, consulter la documentation de configuration
:ref:`search-engine-service-configuration`.

Une fois cette configuration effectuée, dans un navigateur, se connecter à
l'interface admin. Un gestionnaire de configuration permet de générer un fichier
de configuration Sphinx.

.. note::

    Notez que la configuration générée par Phraseanet pour SphinxSearch est
    complète. Si le serveur SphinxSearch est partagé avec d'autres applications
    il faudra prendre soin d'exclure la partie *server* au pied du fichier
    de configuration.

Ce fichier peut être maintenant utilisé avec le serveur SphinxSearch
(généralement **/usr/local/etc/sphinx.conf**).
Redémarrer SphinxSearch pour appliquer la configuration.
En cas d'erreur avec SphinxSearch, consulter la `documentation SphinxSearch`_.
Les sections suivantes apportent des réponses à des questions fréquemment
posées.

Gestion de l'autocompletion
***************************

Pour que l'autocompletion fonctionne à la recherche, il faut générer les
propositions.

Pour cela il faut utiliser la commande :

.. code-block: bash

    bin/console sphinx:generate-suggestions

.. _documentation SphinxSearch: http://sphinxsearch.com/docs/manual-2.0.6.html
.. _SphinxSearch Engine: http://sphinxsearch.com/downloads/release/

