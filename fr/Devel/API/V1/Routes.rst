Routes
======

Phraseanet API provides routes to access resources using canonical URL. 
These resources are listed below.

For the moment, all these routes require authentication. 
Phraseanet API uses POST and GET methods.

For each resource, some aspects and actions are avalaible. 
For example, you can get the permalinks of a record with the following route: 


+----------+--------------------------------------+------------------------------------------------+------------------------------------------------------+
|          | General                              | Aspect                                         | Act                                                  |
+==========+======================================+================================================+======================================================+
| databox  |* :ref:`list <route-databox-list>`    |* :ref:`collections <route-databox-collections>`|                                                      |
|          |                                      |* :ref:`status <route-databox-status>`          |                                                      |
|          |                                      |* :ref:`metadatas <route-databox-metadatas>`    |                                                      |
|          |                                      |* :ref:`termsOfUse <route-databox-termsofuse>`  |                                                      |
+----------+--------------------------------------+------------------------------------------------+------------------------------------------------------+
| records  |* :ref:`search <route-records-search>`|* :ref:`metadatas <route-records-metadatas>`    |* :ref:`setstatus <route-records-setstatus>`          |
|          |                                      |* :ref:`status <route-records-status>`          |* :ref:`setcollection <route-records-setcollection>`  |
|          |                                      |* :ref:`embed <route-records-embed>`            |* :ref:`setmetadatas <route-records-setmetadatas>`    |
|          |                                      |* :ref:`related <route-records-related>`        |                                                      |
|          |                                      |* :ref:`record <route-records-record>`          |                                                      |
+----------+--------------------------------------+------------------------------------------------+------------------------------------------------------+
| baskets  |* :ref:`list <route-baskets-list>`    |* :ref:`content <route-baskets-content>`        |* :ref:`setname <route-baskets-setname>`              |
|          |* :ref:`add <route-baskets-add>`      |                                                |* :ref:`setdescription <route-baskets-setdescription>`|
|          |                                      |                                                |* :ref:`delete <route-baskets-delete>`                |
+----------+--------------------------------------+------------------------------------------------+------------------------------------------------------+
| feeds    |* :ref:`list <route-feeds-list>`      |* :ref:`content <route-feeds-content>`          |                                                      |
+----------+--------------------------------------+------------------------------------------------+------------------------------------------------------+

Databox 
--------------


.. _route-databox-list:

List
~~~~

.. _route-databox-collections:

Collections
~~~~~~~~~~~

.. _route-databox-status:

Status
~~~~~~

.. _route-databox-metadatas:

Metadatas
~~~~~~~~~

.. _route-databox-termsofuse:

Terms Of Use
~~~~~~~~~~~~


Records
-------

.. _route-records-search:

Search
~~~~~~

.. _route-records-metadatas:

Metadatas
~~~~~~~~~

.. _route-records-status:

Status
~~~~~~

.. _route-records-embed:

Embed
~~~~~

.. _route-records-related:

Related
~~~~~~~

.. _route-records-record:

Record
~~~~~~

.. _route-records-setstatus:

SetStatus
~~~~~~~~~

.. _route-records-setcollection:

SetCollection
~~~~~~~~~~~~~

.. _route-records-setmetadatas:

SetMetadatas
~~~~~~~~~~~~


Baskets
-------

.. _route-baskets-list:

List
~~~~

.. _route-baskets-add:

Add
~~~

.. _route-baskets-content:

Content
~~~~~~~

.. _route-baskets-setname:

SetName
~~~~~~~

.. _route-baskets-setdescription:

SetDescription
~~~~~~~~~~~~~~

.. _route-baskets-delete:

Delete
~~~~~~


Feeds
-------

.. _route-feeds-list:

List
~~~~

.. _route-feeds-content:

Content
~~~~~~~