Thésaurus
=========

.. toctree::
    :maxdepth: 3

.. topic:: L'essentiel

    Le Thésaurus est un outil de gestion de langage documentaire. Dans
    Phraseanet, sa mise en place est optionnelle. Il s'utilise avec le moteur
    Phrasea et n'est pas compatible avec le moteur Sphinx.

    Dans Production, le thésaurus sert :

	* **Aux contributeurs**, pour fournir un vocabulaire de références pour
	  décrire les ressources documentaires de la base dans le formulaire
	  d'édition
	* **Aux utilisateurs**, pour parcourir le fonds et pour suggérer des
	  propositions permettant d'affiner ou d'élargir des recherches

    L'application Thésaurus est l'interface dédiée à l'administration des
    thésaurus. Certaines actions d'entretien du thésaurus sont toutefois
    possibles dans Production.

Remarques sur les thésaurus
---------------------------

Un outil de gestion terminologique
**********************************

Dans sa plus simple expression, un thésaurus est un corpus de mots simples ou
d'expressions réduit à un domaine partiel de la connaissance, celui couvert par
le fonds. Il apporte des termes de référence pour décrire avec précision les
ressources documentaires du fonds.

Langage artificiel, les concepts sont représentés par des termes ou
expressions, organisés de façon à ce que les relations eux soient explicites.
Les termes préférentiels utilisés pour décrire les ressources sont accompagnés
de leurs synonymes ou quasi-synonymes.

Relations dans le thésaurus Phraseanet
**************************************

Le thésaurus Phraseanet gère :

* Les relations termes génériques / termes spécifiques
* Les relations de synonymie, au sein d'une même langue ou vers d'autres
  langues d'interface de l'application

Cette relation de synonymie peut être utilisée pour rendre compte de relations
d'association entre les termes et expressions du thésaurus.

.. Warning::

    Un thésaurus est un outil documentaire performant. Sa mise en place
    d'apparence simple peut nécessiter de faire appel à des compétences en
    Documentation.

Activation des thésaurus sur une instance *Phraseanet*
******************************************************

Le thésaurus Phraseanet s'active dans les modules additionnels de la rubrique
:ref:`Paramétrage de l'Administration <Parametrage-applicatif>`.

Positionner le bouton radio sur *True* puis soumettre le formulaire pour
activer le thésaurus.

Accès au thésaurus d'une base
-----------------------------

Lancer Thésaurus à partir de la barre de menu puis...

* Choisir le Thésaurus de la base dans la liste proposée
* Sélectionner la langue de travail puis cliquer sur Valider

.. image:: ../../images/Thesaurus-general.jpg
    :align: center

La fenêtre de l'application Thésaurus est organisée en deux parties :

* La partie gauche présente la liste des termes candidats par champs
  documentaires liés au thésaurus, des termes et expressions issus de
  l'indexation de documents, ainsi qu'une liste de termes refusés ou supprimés
  du thésaurus.
* La partie droite présente le thésaurus existant, sous forme d'une
  arborescence navigable. En positionnant le curseur sur un nœud (une branche
  ou un terme), on s'affichent en Rollover l'ensemble des synonymes associés à
  un terme ou expression et le nombre d'occurrences dans la base.
* Pour déployer un nœud du thésaurus, cliquer sur le symbole " + ". Pour fermer
  une branche, cliquer sur le symbole " – ".

Edition du thésaurus
--------------------

Ajouter un terme
****************

L'action consiste à ajouter un terme spécifique au niveau inférieur d'un
terme générique. C'est une relation "Père / Fils".
Un nouveau terme peut être ajouté sous n'importe quel terme existant dans
le thésaurus.
Pour créer un terme spécifique :

* Effectuer un clic droit sur une branche, sur un terme
* Cliquer sur **Nouveau terme**
* Saisir le terme dans le formulaire
* Saisir si besoin un contexte pour lever un ambiguïté
* Sélectionner la langue pour le terme ajouté
* Cliquer sur **Valider**

Si le nouveau terme ne fait pas partie des termes candidats, un formulaire
s'affiche.

Par défaut la case **Ajouter le terme sans ré-indexer** est cochée. Choisir
cette option dans la majorité des cas.

Le choix **Ajouter le terme et ré-indexer** entraine une ré-indexation de la
base et une remise à zéro des termes rejetés.

* Cliquer sur Valider

.. note::

    La ré-indexation immédiate n'est pas nécessaire si d'autres termes doivent
    être ajoutés. La ré-indexation peut être lancée à posteriori depuis
    Admin à un moment opportun.

Créer un synonyme
*****************

L'action permet de créer des relations d'équivalence dans les termes d'une
branche ou d'un nœud de thésaurus.

