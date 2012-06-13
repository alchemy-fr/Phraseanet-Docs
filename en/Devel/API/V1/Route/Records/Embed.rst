Records Embed
=============

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

As of version 1.2, two new parameters are available : *devices* and *mimes*.
If provided, the query is restricted to the corresponding medias.

For exemple, if you want to retrieve all HTML5 videos for mobile, you have to provide the
following parameters :

  .. code-block:: bash

    devices[]=mobile&mimes[]=video/mp4&mimes[]=video/ogg&mimes[]=video/webm

  ======================== ============== ==============================
   Parameters               Value          Information 
  ======================== ============== ==============================
   databox_id               94 	           The databox id of the record 
   record_id 	              5694 	         The record_id 
   devices                  array          An array of devices to restrict the list (optionnal)
   mimes                    array          An array of mime type to restrict the list (optionnal)
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
            "api_version": "1.2",
            "request": "GET /api/v1/records/2/132/embed/",
            "response_time": "2012-06-13T14:05:16+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "embed": {
                "document": {
                    "permalink": {
                        "created_on": "2012-06-13T13:49:33+02:00",
                        "id": 336,
                        "is_activated": true,
                        "label": "photo03JPG",
                        "last_modified": "2012-06-13T13:49:33+02:00",
                        "page_url": "https://library.net/permalink/v1/photo03JPG/2/132/0eHCZLVu/document/view/",
                        "url": "https://library.net/permalink/v1/photo03JPG/2/132/0eHCZLVu/document/"
                    },
                    "height": 2448,
                    "width": 3264,
                    "filesize": 2851323,
                    "devices": [
                        "all"
                    ],
                    "player_type": "IMAGE",
                    "mime_type": "image/jpeg"
                },
                "preview": {
                    "permalink": {
                        "created_on": "2012-06-13T14:05:16+02:00",
                        "id": 344,
                        "is_activated": true,
                        "label": "photo03JPG",
                        "last_modified": "2012-06-13T14:05:16+02:00",
                        "page_url": "https://library.net/permalink/v1/photo03JPG/2/132/m9THchla/preview/view/",
                        "url": "https://library.net/permalink/v1/photo03JPG/2/132/m9THchla/preview/"
                    },
                    "height": 360,
                    "width": 480,
                    "filesize": 26595,
                    "devices": [
                        "screen"
                    ],
                    "player_type": "IMAGE",
                    "mime_type": "image/jpeg"
                },
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
                "preview_mobile": {
                    "permalink": {
                        "created_on": "2012-06-13T13:50:28+02:00",
                        "id": 337,
                        "is_activated": true,
                        "label": "photo03JPG",
                        "last_modified": "2012-06-13T13:50:28+02:00",
                        "page_url": "https://library.net/permalink/v1/photo03JPG/2/132/C9ldCA7C/preview_mobile/view/",
                        "url": "https://library.net/permalink/v1/photo03JPG/2/132/C9ldCA7C/preview_mobile/"
                    },
                    "height": 360,
                    "width": 480,
                    "filesize": 26595,
                    "devices": [
                        "handheld"
                    ],
                    "player_type": "IMAGE",
                    "mime_type": "image/jpeg"
                },
                "thumbnail_mobile": {
                    "permalink": {
                        "created_on": "2012-06-13T13:50:28+02:00",
                        "id": 338,
                        "is_activated": true,
                        "label": "photo03JPG",
                        "last_modified": "2012-06-13T13:50:28+02:00",
                        "page_url": "https://library.net/permalink/v1/photo03JPG/2/132/DChy7kwo/thumbnail_mobile/view/",
                        "url": "https://library.net/permalink/v1/photo03JPG/2/132/DChy7kwo/thumbnail_mobile/"
                    },
                    "height": 113,
                    "width": 150,
                    "filesize": 4271,
                    "devices": [
                        "handheld"
                    ],
                    "player_type": "IMAGE",
                    "mime_type": "image/jpeg"
                }
            }
        }
    }