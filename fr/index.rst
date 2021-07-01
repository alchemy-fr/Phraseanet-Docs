Bienvenue dans la documentation Phraseanet 4.1
==============================================

Le DAM Open source
------------------

`Phraseanet`_ est une solution de gestion de médias numériques (en anglais :
Digital Asset Management ou en abrégé DAM) destinée aux professionnels,
créée et maintenue par `Alchemy`_.

Elle permet de stocker, de gérer, de partager et de diffuser un large panel de
ressources numériques de type image, vidéo, audio ou bureautique au sein de
groupes de travail de toutes dimensions.

Solution *100% Web*, elle s'exécute dans un navigateur internet.

Construite à partir de composants standards, *Phraseanet* s'installe sur des
serveurs Linux et repose sur les briques logicielles courantes telles
Elasticsearch, MySQL, PHP et Apache.
D'autres bibliothèques ou logiciels tiers concourent au fonctionnement de
*Phraseanet*.
Certaines de ces librairies sont
`développées par Alchemy <https://github.com/alchemy-fr/>`_, d'autres pas.

A propos de cette documentation
-------------------------------

Le présent manuel aborde les questions liées à
:doc:`l'administration<Admin/index>`, à :doc:`l'utilisation<User/index>`
et au :doc:`développement<Devel/index>` reposants sur le logiciel Open source
*Phraseanet*.
Une :doc:`FAQ<FAQ/index>` essaye de répondre aux questions fréquentes.
Un :doc:`glossaire<Glossaire>` regroupe les termes propres au vocabulaire
employé dans l'application.
Envie de contribuer ? Consulter :doc:`cette section<Contrib/index>` avant de
commencer.

.. toctree::
    :maxdepth: 1

    Contrib/index
    Glossaire
    FAQ/index
    Devel/index
    User/index
    Admin/index

Quoi de neuf dans la version 4.1 ?
----------------------------------

La version 4.1 introduit les changements suivants :

* Déploiement simplifié sous `Docker`_ (`Voir les images officielles`_)
* Worker : ce service permet des gains de performance dans la gestion des
  sous-définition de fichiers
* Géolocalisation : recherche d'enregistrements par sélection d'emplacements
  sur des cartes, ajout de localisations dans la notice de l'enregistrement
* Outils vidéos : découpage et création de chapitres
* Sous titrage vidéo : ajout de sous titres au format WebVTT pour une ou
  plusieurs langues
* Améliorations graphiques


Besoin d'aide ?
---------------

`Alchemy`_, l'éditeur de Phraseanet commercialise un ensemble de prestations et
de services autour de la solution *Phraseanet*. Consulter
`ces offres <https://www.alchemy.fr/fr/publication/support-maintenance/>`_
sur le site éditeur.

L'équipe de Phraseanet consacre une partie de son temps à l'animation de
forums et de groupes. Consulter
`cette page <http://www.phraseanet.com/support/>`_ pour une présentation de
ces groupes.

.. _Alchemy: https://www.alchemy.fr/
.. _Phraseanet: https://www.phraseanet.com/
.. _Voir les images officielles: https://hub.docker.com/u/alchemyfr
.. _Docker: https://www.docker.com/
