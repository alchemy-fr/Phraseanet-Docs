Stories Add
===========

About
-----

Adds a new stories.

.. code-block:: bash

    /api/v1/stories

======================== ==================
 Information
======================== ==================
 HTTP Method              POST
 Requires Authentication  Yes
 Content-Type             application/json
======================== ==================

Parameters
----------

Parameters are json encoded and must be passed in the body of the request.

Many stories can be created in one request, so the "stories" parameter is an array of stories :

============= ============== =======================================================================================
 Parameters    Type           Information
============= ============== =======================================================================================
 title         string         The title of the story
 base_id       integer        The base_id, as returned by route :doc:`Databox Collections <../Databox/Collections>`
============= ============== =======================================================================================

.. code-block:: javascript

    {
        "stories": [
            {
                "title": "Story 1",
                "base_id": 494,
            },
            {
                "title": "Story 2",
                "base_id": 495
            }
        ]
    }


Optional Parameter : Metadatas
------------------------------

Metadata can be set to the created story, fields can be specified by name or id (as returned by the route
:doc:`Databox Metadatas <../Databox/Metadatas>`) :


============== ============== ============================================================
 Parameters     Type           Information
============== ============== ============================================================
 metadatas      object        | fields to set
                              | - key : field name or field id
                              | - value : field value, can be an array for multivalued field
============== ============== ============================================================

.. code-block:: javascript

    ...
    {
        "title": "Story 1",
        "base_id": 494,
        "metadatas": {
            "City": "Paris",
            "Country": "France",
            "7": "John",
            "Keywords": [
                "Eiffel tower",
                "Champs Elysées",
                "Arc de Triomphe"
            ]
        }
    },
    ...


Optional Parameter : Story records / Story cover
------------------------------------------------

Each story to be created can be filled with existing records :

============== ============== ========================================================
 Parameters     Type           Information
============== ============== ========================================================
 databox_id     integer        The databox_id of the record to insert into story
 record_id      integer        The record_id of the record to insert into story
 use_as_cover   boolean        Whether to use this record as a cover for the story
============== ============== ========================================================

.. code-block:: javascript

    ...
    {
        "title": "Story 1",
        "base_id": 494,
        "story_records": [
            {
                "databox_id": 3,
                "record_id": 209,
            },
            {
                "databox_id": 3,
                "record_id": 210,
                "use_as_cover": true
            }
        ]
    }
    ...

.. note:: Only a record of type "image" can be used as a cover for a story, but to ease selection of cover,
    the "use_as_cover" parameter can be set to many (all) records : The first record of type "image" will be elected.
    If no record can be elected as a cover source, this will silent fail and the created story will display the default
    "folder" thumbnail.

.. seealso:: :doc:`Stories AddRecords <./AddRecords>`

Response sample
---------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.4.1",
            "request": "POST /api/v1/stories",
            "response_time": "2015-04-22T13:31:46+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "stories": [
                "/stories/3/291/",
                "/stories/3/292/"
            ]
        }
    }