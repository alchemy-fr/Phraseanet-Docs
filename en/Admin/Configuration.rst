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

    servername: Phraseanet
    languages:
        available:
            - fr
            - en
            - de
            - nl
        default: fr
    main:
        maintenance: false
        key: KAYhwdXdnOqEcnyH
        api_require_ssl: true
        database:
            host: localhost
            port: '3306'
            user: phraseanet
            password: phraseanet
            dbname: ab_phrasea_vm
            driver: pdo_mysql
            charset: UTF8
        database-test:
            driver: pdo_sqlite
            path: /tmp/db.sqlite
            charset: UTF8
        cache:
            type: ArrayCache
            options: {  }
        search-engine:
            type: elasticsearch
            options:
                host: localhost
                port: 9200
                index: ''
                shards: 3
                replicas: 0
                minScore: 2
                highlight: true
                maxResultWindow: 500000
                populate_order: RECORD_ID
                populate_direction: DESC
                activeTab: '#elastic-search'
                base_aggregate_limit: 10
                collection_aggregate_limit: 10
                doctype_aggregate_limit: 0
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
        task-manager:
            status: started
            enabled: true
            options:
                protocol: tcp
                host: 127.0.0.1
                port: 6660
                linger: 500
            logger:
                max-files: 10
                enabled: true
                level: INFO
        session:
            type: file
            options: {  }
            ttl: 86400
        binaries:
            php_binary: /usr/bin/php
            pdf2swf_binary: /usr/local/bin/pdf2swf
            swf_extract_binary: /usr/local/bin/swfextract
            swf_render_binary: /usr/local/bin/swfrender
            unoconv_binary: /usr/bin/unoconv
            ffmpeg_binary: /usr/bin/ffmpeg
            ffprobe_binary: /usr/bin/ffprobe
            mp4box_binary: /usr/bin/MP4Box
            pdftotext_binary: /usr/bin/pdftotext
            ghostscript_binary: /usr/bin/gs
        storage:
            subdefs: /var/www/phrasea_datas
            cache: /var/www/Phraseanet/cache
            log: /var/www/Phraseanet/logs
            download: /var/www/Phraseanet/tmp/download
            lazaret: /var/www/Phraseanet/tmp/lazaret
            caption: /var/www/Phraseanet/tmp/caption
    trusted-proxies: {  }
    debugger:
        allowed-ips: {  }
    border-manager:
        enabled: true
        extension-mapping:
            otc: application/vnd.oasis.opendocument.chart-template
            ttc: application/x-font-ttf
            xlsx: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet
            docx: application/msword
            pptx: application/vnd.ms-powerpoint
            mxf: application/mxf
            mp4: video/mp4
        checkers:
            -
                type: Checker\Sha256
                enabled: true
            -
                type: Checker\UUID
                enabled: true
            -
                type: Checker\Colorspace
                enabled: false
                options:
                    colorspaces:
                        - cmyk
                        - grayscale
                        - rgb
            -
                type: Checker\Dimension
                enabled: false
                options:
                    width: 80
                    height: 160
            -
                type: Checker\Extension
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
                type: Checker\Filename
                enabled: false
                options:
                    sensitive: true
            -
                type: Checker\MediaType
                enabled: false
                options:
                    mediatypes:
                        - Audio
                        - Document
                        - Flash
                        - Image
                        - Video
    user_account:
        deleting_policies:
            email_confirmation: true
    authentication:
        auto-create:
            templates: {  }
        captcha:
            enabled: true
            trials-before-display: 9
        providers:
            facebook:
                enabled: false
                options:
                    app-id: ''
                    secret: ''
            twitter:
                enabled: false
                options:
                    consumer-key: ''
                    consumer-secret: ''
            google-plus:
                enabled: false
                options:
                    client-id: ''
                    client-secret: ''
            github:
                enabled: false
                options:
                    client-id: ''
                    client-secret: ''
            viadeo:
                enabled: false
                options:
                    client-id: ''
                    client-secret: ''
            linkedin:
                enabled: false
                options:
                    client-id: ''
                    client-secret: ''
    registration-fields:
        -
            name: company
            required: true
        -
            name: lastname
            required: true
        -
            name: firstname
            required: true
        -
            name: geonameid
            required: true
    xsendfile:
        enabled: false
        type: nginx
        mapping: {  }
    h264-pseudo-streaming:
        enabled: false
        type: nginx
        mapping: {  }
    plugins: {  }
    api_cors:
        enabled: false
        allow_credentials: false
        allow_origin: {  }
        allow_headers: {  }
        allow_methods: {  }
        expose_headers: {  }
        max_age: 0
        hosts: {  }
    session:
        idle: 0
        lifetime: 604800
    crossdomain:
        allow-access-from:
            -
                domain: '*.cooliris.com'
                secure: 'false'
    embed_bundle:
        video:
            player: videojs
            autoplay: false
            cover_subdef: thumbnail
            message_start: StartOfMessage
            available_speeds:
                - 1
                - '1.5'
                - 3
        audio:
            player: videojs
            autoplay: false
            cover_subdef: thumbnail
        document:
            enable_pdfjs: true
    geocoding-providers:
        -
            map-provider: mapboxWebGL
            enabled: true
            public-key: ''
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
                - '2.335062'
                - '48.879162'
            default-zoom: 2
            marker-default-zoom: 11
            position-fields: {  }
            geonames-field-mapping: true
            cityfields: 'City, Ville'
            provincefields: Province
            countryfields: 'Country, Pays'
    video-editor:
        vttFieldName: VideoTextTrackChapters
        seekBackwardStep: 500
        seekForwardStep: 500
        playbackRates:
            - 1
            - '1.5'
            - 3
    rabbitmq:
        server:
            host: localhost
            port: 5672
            user: ''
            password: ''
            vhost: /
    Console_logger_enabled_environments:
        - test
    registry:
        general:
            title: Phraseanet
            keywords: null
            description: null
            analytics: null
            allow-indexation: true
            home-presentation-mode: GALLERIA
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
            tou-validation-required-for-export: false
            export-title-choice: false
            default-export-title: title
            social-tools: none
            enable-push-authentication: false
            force-push-authentication: false
            enable-feed-notification: true
        ftp:
            ftp-enabled: false
            ftp-user-access: false
        registration:
            auto-select-collections: true
            auto-register-enabled: false
        maintenance:
            message: 'The application is down for maintenance'
            enabled: false
        api-clients:
            api-enabled: true
            navigator-enabled: true
            office-enabled: true
            adobe_cc-enabled: true
        webservices:
            google-charts-enabled: true
            geonames-server: 'https://geonames.alchemyasp.com/'
            captchas-enabled: false
            recaptcha-public-key: ''
            recaptcha-private-key: ''
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
            default-query: ''
            default-query-type: 0
        email:
            emitter-email: phraseanet@example.com
            prefix: null
            smtp-enabled: false
            smtp-auth-enabled: false
            smtp-host: null
            smtp-port: null
            smtp-secure-mode: tls
            smtp-user: null
            smtp-password: null
        custom-links:
            -
                linkName: 'Phraseanet store'
                linkLanguage: fr
                linkUrl: 'https://alchemy.odoo.com/shop'
                linkLocation: help-menu
                linkOrder: '1'
            -
                linkName: 'Phraseanet store'
                linkLanguage: en
                linkUrl: 'https://alchemy.odoo.com/en_US/shop'
                linkLocation: help-menu
                linkOrder: '1'

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

