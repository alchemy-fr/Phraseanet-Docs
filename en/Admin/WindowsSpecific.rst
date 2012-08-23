Windows Specific
================

The PHP extension "Phraseanet-Extension" and the program "Phraseanet-Indexer"
are available as already built for Windows.

.. note::

    Some versions (including fixes for previous versions of Phrasenet
    application) are available for download.

    For a fresh install of last version of application, download the last
    version of extension and indexer (check version numbers).

File version can be checked in "properties" tab.


Install of "Phraseanet-Indexer"
-------------------------------

Download "https://github.com/alchemy-fr/Phraseanet-Indexer/tree/master/WIN32/out/Release/bin/phraseanet_indexer.exe", and copy the program into a directory
(for ex. into "Progam Files\Phraseanet-Indexer\phraseanet_indexer.exe").

The indexer needs those libraries :

* libexpat.dll (http://sourceforge.net/projects/expat/files/expat_win32/2.0.1/expat-win32bin-2.0.1.exe/download), install
* iconv.dll (http://xmlsoft.org/sources/win32/iconv-1.9.2.win32.zip)
* libxml2.dll (http://xmlsoft.org/sources/win32/libxml2-2.7.8.win32.zip)
* zlib1.dll (http://xmlsoft.org/sources/win32/zlib-1.2.3.win32.zip)
* libmysql.dll (http://dev.mysql.com/downloads/mysql/ ; download Windows (x86, 32-bit), MSI Installer "mysql-5.5.21-win32.msi"), install

For compatibility reasons, it is recomanded to copy those dll into the program
directory (besides phraseanet_indexer.exe).

The indexer can be tested with '-?' option which displays help :

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


Install as a Windows service
****************************

Usually the indexer is executed using a Phraseanet task "Indexing".
With Windows the indexer can be installed as a service with 3 specific options :

.. code-block:: none

  --install : install the service "Phraseanet-Indexer"
  --remove : uninstall the service
  --run : run the indexer in command-line mode (to be used when running via a task)

ex :

.. code-block:: none

  C:\Phraseanet-Indexer\phraseanet_indexer.exe -h=localhost -P=3306 -b=ab_test
  -u=phuser -p=**** --socket=25200 --default-character-set=utf8 -o -n
  -d=0 --install

If the indexer is installed as a sevice, you can remove -or uncheck the
execution- of the "indexing task".



Logs
****

Events logging (masks set with '-d=N' option) is done using the Event observer
(Application file). The option '-n' (nolog) allows to log on screen.

.. note::
    A log mask set to "-d=64" (flush ops.) allows to control the indexer without
    overload the logs.


Install of "Phraseanet-Extension"
---------------------------------

Download the extension matching your version of PHP
(ex. "https://github.com/alchemy-fr/Phraseanet-Extension/tree/master/_WIN32%20(visual%20C++%202008)/Release_TS_php-5.4.0"), get the last version checking the
version number (for ex. "php_phrasea2_UTF-8_1.20.1.0.dll").

Rename the file as "php_phrasea2.dll" and copy it into the "ext" directory of
PHP (usually "C:\Program Files\PHP\ext" if PHP was installed with default
settings).

Activate the extension into "php.ini" file :

  .. code-block:: none

    [PHP_PHRASEA]
    extension=php_phrasea2.dll

Install / check the requested extensions with php -m

  .. code-block:: none

    [PHP Modules]
    ...
    phrasea2
    ...

.. warning::
    in case of error "... icu*.dll introuvable ...", download the ICU
    libraries requested by the extension "php_intl" and copy every "icu*.dll"
    files into the main directory of PHP.

Restart the web server.

