Databox Metadatas
===================

About
-----

Returns Metadatas settings on a specified databox.

.. code-block:: bash

    /api/v1/databoxes/{databox_id}/metadatas/

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
 databox_id               integer        The databox id on which the request is done
======================== ============== =============

Response Fields
---------------

==================== ================================
Field                Description
==================== ================================
 document_structure   The list of metadatas document structure
==================== ================================

Response sample
---------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/databoxes/1/metadatas/",
            "response_time": "2012-06-29T16:22:10+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "document_metadatas": [
            {
                "id": 1,
                "namespace": "IPTC",
                "source": "IPTC:ObjectName",
                "tagname": "ObjectName",
                "name": "Object",
                "separator": "",
                "thesaurus_branch": "",
                "type": "string",
                "indexable": true,
                "multivalue": false,
                "readonly": false,
                "required": false
            },
            {
                "id": 2,
                "namespace": "IPTC",
                "source": "IPTC:Category",
                "tagname": "Category",
                "name": "Category",
                "separator": "",
                "thesaurus_branch": "",
                "type": "string",
                "indexable": true,
                "multivalue": false,
                "readonly": false,
                "required": false
            }
            ]
        }
    }
