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

Voici un exemple de fichier de configuration (/lib/conf.d/configuration.yml) commenté :

.. literalinclude:: ../../common/github_source//lib/conf.d//configuration.yml
    :language: yaml

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

Embed bundle
************

Lecteur audiovidéo Videojs
~~~~~~~~~~~~~~~~~~~~~~~~~~

Phraseanet inclut le lecteur `Videojs`_ pour lecture des prévisualisations
des documents de type audio et vidéo.

Il peut être personnalisé :

.. code-block:: yaml

    embed_bundle:                                  # (array)     Configuration de embed bundle
        video:
            player: videojs                        # (array)     Active videojs comme lecteur de prévisualisations vidéos - seul choix possible
            autoplay: false                        # (boolean)   Active la lecture automatique de la prévisualisation vidéo
            video_message_start: StartOfMessage    # (string)    Le nom du champ documentaire ou est stockée la valeur de début de lecture en seconde
            coverSubdef: previewx4                 # (string)    Définit la sous-définition de type image utilisé pour présenter le lecteur hors lecture
            available-speeds:                      # (array)     Vitesses de défilement disponibles dans le lecteur
                - 1
                - 1.5
                - 3
        audio:
            player: videojs                        # (array)     Active vidéojs comme lecteur de prévisualisations audio
            autoplay: false                        # (boolean)   Active la lecture automatique de la prévisualisation audio

.. note::

    La lecture à haute vitesse a des impacts sur la consomation de
    bande passante.

Visionneuse pdf.js
~~~~~~~~~~~~~~~~~~

La visionneuse `Pdf.js`_ peut être utilisée pour l'affichage de
prévisualisations des documents PDF en remplacement de la visionneuse FlexPaper
utilisée par defaut.

Pdfjs permet la lecture de fichiers PDF par le navigateur tandis que
FlexPaper nécessite que le plugin Adobe Flash Player soit installé et activé
pour le navigateur ainsi qu'autorisé, cas échéant, pour l'instance Phraseanet
consultée.

.. code-block:: yaml

    embed_bundle:
        document:
            player: flexpaper                      # (string)    Pour les documents Office, utiliser flexpaper ou pdfjs
            enable-pdfjs: true                     # (boolean)   Utiliser pdfjs comme lecteur de prévisualisation pour les documents PDF


.. note::

    Flexpaper ou Pdfjs peuvent être utilisés pour la lecture des fichiers de
    prévisualisation de documents Microsoft Office. Paramétrer la
    sous-définition Preview pour les documents de type Document en fonction du
    choix de paramétrage du lecteur utilisé.

Video Editor
************

La section permet le paramétrage d'options dans l'outil d'édition vidéo proposé
dans Production.

.. code-block:: yaml

    video-editor:
        ChapterVttFieldName: VideoTextTrackChapters # (string)   Le nom du champ documentaire stockant les données de chapitrage
        seekBackwardStep: 500                       # (integer)  En millisecondes, la valeur de déplacement de la tête de lecture en arrière
        seekForwardStep: 500                        # (integer)  En millisecondes, la valeur de déplacement de la tête de lecture en avant
        playbackRates:                              # (array)    Les vitesses de défilement disponibles dans le lecteur
            - 1
            - '1.5'
            - 3

Geocoding providers
*******************

La section permet le paramétrage des options de la géolocalisation dans
Production.

Une clé publique MapBox API est requise pour utiliser l'affichage par
géolocalisation. Cette clé peut être obtenue sur le site `Mapbox`_.

Pour utiliser l'aide à la saisie proposée par `GeoNames`_ dans le formulaire
d'édition de Phraseanet, fournir une adresse geonames-server dans la section
Webservice du fichier de configuration.

.. code-block:: yaml

    geocoding-providers:                           # (array)     Configuration de la géolocalisation dans Production
        -
            map-provider: mapboxWebGL              # (string)    La bibliothèque utilisée pour l'affichage de cartes
            enabled: false                         # (string)    Active ou désactive la fonctionnalité dans Production
            public-key: ''                         # (string)    La clé d'API MapBox à utiliser
            map-layers:                            # (array)     Tableau regroupant les fonds de cartes proposées
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
            default-position:                      # (array)     La postion par défaut de la carte
                - '48.879162'
                - '2.335062'
            default-zoom: 5
            marker-default-zoom: 9
            geonames-field-mapping: true           # (boolean)   Active, désactive l'assistance à la saisie Geoname dans le formulaire d'édition
            cityfields: City, Ville                # (array)     Mapping des champs Phraseanet pour la propriété Name (la ville)
            provincefields: Province               # (array)     Mapping des champs Phraseanet pour la propriété Region
            countryfields: Country, Pays           # (array)     Mapping des champs Phraseanet pour la propriété Country

.. _Pdf.js: https://mozilla.github.io/pdf.js/
.. _Videojs: https://videojs.com/
.. _Mapbox: https://www.mapbox.com/
.. _GeoNames: https://www.geonames.org/

