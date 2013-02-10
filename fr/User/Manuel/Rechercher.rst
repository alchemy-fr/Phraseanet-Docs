Rechercher
==========
.. toctree::
    :maxdepth: 3

.. topic:: L'essentiel
    
    Dans *Production* et *Classic*, deux modes de recherche sont possibles :

    * La zone de `Recherche simple`_ permet d'effectuer des recherches simples en 
      texte intégral dans les :term:`bases <base>`/collections de documents.

    * La `Recherche avancée`_ permet d'effectuer des requêtes plus 
      évoluées et de mettre en place un certain nombre de filtres sur les 
      :term:`bases <base>` et collections.

    Phraseanet embarque deux moteurs de recherche: un moteur texte intégral et 
    un moteur thesaurus optionnel.
	
    Le premier moteur est le moteur texte intégral. Il permet d’effectuer des 
    recherches sur tous les champs de toutes les :term:`bases <base>` et toutes 
    les collections auxquels l’utilisateur est connecté.
    Le deuxième moteur est le moteur de recherche du Thesaurus. Il n’est activé
    que lorsqu’un thesaurus existe.

Recherche simple
----------------
Le formulaire de Recherche simple se trouve dans la partie centrale de la page,
au-dessus de la palette des Actions et de la zone d’affichage des Résultats. 

La Recherche simple se trouve dans la partie centrale de la page, au-dessus de la
palette des Actions et de l’affichage des Résultats.

.. image:: ../../images/Rechercher-simple.jpg
    :align: center

Par défaut, le critère *ALL* (ou *TOUT*) est affiché. Il permet d'afficher l'
intégralité des documents des bases et collections sélectionnés.

Pour lancer une recherche :

* Taper le mot clé.
* Cliquer sur Chercher.

Les réponses qui correspondent à la recherche effectuée s'affichent dans la zone
des résultats.

Un groupe de boutons radio permet de choisir si la recherche doit se faire sur
les documents ou sur les reportages. Dans une recherche portant sur les
reportages la requête porte sur la fiche d'indexation des reportages.

.. note::

    Il n'est pas possible de chercher à la fois sur des reportages et des
    documents.

Recherche par opérateur ordinal
*******************************

Le nombre de documents sélectionnés est valable par
:term:`bases <base>` et collections ouvertes. Dans l'exemple donné, si trois
bases/collections sont ouvertes, la sélection comporte 300 documents 
(3 x 100) pour peu que le nombre de documents soit supérieur ou égal à 100 dans
chacune des bases.

* *Derniers* ou *last* (sans précision de nombre) affiche par défaut les 12
  derniers documents ajoutés.
* *Tout* (ou *all*): pour rechercher tous les documents parmi les :term:`bases
  <base>` et collections sélectionnées.

Recherche sur un mot contenu dans la description documentaire
*************************************************************
N'importe quel mot peut être saisi. Par exemple: en saisissant le mot *tour*, 
on obtient tous les documents dont la description contient le mot tour, comme 
*Tour Eiffel*. 

Attention, la recherche porte sur le mot entier, ainsi en saisissant *tou*, on 
n'obtient pas de documents sur des tours. Par défaut, on recherche sur tous les 
champs descripteurs indexés de la :term:`base`/collection.

Un caractère peut être remplacé par *?*. Ainsi, la recherche *mo?s*
sélectionnera notamment les documents dont la description contient *mois* ou
*mots*.

Un nombre indéfini de caractères peut être remplacé par un astérisque :
 
Ainsi, la saisie des lettres "co*res" sélectionnera notamment les documents dont 
la fiche descriptive contient *Palais des Congrès*. Le paramétrage standard
impose de saisir au moins 2 caractères avant l'astérisque (co*).

Recherche avec plusieurs mots (utilisation des opérateurs booléens)
*******************************************************************
Plusieurs mots peuvent être combinés pour affiner la sélection. Utiliser 
les opérateurs logiques *ET, OU, SAUF*. Par exemple: *Tour sauf Eiffel* 
affiche tous les documents dont les champs documentaires indexés contiennent le
mot *Tour* mais pas ceux relatifs au terme *Tour Eiffel*. 

Plusieurs mots peuvent être combinés pour affiner la sélection. Utiliser
les opérateurs logiques *ET, OU, SAUF*. Par exemple: *Tour sauf Eiffel* sélectionnera
tous les documents dont la description contient le mot *Tour* mais pas celles sur
la *Tour Eiffel*.

