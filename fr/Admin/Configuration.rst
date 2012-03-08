Configuration
=============

Le principal réglage de l’application est dans la structure XML de la
:term:`base <base>` à laquelle on accède via le module :

administration > base de donnée > structure.

Structure
---------

    .. todo:: mettre à jour

Réglage de collection
---------------------

* Ajout de valeurs suggérées

Les valeurs suggérées sont des aides à la saisie.
Elles permettent de créer des listes de termes que l'on retrouve
lors de l’édition.

* Ajout d'un Minilogo

Logo représentatif de la collection

* Ajout d'un Fichier de Watermark (filigrane)

Le Fichier de filigrane ou watermark s'applique sur les documents
en prévisualisation selon les droits de l'utilisateur connecté.

* Ajout d'un StampLogo

Logo accompagnant le document au téléchargement et pouvant être associé à
la description de celui-ci.

  comment créer un stamplogo

      - ajouter un ficher (logo)
      - cliquer sur la collection puis sur reglage de collection
      - cliquer sur "vue xml" et éditer le xml en suivant l’exemple ci-dessous

  .. code-block:: xml

    <?xml version="1.0" encoding="UTF-8"?>
    <baseprefs>
      <status>0</status>

      <stamp>
            <logo position="left" width="25%"/>
            <text size="50%">Titre: <field name="SujetTitre"/></text>
            <text size="50%">Legende: <field name="Legende"/></text>
            <text size="50%">Copyright: <field name="Copyright"/></text>
            <text size="50%">Date : <field name="Date"/></text>
            </stamp>
      <sugestedValues>
      </sugestedValues>
    </baseprefs>

