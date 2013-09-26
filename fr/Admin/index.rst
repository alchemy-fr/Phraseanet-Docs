Administrateur
==============

.. module:: administrateur
    :synopsis: Guide administrateur de Phraseanet

.. moduleauthor:: Team Phraseanet <info@phraseanet.com>

Le manuel administrateur est consacré aux problématiques d'installation et de
configuration et de mise à jour du logiciel *Phraseanet*.
Il s'adresse principalement aux administrateurs systèmes et à ceux qui
souhaitent installer et maintenir *Phraseanet*

*Phraseanet* repose sur des bases de données MySQL/InnoDB : les ApplicationBoxes
et les DataBoxes.

Les premières servent de base à l'applicatif Phraseanet et stockent les
utilisateurs, leurs paniers, leurs droits sur les différentes collections et
des liens vers une ou plusieurs DataBoxes.

Les databoxes sont des containers à enregistrements. Elles diffèrent par leurs
structures documentaires.

*Phraseanet* embarque aussi un moteur de tâche. Ce module sert à la gestion de
scripts PHP tels que l'écriture des métadonnées, le calcul de sous-définitions
ou l'indexation...

*Phraseanet* peut être également administré en console via l'application
bin/console.

.. toctree::
    :maxdepth: 1
    :glob:

    Telechargement
    Prerequis
    Installation
    MiseAJour
    Configuration
    MoteurDeTaches
    MoteurDeRecherche
    Console
    Maintenance
    Plugins
    Personnalisation
