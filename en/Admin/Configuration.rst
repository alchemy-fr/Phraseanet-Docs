Configuration
=============

.. topic:: The essential

    Phraseanet configuration is stored in `config/configuration.yml`.
    After any update, it must be recompiled with
    `bin/console compile:configuration` command.

Phraseanet configuration is stored in `config/configuration.yml` that is
automatically generated during install.

This file is in `YAML`_ format. For performance reasons, and use opcode cache,
confguration is compiled.

It must be recompiled after any update.

.. _configuration-compilation:

Compilation
-----------

Configuration compilation is very easy and fast to execute.
`bin/console compile:configuration` should be used.

.. code-block:: none

    bin/console compile:configuration

.. _configuration:

Configuration.yml
-----------------

Here is a commented configuration file

.. code-block:: yaml

    main:
        servername: 'http://phrasea.example.com/'  # (string)  L'URL à partir de laquelle sera accessible Phraseanet

        maintenance: false                         # (boolean) Activation du mode maintenance

        languages: ['fr_FR', 'de_DE']              # (array)   Un tableau de code de langues actives. Toutes les langues sont activées si le tableau est vide

        database:                                  # (array)   Configuration du serveur de base de données
            host: 'sql-host'                       # (string)  Adresse du serveur de base de données
            port: 3306                             # (integer) Port du serveur de base de données
            user: 'sql-user'                       # (string)  Nom d'utilisateur du serveur de base de données
            password: 'sql-password'               # (string)  Mot de passe du serveur de base de données
            dbname: ab_phraseanet                  # (string)  Nom de la base de données
            driver: pdo_mysql                      # (string)  Driver de base de données
            charset: UTF8                          # (string)  Encodage de la connection au serveur de base de données

        session:                                   # (array)   Réglage de la gestion des sessions
            type: 'file'                           # (string)  Nom du gestionnaire de sessions
            options: []                            # (array)   Options du gestionnaire de sessions
            ttl: 86400                             # (string)  Duree de vie de la session

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

        task-manager:
            logger:
                level: INFO                        # (string)  Le niveau de log minimum
                max-files: 10                      # (integer) Le nombre maximum de fichiers de log à conserver
                enabled: true                      # (boolean) Activer les logs dans le système de fichier

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
        extension-mapping:                         # (array)   Un tableau de correspondance extension vers type mime personnalisé
            mpeg: video/mpeg
        checkers:                                  # (array)   Liste de points de contrôle

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
            trials-before-display: 9               # (integer) Nombre d'essais avant capctcha

        providers:                                 # (array)   Configuration des fournisseurs d'authentification tiers

            facebook:                              # (array)   Configuration de l'authentification via Facebook
                enabled: false                     # (boolean) Activation du fournisseur
                options:
                    app-id: ''                     # (string)  Identifiant (id) Facebook
                    secret: ''                     # (string)  Secret (secret) Facebook

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

    user-settings:                                 # (array)   Un tableau de valeur par défaut pour les préférences utilisateurs
        images_per_page: 60
        images_size: 200

    plugins: []                                    # (array)   Configuration des :doc:`plugins <Plugins>`.

    session:
        idle: 3600                                 # (integer) Durée d'inactivité (en secondes) avant déconnexion
        lifetime: 604800                           # (integer) Durée maximum de session (en secondes)

    api_cors:
        enabled: false                             # (boolean) Activation du CORS sur l'API.
        allow_credentials: false                   # (boolean) Inclus les cookies dans les requêtes CORS.

        allow_origin: ['*']                        # (array)   La liste des domaines autorisés à envoyer des requêtes sur l'API.
                                                   #           '*' pour autoriser les demandes de toutes origines.
        allow_headers: []                          # (array)   La liste des headers supportés par le server.
        allow_methods: ['GET', 'POST', 'PUT']      # (array)   La liste des methodes HTTP supportées.
        expose_headers: ['X-Custom-Header']        # (array)   La liste des headers autres que (Cache-Control, Content-Language, Content-Type, Expires, Last-Modified, Pragma)
                                                   #           à exposer au client.
        max_age: 0                                 # (integer) Authorise la réponse "preflight" à être cachée pour X secondes.
        hosts: ['api-cors.domain.com']             # (array)   Liste des noms de domaine ou le CORS est activé.


    static-file:
        enabled: false                             # (boolean) Activation vignettes statiques.
        type: nginx                                # (string) Type StaticFile (`nginx` ou `apache`)
        symlink-directory: ''                      # (string) Le répertoire ou seront crées les liens symboliques vers les images

    lazyload: false                                # (boolean) Activation du lazyload pour l'affichage des vignettes (obsolete si l'option static-file est activée)

