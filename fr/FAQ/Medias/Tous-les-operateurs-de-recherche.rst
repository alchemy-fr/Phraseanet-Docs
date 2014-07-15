Tous les opérateurs de recherche disponibles dans Phraseanet
============================================================

Voici la liste des différents opérateurs de recherche disponibles dans
*Phraseanet*.

Les opérateurs booléens
-----------------------

L'opérateur de conjonction *ET*
*******************************

Utilisé par défaut, si bien qu'il n'est pas utile de l'indiquer, l'opérateur
*ET* affiche les médias dont tous les termes saisis sont présents dans les
notices descriptives.

L'opérateur de disjonction *OU*
*******************************

Il permet de rechercher alternativement plusieurs termes dans les notices des
médias.
Ainsi, pour une recherche **sucré OU salé** les fiches descriptives des médias
affichées contiennent soit le mot mer, soit le mot montagne, soit les deux à la
fois.

L'opérateur de négation *SAUF*
******************************

Il permet d'exclure des termes de la recherche.

Les opérateurs ordinaux **TOUT** et **DERNIERS**
------------------------------------------------

* *Tout* (ou *all*) : pour afficher tous les documents parmi les :term:`bases
  <Base>` et collections sélectionnées.

* *Derniers* ou *last* (sans précision de nombre) affiche par défaut les 12
  derniers documents ajoutés dans une base.

L'opérateur *Derniers* est valable par :term:`bases <Base>` et collections
ouvertes.

Les opérateurs de substitution
------------------------------

Le caractère de troncature *****
********************************

Le caractère de troncature *****, utilisé à gauche d'une chaîne de caractères
permet de rechercher des médias dont les notices descriptives contiennent des
termes commençants par les caractères précédents l'astérisque.

Le caractère de remplacement **?**
**********************************

Un caractère peut être remplacé par **?**.
Ainsi, la recherche *mo?s* affiche les médias sont les notices descriptives
contiennent des termes tels *mois* ou *mots*.

Les opérateurs de proximité
---------------------------

L'opérateur **PRES**
********************

Il permet de repérer tous les médias dans lesquels le résultat du terme
1 apparaît à une distance spécifiée (n) du terme 2.

Par exemple, (Tour PRES 2 Eiffel) sélectionnera les enregistrements dans
lesquels une distance de 2 mots maximum sépare le mot *Tour* du mot *Eiffel*.

.. note::

    Si aucune distance n’est précisée, l’opérateur PRES est traité comme un
    opérateur booléen ET.

L'opérateur **AVANT**
*********************

Il permet de repérer tous les enregistrements dans lesquels le
résultat du terme 1 apparaît avant le terme 2 et a une distance spécifiée (n).
Par exemple, (Tour AVANT 2 Eiffel) sélectionnera les enregistrements dans
lesquels le terme *Tour* est situé, au maximum, deux mots avant le mot Eiffel.

.. note::

    Si la distance n'est pas précisée, la valeur par défaut est de 12.

L'opérateur **APRES**
*********************

Il permet de repérer tous les enregistrements dans lesquels le résultat du terme
1 apparaît après le terme 2 à une distance spécifiée (n).
Par exemple, (Eiffel APRES 2 Tour) sélectionnera les enregistrements dans
lesquels le mot Eiffel est situé, au maximum, deux mots après le mot Tour.

.. note::

    Si la distance n'est pas précisée, la valeur par défaut est 12.

.. warning::

    Pour tous les opérateurs mentionnés leur recherche dans une expression entre
    guillemets annule leurs fonctions.

Les opérateurs de comparaisons numériques
-----------------------------------------

Il est possible de sélectionner des documents en comparant des dates et
nombres contenus dans des champs documentaires typés comme Date ou Nombre.
Ainsi la recherche **date > 14/07/2012** affiche les médias dont un champ nommé
date est renseigné d'une date postérieure au 14 juillet 2012.

Les opérateurs de comparaison sont : >, <, =, <=, >=, entre (les bornes sont
incluses).

Les Jours (JJ), mois (MM), Années (AAAA) peuvent être collés ou séparés par un
slash /, un tiret -, un espace.

* Recherche sur un jour : JJ/MM/AAAA, AAAAMMJJ, JJ/MM/AA, AAAA/MM/JJ,
  JJ-MM-AAAA, AA-MM-JJ
* Recherche sur un mois : MM/AA, AAAA/MM, AAAAMM, MM/AAAA
* Recherche sur une année : AAAA

La saisie des champs de type date est stricte. L'utilisateur peut préférer de
mettre en oeuvre cette recherche au moyen de la fenêtre de recherche avancée.
