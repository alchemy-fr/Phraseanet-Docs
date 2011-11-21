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
            "api_version": "1.0",
            "request": "GET /api/v1/records/52/4102/related/",
            "response_time": "2011-07-27T13:34:28+02:00",
            "http_code": 200,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "baskets": {
                "321": {
                    "created_on": "2011-06-22T14:15:00+02:00",
                    "description": "une belle desc",
                    "name": "aéaa",
                    "pusher_usr_id": 0,
                    "ssel_id": 321,
                    "updated_on": "2011-07-27T13:34:23+02:00",
                    "unread": false
                },
                "492": {
                    "created_on": "2011-07-08T17:23:26+02:00",
                    "description": "",
                    "name": "BIG BASKET",
                    "pusher_usr_id": 0,
                    "ssel_id": 492,
                    "updated_on": "2011-07-27T13:34:03+02:00",
                    "unread": false
                }
            }
        }
    }