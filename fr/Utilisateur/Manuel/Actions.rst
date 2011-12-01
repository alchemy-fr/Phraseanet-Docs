La Palette des Actions
======================
.. toctree::
   :maxdepth: 3

.. topic:: L'essentiel

    La Palette des Actions dans *Phraseanet Production* vous permet d'effectuer 
    un grand nombre d'actions sur vos documents.
	
    .. image:: ../../images/Palette.jpg
	     :alt: alternate text
	     :align: center 

    Plusieurs actions sont accessibles à partir de cette :term:`Palette 
    <Palette des Actions>`, on peut différencier les fonctions de base des fonctions 
    étendues.
    **Ces différentes actions sont visibles en fonction des droits des utilisateurs**. 
    Ces droits sont tous paramétrables dans l'interface *Phraseanet Administration*.
	
  **Les fonctions de base:**
	* :doc:`Exporter <Exporter>`
	* `Imprimer`_
	
  **Les fonctions étendues:**
	* :doc:`Editer <Editer>`
	* :doc:`Push <Push>`
	* `Déplacer`_
	* `Supprimer`_
	* `Outils images`_
	* `Propriétés`_

Les fonctions de base
---------------------
Exporter
********
Plusieurs modes d'export sont proposés: le téléchargement, envoyer par email ou 
encore envoyer via le :term:`FTP <FTP>`...

:doc:`Veuillez vous reporter à la section dédiée à l'Export dans Phraseanet <Exporter>`

Imprimer
********
Cette Action permet d'imprimer les vignettes, les images de choix, les 
descriptions des documents.

  * Sélectionner un ou plusieurs documents puis cliquer sur "Imprimer".

La fenêtre Imprimer s'ouvre. 

  .. image:: ../../images/Actions-Imprimer1.jpg
	   :alt: alternate text
	   :align: center 

Cocher les cases correspondant aux choix souhaités:

  * Image de choix, pour n'imprimer que les images de choix.
  * Image de choix et légende, pour imprimer les images de choix et la description du document.
  * Image de choix et description avec planche contact, pour imprimer les images de choix, les descriptions et les vignettes regroupées dans une planche contact.
  * Liste de vignettes, pour imprimer la liste des vignettes.
  * Planche contact, pour imprimer les vignettes regroupées dans une planche contact.

Cliquer sur Imprimer. Les documents demandés s'affichent sous forme d'un document 
PDF (Format Acrobat de Adobe - un Reader Acrobat doit être installé sur le poste 
de travail).

  .. image:: ../../images/Actions-Imprimer2.jpg
	   :alt: alternate text
	   :align: center

Imprimer le document PDF sur l'imprimante de son choix ou l'enregistrer sur le 
disque dur de son poste de travail.

Les fonctions étendues
----------------------
Editer
******
Cette fonction permet d'éditer vos documents dans Phraseanet: édition des enregistrements, 
des paniers; Vous pouvez saisir, compléter ou modifier le contenu des champs.
Il est possible d'éditer les :term:`documents <Document>` à l'unité ou en lots.

:doc:`Veuillez vous reporter à la section dédiée à l'Edition <Editer>`.

Push
*****
On utilise le :term:`"push" <Push>` dans Phraseanet pour envoyer virtuellement des 
documents à un ou plusieurs destinataires.

:doc:`Veuillez vous reporter à la section dédiée au Push <Push>`.

Déplacer
********
Cette icône permet de déplacer des documents d'une :term:`collection <Collection>` à une autre. 

  * Sélectionner une ou plusieurs vignettes puis cliquer sur l'icône Déplacer.

La fenêtre "Changer de collection" s'ouvre. 

  * Sélectionner la collection dans laquelle doit être dorénavant placé(s) 
    le(s) document(s). 
  * Cliquer sur Ok. 
  
