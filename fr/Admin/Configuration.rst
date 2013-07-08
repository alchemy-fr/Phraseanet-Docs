Configuration
=============

.. topic:: L'essentiel

    La configuration de Phraseanet se fait via le fichier
    `config/configuration.yml`. A chaque mise à jour de celle-ci, il faut
    la recompiler via la commande `bin/console compile:configuration`.

La configuration de Phraseanet est écrite dans un fichier
`config/configuration.yml` qui est automatiquement généré à l'installation.

Ce fichier est au format `YAML`_, qui a pour intérêt d'être très lisible.
Pour des raisons de performance, et notamment de cache opcode, la configuration
est compilée.

Il faudra la recompiler après une mise à jour.

.. _configuration-compilation:

Compilation
-----------

La compilation de la configuration est très facile et rapide à éxecuter. Il faut
utiliser la commande `bin/console compile:configuration`.

.. code-block:: none

    bin/console compile:configuration

.. _configuration:

Configuration.yml
-----------------

Voici un exemple de fichier de configuration commenté

.. code-block:: yaml

    main:
        servername: 'http://phrasea.example.com/'  # (string)  L'URL à partir de laquelle sera accessible Phraseanet

        maintenance: false                         # (boolean) Activation du mode maintenance

        database:                                  # (array)   Configuration du serveur de base de donnée
            host: 'sql-host'                       # (string)  Adresse du serveur de base de donnée
            port: 3306                             # (integer) Port du serveur de base de donnée
            user: 'sql-user'                       # (string)  Nom d'utilisateur du serveur de base de donnée
            password: 'sql-password'               # (string)  Mot de passe du serveur de base de donnée
            dbname: ab_phraseanet                  # (string)  Nom de la base de donnée
            driver: pdo_mysql                      # (string)  Driver de base de donnée
            charset: UTF8                          # (string)  Encodage de la connection au serveur de base de donnée

        database-test:                             # (array)   Configuration pour les tests (développeurs uniquement)
            driver: pdo_sqlite
            path: '/tmp/db.sqlite'
            charset: UTF8

        api-timers: true                           # (boolean) Ajout de timers aux réponses de l'API (développeurs uniquement)

        cache:                                     # (array)   Configuration du service de cache
            type: MemcacheCache                    # (string)  Nom de l'adapter du service de cache
            options:                               # (array)   Options de configuration du service de cache
                host: localhost                    # (string)  Addresse du serveur de cache
                port: 11211                        # (integer) Port du serveur de cache

        opcodecache:                               # (array)   Configuration du service de cache opcode
            type: ArrayCache                       # (string)  Nom de l'adapter du service de cache
            options: []                            # (array)   Options de configuration du service de cache

        search-engine:                             # (array)   Configuration du service de moteur de recherche
            type: Alchemy\Phrasea\SearchEngine\Phrasea\PhraseaEngine  # (string) Nom du service de moteur de recherche (FQCN)
            options: []                            # (array)   Options de configuration du service de moteur de recherche

    trusted-proxies: []                            # (array)   Configuration des proxies de confiance

    debugger:                                      # (array)   Configuration du debugger (développeurs uniquement)
        allowed-ips: []                            # (array)   Adresses IP autorisées à acceder au debugger.

    binaries:                                      # (array)   Configuration des executables externes
        ghostscript_binary: null                   # (string)  Chemin vers l'executable Ghostscript, null pour autodetecter (gs)
        php_binary: null                           # (string)  Chemin vers l'executable PHP, null pour autodetecter (php)
        swf_extract_binary: null                   # (string)  Chemin vers l'executable Pdf2Swf, null pour autodetecter (pdf2swf)
        pdf2swf_binary: null                       # (string)  Chemin vers l'executable SwfExtract, null pour autodetecter (swfextract)
        swf_render_binary: null                    # (string)  Chemin vers l'executable SwfRender, null pour autodetecter (swfrender)
        unoconv_binary: null                       # (string)  Chemin vers l'executable Unoconv, null pour autodetecter (unoconv)
        ffmpeg_binary: null                        # (string)  Chemin vers l'executable FFMpeg, null pour autodetecter (ffmpeg, avconv)
        ffprobe_binary: null                       # (string)  Chemin vers l'executable FFProbe, null pour autodetecter (ffprobe, avprobe)
        mp4box_binary: null                        # (string)  Chemin vers l'executable MP4Box, null pour autodetecter (MP4Box)
        pdftotext_binary: null                     # (string)  Chemin vers l'executable PdfToText, null pour autodetecter (pdftotext)
        phraseanet_indexer: null                   # (string)  Chemin vers l'executable Phraseanet Indexer, null pour autodetecter (phraseanet_indexer)
        ffmpeg_timeout: 3600                       # (integer) Timeout pour FFMpeg
        ffprobe_timeout: 60                        # (integer) Timeout pour FFProbe
        gs_timeout: 60                             # (integer) Timeout pour Ghostscript
        mp4box_timeout: 60                         # (integer) Timeout pour MP4Box
        swftools_timeout: 60                       # (integer) Timeout pour SwfTools (swfrender, swfextract)
        unoconv_timeout: 60                        # (integer) Timeout pour Unoconv

    border-manager:                                # (array)   Configuration du service douanes
        enabled: true                              # (boolean) Activation du service de douane
        checkers:                                  # (array)   Liste de point de contrôle

            -                                      # (array)   Verification de doublonnage par somme de côntrole
                type: Checker\Sha256
                enabled: true
            -
                type: Checker\UUID                 # (array)   Verification de doublonnage par métadonnée UUID
                enabled: true
            -
                type: Checker\Colorspace           # (array)   Verification de colorspace
                enabled: false
                options:
                    colorspaces: [cmyk, grayscale, rgb]
            -
                type: Checker\Dimension            # (array)   Verification de dimensions
                enabled: false
                options:
                    width: 80
                    height: 160
            -
                type: Checker\Extension            # (array)   Verification d'extension
                enabled: false
                options:
                    extensions: [jpg, jpeg, bmp, tif, gif, png, pdf, doc, odt, mpg, mpeg, mov, avi, xls, flv, mp3, mp2]
            -
                type: Checker\Filename             # (array)   Verification de doublonnage par nom de fichier
                enabled: false
                options:
                    sensitive: true
            -
                type: Checker\MediaType            # (array)   Vérification par type media
                enabled: false
                options:
                    mediatypes: [Audio, Document, Flash, Image, Video]

    authentication:                                # (array)   Configuration de l'authentification

        auto-create:                               # (array)   Configuration de la création de compte automatique
            enabled: false                         # (boolean) Activer la création de compte automatique
            templates: {  }                        # (array)   Nom ou id des modèles à appliquer lors de la création automatique de comptes

        captcha:                                   # (array)   Configuration du service de captchas
            enabled: true                          # (boolean) Activation du service de captcha
            trials-before-failure: 9               # (integer) Nombre d'essais avant capctcha

        providers:                                 # (array)   Configuration des fournisseurs d'authentification tiers

            facebook:                              # (array)   Configuration de l'authentification via Facebook
                enabled: false                     # (boolean) Activation du fournisseur
                options:
                    app-id: ''                     # (string)  Facebook application id
                    secret: ''                     # (string)  Facebook application secret

            twitter:                               # (array)   Configuration de l'authentification via Twitter
                enabled: false                     # (boolean) Activation du fournisseur
                options:
                    consumer-key: ''               # (string)  Twitter consumer key
                    consumer-secret: ''            # (string)  Twitter consumer secret

            google-plus:                           # (array)   Configuration de l'authentification via Google Plus
                enabled: false                     # (boolean) Activation du fournisseur
                options:
                    client-id: ''                  # (string)  Google Plus client-id
                    client-secret: ''              # (string)  Google Plus client-secret

            github:                                # (array)   Configuration de l'authentification via GitHub
                enabled: false                     # (boolean) Activation du fournisseur
                options:
                    client-id: ''                  # (string)  GitHub client-id
                    client-secret: ''              # (string)  GitHub client-secret

            viadeo:                                # (array)   Configuration de l'authentification via Viadeo
                enabled: false                     # (boolean) Activation du fournisseur
                options:
                    client-id: ''                  # (string)  Viadeo client-id
                    client-secret: ''              # (string)  Viadeo client-secret

            linkedin:                              # (array)   Configuration de l'authentification via LinkedIn
                enabled: false                     # (boolean) Activation du fournisseur
                options:
                    client-id: ''                  # (string)  LinkedIn client-id
                    client-secret: ''              # (string)  LinkedIn client-secret

    registration-fields:                           # (array)   Configuration des champs disponible requis à l'inscription

        -
            name: company
            required: false                        # (boolean) Le champ est proposé, mais pas obligatoire
        -
            name: firstname
            required: true                         # (boolean) Le champ est proposé et obligatoire

    xsendfile:                                     # (array)   Configuration Sendfile (Nginx) / XSendFile (Apache)

        enabled: false                             # (boolean) Activation de la prise en charge SendFile/XSendFIle
        type: nginx                                # (string)  Type XSendFile (`nginx` ou `apache`)
        mapping: []                                # (array)   Mapping des dossiers (voir configuration for :ref:`Apache<apache-xsendfile>` and :ref:`Nginx<nginx-sendfile>`)

    plugins: []                                    # (array)   Configuration des plugins (Ajouter lien vers do dédiée)


