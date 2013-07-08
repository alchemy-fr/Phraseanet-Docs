Search Engine
=============

.. topic:: The essential

    Phraseanet is bundled with Phrasea engine as defailt search engine.
    Phrasea allows Phraseanet Thesaurus binding to search engine results.
    If Phraseanet Thésaurus is not activated, SphinxSearch can be enabled.
    This section explains advantages of both and how they should be setup.

.. warning::

    Search Engine settings should be done after install and should not be
    re-adjusted.

Phrasea Engine
--------------

Phrasea search engine is composed by an indexer and a PHP Phraseanet extension.
One of the biggest advantages of this engine is thesaurus support.

Phraseanet Indexer
******************

The indexer indexes the content of the databses published in a Phraseanet
application and allows searching into the captions of documents.

The indexer runs in background, it monitors databases to index (upcoming or
shutdown of databases) and maintains "full-text", "value" and "thesaurus"
indexes.

Install
^^^^^^^

The indexer is a command-line program, "phraseanet-indexer".

It can be ran in command-line, scheduled (cron, scheduled task...) or via the
Phraseanet "Task-Manager".

The indexer needs those libraries:

* libexpat
* iconv
* libxml2
* zlib1
* libmysql

After building from sources (see Windows specifics), copy the program in a
directory allowing excution.

Command-line options
^^^^^^^^^^^^^^^^^^^^

* --host: adress of the database
* --port: database port (usualy 3306 for MySQL)
* --base: name of the "application-box" database
* --user: SQL account for connection
* --password: password of connection account
* --default-character-set: charset of the connection
* --old: mandatory option!
    Those options selects the "application-box" (SQL database of the Phraseanet
    program) where databases ("data-boxes") to index are published.
* --socket: telnet port
    When running, the indexer can be stopped with Ctrl-C (or sending sigint signal
    under linux or OSX).
    The "socket" option allows to stop the indexer via telnet.
* --flush: flush indexes every 'n' records.
    To optimize speed, the indexer works on batches of records (default 50).
    If the amount of ram consumed is too high, this number can be decreased with the
    "flush" option.
* --clng: default language for candidates terms
    When indexing fields linked the a thesaurus, new terms are set as "candidates".
    The option "clng" allows to define the primary language to set for those terms.
* --debug: Type of generated logs.
* --optfile: read options from a file
    It can be useful to not display some options from the command-line (for example
    the password).
    The indexer can read options from a file (which must be located into the same
    directory as the program file).
* --quit: index and quit
    The indexer is supposed to run continuously.
    This option allows to index changed records and then quit.
* --help: print help
* --version: print version
    The "help" option will print information and default values for every option.
* --nolog: Write logs on console.
    To be checked, the indexer can log various kind of operations (xml ops, sql...).
    7 "classes" of messages can be filtered with 7 bits (mask) of the "debug" value.

Those logs are usualy sent to the system (syslog for linux or OSX, event-log for
Windows). The "nolog" option allows to send messages on screen.

.. note::

    A debug mask set to --debug=64 (flush ops.) allows control of indexer
    without overloading the logs.

examples
~~~~~~~~

The indexer can be checked with "-?" option which must print the help:

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

Example of reading options from a file "indexerargs.txt"

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

    # candidates default language
    --clng=fr

    # sql connections encoding
    --default-character-set=utf8

Running with the Task-Manager
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

The indexder can be executed by the "Indexer" task of the Phraseanet
Task-Manager.
Options can then be set via the gui of the task.

Linux and OSX specifics
^^^^^^^^^^^^^^^^^^^^^^^

After build, "sudo make install" will copy the program file into the "bin"
directory (for ex. /usr/local/bin).

Windows specifics
^^^^^^^^^^^^^^^^^

The indexer is pre-builded for Windows.

