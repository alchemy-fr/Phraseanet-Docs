Databox Status
===================

About
-----

  Return available Status on specified databox

  .. code-block:: bash

    /api/v1/databoxes/{databox_id}/status/

  ======================== =====
   Informations
  ======================== =====
   HTTP Method              GET
   Requires Authentication  Yes
  ======================== =====

Parameters
----------

  ======================== ============== =============
   Parameters               Value          Information
  ======================== ============== =============
   databox_id               94             The databox id on which the request is done
  ======================== ============== =============

Response Fields
---------------

  ========== ================================
  Field       Description
  ========== ================================
   status     The list of available status
  ========== ================================

Response sample
---------------

  .. code-block:: javascript

    {
        "meta": {
            "api_version": "1.2",
            "request": "GET /api/v1/databoxes/52/status/",
            "response_time": "2011-07-27T11:12:47+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "status" : {
                "4": {
                    "bit": 4,
                    "label_on": "online",
                    "label_off": "offline",
                    "img_on": false,
                    "img_off": false,
                    "searchable": 1,
                    "printable": 0
                }
            }
        }
    }