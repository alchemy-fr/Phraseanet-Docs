Configuration
=============


Fichiers
--------

Config.yml
**********

Config.yml est le fichier de configuration principal de l'application, il permet
de configurer un  "environnement" et de l'utiliser.

Vous pouvez, dans ce fichier, décrire plusieurs environnements et passer de l'un
à l'autre grace à la variable "environment"

Il utilise le format `Yaml <https://wikipedia.org/wiki/Yaml>`_, très lisible
et facilement compréhensible.

Ce fichier requiert deux blocs minimaux :

Dans l'exemple ci-dessous, l'environnement choisi est "dev", et l'on trouve
en dessous la déclaration de cet environnement.

  .. code-block:: yaml

    #config.yml
    environment: dev
    dev:
        phraseanet:
            servername: 'http://dev.phrasea.net/'
            maintenance: false
            debug: true
            display_errors: true
            database: main_connexion
        template_engine: twig_debug
        orm: doctrine_dev
        cache: array_cache
        opcodecache: array_cache


Détaillons la composition d'un environnement

* phraseanet (configuration principale)

  * servername: L'URI ou est installée l'application (requis)
  * maintenance: Passer l'application en état de maintenance
  * debug: Passer l'application en mode debug
  * display_errors: Afficher les erreurs sur la sortie standard
  * database: Nom de la connexion à la base de donnée (requis) voir
    connexion.yml

* template_engine : service de mise en page (requis)
* orm : Service de mapping à la base de donnée (requis)
* cache : service de cache principal :doc:`cache </Admin/Optimisation>`
* opcodecache : service de cache opcode :doc:`opcodecache </Admin/Optimisation>`

Les différents services sont déclarés dans le fichier service.yml.


Connexions.yml
**************

Connexions.yml permet de déclarer et nommer des connexions vers des bases de
données.
La connexion est partagé par différent service (Phraseanet et ORM)

  .. code-block:: yaml

    #connexions.yml
    main_connexion:
      host: localhost
      port: 3306
      user: phrasea_engine
      password: s3cr3t
      dbname: applicationBox
      driver: pdo_mysql
      charset: UTF8

  * host: adresse du serveur MySQL
  * port: port MySQL
  * user: utilisateur MySQL
  * password: mot de passe  MySQL
  * dbname:  nom de la base de donnée (application box)
  * driver: nom du driver `voir liste complète
    <http://docs.doctrine-project.org/projects/doctrine-dbal/en/2.0.x/reference/configuration.html#driver>`_
  * charset: encodage de la connexion

Services.yml
************

Le fichier service.yml décrit des services. Ces services sont utilisables dans
le fichier config.yml.

Vous trouverez un exemple de fichier de service dans config/services.sample.yml.

Quatre groupes de services sont disponibles en standard dans l'application:
ORM, TemplateEngine, Log, et Cache.


Voici la structure générale d'un service :

  .. code-block:: yaml

    ServiceGroupe:
      ServiceName:
        type: Namespace\Classe
        options:
          parametre1: valeur
          parametre2: valeur


Un service requiert un type , qui spécifie la classe PHP à charger.
Le tableau d'option est optionnel et fonction du service.

Voyons les options que vous pourrez trouver dans les principaux services de
Phraseanet :

Service d'ORM Doctrine
^^^^^^^^^^^^^^^^^^^^^^

Voici le service *doctrine_dev* :

  .. code-block:: yaml

    #services.yml
    Orm:
      doctrine_dev:
        type: Orm\Doctrine
        options:
          debug: true
          dbal: test_connexion
          cache:
            query:
              service: Cache\array_cache
            result:
              service: Cache\array_cache
            metadata:
              service: Cache\array_cache
          log:
            service: Log\query_logger



  * debug : activation du debug
  * dbal : Nom d'une connexion déclarée dans connexions.yml
  * cache : paramètrage des options de cache

    * query : utilisation du service **Cache\\array_cache** (voir ci dessous)
    * result : utilisation du service **Cache\\array_cache** (voir ci dessous)
    * metadata : utilisation du service **Cache\\apc_cache** (voir ci dessous)

  * log : utilisation du service **Log\\query_logger** (voir ci dessous)

  Pour plus d'informations sur les différents caches de Doctrine voir la
  `documentation doctrine <http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/caching.html#integrating-with-the-orm>`_


Service de `Mise En Page <http://en.wikipedia.org/wiki/Template_engine_%28web%29>`_ Twig
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

