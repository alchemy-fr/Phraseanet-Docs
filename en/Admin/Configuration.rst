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
        servername: 'http://phrasea.example.com/'  # (string)  Phraseanet install URL

        maintenance: false                         # (boolean) Maintenance mode activation

        languages: ['fr_FR', 'de_DE']              # (array)   An array of actives languages codes. All languages are activated if this array is empty.

        database:                                  # (array)   Database server configuration
            host: 'sql-host'                       # (string)  Database server address
            port: 3306                             # (integer) Database server port
            user: 'sql-user'                       # (string)  Database server user
            password: 'sql-password'               # (string)  Database server password
            dbname: ab_phraseanet                  # (string)  Database server db name
            driver: pdo_mysql                      # (string)  Database driver name
            charset: UTF8                          # (string)  Database connection charset

        database-test:                             # (array)   Database connection for tests (Developers only)
            driver: pdo_sqlite
            path: '/tmp/db.sqlite'
            charset: UTF8

        api-timers: true                           # (boolean) Add timers to API responses (Developers only)

        cache:                                     # (array)   Cache service configuration
            type: MemcacheCache                    # (string)  Cache adapter name
            options:                               # (array)   Cache adapter options
                host: 'localhost'                  # (string)  Cache server address
                port: 11211                        # (integer) Cache server port
                namespace: 'app_namespace'         # (integer) Override cache namespace

        opcodecache:                               # (array)   Opcode cache service configuration
            type: ArrayCache                       # (string)  Opcode cache adapter name
            options: []                            # (array)   Opcode cache adapter options

        search-engine:                             # (array)   Search engine configuration
            type: Alchemy\Phrasea\SearchEngine\Phrasea\PhraseaEngine  # (string) Search Engine service name (FQCN)
            options: []                            # (array)   Search Engine adapter options

        task-manager:
            logger:
                level: INFO                        # (string)  The log level
                max-files: 10                      # (integer) The maximum number of files to keep on disk
                enabled: true                      # (boolean) Enable logs on filesystem

    trusted-proxies: []                            # (array)   Trusted proxies configuration

    debugger:                                      # (array)   Debugger configuration (Developers only)
        allowed-ips: []                            # (array)   Debugger authorized IP address

    binaries:                                      # (array)   Binaries configuration
        ghostscript_binary: null                   # (string)  Path to Ghostscript, null for autodetection (gs)
        php_binary: null                           # (string)  Path to PHP, null for autodetection (php)
        swf_extract_binary: null                   # (string)  Path to Pdf2Swf, null for autodetection (pdf2swf)
        pdf2swf_binary: null                       # (string)  Path to SwfExtract, null for autodetection (swfextract)
        swf_render_binary: null                    # (string)  Path to SwfRender, null for autodetection (swfrender)
        unoconv_binary: null                       # (string)  Path to Unoconv, null for autodetection (unoconv)
        ffmpeg_binary: null                        # (string)  Path to FFMpeg, null for autodetection (ffmpeg, avconv)
        ffprobe_binary: null                       # (string)  Path to FFProbe, null for autodetection (ffprobe, avprobe)
        mp4box_binary: null                        # (string)  Path to MP4Box, null for autodetection (MP4Box)
        pdftotext_binary: null                     # (string)  Path to PdfToText, null for autodetection (pdftotext)
        phraseanet_indexer: null                   # (string)  Path to Phraseanet Indexer, null for autodetection (phraseanet_indexer)
        ffmpeg_timeout: 3600                       # (integer) Timeout for FFMpeg
        ffprobe_timeout: 60                        # (integer) Timeout for FFProbe
        gs_timeout: 60                             # (integer) Timeout for Ghostscript
        mp4box_timeout: 60                         # (integer) Timeout for MP4Box
        swftools_timeout: 60                       # (integer) Timeout for SwfTools (swfrender, swfextract)
        unoconv_timeout: 60                        # (integer) Timeout for Unoconv

    border-manager:                                # (array)   Border manager configuration
        enabled: true                              # (boolean) Border manager activation
        extension-mapping:                         # (array)   An array of custom extension to mime-type declaration
            mpeg: video/mpeg
        checkers:                                  # (array)   Border manager checkers list

            -                                      # (array)   Checks duplicates on checksum
                type: Checker\Sha256
                enabled: true
            -
                type: Checker\UUID                 # (array)   Checks duplicates on UUID metadata
                enabled: true
            -
                type: Checker\Colorspace           # (array)   Checks colorspace
                enabled: false
                options:
                    colorspaces: [cmyk, grayscale, rgb]
            -
                type: Checker\Dimension            # (array)   Checks media size
                enabled: false
                options:
                    width: 80
                    height: 160
            -
                type: Checker\Extension            # (array)   Checks file extension
                enabled: false
                options:
                    extensions: [jpg, jpeg, bmp, tif, gif, png, pdf, doc, odt, mpg, mpeg, mov, avi, xls, flv, mp3, mp2]
            -
                type: Checker\Filename             # (array)   Checks duplicates on file names.
                enabled: false
                options:
                    sensitive: true
            -
                type: Checker\MediaType            # (array)   Checks duplicates on media types
                enabled: false
                options:
                    mediatypes: [Audio, Document, Flash, Image, Video]

    authentication:                                # (array)   Authentication configuration

        auto-create:                               # (array)   Automatic account creation configuration
            enabled: false                         # (boolean) Automatic account creation activation
            templates: {  }                        # (array)   Id / names of templates to apply on automatic account creation.

        captcha:                                   # (array)   Captchas service configuration
            enabled: true                          # (boolean) Captchas service activation
            trials-before-display: 9               # (integer) Number of trials before captcha activation

        providers:                                 # (array)   Authentication providers configuration

            facebook:                              # (array)   Facebook authentication configuration
                enabled: false                     # (boolean) Facebook provider activation
                options:
                    app-id: ''                     # (string)  Facebook application id
                    secret: ''                     # (string)  Facebook application secret

            twitter:                               # (array)   Twitter authentication configuration
                enabled: false                     # (boolean) Twitter provider activation
                options:
                    consumer-key: ''               # (string)  Twitter consumer key
                    consumer-secret: ''            # (string)  Twitter consumer secret

            google-plus:                           # (array)   Google Plus authentication configuration
                enabled: false                     # (boolean) Google Plus provider activation
                options:
                    client-id: ''                  # (string)  Google Plus client-id
                    client-secret: ''              # (string)  Google Plus client-secret

            github:                                # (array)   GitHub authentication configuration
                enabled: false                     # (boolean) GitHub provider activation
                options:
                    client-id: ''                  # (string)  GitHub client-id
                    client-secret: ''              # (string)  GitHub client-secret

            viadeo:                                # (array)   Viadeo authentication configuration
                enabled: false                     # (boolean) Viadeo provider activation
                options:
                    client-id: ''                  # (string)  Viadeo client-id
                    client-secret: ''              # (string)  Viadeo client-secret

            linkedin:                              # (array)   LinkedIn authentication configuration
                enabled: false                     # (boolean) LinkedIn provider activation
                options:
                    client-id: ''                  # (string)  LinkedIn client-id
                    client-secret: ''              # (string)  LinkedIn client-secret

    registration-fields:                           # (array)   Registration fields configuration

        -
            name: company
            required: false                        # (boolean) Field is displayed, not required
        -
            name: firstname
            required: true                         # (boolean) Field is displayed and required

    xsendfile:                                     # (array)   Sendfile (Nginx) / XSendFile (Apache) configuration

        enabled: false                             # (boolean) SendFile/XSendFIle activation
        type: nginx                                # (string)  XSendFile type (`nginx` ou `apache`)
        mapping: []                                # (array)   Directories mapping (see configuration for :ref:`Apache<apache-xsendfile>` and :ref:`Nginx<nginx-sendfile>`)

    user-settings:                                 # (array)   An array of default settings for user settings
        images_per_page: 60
        images_size: 200

    plugins: []                                    # (array)   :doc:`Plugins <Plugins>` configuration.

    session:
        idle: 3600                                 # (integer) Inactivity before disconnection (in seconds)
        lifetime: 604800                           # (integer) Maximum session time (in seconds)

    api_cors:
        enabled: false                             # (boolean) API CORS activation.
        allow_credentials: false                   # (boolean) Include cookies in CORS request.

        allow_origin: ['*']                        # (array)   List of authorized origin domain to request the API.
                                                   #           '*' to allow requets from any origin.
        allow_headers: []                          # (array)   List of supported headers by the server.
        allow_methods: ['GET', 'POST', 'PUT']      # (array)   List of supported method.
        expose_headers: ['X-Custom-Header']        # (array)   List of headers different than (Cache-Control, Content-Language, Content-Type, Expires, Last-Modified, Pragma)
                                                   #           to expose to the client.
        max_age: 0                                 # (integer) Allows the preflight response to be cached for a specified number of seconds.
        hosts: ['api-cors.domain.com']             # (array)   List of domain where the CORS is activated.

    static-file:
        enabled: false                             # (boolean) static thumbnails activation.
        type: nginx                                # (string) StaticFile type (`nginx` ou `apache`)
        symlink-directory: ''                      # (string) The directory where symlynks to images will be created

    lazyload: false                                # (boolean) thumbnail lazyload activation (obsolete if static file enabled)

    crossdomain:
        site-control: 'master-only'                # (string)  Define the meta-policy
        allow-access-from:                         # (array) Define granted domains
            -
                domain: '*.example.com'
                secure: 'false'
            -
                domain: 'www.example.com'
                secure: 'true'
                to-ports: '507,516-523'
        allow-access-from-identity:                # (array) Define granted permission based on cryptographic credentials
            -
                fingerprint-algorithm: 'sha-1'
                fingerprint: '01:23:45:67:89:ab
            -
                fingerprint-algorithm: 'sha256'
                fingerprint: 'cd:ef:01:23:45:67'
        allow-http-request-headers-from:           # (array) Define allowed headers
            -
                domain: '*.bar.com'
                secure: 'true'
                headers: 'SOAPAction, X-Foo*'
            -
                domain: 'foo.example.com'
                secure: 'false'
                headers: 'Authorization,X-Foo*'

