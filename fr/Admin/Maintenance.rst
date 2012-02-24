Maintenance
===========

Sauvegarde
----------

Phraseanet dissocie le stockage des documents physiques
(images, vidéos, audio, pdf ect ...) et les bases de données MySQL.
La sauvegarde devra donc prendre en compte de façon synchrone ses
deux éléments.
S'ajoute à ces éléments, les fichiers sources de l'application.

Les données Physiques
*********************

Les données physiques sont stockées dans des répertoires prédéfinis à
l’installation de l’application.

Une sauvegarde différentielle est préconisée pour ces fichiers.
(le volume de données pouvant être très important).

Les Bases MySQL
***************

L'ApplicationBox et les DataBoxes sont les bases MySQL associées
à une installation Phraseanet.

Une sauvegarde à chaud de ces bases est envisageable.

L'utilitaire en ligne de commande :doc:`Konsole Kommander <Console>`
intégré à l'application permet de lancer une sauvegarde de l'ensemble des bases.

  .. code-block:: bash

      php bin/console system:backupDB /repertoire/de/sauvegarde/


Cette commande peut être incluse dans un script de sauvegarde.


Les sources de L'application
****************************

Les sources de l'application ne sont en général modifiées qu'en cas de 
Mise à jour.

Néanmoins cela peu être judicieux de faire une sauvegarde ponctuelle
des sources après l'installation et le paramétrage.

NB: le répertoire $Sources/config contient des informations de connexion
aux bases et est conçu pour recevoir des fichiers de templates modifiés
au format twig.

Etat de maintenance
-------------------

Le bloc "Etat de maintenance" dans la 
`configuration de l'application <../User/Manuel/Administration#setup>`_
, permet d'activer les logs et d'alerter les utilisateurs
(ex: maintenance en cours)