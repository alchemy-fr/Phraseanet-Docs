Configuration
=============

.. topic:: L'essentiel

    La configuration de Phraseanet se fait via le fichier
    `config/configuration.yml`. A chaque mise à jour de celle-ci, il est
    nécessaire de recompiler la configuration via la commande suivante :

.. code-block:: none

    `bin/console compile:configuration`.

La configuration de Phraseanet est écrite dans le fichier
`config/configuration.yml` qui est automatiquement généré à l'installation.

Ce fichier est au format `YAML`_, qui a pour intérêt d'être très lisible.
Pour des raisons de performance, et notamment de cache opcode, la configuration
est compilée.

En contre partie il est nécessaire de recompiler après une mise à jour.

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

Langues
*******

Les langues disponibles ainsi que leurs codes respectifs sont les suivants :

- Français : fr
- Anglais : en
- Allemand : de
- Néerlandais : nl

Fournisseurs d'authentification
*******************************

Les différents fournisseurs d'authentification se configurent simplement.
Il suffit de créer une application "Phraseanet" chez le fournisseur en
spécifiant l'URL de callback adéquate.

.. note::

    Les URLs de callback fournies sont des *exemples* présupposant que
    Phraseanet est installé à l'adresse http://phraseanet.mondomaine.com. Il
    faut adapter ces URLs en fonction de l'adresse réelle.

+-------------+------------------------------------------------------------------------+-----------------------------------------------------------------------+
| Fournisseur | Gestion des applications                                               | URL de callback à fournir                                             |
+=============+========================================================================+=======================================================================+
| Facebook    | https://developers.facebook.com/apps                                   | http://phraseanet.mondomaine.com/login/provider/facebook/callback/    |
+-------------+------------------------------------------------------------------------+-----------------------------------------------------------------------+
| Twitter     | https://dev.twitter.com/apps                                           | http://phraseanet.mondomaine.com/login/provider/twitter/callback/     |
+-------------+------------------------------------------------------------------------+-----------------------------------------------------------------------+
| Google Plus | https://code.google.com/apis/console/                                  | http://phraseanet.mondomaine.com/login/provider/google-plus/callback/ |
+-------------+------------------------------------------------------------------------+-----------------------------------------------------------------------+
| GitHub      | https://github.com/settings/applications                               | http://phraseanet.mondomaine.com/login/provider/github/callback/      |
+-------------+------------------------------------------------------------------------+-----------------------------------------------------------------------+
| Viadeo      | http://dev.viadeo.com/documentation/authentication/request-an-api-key/ | http://phraseanet.mondomaine.com/login/provider/viadeo/callback/      |
+-------------+------------------------------------------------------------------------+-----------------------------------------------------------------------+
| LinkedIn    | https://www.linkedin.com/secure/developer                              | http://phraseanet.mondomaine.com/login/provider/linkedin/callback/    |
+-------------+------------------------------------------------------------------------+-----------------------------------------------------------------------+

Services de Cache
*****************

Les services de cache **cache** et **opcode-cache** peuvent être configurés avec
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

Gestion des sessions
********************

Les sessions sont stockées par défaut sur le disque, dans le système de
fichiers.

Il est possible d'utiliser d'autres types de stockage :

+----------------+------------------------------------------------------------------------------------+------------+
| Type           | Description                                                                        | Options    |
+================+====================================================================================+============+
| file           | Stockage des sessions sur le disque                                                |            |
+----------------+------------------------------------------------------------------------------------+------------+
| memcache       | Stockage des sessions dans un serveur Memcached, utilise l'extension PHP memcache  | host, port |
+----------------+------------------------------------------------------------------------------------+------------+
| memcached      | Stockage des sessions dans un serveur Memcached, utilise l'extension PHP memcached | host, port |
+----------------+------------------------------------------------------------------------------------+------------+
| redis          | Stockage des sessions dans un serveur Redis, utilise l'extension PHP redis         | host, port |
+----------------+------------------------------------------------------------------------------------+------------+

.. warning::

    Le paramétrage de la durée de vie (`ttl`) de la session ne fonctionne pas avec la
    gestion par le système de fichiers. Dans ce cas, utiliser le paramétrage
    `gc_maxlifetime` de PHP.

.. _search-engine-service-configuration:

Service de moteur de recherche
******************************

