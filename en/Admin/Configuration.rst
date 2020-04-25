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

    servername: 'http://192.168.1.170/'       # (string)  The URL from which Phraseanet is accessible

    languages:
        available:                            # (array)   An array of active language codes. All languages are activated if table is empty
            - fr
            - en
        default: fr                           # (string)  The default language for the application

    main:
        maintenance: false                    # (boolean) Activation of maintenance mode

        api_require_ssl: false                # (boolean) Force SSL for Phraseanet API requests

        database:                             # (array)   DBMS configuration
            host: 127.0.0.1
            port: '3306'
            user: phraseanet
            password: phraseanet
            dbname: ab_alch_phraseavm
            driver: pdo_mysql
            charset: UTF8

        database-test:                        # (array)   Configuration for tests (developers only)
            driver: pdo_sqlite
            path: /tmp/db.sqlite
            charset: UTF8

        cache:                                # (array)   Configuration for cache services
            type: MemcacheCache
            options:
                host: localhost
                port: 11211

        opcodecache:                          # (array)   Opcode cache service configuration
            type: ArrayCache
            options: {  }

        search-engine:                        # (array)   Elasticsearch configuration
            type: elasticsearch               # (string)  Must be elasticsearch
            options:
                host: 127.0.0.1
                port: 9200
                index: phraseanet_86a108b98a5aa92431bf94a42e8d3d3f
                shards: 3
                replicas: 0
                minScore: 2
                highlight: false
                maxResultWindow: 500000
                populate_order: RECORD_ID
                populate_direction: DESC
                activeTab: '#elastic-search'  # (string)    Name of the active tab for the Search engine parameter section
                base_aggregate_limit: 10      # (integer)   Parameter setting of the "Base" facet with 10 values
                collection_aggregate_limit: 10# (integer)   Parameter setting for the "Collection" facet with 10 values
                doctype_aggregate_limit: 10   # (integer)   Parameter setting for the "Document type" facet with 10 values
                camera_model_aggregate_limit: 0
                iso_aggregate_limit: 0
                aperture_aggregate_limit: 0
                shutterspeed_aggregate_limit: 0
                flashfired_aggregate_limit: 0
                framerate_aggregate_limit: 0
                audiosamplerate_aggregate_limit: 0
                videocodec_aggregate_limit: 0
                audiocodec_aggregate_limit: 0
                orientation_aggregate_limit: 0
                colorspace_aggregate_limit: 0
                mimetype_aggregate_limit: 0

        key: 86a108b98a5aa92431bf94a42e8d3d3f # (string)  Application key

        task-manager:
            logger:
                enabled: true                 # (boolean) Enable logs for file system
                max-files: 10                 # (integer) The maximum number of log files to keep
                level: INFO                   # (string)  The minimum log level
            enabled: true
            status: started
            options:
                protocol: tcp
                host: 127.0.0.1
                port: 6660
                linger: 500

        storage:                              # (array)   Configuration for storage paths
            cache: /var/www/Phraseanet/cache
            log: /var/www/Phraseanet/logs
            download: /var/www/Phraseanet/tmp/download                   # (string)  The directory for storing files for download
            lazaret: /var/www/Phraseanet/tmp/lazaret                     # (string)  The quarantined files storage directory
            caption: /var/www/Phraseanet/tmp/caption                     # (string)  The directory for storing items displayed when hovering over a recording
            subdefs: /var/www/phrasea_datas/                             # (string)  The generic storage directory for the sub-definition files

        binaries:                             # (array)   Path for reaching external binaries
            php_binary: /usr/bin/php
            phraseanet_indexer: /usr/local/bin/phraseanet_indexer
            swf_extract_binary: /usr/local/bin/swfextract
            pdf2swf_binary: /usr/local/bin/pdf2swf
            swf_render_binary: /usr/local/bin/swfrender
            unoconv_binary: /usr/bin/unoconv
            ffmpeg_binary: /usr/bin/ffmpeg
            mp4box_binary: /usr/bin/MP4Box
            pdftotext_binary: /usr/bin/pdftotext
            recess_binary: /usr/local/bin/recess

        bridge:                               # (array)   Configuration for Phraseanet Bridge (deprecated)
            youtube:
                enabled: false
                client_id: ''
                client_secret: ''
                developer_key: ''
            flickr:
                enabled: false
                client_id: ''
                client_secret: ''
            dailymotion:
                enabled: false
                client_id: ''
                client_secret: ''

    trusted-proxies: {  }                     # (array)   Trusted proxies configuration

    debugger:
        allowed-ips: {  }

    border-manager:                           # (array)   Configuration for Phraseanet border-manager service
        enabled: true                         # (boolean) Enable Phraseanet border-manager
        checkers:
            -
                type: Checker\Sha256          # (array)   Check duplicated files by checksum verification
                enabled: true
            -
                type: Checker\UUID            # (array)   Check duplicated files by UUID embedded metadata
                enabled: true
            -
                type: Checker\Colorspace      # (array)   Check files by ICC integrated profile
                enabled: false
                options:
                    colorspaces:
                        - cmyk
                        - grayscale
                        - rgb
            -
                type: Checker\Dimension       # (array)   Check for minimum amount of pixels requirement
                enabled: false
                options:
                    width: 80
                    height: 160
            -
                type: Checker\Extension       # (array)   Check for listed file extension compliance
                enabled: false
                options:
                    extensions:
                        - jpg
                        - jpeg
                        - bmp
                        - tif
                        - gif
                        - png
                        - pdf
                        - doc
                        - odt
                        - mpg
                        - mpeg
                        - mov
                        - avi
                        - xls
                        - flv
                        - mp3
                        - mp2
            -
                type: Checker\Filename        # (array)   Check duplicated files by filename verification
                enabled: false
                options:
                    sensitive: true
            -
                type: Checker\MediaType       # (array)   Check files by Phraseanet document type
                enabled: false
                options:
                    mediatypes:
                        - Audio
                        - Document
                        - Flash
                        - Image
                        - Video

    authentication:                           # (array)   Authentication configuration
        auto-create:
            templates: {  }                   # (string)  Name of the rights model applied when self-registration is activated
        captcha:
            enabled: true
            trials-before-display: 9
        providers:                            # (array)   Configuration of authentication by third-party services (to be tested)
            facebook:                         # (array)   Configuration of authentication by Facebook (to be tested)
                enabled: false                # (boolean) Enables or disables authentication by Facebook provider
                options:
                    app-id: ''                # (string)  App-id (id) Facebook
                    secret: ''                # (string)  Secret (secret) Facebook
            twitter:                          # (array)   Configuration of authentication by Twitter (to be tested)
                enabled: false
                options:
                    consumer-key: ''
                    consumer-secret: ''
            google-plus:                      # (array)   Configuration of authentication by Google-plus (tested and OK)
                enabled: false
                options:
                    client-id: ''
                    client-secret: ''
            github:                           # (array)   Configuration of authentication by Github (tested and OK)
                enabled: false
                options:
                    client-id: ''
                    client-secret: ''
            viadeo:                           # (array)   Viadeo authentication configuration is deprecated
                enabled: false
                options:
                    client-id: ''
                    client-secret: ''
            linkedin:                         # (array)   Configuration of authentication by linkedin (to be tested)
                enabled: false
                options:
                    client-id: ''
                    client-secret: ''

    registration-fields:                      # (array)   Configuration of optional fields available on the registration form when activated
        -
            name: firstname
            required: true
        -
            name: lastname
            required: true
        -
            name: geonameid
            required: true
        -
            name: company
            required: true

    xsendfile:                              # (array)   Sendfile (Nginx) / XSendFile (Apache) configuration
        enabled: false                      # (array)   Enable or disable Sendfile
        type: nginx                         # (string)  Type XSendFile (`nginx` ou `apache`)
        mapping: {  }                       # (array)   Directories mapping (please see :ref:`Apache<apache-xsendfile>` and :ref:`Nginx<nginx-sendfile>`)

    plugins: {  }                           # (array)   Configuration for :doc:`plugins <Phraseanet Plugins>`.

    h264-pseudo-streaming:
        enabled: false
        type: null
        mapping: {  }

    api_cors:
        enabled: false                      # (boolean) Enable CORS over Phraseanet API
        allow_credentials: false            # (boolean) Include cookies in CORS requests
        allow_origin: {  }                  # (array)   List of authorized domains to send requests on Phraseanet API
                                            #           '*' to allow all
        allow_headers: {  }                 # (array)   List of supported headers by the server
        allow_methods: {'GET', 'POST', 'PUT'}                            # (array)   List of supported HTTP Methods by the server
        expose_headers: {  }                # (array)   List of exposed headers other than Cache-Control, Content-Language, Content-Type, Expires, Last-Modified, Pragma
        max_age: 0                          # (integer) Allow the "preflight" response to be cached for X seconds
        hosts: {  }                         # (array)   List of domain names where CORS is activated

    session:                                # (array)   Configuration for sessions
        idle: 0
        lifetime: 604800

    crossdomain:                            # (array)   Configuration for cross-domain
        allow-access-from:
            -
                domain: '*.cooliris.com'
                secure: 'false'

    static-file:
        enabled: true                       # (boolean)  Enable static thumbnails
        type: apache                        # (string)   StaticFile type (`nginx` or `apache`)
        mapping:
            mount-point: /thumb
            directory: ''

    registry:                               # (array)   Application settings
        general:
            title: 'Phraseanet V4.0 (VM)'   # (string)  Given name to Phraseanet instance
            keywords: null                  # (string)  META NAME="keywords" markup content
            description: null               # (string)  META NAME="description" markup content
            analytics: null
            allow-indexation: true
            home-presentation-mode: CAROUSEL
            default-subdef-url-ttl: 7200
        modules:
            thesaurus: true
            stories: true
            doc-substitution: true
            thumb-substitution: true
            anonymous-report: false
        actions:
            download-max-size: 120
            validation-reminder-days: 2
            validation-expiration-days: 10
            auth-required-for-export: true
            tou-validation-required-for-export: false      # (boolean)  Ask users to accept Terms of use for documents download
            export-title-choice: false                     # (boolean)  Allow users to choose given filenames when downloading
            default-export-title: title                    # (string)   Default given filenames when downloading
            social-tools: all
            enable-push-authentication: false
            force-push-authentication: false
            enable-feed-notification: true
            export-stamp-choice: false
            download-link-validity: 24      # (integer)   Validity duration of download links, in hours
        ftp:
            ftp-enabled: true
            ftp-user-access: true
        registration:
            auto-select-collections: true
            auto-register-enabled: true
        maintenance:
            message: 'Under maintenance'
            enabled: false
        api-clients:
            api-enabled: true
            navigator-enabled: true
            office-enabled: true
        webservices:
            google-charts-enabled: true
            geonames-server: 'https://geonames.alchemyasp.com/'          # (string)   Alchemy's Geonames server URL (use null if not available)
            captchas-enabled: false
            recaptcha-public-key: ''
            recaptcha-private-key: ''
            captcha-enabled: false
        executables:
            h264-streaming-enabled: false
            auth-token-directory: null
            auth-token-directory-path: null
            auth-token-passphrase: null
            php-conf-path: null
            imagine-driver: ''
            ffmpeg-threads: 2
            pdf-max-pages: 5
        searchengine:
            min-letters-truncation: 1
            default-query: all
            default-query-type: 0
        email:                                # (array)   Optional configuration for sending e-mails, depending on context
            emitter-email: vm@alchemy.fr
            prefix: 'Phraseanet VM -'
            smtp-enabled: true
            smtp-auth-enabled: true
            smtp-host: smtp.gmail.com
            smtp-port: '465'
            smtp-secure-mode: ssl
            smtp-user: vm@alchemy.fr
            smtp-password: 'mysmtppassword'
            admin-email: nobody@nodomaine
        web-applications:
            email-optional-for-login: false
        custom-links:                         # (array)   Configuration for optional links in menu bar or help menu
            -
                linkName: 'Phraseanet store'
                linkLanguage: fr
                linkUrl: 'https://alchemy.odoo.com/shop'
                linkLocation: help-menu
                linkOrder: 1
                linkBold: false
                linkColor: ''
            -
                linkName: 'Phraseanet store'
                linkLanguage: en
                linkUrl: 'https://alchemy.odoo.com/en_US/shop'
                linkLocation: navigation-bar
                linkOrder: 1
                linkBold: false
                linkColor: ''

    user-settings:                                 # (array)   Default values for users'preferences
        images_per_page: 60
        images_size: 200

    embed_bundle:                                  # (array)     Embed_bundle configuration
        video:
            player: videojs                        # (array)     Set active player for video - videojs only
            autoplay: false                        # (boolean)   Autoplay setting for video
            video_message_start: StartOfMessage    # (string)    The field name where the start reading value (in second) is stored
            coverSubdef: previewx4                 # (string)    Cover sub-definition to be used in player
            available_speeds:                      # (array)     Set available speed in player
                - 1
                - 1.5
                - 3
        audio:
            player: videojs                        # (array)     Set active player for audio
            autoplay: false                        # (boolean)   Autoplay setting for audio
        document:
            player: flexpaper
            enable-pdfjs: true                     # (boolean)   Use pdfjs as PDF viewer for PDFs
    video-editor:                                  # (array)     Configuration for video chapter editing in Production
        ChapterVttFieldName: VideoTextTrackChapters
        seekBackwardStep: 500 # in ms
        seekForwardStep: 500  # in ms
        playbackRates:
            - 1
            - '1.5'
            - 3
    geocoding-providers:                           # (array)     Configuration for geoloc in Production
        -
            map-provider: mapboxWebGL              # "mapboxWebGL" for webGl implementation Or "mapboxJs" for standard Js implementation
            enabled: false
            public-key: ''                         # Require an a app key on mapbox service https://mapbox.com
            map-layers:
                -
                    name: Light
                    value: 'mapbox://styles/mapbox/light-v9'
                -
                    name: Streets
                    value: 'mapbox://styles/mapbox/streets-v9'
                -
                    name: Basic
                    value: 'mapbox://styles/mapbox/basic-v9'
                -
                    name: Satellite
                    value: 'mapbox://styles/mapbox/satellite-v9'
                -
                    name: Dark
                    value: 'mapbox://styles/mapbox/dark-v9'
            transition-mapboxgl:
                -
                    animate: true
                    speed: '2.2'
                    curve: '1.42'
            default-position:
                - '48.879162'
                - '2.335062'
            default-zoom: 5
            marker-default-zoom: 9
            geonames-field-mapping: true
            cityfields: City, Ville
            provincefields: Province
            countryfields: Country, Pays

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

