Les recherches avec le moteur Elasticsearch dans Phraseanet
===========================================================

.. topic:: L'essentiel

    L'introduction de Elasticsearch comme moteur de recherche unique dans
    Phraseanet introduit une rupture dans les habitudes de recherche.
    Même si les recherches les plus courantes s'effectuent de la même façon que
    dans les versions précédentes de Phraseanet, des équations de recherche
    évoluent.

Quelques mots sur Elasticsearch
-------------------------------

Le moteur de recherche Elasticsearch est libre, open source et repose sur le
projet Lucene de la fondation Apache. Ses avantages :

* Il est distribué, taillé pour le Cloud computing
* Il bénéficie de fonctionnalités avancées (indexation automatique, pertinence,
  racinisation, stematisation, lemmatisation, pertinence)

Avec l'implémentation du moteur Elasticsearch dans Phraseanet, les syntaxes de
recherche évoluent.
Sauf exception pour ce qui concerne la recherche de valeurs exactes ou portant
sur des valeurs réservées d'espaces de noms, et tel que mis en oeuvre dans
Phraseanet, les recherches sont...

* Insensibles à la casse
* Insensibles aux caractères accentués

L'opérateur de conjonction *ET*
*******************************

Le **ET** (AND) par défaut demeure. L'espace équivaut à un ET.

.. code::

    Chien ET Chat
    Dogs AND Cats


L'opérateur de disjonction *OU*
*******************************

Il permet de rechercher alternativement plusieurs termes dans les notices des
médias.
Ainsi, pour une recherche **mer OU montagne** les fiches descriptives des médias
affichées contiennent soit le mot mer, soit le mot montagne, soit les deux à la
fois.

.. code::

    Chien OU Chat
    Dogs OR Cats


L'opérateur de négation *SAUF*
******************************

Il permet d'exclure des termes de la recherche.

.. code::

    Hiver SAUF Neige
    Winter EXCEPT Snow


Les opérateurs ordinaux **TOUT** et **DERNIERS**
------------------------------------------------

Les opérateurs TOUT (ALL) et DERNIERS (LAST) n'existent pas avec Elasticsearch.

**Pour afficher tous les enregistrements** d'une instance, effectuer une
recherche vide (cliquer sur le bouton Rechercher avec le champs de recherche
vide).

.. note::

    Pour remplacer une recherche DERNIERS / LAST, utiliser des recherche sur
    :ref:`les dates d'archivage de documents ou de modification de notices <Recherches-sur-dates-d-archivage-et-de-mise-a-jour>`.


Les opérateurs de substitution
------------------------------

Les opérateurs de substitution ne sont pas supportés dans l'implémentation
d'Elasticsearch pour Phraseanet.

* Pas de troncature par le caractère *
* Pas de substitution de caractère par ?

Les opérateurs de proximité
---------------------------

Aucun opérateur de proximité (Près, Avant et Après) n'est supporté dans
l'implémentation d'Elasticsearch pour Phraseanet.

Les opérateurs de comparaisons numériques
-----------------------------------------

Trois opérateurs de comparaisons numériques sont disponibles :

* l'égalité
* plus petit que
* plus grand que

Les opérateurs plus petit que et plus grand que ne fonctionnent que dans des
recherches sur des champs de type numérique ou date.

Ces trois opérateurs sont mis en oeuvre dans les recherches par champs.

Recherche dans un champ précis
------------------------------

L'espace de nom *field* étant implicite, la syntaxe à indiquer dans le champ de
recherche est nom du champ, opérateur, valeur recherchée.

Rechercher avec les deux points (:)
***********************************

Exemple pour une recherche dans un champ nommé TitreEn dans le structure
documentaire :

.. code::

    TitreEn: Limelight (identique à field.TitreEn: Limelight)
    TitreEn: Rambo (identique à field.TitreEn: Rambo)


Le moteur effectue des césures automatique sur les espaces et caractères vides.
Le terme recherché est le premier terme compris entre l'opérateur saisi et
l'espace suivant.

**Important** : Pour rechercher une expression contenue dans un champ,
entourer l'expression recherchée de guillemets.

Exemple :

.. code::

    TitreFr: "Les feux de la rampe"
    TitreFr: "Rambo 2"


.. note::

    Dans les recherches avec les deux points, des analyseurs de langues intégrés
    au moteur de recherche sont mis en oeuvre pour de maximiser les résultats
    de réponse.


