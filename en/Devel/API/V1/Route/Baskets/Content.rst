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
 Parameters               Type           Information
======================== ============== =============
 basket_id                integer        The basket_id of the selected basket
======================== ============== =============

Response Fields
---------------

======================== =================================
 Field                    Description
======================== =================================
 basket_elements
 basket                   The selected basket
======================== =================================

Response sample
---------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/baskets/146/content/",
            "response_time": "2012-06-29T15:57:13+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "basket": {
                "validation_users": [
                    {
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
                    {
                        "usr_id": 722,
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
                        "usr_name": "admin@example.com",
                        "confirmed": false,
                        "can_agree": true,
                        "can_see_others": true,
                        "readonly": true
                    }
                ],
                "validation_end_date": "2012-07-18T14:54:02+02:00",
                "validation_infos": "Vous avez envoyé cette demande à 1 utilisateur",
                "validation_confirmed": false,
                "validation_initiator": true,
                "validation_initiator_user": {
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
                "basket_id": 146,
                "created_on": "2012-06-28T14:54:01+02:00",
                "owner": {
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
                "description": "",
                "name": "Panier de validation",
                "pusher_usr_id": null,
                "pusher": null,
                "ssel_id": 146,
                "updated_on": "2012-06-28T16:07:25+02:00",
                "unread": false,
                "validation_basket": true
            },
            "basket_elements": [
                {
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
                }
            ]
        }
    }
