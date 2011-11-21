Records
============

About
-----

  Moves a record to another collection 

  .. code-block:: bash

    /api/v1/records/{databox_id}/{record_id}/setcollection/

  ======================== =====
   Informations
  ======================== =====
   HTTP Method              POST
   Requires Authentication  Yes
  ======================== =====

Parameters
----------

  ======================== ============== =============
   Parameters               Value          Information 
  ======================== ============== =============
   databox_id               94             The databox id of the record
   record_id                5694           The record_id
   base_id                  52             The base_id of the destination collection 
  ======================== ============== =============

Response Fields
---------------

  ========== ================================
   Field      Description
  ========== ================================
   record 	  The record updated 
  ========== ================================

Response sample
---------------

  .. code-block:: javascript

    {
        "meta": {
            "api_version": "1.0",
            "request": "POST /api/v1/records/52/4102/setcollection/",
            "response_time": "2011-07-27T13:59:57+02:00",
            "http_code": 200,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "record": {
                "databox_id": 52,
                "record_id": 4102,
                "mime_type": "image/tiff",
                "title": "test009.TIFF",
                "original_name": "test009.TIFF",
                "last_modification": "2011-07-15T17:31:44+02:00",
                "created_on": "2011-07-13T19:01:25+02:00",
                "collection_id": 86,
                "sha256": "75919b29571b9265a3b8af3d3343b6b68ab0636854129e07219eec6b5f7eef38",
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
                "technical_informations": {
                    "bits": 8,
                    "channels": "3"
                },
                "phrasea_type": "image",
                "uuid": "7f0dde66-d67d-4df3-846c-ae10aea3da39"
            }
        }
    }