Languages
*********

Available languages with their respectives codes are:

- French : fr_FR
- English : en_GB
- German : de_DE
- Dutch : nl_NL

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

.. _search-engine-service-configuration:

Search Engine service
*********************

Two search engine services are available: Phrasea engine and SphinxSearch
engine.

+------------------------------------------------------------------+------------------------------+
| Name                                                             | Options                      |
+==================================================================+==============================+
| Alchemy\\Phrasea\\SearchEngine\\Phrasea\\PhraseaEngine           |                              |
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
Set the inactivity time (in seconds) before the user is automatically disconnected from application.

The setting "idle" has priority over "lifetime". If "idle" is set, the option "remember me" is not displayed on the
homepage.

lifetime
~~~~~~~~
Checking "Remember me" on homepage allows to access the application later without authentifying again.
Access is allowed for this duration (in seconds).

 
.. _YAML: https://wikipedia.org/wiki/Yaml

Thumbnails
**********

lazyload
~~~~~~~~
Boolean that triggers lazy load for thumbnails in production, this option is not obsolete if static
file mode is enabled.

static-file
~~~~~~~~~~~
If this option is enabled, thumbnails are served as static content.
Symlinks to images will be created.

.. code-block:: yaml

    static-file:
        enabled: true
        type: nginx
        symlink-directory: ''

Cross Domain Flash Policy
*************************

`crossdomain` section allows to customize flash request policy.

.. code-block:: yaml

        crossdomain:
            allow-access-from:
                -
                    domain: '*.example.com'

Then run the following command to generate the crossdomain.xml file:

.. code-block:: bash

    bin/console crossdomain:generate


