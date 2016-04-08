Basket Remove Element
=============

About
-----

Removes an existing element from a basket

.. code-block:: bash

    /api/v2/baskets/{basketId}/records

======================== ======
 Information
======================== ======
 HTTP Method              DELETE
 Requires Authentication  Yes
======================== ======

Request Body
------------

.. code-block:: javascript

    {
        "data": [
            {
                "databox_id": 1,
                "record_id": 118
            }
        ]
    }

Response Fields
---------------

============= ================================
 Field         Description
============= ================================
 elements     The removed elements
============= ================================

Response sample
---------------

.. code-block:: javascript

    {
      "meta": {
        "api_version": "2.0.0",
        "request": "DELETE /api/v2/baskets/1/records",
        "response_time": "2016-03-23T18:11:34+01:00",
        "http_code": 200,
        "error_type": null,
        "error_message": null,
        "error_details": null,
        "charset": "UTF-8"
      },
      "response": {
        "elements": [{
            "basket_element_id": 19,
            "order": 1,
            "record": {
                "databox_id": 1,
                "record_id": 634,
                "mime_type": "image/jpeg",
                "title": "0059.JPG",
                "original_name": "0059.JPG",
                "updated-on": "2012-06-28T17:19:28+02:00",
                "created_on": "2012-06-22T21:20:58+02:00",
                "collection_id": 1,
                "sha256": "9e78d41b13bb61db1399bc0abb601a00a049f2c1d17d8dfa4ce36312d29f04ca",
                "thumbnail": {
                    "name": "thumbnail",
                    "permalink": {
                        "created_on": "2012-06-25T18:05:20+02:00",
                        "id": 2026,
                        "is_activated": true,
                        "label": "0059JPG",
                        "updated_on": "2012-06-25T18:05:20+02:00",
                        "page_url": "http://domain.tld/permalink/v1/1/634/thumbnail/?token=7skj8YDw",
                        "url": "http://domain.tld/permalink/v1/1/634/thumbnail/0059.JPG?token=7skj8YDw",
                        "download_url": "http://domain.tld/permalink/v1/1/634/thumbnail/0059.JPG?token=7skj8YDw&download"
                    },
                    "height": 100,
                    "width": 150,
                    "filesize": 2136,
                    "devices": [
                        "screen"
                    ],
                    "player_type": "IMAGE",
                    "mime_type": "image/jpeg"
                },
                "technical_informations": [
                    {
                        "name": "CameraModel",
                        "value": "NIKON D700"
                    },
                    {
                        "name": "Channels",
                        "value": 3
                    },
                    {
                        "name": "ColorDepth",
                        "value": 8
                    },
                    {
                        "name": "ColorSpace",
                        "value": "RGB"
                    },
                    {
                        "name": "FileSize",
                        "value": 1060915
                    },
                    {
                        "name": "FlashFired",
                        "value": 1
                    },
                    {
                        "name": "FocalLength",
                        "value": 0
                    },
                    {
                        "name": "Height",
                        "value": 2832
                    },
                    {
                        "name": "MimeType",
                        "value": "image/jpeg"
                    },
                    {
                        "name": "ShutterSpeed",
                        "value": 0.004
                    },
                    {
                        "name": "Width",
                        "value": 4256
                    }
                ],
                "phrasea_type": "image",
                "uuid": "0d9f2d24-d5a5-483c-a9b3-2289d75eb7a1"
            },
            "validation_item": true,
            "validation_choices": [
                {
                    "validation_user": {
                        "usr_id": 3,
                        "usr_name": "user@example.com",
                        "user": {
                            "@entity@": "http://api.phraseanet.com/api/objects/user",
                            "id": 3,
                            "email": "imprec@gmail.com",
                            "login": "admin",
                            "first_name": "Romain",
                            "last_name": "Neutron",
                            "display_name": "imprec@gmail.com",
                            "gender": "Mr",
                            "address": null,
                            "zip_code": null,
                            "city": null,
                            "country": null,
                            "phone": null,
                            "fax": null,
                            "job": null,
                            "position": null,
                            "company": null,
                            "geoname_id": null,
                            "last_connection": "2014-03-02T12:01:22+02:00",
                            "created_on": "2012-10-02T09:46:40+02:00",
                            "updated_on": "2012-10-02T09:46:40+02:00",
                            "locale": "en_GB"
                        },
                        "confirmed": false,
                        "can_agree": true,
                        "can_see_others": true,
                        "readonly": false
                    },
                    "agreement": null,
                    "updated_on": "2012-06-28T14:54:02+02:00",
                    "note": ""
                },
                {
                    "validation_user": {
                        "usr_id": 722,
                        "usr_name": "admin@example.com",
                        "user": {
                            "@entity@": "http://api.phraseanet.com/api/objects/user",
                            "id": 722,
                            "email": "admin@example.com",
                            "login": "admin",
                            "first_name": null,
                            "last_name": null,
                            "display_name": "admin@example.com",
                            "gender": "Mr",
                            "address": null,
                            "zip_code": null,
                            "city": null,
                            "country": null,
                            "phone": null,
                            "fax": null,
                            "job": null,
                            "position": null,
                            "company": null,
                            "geoname_id": null,
                            "last_connection": "2014-03-02T12:01:22+02:00",
                            "created_on": "2012-10-02T09:46:40+02:00",
                            "updated_on": "2012-10-02T09:46:40+02:00",
                            "locale": "en_GB"
                        },
                        "confirmed": false,
                        "can_agree": true,
                        "can_see_others": true,
                        "readonly": true
                    },
                    "agreement": null,
                    "updated_on": "2012-06-28T14:54:02+02:00",
                    "note": ""
                }
            ],
            "agreement": null,
            "note": ""
        }]
      }
    }