Download the last version "https://github.com/alchemy-fr/Phraseanet-Indexer/blob/master/WIN32/Release_win32/",
and copy the program file into a separate directory (for ex. into "Program
Files\\Phraseanet-Indexer\\phraseanet_indexer.exe").

.. note::

    Some files (fixing bugs for older versions of Phraseanet) are available for
    download.

For compatibility reasons and matching versions, it's recommended to copy the
dll files of requested libraries into the directory of the program file (beside
phraseanet_indexer.exe)

Those libraries can be downloaded from:

* libexpat.dll (http://sourceforge.net/projects/expat/files/expat_win32/2.0.1/expat-win32bin-2.0.1.exe/download),
  installer
* iconv.dll (http://xmlsoft.org/sources/win32/iconv-1.9.2.win32.zip)
* libxml2.dll (http://xmlsoft.org/sources/win32/libxml2-2.7.8.win32.zip)
* zlib1.dll (http://xmlsoft.org/sources/win32/zlib-1.2.3.win32.zip)
* libmysql.dll (http://dev.mysql.com/downloads/mysql/ ; download Windows (x86,
  32-bit), MSI Installer "mysql-5.5.21-win32.msi"), installer

Install as service
~~~~~~~~~~~~~~~~~~

Usualy the indexer is executed by the Phraseanet task "Indexer".
Under Windows, the indexer can also be installed as a service via 3 specific
options.

.. code-block:: none

    --install: install the service "Phraseanet-Indexer"
    --remove: uninstall the service
    --run: run the indexer as a program (mandatory to run via the task)

ex:

.. code-block:: none

    C:\Phraseanet-Indexer\phraseanet_indexer.exe -h=localhost -P=3306 -b=ab_test
    -u=phuser -p=**** --socket=25200 --default-character-set=utf8 -o -n
    -d=0 --install

If the indexer is executed as a Windows service, the "indexer task" can be
deleted (or not activated).

Phraseanet Extension
********************

The Phraseanet search engine is available with the PHP extension "php_phrasea2".

Install
^^^^^^^

After build and install of "Phraseanet-Extension" (see linux, OSX and Windws
specifics), check the requested extensions with php -m

.. code-block:: none

    [PHP Modules]
    ...
    phrasea2
    ...

Restart the webserver.

Linux and OSX specifics
^^^^^^^^^^^^^^^^^^^^^^^

After build, "sudo make install" will copy the extension into directory of php
extensions.

Windows specifics
^^^^^^^^^^^^^^^^^

The extension is pre-builded for Windows.

Download the extension matching your version of PHP
(ex. "https://github.com/alchemy-fr/Phraseanet-Extension/tree/master/_WIN32%20(visual%20C++%202008)/Release_TS_php-5.4.0")
, get the last version using the version number (for ex.
"php_phrasea2_UTF-8_1.20.1.0.dll").

Rename the file as "php_phrasea2.dll" and copy it into the "ext" directory of
PHP (usually "C:\\Program Files\\PHP\\ext" if PHP was installed with default
settings).

Activate the extension into php.ini:

.. code-block:: none

    [PHP_PHRASEA]
    extension=php_phrasea2.dll

.. warning::

    In case of error "... icu*.dll not found ...", download the ICU library
    files "icu*.dll" requested by the extension "php_intl", and copy the various
    files into the main directory of PHP.

Sphinx-Search Engine
--------------------

SphinxSearch engine is a third party technology that you have to install.
Phraseanet requires `SphinxSearch Engine`_ 2.0.6 or higher.

Advantages
**********

Main SphinxSearch advantages are :

* fast
* scalable
* supports autocompletion

Configuration inside Phraseanet
*******************************

After having installed SphinxSearch, Phraseanet must be configured to use it.
Phraseanet admin provides a tool to generate SphinxSearch configuration.

Pour cela, consulter la documentation de configuration
:ref:`search-engine-service-configuration`.

.. note::

    Please note that the generated configuration is a complete SphinxSearch
    configuration. If SphinxSearch is shared with other applications, **server**
    section at the end of the configuration should be removed.

This file can be used with SphinxSearch server (**/usr/local/etc/sphinx.conf**).
Restart SphinxSearch pour appliquer la configuration.
In case of failure, please find `SphinxSearch documentation`_.

Please also consider the following FAQ:

Autocompletion
**************

Propositions have to be generated to have the benefit of autocompletion.
Use the command to do so:

.. code-block: none

    bin/console sphinx:generate-suggestions

.. _SphinxSearch documentation: http://sphinxsearch.com/docs/manual-2.0.6.html
.. _SphinxSearch Engine: http://sphinxsearch.com/downloads/release/

