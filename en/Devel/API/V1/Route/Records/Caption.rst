Records Caption
===============

About
-----

Returns the caption of a record.

.. code-block:: bash

    /api/v1/records/{databox_id}/{record_id}/caption/

======================== =====
 Information
======================== =====
 HTTP Method              GET
 Requires Authentication  Yes
======================== =====

Parameters
----------

======================== ============== =============
 Parameters               Type           Information
======================== ============== =============
 databox_id               integer        The databox id of the record
 record_id                integer        The record_id
======================== ============== =============

Response Fields
---------------

=================== ================================
 Field               Description
=================== ================================
 caption_metadatas   The caption of the record
=================== ================================

Response sample
---------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/records/1/644/caption/",
            "response_time": "2012-06-29T16:57:02+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "caption_metadatas": [
            {
                "meta_structure_id": 1,
                "name": "Object",
                "value": "smoke"
            },
            {
                "meta_structure_id": 4,
                "name": "Keywords",
                "value": "fumée ; smoke"
            },
            {
                "meta_structure_id": 20,
                "name": "CameraModel",
                "value": "NIKON D700"
            },
            {
                "meta_structure_id": 23,
                "name": "Recordid",
                "value": "644"
            },
            {
                "meta_structure_id": 24,
                "name": "MimeType",
                "value": "image/jpeg"
            },
            {
                "meta_structure_id": 25,
                "name": "Size",
                "value": "3221035"
            },
            {
                "meta_structure_id": 26,
                "name": "Extension",
                "value": "JPG"
            },
            {
                "meta_structure_id": 27,
                "name": "Width",
                "value": "4256"
            },
            {
                "meta_structure_id": 28,
                "name": "Height",
                "value": "2832"
            },
            {
                "meta_structure_id": 29,
                "name": "Bits",
                "value": "8"
            },
            {
                "meta_structure_id": 30,
                "name": "Channels",
                "value": "3"
            }
            ]
        }
    }
