Configuration
=============


Fichiers
--------

Config.yml
**********

Config.yml est le fichier de configuration principal de l'application, il permet
de configurer l'instance utilisée.

  .. code-block:: yaml

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

  * environment

    * Sélectionner l'environnement de configuration qui sera chargé 
      par l'application.

  * phraseanet

    * servername: L'URI ou est installée l'application
    * maintenance: Passer l'application en état de maintenance
    * debug: Passer l'application en mode debug
    * display_errors: Afficher les erreurs sur la sortie standard
    * database: Nom du service de connexion à la base de donnée 
      (voir connexion.yml)

  La configuration de Phraseanet permet de décrire les services 
  (voir services.yml) qui seront utilisés par l'application.

  * template_engine

    * Nom du service de template

  * orm

    * Nom du service ORM

  * :doc:`cache </Admin/Optimisation>`

    * Nom du service de cache

  * :doc:`opcodecache </Admin/Optimisation>`

    * Nom du service opcachecode


Connexions.yml
**************

  Connexions.yml permet de déclarer et nommer les propriétées des connexions
  vers les bases de donnée utilisées par l'application

  .. code-block:: yaml

    main_connexion:
      host: <HOST>
      port: <PORT>
      user: <USER>
      password: <PASSWORD>
      dbname: <DB_NAME>
      driver: <DRIVER>
      charset: <CHARSET>

  * host: adresse du serveur 
  * port: port du serveur
  * user: identifiant compte utilisateur 
  * password: mot de passe compte utilisateur
  * dbname:  nom de base de donnée  (application box)
  * driver: `driver 
    <http://docs.doctrine-project.org/projects/doctrine-dbal/en/2.0.x/reference/configuration.html#driver>`_ 
    base de donnée
  * charset: type encodage charactère

Services.yml
************
  .. code-block:: yaml

    Orm:
      doctrine_dev:
        type: Orm\Doctrine
        options:
          debug: true
          dbal: main_connexion
          cache:
            query:
              service: Cache\array_cache
            result:
              service: Cache\array_cache
            metadata:
              service: Cache\array_cache
          log:
            service: Log\query_logger
      doctrine_test:
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
      doctrine_prod:
        type: Orm\Doctrine
        options:
          debug: false
          dbal: main_connexion
          cache:
            query:
              service: Cache\apc_cache
            result:
              service: Cache\memcache_cache
            metadata:
              service: Cache\apc_cache
    TemplateEngine:
      twig:
        type: TemplateEngine\Twig
        options:
          debug: false
          charset: utf-8
          strict_variables: false
          autoescape: true
          optimizer: true
      twig_debug:
        type: TemplateEngine\Twig
        options:
          debug: true
          charset: utf-8
          strict_variables: true
          autoescape: true
          optimizer: true
    Log:
      query_logger:
        type: Log\Doctrine\Monolog
        options:
          output: json
          channel: query-logger
          handler: rotate
          max_day: 2
          filename: doctrine-query.log
      sql_logger:
        type: Log\Doctrine\Phpecho
    Cache:
      array_cache:
        type: Cache\ArrayCache
      memcache_cache:
        type: Cache\MemcacheCache
        options:
          host: localhost
          port: 11211
      apc_cache:
        type: Cache\ApcCache
      xcache_cache:
        type: Cache\XcacheCache

Structure
---------

Le principal réglage de l’application est dans la structure XML de la
:term:`base <base>` à laquelle on accède via le module :

administration > base de donnée > structure.

    .. todo:: mettre à jour

Réglage de collection
---------------------

* Ajout de valeurs suggérées

Les valeurs suggérées sont des aides à la saisie.
Elles permettent de créer des listes de termes que l'on retrouve
lors de l’édition.

* Ajout d'un Minilogo

Logo représentatif de la collection

* Ajout d'un Fichier de Watermark (filigrane)

Le Fichier de filigrane ou watermark s'applique sur les documents
en prévisualisation selon les droits de l'utilisateur connecté.

* Ajout d'un StampLogo

Logo accompagnant le document au téléchargement et pouvant être associé à
la description de celui-ci.

  comment créer un stamplogo

    * ajouter un ficher (logo)
    * cliquer sur la collection puis sur reglage de collection
    * cliquer sur "vue xml" et éditer le xml en suivant l’exemple ci-dessous

  .. code-block:: xml

    <?xml version="1.0" encoding="UTF-8"?>
    <baseprefs>
      <status>0</status>

      <stamp>
            <logo position="left" width="25%"/>
            <text size="50%">Titre: <field name="SujetTitre"/></text>
            <text size="50%">Legende: <field name="Legende"/></text>
            <text size="50%">Copyright: <field name="Copyright"/></text>
            <text size="50%">Date : <field name="Date"/></text>
            </stamp>
      <sugestedValues>
      </sugestedValues>
    </baseprefs>

