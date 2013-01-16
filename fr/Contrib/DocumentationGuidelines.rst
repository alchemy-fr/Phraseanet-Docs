Standards de rédaction
======================

La documentation Phraseanet est libre et participative. Elle peut être éditée,
améliorée ou modifiée selon les besoins.

Pour commencer, le plus simple est d'imiter cette documentation telle qu'elle
existe déjà.

Voici ci-dessous une liste de règles à respecter et un mémo relatifs aux
marqueurs les plus utilisés.

Règles et style de rédaction
----------------------------

Règles
******

  * Les lignes ne dépassent pas 80 caractères
  * Le texte est encodé en UTF-8
  * La documentation n'est pas davantage optimisée pour l'impression PDF ou l'affichage HTML
  * La documentation est publiée en GPL v3

Style
*****

  * Rédiger à l'infinitif
  * Favoriser les phrases courtes
  * Privilégier un niveau de langue simple et compréhensible par tous

Mémo des règles de codage
-------------------------

Structure
*********

  * Listes ::

    * premièrement
    * deuxièmement
    * troisièmement

    * premièrement
    * deuxièmement
    * troisièmement

  * Titres et Sous-Titres ::

      H1 -- Premier titre
      ===================

      H2 -- Sous titre
      ----------------

      H3 -- Sous section
      ******************

      H4 -- Sous sous section
      ^^^^^^^^^^^^^^^^^^^^^^^

      H5
      ~~~~~~~~~~~~~~~~~~~~~~~

  * Images ::

      .. figure:: ../images/gplv3.png
        :align:  center
        :alt:    GPLv3 logo

        License GNU GPL v3

    .. figure:: ../images/gplv3.png
      :align:  center
      :alt:    GPLv3 logo

      Image Caption

Formatage
*********

  * Gras / Italique ::

    **gras** et *italique*

    **gras** et *italique*

  * Lien externe ::

        `example point com`_

        .. _example point com: http://www.example.com/

    `example point com`_

    .. _example point com: http://www.example.com/

    .. note::

        Il est d'usage de placer les références de liens en pied de page.

  * Lien dans la documentation ::

    :doc:`Ces règles <DocumentationGuidelines>`

    :doc:`Ces règles <DocumentationGuidelines>`

  * Lien vers un terme du glossaire ::

    :term:`enregistrement`

    :term:`enregistrement`

Meta Markups
************

  * Notes::

      .. note::
        Une note

    .. note::
      Une note

  * Avertissement::

      .. warning::
        Un avertissement

    .. warning::
      Un avertissement

  * Version added ::

    .. versionadded:: 3.5.0

    .. versionadded:: 3.5.0

  * Version changed ::

    .. versionchanged:: 3.5.0

    .. versionchanged:: 3.5.0

  * Références ::

    .. seealso:: documentation en ligne sur http://http://sphinx.pocoo.org/

    .. seealso:: documentation en ligne sur http://http://sphinx.pocoo.org/

  * Todos (reste invisible) ::

    .. todo:: mettre à jour

    .. todo:: mettre à jour

  * Topic  ::

    .. topic:: Topic Title (par exemple: L'essentiel)

        Subsequent indented lines comprise
        the body of the topic, and are
        interpreted as body elements.

.. topic:: Topic Title (par exemple: L'essentiel)

    Subsequent indented lines comprise
    the body of the topic, and are
    interpreted as body elements.

