Administration
==============
.. toctree::
   :maxdepth: 3

.. topic:: L'essentiel

    L'interface *Phraseanet Administration* vous permet d'administrer et de paramétrer 
    toute la solution. 
	
    Elle permet la création et la gestion des bases/collections, de leur 
    structure, de créer des utilisateurs et de gérer leurs droits, mais aussi de 
    prendre en charge les demandes d'inscription, les tâches automatiques d'indexation, 
    les valeurs suggérées, les :term:`Statusbit`, les logos de collections...
	
Cette interface comporte un cadre à gauche qui affiche les différents menus 
cliquables sur les boutons.

Cliquer sur les " + " pour ouvrir une branche de l'arborescence, cliquer sur " - " 
pour refermer une branche.
Cliquer sur l'icône correspondant à la fonction à utiliser.

Voici le cadre de gauche dans l'*Administration*, qui vous propose de nombreuses 
actions: gestion des utilisateurs, des bases et des collections,...

  .. image:: ../../images/Administration-gauche.jpg
	   :alt: alternate text
	   :align: center 

Tableau de bord
---------------
  .. to do:: DEV
  
Setup
-----
  .. to do:: ici on parle des bases, de la structure, etc. (DEV)
	   
Utilisateurs connectés
-----------------------
Cette fonction permet d'afficher la liste de tous les utilisateurs actuellement 
connectés sur le système.
Elle informe de l'application Phraseanet utilisée, de l'adresse "IP", ainsi que 
de la date et de l'heure de connexion.

  .. image:: ../../images/Administration-utilisateurlive.jpg
	   :alt: alternate text
	   :align: center 

Utilisateurs 
------------
En cliquant sur l'onglet "Utilisateurs", on voit apparaître au centre de la page 
une liste des utilisateurs enregistrés dans Phraseanet.
Cette liste comporte les noms, prénoms, emails, sociétés, des utilisateurs.
C'est à partir de cette interface qu'on pourra entre autres gérer les droits 
des utilisateurs. 

Cette fonction est très importante car d'elle dépend la visibilité 
dans les interfaces de certaines actions. Rappelons-le, dans Phraseanet, si un 
utilisateur ne voit pas une fonction, c'est certainement parce qu'il n'a pas les 
droits pour y accéder. Ou par exemple, si un utilisateur n'a pas le droit d'accéder 
à une collection, celui-ci ne la verra pas (et ne saura pas qu'elle existe).
Cela est également vrai pour les interfaces elles mêmes: certains utilisateurs 
peuvent avoir seul accès à *Phraseanet Classic*, qui est une interface pour la 
consultation des documents. Les administrateurs, eux, auront accès pour leur part 
aux autres interfaces, telles que *Report* pour les statistiques ou encore 
*Administration* dont il est objet ici.

Au-dessus de cette liste, une zone de filtres pour effectuer une recherche parmi 
les utilisateurs, ainsi que des liens:

  * Créer un nouvel utilisateur
  * Créer un nouveau modèle
  * Réglages d'accès invité (pour régler des droits par défaut pour l'accès invité).
  
L'accès invité peut être mis en place sur Phraseanet, si souhaité, pour donner 
la possibilité à des personnes non enregistrées sur le système d'avoir un accès 
(temporaire) à certains documents si ceux-ci en font la demande. Tout ceci est 
paramétrable dans cet onglet.

Nouveaux utilisateurs
*********************

  .. image:: ../../images/General-Administration.jpg
	   :alt: alternate text
	   :align: center 

Cette fonction permet de créer et gérer les utilisateurs de Phraseanet. La liste 
affiche tous les utilisateurs de Phraseanet référencés.

Elle permet de créer un nouvel utilisateur ou de modifier les droits et informations 
d'un utilisateur existant. Cette liste est disponible à plusieurs niveaux, et les 
utilisateurs sont filtrés selon le niveau. Il est donc possible d’afficher la liste 
de tous les utilisateurs de toutes les bases et toutes les collections au premier 
niveau. Cette précision implique que Phraseanet autorise des réglages très fins 
sur l’accès aux documents.

Pour modifier les droits et informations d'un utilisateur, double cliquer 
sur le nom de l'utilisateur.

Lorsque vous recherchez un utilisateur, vous pouvez filtrer par : identifiant, nom/prénom, 
email, pays, société, dernier modèle; ou bien entrer dans le champ "Commence par" 
le début de l'identifiant de l'utilisateur afin de le retrouver dans la liste. 

Créer un nouvel utilisateur
^^^^^^^^^^^^^^^^^^^^^^^^^^^^
Pour définir un nouvel utilisateur, cliquer sur le lien **Nouvel Utilisateur**.
Une fenêtre s'ouvre.

  .. image:: ../../images/Administration-nouvelutilisateur.jpg
	   :alt: alternate text
	   :align: center 

