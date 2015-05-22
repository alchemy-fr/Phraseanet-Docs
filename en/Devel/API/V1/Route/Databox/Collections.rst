Databox Collections
===================

About
-----

Returns available collections on a specified databox.

.. code-block:: bash

    /api/v1/databoxes/{databox_id}/collections/

======================== =====
 Information
======================== =====
 HTTP Method              GET
 Requires Authentication  Yes
======================== =====

Parameters
----------

======================== ============== =============
 Parameters               Type           Information
======================== ============== =============
 databox_id               integer        The databox id on which the request is done
======================== ============== =============

Response Fields
---------------

============= ================================
Field          Description
============= ================================
 Collections   The list of available collections
============= ================================

Response sample
---------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/databoxes/1/collections/",
            "response_time": "2012-06-29T16:24:51+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "collections": [
            {
                "base_id": 1,
                "coll_id": 1,
                "name": "test",
                "record_amount": 245
            },
            {
                "base_id": 2,
                "coll_id": 2,
                "name": "BIBOO",
                "record_amount": 5
            },
            {
                "base_id": 4,
                "coll_id": 4,
                "name": "sample",
                "record_amount": 2
            }
            ]
        }
    }
