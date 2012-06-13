Records Status
==============

About
-----

  Return 

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
   Parameters       Value     Information 
  ================ ========= =============================
   databox_id       94 	      The databox id of the record
   record_id        5694      The record_id 
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
            "api_version": "1.2",
            "request": "GET /api/v1/records/52/5780/status/",
            "response_time": "2011-07-27T12:58:42+02:00",
            "http_code": 200,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "status": {
                "4": {
                    "bit": 4,
                    "state": false
                }
            }
        }
    }