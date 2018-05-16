Delete documents
================

About
-----

Delete quarantine's documents

.. code-block:: bash

    /api/v2/quarantine/

========================== =====
 Information
========================== =====
 HTTP Method                DELETE
 Requires Authentication    Yes
========================== =====

Parameters
----------

======================== ============== =============
 Parameters               Type           Information
======================== ============== =============
 max                      integer        Optional - the number of document to delete -[défaut] -1: delete all quarantine's document
======================== ============== =============

Response Fields
---------------

================== ================================
 Field              Description
================== ================================
 success            Response status
 message            The error message if there is
 result             Additional information
 - tobedone         The number of document in quarantine
 - done             The number of document deleted
 - todo             The number of document remaining in quarantine
 - max              The number of document to delete
================== ================================

Response sample
---------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1",
            "request": "DELETE /api/v2/quarantine/",
            "response_time": "2018-05-15T07:31:11+00:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "success": true,
            "message": "",
            "result": {
                "tobedone": 2,
                "done": 1,
                "todo": 1,
                "max": 1
            }
        }
    }