Saisir le login du nouvel utilisateur et cliquer sur OK.

La fenêtre de gestion des droits s'ouvre. Pour savoir comment gérer les droits, 
voir Gestion des droits.

Modèles
^^^^^^^^

Il est possible d'attacher un utilisateur à un modèle. Il bénéficie alors des 
droits définis pour le modèle.

  .. image:: ../../images/Administration-modele1.jpg
	   :alt: alternate text
	   :align: center 

Sélectionner un ou plusieurs utilisateurs dans la liste.

Cliquer sur "Nouveau modèle". 

Le nommer. Ici nous l'appelons "Modèle 1".

Une fenêtre s'ouvre. 2 onglets sont apparents: le premier, "Droits" sert à éditer 
les droits de ce nouveau modèle, comme ci-dessous; le deuxième onglet, "Fiche", 
contient quelques champs à remplir (nom, prénom, email, adresse, entreprise, 
numéro de téléphone,...).

  .. image:: ../../images/Administration-modele2.jpg
	   :alt: alternate text
	   :align: center 


.. note:: En cliquant sur la flèche grise, Phraseanet vous donne la possibilité de 
          cocher ou décocher toute la colonne, au lieu de cliquer sur les cases 
          une par une.

Une fois le modèle défini, il est possible de rattacher plusieurs utilisateurs 
au modèle et de gérer collectivement les droits de plusieurs utilisateurs à travers 
le modèle.

Droits utilisateurs
********************

La fiche des droits s'ouvre et permet de gérer les droits de "consultation et 
exploitation" à gauche et les droits de "gestion" au sens étendu à droite.

En haut à gauche de la fenêtre, on accède aux informations de l'utilisateur en 
cliquant sur sa "Fiche" (en bleu ci-dessous).

.. note:: La modification des droits des utilisateurs peut se faire en lot.

Ce cadre donne la liste des bases et des collections disponibles et auxquelles 
l'utilisateur peut avoir accès. 

  .. image:: ../../images/Administration-droits.jpg
	   :alt: alternate text
	   :align: center 

Les noms des collections apparaîssent sous les noms des bases auxquelles elles 
appartiennent. La collection est la notion utilisée dans les interfaces *Production*, 
*Classic*, *Report*, *Administration*. 

La base de données contient une ou plusieurs collections.
Pour chacune de ces collections, des droits sont définis. Un droit est accordé lorsque 
la case à l'intersection de la ligne et de la colonne est cochée. Le droit n'est pas 
accordé lorsque la case est décochée.
La case grisée signifie que le droit n'est accordé que partiellement à certains des 
utilisateurs sélectionnés.

Un utilisateur ne peut donner plus de droits qu'il n'en a lui même (point rouge).
Le signe "i" signifie qu'une fenêtre est accessible d'un clic pour définir de 
façon plus précise des droits spécifiques. 

La première partie de la fenêtre des droits, la plus à gauche:

  * Cocher **Accéder** pour permettre d'accéder à la base ou à la collection
  * Cocher **Actif** pour activer l'utilisateur. A contrario, décocher la case désactive 
    l'utilisateur sans perdre tout le paramétrage.
  * Cocher **Paniers** pour autoriser la création des Paniers.
  * Cocher **Voir Preview** pour autoriser la visualisation des images de choix.
  * Cocher **Watermark** pour définir si l'utilisateur voit les images de choix avec un 
    marquage.
  * Cocher **Télécharger Haute Def** pour autoriser le téléchargement du document original
  * Cocher **Commander** pour autoriser la commande de documents
  * Cliquer sur **Quota** pour ouvrir la fenêtre Quota de téléchargements.

Plusieurs options très fines sont à la disposition de l'utilisateur pour la 
limitation: 

**Limitation par les Quota**

La fenêtre "Quota des téléchargements" permet de définir pour l'utilisateur des 
quotas de téléchargement par base ou par collection.
  
  * Cocher sur Oui pour activer la gestion des quotas.
  * Saisir le nombre de droits de téléchargements par mois pour cette collection.
    Le "reste" se calcule automatiquement en fonction du droit initial et du nombre 
    de téléchargements effectués.
  * Cliquer sur le bouton Valider pour enregistrer le paramétrage et fermer la fenêtre.

**Limitation dans le temps**

Cliquer sur **Limité Temps** pour ouvrir la fenêtre *Durée de vie*

Cette fenêtre permet de limiter dans le temps l'accès à une base ou à une collection.

  * Cocher sur Oui pour activer la gestion des limites dans les temps
  * Sélectionner les bornes de la période d'accès autorisée
  * Cliquer sur le bouton Valider pour enregistrer le paramétrage et fermer la fenêtre.
  * Cliquer sur **Mask** pour ouvrir la fenêtre *Mask*.