Pour créer un synonyme :

* Effectuer un clic droit sur une branche ou un noeud
* Cliquer sur **Nouveau synonyme**

Dans la fenêtre **Nouveau synonyme** :

* Saisir le terme
* Saisir si besoin un contexte pour lever une ambiguïté
* Sélectionner une langue pour le terme
* Cliquer sur **Valider**

Une fenêtre s'ouvre si le terme ne faisait pas partie de candidats

Par défaut le bouton radio **Ajouter le terme sans ré-indexer** est sélectionné.
Evaluer la nécessité de réindexer la base et, si nécessaire, placer le bouton
radio sur **Ajouter le terme et ré-indexer**.

* Cliquer sur **Valider**

Supprimer une branche ou un terme spécifique
********************************************

* Effectuer un clic droit sur une branche ou noeud de thésaurus
* Cliquer sur **Supprimer**
* Confirmer la suppression dans la fenêtre d'alerte

La branche ou le terme est supprimé ainsi que ceux qui lui sont liés (termes
spécifiques ou synonymes).

L'ensemble des termes supprimés rejoignent la branche Stock des termes
candidats. Ils restent exploitables comme termes candidats et peuvent être
ajoutés à n'importe quels branches ou nœuds du thésaurus.

.. note::

    Les relations entre les termes étant conservées, cette méthode peut servir
    à déplacer une partie de l'arborescence vers un autre nœud ou branche du
    thésaurus.

Supprimer un terme synonyme
***************************

* Effectuer un clic droit sur une branche ou nœud de thésaurus
* Cliquer sur Propriété

Dans la fenêtre des propriétés...

* Effectuer un clic droit sur le terme à supprimer du noeud
* Choisir la rubrique Supprimer puis confirmer la suppression dans la fenêtre
  d'alerte

.. note::

    Dans Firefox, une fenêtre de menu peut masquer la fenêtre Propriété du
    thésaurus.

.. warning::

    L'édition du thésaurus (ajouts de termes ou de synonyme, suppression de
    termes) réclame la reconstruction des index Elasticsearch pour que les
    modifications soient prises en compte.

    :ref:`Se reporter au paragraphe relatif à la construction des index
    Elasticsearch dans l'Administration <Operations-sur les index>`.

Rechercher un terme dans les termes candidats ou le Thésaurus
*************************************************************

* Effectuer un clic droit sur une branche ou un nœud des termes candidats ou
  du thésaurus et sélectionner la rubrique Chercher

Dans la fenêtre Chercher,

* Choisir parmi les options de recherche, saisir le terme ou l'expression
  recherché puis soumettre le formulaire

L'affichage se met à jour et les termes recherchés sont affichés dans
l'arborescence des termes candidats ou du thésaurus.

Exporter les candidats ou le thésaurus
**************************************

* Effectuer un clic droit sur la branche ou le nœud des termes candidats ou du
  thésaurus à exporter et sélectionner la rubrique **Exporter**

Dans la fenêtre d'export,

* Choisir les options d'export souhaitées puis soumettre le formulaire

Les termes exportés sont affichés dans un nouvel onglet, nouvelle fenêtre du
navigateur.

Importer un thésaurus existant
******************************

Des fichiers type textes tabulés encodés dans le jeu de caractères UTF-8
peuvent être intégrés comme thésaurus dans l'application.

* Effectuer un clic droit sur le terme Thésaurus en haut à droite de
  l'interface
* Sélectionner la rubrique **Importer**

Dans la fenêtre Importer...

* Sélectionner le fichier de thésaurus présent sur l'ordinateur puis
  cliquer sur **Valider**

.. note::

    En cas d'erreurs dans le fichier texte tabulé, l'import est suspendu et une
    fenêtre d'alerte indique (en anglais) l'anomalie rencontrée.

Pour poursuivre l'intégration du thésaurus importé, lier ses branches à des
champs documentaires de la base.

Lier une ou plusieurs branches du thésaurus à un champs documentaire
********************************************************************

Cette action permet de lier un ou plusieurs champ documentaires de la base à
une branche de thésaurus, de collecter comme termes candidats le vocabulaire
qu'ils contiennent (après ré-indexation) et d'organiser une arborescence de
termes descripteurs pour ce champ.

A la racine du thésaurus...

* Créer le terme utilisé pour nommer la branche de thésaurus
* Effectuer un clic droit sur cette branche
* Cliquer sur **Lier au champ**

Dans la fenêtre Lier la branche de thésaurus au champ...

* Cocher la ou les cases des champs à associer puis soumettre le formulaire

.. note::

    Tous les nouveaux termes contenus dans les notices documentaires des
    documents ajoutés ou dont l'indexation est modifiée, apparaissent
    sous forme de mots candidats dans une branche portant le nom du champ.

