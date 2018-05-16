Delete an item of the quarantine
================================

About
-----

Delete an item of the quarantine given its Id.

.. code-block:: bash

    /api/v2/quarantine/item/{lazaret_id}/

========================== =====
 Information
========================== =====
 HTTP Method               DELETE
 Requires Authentication   Yes
========================== =====

Parameters
----------

======================== ============== =============
 Parameters               Type           Information
======================== ============== =============
 lazaret_id               integer        The id of the item
======================== ============== =============

Response Fields
---------------

================== ================================
 Field              Description
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
            "request": "DELETE /api/v2/quarantine/item/15/",
            "response_time": "2018-05-15T14:20:31+00:00",
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
