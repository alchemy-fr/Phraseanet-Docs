Stories DelRecords
==================

About
-----

Remove records from a story

.. code-block:: bash

    /api/v1/stories/{databox_id}/{story_id}/delrecords

======================== ==================
 Informations
======================== ==================
 HTTP Method              DELETE
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

More parameters (records to delete from the story) are json encoded and must be passed in the body of the request.

============== ============== ========================================================
 Parameters     Type           Information
============== ============== ========================================================
 databox_id     integer        The databox_id of the record to remove from story
 record_id      integer        The record_id of the record to remove from story
============== ============== ========================================================

.. code-block:: javascript

    {
        "story_records": [
            {
                "databox_id": 3,
                "record_id": 209
            },
            {
                "databox_id": 3,
                "record_id": 210
            }
        ]
    }

.. note:: Even if a story can only contains elements from the same databox as itself, the parameters "databox_id"
    in the json **must** all be specified, equals to the parameter "databox_id" of the url.


Response sample
---------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.4.1",
            "request": "DELETE /api/v1/stories/3/281/delrecords",
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