Services de Cache
*****************

Les services de cache **cache** et **opcode-cache** peuvent être configuré avec
les adapteurs suivants :

+----------------+----------------------+------------------------------------------------------+------------+
|  Nom           | Service              |  Description                                         | Options    |
+================+======================+======================================================+============+
| MemcacheCache  | cache                | Serveur de cache utilisant l'extension PHP Memcache  | host, port |
+----------------+----------------------+------------------------------------------------------+------------+
| MemcachedCache | cache                | Serveur de cache utilisant l'extension PHP Memcached | host, port |
+----------------+----------------------+------------------------------------------------------+------------+
| RedisCache     | Cache                | Serveur de cache utilisant l'extension PHP redis     | host, port |
+----------------+----------------------+------------------------------------------------------+------------+
| ApcCache       | opcode-cache         | Cache opcode utilisant PHP APC                       |            |
+----------------+----------------------+------------------------------------------------------+------------+
| XcacheCache    | opcode-cache         | Cache opcode utilisant PHP Xcache                    |            |
+----------------+----------------------+------------------------------------------------------+------------+
| WinCacheCache  | opcode-cache         | Cache opcode utilisant PHP WinCache                  |            |
+----------------+----------------------+------------------------------------------------------+------------+
| ArrayCache     | cache | opcode-cache | Cache désactivé                                      |            |
+----------------+----------------------+------------------------------------------------------+------------+

