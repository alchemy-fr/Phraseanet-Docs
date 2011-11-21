Baskets SetName
===============

About
-----

  Return 

  .. code-block:: bash

    /api/v1/baskets/{basket_id}/setname/

  ======================== =====
   Informations
  ======================== =====
   HTTP Method              POST
   Requires Authentication  Yes
  ======================== =====

Parameters
----------

  ======================== ============== =============
   Parameters               Value          Information 
  ======================== ============== =============
   basket_id                               the basket_id of the selected basket
   name                                    the name of the basket
  ======================== ============== =============

Response Fields
---------------

  ============= ================================
   Field         Description
  ============= ================================
   basket        The basket 
  ============= ================================

Response sample
---------------

  .. code-block:: javascript

    {
        "meta": {
            "api_version": "1.0",
            "request": "POST /api/v1/baskets/721/setname/",
            "response_time": "2011-07-27T14:39:20+02:00",
            "http_code": 200,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "basket": {
                "721": {
                    "created_on": "2011-07-27T14:39:20+02:00",
                    "description": "",
                    "name": "Nouveau nom du panier",
                    "pusher_usr_id": null,
                    "ssel_id": 721,
                    "updated_on": "2011-07-27T14:39:20+02:00",
                    "unread": false
                }
            }
        }
    }