Stories Story
=============

About
-----

  Retourne les informations d'un reportage enregistré dans Phraseanet.

  .. code-block:: bash

    /api/v1/storiess/{databox_id}/{story_id}/

  ========================== =====
   Informations
  ========================== =====
   Méthode HTTP              GET
   Authentification requise  Oui
  ========================== =====

Paramètres
----------

  ======================== ============== ==============================
   Paramètres               Type           Information
  ======================== ============== ==============================
   databox_id               entier         L'identifiant de la databox auquel appartient le document
   story_id                 entier         L'identifiant du reportage sélectionné
  ======================== ============== ==============================

Attribut de la réponse
----------------------

  ========== ================================
   Attribut   Description
  ========== ================================
   story      Le reportage sélectionné
  ========== ================================

Exemple de réponse
------------------

  .. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/stories/1/99/",
            "response_time": "2012-12-19T18:23:28+01:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "story": {
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
                        "page_url": "http://domain.tld/permalink/v1/SUPER/1/99/YQlcZVsV/thumbnail/view/",
                        "url": "http://domain.tld/permalink/v1/SUPER/1/99/YQlcZVsV/thumbnail/"
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
                    "dc:contributor": null,
                    "dc:coverage": null,
                    "dc:creator": null,
                    "dc:date": null,
                    "dc:description": "SUPER",
                    "dc:format": null,
                    "dc:identifier": null,
                    "dc:language": "en_US",
                    "dc:publisher": null,
                    "dc:relation": null,
                    "dc:rights": null,
                    "dc:source": null,
                    "dc:subject": "dolphins ; tigers",
                    "dc:title": "animals",
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
                                "label": "DSCN022",
                                "updated_on": "2012-12-19T16:43:27+01:00",
                                "page_url": "http://domain.tld/permalink/v1/DSCN022/1/57/PZDiY5iQ/thumbnail/view/",
                                "url": "http://domain.tld/permalink/v1/DSCN022/1/57/PZDiY5iQ/thumbnail/"
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
                                "page_url": "http://domain.tld/permalink/v1/iphone_picjpg/1/40/KDWnu5xc/thumbnail/view/",
                                "url": "http://domain.tld/permalink/v1/iphone_picjpg/1/40/KDWnu5xc/thumbnail/"
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
        }
    }