Intégration de termes candidats au thésaurus
--------------------------------------------

Les termes candidats sont des termes et expressions contenus dans champs
documentaires liés à des branches de thésaurus et n'en faisant pas partie. Ces
termes proviennent soit des métadonnées extraites des fichiers ajoutés, soit
des informations saisies dans le formulaire d'éditions des enregistrements.

Une part de l'entretien du thésaurus consiste à examiner ces candidats. S'ils
sont pertinents, ils se destinent à y être intégrés. Dans le cas contraire, une
correction des notices peut être nécessaire pour employer des descripteurs
plus appropriés.

Le travail d'ajout de termes candidats au thésaurus s'effectue soit dans
Thésaurus, soit dans Production.

Dans Thésaurus
**************

Accepter un candidat
^^^^^^^^^^^^^^^^^^^^

* Cliquer sur un terme candidat de la fenêtre Candidats et le glisser/déposer
  sur le terme générique avec lequel il entre en relation

Dans la fenêtre Accepter...

* Choisir d'ajouter comme terme spécifique ou synonyme puis valider

.. note::

    Les candidats ne peuvent être ajoutés que dans les branches liées aux
    champs documentaires dont ils sont issus.

Refuser un candidat
^^^^^^^^^^^^^^^^^^^

* Effectuer un clic droit sur un terme candidat de la fenêtre Candidats
* Sélectionner la rubrique **Refuser**

S'il est de nouveau saisi dans des notices documentaires, un terme refusé n'est
plus mentionné comme candidats.

**Pour afficher les termes refusés**, cocher la case *Afficher les termes
refusés* dans l'interface.

**Refuser un candidat est réversible** :

* Afficher les termes refusés
* Effectuer un clic droit sur un terme refusé
* Sélectionner **Accepter**

Supprimer un candidat
^^^^^^^^^^^^^^^^^^^^^

* Effectuer un clic droit sur le terme
* Cliquer sur la rubrique **Supprimer**
* Confirmer la suppression dans la fenêtre d'alerte

La suppression d'un terme candidat n'affecte pas les enregistrements. Un
candidat supprimé peut être réintroduit :

* S'il est réutilisé au cours de l'édition de notices d'enregistrements
* S'il reste présent dans les notices documentaires et que la base est réindexée

.. Warning::

    Lors de la ré indexation d'une base, les termes refusés ou supprimés d'un
    thésaurus réapparaissent, cette action réinitialisant les candidats du
    thésaurus.

Dans Production
***************

La rubrique Candidats
^^^^^^^^^^^^^^^^^^^^^

Cliquer sur l'onglet Thésaurus de la zone de travail puis sur la rubrique
Candidats. Les champs documentaires liés à des branches de thésaurus sont
présentés et le symbole + permet de déployer la liste des termes candidats
classés par ordre alphabétique.

Des recherches sur les termes candidats peuvent être lancées au moyen d'un
double-clic. La recherche effectuée est une interrogation par champ.

L'onglet Candidat permet une administration ponctuelle du Thésaurus.

Accepter un candidat
^^^^^^^^^^^^^^^^^^^^

Pour ajouter un terme candidat au Thésaurus :

* Effectuer un clic droit (ou cliquer en maintenant les touches "ctrl"
  enfoncée) sur un terme pour afficher le menu contextuel du terme.
* Accepter le terme dans l'une des langues d'interface

L'affichage bascule sur l'onglet Thésaurus

* Rechercher ou naviguer j'au terme du thésaurus à lier au terme candidat et
  effectuer un clic droit sur celui-ci
* Accepter le terme candidat comme terme spécifique ou comme synonyme

Supprimer un candidat
^^^^^^^^^^^^^^^^^^^^^

Effectuée à partir de Production cette opération supprime également le terme
candidat des notices de documents. Jusqu'à vingt-cinq fiches peuvent être
traitées au cours de cette suppression.

Pour supprimer un terme candidats :

* Effectuer un clic droit sur le terme à supprimer
* Sélectionner **Supprimer**
* Confirmer la suppression dans la fenêtre d'alerte

Remplacer un candidat
^^^^^^^^^^^^^^^^^^^^^

Cette opération permet de corriger un terme candidat utilisé jusque dans
vingt-cinq notices documentaires.

Pour remplacer un terme candidat dans des notices :

* Effectuer un clic droit sur le terme à corriger puis sélectionner Remplacer par
* Remplir le formulaire proposé puis cliquer sur Recherche
* Confirmer le remplacement dans la fenêtre d'alerte

.. note::

     Pour supprimer ou remplacer un terme dans plus de vingt-cinq fiches,
     utiliser le formulaire d'édition.