Elasticsearch is the only service that can be used with Phraseanet 4.0.

+------------------------------------------------------------------+------------------------------+
| Name                                                             | Options                      |
+==================================================================+==============================+
| Alchemy\\Phrasea\\SearchEngine\\Elastic\\ElasticSearchEngine     | host, port, index            |
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

    embed_bundle:                                  # (array)     Embed_bundle configuration
        video:
            player: videojs                        # (array)     Set active player for video - videojs only
            autoplay: false                        # (boolean)   Autoplay setting for video
            video_message_start: StartOfMessage    # (string)    The field name where the start reading value (in second) is stored
            coverSubdef: previewx4                 # (string)    Cover sub-definition to be used in player
            available-speeds:                      # (array)     Set available speed in player
                - 1
                - 1.5
                - 3
        audio:
            player: videojs                        # (array)     Set active player for audio
            autoplay: false                        # (boolean)   Autoplay setting for audio

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
            player: flexpaper                      # (string)    For Office document, use flexpaper or pdfjs
            enable-pdfjs: true                     # (boolean)   Use pdfjs as PDF viewer for PDFs documents

.. note::

    Flexpaper or Pdfjs can be used display Office based documents
    previews. Please set Document Preview subdef according to your choice in
    each databox subdef setting.

Video Editor
************