.. _search-engine-configuration:

Service de moteur de recherche
******************************

Deux services de moteurs de recherche sont disponibles : Phrasea engine et
SphinxSearch engine.

+--------------------------------------------------------------+------------------------------+
| Nom                                                          | Options                      |
+==============================================================+==============================+
| Alchemy\Phrasea\SearchEngine\Phrasea\PhraseaEngine           |                              |
+--------------------------------------------------------------+------------------------------+
| Alchemy\Phrasea\SearchEngine\SphinxSearch\SphinxSearchEngine | host, port, rt_host, rt_port |
+--------------------------------------------------------------+------------------------------+

Proxies de confiance
********************

Si Phraseanet est derrière un reverse-proxy, il faudra renseigner
l'adresse du reverse proxy pour les adresses IP des utilisateurs soient
reconnues.

.. code-block:: yaml

    trusted-proxies:
        192.168.27.15
        10.0.0.45

Champs optionnels à l'enregistrement
************************************

La section `registration-fields` permet de personnaliser les champs disponibles
à l'inscription ainsi que leur caractère obligatoire.

.. code-block:: yaml

    registration-fields:
        -
            name: company
            required: false
        -
            name: firstname
            required: true

+-----------+-------------+
| id        | Nom         |
+-----------+-------------+
| login     | Identifiant |
+-----------+-------------+
| gender    | Sexe        |
+-----------+-------------+
| firstname | Prénom      |
+-----------+-------------+
| lastname  | Nom         |
+-----------+-------------+
| address   | Adresse     |
+-----------+-------------+
| zipcode   | Code Postal |
+-----------+-------------+
| geonameid | Ville       |
+-----------+-------------+
| position  | Poste       |
+-----------+-------------+
| company   | Société     |
+-----------+-------------+
| job       | Activité    |
+-----------+-------------+
| tel       | Téléphone   |
+-----------+-------------+
| fax       | Fax         |
+-----------+-------------+

Configuration Sendfile / XSendFile
**********************************

La configuration xsendfile doit être manipulé à l'aide des outils en ligne de
commandes. Les documentations pour :ref:`Nginx<nginx-sendfile>` et
:ref:`Apache<apache-xsendfile>` sont disponibles.

Configuration des plugins
*************************

