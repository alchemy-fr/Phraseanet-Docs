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
        "api_version": "1.1",
        "request": "GET /api/v1/records/1/5409/caption/",
        "response_time": "2012-03-08T16:36:39+01:00",
        "http_code": 200,
        "error_message": null,
        "error_details": null,
        "charset": "UTF-8"
    },
    "response": {
        "4": {
            "meta_structure_id": 4,
            "name": "Keywords",
            "value": "surf ; rio de janeiro"
        },
        "21": {
            "meta_structure_id": 21,
            "name": "FileName",
            "value": "surf_rio_de_janeiro.png"
        },
        "24": {
            "meta_structure_id": 24,
            "name": "MimeType",
            "value": "image/png"
        },
        "25": {
            "meta_structure_id": 25,
            "name": "Size",
            "value": "866136"
        },
        "26": {
            "meta_structure_id": 26,
            "name": "Extension",
            "value": "png"
        },
        "27": {
            "meta_structure_id": 27,
            "name": "Width",
            "value": "900"
        },
        "28": {
            "meta_structure_id": 28,
            "name": "Height",
            "value": "1101"
        }
    }
}