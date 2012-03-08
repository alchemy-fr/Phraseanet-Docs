Pré-requis
==========


Phraseanet est conçu pour fonctionner sur un système AMP dont la configuration
nécessite quelques besoins spécifiques ou dépendances.

Serveur HTTP
------------

L'un des serveurs au choix :

  * Nginx >= 1.0 (Recommandé) -- :doc:`configuration <Configuration/Nginx>`
  * ou Apache >= 2.2 -- :doc:`configuration <Configuration/Apache>`

Base de données
---------------

Phraseanet requiert un moteur InnoDB. Nous recommendons vivement MariaDB
comme remplacement à MySQL.

  * MariaDB >= 5.1

PHP
---

  * PHP >= 5.3.4 avec les extensions :
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
    * SimpleXML
    * sockets
    * xsl +zlib
    * mail
    * mcrypt
    * twig
    * intl
    * pdo
    * CURL
    * JSON
    * gettext


Spécifique Phraseanet
---------------------

* Extension php-phrasea

  Il est nécessaire d'installer l'extension php-phrasea pour utiliser Phraseanet.

  Téléchargez et installez la :

  .. code-block:: bash

    git clone https://github.com/alchemy-fr/Phraseanet-Extension php-phrasea
    cd php-phrasea
    ./configure
    make
    make install

* Phraseanet Indexer

  Indexation texte-plein / thésaurus Phraseanet Indexer.
  C’est notre moteur d’indexation, il est nécessaire autant pour l’indexation
  texte-plein que pour l’indexation thésaurus.

  .. code-block:: bash

    git clone https://github.com/alchemy-fr/Phraseanet-Indexer phraseanet_indexer
    cd phraseanet_indexer
    aclocal
    automake -a
    autoconf
    ./configure
    make
    make install


Locales
-------

Sur les systèmes Unix/GNU-Linux, il sera nécessaire d’installer les packs
locales adéquats pour pouvoir bénéficier des traductions de messages via la lib
gettext.


Exemple pour debian :

  .. code-block:: bash

    dpkg-reconfigure locales


Exemple pour ubuntu :

 * Activation des locales désirées via le fichier /etc/locale.gen
 * execution de la commande /usr/sbin/locale-gen


  .. note::

    Les locales à installer doivent être les locales UTF-8.


Programmes Externes
-------------------

Pour calculer des sous-résolutions dans le navigateur, Phraseanet s'appuie sur
des programmes externes suivant :

  * Imagemagick >= 6.3.7
    Extraction d'imagettes et de preview à partir d'images bitmap.
    Téléchargement
    License

  * Ufraw
    Utilisation via Imagemagick ; Extraction d'imagettes et de preview à partir
    de fichiers RAW.

  * FFmpeg, Mplayer
    Extraction d'imagettes, de preview et calcul de videos au format web à
    partir de vidéos.

  * Ghostscript >= 9
    Extraction d'imagettes, de preview à partir de fichiers vectoriels et
    postscript.

  * XPDF
    Extraction du text PDF pour son indexation

  * SWFTools
    Extraction de sous resolutions pour le format flash

  * Unoconv
    Extraction d'imagettes et de preview sur les documents office.

  * MP4Box
    Déplacement des métadonnées des fichiers h264 en début de fichier en vue de
    leur utilisation en pseudo-stream (voir documentation spécifique)



Clefs d'APIs (optionnelles)
---------------------------

  * Youtube
  * Dailymotion
  * FlickR
  * Recpatcha


