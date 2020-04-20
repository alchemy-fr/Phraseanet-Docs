Pré-requis
==========

Phraseanet est conçu pour fonctionner sur un système AMP dont la configuration
nécessite des besoins spécifiques et des dépendances.

Serveur HTTP
------------

L'un des serveurs au choix :

* Nginx >= 1.0 (Recommandé) -- :doc:`configuration <Configuration/Nginx>`
* ou Apache >= 2.2 -- :doc:`configuration <Configuration/Apache>`

Base de données
---------------

Phraseanet requiert un moteur de stockage de type InnoDB.

Les SGBD MySQL, MariaDB ou Percona fournissent ce service.

* MySQL >= 5.5

  **Important** : Désactiver le mode strict (se reporter à la documentation
  du SGBD).

PHP
---

* Phraseanet requiert une version de PHP 7.0.x.

  **Important** : Les versions 7.1.0 et suivantes sont exclues.

  **Les extensions suivantes doivent être installées** :

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
    * amqp (utilisé en cas d'utilisation d'une application Parade)
    * ZeroMQ (ZMQ)

Elasticsearch
-------------

.. _Installer-Elasticsearch:

Phraseanet 4.0 s'appuie sur le moteur Elasticsearch. Il est obligatoire
de l'utiliser en respectant les spécifications suivantes :

    * Version 2.1, 2.2, 2.3 ou 2.4 (obligatoire)
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

* Ufraw
  Utilisation via Imagemagick ; Extraction d'imagettes et de previews à partir
  de fichiers RAW.

* FFmpeg de 1.2.12 "Magic" à 2.0.7 "Nameless" (versions testées)
  Extraction d'imagettes, de preview et calcul de vidéos au format web à
  partir de vidéos.

  .. note::

      Les codecs suivants sont nécessaires au bon fonctionnement de
      l'application :

      * libfaac
      * libmp3lame
      * libtheora
      * libvorbis
      * libx264
      * libopencore-amrnb
      * libopencore-amrwb

      Les options de compilation conseillées sont les suivantes :

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
  Extraction d'imagettes, de preview à partir de fichiers vectoriels et
  postscript.

* XPDF
  Extraction du text PDF pour son indexation.

* SWFTools
  Extraction de sous resolutions pour le format flash.

* Unoconv >= 6
  Extraction d'imagettes et de preview sur les documents Office.

* MP4Box
  Déplacement des métadonnées des fichiers h264 en début de fichier en vue de
  leur utilisation en pseudo-stream (voir documentation spécifique).

* RabbitMQ
  Agent de messagerie utilisant AMQP (Advanced Message Queuing Protocol).


Clefs d'APIs (optionnelles)
---------------------------

* Youtube
* Dailymotion
* FlickR
* Recpatcha


.. _Analysis-icu: https://github.com/elastic/elasticsearch-analysis-icu