The section allows the configuration of options in the video editing tools
in Production

.. code-block:: yaml

    video-editor:
        ChapterVttFieldName: VideoTextTrackChapters # (string)   The name of the document field storing the chaptering data
        seekBackwardStep: 500                       # (integer)  In milliseconds, the displacement value of the reading head back
        seekForwardStep: 500                        # (integer)  In milliseconds, the displacement value of the reading head forward
        playbackRates:                              # (array)    Available reading speeds in the player
            - 1
            - '1.5'
            - 3

Geocoding providers
*******************

The section allows the configuration of geolocation options in Production.

A MapBox API public-key is required to use this service. It can be get on
`Mapbox`_ web site.

For using `GeoNames`_ input assistance in Phraseanet edit form, please provide
a geonames-server address in Webservice section in configuration file.

.. code-block:: yaml

    geocoding-providers:                           # (array)     Configuration of geolocation options in Production
        -
            map-provider: mapboxWebGL              # (string)    The library used for displaying maps
            enabled: false                         # (string)    Activate or deactivate the functionality in Production
            public-key: ''                         # (string)    The required MapBox API key
            map-layers:                            # (array)     An array grouping the proposed base maps
                -
                    name: Streets
                    value: 'mapbox://styles/mapbox/streets-v9'
                -
                    name: Basic
                    value: 'mapbox://styles/mapbox/basic-v9'
            transition-mapboxgl:
                -
                    animate: true
                    speed: '2.2'
                    curve: '1.42'
            default-position:                      # (array)     Default position on the map
                - '48.879162'
                - '2.335062'
            default-zoom: 5
            marker-default-zoom: 9
            geonames-field-mapping: true           # (boolean)   Enable GeoNames input assistance in Phraseanet edit form
            cityfields: City, Ville                # (array)     Mapping of Phraseanet fields for the GeoName Name property (the city)
            provincefields: Province               # (array)     Mapping of Phraseanet fields for the GeoName Region property
            countryfields: Country, Pays           # (array)     Mapping of Phraseanet fields for the GeoName Country property


.. _Pdf.js: https://mozilla.github.io/pdf.js/
.. _Videojs: https://videojs.com/
.. _Mapbox: https://www.mapbox.com/
.. _GeoNames: https://www.geonames.org/

