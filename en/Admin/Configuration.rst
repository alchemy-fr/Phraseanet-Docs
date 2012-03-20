Configuration
=============

Files
-----

Config.yml
**********

Config.yml is the mail configuration file for Phraseanet. You can setup
environments in it and select the one you want to use with the "environment"
var.

It uses the  `Yaml <https://wikipedia.org/wiki/Yaml>`_ format, which is easily
understandable and human compatible.

This file requires two blocks.

In the following example, the "dev" environment is selected and we find the
declaration of this environment below.

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


Let's detail environment structure :


* phraseanet (main conf)

  * servername: Application URI (required)
  * maintenance: Switch to maintenance mode
  * debug: Switch to debug mode
  * display_errors: Display error in the standard output
  * database: Name of the database connection (required) see connexion.yml below

* template_engine : Templating service (required)
* orm : Database Object Relationnal Mapper (required)
* cache : Main cache service :doc:`cache </Admin/Optimization>`
* opcodecache : Opcode cache service :doc:`opcodecache </Admin/Optimization>`

Services are setup in the service.yml file.

Connexions.yml
**************

Connexions.yml stores named connections.
These connections are shared among services (Phraseanet, ORM, ...)

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

  * host: MySQL server address
  * port: MySQL server port
  * user:  MySQL user
  * password: MySQL password
  * dbname: Database name (application box)
  * driver: Driver name `see complete liste
    <http://docs.doctrine-project.org/projects/doctrine-dbal/en/2.0.x/reference/configuration.html#driver>`_
  * charset: connection encoding

Services.yml
************

Service.yml describes services. These are callable from config.yml

You will find a sample on services file in  config/services.sample.yml.

Four main groups of services are available in Phraseanet : ORM, TemplateEngine,
Log, and Cache.

Here's the default structure of a service

  .. code-block:: yaml

    ServiceGroupe:
      ServiceName:
        type: Namespace\Classe
        options:
          parameter1: value
          parameter2: value


A service requires a type which is the PHP class to load.
Array parameters is optionnel and depends of the service.

Let's see what are the options you can find in Phraseanet services :

Doctrine ORM Service
^^^^^^^^^^^^^^^^^^^^

Here's *doctrine_dev* service :

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



  * debug : Switch to debug mode
  * dbal : The name of a connection in connexions.yml
  * cache : Cache option parameters

    * query : service **Cache\\array_cache** (see below)
    * result : service **Cache\\array_cache** (see below)
    * metadata : service **Cache\\apc_cache** (see below)

  * log : service **Log\\query_logger** (see below)

  .. seealso:: For more informations about doctrine caching systems http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/caching.html#integrating-with-the-orm>

Twig `Templating service <http://en.wikipedia.org/wiki/Template_engine_%28web%29>`_
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

Here's *twig_prod*

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



  * debug : Switch to debug mode
  * charset : Template engine internal character encoding
  * strict_variable : Stop rendering on unknown vars (for developers)
  * autoescape: adds automatic output escaping.
  * optimizer : Switch to 
    `optimizer <http://twig.sensiolabs.org/doc/api.html#optimizer-extension>`_
    mode
    
    .. seealso:: For more details on Twig environement options <http://twig.sensiolabs.org/doc/api.html#environment-options>

Doctrine Monolog Log Service
^^^^^^^^^^^^^^^^^^^^^^^^^^^^

Here's Doctrine Monolog log service. This service can only be use to log
Doctrine activity.

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


  * output : Choose output format. 
    Available mods.

    * json : Formatting in `Json <https://wikipedia.org/wiki/Json>`_
    * yaml : Formatting in `Yaml <https://wikipedia.org/wiki/Yaml>`_
    * vdump : Display PHP output variable in a way that's readable by humans. 
      see `var_dump <http://www.php.net/manual/fr/function.var-dump.php>`_

  * channel : Channel's name used by the logger service.
    It's a way to identify on which part of the application the log entry is 
    related on.
  * handler : Attribute a specific handler for the log service.

    * stream : Store logs into a single file.
    * rotate : Stores logs to files that are rotated every day and a limited 
      number of files are kept.

  * filename: File's name.
  * max_day : Specify in days the frequency operated on files for the rotated 
    handler.



Cache service ArrayCache
^^^^^^^^^^^^^^^^^^^^^^^^^^^^

  .. code-block:: yaml

    #services.yml
    Cache:
      array_cache:
        type: Cache\ArrayCache



Cache service ApcCache
^^^^^^^^^^^^^^^^^^^^^^^^^^

  .. code-block:: yaml

    #services.yml
    Cache:
      apc_cache:
        type: Cache\ApcCache


Cache service XCache
^^^^^^^^^^^^^^^^^^^^^^^^^^

  .. code-block:: yaml

    #services.yml
    Cache:
      xcache_cache:
        type: Cache\XcacheCache




Cache service MemcacheCache
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

  .. code-block:: yaml

    #services.yml
    Cache:
      memcache_cache:
        type: Cache\MemcacheCache
        options:
          host: localhost
          port: 11211

* host: Memcache server address
* port: Memcache server port


Collection Settings
-------------------

* Suggested values

Suggested values are help to edit your documents. You can edit it and find it
ack in the `editing of document </User/Manual/Editing>`_

* Minilogo

Collection logo

* Watermark

Watermark file is a picture that will be used to watermark previews for users.

* StampLogo

This allows to add a stamp on picture.
To fully use this feature :

  * Add your stamp logo
  * Go into collection settings
  * Click "XML view", edit the XML, and add a "stamp" node as follows

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

