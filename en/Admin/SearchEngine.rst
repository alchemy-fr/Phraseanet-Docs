Search Engine
=============

.. topic:: The essential

    Phraseanet 4.0 relies exclusively on Elasticsearch search engine.

     Based on Apache Lucene, it allows, among others, facets in Phraseanet.
     It installs on the host application server or on remote server.

.. _Elasticsearch:

Elasticsearch
-------------

The ElasticSearch engine allows indexing and searching data.

Indexing
********

Indexing makes index of the content of databases published in Phraseanet
application and allows searching the content of records descriptive notes.

Indexing runs in background. It monitors bases to index
(Appearance, disappearance or alteration of documents) and maintains up to date
search indexes.

It is necessary to have ElasticSearch 1.7 or greater to use it in Phraseanet.

Configuration in Phraseanet
***************************

Set by editing Search engine settings form
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

As Phraseanet administrator, go to **Admin** / **Search engine settings** item.

Fill the address, port, and name of the desired ElasticSearch index in the
settings form.

Set by editing the configuration file
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

[Source]/config/confuguration.yml

.. code-block:: none

    search-engine:
        type: Alchemy\Phrasea\SearchEngine\Elastic\ElasticSearchEngine
        options:
            host: 127.0.0.1
            port: 9200
            index: phraseanet

Once configured, execute the following commands in the console
to confirm the configuration and create the search index.

.. code-block:: none

    bin/console compile:configuration
    bin/console searchengine:index:create

.. _Operations-on-indexes:

Operations on indexes
*********************

**To delete indexes** :

.. code-block:: none

    bin/console s:i:d


**To build indexes** :

.. code-block:: none

    bin/console s:i:c


**To populate indexes** :

.. code-block:: none

    bin/console s:i:p

Options for "populate"

.. code-block:: none

    Usage:
      searchengine:index:populate [options]

    Options:
          --thesaurus                Only populate thesaurus data
          --records                  Only populate record data
          --databox_id[=DATABOX_ID]  Only populate chosen databox (multiple values allowed)
      -h, --help                     Display this help message
      -q, --quiet                    Do not output any message
      -V, --version                  Display this application version
          --ansi                     Force ANSI output
          --no-ansi                  Disable ANSI output
      -n, --no-interaction           Do not ask any interactive question
      -v|vv|vvv, --verbose           Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

