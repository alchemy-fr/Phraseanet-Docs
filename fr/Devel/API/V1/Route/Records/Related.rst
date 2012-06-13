Records Related
===============

About
-----

  Return 

  .. code-block:: bash

    /api/v1/records/{databox_id}/{record_id}/related/

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
   databox_id               94             The databox id of the record
   record_id                5694           The record_id 
  ======================== ============== =============

Response Fields
---------------

  ========== ================================
   Field      Description
  ========== ================================
   baskets 	  The list of the baskets containing the record 
  ========== ================================

Response sample
---------------

  .. code-block:: javascript

    {
        "meta": {
            "api_version": "1.2",
            "request": "GET /api/v1/records/2/132/related/",
            "response_time": "2012-06-13T14:11:24+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "baskets": {
                "5": {
                    "created_on": "2012-06-13T14:07:20+02:00",
                    "description": "",
                    "name": "Book basket #1",
                    "pusher_usr_id": null,
                    "ssel_id": 5,
                    "updated_on": "2012-06-13T14:07:20+02:00",
                    "unread": false
                },
                "6": {
                    "created_on": "2012-06-13T14:07:58+02:00",
                    "description": "",
                    "name": "Books basket #2",
                    "pusher_usr_id": null,
                    "ssel_id": 6,
                    "updated_on": "2012-06-13T14:07:58+02:00",
                    "unread": false
                }
            }
        }
    }