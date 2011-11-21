Records
============

About
-----

  Return 

  .. code-block:: bash

    /api/v1/records

  ======================== =====
   Informations
  ======================== =====
   HTTP Method              
   Requires Authentication  Yes
  ======================== =====

Parameters
----------

  ======================== ============== =============
   Parameters               Value          Information 
  ======================== ============== =============
   databox_id 	            94 	           The databox id of the record
   record_id 	              5694 	         The record_id 
  ======================== ============== =============

Response Fields
---------------

  ========== ================================
   Field      Description
  ========== ================================
   record 	  The record 
  ========== ================================

Response sample
---------------

  .. code-block:: javascript

    {
        "meta": {
            "api_version": "1.0",
            "request": "GET /api/v1/records/1/295/",
            "response_time": "2011-09-16T17:28:36+02:00",
            "http_code": 200,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "record": {
                "databox_id": 1,
                "record_id": 295,
                "mime_type": "image/gif",
                "title": "Argentina.gif",
                "original_name": "Argentina.gif",
                "last_modification": "2011-03-24T12:05:18+01:00",
                "created_on": "2011-03-24T12:05:04+01:00",
                "collection_id": 1,
                "sha256": "669f161400fe81fa3024b074a1c0cfe0d0d7643470a2f450e6b005ce8daf0f8d",
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
                "technical_informations": [],
                "phrasea_type": "image",
                "uuid": "b65b957f-ed22-4291-9811-35c09a43ba28"
            }
        }
    }
