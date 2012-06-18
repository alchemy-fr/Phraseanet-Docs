Documentation Guidelines
========================

This documentation is free ; you can edit, enhance and modify it as you want.

To start contribute, the simplest way is to start imitating documentation as it
already exists.

You'll find below some rules and the most common markup used in this
documentation.

Rules
-----

  * Lines do not exceed 80 characters
  * Text must be UTF-8 encoded
  * Documentation should not be optimized for PDF nor HTML
  * Documentation must be publishable as GPLv3

Memo
----

Structure
*********

  * Lists ::

    * first
    * second
    * third

    * first
    * second
    * third

  * Titles and Sub-Titles ::

      H1 -- Titre
      ===========

      H2 -- Sub titre
      ---------------

      H3 -- Sub section
      ******************

      H4 -- Sub sub section
      ^^^^^^^^^^^^^^^^^^^^^

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

Format
******

  * Bold / Italic ::

    **bold** et *italic*

    **bold** et *italic*

  * External link ::

    `Example.com <http://www.example.com/>`_

    `Example.com <http://www.example.com/>`_

  * Internal link ::

    :doc:`These rules <DocumentationGuidelines>`

    :doc:`These rules <DocumentationGuidelines>`

  * Glossary link ::

    :term:`record`

    :term:`record`


Meta Markups
************

  * Notes::

      .. note::
        A note

    .. note::
      A note

  * Warning::

      .. warning::
        Un warning

    .. warning::
      Un warning

  * Version added ::

    .. versionadded:: 3.5.0

    .. versionadded:: 3.5.0

  * Version changed ::

    .. versionchanged:: 3.5.0

    .. versionchanged:: 3.5.0

  * References ::

    .. seealso:: online documentation at http://http://sphinx.pocoo.org/

    .. seealso:: online documentation at http://http://sphinx.pocoo.org/

  * Todos (invisible) ::

    .. todo:: upgrade when available

    .. todo:: upgrade when available

  * Topic  ::

	.. topic:: Topic Title (for exemple: The essential)

		Subsequent indented lines comprise
		the body of the topic, and are
		interpreted as body elements.

.. topic:: Topic Title (for exemple: The essential)

    Subsequent indented lines comprise
    the body of the topic, and are
    interpreted as body elements.

