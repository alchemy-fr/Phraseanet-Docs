Records Caption
===============

About
-----

  Returns the caption of a record

  .. code-block:: bash

    /api/v1/records/{databox_id}/{record_id}/captions/

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
   databox_id               1              The databox id of the record
   record_id                5409           The record_id
  ======================== ============== =============

Response Fields
---------------

  ========== ================================
   Field      Description
  ========== ================================
   metadatas  The caption of the record
  ========== ================================

Response sample
---------------

  .. code-block:: javascript

    {
        "meta": {
            "api_version": "1.2",
            "request": "GET /api/v1/records/2/132/caption/",
            "response_time": "2012-06-13T14:04:41+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "1": {
                "meta_structure_id": 1,
                "name": "Objet",
                "value": "Front cover of a book"
            },
            "2": {
                "meta_structure_id": 2,
                "name": "Categorie",
                "value": "books"
            },
            "4": {
                "meta_structure_id": 4,
                "name": "MotsCles",
                "value": "book ; javascript ; oreilly"
            },
            "6": {
                "meta_structure_id": 6,
                "name": "Date",
                "value": "2012/06/15"
            },
            "9": {
                "meta_structure_id": 9,
                "name": "Ville",
                "value": "Paris"
            },
            "11": {
                "meta_structure_id": 11,
                "name": "Pays",
                "value": "France"
            },
            "20": {
                "meta_structure_id": 20,
                "name": "AppareilPhoto",
                "value": "iPhone 4S"
            },
            "21": {
                "meta_structure_id": 21,
                "name": "NomDeFichier",
                "value": "photo03.JPG"
            }
        }
    }