Le champ est
************

Utiliser l'opérateur = (égal) pour rechercher des valeurs exactes et strictes
(y compris le respect de la casse).

Exemples :

.. code::

    TitreEn= Limelight
    TitreFr= Rio
    TitreFr= "Et Dieu... créa la Femme"


.. note::

    Ce type de recherche ne met en oeuvre aucun traitement de langue ou de
    syntaxe.


Rechercher une date
*******************

Une recherche sur un champ date exploite les opérateurs arithmétiques d'égalité
ou de comparaison sur le champ donné.

Exemples pour l'interrogation d'un champ nommé Date :

.. code::

    Date < 2016/01/01
    Date = 2016/01/01
    Date > 2015/07/01
    Date >= 2015/12/31


.. _Recherches-sur-dates-d-archivage-et-de-mise-a-jour:

Recherches sur les dates d'ajouts de documents ou de modification de notices
****************************************************************************

Les métadonnées natives **created_on** et **updated_on** permettent des
recherches sur les dates d'ajouts de documents ou de modification de notices.

**created_on** est la métadonnée native indiquant la date d'introduction d'un
document dans une base ou la date de création d'un reportage Phraseanet.

**updated_on** est la métadonnée native indiquant la date de mise à jour de la
notice de l'asset.

**created_at** et **updated_at** sont des alias de ces métadonnées.

Exemples de recherche :

