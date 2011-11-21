Records Metadatas
=================

About
-----

  Returns the metadatas of a record 

  .. code-block:: bash

    /api/v1/records/{databox_id}/{record_id}/metadatas/

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
   databox_id               94             The databox id of the record
   record_id                5694           The record_id 
  ======================== ============== =============

Response Fields
---------------

  ========== ================================
   Field      Description
  ========== ================================
   metadatas  The list of the metadatas of the record 
  ========== ================================

Response sample
---------------

  .. code-block:: javascript

    {
        "meta": {
            "api_version": "1.0",
            "request": "GET /api/v1/records/52/5780/metadatas/",
            "response_time": "2011-07-27T12:55:47+02:00",
            "http_code": 200,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "metadatas": {
                "6271": {
                    "meta_id": 6271,
                    "meta_structure_id": 1,
                    "name": "Objet",
                    "value": "Cielenété"
                },
                "6272": {
                    "meta_id": 6272,
                    "meta_structure_id": 2,
                    "name": "Categorie",
                    "value": "paysages"
                },
                "6273": {
                    "meta_id": 6273,
                    "meta_structure_id": 4,
                    "name": "MotsCles",
                    "value": [
                        "ciel",
                        "météo",
                        "nuage"
                    ]
                },
                "6274": {
                    "meta_id": 6274,
                    "meta_structure_id": 13,
                    "name": "Titre",
                    "value": "Ciel"
                }
            }
        }
    }