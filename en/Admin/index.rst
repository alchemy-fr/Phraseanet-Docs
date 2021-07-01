Admin
=====

.. module:: admin
    :synopsis: Phraseanet Administrator guide

Phraseanet is built on top of MySQL databases: ApplicationBoxes and Databoxes.

**ApplicationBoxes** store users, baskets, rights, collections and links to one
or more **databoxes**.

**Databoxes** are containers for records. They are all different because of
their documentary structure.

Phraseanet also provides a **Task Manager**. This component manages PHP daemons
for metadatas writing, subviews creation, indexation.

Phraseanet can also be managed through 2 interfaces: `API <../Devel/>`_ and
`Konsole Kommander <Console.html>`_.

.. toctree::
    :maxdepth: 1
    :glob:

    Changelog
    Prerequisite
    Download
    InstallDocker
    Install
    Upgrade
    Configuration
    SearchEngine
    WorkerManager
    TaskManager
    Plugins
    Console
    Maintenance
    Migration to Phraseanet Docker Stack
