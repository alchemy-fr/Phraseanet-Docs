Lister le contenu des flux agrégé
=================================

A propos
--------

Retourne le contenu agrégé de tous les fux disponibles

.. code-block:: bash

    /api/v1/feeds/content/

========================== =====
 Informations
========================== =====
 Méthode HTTP               GET
 Authentification requise   Oui
========================== =====

Paramètres
----------

======================== ============== =================================
 Paramètres               Type           Information
======================== ============== =================================
 offset_start             entier         La première entrée à trouver
 per_page                 entier         Le nombre d'entrée à trouver
 feeds                    array          Un tableau de feed id, l'agrégat se fera sur les id donnés
======================== ============== =================================

Attribut de la réponse
----------------------

=============== ================================
 Attribut           Description
=============== ================================
 total_entries   Le nombre d'entrées
 entries         La liste des entrées
 offset_start    Le numéro de la première entrée
 per_page        La quantitée d'entrée à retourner
=============== ================================

Exemple de réponse
------------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/feeds/content/",
            "response_time": "2012-10-01T14:39:35+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "total_entries": 32,
            "offset_start": 0,
            "per_page": 5,
            "entries": [
                {
                    "id": 688,
                    "author_email": "admin@example.com",
                    "author_name": "admin@example.com",
                    "created_on": "2012-10-01T14:36:31+02:00",
                    "updated_on": "2012-10-01T14:36:31+02:00",
                    "title": "today's news",
                    "subtitle": "This is a new entry",
                    "items": [
                        {
                            "item_id": 2714,
                            "record": {
                                "databox_id": 88,
                                "record_id": 9300,
                                "mime_type": "image/jpeg",
                                "title": "0129.JPG",
                                "original_name": "0129.JPG",
                                "updated_on": "2012-08-31T12:04:45+02:00",
                                "created_on": "2012-08-31T12:04:45+02:00",
                                "collection_id": 1,
                                "sha256": "31adeaeb6623af7a8d1be9fe73c5829422133ac618a27ff9287fc861cf4fc77e",
                                "thumbnail": {
                                    "name": "thumbnail",
                                    "permalink": {
                                        "created_on": "2012-10-01T14:36:57+02:00",
                                        "id": 968,
                                        "is_activated": true,
                                        "label": "0129JPG",
                                        "updated_on": "2012-10-01T14:36:57+02:00",
                                        "page_url": "http://domain.tld/permalink/v1/88/9300/document/?token=2cH7rE2D",
                                        "url": "http://domain.tld/permalink/v1/88/9300/document/0129.JPG?token=2cH7rE2D",
                                        "download_url": "http://domain.tld/permalink/v1/88/9300/document/0129.JPG?token=2cH7rE2D&download"
                                    },
                                    "height": 200,
                                    "width": 133,
                                    "filesize": 3754,
                                    "devices": [
                                        "screen"
                                    ],
                                    "player_type": "IMAGE",
                                    "mime_type": "image/jpeg"
                                },
                                "technical_informations": [
                                    {
                                        "name": "Aperture",
                                        "value": 4.5
                                    },
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
                                        "value": 1443380
                                    },
                                    {
                                        "name": "FlashFired",
                                        "value": 0
                                    },
                                    {
                                        "name": "FocalLength",
                                        "value": 70
                                    },
                                    {
                                        "name": "Height",
                                        "value": 4256
                                    },
                                    {
                                        "name": "HyperfocalDistance",
                                        "value": 36.240412820048
                                    },
                                    {
                                        "name": "ISO",
                                        "value": 160
                                    },
                                    {
                                        "name": "LightValue",
                                        "value": 11.305634287547
                                    },
                                    {
                                        "name": "MimeType",
                                        "value": "image/jpeg"
                                    },
                                    {
                                        "name": "ShutterSpeed",
                                        "value": 0.005
                                    },
                                    {
                                        "name": "Width",
                                        "value": 2832
                                    }
                                ],
                                "phrasea_type": "image",
                                "uuid": "5f3f7f81-d4ca-4fb5-aaaa-a2d8de19c143"
                            }
                        },
                        {
                            "item_id": 2715,
                            "record": {
                                "databox_id": 88,
                                "record_id": 9299,
                                "mime_type": "image/jpeg",
                                "title": "0064.JPG",
                                "original_name": "0064.JPG",
                                "updated_on": "2012-08-31T12:04:41+02:00",
                                "created_on": "2012-08-31T12:04:41+02:00",
                                "collection_id": 1,
                                "sha256": "366ee7e15e1a590133c9e3b94f1356910f5a71193fe9879831a890e3927dca0b",
                                "thumbnail": {
                                    "name": "thumbnail",
                                    "permalink": {
                                        "created_on": "2012-10-01T14:36:57+02:00",
                                        "id": 969,
                                        "is_activated": true,
                                        "label": "0064JPG",
                                        "updated_on": "2012-10-01T14:36:57+02:00",
                                        "page_url": "http://domain.tld/permalink/v1/88/9299/document/?token=9yoFz1gH",
                                        "url": "http://domain.tld/permalink/v1/88/9299/document/0064.JPG?token=9yoFz1gH",
                                        "download_url": "http://domain.tld/permalink/v1/88/9299/document/0064.JPG?token=9yoFz1gH&download"
                                    },
                                    "height": 133,
                                    "width": 200,
                                    "filesize": 3271,
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
                                        "value": 1437099
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
                                "uuid": "4ad0c280-c9e8-491f-9af2-ef0916e5a954"
                            }
                        },
                        {
                            "item_id": 2716,
                            "record": {
                                "databox_id": 88,
                                "record_id": 9298,
                                "mime_type": "image/jpeg",
                                "title": "0134.JPG",
                                "original_name": "0134.JPG",
                                "updated_on": "2012-08-31T12:04:38+02:00",
                                "created_on": "2012-08-31T12:04:38+02:00",
                                "collection_id": 1,
                                "sha256": "a87eb0ab23453c805080e7fd3542e1d67b48ab8a41f6df13c16669df2dc15cca",
                                "thumbnail": {
                                    "name": "thumbnail",
                                    "permalink": {
                                        "created_on": "2012-10-01T14:36:57+02:00",
                                        "id": 970,
                                        "is_activated": true,
                                        "label": "0134JPG",
                                        "updated_on": "2012-10-01T14:36:57+02:00",
                                        "page_url": "http://domain.tld/permalink/v1/88/9298/document/?token=SHKZ4MVa",
                                        "url": "http://domain.tld/permalink/v1/88/9298/document/0134.JPG?token=SHKZ4MVa",
                                        "download_url": "http://domain.tld/permalink/v1/88/9298/document/0134.JPG?token=SHKZ4MVa&download"
                                    },
                                    "height": 200,
                                    "width": 133,
                                    "filesize": 4629,
                                    "devices": [
                                        "screen"
                                    ],
                                    "player_type": "IMAGE",
                                    "mime_type": "image/jpeg"
                                },
                                "technical_informations": [
                                    {
                                        "name": "Aperture",
                                        "value": 3.2
                                    },
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
                                        "value": 1426065
                                    },
                                    {
                                        "name": "FlashFired",
                                        "value": 0
                                    },
                                    {
                                        "name": "FocalLength",
                                        "value": 70
                                    },
                                    {
                                        "name": "Height",
                                        "value": 4256
                                    },
                                    {
                                        "name": "HyperfocalDistance",
                                        "value": 50.963080528193
                                    },
                                    {
                                        "name": "ISO",
                                        "value": 320
                                    },
                                    {
                                        "name": "LightValue",
                                        "value": 9
                                    },
                                    {
                                        "name": "MimeType",
                                        "value": "image/jpeg"
                                    },
                                    {
                                        "name": "ShutterSpeed",
                                        "value": 0.00625
                                    },
                                    {
                                        "name": "Width",
                                        "value": 2832
                                    }
                                ],
                                "phrasea_type": "image",
                                "uuid": "b63db439-a990-4221-8999-2b68f0c4560c"
                            }
                        }
                    ],
                    "feed_id": 769,
                    "feed_url": "/feeds/769/content/",
                    "url": "/feeds/entry/688/"
                },
                {
                    "id": 687,
                    "author_email": "dupond.jean@email.com",
                    "author_name": "Dupond Jean",
                    "created_on": "2012-09-07T16:14:51+02:00",
                    "updated_on": "2012-09-07T16:14:51+02:00",
                    "title": "A news",
                    "subtitle": "Integer id dolor id velit ornare congue vitae nec torto",
                    "items": [],
                    "feed_id": 768,
                    "feed_url": "/feeds/768/content/",
                    "url": "/feeds/entry/687/"
                },
                {
                    "id": 607,
                    "author_email": "gontran.bonheur@gmail.com",
                    "author_name": "W. Shakespeare",
                    "created_on": "2012-09-07T16:10:38+02:00",
                    "updated_on": "2012-09-07T16:10:38+02:00",
                    "title": "Lorem Ipsum",
                    "subtitle": "Integer id dolor id velit ornare congue vitae nec torto",
                    "items": [],
                    "feed_id": 690,
                    "feed_url": "/feeds/690/content/",
                    "url": "/feeds/entry/607/"
                }
            ]
        }
    }