Seul le moteur de recherche Elasticsearch est disponible.

+------------------------------------------------------------------+------------------------------+
| Nom                                                              | Options                      |
+==================================================================+==============================+
| Alchemy\\Phrasea\\SearchEngine\\Elastic\\ElasticSearchEngine     | host, port, index            |
+------------------------------------------------------------------+------------------------------+

Proxies de confiance
********************

Si Phraseanet est derrière un reverse-proxy, renseigner l'adresse du
reverse proxy pour que les adresses IP des utilisateurs soient
reconnues.

.. code-block:: yaml

    trusted-proxies:
        192.168.27.15
        10.0.0.45

Champs optionnels à l'enregistrement
************************************

La section `registration-fields` permet de personnaliser les champs disponibles
dans le formulaire de la page d'inscription ainsi que leur caractère
obligatoire.

.. code-block:: yaml

    registration-fields:
        -
            name: firstname
            required: true
        -
            name: lastname
            required: true
        -
            name: company
            required: false

+-----------+-----------------------+
| id        | Nom (déprécié)        |
+-----------+-----------------------+
| login     | Identifiant           |
+-----------+-----------------------+
| gender    | Sexe                  |
+-----------+-----------------------+
| firstname | Prénom                |
+-----------+-----------------------+
| lastname  | Nom                   |
+-----------+-----------------------+
| address   | Adresse               |
+-----------+-----------------------+
| zipcode   | Code Postal           |
+-----------+-----------------------+
| geonameid | Ville, Pays           |
+-----------+-----------------------+
| position  | Poste                 |
+-----------+-----------------------+
| company   | Société               |
+-----------+-----------------------+
| job       | Activité              |
+-----------+-----------------------+
| tel       | Téléphone             |
+-----------+-----------------------+
| fax       | Fax                   |
+-----------+-----------------------+

.. note::

    Dans le formulaire d'inscription, il n'est possible de remplir la
    ville et pays de l'utilisateur que par le Geonameid.
    Geonameid n'est fonctionnel que si le webservice
    https://geonames.alchemyasp.com est utilisé.

    **Dans le cas ou l'instance Phraseanet ne peut pas accéder au serveur
    Geonames** indiquer *null* comme adresse du serveur Geonames dans la
    configuration.

    Dans ce contexte, ne pas indiquer geonameid dans le formulaire
    d'inscription.

Configuration Sendfile / XSendFile
**********************************

La configuration xsendfile doit être manipulée à l'aide des outils en ligne de
commandes. Les documentations pour :ref:`Nginx<nginx-sendfile>` et
:ref:`Apache<apache-xsendfile>` sont disponibles.

Configuration des plugins
*************************

Les plugins se configurent aussi dans ce fichier. Se référer à la
:doc:`documentation des plugins <Plugins>` pour cette partie.

Configuration du service de douane
**********************************

Les points de vérification du service de douane sont configurables. Il est aussi
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
| Checker\Dimension   | Vérification sur les dimensions du fichier           | width  : largeur mini du fichier  |
|                     | (* si applicable)                                    | height : hauteur mini du fichier  |
+---------------------+------------------------------------------------------+-----------------------------------+
| Checker\Extension   | Vérification sur les extensions du fichiers          | extensions : les extensions       |
|                     |                                                      | de fichiers autorisées            |
+---------------------+------------------------------------------------------+-----------------------------------+
| Checker\Filename    | Vérifie si le fichier n'est pas un doublon           | sensitive : active la             |
|                     | En se basant sur son nom                             | sensibilité à la casse            |
+---------------------+------------------------------------------------------+-----------------------------------+
| Checker\MediaType   | Vérification sur le type du fichier (Audio, Video...)| mediatypes : les types de         |
|                     |                                                      | médias autorisés                  |
+---------------------+------------------------------------------------------+-----------------------------------+
| Checker\Colorspace  | Vérification sur l'espace de couleur du fichier      | colorspaces : les types d'espaces |
|                     | (* si applicable)                                    | colorimétriques autorisés         |
+---------------------+------------------------------------------------------+-----------------------------------+

Le service de douane permet également de personnaliser la détection des types
mime via le paramètre `extension-mapping`. Sur certains systèmes, des mauvais
types mimes peuvent être détectés. Utiliser ce tableau pour forcer un type mime
en fonction d'une extension de fichier.