Languages
*********

Available languages with their respectives codes are:

- French: fr_FR
- English: en_GB
- German: de_DE
- Dutch: nl_NL

Cache services
**************

**cache** and **opcode-cache** cache services can be configures with the
following adapters:

+----------------+----------------------+-----------------------------------------------------+------------+
|  Name          | Service              |  Description                                        | Options    |
+================+======================+=====================================================+============+
| MemcacheCache  | cache                | Cache server using PHP memcache extension           | host, port |
+----------------+----------------------+-----------------------------------------------------+------------+
| MemcachedCache | cache                | Cache server using PHP memcached extension          | host, port |
+----------------+----------------------+-----------------------------------------------------+------------+
| RedisCache     | Cache                | Cache server using PHP redis extension              | host, port |
+----------------+----------------------+-----------------------------------------------------+------------+
| ApcCache       | opcode-cache         | Opcode Cache that uses PHP APC                      |            |
+----------------+----------------------+-----------------------------------------------------+------------+
| XcacheCache    | opcode-cache         | Opcode Cache that uses PHP Xcache                   |            |
+----------------+----------------------+-----------------------------------------------------+------------+
| WinCacheCache  | opcode-cache         | Opcode Cache that uses PHP WinCache                 |            |
+----------------+----------------------+-----------------------------------------------------+------------+
| ArrayCache     | cache | opcode-cache | No cache                                            |            |
+----------------+----------------------+-----------------------------------------------------+------------+

Sessions handling
*****************

Sessions are stored on filesystem by default.
It is possible to use another handling system:

+----------------+---------------------------------------------+------------+
| Type           | Description                                 | Options    |
+================+=============================================+============+
| file           | Filesystem handler                          |            |
+----------------+---------------------------------------------+------------+
| memcache       | Memcached server handler, use PHP memcache  | host, port |
+----------------+---------------------------------------------+------------+
| memcached      | Memcached server handler, use PHP memcached | host, port |
+----------------+---------------------------------------------+------------+
| redis          | Redis server handler, use PHP redis         | host, port |
+----------------+---------------------------------------------+------------+

.. warning::

    Time-to-live setting (`ttl`) does not work with filesystem storage.
    In that case, use PHP `gc_maxlifetime` setting.

.. _search-engine-service-configuration:

Search Engine service
*********************

Three search engine services are available: Phrasea engine, ElasticSearch
and SphinxSearch engine.

+------------------------------------------------------------------+------------------------------+
| Name                                                             | Options                      |
+==================================================================+==============================+
| Alchemy\\Phrasea\\SearchEngine\\Phrasea\\PhraseaEngine           |                              |
+------------------------------------------------------------------+------------------------------+
| Alchemy\\Phrasea\\SearchEngine\\Elastic\\ElasticSearchEngine     | host, port, index            |
+------------------------------------------------------------------+------------------------------+
| Alchemy\\Phrasea\\SearchEngine\\SphinxSearch\\SphinxSearchEngine | host, port, rt_host, rt_port |
+------------------------------------------------------------------+------------------------------+

Trusted proxies
***************

If Phraseanet is behind a reverse proxy, its address must be set as a trusted
one so that users IP address will be correctly recognized.

.. code-block:: yaml

    trusted-proxies:
        192.168.27.15
        10.0.0.45

Optional registration fields
****************************


`registration-fields` section allows to customize registration fields and which
ones of them are required.

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
| login     | Login       |
+-----------+-------------+
| gender    | Gender      |
+-----------+-------------+
| firstname | First name  |
+-----------+-------------+
| lastname  | Last name   |
+-----------+-------------+
| address   | Address     |
+-----------+-------------+
| zipcode   | Zip Code    |
+-----------+-------------+
| geonameid | City        |
+-----------+-------------+
| position  | position    |
+-----------+-------------+
| company   | Company     |
+-----------+-------------+
| job       | Job         |
+-----------+-------------+
| tel       | Telephone   |
+-----------+-------------+
| fax       | Fax         |
+-----------+-------------+

Sendfile / XSendFile Configuration
**********************************

Xsendfile configuration should be handled with commanline tools. Both
:ref:`Nginx<nginx-sendfile>` and :ref:`Apache<apache-xsendfile>` documentation
are available.

Plugins configuration
*********************

Plugins are configured in the same file. Plugins documentation explains how to
configure yours :doc:`plugins <Plugins>`.

Border Manager service configuration
************************************

Border Manager checkers are configurable. It is also possible to create your
own checker.

