Add record
==========

About
-----

Add a record to Phraseanet. If the file does not fit all install constraints,
it goes to the quarantine. This behavior can be bypassed with the optional
*forceBehavior* parameter

.. code-block:: bash

    /api/v1/records/add/

======================== ======
 Informations
======================== ======
 HTTP Method              POST
 Requires Authentication  Yes
======================== ======

Parameters
----------

=============== =========== =============
 Parameters      Type        Information
=============== =========== =============
 file            file        Mandatory - The file related to the record to add
 base_id         integer     Mandatory - The base_id related to the destination collection
 status          string      32 bits format binary string (optional)
                             ex. : "0b10110000": rise status-bits 7, 5 and 4 ;
                             note. : Status-bits 3 to 0 are reserved for Phraseanet and
                             must be set to 0
 forceBehavior   integer     0: force record ; 1: force quarantine (optional)
=============== =========== =============

Response Fields
---------------

In case a record is created, the following

================== ================================
 Field              Description
================== ================================
 entity             A code corresponding to the created entity (record => 0 ; quarantine => 1)
 url                The url of the created item
================== ================================

Response sample
---------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "POST /api/v1/records/add/",
            "response_time": "2012-06-13T15:59:58+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "entity": 1,
            "url": '/quarantine/item/136/',
        }
    }
