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
   basket_id                 integer       The basket_id of the selected basket
   name                      string        The name of the basket
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
            "api_version": "1.2",
            "request": "POST /api/v1/baskets/148/setname/",
            "response_time": "2012-06-29T18:29:15+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "basket": {
                "basket_id": 148,
                "created_on": "2012-06-29T18:19:30+02:00",
                "description": "yo",
                "name": "my name here",
                "pusher_usr_id": null,
                "updated_on": "2012-06-29T18:29:15+02:00",
                "unread": false,
                "validation_basket": false
            }
        }
    }