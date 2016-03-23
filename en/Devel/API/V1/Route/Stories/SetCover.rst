Stories SetCover
================

About
-----

Sets the cover image of a given story.

.. code-block:: bash

    /api/v1/stories/{databox_id}/{story_id}/setcover

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

More parameters (source record for the cover) are json encoded and must be passed in the body of the request.

============== ============== ========================================================
 Parameters     Type           Information
============== ============== ========================================================
 record_id      integer        The record_id of the record to use as cover
============== ============== ========================================================


.. code-block:: javascript

    {
        "record_id": 209
    }

.. note:: Only a record of type "image" can be used as a source cover for a story.
    The record must be an item of the story (so it belongs to the same databox).


Response sample
---------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.4.1",
            "request": "POST /api/v1/stories/3/289/setcover",
            "response_time": "2015-04-22T13:31:46+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": [
            "3/209/"
        ]
    }