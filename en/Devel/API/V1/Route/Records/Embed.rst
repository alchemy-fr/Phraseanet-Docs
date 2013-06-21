Records Embed
=============

About
-----

Returns permalinks to medias attached to the record

.. code-block:: bash

    /api/v1/records/{databox_id}/{record_id}/embed/

======================== =====
 Informations
======================== =====
 HTTP Method              GET
 Requires Authentication  Yes
======================== =====

Parameters
----------

As of version 1.2, two new parameters are available : *devices* and *mimes*.
If provided, the query is restricted to the corresponding medias.

For example, if you want to retrieve all HTML5 videos for mobile, you have to provide the
following parameters :

.. code-block:: bash

    devices[]=mobile&mimes[]=video/mp4&mimes[]=video/ogg&mimes[]=video/webm

======================== ============== ==============================
 Parameters               Type           Information
======================== ============== ==============================
 databox_id               integer        The databox id of the record
 record_id                integer        The record_id
 devices                  array          An array of devices to restrict the list (optional)
 mimes                    array          An array of mime type to restrict the list (optional)
======================== ============== ==============================

Response Fields
---------------

========== ================================
 Field      Description
========== ================================
 embed      The list of the sub views of the record
========== ================================

Response sample
---------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/records/1/633/embed/",
            "response_time": "2012-06-29T16:02:40+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "embed": [
            {
                "name": "document",
                "permalink": {
                    "created_on": "2012-06-22T21:20:55+02:00",
                    "id": 1972,
                    "is_activated": true,
                    "label": "0113JPG",
                    "updated_on": "2012-06-22T21:20:55+02:00",
                    "page_url": "http://domain.tld/permalink/v1/1/633/document/?token=gAZMiywc",
                    "url": "http://domain.tld/permalink/v1/1/633/document/0113.JPG?token=gAZMiywc",
                    "download_url": "http://domain.tld/permalink/v1/1/633/document/0113.JPG?token=gAZMiywc&download"
                },
                "height": 4256,
                "width": 2832,
                "filesize": 1101093,
                "devices": [
                "all"
                ],
                "player_type": "IMAGE",
                "mime_type": "image/jpeg"
            },
            {
                "name": "preview",
                "permalink": {
                    "created_on": "2012-06-25T18:07:20+02:00",
                    "id": 2039,
                    "is_activated": true,
                    "label": "0113JPG",
                    "updated_on": "2012-06-25T18:07:20+02:00",
                    "page_url": "http://domain.tld/permalink/v1/1/633/preview/?token=ThQIeo0w",
                    "url": "http://domain.tld/permalink/v1/1/633/preview/0113.JPG?token=ThQIeo0w",
                    "download_url": "http://domain.tld/permalink/v1/1/633/preview/0113.JPG?token=ThQIeo0w&download"
                },
                "height": 480,
                "width": 319,
                "filesize": 11933,
                "devices": [
                "screen"
                ],
                "player_type": "IMAGE",
                "mime_type": "image/jpeg"
            },
            {
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
            {
                "name": "preview_mobile",
                "permalink": {
                    "created_on": "2012-06-22T21:24:57+02:00",
                    "id": 1992,
                    "is_activated": true,
                    "label": "0113JPG",
                    "updated_on": "2012-06-22T21:24:57+02:00",
                    "page_url": "http://domain.tld/permalink/v1/1/633/preview_mobile/?token=STLrJt9Y",
                    "url": "http://domain.tld/permalink/v1/1/633/preview_mobile/0113.JPG?token=STLrJt9Y",
                    "download_url": "http://domain.tld/permalink/v1/1/633/preview_mobile/0113.JPG?token=STLrJt9Y&download"
                },
                "height": 480,
                "width": 319,
                "filesize": 11933,
                "devices": [
                "handheld"
                ],
                "player_type": "IMAGE",
                "mime_type": "image/jpeg"
            },
            {
                "name": "thumbnail_mobile",
                "permalink": {
                    "created_on": "2012-06-22T21:25:00+02:00",
                    "id": 1993,
                    "is_activated": true,
                    "label": "0113JPG",
                    "updated_on": "2012-06-22T21:25:00+02:00",
                    "page_url": "http://domain.tld/permalink/v1/1/633/thumbnail_mobile/?token=3ssBc2YY",
                    "url": "http://domain.tld/permalink/v1/1/633/thumbnail_mobile/0113.JPG?token=3ssBc2YY",
                    "download_url": "http://domain.tld/permalink/v1/1/633/thumbnail_mobile/0113.JPG?token=3ssBc2YY&download"
                },
                "height": 150,
                "width": 100,
                "filesize": 2453,
                "devices": [
                "handheld"
                ],
                "player_type": "IMAGE",
                "mime_type": "image/jpeg"
            }
            ]
        }
    }
