Add record
==========

About
-----

Add a record to Phraseanet. If the file does not fit all install constraints,
it goes to the quarantine. This behavior can be bypassed with the optional
**forceBehavior** parameter.

.. code-block:: bash

    /api/v1/records/add/

======================== ======
 Information
======================== ======
 HTTP Method              POST
 Requires Authentication  Yes
======================== ======

Parameters
----------

=============== =========== =============
 Parameters      Type        Information
=============== =========== =============
 oauth_token     string      Mandatory - The authentication token
 file            file        Mandatory - The file related to the record to add
 base_id         integer     Mandatory - The base_id related to the destination collection
 status          string      32 bits format binary string (optional)
                             ex. : "0b10110000": rise status-bits 7, 5 and 4 ;
                             note. : Status-bits 3 to 0 are reserved for Phraseanet and
                             must be set to 0
 forceBehavior   integer     0: force record ; 1: force quarantine (optional)
 nosubdefs       entier      Optional - 1: Prevents the creation of sub-definitions files for this document. If document goes to quarantine attribute **nosubdefs** will be lost
=============== =========== =============

Since Phraseanet version 4.0.8 it is possible to add a file by its URL.

The **url** parameter then replaces the **file** parameter in this context.

=============== =========== =============
 Paramètres      Type        Information
=============== =========== =============
 url             string      Mandatory - The URL of the resource to add
=============== =========== =============

Response Fields
---------------

If the document has been successfully added to Phraseanet the return code
**entity** indicates whether the document has been added to the collection or
to the quarantine.

================== ================================
 Field              Description
================== ================================
 entity             A code corresponding to the created entity (0 => Added to collection ; 1 => placed in quarantine)
 url                The url of the created item
================== ================================

Response sample for a document added to collection
**************************************************

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.0",
            "request": "POST /api/v1/records/add/",
            "response_time": "2018-05-14T17:37:24+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "entity": "0",
            "url": "/records/68/148/"
        }
    }

Response sample for a document added to quarantine
**************************************************

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.0",
            "request": "POST /api/v1/records/add/",
            "response_time": "2018-05-14T17:47:41+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "entity": "1",
            "url": "/quarantine/item/512/"
        }
    }

