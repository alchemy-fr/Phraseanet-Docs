Records SetStatus
=================

About
-----

  Set status to a record

  .. code-block:: bash

    /api/v1/records/{databox_id}/{record_id}/setstatus/

  ======================== =====
   Informations
  ======================== =====
   HTTP Method              POST
   Requires Authentication  Yes
  ======================== =====

Parameters
----------

  ================ ========= ==============================
   Parameters       Type      Information
  ================ ========= ==============================
   databox_id       integer   The databox id of the record
   record_id        integer   The record_id
   status           integer   The status to modify
  ================ ========= ==============================

** Example **

  .. code-block:: javascript

    status[4]=1&
    status[5]=0&

is equivalent to

  .. code-block:: javascript

    status = {
        4: 1,
        5: 0
    }

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
            "request": "POST /api/v1/records/52/4102/setstatus/",
            "response_time": "2011-07-27T14:08:06+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "status": {
                "4": {
                    "bit": 4,
                    "state": true
                },
                "5": {
                    "bit": 5,
                    "state": false
                },
                "6": {
                    "bit": 6,
                    "state": false
                },
                "7": {
                    "bit": 7,
                    "state": false
                }
            }
        }
    }
