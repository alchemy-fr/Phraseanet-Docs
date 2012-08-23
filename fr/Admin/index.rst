Administrateur
==============

.. module:: administrateur
   :synopsis: Guide administrateur de Phraseanet
.. moduleauthor:: Team Phraseanet <info@phraseanet.com>


Phraseanet repose sur des bases de données MySQL/InnoDB : les ApplicationBoxes
et les DataBoxes.

Les premières servent de base à l'applicatif Phraseanet et stockent les
utilisateurs, leurs paniers, leurs droits sur les dfifférentes collections et
des liens vers une ou plusieurs DataBoxes.

Les databoxes sont des containers à enregistrements. Elles diffèrent par leurs
structures documentaires.

Phraseanet embarque aussi un moteur de tâche. Ce module sert à la gestion de
scripts PHP tels que l'écriture des métadonnées, le calcul de sous-définitions
l'indexation...

Vous pouvez aussi piloter Phraseanet en console via l'application bin/console

.. toctree::
    :hidden:

    Telechargement
    Prerequis
    Installation
    SpecificitesWindows
    MiseAJour
    Configuration
    MoteurDeTaches
    Console
    Maintenance
    Optimisation
    Faq