.. note::

Comment modifier l'opérateur mis en oeuvre par défaut ?

**ET** impose que la première condition soit satisfaite et que la deuxième 
condition soit satisfaite.

* **ET** impose que la première condition soit satisfaite et que la deuxième
  condition soit satisfaite.
* **OU** impose qu’au moins une des conditions soit satisfaite.
* **SAUF** impose que la condition ne soit pas satisfaite.

.. note::

    Ordre de priorité des opérateurs: les parenthèses ou les doubles cotes
    sont prioritaires sur le reste.

Recherche dans un champ précis
******************************
Il est possible de limiter le cadre de la recherche à une rubrique de la
description. Ainsi rechercher marra* dans legende affichera les documents qui
contiennent le mot *marrakech dans le champs légende*.

Les mots, réponses aux questions sont surlignés dans la description. Ici, un
exemple avec le terme "mer", qui est surligné dans le champ Mot clé.

.. image:: ../../images/Rechercher-motdanslegende.jpg
    :align: center

Recherche avec les opérateurs de proximité
******************************************

**L’opérateur PRES** permet de repérer tous les enregistrements dans lesquels le
résultat du terme 1 apparaît à une distance spécifiée (n) du terme 2.
Par exemple, (Tour PRES 2 Eiffel) sélectionnera les enregistrements dans lesquels
une distance de 2 mots maximum sépare le mot *Tour* du mot *Eiffel*.

.. note::

    Si aucune distance n’est précisée, l’opérateur PRES est traité comme un
    opérateur ET.

**L’opérateur AVANT** permet de repérer tous les enregistrements dans lesquels le
résultat du terme 1 apparaît avant le terme 2 et a une distance spécifiée (n).
Par exemple, (Tour AVANT 2 Eiffel) sélectionnera les enregistrements dans lesquels
le mot Tour est situé, au maximum, deux mots avant le mot Eiffel.

.. note::

    Il n'est pas nécessaire de spécifier la distance. Si la distance n'est
    pas précisée, la valeur par défaut est 12.

**L’opérateur APRES** permet de repérer tous les enregistrements dans lesquels le
résultat du terme 1 apparaît après le terme 2 à une distance spécifie (n).
Par exemple, (Eiffel APRES 2 Tour) sélectionnera les enregistrements dans lesquels
le mot Eiffel est situé, au maximum, deux mots après le mot Tour.

.. note::

    Il n'est pas nécessaire de spécifier la distance.
    Si la distance n'est pas précisée, la valeur par défaut est 12.

Recherche avec comparaison numérique
************************************
Il est possible de sélectionner des documents en comparant des quantités, pour 
les rubriques de type Date, Heure et Numérique. 
Ainsi la recherche *date > 14/07/2012* présente les documents datés après le 14
juillet 2012. 

Il est possible de sélectionner des documents en comparant des quantités, pour
les rubriques de type Date, Heure et Numérique.
Ainsi: *date > 14/07/2005* sélectionnera les documents datés après le 14 juillet
2005.

Les opérateurs de comparaison sont : >, <, =, <=, >=, entre (les bornes sont
incluses).

Les Jours (JJ), mois (MM), Années (AAAA) peuvent être collés ou séparés par un
slash /, un tiret -, un espace.

  * Recherche sur un jour: JJ/MM/AAAA, AAAAMMJJ, JJ/MM/AA, AAAA/MM/JJ, 
    JJ-MM-AAAA, AA-MM-JJ
  * Recherche sur un mois: MM/AA, AAAA/MM, AAAAMM, MM/AAAA
  * Recherche sur une année: AAAA

    La saisie des champs de type date est stricte.

Recherche avancée
-----------------
Pour afficher le formulaire de recherche avancée, cliquer sur la roue crantée
située entre le champ de recherche et le bouton «Rechercher».

.. image:: ../../images/Rechercheavancee1.jpg
    :align: center

Une fenêtre Overlay s’ouvre. La fenêtre de recherche avancée se présente en
trois parties :

.. image:: ../../images/Rechercheavancee0.jpg
    :align: center

La partie haute présente un formulaire similaire à celui de la recherche simple.

