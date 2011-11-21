Feeds Content
=============

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
            "api_version": "1.0",
            "request": "GET /api/v1/feeds/1457/content/",
            "response_time": "2011-11-04T14:48:27+01:00",
            "http_code": 200,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "feed": {
                "id": 1457,
                "title": "My Feed Test",
                "subtitle": "My subtitle",
                "total_entries": 1,
                "icon": "/skins/icons/rss32.gif",
                "public": false,
                "is_mine": true,
                "created_on": "2011-11-04T14:38:57+01:00",
                "updated_on": "2011-11-04T14:38:57+01:00"
            },
            "offset_start": 0,
            "per_page": 5,
            "entries": {
                "offset_start": 0,
                "entries": {
                    "1661": {
                        "author_email": "legoff@alchemy.fr",
                        "author_name": "legoff@alchemy.fr",
                        "created_on": "2011-11-04T14:39:47+01:00",
                        "updated_on": "2011-11-04T14:39:47+01:00",
                        "title": "My Entry Test",
                        "subtitle": "My Entry subtitle",
                        "items": [
                            {
                                "item_id": 23430,
                                "record": {
                                    "databox_id": 1,
                                    "record_id": 15,
                                    "mime_type": "image/jpeg",
                                    "title": "eos53_04hdr.jpg",
                                    "original_name": "eos53_04hdr.jpg",
                                    "last_modification": "2011-10-20T13:00:04+02:00",
                                    "created_on": "2011-10-20T12:59:54+02:00",
                                    "collection_id": 1,
                                    "sha256": "694dbf5bf78009d5f0f16a8505ea71612f6256e5892fa441064b24cc664bf3cd",
                                    "thumbnail": {
                                        "permalink": {
                                            "created_on": "2011-10-20T13:00:04+02:00",
                                            "id": 22,
                                            "is_activated": true,
                                            "label": "eos53_04hdrjpg",
                                            "last_modified": "2011-10-20T13:00:04+02:00",
                                            "page_URL": "http://dev.phrasea.net/permalink/v1/eos53_04hdrjpg/1/15/9Xxw2Ghv/thumbnail/view/",
                                            "URL": "http://dev.phrasea.net/permalink/v1/eos53_04hdrjpg/1/15/9Xxw2Ghv/thumbnail/"
                                        },
                                        "height": 131,
                                        "width": 200,
                                        "size": 6411,
                                        "player_type": "IMAGE",
                                        "mime": "image/jpeg"
                                    },
                                    "technical_informations": {
                                        "bits": "8",
                                        "channels": "3",
                                        "Orientation": "1"
                                    },
                                    "phrasea_type": "image",
                                    "uuid": "7c6ef16c-52d4-4fda-aaf9-bd73c4e38205"
                                }
                            },
                            {
                                "item_id": 23431,
                                "record": {
                                    "databox_id": 1,
                                    "record_id": 16,
                                    "mime_type": "image/jpeg",
                                    "title": "eos53_7267_magg_meno.jpg",
                                    "original_name": "eos53_7267_magg_meno.jpg",
                                    "last_modification": "2011-10-20T13:00:02+02:00",
                                    "created_on": "2011-10-20T12:59:56+02:00",
                                    "collection_id": 1,
                                    "sha256": "958d662a0833a0a1bc0007def0cc9007246a0a53985352e0f7325e45b00a5783",
                                    "thumbnail": {
                                        "permalink": {
                                            "created_on": "2011-10-20T13:00:02+02:00",
                                            "id": 20,
                                            "is_activated": true,
                                            "label": "eos53_7267_magg_menojpg",
                                            "last_modified": "2011-10-20T13:00:02+02:00",
                                            "page_URL": "http://dev.phrasea.net/permalink/v1/eos53_7267_magg_menojpg/1/16/D7zF5vGG/thumbnail/view/",
                                            "URL": "http://dev.phrasea.net/permalink/v1/eos53_7267_magg_menojpg/1/16/D7zF5vGG/thumbnail/"
                                        },
                                        "height": 133,
                                        "width": 200,
                                        "size": 6662,
                                        "player_type": "IMAGE",
                                        "mime": "image/jpeg"
                                    },
                                    "technical_informations": {
                                        "bits": "8",
                                        "channels": "3",
                                        "Orientation": "1"
                                    },
                                    "phrasea_type": "image",
                                    "uuid": "383a153b-f2e5-44a4-a71e-7d2c63a129d3"
                                }
                            }
                        ]
                    }
                }
            }
        }
    }