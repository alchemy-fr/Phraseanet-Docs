Stories AddRecords
==================

About
-----

Adds records to a given story.

.. code-block:: bash

    /api/v1/stories/{databox_id}/{story_id}/addrecords

======================== ==================
 Information
======================== ==================
 HTTP Method              POST
 Requires Authentication  Yes
 Content-Type             application/json
======================== ==================

Parameters
----------

============== ============== ========================================================
 Parameters     Type           Information
============== ============== ========================================================
 databox_id     integer        The databox_id of the story
 story_id       integer        The story_id
============== ============== ========================================================

More parameters (records to add to the story) are json encoded and must be passed in the body of the request.

============== ============== ========================================================
 Parameters     Type           Information
============== ============== ========================================================
 databox_id     integer        The databox_id of the record to insert into story
 record_id      integer        The record_id of the record to insert into story
 use_as_cover   boolean        Whether to use this record as a cover for the story
============== ============== ========================================================

.. code-block:: javascript

    {
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

.. note:: Even if a story can only contains elements from the same databox as itself, the parameters "databox_id"
    in the json **must** all be specified, equals to the parameter "databox_id" of the url.

.. note:: Only a record of type "image" can be used as a cover for a story, but to ease selection of cover,
    the "use_as_cover" parameter can be set to many (all) records : The first record of type "image" will be elected.
    If no record can be elected as a cover source, this will silent fail and the created story will show the default
    "folder" thumbnail.



Response sample
---------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.4.1",
            "request": "POST /api/v1/stories/3/281/addrecords",
            "response_time": "2015-04-22T13:31:46+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "records": [
                "3_209",
                "3_210"
            ]
        }
    }