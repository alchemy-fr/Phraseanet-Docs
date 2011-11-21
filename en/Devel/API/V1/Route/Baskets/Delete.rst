Baskets Delete
==============

About
-----

  Delete the basket

  .. code-block:: bash

    /api/v1/baskets/{basket_id}/delete/

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
  ======================== ============== =============

Response Fields
---------------

  ============= ================================
   Field         Description
  ============= ================================
   baskets       The list of the baskets of the current user 
  ============= ================================

Response sample
---------------

  .. code-block:: javascript

    {
        "meta": {
            "api_version": "1.0",
            "request": "POST /api/v1/baskets/721/delete/",
            "response_time": "2011-07-27T14:52:34+02:00",
            "http_code": 200,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "baskets": {
                "273": {
                    "created_on": "2011-05-31T16:53:02+02:00",
                    "description": "une belle desc",
                    "name": "aéaa",
                    "pusher_usr_id": 0,
                    "ssel_id": 273,
                    "updated_on": "2011-07-15T19:50:41+02:00",
                    "unread": false
                },
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
                },
                "283": {
                    "created_on": "2011-06-01T12:14:57+02:00",
                    "description": "",
                    "name": "BIG BASKET",
                    "pusher_usr_id": 0,
                    "ssel_id": 283,
                    "updated_on": "2011-06-01T12:14:57+02:00",
                    "unread": false
                },
                "490": {
                    "created_on": "2011-07-08T17:23:23+02:00",
                    "description": "",
                    "name": "PROUTO",
                    "pusher_usr_id": 0,
                    "ssel_id": 490,
                    "updated_on": "2011-07-08T17:23:23+02:00",
                    "unread": false
                },
                "493": {
                    "created_on": "2011-07-08T17:23:26+02:00",
                    "description": "une belle description",
                    "name": "PROUTO",
                    "pusher_usr_id": 0,
                    "ssel_id": 493,
                    "updated_on": "2011-07-08T17:23:26+02:00",
                    "unread": false
                },
                "491": {
                    "created_on": "2011-07-08T17:23:24+02:00",
                    "description": "une belle description",
                    "name": "PROUTO",
                    "pusher_usr_id": 0,
                    "ssel_id": 491,
                    "updated_on": "2011-07-08T17:23:24+02:00",
                    "unread": false
                },
                "489": {
                    "created_on": "2011-07-08T17:19:28+02:00",
                    "description": "une belle description",
                    "name": "PROUTO",
                    "pusher_usr_id": 0,
                    "ssel_id": 489,
                    "updated_on": "2011-07-08T17:19:28+02:00",
                    "unread": false
                },
                "486": {
                    "created_on": "2011-07-08T17:19:24+02:00",
                    "description": "une belle description",
                    "name": "PROUTO",
                    "pusher_usr_id": 0,
                    "ssel_id": 486,
                    "updated_on": "2011-07-08T17:19:24+02:00",
                    "unread": false
                },
                "282": {
                    "created_on": "2011-06-01T12:10:44+02:00",
                    "description": "une belle description",
                    "name": "PROUTO",
                    "pusher_usr_id": 0,
                    "ssel_id": 282,
                    "updated_on": "2011-06-01T12:10:44+02:00",
                    "unread": false
                },
                "342": {
                    "created_on": "2011-07-04T17:41:29+02:00",
                    "description": "",
                    "name": "PROUTO",
                    "pusher_usr_id": 0,
                    "ssel_id": 342,
                    "updated_on": "2011-07-04T17:41:29+02:00",
                    "unread": false
                },
                "487": {
                    "created_on": "2011-07-08T17:19:25+02:00",
                    "description": "une belle description",
                    "name": "PROUTO",
                    "pusher_usr_id": 0,
                    "ssel_id": 487,
                    "updated_on": "2011-07-08T17:19:25+02:00",
                    "unread": false
                },
                "320": {
                    "created_on": "2011-06-22T14:12:28+02:00",
                    "description": "",
                    "name": "un Joli Nom",
                    "pusher_usr_id": 0,
                    "ssel_id": 320,
                    "updated_on": "2011-06-22T14:12:28+02:00",
                    "unread": false
                },
                "629": {
                    "created_on": "2011-07-20T13:53:05+02:00",
                    "description": "une belle desc",
                    "name": "aéaa",
                    "pusher_usr_id": null,
                    "ssel_id": 629,
                    "updated_on": "2011-07-26T19:47:44+02:00",
                    "unread": false
                },
                "631": {
                    "created_on": "2011-07-25T12:08:48+02:00",
                    "description": "",
                    "name": "BIG BASKET",
                    "pusher_usr_id": null,
                    "ssel_id": 631,
                    "updated_on": "2011-07-25T12:08:48+02:00",
                    "unread": false
                },
                "720": {
                    "created_on": "2011-07-27T14:39:13+02:00",
                    "description": "",
                    "name": "panier",
                    "pusher_usr_id": null,
                    "ssel_id": 720,
                    "updated_on": "2011-07-27T14:39:13+02:00",
                    "unread": false
                },
                "683": {
                    "created_on": "2011-07-25T15:06:19+02:00",
                    "description": "",
                    "name": "PROUTO",
                    "pusher_usr_id": null,
                    "ssel_id": 683,
                    "updated_on": "2011-07-25T15:06:19+02:00",
                    "unread": false
                },
                "678": {
                    "created_on": "2011-07-25T15:03:37+02:00",
                    "description": "",
                    "name": "PROUTO",
                    "pusher_usr_id": null,
                    "ssel_id": 678,
                    "updated_on": "2011-07-25T15:03:37+02:00",
                    "unread": false
                },
                "670": {
                    "created_on": "2011-07-25T14:54:48+02:00",
                    "description": "une belle description",
                    "name": "PROUTO",
                    "pusher_usr_id": null,
                    "ssel_id": 670,
                    "updated_on": "2011-07-25T14:54:48+02:00",
                    "unread": false
                },
                "630": {
                    "created_on": "2011-07-25T12:08:43+02:00",
                    "description": "une belle description",
                    "name": "PROUTO",
                    "pusher_usr_id": null,
                    "ssel_id": 630,
                    "updated_on": "2011-07-25T12:08:43+02:00",
                    "unread": false
                },
                "636": {
                    "created_on": "2011-07-25T12:52:08+02:00",
                    "description": "",
                    "name": "PROUTO",
                    "pusher_usr_id": null,
                    "ssel_id": 636,
                    "updated_on": "2011-07-25T12:52:08+02:00",
                    "unread": false
                },
                "633": {
                    "created_on": "2011-07-25T12:09:17+02:00",
                    "description": "",
                    "name": "PROUTO",
                    "pusher_usr_id": null,
                    "ssel_id": 633,
                    "updated_on": "2011-07-25T12:09:17+02:00",
                    "unread": false
                },
                "668": {
                    "created_on": "2011-07-25T14:53:08+02:00",
                    "description": "une belle description",
                    "name": "PROUTO",
                    "pusher_usr_id": null,
                    "ssel_id": 668,
                    "updated_on": "2011-07-25T14:53:08+02:00",
                    "unread": false
                },
                "718": {
                    "created_on": "2011-07-26T19:52:50+02:00",
                    "description": "",
                    "name": "test suppression panier",
                    "pusher_usr_id": null,
                    "ssel_id": 718,
                    "updated_on": "2011-07-26T19:52:50+02:00",
                    "unread": false
                },
                "719": {
                    "created_on": "2011-07-26T19:53:20+02:00",
                    "description": "",
                    "name": "test suppression panier",
                    "pusher_usr_id": null,
                    "ssel_id": 719,
                    "updated_on": "2011-07-26T19:53:20+02:00",
                    "unread": false
                },
                "717": {
                    "created_on": "2011-07-26T19:52:18+02:00",
                    "description": "",
                    "name": "test suppression panier",
                    "pusher_usr_id": null,
                    "ssel_id": 717,
                    "updated_on": "2011-07-26T19:52:18+02:00",
                    "unread": false
                },
                "681": {
                    "created_on": "2011-07-25T15:05:21+02:00",
                    "description": "une belle description",
                    "name": "test suppression panier",
                    "pusher_usr_id": null,
                    "ssel_id": 681,
                    "updated_on": "2011-07-25T15:05:21+02:00",
                    "unread": false
                },
                "712": {
                    "created_on": "2011-07-26T19:46:37+02:00",
                    "description": "",
                    "name": "test suppression panier",
                    "pusher_usr_id": null,
                    "ssel_id": 712,
                    "updated_on": "2011-07-26T19:46:37+02:00",
                    "unread": false
                },
                "715": {
                    "created_on": "2011-07-26T19:50:03+02:00",
                    "description": "",
                    "name": "test suppression panier",
                    "pusher_usr_id": null,
                    "ssel_id": 715,
                    "updated_on": "2011-07-26T19:50:03+02:00",
                    "unread": false
                },
                "716": {
                    "created_on": "2011-07-26T19:52:00+02:00",
                    "description": "",
                    "name": "test suppression panier",
                    "pusher_usr_id": null,
                    "ssel_id": 716,
                    "updated_on": "2011-07-26T19:52:00+02:00",
                    "unread": false
                }
            }
        }
    }