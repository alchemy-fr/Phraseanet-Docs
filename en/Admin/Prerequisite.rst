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

Phraseanet requires an InnoDB storage engine. MySQL, MariaDB or Percona can be
used for this.

* MySQL >= 5.5

** Important **: Disable the strict mode (please refer to the documentation
  of the implemented DBMS).

PHP
---

* Phraseanet requires PHP version 5.5.x (greater than 5.5.0), 5.6.x or 7.0.x.

  **Please note**: PHP versions 7.1.0 or greater are not suitable at the moment.

  **Following extensions must be enable**:

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
    * xsl +zlib
    * mcrypt
    * twig (https://github.com/fabpot/Twig/tree/master/ext/)
    * intl
    * pdo
    * CURL
    * JSON
    * gettext
    * amqp (if you plan to use a Parade front office)
    * ZeroMQ (ZMQ)

.. _Installer-Elasticsearch:

Elasticsearch
-------------

Phraseanet 4.0 builds on the ElasticSearch engine with the following
specifications:

    * Elasticsearch version 2.1, 2.2, 2.3 or 2.4 (mandatory)
    * `Analysis-icu`_ plugin corresponding to the used Elasticsearcher engine
      release

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

* Ufraw
  ImageMagick deleagtion for RAW images

* FFmpeg from version 1.2.12 "Magic" to 2.0.7 "Nameless" (Tested versions)
  Previews and Thumbnails extraction from videos and audios.

  .. note::

      The following audiovideo codecs are mandatory for proper application:

      * libfaac
      * libmp3lame
      * libtheora
      * libvorbis
      * libx264
      * libopencore-amrnb
      * libopencore-amrwb

      Suggested compiler options are:

      .. code-block:: bash

          /configure --enable-gpl \
            --enable-nonfree \
            --enable-libfaac \
            --enable-libgsm \
            --enable-libmp3lame \
            --enable-libtheora \
            --enable-libvorbis \
            --enable-libx264 \
            --enable-libxvid \
            --enable-zlib \
            --enable-postproc \
            --enable-swscale \
            --enable-pthreads \
            --enable-x11grab \
            --enable-libdc1394 \
            --enable-version3 \
            --enable-libopencore-amrnb \
            --enable-libopencore-amrwb

* Ghostscript
  Previews and thumbnails extraction from graphix vectors and postscript.

* XPDF
  Text extraction from PDFs.

* SWFTools
  Previews and thumbnails extraction from Adobe Flash files.

* Unoconv >= 6
  Preview and thumbnails extraction from office documents.

* MP4Box
  Preview extraction from videos.

* RabbitMQ
  Message broker using AMQP (Advanced Message Queuing Protocol).

API keys (optional)
--------------------

* Youtube
* Dailymotion
* FlickR
* Recpatcha

.. _Analysis-icu: https://github.com/elastic/elasticsearch-analysis-icu