Restriction sur collections
~~~~~~~~~~~~~~~~~~~~~~~~~~~

Il est possible de restreindre la portée d'un point de vérification sur un
ensemble de collections en fournissant une liste de base_id correspondant :

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

Exemple d'un point de vérification qui filtre les documents sur leurs données
GPS :

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

Préférences utilisateurs
************************

Il est possible de personnaliser les préférences utilisateur par défaut.
Les paramètres suivants sont ajustables :

+-------------------------+-----------------------------------------------------------+-------------------+------------------------------------------------------------------------------------+
| Nom                     | Description                                               | Valeur par défaut | Valeurs disponibles                                                                |
+=========================+===========================================================+===================+====================================================================================+
| view                    | Affichage des résultats                                   | thumbs            | *thumbs* (en vignettes) *list* (en liste)                                          |
+-------------------------+-----------------------------------------------------------+-------------------+------------------------------------------------------------------------------------+
| images_per_page         | Nombre d'image par page de résultat                       | 20                |                                                                                    |
+-------------------------+-----------------------------------------------------------+-------------------+------------------------------------------------------------------------------------+
| images_size             | Taille des vignettes de résultat                          | 120               |                                                                                    |
+-------------------------+-----------------------------------------------------------+-------------------+------------------------------------------------------------------------------------+
| editing_images_size     | Taille des vignettes d'édition                            | 134               |                                                                                    |
+-------------------------+-----------------------------------------------------------+-------------------+------------------------------------------------------------------------------------+
| editing_top_box         | Taille du bloc supérieur d'édition (pourcentage)          | 30                |                                                                                    |
+-------------------------+-----------------------------------------------------------+-------------------+------------------------------------------------------------------------------------+
| editing_right_box       | Taille du bloc droit d'édition (pourcentage)              | 48                |                                                                                    |
+-------------------------+-----------------------------------------------------------+-------------------+------------------------------------------------------------------------------------+
| editing_left_box        | Taille du bloc gauche d'édition (pourcentage)             | 33                |                                                                                    |
+-------------------------+-----------------------------------------------------------+-------------------+------------------------------------------------------------------------------------+
| basket_sort_field       | Index de tri des paniers                                  | name              | *name* (par nom) ou *date* (par date)                                              |
+-------------------------+-----------------------------------------------------------+-------------------+------------------------------------------------------------------------------------+
| basket_sort_order       | Ordre de tri des paniers                                  | ASC               | *ASC* (ascendant) ou *DESC* (descendant)                                           |
+-------------------------+-----------------------------------------------------------+-------------------+------------------------------------------------------------------------------------+
| warning_on_delete_story | Alerter avant la suppression d'un reportage               | true              | *true* (oui) ou *false* (non)                                                      |
+-------------------------+-----------------------------------------------------------+-------------------+------------------------------------------------------------------------------------+
| client_basket_status    | Afficher les paniers dans *Classic*                       | 1                 | *1* (oui) ou *0* (non)                                                             |
+-------------------------+-----------------------------------------------------------+-------------------+------------------------------------------------------------------------------------+
| css                     | Theme CSS de production                                   | 000000            | *000000* (sombre) ou *959595* (clair)                                              |
+-------------------------+-----------------------------------------------------------+-------------------+------------------------------------------------------------------------------------+
| advanced_search_reload  | Utiliser les dernières options de recherche au chargement | 1                 | *1* (oui) ou *0* (non)                                                             |
+-------------------------+-----------------------------------------------------------+-------------------+------------------------------------------------------------------------------------+
| start_page_query        | Question par défaut                                       | last              |                                                                                    |
+-------------------------+-----------------------------------------------------------+-------------------+------------------------------------------------------------------------------------+
| start_page              | Page de démarrage de production                           | QUERY             | *PUBLI* (publications) ou *QUERY* (recherche) ou *LAST_QUERY* (dernière recherche) |
+-------------------------+-----------------------------------------------------------+-------------------+------------------------------------------------------------------------------------+
| rollover_thumbnail      | Affichage au rollover                                     | caption           | *caption* (notice) ou *preview* (prévisualisaton)                                  |
+-------------------------+-----------------------------------------------------------+-------------------+------------------------------------------------------------------------------------+
| technical_display       | Afficher les informations techniques                      | 1                 | *1* (oui) ou *0* (non) ou *group* (groupé avec la notice)                          |
+-------------------------+-----------------------------------------------------------+-------------------+------------------------------------------------------------------------------------+
| doctype_display         | Afficher une icone correspondante au type de document     | 1                 | *1* (oui) ou *0* (non)                                                             |
+-------------------------+-----------------------------------------------------------+-------------------+------------------------------------------------------------------------------------+
| basket_caption_display  | Afficher la notice des enregistrements dans un panier     | 0                 | *1* (oui) ou *0* (non)                                                             |
+-------------------------+-----------------------------------------------------------+-------------------+------------------------------------------------------------------------------------+
| basket_status_display   | Afficher les status des enregistrements dans un panier    | 0                 | *1* (oui) ou *0* (non)                                                             |
+-------------------------+-----------------------------------------------------------+-------------------+------------------------------------------------------------------------------------+
| basket_title_display    | Afficher le titre des enregistrements dans un panier      | 0                 | *1* (oui) ou *0* (non)                                                             |
+-------------------------+-----------------------------------------------------------+-------------------+------------------------------------------------------------------------------------+

