Standards de rédaction
======================

Cette documentation est libre et participative. Vous pouvez l'éditer, 
l'améliorer et la modifier à votre guise.

Pour commencer, le plus simple sera d'imiter la documentation telle qu'elle 
existe déjà.

Vous trouverez aussi ci-dessous une liste de règles à respecter et un mémo des
marqueurs les plus utilisés.

Règles
------

  - Les lignes ne dépassent pas 80 caractères
  - Le texte est encodé en UTF-8
  - La documentation n'est pas d'avantage optimisée pour le PDF ou le HTML
  - La documentation est publiée en GPL v3

Mémo
----

Structure
*********

  - Listes ::

    * premièrement 
    * deuxièmement 
    * troisièmement

    * premièrement 
    * deuxièmement 
    * troisièmement

  - Titres et Sous-Titres ::

      H1 -- Premier titre
      ===================

      H2 -- Sous titre
      ----------------

      H3 -- Sous section
      ******************

      H4 -- Sous sous section
      ^^^^^^^^^^^^^^^^^^^^^^^

  - Images ::

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

  - Gras / Italique ::

    **gras** et *italique*

    **gras** et *italique*

  - Lien externe ::

    `Example.com <http://www.example.com/>`_

    `Example.com <http://www.example.com/>`_

  - Lien dans la documentation ::

    :doc:`Ces règles <DocumentationGuidelines>`

    :doc:`Ces règles <DocumentationGuidelines>`

  - Lien vers un terme du glossaire ::

    :term:`enregistrement`

    :term:`enregistrement`


Meta Markups
************

  - Notes::

      .. note::
        Une note

    .. note::
      Une note

  - Avertissement::

      .. warning::
        Un avertissement

    .. warning::
      Un avertissement

  - Version added ::

    .. versionadded:: 3.5.0

    .. versionadded:: 3.5.0

  - Version changee ::

    .. versionchanged:: 3.5.0

    .. versionchanged:: 3.5.0

  - Références ::

    .. seealso:: documentation en ligne sur http://http://sphinx.pocoo.org/

    .. seealso:: documentation en ligne sur http://http://sphinx.pocoo.org/

  - Todos (reste invisible) ::

    .. todo:: mettre à jour

    .. todo:: mettre à jour


