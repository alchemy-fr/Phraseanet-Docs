Feeds Entry Content
========================

About
-----

  Return the content of an entry, given an Id 

  .. code-block:: bash

    /api/v1/feeds/entry/{feed_id}/

  ======================== =====
   Informations
  ======================== =====
   HTTP Method              GET
   Requires Authentication  Yes
  ======================== =====

Parameters
----------

  ======================== ============== =================================
   Parameters               Value          Information 
  ======================== ============== =================================
  ======================== ============== =================================

Response Fields
---------------

  =============== ================================
   Field           Description
  =============== ================================
   entry 	   The entry
  =============== ================================

Response sample
---------------

  .. code-block:: javascript

    {
        "meta": {
            "api_version": "1.2",
            "request": "GET /api/v1/feeds/entry/2266/",
            "response_time": "2012-06-13T13:57:43+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "entry": {
                "id": 2266,
                "author_email": "w.shakespeare@gmail.com",
                "author_name": "William S.",
                "created_on": "2012-06-13T13:50:37+02:00",
                "updated_on": "2012-06-13T13:50:37+02:00",
                "title": "iPhone Pics",
                "subtitle": "here are some iPhone pics I took",
                "items": [
                    {
                        "item_id": 7507,
                        "record": {
                            "databox_id": 2,
                            "record_id": 130,
                            "mime_type": "image/jpeg",
                            "title": "photo01.JPG",
                            "original_name": "photo01.JPG",
                            "last_modification": "2012-06-13T13:49:33+02:00",
                            "created_on": "2012-06-13T13:49:26+02:00",
                            "collection_id": 1,
                            "sha256": "40d366a128bc9e104db54f8dbaa6fecb291dadcff71c71d0e44ed3f35266a7df",
                            "thumbnail": {
                                "permalink": {
                                    "created_on": "2012-06-13T13:51:06+02:00",
                                    "id": 341,
                                    "is_activated": true,
                                    "label": "photo01JPG",
                                    "last_modified": "2012-06-13T13:51:06+02:00",
                                    "page_url": "https://library.net/permalink/v1/photo01JPG/2/130/VocYfCtV/thumbnail/view/",
                                    "url": "https://library.net/permalink/v1/photo01JPG/2/130/VocYfCtV/thumbnail/"
                                },
                                "height": 113,
                                "width": 150,
                                "filesize": 4754,
                                "devices": [
                                    "screen"
                                ],
                                "player_type": "IMAGE",
                                "mime_type": "image/jpeg"
                            },
                            "technical_informations": {
                                "Aperture": 2.4,
                                "CameraModel": "iPhone 4S",
                                "Channels": 3,
                                "ColorDepth": 8,
                                "ColorSpace": "RGB",
                                "FileSize": 2773302,
                                "FlashFired": 0,
                                "FocalLength": 4.28,
                                "Height": 2448,
                                "HyperfocalDistance": 2.0773522348635,
                                "ISO": 400,
                                "LightValue": 4.847996906555,
                                "MimeType": "image/jpeg",
                                "ShutterSpeed": 0.05,
                                "Width": 3264
                            },
                            "phrasea_type": "image",
                            "uuid": "2e101776-049f-4fdf-829e-5b1b42226eb8"
                        }
                    },
                    {
                        "item_id": 7508,
                        "record": {
                            "databox_id": 2,
                            "record_id": 131,
                            "mime_type": "image/jpeg",
                            "title": "photo02.JPG",
                            "original_name": "photo02.JPG",
                            "last_modification": "2012-06-13T13:50:32+02:00",
                            "created_on": "2012-06-13T13:49:27+02:00",
                            "collection_id": 1,
                            "sha256": "fd4f8462d493e857dc1d25c99c70eae0b1daf3fde81b749c8ae3f93bcfdc2975",
                            "thumbnail": {
                                "permalink": {
                                    "created_on": "2012-06-13T13:51:06+02:00",
                                    "id": 342,
                                    "is_activated": true,
                                    "label": "photo02JPG",
                                    "last_modified": "2012-06-13T13:51:06+02:00",
                                    "page_url": "https://library.net/permalink/v1/photo02JPG/2/131/ppKlxb0V/thumbnail/view/",
                                    "url": "https://library.net/permalink/v1/photo02JPG/2/131/ppKlxb0V/thumbnail/"
                                },
                                "height": 113,
                                "width": 150,
                                "filesize": 4051,
                                "devices": [
                                    "screen"
                                ],
                                "player_type": "IMAGE",
                                "mime_type": "image/jpeg"
                            },
                            "technical_informations": {
                                "Aperture": 2.4,
                                "CameraModel": "iPhone 4S",
                                "Channels": 3,
                                "ColorDepth": 8,
                                "ColorSpace": "RGB",
                                "FileSize": 2637745,
                                "FlashFired": 0,
                                "FocalLength": 4.28,
                                "Height": 2448,
                                "HyperfocalDistance": 2.0773522348635,
                                "ISO": 400,
                                "LightValue": 4.847996906555,
                                "MimeType": "image/jpeg",
                                "ShutterSpeed": 0.05,
                                "Width": 3264
                            },
                            "phrasea_type": "image",
                            "uuid": "5aa9e8af-e1d0-4b2b-93ba-1ec010e9978e"
                        }
                    },
                    {
                        "item_id": 7509,
                        "record": {
                            "databox_id": 2,
                            "record_id": 132,
                            "mime_type": "image/jpeg",
                            "title": "photo03.JPG",
                            "original_name": "photo03.JPG",
                            "last_modification": "2012-06-13T13:50:29+02:00",
                            "created_on": "2012-06-13T13:49:29+02:00",
                            "collection_id": 1,
                            "sha256": "60691f538bdac78197004edcfb77dc772d824daeca54bd13e59f6b485f0293bc",
                            "thumbnail": {
                                "permalink": {
                                    "created_on": "2012-06-13T13:51:06+02:00",
                                    "id": 343,
                                    "is_activated": true,
                                    "label": "photo03JPG",
                                    "last_modified": "2012-06-13T13:51:06+02:00",
                                    "page_url": "https://library.net/permalink/v1/photo03JPG/2/132/5MuXBQ55/thumbnail/view/",
                                    "url": "https://library.net/permalink/v1/photo03JPG/2/132/5MuXBQ55/thumbnail/"
                                },
                                "height": 113,
                                "width": 150,
                                "filesize": 4271,
                                "devices": [
                                    "screen"
                                ],
                                "player_type": "IMAGE",
                                "mime_type": "image/jpeg"
                            },
                            "technical_informations": {
                                "Aperture": 2.4,
                                "CameraModel": "iPhone 4S",
                                "Channels": 3,
                                "ColorDepth": 8,
                                "ColorSpace": "RGB",
                                "FileSize": 2851233,
                                "FlashFired": 0,
                                "FocalLength": 4.28,
                                "Height": 2448,
                                "HyperfocalDistance": 2.0773522348635,
                                "ISO": 400,
                                "LightValue": 4.847996906555,
                                "MimeType": "image/jpeg",
                                "ShutterSpeed": 0.05,
                                "Width": 3264
                            },
                            "phrasea_type": "image",
                            "uuid": "d91372ec-ea94-4e8a-bf26-065ad8684180"
                        }
                    }
                ],
                "feed_url": "/feeds/795/content/",
                "url": "/feeds/entry/2266/"
            }
        }
    }