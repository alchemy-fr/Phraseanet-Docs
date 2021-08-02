Welcome to Phraseanet 4.1's documentation
=========================================

Open source DAM system
----------------------

`Phraseanet`_ is a Digital Asset Management system (DAM for short) targeting the
professionals needs. It's created and maintained by the French company
`Alchemy`_.

Phraseanet can store, manage and share a wide range of digital resources such as
images, videos, audio or office documents within working groups of any size.

As a *100% Web* application, it runs in a modern web browser.

Built upon standard components, *Phraseanet* settles on Linux, OS X or Windows
servers and is based on common software components such as Elasticsearch, MySQL,
PHP or Apache.
Other third-party software libraries participate to *Phraseanet*.
Some of these are `developed by Alchemy <http://phraseanet.github.com/>`_,
while some others not.

About this documentation
------------------------

This manual discusses about the :doc:`administration<Admin/index>`, the
:doc:`use<User/index>` and the :doc:`advanced developments<Devel/index>`
settings on *Phraseanet*.
A :doc:`glossary<Glossary>` introduces specific terms and concepts used in the
application.
Want to contribute? Great! Please see :doc:`this section<Contrib/index>` before
beginning.

.. toctree::
    :maxdepth: 1

    Contrib/index
    Glossary
    FAQ/index
    Devel/index
    User/index
    Admin/index

What's new in version 4.1?
--------------------------

Here are the main changes in version 4.1:

* Simplified deployment under `Docker`_ (`See official images`_)
* :doc:`Worker <../../Admin/WorkerManager>`: this service allows performance gains in the management of
  sub-definition files
* Geolocation: Search for records by selecting locations on maps,
  add of locations in the record note via the edit form
* Video tools: Cutting and creating chapters
* Video subtitling: Add subtitles in WebVTT format for one or more languages
* Graphics improvements

Need help?
----------

`Alchemy`_, editor of Phraseanet sells
`a range of services <https://www.alchemy.fr/en/rubrique/services/>`_ around the
application.

The Phraseanet team spends part of his time in dedicate forums and groups.
Please consult `this page <http://www.phraseanet.com/en/support/>`_ for a
presentation of these groups.

.. _Alchemy: https://www.alchemy.fr/en
.. _Phraseanet: https://www.phraseanet.com/
.. _developed by Alchemy: https://github.com/alchemy-fr/Phraseanet
.. _See official images: https://hub.docker.com/u/alchemyfr
.. _Docker: https://www.docker.com/
