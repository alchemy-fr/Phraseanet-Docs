Admin
=====

.. module:: admin
    :synopsis: Phraseanet Administrator guide

Phraseanet is built on top of MySQL databases: ApplicationBoxes and Databoxes.

ApplicationBoxes store users, baskets, rights, collections and links to one
or more databoxes.

Databoxes are containers for records. They are all different because of
their documentary structure.

Phraseanet also provides a Task Manager. This component manages PHP daemons for
Metadatas Writing, Subviews creation, indexation.

Phraseanet can also be managed through 2 interfaces : `API <../../Devel>`_ and
`Konsole Kommander <Console>`_.

.. toctree::
    :hidden:

    Prerequisite
    Download
    Install
    Upgrade
    Configuration
    SearchEngine
    TaskManager
    Console
    Maintenance
    Faq
