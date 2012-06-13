Baskets Add
===========

About
-----

  Adds a new basket 

  .. code-block:: bash

    /api/v1/baskets/add/

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
   name                                    the name of the basket
  ======================== ============== =============

Response Fields
---------------

  ============= ================================
   Field         Description
  ============= ================================
   basket        The created basket 
  ============= ================================

Response sample
---------------

  .. code-block:: javascript

    {
        "meta": {
            "api_version": "1.2",
            "request": "POST /api/v1/baskets/add/",
            "response_time": "2011-07-27T14:39:20+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "basket": {
                "721": {
                    "created_on": "2011-07-27T14:39:20+02:00",
                    "description": "",
                    "name": "panier",
                    "pusher_usr_id": null,
                    "ssel_id": 721,
                    "updated_on": "2011-07-27T14:39:20+02:00",
                    "unread": false
                }
            }
        }
    }