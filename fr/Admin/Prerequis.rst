Pré-requis
==========

Phraseanet est conçu pour fonctionner sur un système AMP dont la configuration
nécessite des besoins spécifiques et des dépendances.

.. note::

    Pour plus de facilité, nous vous recommandons fortement de :doc:`déployer Phraseanet avec Docker <InstallationDocker>`.

    Les images Docker de Phraseanet reposent sur l'image de base
    `alchemyfr/phraseanet-base <https://github.com/alchemy-fr/phraseanet-base-images>`_
    (version 2.0.0 : Debian 13 "Trixie", PHP 8.5 et l'ensemble des programmes
    externes décrits ci-dessous). Les versions indiquées dans cette page sont
    celles fournies par la stack Docker de Phraseanet 4.2.

Serveur HTTP
------------

L'un des serveurs au choix :

* Nginx (Recommandé, version 1.31 utilisée par la stack Docker) -- :doc:`configuration <Configuration/Nginx>`
* ou Apache >= 2.4 -- :doc:`configuration <Configuration/Apache>`

Base de données
---------------

Phraseanet requiert un moteur de stockage de type InnoDB.

Les SGBD MySQL, MariaDB ou Percona fournissent ce service.

* MariaDB >= 10.11 (version 10.11.11 utilisée par la stack Docker)
* ou MySQL 8.0

  **Important** : Désactiver le mode strict (``sql_mode`` vide, se reporter à
  la documentation du SGBD).

Agent de messages
-----------------

Phraseanet requiert un agent de messages type `RabbitMQ <https://www.rabbitmq.com>`_
(version 4.1 utilisée par la stack Docker).

Cache et sessions
-----------------

`Redis <https://redis.io>`_ est recommandé pour le cache applicatif et le
stockage des sessions (version 8.0 utilisée par la stack Docker).

PHP
---

* Phraseanet 4.2 requiert **PHP 8.5**.

  **Important** : Les versions PHP 7.x et PHP 8.0 à 8.4 ne sont pas supportées.

  **Les extensions suivantes doivent être installées** :

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
    * ldap (utilisé en cas d'authentification LDAP)
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

      L'extension ZeroMQ (zmq) ne dispose pas de version publiée compatible
      avec PHP 8.5 : elle doit être compilée depuis les sources de
      `php-zmq <https://github.com/zeromq/php-zmq>`_ (voir le
      `Dockerfile de l'image de base <https://github.com/alchemy-fr/phraseanet-base-images>`_).

  Les extensions mcrypt et twig ne sont plus nécessaires.

Elasticsearch
-------------

.. _Installer-Elasticsearch:

Phraseanet s'appuie sur le moteur Elasticsearch. Il est obligatoire
de l'utiliser en respectant les spécifications suivantes :

    * Version 2.4 (obligatoire)
    * Plugins `Analysis-icu`_ correspondant à la version Elasticsearch utilisée


Locales
-------

Sur les systèmes Unix/GNU-Linux, il est nécessaire d’installer les packs
locales adéquats pour pouvoir bénéficier des traductions de messages via la
librairie gettext.

Exemple pour debian :

.. code-block:: bash

    dpkg-reconfigure locales

Exemple pour Ubuntu :

* Activation des locales désirées via le fichier /etc/locale.gen
* execution de la commande /usr/sbin/locale-gen

.. note::

    Les locales à installer doivent être les locales UTF-8.

Programmes Externes
-------------------

Pour la génération de fichiers de sous-résolutions, Phraseanet s'appuie sur
des programmes externes selon la nature des documents :

* ImageMagick 7
  Génération d'imagettes et de previews à partir des images.

* dcraw
  Utilisation via ImageMagick ; extraction d'imagettes et de previews à partir
  de fichiers RAW (remplace Ufraw).

* libheif
  Utilisation via ImageMagick ; prise en charge des fichiers HEIF / HEIC.

* Inkscape et librsvg
  Génération d'imagettes et de previews à partir de fichiers SVG.

* FFmpeg 7.1 (version testée : 7.1.2)
  Extraction d'imagettes, de preview et calcul de vidéos au format web à
  partir de vidéos.

  .. note::

      Les codecs suivants sont nécessaires au bon fonctionnement de
      l'application :

      * libfdk_aac (remplace libfaac)
      * libmp3lame
      * libopus
      * libtheora
      * libvorbis
      * libvpx
      * libx264
      * libopencore-amrnb
      * libopencore-amrwb

      Les options de compilation conseillées sont les suivantes :

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

      La distribution Debian ne fournit pas libfdk_aac dans son paquet ffmpeg :
      FFmpeg doit donc être compilé depuis les sources.

* Ghostscript
  Extraction d'imagettes, de preview à partir de fichiers vectoriels et
  postscript.

* Poppler (pdftotext)
  Extraction du texte PDF pour son indexation (remplace XPDF).

* Unoconv 0.9.0 avec LibreOffice
  Extraction d'imagettes et de preview sur les documents Office.

* MP4Box (GPAC 2.4)
  Déplacement des métadonnées des fichiers h264 en début de fichier en vue de
  leur utilisation en pseudo-stream (voir documentation spécifique).

  .. note::

      MP4Box n'est plus packagé dans Debian 13 "Trixie" ; il est compilé depuis
      les sources de GPAC. Avec GPAC >= 2.x, l'option ``-inter 0.5`` utilisée
      par Phraseanet est rejetée : l'image de base Phraseanet applique un
      correctif aux sources de GPAC 2.4.

* RabbitMQ
  Agent de messagerie utilisant AMQP (Advanced Message Queuing Protocol).


Clefs d'APIs (optionnelles)
---------------------------

* `Google reCAPTCHA <https://developers.google.com/recaptcha/intro>`_
* `Mapbox <https://docs.mapbox.com/help/getting-started/access-tokens/>`_


.. _Analysis-icu: https://github.com/elastic/elasticsearch-analysis-icu