.. code::

    created_on> 2016/04/18 pour les enregistrements créé après le 18 avril 2016
    updated_on< 2016/03/18 pour les enregistrements créé avant le 03 mars 2016
    created_on= 2016/04/18 pour les enregistrements créé le 18 avril 2016
    created_on= 2016/04 pour les enregistrements créés en avril 2016 (> ou < ne
    fonctionnent pas sur ce critère d'interrogation)
    created_on= 2015 pour les enregistrements créés en 2015 (> ou < ne
    fonctionnent pas sur ce critère d'interrogation)


.. note::

    Bien que ces interrogations portent sur des dates, les opérateurs de
    comparaisons arithmétiques ne fonctionnent pas.
    Pour effectuer ce genre de recherche, déclarer des champs de date d'ajout /
    date d'édition dans la structure documentaire de la base avec les sources
    de métadonnées Phraseanet Tf-Archivedate et Tf-Editdate.


Rechercher au moyen du thésaurus
--------------------------------

La démarche consiste à interroger des bases et collections au moyen du
thésaurus *Phraseanet*.

Ce type de recherche s'effectue en cliquant sur un terme du thésaurus affiché
dans l'onglet Thésaurus de la zone de travail ou bien en renseignant le
formulaire de recherche d'un terme ou d'une expression entre crochets.

Exemples :

.. code::

    [Aéronautique]
    [Cinéma français]


Recherche sur les status
------------------------

La recherche sur les status peut s'effectuer dans le formulaire de recherche
avec l'espace de nom *flag* et le nom du status.
L'état du status peut être *true* ou *false*.

Exemple, pour l'état d'un status média renseigné baissé :

.. code::

    flag.media-renseigné:false


Recherche sur des champs techniques
-----------------------------------

Des recherches sont possibles sur des attributs techniques de documents,
variables en fonction de leurs natures.

Ces attributs sont présents si et seulement ils ont été renseignés par le
micro-logiciel de l'appareil utilisé pour la capture ou la retouche,
le montage.

Les opérateurs :, =, <, <=, >= >, peuvent être utilisés.

Exemples d'attributs de métadonnées pour des documents de type
Phraseanet image :

.. list-table::
   :widths: 40 100
   :header-rows: 1
   :stub-columns: 1

   * - **Métadonnées**
     - **Description de la métadonnées et exemple d'utilisation**
   * - meta.Width
     - Largeur en pixels

       meta.Width>3000
   * - meta.Height
     - Hauteur en pixels

       meta.Heigh>= 2400 pour les images dont la hauteur est supérieure ou égale
       à 2400 pixels.
   * - meta.FocalLength
     - Longueur de la la focale utilisée
   * - meta.Channels
     - Nombre de canaux utilisés pour la codage de la couleur

       1 : Niveau de gris (greyscale)

       3 : Codage RGB (RVB en français)

       4 : Codage CMYK

       meta.Channels= 1 (Affiche toutes les images en niveau de gris)
   * - meta.ColorDepth
     - Profondeur de la couleur, nombre de bit utilisés pour la codage de chaque
       canal.

       meta.ColorDepth> 8 (Toutes les images dont les canaux de codage de la
       couleurs sont supérieurs à 8 bits)
   * - meta.CameraModel
     - Nom du dispositif de prise de vue

       meta.CameraModel: iphone (tous les documents capturés par un appareil
       de type iphone)
   * - meta.FlashFired
     - Déclenchement de flash. La métadonnée renvoie true ou false.

       meta.FlashFired= true
   * - meta.Aperture
     - Ouverture de l'objectif

       meta.Aperture > 2.8
   * - meta.ShutterSpeed
     - Vitesse d'obturation enregistrée
   * - meta.HyperfocalDistance
     - Distance pour laquelle, depuis le plan film de l'appareil, les sujets
       sont nets jusqu'à l'infini.
   * - meta.ISO
     - Indice de sensibilité ISO

       meta.ISO < 400 pour les images dont la sensibilité à la lumière est
       inférieure à 400 ISO
   * - meta.LightValue
     - Valeur de l'illuminant

   * - meta.ColorSpace
     - Espace colorimétrique de l'image
   * - meta.Orientation
     - Indication de l'orientation de l'image
   * - meta.Longitude
     - La longitude enregistrée par dispositif de prise de vue
   * - meta.Latitude
     - La latitude enregistrée par dispositif de prise de vue
   * - meta.MimeType
     - Type mime du fichier
   * - meta.FileSize
     - La taille du fichier en octets

Exemples d'attributs de métadonnées pour des documents de type Phraseanet
audio :

.. list-table::
   :widths: 40 100
   :header-rows: 1
   :stub-columns: 1

   * - **Métadonnées**
     - **Description de la métadonnées et exemple d'utilisation**
   * - meta.Duration
     - Durée de la séquence audio exprimée en secondes

       meta.Duration>300 pour rechercher les séquences supérieures à 5 minutes.
   * - meta.MimeType
     - Type mime du fichier
   * - meta.FileSize
     - La taille du fichier en octets

Exemples d'attributs de métadonnées pour des documents de type Phraseanet
vidéo :

.. list-table::
   :widths: 40 100
   :header-rows: 1
   :stub-columns: 1

   * - **Métadonnées**
     - **Description de la métadonnées et exemple d'utilisation**
   * - meta.Width
     - La largeur de vidéo en pixels
   * - meta.Height
     - La hauteur de vidéo en pixels ou ligne

       meta.Height= 1080 pour les vidéo en 1080 lignes soit Full HD
   * - meta.Duration
     - Durée de la séquence audio exprimée en secondes
   * - meta.FrameRate
     - Nombre d'images par secondes
   * - meta.AudioSamplerate
     - La valeur de l'échantillonnage
   * - meta.VideoCodec
     - Algorithme de codage/décodage vidéo du fichier d'origine
   * - meta.AudioCodec
     - Algorithme de codage/décodage sonore du fichier d'origine
   * - meta.Orientation
     - Orientation du dispositif technique lors de la capture vidéo
   * - meta.MimeType
     - Type mime du fichier
   * - meta.Duration
     - Durée de la séquence vidéo exprimée en secondes

       meta.Duration>300 pour rechercher les séquences supérieures à 5 minutes.
   * - meta.MimeType
     - Type mime du fichier
   * - meta.FileSize
     - La taille du fichier en octets

Exemples d'attributs de métadonnées pour des documents de type Phraseanet
documents :

.. list-table::
   :widths: 40 100
   :header-rows: 1
   :stub-columns: 1

   * - meta.MimeType
     - Type mime du fichier
   * - meta.FileSize
     - La taille du fichier en octets

Recherche d'un enregistrement par son identifiant Phraseanet
------------------------------------------------------------

La syntaxe est : recordid: (le numéro d'enregistrement)

Exemple pour afficher le document dont le numéro d'enregistrement unique dans
la base est 804.

.. code::

    recordid: 804


.. note::

    Les opérateurs de comparaison =, < ou > ne sont pas implémentés.


Recherche d'enregistrements pour une base
-----------------------------------------

Pour la recherche d'enregistrement appartenant à une base, utiliser la syntaxe
*database:"l'alias de la base"*

Exemple :

.. code::

    database:"Base Parade Test"


**Important** : Respecter l'intitulé exact et la casse de l'alias donné à
la base.


