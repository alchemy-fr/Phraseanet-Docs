Records Record
==============

About
-----

Returns all information about one record.

.. code-block:: bash

    /api/v1/records/{databox_id}/{record_id}/

======================== =====
 Information
======================== =====
 HTTP Method              GET
 Requires Authentication  Yes
======================== =====

Parameters
----------

======================== ============== ==============================
 Parameters               Type           Information
======================== ============== ==============================
 databox_id               integer        The databox id of the record
 record_id                integer        The record_id
======================== ============== ==============================

Response Fields
---------------

========== ================================
 Field      Description
========== ================================
 record     The record
========== ================================

Response sample
---------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/records/1/633/",
            "response_time": "2012-06-29T18:06:39+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "record": {
                "databox_id": 1,
                "record_id": 633,
                "mime_type": "image/jpeg",
                "title": "0113.JPG",
                "original_name": "0113.JPG",
                "updated-on": "2012-06-28T17:19:35+02:00",
                "created_on": "2012-06-22T21:20:55+02:00",
                "collection_id": 1,
                "sha256": "df0cf05a7ca0ac0c7f9df9adcd873473793d132885a15543bc3ab638524baddc",
                "thumbnail": {
                    "name": "thumbnail",
                    "permalink": {
                        "created_on": "2012-06-25T18:05:20+02:00",
                        "id": 2027,
                        "is_activated": true,
                        "label": "0113JPG",
                        "updated_on": "2012-06-25T18:05:20+02:00",
                        "page_url": "http://domain.tld/permalink/v1/1/633/thumbnail/?token=cw1tOY9C",
                        "url": "http://domain.tld/permalink/v1/1/633/thumbnail/0113.JPG?token=cw1tOY9C",
                        "download_url": "http://domain.tld/permalink/v1/1/633/thumbnail/0113.JPG?token=cw1tOY9C&download"
                    },
                    "height": 150,
                    "width": 100,
                    "filesize": 2453,
                    "devices": [
                        "screen"
                    ],
                    "player_type": "IMAGE",
                    "mime_type": "image/jpeg"
                },
                "technical_informations": [
                    {
                        "name": "Aperture",
                        "value": 9
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
                        "value": 1101093
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
                        "value": 18.120206410024
                    },
                    {
                        "name": "ISO",
                        "value": 160
                    },
                    {
                        "name": "LightValue",
                        "value": 13.305634287547
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
                "uuid": "9668a434-9b7d-4cad-8063-6a80740315ad"
            }
        }
    }