Le document ne se trouve plus dans la collection d'origine, mais dans la collection choisie.

  .. image:: ../../images/Actions-Deplacer.jpg
	   :alt: alternate text
	   :align: center 

Supprimer
*********
Cette icône permet de supprimer un :term:`enregistrement <Enregistrement>` 
(Panier, document de la :term:`base`/Collection, Reportage).

  * Sélectionner l'élément puis cliquer sur l'icône Corbeille.

  .. image:: ../../images/Actions-Supprimer.jpg
	   :alt: alternate text
	   :align: center

Un message demande confirmation afin de valider votre choix.

Outils images
*************
Cette icône permet de travailler sur les vignettes ou images de choix 
(re-génération, substitution, rotation), sur le remplacement d’un document 
d’origine, ou d’afficher toutes les informations :term:`EXIF <EXIF>` existantes.

  * Sélectionner une image et cliquer sur l'icône "Outils Images".

La fenêtre Outils Images s'ouvre. 

  .. image:: ../../images/Actions-Outilsimages.jpg
	   :alt: alternate text
	   :align: center

Choisir un des onglets proposés:

  * Régénération sous-défs: Permet de créer une nouvelle vignette et une nouvelle 
    Image de choix pour les documents sélectionnés.

  * Retourner sous défs: une rotation des vignettes et Images de choix des 
    documents sélectionnés.

  * Substitution document: Permet de remplacer le document original par un autre 
    (une case à cocher permet de choisir si la vignette et l’image de choix 
    doivent être reconstruites).

  * Substitution des sous-défs: Pour remplacer la vignette et l’image de choix 
    par un autre fichier.

  * :term:`Métadonnées <Métadonnées>`: Permet d’afficher l’ensemble des informations 
    :term:`EXIF <EXIF>`disponibles 
    pour le document.

Cliquer sur Valider.

Propriétés
**********
Cette action permet de changer:
  * les :term:`status <Statusbit>` des documents
  * les "types" des documents sélectionnés 

Les Status sont comme des "Interrupteurs" en position "On" ou "Off" et sont 
applicables sur les documents.
La mise en œuvre se fait dans *Phraseanet Administration* qui permet le nommage 
des Status et le choix de mini-logos pour les illustrer visuellement dans les 
interfaces.
A travers la gestion des utilisateurs, il est possible de définir pour chaque 
Status activé si un utilisateur est "On" et/ou "Off" pour les documents.

.. note:: Il existe 64 :term:`status <Statusbit>`. 60 sont paramétrables et peuvent 
          être utilisés pour des besoins de workflow ou la mise en place des 
          restrictions d’accès aux documents entre autres. Le changement d’état 
          des status est aussi disponible directement depuis la fenêtre Editer.

**Changer les status des documents**

Cette action permet de changer les status des documents. 

  * Sélectionner une ou plusieurs vignettes, un :term:`panier <Panier>` ou un 
    :term:`reportage <Reportage>` puis cliquer sur Propriétés.

La fenêtre s'ouvre. 

  * Cocher la case correspondant au nouveau :term:`status <Statusbit>` (plusieurs 
    status possibles). 
  
  * Cliquer sur Valider pour enregistrer les changements.

  .. image:: ../../images/Actions-Proprietes-status.jpg
	   :alt: alternate text
	   :align: center 

**Changer le type des documents**

Cette action permet de changer le type des documents.

Elle est utile si des documents ajoutés n’ont pas été correctement interprétés 
et qu’il faut les associer au bon type de fichier.

  * Sélectionner une ou plusieurs vignettes, un :term:`panier <Panier>` ou un 
    :term:`reportage <Reportage>` et cliquer sur Propriétés.

La fenêtre s'ouvre. 

  * Cliquer sur l’onglet Type. Changer le type des documents. 

  * Cliquer sur Valider pour enregistrer les modifications.

  .. image:: ../../images/Actions-Proprietes-types.jpg
	   :alt: alternate text
	   :align: center 