Durées de session
*****************

idle
~~~~
Fixe (en secondes) la durée d'inactivité de l'utilisateur avant déconnexion automatique.

Le réglage "idle" est prioritaire sur le réglage "lifetime" et l'option "Se souvenir de moi" n'est alors pas présente
sur la page d'accueil.

lifetime
~~~~~~~~
En cochant "Se souvenir de moi" à l'authentification, durant cette période (en secondes) l'accès à l'application est
immédiat sans avoir à se ré-authentifier.


.. _YAML: https://wikipedia.org/wiki/Yaml

Vignettes
*********

lazyload
~~~~~~~~
Booléan qui active ou désactive le lazyload des vignettes dans production, cette option est obsolète
si l'option "static-file" est activé pour l'affichage des vignettes.

static-file
~~~~~~~~~~~
En activant cette option, les vignettes sont servies comme contenu statique.
Un lien symbolique est créé pour chaque image.

.. code-block:: yaml

    static-file:
        enabled: true
        type: nginx
        symlink-directory: ''

Paquets intégrés
****************

Lecteur audiovidéo Videojs
~~~~~~~~~~~~~~~~~~~~~~~~~~

Phraseanet inclut le lecteur `Videojs`_ pour la prévisualisation de documents
de type audio et vidéo.

Il peut être personnalisé :

.. code-block:: yaml

    embed_bundle:
        video_player: videojs                 # (string)   Paramétrage pour le lecteur audiovidéo videojs
        video_autoplay: false                 # (boolean)  Active le lancement automatique de la lecture des documents vidéo
        video_available_speeds:               # (array)    Vitesses de lecture proposées dans le lecteur videojs
            - '0.5'
            - 1
            - 2
            - 3
            - 4
        audio_player: videojs
        audio_autoplay: false                 # (boolean)  Active le lancement automatique de la lecture de documents audio
        coverSubdef: thumbnailx4              # (string)   Nom de la sous-définition présentée dans le lecteur lors de la lecture d'un document audio

.. note::

    La lecture à haute vitesse a des impacts sur la consomation de
    bande passante.

Visionneuse pdf.js
~~~~~~~~~~~~~~~~~~

La visionneuse `Pdf.js`_ peut être utilisée pour l'affichage de prévisualisations
des documents PDF en remplacement de la visionneuse FlexPaper utilisée
par defaut.

Pdfjs permet la lecture de fichiers PDF par le navigateur tandis que
FlexPaper nécessite que le plugin Adobe Flash Player soit installé et activé
dans le navigateur ainsi qu'autorisé, cas échéant, pour l'instance Phraseanet
consultée.

.. code-block:: yaml

    embed_bundle:
        document:
            player: flexpaper
            enable_pdfjs: true                # (boolean)  Active la visionneuse pdfjs pour l'affichage des documents PDF


.. note::

    FlexPaper reste utilisé pour l'affichage des prévisualisations de documents
    Office lorsque FlexPaper est le type de rendu utilisé pour la
    sous-définition Preview des médias de type document.


.. _Pdf.js: https://mozilla.github.io/pdf.js/
.. _Videojs: https://videojs.com/


