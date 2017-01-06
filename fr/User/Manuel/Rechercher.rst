Rechercher des enregistrements
==============================
.. toctree::
    :maxdepth: 3

.. topic:: L'essentiel

    Les recherches de médias et de reportages dans Phraseanet s'effectuent au
    moyen d'un moteur de recherche en texte intégral (ou plein texte).

    Combinés avec des opérateurs de recherche courants, ces recherches
    permettent de gagner en pertinence. Des recherches approfondies se
    pratiquent au moyen d'opérateurs moins fréquemment utilisés et il demeure
    possible de rechercher dans des champs précis si besoin.

    Les facettes permettent de parcourir le fonds selon un mode exploratoire
    laissant à l'utilisateur la possibilité de cumuler des critères de
    recherche.

    Le thésaurus, s'il est activé, aide également à présenter les ressources
    médias du fonds.

    Il n'en demeure pas moins que la qualité de l'indexation reste le critère
    déterminant pour l'accès aux richesses d'un fonds.

La recherche en texte intégral
------------------------------

*Phraseanet* propose un mode de recherche en texte intégral
permettant de questionner des documents ou des reportages selon les informations
contenues dans les champs documentaires des notices descriptives.

Par défaut, **la recherche porte sur les documents** des bases et collections
auxquelles a accès l'utilisateur. A la connexion, les médias affichés sont
ceux résultants d'une :doc:`question initiale paramétrable <Personnaliser>`.

.. image:: ../../images/Rechercheavancee1.jpg
    :align: center

.. _Rechercher-des-reportages:

**Pour rechercher des reportages**, placer le bouton radio du mode de recherche
en position reportage. Dans ce mode, la recherche porte sur le contenu de la
notice des reportages.

.. note::

    La recherche simultanée sur les documents et les reportages n'est pas
    possible.

Pour effectuer une recherche :

* Inscrire le ou les termes recherchés dans le formulaire de recherche
* Cliquer sur **Rechercher**

Le moteur de recherche est insensible à la casse et ne fait pas la différence
entre les caractères accentués et ceux qui ne le sont pas.

Les résultats obtenus sont affichés dans la zone d'affichage. Leurs pertinences
dépendent de la qualité d'indexation documentaire ainsi que de la requête
formulée.

.. note::

    Le nombre de résultats par page est ajustable. Se référer à la page
    consacrée à la :doc:`personnalisation de l'interface <Personnaliser>`.

Opérateurs booléens supportés
*****************************

Par défaut, l'opérateur mis en oeuvre entre les termes saisis est l'opérateur
de conjonction **ET** booléen. Il n'est pas nécessaire de le saisir.
Tous les termes saisis dans le formulaire sont présents dans les notices
descriptives des médias affichés à l'issue de la recherche.

D'autres opérateurs courants sont disponibles :

* L'opérateur de disjonction **OU** permet de rechercher alternativement
  plusieurs termes dans les notices des médias. Par exemple, si la recherche
  est **mer OU montagne** les fiches descriptives des médias affichées
  contiennent soit le mot mer, soit le mot montagne, soit les deux à la fois.
* L'opérateur de négation **SAUF** permet d'exclure un terme de la recherche.
  Si la recherche porte sur des plages qui ne sont pas en France, taper
  **plage SAUF France**.
* **La recherche entre guillemets** permet la recherche des termes contigus ou
  d'expressions dans les notices des médias. "Porte-manteau",
  "Avant-première"...etc.

D'autres possibilités existent au moyen de requêtes avancées.

.. seealso::

    :doc:`Voir la page consacrées aux recherches avec Elasticsearch <../../FAQ/Medias/Recherches-Elasticsearch-dans-phraseanet>`
    dans la FAQ.

Naviguer avec les facettes
--------------------------

Les informations contenues dans des champs documentaires peuvent être mises en
facettes. Cette technique permet à l'utilisateur un accès au fonds par
filtrage des résultats.

Le contenu de chaque facette est mis à jour au rafraîchissement des résultats
d'une recherche.

Cliquer sur l'une des facettes proposées dans l'onglet Facettes de la zone de
travail pour filtrer les résultats d'une recherche.

