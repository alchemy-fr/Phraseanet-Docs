Prerequisite
============

Phraseanet is supposed to work on an AMP system, which configuration has to
be checked.

HTTP Server
------------

One of these

* Nginx >= 1.0 (Recommanded) -- :doc:`configuration <Configuration/Nginx>`
* or Apache >= 2.2 -- :doc:`configuration <Configuration/Apache>`

Database
--------

Phraseanet requires an InnoDB storage engine. We strongly recommend MariaDB as
a replacement for MySQL.

* MariaDB >= 5.1

PHP
---

* PHP >= 5.3.4 with:

    * Dom
    * exif
    * ftp
    * gd2
    * hash
    * iconv
    * xml
    * mbstring
    * mysql
    * pcre
    * pcntl (unix)
    * SimpleXML
    * sockets
    * xsl
    * zlib
    * mail
    * mcrypt
    * pdo
    * CURL
    * JSON
    * gettext
    * twig (https://github.com/fabpot/Twig/tree/master/ext/)
    * Intl

Phraseanet Specific
-------------------

* PHP-phrasea Extension

  You have to install PHP-Phrasea to use Phraseanet.

  Download and Install:

.. code-block:: bash

    git clone https://github.com/alchemy-fr/Phraseanet-Extension php-phrasea
    cd php-phrasea
    phpize
    ./configure
    make
    make install

* Phraseanet Indexer

  It is our Index engine. It is required for thesaurus and full-text indexation.

.. code-block:: bash

    git clone https://github.com/alchemy-fr/Phraseanet-Indexer phraseanet_indexer
    cd phraseanet_indexer
    autoreconf --force --install
    ./configure
    make
    sudo make install

Locales
-------

On Unix / GNU-Linux systems, it is necessary to enable locales to use
Phraseanet in your languages.

Debian example:

.. code-block:: bash

    dpkg-reconfigure locales

Ubuntu example:

* Activate via /etc/locale.gen
* Execute /usr/sbin/locale-gen

.. note::

    Locales must be in UTF-8.

Third Party Programs
--------------------

To generate subviews, Phraseanet uses third party programs, depending
on their type

* Imagemagick >= 6.3.7
  Thumbnails and previews extraction from bitmap.

* Ufraw
  ImageMagick deleagtion for RAW images

* FFmpeg <= 0.8, Mplayer
  Previews and Thumbnails extraction from videos and audios.

* Ghostscript >= 9
  Previews and thumbnails extraction from graphix vectors and postscript.

* XPDF
  Text extraction from PDFs.

* SWFTools
  Previews and thumbnails extraction from Adobe Flash files.

* Exiftool
  RDF metadatas extraction.

* Unoconv
  Preview and thumbnails extraction from office documents.

* MP4Box
  Preview extraction from videos.

API keys (optional)
--------------------

* Youtube
* Dailymotion
* FlickR
* Recpatcha
