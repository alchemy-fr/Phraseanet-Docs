Phraseanet-Extension
====================

The Phraseanet search engine is available with the PHP extension "php_phrasea2".

Install
-------

After build and install of "Phraseanet-Extension" (see linux, OSX and Windws
specifics), check the requested extensions with php -m

.. code-block:: none

    [PHP Modules]
    ...
    phrasea2
    ...

Restart the webserver.

Linux and OSX specifics
-----------------------

After build, "sudo make install" will copy the extension into directory of php
extensions.

Windows specifics
-----------------

The extension is pre-builded for Windows.

Download the extension matching your version of PHP
(ex. "https://github.com/alchemy-fr/Phraseanet-Extension/tree/master/_WIN32%20(visual%20C++%202008)/Release_TS_php-5.4.0")
, get the last version using the version number (for ex.
"php_phrasea2_UTF-8_1.20.1.0.dll").

Rename the file as "php_phrasea2.dll" and copy it into the "ext" directory of
PHP (usually "C:\\Program Files\\PHP\\ext" if PHP was installed with default
settings).

Activate the extension into php.ini :

.. code-block:: none

    [PHP_PHRASEA]
    extension=php_phrasea2.dll

.. warning::

    In case of error "... icu*.dll not found ...", download the ICU library
    files "icu*.dll" requested by the extension "php_intl", and copy the various
    files into the main directory of PHP.
