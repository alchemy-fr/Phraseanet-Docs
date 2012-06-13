Feed Content
============

About
-----

  Return the content of a feed 

  .. code-block:: bash

    /api/v1/feeds/{feed_id}/content/

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
   feed_id	                               the id of the feed
   offset_start                            the first entry to retrive
   per_page	                               the number of entry to retrieve
  ======================== ============== =============

Response Fields
---------------

  ============= ================================
   Field         Description
  ============= ================================
   feed          The feed
   entries 	     The entries
   offset_start  Starting offset
   per_page      The quantity of entries per page 
  ============= ================================

Response sample
---------------

  .. code-block:: javascript

    {
        "meta": {
            "api_version": "1.2",
            "request": "GET /api/v1/feeds/1892/content/",
            "response_time": "2012-06-12T20:02:07+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "feed": {
                "id": 1892,
                "title": "A pretty news",
                "subtitle": "",
                "total_entries": 2,
                "icon": "/skins/icons/rss32.gif",
                "public": true,
                "is_mine": true,
                "created_on": "2012-06-12T19:51:05+02:00",
                "updated_on": "2012-06-12T19:51:05+02:00"
            },
            "offset_start": 0,
            "per_page": 5,
            "entries": {
                "2264": {
                    "id": 2264,
                    "author_email": "w.shakespeare@gmail.com",
                    "author_name": "William S.",
                    "created_on": "2012-06-12T19:51:18+02:00",
                    "updated_on": "2012-06-12T19:51:18+02:00",
                    "title": "Banzai !",
                    "subtitle": "",
                    "items": [
                        {
                            "item_id": 7505,
                            "record": {
                                "databox_id": 2,
                                "record_id": 129,
                                "mime_type": "image/jpeg",
                                "title": "Glitch1.jpg",
                                "original_name": "Glitch1.jpg",
                                "last_modification": "2012-06-12T17:52:54+02:00",
                                "created_on": "2012-06-12T17:52:43+02:00",
                                "collection_id": 1,
                                "sha256": "e77c9b2ee469348f46732bcee21e91f1db9c86713526519930e1f70d1eb19454",
                                "thumbnail": {
                                    "permalink": {
                                        "created_on": "2012-06-12T19:53:03+02:00",
                                        "id": 331,
                                        "is_activated": true,
                                        "label": "Glitch1jpg",
                                        "last_modified": "2012-06-12T19:53:03+02:00",
                                        "page_url": "https://library.net/permalink/v1/Glitch1jpg/2/129/xrh4JBhU/thumbnail/view/",
                                        "url": "https://library.net/permalink/v1/Glitch1jpg/2/129/xrh4JBhU/thumbnail/"
                                    },
                                    "height": 93,
                                    "width": 150,
                                    "filesize": 3111,
                                    "devices": [
                                        "screen"
                                    ],
                                    "player_type": "IMAGE",
                                    "mime_type": "image/jpeg"
                                },
                                "technical_informations": {
                                    "Width": 2480,
                                    "Height": 1536,
                                    "Channels": 3,
                                    "ColorDepth": 8,
                                    "ColorSpace": "RGB",
                                    "MimeType": "image/jpeg",
                                    "FileSize": 385220
                                },
                                "phrasea_type": "image",
                                "uuid": "1670eabe-41c0-4fb2-833f-945b84ed9a5d"
                            }
                        }
                    ],
                    "feed_url": "/feeds/1892/content/",
                    "url": "/feeds/entry/2264/"
                },
                "2265": {
                    "id": 2265,
                    "author_email": "w.shakespeare@gmail.com",
                    "author_name": "William S.",
                    "created_on": "2012-06-12T19:51:26+02:00",
                    "updated_on": "2012-06-12T19:51:26+02:00",
                    "title": "fqsdfqsd",
                    "subtitle": "",
                    "items": [
                        {
                            "item_id": 7506,
                            "record": {
                                "databox_id": 2,
                                "record_id": 129,
                                "mime_type": "image/jpeg",
                                "title": "Glitch1.jpg",
                                "original_name": "Glitch1.jpg",
                                "last_modification": "2012-06-12T17:52:54+02:00",
                                "created_on": "2012-06-12T17:52:43+02:00",
                                "collection_id": 1,
                                "sha256": "e77c9b2ee469348f46732bcee21e91f1db9c86713526519930e1f70d1eb19454",
                                "thumbnail": {
                                    "permalink": {
                                        "created_on": "2012-06-12T19:53:03+02:00",
                                        "id": 331,
                                        "is_activated": true,
                                        "label": "Glitch1jpg",
                                        "last_modified": "2012-06-12T19:53:03+02:00",
                                        "page_url": "https://library.net/permalink/v1/Glitch1jpg/2/129/xrh4JBhU/thumbnail/view/",
                                        "url": "https://library.net/permalink/v1/Glitch1jpg/2/129/xrh4JBhU/thumbnail/"
                                    },
                                    "height": 93,
                                    "width": 150,
                                    "filesize": 3111,
                                    "devices": [
                                        "screen"
                                    ],
                                    "player_type": "IMAGE",
                                    "mime_type": "image/jpeg"
                                },
                                "technical_informations": {
                                    "Width": 2480,
                                    "Height": 1536,
                                    "Channels": 3,
                                    "ColorDepth": 8,
                                    "ColorSpace": "RGB",
                                    "MimeType": "image/jpeg",
                                    "FileSize": 385220
                                },
                                "phrasea_type": "image",
                                "uuid": "1670eabe-41c0-4fb2-833f-945b84ed9a5d"
                            }
                        }
                    ],
                    "feed_url": "/feeds/1892/content/",
                    "url": "/feeds/entry/2265/"
                }
            }
        }
    }