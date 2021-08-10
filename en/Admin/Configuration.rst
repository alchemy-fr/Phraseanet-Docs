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
Here is a commented configuration file (/config/configuration.sample.yml) :

.. literalinclude:: ../../common/github_source/config/configuration.sample.yml
    :language: yaml

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

Elasticsearch is the only service that can be used with Phraseanet.

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

