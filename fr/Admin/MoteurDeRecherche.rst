Moteur de recherche
===================

.. topic:: L'essentiel

    Phraseanet est fourni par défaut avec le moteur de recherche Phrasea.
    Performant, il permet l'emploi du module thesaurus de Phraseanet.
    Toutefois, si l'utilisation du module Phraseanet Thésaurus n'est pas
    envisagée, SphinxSearch peut être utilisé.
    Cette section explique les avantages de chacun et leur installation.

.. warning::

    Le paramétrage du moteur de recherche se fait à l'installation de
    Phraseanet. Par la suite les paramètres ne devraient pas être réajustés.

Phrasea Engine
--------------

Le moteur Phrasea se compose d'un indexeur (Phraseanet-Indexer) et de
l'extension PHP Phraseanet-Extension qui permet d'effectuer des recherches dans
l'index Phraseanet.

Un des principaux avantages de ce moteur est la prise en charge du thesaurus.

Sphinx-Search Engine
--------------------

SphinxSearch repose sur une technologie tierce qu'il est nécessaire d'installer.
Phraseanet requiert `SphinxSearch Engine`_ 2.0.6 ou supérieur.

Avantages
*********

Les principaux avantages de SphinxSearch Engine sont :

* la rapidité
* la scalabilité
* l'autocompletion

Configuration dans Phraseanet
*****************************

Après avoir installé SphinxSearch, Phraseanet doit être configuré.
Le paramétrage de Phraseanet pour SphinxSearch permet de générer un fichier
de configuration dédié à ce moteur de recherche.

Pour cela, consulter la documentation de configuration
:ref:`search-engine-service-configuration`.

Une fois cette configuration effectuée, dans un navigateur, se connecter à
l'interface admin. Un gestionnaire de configuration permet de générer un fichier
de configuration Sphinx.

.. note::

    Notez que la configuration générée par Phraseanet pour SphinxSearch est
    complète. Si le serveur SphinxSearch est partagé avec d'autres applications
    il faudra prendre soin d'exclure la partie *server* au pied du fichier
    de configuration.

Ce fichier peut être maintenant utilisé avec le serveur SphinxSearch
(généralement **/usr/local/etc/sphinx.conf**).
Redémarrer SphinxSearch pour appliquer la configuration.
En cas d'erreur avec SphinxSearch, consulter la `documentation SphinxSearch`_.
Les sections suivantes apportent des réponses à des questions fréquemment
posées.

Gestion de l'autocompletion
***************************

Pour que l'autocompletion fonctionne à la recherche, il faut générer les
propositions.

Pour cela il faut utiliser la commande :

.. code-block: bash

    bin/console sphinx:generate-suggestions

.. _documentation SphinxSearch: http://sphinxsearch.com/docs/manual-2.0.6.html
.. _SphinxSearch Engine: http://sphinxsearch.com/downloads/release/