La partie gauche présente la liste des bases et collections consultable par l'
utilisateur.
Cocher ou décocher les :term:`bases <base>` et collections sur lesquels doivent
s'effectuer les recherche.

.. note:: Il est possible de désélectionner toutes les :term:`bases <base>` et 
          collections en cliquant sur "Aucune" ou de cliquer directement sur les 
          noms des :term:`bases <base>` pour les sélectionner ou désélectionner
          individuellement ou encore dans les cases à cocher proposées pour 
          chaque collection disponible.
   
La partie droite présente les différents filtres disponibles pour affiner les
recherches :

* Trier par mots clés contenus dans un ou plusieurs champs spécifiques,
* Trier par status,
* Trier sur des intervalles de dates,...

Les documents s'affichent dans la fenêtre *Résultats*.

.. note:: Les options de la recherche avancée sont persistantes. Les choix
          adoptés dans la fenêtre de recherche avancée restent valables tant qu'
          ils ne sont pas modifiés.
          Dans le formulaire de recherche simple, la présence d'options de
          recherche est matérialisé par la teinte jaune du formulaire de
          recherche.


Recherche avec le Thésaurus
---------------------------
Si un Thésaurus est lié à la base consultée, la recherche à partir du Thesaurus
s'effectue à partir de l'onglet Thésaurus de la Zone de travail. 

Se reporter à la section Thésaurus :doc:`cette page <Onglets>`.

La recherche dans les interfaces *Production* et *Classic*
----------------------------------------------------------
Les interfaces *Production* et *Classic* permettent d'effectuer des recherches
dans les fonds documentaires de bases *Phraseanet*.

Elles présentent un champ de recherche, dans lequel l'utilisateur entre des 
termes incluant ou pas des opérateurs booléens ou autres critères vus
précédemment (exemples: all, last, plage, mer OU océan ET plage SAUF mouettes).

Aujourd'hui, la raison d'être de *Classic* est d'apporter une compatibilité avec
des navigateurs réputés obsolètes (Internet Explorer 6 par exemple) encore
utilisés dans certaines entreprises.

Avec un navigateur récent, privilégier l' utilisation de *Production*.

La recherche dans *Production*
******************************

.. image:: ../../images/Rechercher-Prod1.jpg
    :align: left

Ci-contre, la zone de recherche dans l'interface de *Production*:
Voici la `Recherche Simple`_.

Pour accéder à la `Recherche Avancée`_, cliquer sur la roue.

Pour effectuer une recherche dans l'interface de Production:

  * Sélectionner s'il faut rechercher dans les Documents ou dans les Reportages 
    (par défaut, la recherche s'effectue dans les Documents).   
	
  * Eventuellement, sélectionner un type de document: ne rechercher que dans les 
    images, que dans les vidéos, ou bien uniquement parmi les documents de type 
    audio, document, flash...

  * Dans la Recherche Avancée, si besoin, sélectionner les base(s) et
    collection(s) sur lesquels portent la recherche.

  * Enfin, cliquer sur le bouton Rechercher.
  
  .. note:: Il est possible de personnaliser le nombre de résultats par page. Se
    reporter à la page :doc:`Personnaliser l'interface <PersonnaliserInterface>`.

La recherche dans *Classic*
***************************
  .. image:: ../../images/Rechercher-Classic1.jpg
	   :alt: alternate text
	   :align: right

.. image:: ../../images/Rechercher-Classic1.jpg
    :align: right

Trois onglets dans l'interface *Classic*, au-dessus de la zone de recherche :

  * La Recherche simple
  * La Recherche avancée
  * Les Thèmes, si déployés dans le paramétrage de *Phraseanet*.

De la même manière que dans *Production*, l'utilisateur doit entrer un ou
plusieurs termes et choisir éventuellement les bases et collection dans lesquels
il souhaite faire sa recherche dans l'onglet *Collections*.

Dans *Classic*, il est possible de choisir le mode d'affichage des résultats.
Par défaut, 7 modes d'affichage sont proposés.

Quelques exemples:

* 4*10 signifie 4 colonnes et 10 lignes, soit 40 vignettes par page.
* Liste*10 affiche 10 vignettes en mode liste avec la description.

Si un thésaurus est déployé, l'onglet "propositions" affiche les éventuelles
propositions du Thésaurus Phraseanet.

L'onglet "Historique" dresse l'inventaire des questions posées par l'
utilisateur.