+---------------------+------------------------------------------------------+-----------------------------------+
|  Checker            |  Description                                         | Options                           |
+=====================+======================================================+===================================+
| Checker\Sha256      | Checks for duplicated files based on their           |                                   |
|                     | sha256 check sum                                     |                                   |
+---------------------+------------------------------------------------------+-----------------------------------+
| Checker\UUID        | Checks for duplicated files based on their UUID      |                                   |
|                     |                                                      |                                   |
+---------------------+------------------------------------------------------+-----------------------------------+
| Checker\Dimension   | Checks file dimension (if applicable)                | width  : file width               |
|                     |                                                      | height : file height              |
+---------------------+------------------------------------------------------+-----------------------------------+
| Checker\Extension   | Checks file extension                                | extensions : authorized file      |
|                     |                                                      | extensions                        |
+---------------------+------------------------------------------------------+-----------------------------------+
| Checker\Filename    | Checks for duplicated files based on their filename  | sensitive : enable case           |
|                     |                                                      | sensitivity                       |
+---------------------+------------------------------------------------------+-----------------------------------+
| Checker\MediaType   | Checks media type (Audio, Video...)                  | mediatypes : authorized media     |
|                     |                                                      | types                             |
+---------------------+------------------------------------------------------+-----------------------------------+
| Checker\Colorspace  | Checks colorspace (if applicable)                    | colorspaces : authorized          |
|                     |                                                      | colorspaces                       |
+---------------------+------------------------------------------------------+-----------------------------------+

Border manager service allow to customize mime-type detection with the
`extension-mapping` parameter. Mime type detection can be wrong on some
platforms. Use this array to force a mime-type given a file extension.

Collections restrictions
~~~~~~~~~~~~~~~~~~~~~~~~

It is possible to restrict the validation constraint on a set of collections by
passing a list of base_id:

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

Databoxes restrictions
~~~~~~~~~~~~~~~~~~~~~~

The same restriction can be done at databoxes level:

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

    It is not possible to restrict at databoxes and collections levels at
    the same time.

Implement a custom checker
~~~~~~~~~~~~~~~~~~~~~~~~~~

Checker's object are declared in the
`Alchemy\\Phrasea\\Border\\Checker` namespace. The checker has to be in this
namespace and must implement `Alchemy\\Phrasea\\Border\\Checker\\Checker`
interface.

Example of GPS based checker:

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

Enable the checker

.. code-block:: yaml

    border-manager:
        enabled: true
        checkers:
            -
                type: Checker\NorthPole
                enabled: true

Users settings
**************

It is possible to customize default users settings. Available parameters are:

+-------------------------+------------------------------------------------+--------------+----------------------------------------------------------------------------------+
| Name                    | Description                                    | Defaut value | Available values                                                                 |
+=========================+================================================+==============+==================================================================================+
| view                    | Results display                                | thumbs       | *thumbs* (thumbnail view) *list* (list view)                                     |
+-------------------------+------------------------------------------------+--------------+----------------------------------------------------------------------------------+
| images_per_page         | Results quantity per page                      | 20           |                                                                                  |
+-------------------------+------------------------------------------------+--------------+----------------------------------------------------------------------------------+
| images_size             | Result thumbnail size                          | 120          |                                                                                  |
+-------------------------+------------------------------------------------+--------------+----------------------------------------------------------------------------------+
| editing_images_size     | Editing thumbnail size                         | 134          |                                                                                  |
+-------------------------+------------------------------------------------+--------------+----------------------------------------------------------------------------------+
| editing_top_box         | Editing top block (percentage)                 | 30           |                                                                                  |
+-------------------------+------------------------------------------------+--------------+----------------------------------------------------------------------------------+
| editing_right_box       | Editing right block (percentage)               | 48           |                                                                                  |
+-------------------------+------------------------------------------------+--------------+----------------------------------------------------------------------------------+
| editing_left_box        | Editing left block (percentage)                | 33           |                                                                                  |
+-------------------------+------------------------------------------------+--------------+----------------------------------------------------------------------------------+
| basket_sort_field       | Basket sort index                              | name         | *name* (by name) or *date* (by date)                                             |
+-------------------------+------------------------------------------------+--------------+----------------------------------------------------------------------------------+
| basket_sort_order       | Basket sort index                              | ASC          | *ASC* (ascending) or *DESC* (descending)                                         |
+-------------------------+------------------------------------------------+--------------+----------------------------------------------------------------------------------+
| warning_on_delete_story | Alert before remove a story                    | true         | *true* (yes) or *false* (no)                                                     |
+-------------------------+------------------------------------------------+--------------+----------------------------------------------------------------------------------+
| client_basket_status    | Display baskets in *Classic*                   | 1            | *1* (yes) or *0* (no)                                                            |
+-------------------------+------------------------------------------------+--------------+----------------------------------------------------------------------------------+
| css                     | Production CSS theme                           | 000000       | *000000* (dark) or *959595* (bright)                                             |
+-------------------------+------------------------------------------------+--------------+----------------------------------------------------------------------------------+
| advanced_search_reload  | Reload previous search options on Prod loading | 1            | *1* (yes) or *0* (no)                                                            |
+-------------------------+------------------------------------------------+--------------+----------------------------------------------------------------------------------+
| start_page_query        | Default question                               | last         |                                                                                  |
+-------------------------+------------------------------------------------+--------------+----------------------------------------------------------------------------------+
| start_page              | Production start page                          | QUERY        | *PUBLI* (publications) or *QUERY* (query) ou *LAST_QUERY* (last query)           |
+-------------------------+------------------------------------------------+--------------+----------------------------------------------------------------------------------+
| rollover_thumbnail      | Rollover display                               | caption      | *caption* (notice) or *preview* (preview)                                        |
+-------------------------+------------------------------------------------+--------------+----------------------------------------------------------------------------------+
| technical_display       | Display technical data                         | 1            | *1* (yes) or *0* (no) or *group* (inside the caption)                            |
+-------------------------+------------------------------------------------+--------------+----------------------------------------------------------------------------------+
| doctype_display         | Display a record type icon                     | 1            | *1* (yes) or *0* (no)                                                            |
+-------------------------+------------------------------------------------+--------------+----------------------------------------------------------------------------------+
| basket_caption_display  | Display basket records notice                  | 0            | *1* (yes) or *0* (no)                                                            |
+-------------------------+------------------------------------------------+--------------+----------------------------------------------------------------------------------+
| basket_status_display   | Display basket records status                  | 0            | *1* (yes) or *0* (no)                                                            |
+-------------------------+------------------------------------------------+--------------+----------------------------------------------------------------------------------+
| basket_title_display    | Display basket records title                   | 0            | *1* (yes) or *0* (no)                                                            |
+-------------------------+------------------------------------------------+--------------+----------------------------------------------------------------------------------+

