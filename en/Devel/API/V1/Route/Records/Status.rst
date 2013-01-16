Records Status
==============

About
-----

  List all status of a record

  .. code-block:: bash

    /api/v1/records/{databox_id}/{record_id}/status/

  ======================== =====
   Informations
  ======================== =====
   HTTP Method              GET
   Requires Authentication  Yes
  ======================== =====

Parameters
----------

  ================ ========= =============================
   Parameters       Type     Information
  ================ ========= =============================
   databox_id       integer   The databox id of the record
   record_id        integer   The record_id
  ================ ========= =============================

Response Fields
---------------

  ========== ================================
   Field      Description
  ========== ================================
   status     The list of the status of the record
  ========== ================================

Response sample
---------------

  .. code-block:: javascript

   {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/records/1/638/status/",
            "response_time": "2012-06-29T16:24:03+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "status": [
            {
                "bit": 4,
                "state": false
            },
            {
                "bit": 5,
                "state": true
            },
            {
                "bit": 6,
                "state": true
            }
            ]
        }
    }
