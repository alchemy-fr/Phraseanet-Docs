La Barre des Onglets
====================
.. toctree::
   :maxdepth: 3
   
.. topic:: L'essentiel

    Dans l'interface, cet espace est présent sur le côté gauche de la fenêtre de 
    *Phraseanet Production*. La barre présente 4 onglets et vous offre: 
    
    * un espace pour mettre de côté des sélections d'images et autres documents: 
      ce sont les :doc:`Paniers et Reportages <Paniers et Reportages>`
    
    * l'accès à `la recherche avancée`_
    
    * une aide à la recherche avec les `propositions`_
    
    * le `thesaurus`_ dans l'interface de *Phraseanet Production*

Les Paniers et les Reportages
-----------------------------
Voir la section consacrée aux :doc:`Paniers et Reportages <Paniers et Reportages>`.

La recherche avancée
--------------------
Cliquer sur l'onglet de Recherche Avancée.
    .. todo:: il faudrait remplacer la capture d'écran de la v3.1 pour mettre une 
              capture de la recherche avancée sur la v3.5

  * Elle permet d'étendre ou réduire le nombre de :term:`bases <base>` / 
    collections sur lesquelles effectuer la recherche
  * Elle permet de filtrer la recherche sur les documents ou les reportages ou 
    les deux, ainsi que sur les types de documents
  * Elle permet de choisir le moteur Texte intégral et/ou le moteur Thesaurus.
  * Elle permet de reduire la recherche à un champs en particulier
  * Elle permet de faire des recherches sur les Status Bits 
  * Enfin, elle permet de faire des recherches sur des champs de type numérique.

  .. image:: ../../images/Rechercher-avancee.jpg
	   :alt: alternate text
	   :align: center

Choisir les :term:`bases <base>` et collections où rechercher.

.. note:: Il est possible de désélectionner toutes les :term:`bases <base>` 
          et collections en cliquant sur "Aucune" ou de cliquer directement sur les 
          noms des :term:`bases <base>` pour les sélectionner ou désélectionner 
          individuellement ou encore dans les cases à cocher proposées pour chaque 
          collection disponible.

Choisir si la recherche doit se faire sur des reportages (uniquement les fiches 
d'indexation des reportages) ou sur les documents.

.. note:: Il n'est pas possible de chercher à la fois sur des reportages et des 
          documents.

Choisir le type de documents : par défaut tous les types

Sélectionner le moteur de recherche à utiliser.
Par défaut les deux moteurs sont actifs.
Phraseanet embarque deux moteurs de recherche, le premier en texte intégral, 
le deuxième s'appuie uniquement sur le thesaurus, il recherche uniquement sur 
les termes qui sont présents dans le thesaurus.

.. note:: Les recherches à travers le thesaurus ne sont effectives que si un thesaurus 
          est associé à une :term:`base`.

Utilisation des status-bits en recherche.

Si des status-bits ont été définis dans *Phraseanet Administrateur* et si des 
documents ont un ou plusieurs status-bit activé(s), il est alors possible de 
lancer une recherche sur ces status-bit* en cochant une ou plusieurs cases. 

Cliquer sur Chercher ou sur la touche "entrée" du clavier pour lancer la 
recherche dans les :term:`bases <base>` / Collections. 

Les documents s'affichent dans la fenêtre Résultats.

Propositions
------------
Cet Onglet sert à interpréter les requêtes qui sont faites par l’utilisateur et 
lui renvoyer des propositions en relation avec le thesaurus, de façon à étendre 
une recherche en remontant d’un ou plusieurs niveaux ou au contraire à l’affiner 
en précisant la requête avec un terme plus précis.

Le mot "Justice" est saisi dans la zone de recherche.

La fenêtre "Résultat" affiche les résultats.

Apres avoir effectué une recherche, cliquer sur "Propositions".

L’onglet s’affiche, le thesaurus interprète la requête et affiche les propositions. 
 
  .. image:: ../../images/Onglet-Propositions.jpg
	   :alt: alternate text
	   :align: center

Chaque proposition est cliquable et permet de lancer une nouvelle recherche.

Thesaurus
---------
Onglet Thesaurus
****************
Cette recherche n’est active que si un ou plusieurs thesaurus sont disponibles. 
L’onglet Thesaurus dans *Phraseanet Production* est lié à l’Application 
*Phraseanet Thesaurus*.
Les Thesauri ouverts sont présentés sous forme d’"arbres".

Cliquer sur l’onglet Thesaurus 

	  .. image:: ../../images/Rechercher-thesaurus1.jpg
	   :alt: alternate text
	   :align: center
	
Cliquer sur les branches du thesaurus pour le déployer.

Double cliquer sur un terme pour lancer la recherche.

	  .. image:: ../../images/Rechercher-thesaurus2.jpg
	   :alt: alternate text
	   :align: center

Onglet Candidats
****************	   
Cette fonction permet de retrouver la liste des mots candidats issus de l’indexation 
de nouveaux documents.
Cette liste est générée à la fois par la récupération des métadonnées lors de 
l’ajout de nouveaux documents ou après modification des notices après édition 
des documents.
Selon le paramétrage du Thesaurus, les listes de mots candidats peuvent être triées 
par champs.

  * Cliquer sur l’onglet Thesaurus dans la barre des Onglets

  * Cliquer sur le sous onglet "Candidats"

Les termes candidats s’affichent:

	  .. image:: ../../images/Onglets-candidats1.jpg
	   :alt: alternate text
	   :align: center

Cliquer sur les symboles "plus" pour afficher les branches et les termes candidats.

Faire un clic droit ou cliquer en maintenant les touches "ctrl" enfoncée sur un 
terme pour afficher le menu contextuel du terme.

Le menu contextuel du terme s’affiche: 

	  .. image:: ../../images/Onglets-candidats2.jpg
	   :alt: alternate text
	   :align: center
	   
  * Cliquer sur Accepter en xx "langue du terme"

  * Cliquer sur Remplacer par

  * Cliquer sur Supprimer 


Chercher dans thesaurus
***********************
La fenêtre Thesaurus est utilisée pour rechercher des termes présents dans les 
thesauri ouverts.

Dans le cadre d’une recherche de termes dans la fenêtre Thesaurus, il suffit de 
taper au minimum les trois premiers caractères d’un terme, l’affichage se met à jour, 
ne proposant plus que les branches et sous branches, jusqu’au terme trouvé.
En cliquant un terme dans l’arbre, l’application lance une requête thesaurus sur 
les bases ouvertes.

	  .. image:: ../../images/Rechercher-thesaurus3.jpg
	   :alt: alternate text
	   :align: center