Voici le service *twig_prod*

  .. code-block:: yaml

    #services.yml
    TemplateEngine:
      twig_prod:
        type: TemplateEngine\Twig
        options:
          debug: false
          charset: utf-8
          strict_variables: false
          autoescape: true
          optimizer: true



  * debug : activation du debug
  * charset : encodage du système de mise en page.
  * strict_variable : arrêter l'exécution lors de l'appel à une variable
    inconnue (pour les développeurs)
  * autoescape: Activer la prise en charge automatiques des caractères
    d'auto échappement.
  * optimizer : Activer
    `l'optimizer <http://twig.sensiolabs.org/doc/api.html#optimizer-extension>`_

  Pour plus de détails sur les options de l'environnement voir la
  `documentation twig <http://twig.sensiolabs.org/doc/api.html#environment-options>`_

Service de Log Doctrine Monolog
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

Voici le service de log Doctrine Monolog. Ce service n'est utilisable que
pour le log du service Doctrine.

  .. code-block:: yaml

    #services.yml
    Log:
      query_logger:
        type: Log\Doctrine\Monolog
        options:
          output: json
          channel: query-logger
          handler: rotate
          max_day: 2
          filename: doctrine-query.log

  * output : Spécification du formatage de sortie.
    Trois modes sont possibles.

    * json : Formatage en `Json <https://wikipedia.org/wiki/Json>`_
    * yaml : Formatage en `Yaml <https://wikipedia.org/wiki/Yaml>`_
    * vdump : Affiche les informations de la variable de sortie PHP de manière
      à ce qu'elle soit lisible.
      voir `var_dump <http://www.php.net/manual/fr/function.var-dump.php>`_

  * channel : Nom du channel utilisé par le service de log.
    C'est une façon d'identifier à quelle partie de l'application une entrée de
    log est liée.
  * handler : Permet de spécifier le type de gestionnaire de log utilisé par le
    service.

    * stream : Ecrire les logs dans un fichier.
    * rotate : Ecrire les logs dans un fichiers qui sont renouvelés tous
      les jours et limiter le nombre de fichiers enregistrés.

  * filename: Le nom du fichier de log.
  * max_day : Spécifier en nombre de jour la fréquence de rotation opérée sur
    les fichiers de logs dans le cas ou le handler de rotation est utilisé.

Services de Cache ArrayCache
^^^^^^^^^^^^^^^^^^^^^^^^^^^^

  .. code-block:: yaml

    #services.yml
    Cache:
      array_cache:
        type: Cache\ArrayCache


Services de Cache ApcCache
^^^^^^^^^^^^^^^^^^^^^^^^^^

  .. code-block:: yaml

    #services.yml
    Cache:
      apc_cache:
        type: Cache\ApcCache


Services de Cache XCache
^^^^^^^^^^^^^^^^^^^^^^^^^^

  .. code-block:: yaml

    #services.yml
    Cache:
      xcache_cache:
        type: Cache\XcacheCache


Services de Cache MemcacheCache
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

  .. code-block:: yaml

    #services.yml
    Cache:
      memcache_cache:
        type: Cache\MemcacheCache
        options:
          host: localhost
          port: 11211

* host: Adresse du serveur Memcached
* port: Port du serveur Memcached

Réglages de collection
----------------------

* Ajout de valeurs suggérées

Les valeurs suggérées sont des aides à la saisie que vous pouvez régler et que
vous retrouverez lors de l'`editing </User/Manuel/Editer>`_

* Minilogo

Logo de la collection

* Watermark (filigrane)

Le Fichier de filigrane ou watermark s'applique sur les documents en
prévisualisation.

* Stamp

Le Stamp est un logo ajouté au document et pouvant être associé à
la description de celui-ci.

Pour utiliser cette option :

  * Ajouter un logo de Stamp
  * Aller dans les réglages de collection
  * Dans la "Vue XML", editer le XML et ajouter le block "stamp" comme
    ci-dessous

  .. code-block:: xml

    <?xml version="1.0" encoding="UTF-8"?>
    <baseprefs>

      /**
       * ....
       */

      <stamp>
        <logo position="left" width="25%"/>
        <text size="50%">Titre: <field name="SujetTitre"/></text>
        <text size="50%">Legende: <field name="Legende"/></text>
        <text size="50%">Copyright: <field name="Copyright"/></text>
        <text size="50%">Date : <field name="Date"/></text>
      </stamp>

    </baseprefs>

