Routes
======

.. toctree::

    Route/Me
    Route/Search
    Route/Databox/List
    Route/Databox/Collections
    Route/Databox/Status
    Route/Databox/Metadatas
    Route/Databox/TermsOfUse
    Route/Quarantine/List
    Route/Quarantine/Item
    Route/Records/Add
    Route/Records/Search
    Route/Records/Caption
    Route/Records/Metadatas
    Route/Records/Status
    Route/Records/Embed
    Route/Records/Related
    Route/Records/Record
    Route/Records/SetStatus
    Route/Records/SetMetadatas
    Route/Records/SetCollection
    Route/Embed/Substitute
    Route/Stories/Story
    Route/Stories/Embed
    Route/Stories/Add
    Route/Stories/AddRecords
    Route/Stories/DelRecords
    Route/Stories/SetCover
    Route/Baskets/Add
    Route/Baskets/Content
    Route/Baskets/Delete
    Route/Baskets/List
    Route/Baskets/SetDescription
    Route/Baskets/SetName
    Route/Feeds/List
    Route/Feeds/Content
    Route/Feeds/Aggregated
    Route/Feeds/Entry
    Route/Monitor/Phraseanet
    Route/Monitor/Scheduler
    Route/Monitor/Task
    Route/Monitor/TaskStop
    Route/Monitor/TaskStart
    Route/Monitor/Tasks

L’API Phraseanet livre des routes pour accéder à des ressources au moyen d’URL
canoniques. Ces routes sont listées ci-après.

Comme mentionné :doc:`ici <Introduction>`, toutes ces routes d’API requièrent une
authentification et reposent sur des méthodes de requêtes HTTP de type GET et POST.

Pour chaque ressource, il est possible d’obtenir des liens et actions.
Par exemple, les propriétés d'un enregistrement ou d'une databox :

+-----------+----------------------------------------+------------------------------------------------+------------------------------------------------------+
|           | Généralités                            | Liens                                          | Actions                                              |
+===========+========================================+================================================+======================================================+
| api       |* :doc:`racine <../Root>`               |                                                |                                                      |
+-----------+----------------------------------------+------------------------------------------------+------------------------------------------------------+
| me        |* :doc:`search <Route/Me>`              |                                                |                                                      |
+-----------+----------------------------------------+------------------------------------------------+------------------------------------------------------+
| search    |* :doc:`search <Route/Search>`          |                                                |                                                      |
+-----------+----------------------------------------+------------------------------------------------+------------------------------------------------------+
| databox   |* :doc:`list <Route/Databox/List>`      |* :doc:`collections <Route/Databox/Collections>`|                                                      |
|           |                                        |* :doc:`status <Route/Databox/Status>`          |                                                      |
|           |                                        |* :doc:`metadatas <Route/Databox/Metadatas>`    |                                                      |
|           |                                        |* :doc:`termsOfUse <Route/Databox/TermsOfUse>`  |                                                      |
+-----------+----------------------------------------+------------------------------------------------+------------------------------------------------------+
| records   |* :doc:`search <Route/Records/Search>`  |* :doc:`metadatas <Route/Records/Metadatas>`    |* :doc:`setstatus <Route/Records/SetStatus>`          |
|           |* :doc:`record <Route/Records/Record>`  |* :doc:`status <Route/Records/Status>`          |* :doc:`setcollection <Route/Records/SetCollection>`  |
|           |                                        |* :doc:`embed <Route/Records/Embed>`            |* :doc:`setmetadatas <Route/Records/SetMetadatas>`    |
|           |                                        |* :doc:`related <Route/Records/Related>`        |* :doc:`add <Route/Records/Add>`                      |
+-----------+----------------------------------------+------------------------------------------------+------------------------------------------------------+
| embed     |* :doc:`record <Route/Embed/Substitute>`|* :doc:`embed <Route/Records/Embed>`            |                                                      |
+-----------+----------------------------------------+------------------------------------------------+------------------------------------------------------+
| stories   |* :doc:`record <Route/Stories/Story>`   |* :doc:`embed <Route/Stories/Embed>`            |* :doc:`add <Route/Stories/Add>`                      |
|           |                                        |                                                |* :doc:`addrecords <Route/Stories/AddRecords>`        |
|           |                                        |                                                |* :doc:`delrecords <Route/Stories/DelRecords>`        |
|           |                                        |                                                |* :doc:`setcover <Route/Stories/SetCover>`            |
+-----------+----------------------------------------+------------------------------------------------+------------------------------------------------------+
| baskets   |* :doc:`list <Route/Baskets/List>`      |* :doc:`content <Route/Baskets/Content>`        |* :doc:`setname <Route/Baskets/SetName>`              |
|           |* :doc:`add <Route/Baskets/Add>`        |                                                |* :doc:`setdescription <Route/Baskets/SetDescription>`|
|           |                                        |                                                |* :doc:`delete <Route/Baskets/Delete>`                |
+-----------+----------------------------------------+------------------------------------------------+------------------------------------------------------+
| feeds     |* :doc:`list <Route/Feeds/List>`        |* :doc:`content <Route/Feeds/Content>`          |                                                      |
|           |                                        |* :doc:`aggregation <Route/Feeds/Aggregated>`   |                                                      |
|           |                                        |* :doc:`entry <Route/Feeds/Entry>`              |                                                      |
+-----------+----------------------------------------+------------------------------------------------+------------------------------------------------------+
| Quarantine|* :doc:`list <Route/Quarantine/List>`   |* :doc:`item <Route/Quarantine/Item>`           |                                                      |
+-----------+----------------------------------------+------------------------------------------------+------------------------------------------------------+

En plus de ces routes, des routes dédiées au monitoring et à l'administration
sont disponibles :

- :doc:`Route/Monitor/Phraseanet <Route/Monitor/Phraseanet>`
- :doc:`Route/Monitor/Scheduler <Route/Monitor/Scheduler>`
- :doc:`Route/Monitor/Task <Route/Monitor/Task>`
- :doc:`Route/Monitor/TaskStop <Route/Monitor/TaskStop>`
- :doc:`Route/Monitor/TaskStart <Route/Monitor/TaskStart>`
- :doc:`Route/Monitor/Tasks <Route/Monitor/Tasks>`
