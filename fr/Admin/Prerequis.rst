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

Phraseanet requiert un moteur de stockage de type InnoDB. Sans être une
obligation, l’équipe des développeurs de Phraseanet recommandent fortement
l’usage du SGBD MariaDB en remplacement de MySQL.

* MariaDB >= 5.1

PHP
---

* Phraseanet requiert une version de PHP supérieure ou égale à 5.3.4 avec les
  extensions suivantes :

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
    * mail
    * mcrypt
    * twig (https://github.com/fabpot/Twig/tree/master/ext/)
    * intl
    * pdo
    * CURL
    * JSON
    * gettext

Spécifique pour Phraseanet
--------------------------

.. _Installer-Extension:

* **Extension php-phrasea**

  Il est nécessaire d'installer l'extension php-phrasea pour utiliser
  Phraseanet et son moteur d'indexation par défaut Phrasea Engine.

  A télécharger et puis à installer de la façon suivante :

.. code-block:: bash

    git clone https://github.com/alchemy-fr/Phraseanet-Extension php-phrasea
    cd php-phrasea
    phpize
    ./configure
    make
    make install

.. note::

  Sous Linux et OSX, le processus d'installation copie l'extension à
  l'emplacement des extensions PHP.

.. _Installer-Indexeur:

* **Phraseanet Indexer**

  C’est le moteur d’indexation natif de Phraseanet. Il est utilisé pour
  l’indexation "texte-plein", "valeur" et "thésaurus.

  A télécharger et puis à installer de la façon suivante :

.. code-block:: bash

    git clone https://github.com/alchemy-fr/Phraseanet-Indexer phraseanet_indexer
    cd phraseanet_indexer
    autoreconf --force --install
    ./configure
    make
    sudo make install

.. note::

  Sous Linux et OSX, le processus d'installation copie l'indexeur à
  l'emplacement des binaires.

**Sous Windows**, les installations de l'extension et de l'indexeur sont
différentes.

.. seealso::

  :ref:`Se reporter au paragraphe consacré au moteur de recherche Phrasea Engine<Phrasea-Engine>`.

Locales
-------

Sur les systèmes Unix/GNU-Linux, il est nécessaire d’installer les packs
locales adéquats pour pouvoir bénéficier des traductions de messages via la
librairie gettext.

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
des programmes externes suivants :

* Imagemagick >= 6.3.7
  Extraction d'imagettes et de preview à partir d'images bitmap.
  Téléchargement
  License

* Ufraw
  Utilisation via Imagemagick ; Extraction d'imagettes et de previews à partir
  de fichiers RAW.

* FFmpeg <= 0.8, Mplayer
  Extraction d'imagettes, de preview et calcul de vidéos au format web à
  partir de vidéos.

* Ghostscript >= 9
  Extraction d'imagettes, de preview à partir de fichiers vectoriels et
  postscript.

* XPDF
  Extraction du text PDF pour son indexation.

* SWFTools
  Extraction de sous resolutions pour le format flash.

* Unoconv
  Extraction d'imagettes et de preview sur les documents office.

* MP4Box
  Déplacement des métadonnées des fichiers h264 en début de fichier en vue de
  leur utilisation en pseudo-stream (voir documentation spécifique).

Clefs d'APIs (optionnelles)
---------------------------

* Youtube
* Dailymotion
* FlickR
* Recpatcha
