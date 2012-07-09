Databox Metadatas
===================

About
-----

  Return Metadatas settings on specified databox

  .. code-block:: bash

    /api/v1/databoxes/{databox_id}/metadatas/

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
   databox_id                              The databox id on which the request is done
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
            "api_version": "1.2",
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
            },
            {
                "id": 3,
                "namespace": "IPTC",
                "source": "IPTC:SupplementalCategories",
                "tagname": "SupplementalCategories",
                "name": "SupplCategory",
                "separator": "",
                "thesaurus_branch": "",
                "type": "string",
                "indexable": true,
                "multivalue": false,
                "readonly": false,
                "required": false
            },
            {
                "id": 4,
                "namespace": "IPTC",
                "source": "IPTC:Keywords",
                "tagname": "Keywords",
                "name": "Keywords",
                "separator": ";",
                "thesaurus_branch": "",
                "type": "string",
                "indexable": true,
                "multivalue": true,
                "readonly": false,
                "required": false
            },
            {
                "id": 5,
                "namespace": "IPTC",
                "source": "IPTC:SpecialInstructions",
                "tagname": "SpecialInstructions",
                "name": "SpecialInstruct",
                "separator": "",
                "thesaurus_branch": "",
                "type": "string",
                "indexable": true,
                "multivalue": false,
                "readonly": false,
                "required": false
            },
            {
                "id": 6,
                "namespace": "IPTC",
                "source": "IPTC:DateCreated",
                "tagname": "DateCreated",
                "name": "Date",
                "separator": "",
                "thesaurus_branch": "",
                "type": "date",
                "indexable": true,
                "multivalue": false,
                "readonly": false,
                "required": false
            },
            {
                "id": 7,
                "namespace": "IPTC",
                "source": "IPTC:By-line",
                "tagname": "By-line",
                "name": "Byline",
                "separator": "",
                "thesaurus_branch": "",
                "type": "string",
                "indexable": true,
                "multivalue": false,
                "readonly": false,
                "required": false
            },
            {
                "id": 8,
                "namespace": "IPTC",
                "source": "IPTC:By-lineTitle",
                "tagname": "By-lineTitle",
                "name": "BylineTitle",
                "separator": "",
                "thesaurus_branch": "",
                "type": "string",
                "indexable": true,
                "multivalue": false,
                "readonly": false,
                "required": false
            },
            {
                "id": 9,
                "namespace": "IPTC",
                "source": "IPTC:City",
                "tagname": "City",
                "name": "City",
                "separator": "",
                "thesaurus_branch": "",
                "type": "string",
                "indexable": true,
                "multivalue": false,
                "readonly": false,
                "required": false
            },
            {
                "id": 11,
                "namespace": "IPTC",
                "source": "IPTC:Country-PrimaryLocationName",
                "tagname": "Country-PrimaryLocationName",
                "name": "Country",
                "separator": "",
                "thesaurus_branch": "",
                "type": "string",
                "indexable": true,
                "multivalue": false,
                "readonly": false,
                "required": false
            },
            {
                "id": 12,
                "namespace": "IPTC",
                "source": "IPTC:OriginalTransmissionReference",
                "tagname": "OriginalTransmissionReference",
                "name": "OriginalRef",
                "separator": "",
                "thesaurus_branch": "",
                "type": "string",
                "indexable": true,
                "multivalue": false,
                "readonly": false,
                "required": false
            },
            {
                "id": 13,
                "namespace": "IPTC",
                "source": "IPTC:Headline",
                "tagname": "Headline",
                "name": "Headline",
                "separator": "",
                "thesaurus_branch": "",
                "type": "string",
                "indexable": true,
                "multivalue": false,
                "readonly": false,
                "required": false
            },
            {
                "id": 14,
                "namespace": "IPTC",
                "source": "IPTC:Credit",
                "tagname": "Credit",
                "name": "Credit",
                "separator": "",
                "thesaurus_branch": "",
                "type": "string",
                "indexable": true,
                "multivalue": false,
                "readonly": false,
                "required": false
            },
            {
                "id": 15,
                "namespace": "IPTC",
                "source": "IPTC:Source",
                "tagname": "Source",
                "name": "Source",
                "separator": "",
                "thesaurus_branch": "",
                "type": "string",
                "indexable": true,
                "multivalue": false,
                "readonly": false,
                "required": false
            },
            {
                "id": 16,
                "namespace": "IPTC",
                "source": "IPTC:Caption-Abstract",
                "tagname": "Caption-Abstract",
                "name": "Caption",
                "separator": "",
                "thesaurus_branch": "",
                "type": "string",
                "indexable": true,
                "multivalue": false,
                "readonly": false,
                "required": false
            },
            {
                "id": 17,
                "namespace": "IPTC",
                "source": "IPTC:Writer-Editor",
                "tagname": "Writer-Editor",
                "name": "CaptionWriter",
                "separator": "",
                "thesaurus_branch": "",
                "type": "string",
                "indexable": true,
                "multivalue": false,
                "readonly": false,
                "required": false
            },
            {
                "id": 18,
                "namespace": "GPS",
                "source": "GPS:GPSLongitude",
                "tagname": "GPSLongitude",
                "name": "Longitude",
                "separator": "",
                "thesaurus_branch": "",
                "type": "string",
                "indexable": true,
                "multivalue": false,
                "readonly": true,
                "required": false
            },
            {
                "id": 19,
                "namespace": "GPS",
                "source": "GPS:GPSLatitude",
                "tagname": "GPSLatitude",
                "name": "Latitude",
                "separator": "",
                "thesaurus_branch": "",
                "type": "string",
                "indexable": true,
                "multivalue": false,
                "readonly": true,
                "required": false
            },
            {
                "id": 20,
                "namespace": "IFD0",
                "source": "IFD0:Model",
                "tagname": "Model",
                "name": "CameraModel",
                "separator": "",
                "thesaurus_branch": "",
                "type": "string",
                "indexable": true,
                "multivalue": false,
                "readonly": true,
                "required": false
            },
            {
                "id": 23,
                "namespace": "Phraseanet",
                "source": "Phraseanet:tf-recordid",
                "tagname": "tf-recordid",
                "name": "Recordid",
                "separator": "",
                "thesaurus_branch": "",
                "type": "number",
                "indexable": true,
                "multivalue": false,
                "readonly": true,
                "required": false
            },
            {
                "id": 24,
                "namespace": "Phraseanet",
                "source": "Phraseanet:tf-mimetype",
                "tagname": "tf-mimetype",
                "name": "MimeType",
                "separator": "",
                "thesaurus_branch": "",
                "type": "text",
                "indexable": true,
                "multivalue": false,
                "readonly": true,
                "required": false
            },
            {
                "id": 25,
                "namespace": "Phraseanet",
                "source": "Phraseanet:tf-size",
                "tagname": "tf-size",
                "name": "Size",
                "separator": "",
                "thesaurus_branch": "",
                "type": "number",
                "indexable": true,
                "multivalue": false,
                "readonly": true,
                "required": false
            },
            {
                "id": 26,
                "namespace": "Phraseanet",
                "source": "Phraseanet:tf-extension",
                "tagname": "tf-extension",
                "name": "Extension",
                "separator": "",
                "thesaurus_branch": "",
                "type": "text",
                "indexable": true,
                "multivalue": false,
                "readonly": true,
                "required": false
            },
            {
                "id": 27,
                "namespace": "Phraseanet",
                "source": "Phraseanet:tf-width",
                "tagname": "tf-width",
                "name": "Width",
                "separator": "",
                "thesaurus_branch": "",
                "type": "number",
                "indexable": true,
                "multivalue": false,
                "readonly": true,
                "required": false
            },
            {
                "id": 28,
                "namespace": "Phraseanet",
                "source": "Phraseanet:tf-height",
                "tagname": "tf-height",
                "name": "Height",
                "separator": "",
                "thesaurus_branch": "",
                "type": "number",
                "indexable": true,
                "multivalue": false,
                "readonly": true,
                "required": false
            },
            {
                "id": 29,
                "namespace": "Phraseanet",
                "source": "Phraseanet:tf-bits",
                "tagname": "tf-bits",
                "name": "Bits",
                "separator": "",
                "thesaurus_branch": "",
                "type": "number",
                "indexable": true,
                "multivalue": false,
                "readonly": true,
                "required": false
            },
            {
                "id": 30,
                "namespace": "Phraseanet",
                "source": "Phraseanet:tf-channels",
                "tagname": "tf-channels",
                "name": "Channels",
                "separator": "",
                "thesaurus_branch": "",
                "type": "number",
                "indexable": true,
                "multivalue": false,
                "readonly": true,
                "required": false
            }
            ]
        }
    }