Prerequisite
============

Phraseanet is supposed to work on an AMP system, which configuration has to
be checked.

.. note::

    For convenience, we strongly recommend that you :doc:`deploy Phraseanet with Docker <InstallDocker>`.

    Phraseanet Docker images are built on the
    `alchemyfr/phraseanet-base <https://github.com/alchemy-fr/phraseanet-base-images>`_
    base image (version 2.0.0: Debian 13 "Trixie", PHP 8.5 and all the third
    party programs listed below). Versions given on this page are the ones
    shipped by the Phraseanet 4.2 Docker stack.

HTTP Server
------------

One of these

* Nginx (Recommended, version 1.31 used by the Docker stack) -- :doc:`configuration <Configuration/Nginx>`
* or Apache >= 2.4 -- :doc:`configuration <Configuration/Apache>`

Database
--------

Phraseanet requires an InnoDB storage engine. MySQL, MariaDB or Percona can be
used for this.

* MariaDB >= 10.11 (version 10.11.11 used by the Docker stack)
* or MySQL 8.0

**Important**: Disable the strict mode (empty ``sql_mode``, please refer to
  the documentation of the implemented DBMS).

Message broker
--------------

Phraseanet requires a message broker like `RabbitMQ <https://www.rabbitmq.com>`_
(version 4.1 used by the Docker stack).

Cache and sessions
------------------

`Redis <https://redis.io>`_ is recommended for the application cache and
session storage (version 8.0 used by the Docker stack).

PHP
---

* Phraseanet 4.2 requires **PHP 8.5**.

  **Please note**: PHP 7.x and PHP 8.0 to 8.4 are not supported.

  **Following extensions must be enabled**:

    * amqp
    * bcmath
    * ctype
    * curl
    * dom
    * exif
    * fileinfo
    * ftp
    * gd
    * gettext
    * iconv
    * imagick
    * intl
    * ldap (if you use LDAP authentication)
    * mbstring
    * pcntl (unix)
    * pdo_mysql
    * redis
    * SimpleXML
    * sockets
    * xml
    * xsl
    * zip
    * ZeroMQ (zmq)

  .. note::

      The ZeroMQ (zmq) extension has no released version compatible with
      PHP 8.5: it must be built from the
      `php-zmq <https://github.com/zeromq/php-zmq>`_ sources (see the
      `base image Dockerfile <https://github.com/alchemy-fr/phraseanet-base-images>`_).

  The mcrypt and twig extensions are no longer required.

.. _Installer-Elasticsearch:

Elasticsearch
-------------

Phraseanet builds on the ElasticSearch engine with the following
specifications:

    * Elasticsearch version 2.4 (mandatory)
    * `Analysis-icu`_ plugin corresponding to the used Elasticsearch engine
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

* ImageMagick 7
  Previews and thumbnails generation from images.

* dcraw
  ImageMagick delegation for RAW images (replaces Ufraw).

* libheif
  ImageMagick delegation for HEIF / HEIC images.

* Inkscape and librsvg
  Previews and thumbnails generation from SVG files.

* FFmpeg 7.1 (tested version: 7.1.2)
  Previews and Thumbnails extraction from videos and audios.

  .. note::

      The following audiovideo codecs are mandatory for proper application:

      * libfdk_aac (replaces libfaac)
      * libmp3lame
      * libopus
      * libtheora
      * libvorbis
      * libvpx
      * libx264
      * libopencore-amrnb
      * libopencore-amrwb

      Suggested compiler options are:

      .. code-block:: bash

          ./configure --enable-gpl \
            --enable-nonfree \
            --enable-version3 \
            --enable-libfdk-aac \
            --enable-libgsm \
            --enable-libmp3lame \
            --enable-libtheora \
            --enable-libvorbis \
            --enable-libvpx \
            --enable-libfreetype \
            --enable-libopus \
            --enable-libx264 \
            --enable-libxvid \
            --enable-libdc1394 \
            --enable-libopencore-amrnb \
            --enable-libopencore-amrwb \
            --enable-zlib \
            --enable-postproc \
            --enable-swscale \
            --enable-pthreads

      Debian does not ship libfdk_aac in its ffmpeg package, so FFmpeg has to
      be built from sources.

* Ghostscript
  Previews and thumbnails extraction from graphix vectors and postscript.

* Poppler (pdftotext)
  Text extraction from PDFs (replaces XPDF).

* Unoconv 0.9.0 with LibreOffice
  Preview and thumbnails extraction from office documents.

* MP4Box (GPAC 2.4)
  Moves h264 metadata to the beginning of the file for pseudo-streaming.

  .. note::

      MP4Box is no longer packaged in Debian 13 "Trixie"; it is built from the
      GPAC sources. With GPAC >= 2.x the ``-inter 0.5`` option used by
      Phraseanet is rejected: the Phraseanet base image patches the GPAC 2.4
      sources.

* RabbitMQ
  Message broker using AMQP (Advanced Message Queuing Protocol).

API keys (optional)
--------------------

* `Google reCAPTCHA <https://developers.google.com/recaptcha/intro>`_
* `Mapbox <https://docs.mapbox.com/help/getting-started/access-tokens/>`_

.. _Analysis-icu: https://github.com/elastic/elasticsearch-analysis-icu
