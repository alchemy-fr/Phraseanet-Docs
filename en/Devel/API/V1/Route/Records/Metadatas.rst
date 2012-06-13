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
            "api_version": "1.2",
            "request": "GET /api/v1/records/2/132/metadatas/",
            "response_time": "2012-06-13T14:05:53+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "metadatas": {
                "901": {
                    "meta_id": 901,
                    "meta_structure_id": 20,
                    "name": "AppareilPhoto",
                    "value": "iPhone 4S"
                },
                "902": {
                    "meta_id": 902,
                    "meta_structure_id": 21,
                    "name": "NomDeFichier",
                    "value": "photo03.JPG"
                },
                "903": {
                    "meta_id": 903,
                    "meta_structure_id": 1,
                    "name": "Objet",
                    "value": "Front cover of a book"
                },
                "904": {
                    "meta_id": 904,
                    "meta_structure_id": 2,
                    "name": "Categorie",
                    "value": "books"
                },
                "905": {
                    "meta_id": 905,
                    "meta_structure_id": 4,
                    "name": "MotsCles",
                    "value": "book"
                },
                "906": {
                    "meta_id": 906,
                    "meta_structure_id": 4,
                    "name": "MotsCles",
                    "value": "javascript"
                },
                "907": {
                    "meta_id": 907,
                    "meta_structure_id": 4,
                    "name": "MotsCles",
                    "value": "oreilly"
                },
                "908": {
                    "meta_id": 908,
                    "meta_structure_id": 6,
                    "name": "Date",
                    "value": "2012/06/15"
                },
                "909": {
                    "meta_id": 909,
                    "meta_structure_id": 9,
                    "name": "Ville",
                    "value": "Paris"
                },
                "910": {
                    "meta_id": 910,
                    "meta_structure_id": 11,
                    "name": "Pays",
                    "value": "France"
                }
            }
        }
    }