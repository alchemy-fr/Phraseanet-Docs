Lister les paniers d'un document
================================

A propos
--------

Retourne la liste des objets (paniers et reportages) qui contiennent un
document spécifique

.. code-block:: bash

    /api/v1/records/{databox_id}/{record_id}/related/

========================== =====
 Informations
========================== =====
 Méthode HTTP               GET
 Authentification requise   Oui
========================== =====

Paramètres
----------

======================== ============== =============
 Paramètres               Type           Information
======================== ============== =============
 databox_id               entier         L'identifiant de la databox auquel appartient le document
 record_id                entier         L'identifiant du document sélectionné
======================== ============== =============

Attribut de la réponse
----------------------

========== ================================
 Attribut   Description
========== ================================
 baskets    La liste des objets (paniers et reportages) qui contiennent le document
========== ================================

Exemple de réponse
------------------

.. code-block:: javascript

    {
         "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/records/1/644/related/",
            "response_time": "2012-06-29T16:33:55+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "baskets": [
            {
                "basket_id": 144,
                "created_on": "2012-06-18T16:29:37+02:00",
                "description": "",
                "name": "hello",
                "pusher_usr_id": 3,
                "ssel_id": 144,
                "updated_on": "2012-06-18T16:29:37+02:00",
                "unread": false,
                "validation_basket": false
            },
            {
                "basket_id": 145,
                "created_on": "2012-06-18T18:15:39+02:00",
                "description": "",
                "name": "hello3",
                "pusher_usr_id": 3,
                "ssel_id": 145,
                "updated_on": "2012-06-21T15:51:48+02:00",
                "unread": false,
                "validation_basket": false
            },
            {
                "validation_users": [
                {
                    "usr_id": 3,
                    "usr_name": "user@example.com",
                    "confirmed": false,
                    "can_agree": true,
                    "can_see_others": true,
                    "readonly": false
                },
                {
                    "usr_id": 722,
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
                "basket_id": 146,
                "created_on": "2012-06-28T14:54:01+02:00",
                "description": "",
                "name": "Panier de validation",
                "pusher_usr_id": 3,
                "ssel_id": 146,
                "updated_on": "2012-06-28T16:07:25+02:00",
                "unread": false,
                "validation_basket": true
            }
            ],
            "stories": [
                {
                    "databox_id": 1,
                    "story_id": 99,
                    "updated_on": "2012-12-19T18:13:46+01:00",
                    "created_on": "2012-12-19T17:07:25+01:00",
                    "collection_id": 2,
                    "thumbnail": {
                        "name": "thumbnail",
                        "permalink": {
                            "created_on": "2012-12-19T18:22:31+01:00",
                            "id": 248,
                            "is_activated": true,
                            "label": "SUPER",
                            "updated_on": "2012-12-19T18:22:31+01:00",
                            "page_url": "http://domain.tld/permalink/v1/1/99/thumbnail/?token=YQlcZVsV",
                            "url": "http://domain.tld/permalink/v1/1/99/thumbnail/SUPER.jpg?token=YQlcZVsV",
                            "download_url": "http://domain.tld/permalink/v1/1/99/thumbnail/SUPER.jpg?token=YQlcZVsV&download"
                        },
                        "height": 133,
                        "width": 200,
                        "filesize": 3566,
                        "devices": [],
                        "player_type": "IMAGE",
                        "mime_type": "image/jpeg"
                    },
                    "uuid": "8142d86b-25e7-4491-8097-18e3af424307",
                    "metadatas": {
                        "dc:contributor": "animals",
                        "dc:coverage": "zoology",
                        "dc:creator": "dolphins ; tigers",
                        "dc:date": null,
                        "dc:description": "SUPER",
                        "dc:format": null,
                        "dc:identifier": null,
                        "dc:language": null,
                        "dc:publisher": null,
                        "dc:relation": null,
                        "dc:rights": null,
                        "dc:source": null,
                        "dc:subject": null,
                        "dc:title": null,
                        "dc:type": null
                    },
                    "records": [
                        {
                            "databox_id": 1,
                            "record_id": 124,
                            "mime_type": "image/jpeg",
                            "title": "upload.jpg",
                            "original_name": "upload.jpg",
                            "updated_on": "2012-12-19T17:44:38+01:00",
                            "created_on": "2012-12-19T17:44:38+01:00",
                            "collection_id": 2,
                            "sha256": "a7f3ec01c4c5efcadc639d494d432006f13b28b9a576afaee4d3b7508c4be074",
                            "thumbnail": null,
                            "technical_informations": [
                                {
                                    "name": "Aperture",
                                    "value": 2.8
                                },
                                {
                                    "name": "CameraModel",
                                    "value": "iPhone 3GS"
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
                                    "value": 81742
                                },
                                {
                                    "name": "FlashFired",
                                    "value": 0
                                },
                                {
                                    "name": "FocalLength",
                                    "value": 3.85
                                },
                                {
                                    "name": "Height",
                                    "value": 800
                                },
                                {
                                    "name": "ISO",
                                    "value": 1016
                                },
                                {
                                    "name": "Latitude",
                                    "value": 48.874166666667
                                },
                                {
                                    "name": "LightValue",
                                    "value": 2.9479532522304
                                },
                                {
                                    "name": "Longitude",
                                    "value": 2.3333333333333
                                },
                                {
                                    "name": "MimeType",
                                    "value": "image/jpeg"
                                },
                                {
                                    "name": "ShutterSpeed",
                                    "value": 0.1
                                },
                                {
                                    "name": "Width",
                                    "value": 600
                                }
                            ],
                            "phrasea_type": "image",
                            "uuid": "4d006e01-bc38-4aac-9a5b-2c90ffe3a8a2"
                        },
                        {
                            "databox_id": 1,
                            "record_id": 57,
                            "mime_type": "image/x-tika-canon",
                            "title": "test001.CR2",
                            "original_name": "test001.CR2",
                            "updated_on": "2012-12-19T16:43:23+01:00",
                            "created_on": "2012-12-19T16:43:23+01:00",
                            "collection_id": 2,
                            "sha256": "450cf64049dcbab04f38a496464d30a0dcef60db25cf1af4ca7161b9ab753311",
                            "thumbnail": {
                                "name": "thumbnail",
                                "permalink": {
                                    "created_on": "2012-12-19T16:43:27+01:00",
                                    "id": 144,
                                    "is_activated": true,
                                    "label": "test001CR2",
                                    "updated_on": "2012-12-19T16:43:27+01:00",
                                    "page_url": "http://domain.tld/permalink/v1/1/57/thumbnail/?token=PZDiY5iQ",
                                    "url": "http://domain.tld/permalink/v1/1/57/thumbnail/test001.CR2?token=PZDiY5iQ",
                                    "download_url": "http://domain.tld/permalink/v1/1/57/thumbnail/test001.CR2?token=PZDiY5iQ&download"
                                },
                                "height": 133,
                                "width": 200,
                                "filesize": 3573,
                                "devices": [
                                    "screen"
                                ],
                                "player_type": "IMAGE",
                                "mime_type": "image/jpeg"
                            },
                            "technical_informations": [
                                {
                                    "name": "Aperture",
                                    "value": 22
                                },
                                {
                                    "name": "CameraModel",
                                    "value": "Canon EOS-1Ds Mark III"
                                },
                                {
                                    "name": "ColorDepth",
                                    "value": 8
                                },
                                {
                                    "name": "FileSize",
                                    "value": 12719738
                                },
                                {
                                    "name": "FlashFired",
                                    "value": 0
                                },
                                {
                                    "name": "FocalLength",
                                    "value": 67
                                },
                                {
                                    "name": "Height",
                                    "value": 1856
                                },
                                {
                                    "name": "HyperfocalDistance",
                                    "value": 6.7852227790319
                                },
                                {
                                    "name": "ISO",
                                    "value": 100
                                },
                                {
                                    "name": "LightValue",
                                    "value": 15.884647521937
                                },
                                {
                                    "name": "MimeType",
                                    "value": "image/x-tika-canon"
                                },
                                {
                                    "name": "ShutterSpeed",
                                    "value": 0.008
                                },
                                {
                                    "name": "Width",
                                    "value": 2784
                                }
                            ],
                            "phrasea_type": "image",
                            "uuid": "7b8ef0e3-dc8f-4b66-9e2f-bd049d175124"
                        },
                        {
                            "databox_id": 1,
                            "record_id": 40,
                            "mime_type": "image/jpeg",
                            "title": "iphone_pic.jpg",
                            "original_name": "iphone_pic.jpg",
                            "updated_on": "2012-12-18T12:38:49+01:00",
                            "created_on": "2012-12-18T12:38:49+01:00",
                            "collection_id": 2,
                            "sha256": "a7f3ec01c4c5efcadc639d494d432006f13b28b9a576afaee4d3b7508c4be074",
                            "thumbnail": {
                                "name": "thumbnail",
                                "permalink": {
                                    "created_on": "2012-12-18T12:38:51+01:00",
                                    "id": 77,
                                    "is_activated": true,
                                    "label": "iphone_picjpg",
                                    "updated_on": "2012-12-18T12:38:51+01:00",
                                    "page_url": "http://domain.tld/permalink/v1/1/40/thumbnail/?token=KDWnu5xc",
                                    "url": "http://domain.tld/permalink/v1/1/40/thumbnail/iphone_pic.jpg?token=KDWnu5xc",
                                    "download_url": "http://domain.tld/permalink/v1/1/40/thumbnail/iphone_pic.jpg?token=KDWnu5xc&download"
                                },
                                "height": 200,
                                "width": 150,
                                "filesize": 0,
                                "devices": [
                                    "screen"
                                ],
                                "player_type": "IMAGE",
                                "mime_type": "image/jpeg"
                            },
                            "technical_informations": [
                                {
                                    "name": "Aperture",
                                    "value": 2.8
                                },
                                {
                                    "name": "CameraModel",
                                    "value": "iPhone 3GS"
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
                                    "value": 81728
                                },
                                {
                                    "name": "FlashFired",
                                    "value": 0
                                },
                                {
                                    "name": "FocalLength",
                                    "value": 3.85
                                },
                                {
                                    "name": "Height",
                                    "value": 800
                                },
                                {
                                    "name": "ISO",
                                    "value": 1016
                                },
                                {
                                    "name": "Latitude",
                                    "value": 48.874166666667
                                },
                                {
                                    "name": "LightValue",
                                    "value": 2.9479532522304
                                },
                                {
                                    "name": "Longitude",
                                    "value": 2.3333333333333
                                },
                                {
                                    "name": "MimeType",
                                    "value": "image/jpeg"
                                },
                                {
                                    "name": "ShutterSpeed",
                                    "value": 0.1
                                },
                                {
                                    "name": "Width",
                                    "value": 600
                                }
                            ],
                            "phrasea_type": "image",
                            "uuid": "4d006e01-bc38-4aac-9a5b-2c90ffe3a8a2"
                        }
                    ]
                }
            ]
        }
    }
