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

Phraseanet API provides routes to access resources using canonical URL.
These resources are listed below.

For the moment, all these routes require authentication.
Phraseanet API uses POST and GET methods.

For each resource, some aspects and actions are available.
For example, you can get the permalinks of a record with the following route:

+-----------+----------------------------------------+------------------------------------------------+------------------------------------------------------+
|           | General                                | Aspect                                         | Act                                                  |
+===========+========================================+================================================+======================================================+
| api       |* :doc:`root <../Root>`                 |                                                |                                                      |
+-----------+----------------------------------------+------------------------------------------------+------------------------------------------------------+
| me        |* :doc:`me <Route/Me>`                  |                                                |                                                      |
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

Some more route dedicated to monitoring and application management are available:

- `Route/Monitor/Phraseanet`
- `Route/Monitor/Scheduler`
- `Route/Monitor/Task`
- `Route/Monitor/TaskStop`
- `Route/Monitor/TaskStart`
- `Route/Monitor/Tasks`
