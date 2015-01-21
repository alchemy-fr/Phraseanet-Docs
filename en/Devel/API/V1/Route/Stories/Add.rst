Add story
=========

About
-----

Add a story to Phraseanet.

.. code-block:: bash

    /api/v1/stories/add/

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
 base_id         integer     Mandatory - The base_id related to the destination collection
 title           string      Mandatory - The title of the story
 records         array       Optional  - A list of record identifiers to add to the story
=============== =========== =============

Response Fields
---------------

In case a record is created, the following

================== ================================
 Field              Description
================== ================================
 url                The url of the created item
================== ================================

Response sample
---------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.4.2",
            "request": "POST /api/v1/records/add/",
            "response_time": "2015-01-21T15:59:58+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "url": '/stories/1/136/',
        }
    }
