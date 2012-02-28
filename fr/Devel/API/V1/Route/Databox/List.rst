Databox List
============

About
-----

  Return available Databoxes

  .. code-block:: bash

    /api/v1/databoxes/list/

  ======================== =====
   Informations
  ======================== =====
   HTTP Method              GET
   Requires Authentication  Yes
  ======================== =====

Parameters
----------

  No parameters for this route

Response Fields
---------------

  ========== ================================
  Field       Description
  ========== ================================
  databoxes   The list of available databoxes
  ========== ================================

Response sample
---------------

  .. code-block:: javascript

    {
        "meta": {
            "api_version": "1.0",
            "request": "GET /api/v1/databoxes/list/",
            "response_time": "2011-07-27T10:17:26+02:00",
            "http_code": 200,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "databoxes": {
                "58": {
                    "databox_id": 58,
                    "name": "Quarantine Box",
                    "version": "3.2.0.0a8"
                },
                "57": {
                    "databox_id": 57,
                    "name": "Thesaurus Datas",
                    "version": "3.2.0.0a8"
                },
                "1": {
                    "databox_id": 1,
                    "name": "Eléphant",
                    "version": "3.2.0.0a8"
                }
            }
        }
    }