**Limitation par les Status**

Cette fenêtre permet de paramétrer les status des documents pour l'utilisateur.

Un status peut être sur une des deux valeurs "une ou l'autre des cases cochées", 
l'utilisateur ne voit que les documents dont le status est sur la même valeur.

Un status peut être sur les deux valeurs "les deux cases cochées", l'utilisateur 
voit aussi bien les documents dont le statut est sur l'une ou l'autre des valeurs.

*Se reporter aux réglages de la base pour la création et la gestion des status bits.*

Cliquer sur le bouton Valider pour enregistrer le paramétrage et fermer la fenêtre.

La deuxième partie dans la fenêtre des droits, l'onglet permet de définir les 
droits administratifs, c'est à dire les actions auxquelles l'utilisateur a accès, 
par l'intermédiaire des icônes de la Palette des Actions notamment.
Cocher la case pour donner le droit correspondant sur la collection ou la base.

**Documents**

  * Cocher **Ajouter** pour autoriser l'ajout d'un document dans la base ou collection 
  * Cocher **Editer** pour autoriser l'édition de la description des documents
  * Cocher **Changer status** pour autoriser l'utilisateur à changer le statut d'un document
  * Cocher **Supprimer** pour autoriser l'utilisateur à supprimer un document
  * Cocher **Outils Images** pour autoriser l'utilisateur à bénéficier des outils
  * Cocher **Gestion Utilisateurs** pour autoriser la gestion des utilisateurs
  * Cocher **Consulter Rapports** pour autoriser l'utilisateur à consulter les statistiques
  * Cocher **Push** pour autoriser l'utilisation de la fonction "Push" et d'envoyer des 
    documents à des destinataires.

**Droits sur la gestion des bases et collections**

  * Cocher **Gestion Coll.** pour autoriser l'utilisateur à effectuer différentes 
    opérations de gestion. Pour une collection: la renommer, la vider, la mettre online 
    ou offline, la supprimer.  

  * La case **Structure Coll.** donne accès aux fonctions de réglages de collections 
    dans *Phraseanet Administration*. Structure Coll. permet l’accès aux préférences 
    de la collection et autorise la modification des listes de valeurs suggérées.

  * La case **Publicat° Panier** permet à un utilisateur de publier sous forme 
    de paniers des documents sur des pages de l’application *Classic*.

  * La case **Modif. Thesaurus** permet à l’utilisateur d’accéder à l’application 
    *Phraseanet Thesaurus*

  * La case **Gestion Base** permet d’accéder aux fonctions de paramètres de 
    bases de données comme création, purge et fonctions avancées de gestion de la solution

  * Enfin, **Structure Base**, pour autoriser l'utilisateur à modifier la 
    structure de la base de données.

	   
Demandes
---------
Cette fenêtre liste les demandes d'inscription des nouveaux utilisateurs dans 
l'écran Inscription. Si un utilisateur a fait une demande sur plusieurs collections, 
il y a autant de lignes de validation que de demandes. Un "rollover" sur le nom 
permet d’afficher les informations relatives au demandeur.

  .. to do:: guillaume stp capture des demandes je n'en ai pas

Choisir les droits à attribuer par collections en cochant les cases. L'utilisateur peut:

  * refuser l'accès à la collection demandée

  * donner accès à la collection demandée aux documents de type sous résolution

  * donner accès à la collection demandée, avec les documents en haute définition

  * donner accès à la collection demandée, sans les documents en haute définition

Cliquer sur Valider


Planificateur
-------------
Cet écran permet de gérer les tâches d'archivage et autres traitements automatiques 
des Bases/Collections de documents. Les tâches sont listées dans un tableau qui 
indique l'identifiant de la tâche, si elle est ou non active, son nom.

Le principe d’une Tâche d’archivage est de scruter un répertoire, d’en capturer 
le contenu, de l’archiver (recopier les fichiers dans les répertoires de stockage 
de la base de destination).

  .. to do:: guillaume stp capture ici aussi des listes de tâches

  * Pour démarrer une tâche, Cliquer sur le symbole, puis cliquer sur Start.

  * Pour éditer une tâche, cliquer sur "Editer".

  * Pour Arrêter une tâche, cliquer sur "Stop".

  * Pour créer une nouvelle tâche, cliquer sur nouvelle tâche.

  .. image:: ../../images/Administration-droits.jpg
	   :alt: alternate text
	   :align: center 

Nouvelle tâche
**************
Cette fonction permet de créer une nouvelle tâche.

Le paramétrage des Tâches dans Phraseanet permet de mettre en place des automatismes 
de traitement. La solution est livrée en standard avec un certain de nombre de 
tâches exploitables. 

Les paramètres des tâches sont stockés sous forme de fichiers XML. Dans certains 
cas, les fichiers XML de paramétrage proposent une interface de saisie.

