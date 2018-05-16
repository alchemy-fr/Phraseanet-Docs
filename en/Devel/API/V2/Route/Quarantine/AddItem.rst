Add document from quarantine to Phraseanet
==========================================

About
-----

Add document to Phraseanet

.. code-block:: bash

    /api/v2/quarantine/item/{lazaret_id}/add/

========================== =====
 Information
========================== =====
 HTTP Method                POST
 Requires Authentication    Yes
========================== =====

Parameters
----------

======================== ============== =============
 Parameters               Type           Information
======================== ============== =============
 lazaret_id               integer        The id of the item to add
======================== ============== =============

Response Fields
---------------

================== ================================
 Field               Description
================== ================================
 success            Response status
 message            The error message if there is
 result             Additional information
================== ================================

Response sample
---------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1",
            "request": "POST /api/v2/quarantine/item/16/add/",
            "response_time": "2018-05-16T05:47:08+00:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "success": true,
            "message": "",
            "result": []
        }
    }