Les facettes sont déterminées par le paramétrage de la structure documentaire.


Recherche dans un champ précis
------------------------------

Pour une recherche dans un champ précis, la syntaxe à indiquer dans le champ de
recherche est nom du champ, tel que déclaré dans la structure documentaire,
l'opérateur, la valeur recherchée.

TitreEn: Limelight

**Le moteur effectue des césures automatique sur les espaces et caractères
vides** : Le terme recherché dans le champ précisé est comprise entre
l'opérateur et le premier espace suivant le terme recherché.
Pour rechercheer une expression contenue dans un champ, entourer l'expression
par des guillemets.

TitreFr: "Les feux de la rampe"

Pour l'opérateur, deux possibilités : le signe de ponctuation deux-points (:)
ou le signe égal (=).

Le contenu du champ **contient**
********************************

Utiliser l'opérateur : (deux-points) pour rechercher un terme seul ou une
expression entre guillemets faisant partie des inforamtions saisies dans le
champ dans lequel effectuer la recherche.

Exemple : Une recherche TitreFr: "Les feux" peut remonter des résultats comme
"Les feux de la rampe", "Les Feux de l'été", "Les feux de l'Amour"

.. note::

    Dans ce type de recherche des analyseurs de langue intégrés au moteur de
    recherche sont mis en oeuvre afin de maximiser les résultats de réponse.

Le contenu du champ **est**
***************************

Utiliser l'opérateur = (égal) pour rechercher des valeurs exactes et strictes
(y compris le respect de la casse).

Exemples de recherche :

* TitreFr= Rio
* TitreFr= "Rio Bravo"
* TitreFr= "Et Dieu... créa la Femme"

.. note::

    Ce type de recherche ne met en oeuvre aucun traitement de langue ou de
    syntaxe.

Recherche avancée
-----------------

Pour afficher le formulaire de recherche avancée, cliquer sur la roue crantée
située entre le champ de recherche et le bouton **Rechercher**.

.. image:: ../../images/Rechercheavancee0.jpg
    :align: center

La fenêtre de recherche avancée se présente en trois parties :

* Le formulaire de recherche
* La liste des bases et collections disponibles
* La liste des filtres de recherche

Cocher ou décocher les cases correspondantes aux collections sur lesquelles
doivent s'effectuer les recherches.

Il est possible de désélectionner toutes les :term:`bases <Base>` et
collections. Cliquer sur "Aucune" ou bien sur les noms des bases pour les
sélectionner ou désélectionner individuellement.

.. note::

    Si aucune collection n'est sélectionnée, la recherche porte sur toutes
    les bases et collections disponibles.

Les tris et filtres disponibles apportent de la granularité aux équations de
recherche :

* Trier par pertinence, date d'ajout, valeurs numériques ou dates paramétrées
  dans le structure documentaire d'une base
* Rechercher dans un ou plusieurs champs spécifiques
* Filtrer par status
* Limiter les recherches à des intervalles de dates

**Les options de la recherche avancée sont persistantes**. Les choix adoptés
dans la fenêtre de recherche avancée restent valables tant qu'ils ne sont pas
modifiés.
La présence d'options de recherche se matérialise par la teinte jaune du
formulaire de recherche.

Recherche avec le Thésaurus
---------------------------

Si un thésaurus est activé, la recherche et le parcours des résultats peuvent
être grandement améliorés.

Afficher le thésaurus
*********************

La recherche avec le Thésaurus s'effectue à partir de l'onglet Thésaurus de la
zone de travail.

.. image:: ../../images/Recherche-Thesaurus.jpg
    :align: center

Il présente le ou les *thesauri* déployés sous forme d'arbres dont les
noeuds et termes sont cliquables.

* Cliquer sur les "+" des noeuds du thésaurus pour le déployer et naviguer dans
  les termes qu'il contient.
* Double cliquer sur un des termes pour lancer la recherche.

**Une recherche dans les termes du thésaurus est possible** au moyen d'un
formulaire.
Inscrire au minimum les trois premiers caractères d'un terme pour déclencher le
dispositif d'auto-complétion.

.. image:: ../../images/Rechercher-thesaurus3.jpg
    :align: center