Session durations
*****************

idle
~~~~
Set the inactivity time (in seconds) before the user is automatically
disconnected from application.

The setting "idle" has priority over "lifetime". If "idle" is set, the option
"Remember me" is not displayed on the homepage.

lifetime
~~~~~~~~
Checking "Remember me" on homepage allows to access the application later
without authentifying again. Access is allowed for this duration (in seconds).


.. _YAML: https://wikipedia.org/wiki/Yaml

Thumbnails
**********

lazyload
~~~~~~~~
Boolean that triggers lazy load for thumbnails in Phraseanet production, this
option is not obsolete if static file mode is enabled.

static-file
~~~~~~~~~~~
If this option is enabled, thumbnails are served as static content.
Symlinks to images will be created.

.. code-block:: yaml

    static-file:
        enabled: true
        type: nginx
        symlink-directory: ''

Embed bundle
************

Videojs audiovideo player
~~~~~~~~~~~~~~~~~~~~~~~~~

Phraseanet includes `Videojs`_ player for audio and video type document preview.

It can be customized in the configuration.yml file:

.. code-block:: yaml

    embed_bundle:
        video_player: videojs                 # (string)   Enable Videojs player for video type document preview
        video_autoplay: false                 # (boolean)  Enables automatic launch of video playback
        video_available_speeds:               # (array)    Reading speeds proposed in Videojs player
            - '0.5'
            - 1
            - 2
            - 3
            - 4
        audio_player: videojs                 # (string)   Enable Videojs player for audio type document preview
        audio_autoplay: false                 # (boolean)  Enables automatic launch of audio playback
        coverSubdef: AlbumCoverImage          # (string)   The name of the sub-definition image presented in the player when playing an audio document preview
.. note::

    High speed playbacks increases bandwidth consumption.

Pdf.js viewer
~~~~~~~~~~~~~

The `Pdf.js`_ viewer can be used to display previews of PDF documents instead of
the default FlexPaper viewer.

Pdf.js allows a native display of PDF files in modern browsers while default
FlexPaper viewer requires Adobe Flash Player plugin to be installed, enabled
as well as allowed in it.

.. code-block:: yaml

    embed_bundle:
        document:
            player: flexpaper
            enable_pdfjs: true                # (boolean)  Enable pdfjs to display PDF document preview

.. note::

    FlexPaper is still needed to display Office based documents
    previews (for FlexPaper type sub-definition previews)


.. _Pdf.js: https://mozilla.github.io/pdf.js/
.. _Videojs: https://videojs.com/

