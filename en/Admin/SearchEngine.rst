Search Engine
=============

.. topic:: The essential

    Phraseanet is bundled with Phrasea engine as defailt search engine.
    Phrasea allows Phraseanet Thesaurus binding to search engine results.
    If Phraseanet Thésaurus is not activated, SphinxSearch can be enabled.
    This section explains advantages of both and how they should be setup.

.. warning::

    Search Engine settings should be done after install and should not be
    re-adjusted.

Phrasea Engine
--------------

Phrasea search engine is composed by an indexer and a PHP Phraseanet extension.

One of the biggest advantages of this engine is thesaurus support.

Sphinx-Search Engine
--------------------

SphinxSearch engine is a third party technology that you have to install.
Phraseanet requires `SphinxSearch Engine`_ 2.0.6 or higher.

Advantages
**********

Main SphinxSearch advantages are :

* fast
* scalable
* supports autocompletion

Configuration inside Phraseanet
*******************************

After having installed SphinxSearch, Phraseanet must be configured to use it.
Phraseanet admin provides a tool to generate SphinxSearch configuration.

Pour cela, consulter la documentation de configuration
:ref:`search-engine-service-configuration`.

.. note::

    Please note that the generated configuration is a complete SphinxSearch
    configuration. If SphinxSearch is shared with other applications, **server**
    section at the end of the configuration should be removed.

This file can be used with SphinxSearch server (**/usr/local/etc/sphinx.conf**).
Restart SphinxSearch pour appliquer la configuration.
In case of failure, please find `SphinxSearch documentation`_.

Please also consider the following FAQ:

Autocompletion
**************

Propositions have to be generated to have the benefit of autocompletion.
Use the command to do so:

.. code-block: none

    bin/console sphinx:generate-suggestions

.. _SphinxSearch documentation: http://sphinxsearch.com/docs/manual-2.0.6.html
.. _SphinxSearch Engine: http://sphinxsearch.com/downloads/release/

