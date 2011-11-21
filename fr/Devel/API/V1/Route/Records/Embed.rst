Records
============

About
-----

  Returns some permalinks to the document subdefinitions to embed it 

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

  ======================== ============== ==============================
   Parameters               Value          Information 
  ======================== ============== ==============================
   databox_id               94 	           The databox id of the record 
   record_id 	              5694 	         The record_id 
  ======================== ============== ==============================

Response Fields
---------------

  ========== ================================
   Field      Description
  ========== ================================
    embed 	  The list of the metadatas of the record 
  ========== ================================

Response sample
---------------

  .. code-block:: javascript

    {
        "meta": {
            "api_version": "1.0",
            "request": "GET /api/v1/records/1/2151/embed/",
            "response_time": "2011-11-10T11:50:19+01:00",
            "http_code": 200,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "embed": {
                "preview": {
                    "permalink": {
                        "created_on": "2011-11-09T11:33:06+01:00",
                        "id": 2383,
                        "is_activated": true,
                        "label": "Fondation",
                        "last_modified": "2011-11-09T11:33:06+01:00",
                        "page_URL": "https://localhost/permalink/v1/Fondation/1/2151/1JNLGfHI/preview/view/",
                        "URL": "https://localhost/permalink/v1/Fondation/1/2151/1JNLGfHI/preview/"
                    },
                    "height": 240,
                    "width": 320,
                    "filesize": 61010820,
                    "player_type": "VIDEO_MP4",
                    "mime_type": "video/mp4"
                },
                "thumbnail": {
                    "permalink": {
                        "created_on": "2011-11-09T11:33:34+01:00",
                        "id": 2384,
                        "is_activated": true,
                        "label": "Fondation",
                        "last_modified": "2011-11-09T11:33:34+01:00",
                        "page_URL": "https://localhost/permalink/v1/Fondation/1/2151/HLm5eyxA/thumbnail/view/",
                        "URL": "https://localhost/permalink/v1/Fondation/1/2151/HLm5eyxA/thumbnail/"
                    },
                    "height": 144,
                    "width": 192,
                    "filesize": 4390,
                    "player_type": "IMAGE",
                    "mime_type": "image/jpeg"
                },
                "document": {
                    "permalink": {
                        "created_on": "2011-11-10T11:50:20+01:00",
                        "id": 2385,
                        "is_activated": true,
                        "label": "Fondation",
                        "last_modified": "2011-11-10T11:50:20+01:00",
                        "page_URL": "https://localhost/permalink/v1/Fondation/1/2151/3y8UyeIB/document/view/",
                        "URL": "https://localhost/permalink/v1/Fondation/1/2151/3y8UyeIB/document/"
                    },
                    "height": 240,
                    "width": 320,
                    "filesize": 83488678,
                    "player_type": "UNKNOWN",
                    "mime_type": "video/mpeg"
                },
                "preview_api": {
                    "permalink": {
                        "created_on": "2011-11-10T11:50:20+01:00",
                        "id": 2386,
                        "is_activated": true,
                        "label": "Fondation",
                        "last_modified": "2011-11-10T11:50:20+01:00",
                        "page_URL": "https://localhost/permalink/v1/Fondation/1/2151/9foMA6do/preview_api/view/",
                        "URL": "https://localhost/permalink/v1/Fondation/1/2151/9foMA6do/preview_api/"
                    },
                    "height": 240,
                    "width": 320,
                    "filesize": 61010820,
                    "player_type": "VIDEO_MP4",
                    "mime_type": "video/mp4"
                },
                "thumbnailgif": {
                    "permalink": {
                        "created_on": "2011-11-10T11:50:20+01:00",
                        "id": 2387,
                        "is_activated": true,
                        "label": "Fondation",
                        "last_modified": "2011-11-10T11:50:20+01:00",
                        "page_URL": "https://localhost/permalink/v1/Fondation/1/2151/BMJowuEj/thumbnailgif/view/",
                        "URL": "https://localhost/permalink/v1/Fondation/1/2151/BMJowuEj/thumbnailgif/"
                    },
                    "height": 144,
                    "width": 192,
                    "filesize": 154698,
                    "player_type": "IMAGE",
                    "mime_type": "image/gif"
                }
            }
        }
    }