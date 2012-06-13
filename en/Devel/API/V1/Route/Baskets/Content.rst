Baskets Content
===============

About
-----

  Returns the content of the basket 

  .. code-block:: bash

    /api/v1/baskets/{basket_id}/content/

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
   basket_id                               the basket_id of the selected basket 
  ======================== ============== =============

Response Fields
---------------

  ================ ================================
   Field            Description
  ================ ================================
   basket_elements 	The list of the basket_elements 
  ================ ================================

Response sample
---------------

  .. code-block:: javascript

    {
        "meta": {
            "api_version": "1.2",
            "request": "GET /api/v1/baskets/321/content/",
            "response_time": "2011-07-27T14:43:49+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "basket_elements": {
                "321": {
                    "created_on": "2011-06-22T14:15:00+02:00",
                    "description": "une belle desc",
                    "name": "aéaa",
                    "pusher_usr_id": 0,
                    "ssel_id": 321,
                    "updated_on": "2011-07-27T13:34:23+02:00",
                    "unread": false,
                    "basket_elements": {
                        "269": {
                            "basket_element_id": 269,
                            "order": 2,
                            "record": {
                                "databox_id": 9,
                                "record_id": 84,
                                "mime_type": "image/jpeg",
                                "title": "cestlafete.jpg",
                                "original_name": "cestlafete.jpg",
                                "last_modification": "2011-07-11T13:04:53+02:00",
                                "created_on": "2011-07-05T20:05:58+02:00",
                                "collection_id": 1,
                                "sha256": "41c7a2fc8351114db9a3e012e7d477281f0c05efceda45d068cb359fd3ae65d0",
                                "thumbnail": {
                                    "permalink": {
                                        "created_on": "2011-11-07T12:33:19+01:00",
                                        "id": 819,
                                        "is_activated": true,
                                        "label": "cestlafetejpg",
                                        "last_modified": "2011-11-07T12:33:19+01:00",
                                        "page_url": "https://library.net/permalink/v1/cestlafetejpg/1/1248/zkL3YeYO/thumbnail/view/",
                                        "url": "https://library.net/permalink/v1/cestlafetejpg/1/1248/zkL3YeYO/thumbnail/"
                                    },
                                    "height": 200,
                                    "width": 150,
                                    "filesize": 7908,
                                    "player_type": "IMAGE",
                                    "mime_type": "image/jpeg"
                                },
                                "technical_informations": {
                                    "bits": 8,
                                    "channels": "3"
                                },
                                "phrasea_type": "image",
                                "uuid": "dcee40ea-ee26-4d8b-b0c2-d61305b03bc0"
                            },
                            "validation_item": false
                        },
                        "270": {
                            "basket_element_id": 270,
                            "order": 3,
                            "record": {
                                "databox_id": 52,
                                "record_id": 1447,
                                "mime_type": "image/jpeg",
                                "title": "cestlafete.jpg",
                                "original_name": "cestlafete.jpg",
                                "last_modification": "2011-07-11T13:29:44+02:00",
                                "created_on": "2011-07-05T15:24:22+02:00",
                                "collection_id": 1,
                                "sha256": "41c7a2fc8351114db9a3e012e7d477281f0c05efceda45d068cb359fd3ae65d0",
                                "thumbnail": {
                                    "permalink": {
                                        "created_on": "2011-11-07T12:33:19+01:00",
                                        "id": 819,
                                        "is_activated": true,
                                        "label": "cestlafetejpg",
                                        "last_modified": "2011-11-07T12:33:19+01:00",
                                        "page_url": "https://library.net/permalink/v1/cestlafetejpg/1/1248/zkL3YeYO/thumbnail/view/",
                                        "url": "https://library.net/permalink/v1/cestlafetejpg/1/1248/zkL3YeYO/thumbnail/"
                                    },
                                    "height": 200,
                                    "width": 150,
                                    "filesize": 7908,
                                    "player_type": "IMAGE",
                                    "mime_type": "image/jpeg"
                                },
                                "technical_informations": {
                                    "bits": 8,
                                    "channels": "3"
                                },
                                "phrasea_type": "image",
                                "uuid": "dcee40ea-ee26-4d8b-b0c2-d61305b03bc0"
                            },
                            "validation_item": false
                        }
                    }
                }
            }
        }
    }