Après avoir cliqué sur *nouvelle tâche*:

  * Sélectionner un des modèles de tâches disponibles.

  * Renseigner les différents paramètres demandés.

  * Ou modifier les paramètres directement dans la vue XML.

  * Cliquer sur Valider pour enregistrer les modifications.

Status Bits
------------
  .. to do:: je ne vois pas actuellement les status bits sur beta

 
Conditions Générales d’Utilisation
----------------------------------

  .. to do:: guillaume capture à faire je ne vois pas les CGU sur beta
  
Cliquer sur l'icône des CGU.

Les conditions générales d’utilisation sont proposées aux utilisateurs au moment 
de leur inscription.

  * Saisir ou copier et coller un texte dans les différentes langues proposées.

  * Cocher la case "Les utilisateurs…." pour faire valider aux utilisateurs déjà 
    inscrits des conditions générales mises à jour.

  * Cliquer sur Mettre à jour pour enregistrer les modifications.

 
Ordre des Collections
---------------------

  .. to do:: capture à faire
  
Par défaut, les collections sont affichées dans les différentes applications selon 
leur ordre de création. Selon les besoins, il est donc possible de modifier 
l’ordre d’affichage dans les différentes interfaces.

  * Cliquer sur l'icône

  * Cliquer sur une collection

  * Cliquer sur Monter ou Descendre ou cliquer sur Ordre Alphabétique

  * Cliquer sur Valider pour enregistrer les changements

Collections
-----------

  * Cliquer sur l'icône pour afficher les informations sur la collection.

Cet écran donne les informations essentielles sur la collection, permet de la 
renommer, de la désactiver (arrêter sa publication), de la vider, de la supprimer, 
de démonter la collection du site et d'arrêter la publication.

  * Cliquer sur *Montrer le détail* pour afficher le détail du contenu de la 
    collection

Le tableau liste les objets composant la collection (enregistrement, document, 
sous résolutions, vignette), les nombres par objet, la taille en méga-octets, 
la taille en giga-octets.

Marquage
*********
Pour appliquer un marquage sur les documents publiés à partir de Phraseanet sur 
d’autres sites, cocher une des trois options proposées.

  * Cocher la case  "Par défaut" pour n’appliquer aucun marquage,
  
Ou

  * Cocher la case "Fichier de filigrane" pour appliquer le filigrane par défaut 
    ou s’appuyer d'un fichier de filigrane préalablement chargé.

Ou

  * Cocher la case "Bandeau de Notice" pour ajouter un bandeau sous la dernière 
    ligne de pixels des fichiers (ceci nécessite un paramétrage des informations 
    à afficher sur le bandeau "champs, logo").


  * Cliquer sur *Renommer* pour changer le nom de la collection. Saisir le nouveau 
    nom dans le champ qui s'affiche et cliquer sur Renommer.

  * Cliquer sur *Désactiver* pour la rendre inaccessible. Cela permet d'en 
    interrompre la publication.

  * Cliquer sur *Vider la collection* pour supprimer tous les enregistrements de 
    la collection.

  * Cliquer sur *Supprimer* la collection pour détruire totalement la collection 
    (les données).

Fonctions disponibles
**********************
Pour ajouter un logo symbolisant la collection (il apparaîtra dans les interfaces 
*Classic* et *Production* sous les vignettes dans le coin inférieur droit):

  * Cliquer sur le bouton *Parcourir* pour sélectionner le fichier contenant le 
    logo (maximum 30 x 30 pixels).

  * Cliquer sur *Envoyer le logo* pour télécharger le logo dans les bases Phraseanet.

Pour ajouter un filigrane personnalisé à appliquer sur les sous résolution des 
documents de la collection:

  * Cliquer sur le bouton *Parcourir* pour sélectionner le fichier de filigrane 
    (ce dernier doit être en niveau de gris).

  * Cliquer sur *Envoyer le logo* pour charger le fichier dans l’application.


Préférences : Valeurs suggérées
-------------------------------
  .. to do:: capture à faire je ne la vois pas dans beta, comme les status et autres

Cliquer sur l'icône Réglages des Collections.

Les valeurs suggérées sont éditables par collections et par champs. Cet écran 
permet de paramétrer des menus de choix déroulants (liste qui apparaît dans la 
fenêtre "Edition", permettant une indexation rapide).

  * Sélectionner le champ dans lequel vous souhaitez travailler

  * Pour ajouter une valeur, la saisir dans la zone prévue à cet effet, cliquer 
    sur Ajouter

Il est possible de trier les valeurs en cliquant sur une valeur puis sur "monter" 
ou "descendre" ou de les classer par ordre Alphabétique en cliquant sur Tri Alpha.:

Pour supprimer, cliquer sur une valeur puis cliquer sur Supprimer.	