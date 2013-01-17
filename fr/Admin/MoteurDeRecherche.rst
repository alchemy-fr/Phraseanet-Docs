Moteur de recherche
===================

.. topic:: L'essentiel

    Phraseanet est fourni par défaut avec le moteur de recherche Phrasea. Celui
    ci est très performant si en cas d'utilisation du module thesaurus.
    Toutefois, si le thesaurus n'est pas requiert, SphinxSearch peut être
    utilisé.
    Cette section explique les avantages de chacun et leur installation.

.. warning::

    Le setup du moteur de recherche se fait à l'installation de Phraseanet. Vous
    ne devriez pas modifier la configuration du moteur de recherche après cette
    étape.

Phrasea Engine
--------------

Le moteur Phrasea se compose d'un indexeur (Phraseanet-Indexer) et de
l'extension PHP Phraseanet-Extension qui permet de requèter l'index Phraseanet.

Un des principaux avantages de ce moteur est la prise en charge du thesaurus.

Sphinx-Search Engine
--------------------

SphinxSearch repose sur une technologie tierce qu'il est nécessaire d'installer.
Phraseanet requiert `SphinxSearch Engine`_ 2.0.6 ou supérieur.

Avantages
*********

Les principaux avantages de SphinxSearch Engine sont :

* sa scalabilité
* l'autocompletion
* sa rapidité

Configuration dans Phraseanet
*****************************

Après avoir installer SphinxSearch, Phraseanet doit être configuré.
Cette configuration de Phraseanet pour SphinxSearch va permmetre de générer un
fichier de configuration dédié pour le moteur de recherche.

Pour cela, se référer à la documentation de configuration
:ref:`search-engine-service-configuration`.

Une fois cette configuration effectuée, dans un navigateur, se connecter à
l'interface admin. Un gestionnaire de configuration permet de générer un fichier
de configuration Sphinx.

.. note::

    Notez que la configuration générée par Phraseanet pour SphinxSearch est
    complète. Si le serveur Sphinx est partagé avec d'autres applications
    il faudra prendre soin d'exclure la partie *server* au pied du fichier
    de configuration.

Ce fichier peut être maintenant utilisé avec votre serveur SphinxSearch
(générallement **/usr/local/etc/sphinx.conf**)
Le serveur SphinxSearch doit être redémarré pour que la configuration soit
prise en compte.
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

