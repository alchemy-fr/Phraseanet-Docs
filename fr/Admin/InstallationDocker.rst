Installation sous Docker
========================

.. topic:: L'essentiel

    La version 4.1 permet de démarrer une Stack Phraseanet avec Docker.


Pourquoi Docker ?
-----------------

Alchemy a choisi `Docker`_ pour ajouter de la fiabilité dans les déploiements
effectués sur le Cloud ou On Premise.
Cette technologie de containerisation apporte la possibilité de répéter des
installations dans des environnements hétérogènes avec des résultats prédictifs.

En savoir plus sur `Docker`_


Tout est dans le fichier README.md
----------------------------------

Consultez le fichier `README.md`_ à la racine du projet Phraseanet.
Il donne de précieuses informations pour démarrer une stack Docker
Phraseanet.


Où trouver des images Docker du DAM Phraseanet ?
------------------------------------------------

Toutes les images Docker du DAM Phraseanet sont disponibles sur 
`https://hub.docker.com/u/alchemyfr <https://hub.docker.com/u/alchemyfr>`_

Elles reposent toutes sur des systèmes Linux.

L'orchestration standard Docker compose est valide pour déployer des 
environnements de développement ou de production.

Pour les environnements destinés à la production, les départements IT préférerons sans doute s'appuyer sur des briques existantes de leurs infrastructures pour les SGBD et serveurs de stockage.

Se référer au fichier `.env`_ pour éditer la ligne COMPOSE_FILE qui renseigne le contenu de la stack déployée en fonction du contexte.

.. _Phraseanet: https://www.phraseanet.com/
.. _Docker: https://www.docker.com/
.. _README.md: https://github.com/alchemy-fr/Phraseanet/blob/master/README.md#phraseanet-with-docker
.. _.env: https://github.com/alchemy-fr/Phraseanet/blob/master/.env