Les plugins se configurent aussi dans ce fichier. Se référer à la documentation
des plugins pour cette partie.

(Ajouter un lien vers la doc des plugins).

Configuration du service de douane
**********************************

Les points de vérification du service de douane sont configurable. Il est aussi
possible de créer son propre point de vérification.

+---------------------+------------------------------------------------------+-----------------------------------+
| Verification        |  Description                                         | Options                           |
+=====================+======================================================+===================================+
| Checker\Sha256      | Vérifie si le fichier n'est pas un doublon           |                                   |
|                     | En se basant sur la somme de controle "sha256"       |                                   |
+---------------------+------------------------------------------------------+-----------------------------------+
| Checker\UUID        | Vérifie si le fichier n'est pas un doublon           |                                   |
|                     | En se basant sur l'identifiant unique du fichier     |                                   |
+---------------------+------------------------------------------------------+-----------------------------------+
| Checker\Dimension   | Vérification sur les dimensions du fichier           | width  : largeur du fichier       |
|                     | (* si applicable)                                    | height : hauteur du fichier       |
+---------------------+------------------------------------------------------+-----------------------------------+
| Checker\Extension   | Vérification sur les extensions du fichiers          | extensions : les extensions       |
|                     |                                                      | de fichiers autorisées            |
+---------------------+------------------------------------------------------+-----------------------------------+
| Checker\Filename    | Vérifie si le fichier n'est pas un doublon           | sensitive : active la             |
|                     | En se basant sur son nom                             | sensibilité à la casse            |
+---------------------+------------------------------------------------------+-----------------------------------+
| Checker\MediaType   | Vérification sur le type du fichier (Audio, Video...)| mediatypes : les types de         |
|                     |                                                      | médias authorisés                 |
+---------------------+------------------------------------------------------+-----------------------------------+
| Checker\Colorspace  | Vérification sur l'espace de couleur du fichier      | colorspaces : les types d'espace  |
|                     | (* si applicable)                                    | colorimétrique authorisés         |
+---------------------+------------------------------------------------------+-----------------------------------+

Restriction sur collections
~~~~~~~~~~~~~~~~~~~~~~~~~~~

Il est possible de restreindre la portée d'un point de vérification sur un
ensemble de collection en fournissant une liste de base_id correspondant :

.. code-block:: yaml

    #services.yml
    Border:
        border_manager:
            type: Border\BorderManager
            options:
                enabled: true
                checkers:
                    -
                        type: Checker\Sha256
                        enabled: true
                        collections:
                            - 4
                            - 5

Restriction sur databoxes
~~~~~~~~~~~~~~~~~~~~~~~~~

La même restriction peut être faite au niveau des databoxes :

.. code-block:: yaml

    #services.yml
    Border:
        border_manager:
            type: Border\BorderManager
            options:
                enabled: true
                checkers:
                    -
                        type: Checker\Sha256
                        enabled: true
                        databoxes:
                            - 3
                            - 7

.. note::

    Il n'est pas possible de restreindre à la fois sur des databoxes et
    des collections.

Création d'un point de vérification
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Tous les points de vérifications sont déclarés dans le namespace
`Alchemy\\Phrasea\\Border\\Checker`. Il suffit de créer un nouvel objet dans ce
namespace. Cet objet doit implémenter l'interface
`Alchemy\\Phrasea\\Border\\Checker\\Checker`

Exemple de point de vérification qui filtre les documents sur leur données GPS :

.. code-block:: php

    <?php
    namespace Alchemy/Phrasea/Border/Checker;

    use Alchemy\Phrasea\Border\File;
    use Doctrine\ORM\EntityManager;
    use MediaVorus\Media\DefaultMedia as Media;

    class NorthPole implements Checker
    {
        private $options;

        public function __construct(Array $options)
        {
            $this->options = $options;
        }

        //Contrainte de validation, doit retourner un booleen
        public function check(EntityManager $em, File $file)
        {
            $media = $file->getMedia();

            if (null !== $latitude = $media->getLatitude() && null !== $ref = $media->getLatitudeRef()) {
                if($latitude > 60 && $ref == Media::GPSREF_LATITUDE_NORTH) {
                    return true;
                }
            }

            return false;
        }
    }

Déclaration du point de contrôle

.. code-block:: yaml

    border-manager:
        enabled: true
        checkers:
            -
                type: Checker\NorthPole
                enabled: true

.. _YAML: https://wikipedia.org/wiki/Yaml
