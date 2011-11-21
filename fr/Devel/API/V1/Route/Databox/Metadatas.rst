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
   databox_id               94             The databox id on which the request is done 
  ======================== ============== =============

Response Fields
---------------

  =========== ================================
  Field        Description
  =========== ================================
   metadatas   The list metadatas settings 
  =========== ================================

Response sample
---------------

  .. code-block:: javascript

    {
        "meta": {
            "api_version": "1.0",
            "request": "GET /api/v1/databoxes/1/metadatas/",
            "response_time": "2011-07-28T14:32:44+02:00",
            "http_code": 200,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "metadatas": {
                "1": {
                    "id": 1,
                    "namespace": "IPTC",
                    "source": "/rdf:RDF/rdf:Description/IPTC:ObjectName",
                    "tagname": "ObjectName",
                    "name": "Object",
                    "separator": "",
                    "thesaurus_branch": "",
                    "type": "text",
                    "indexable": true,
                    "multivalue": false,
                    "readonly": false,
                    "required": false
                },
                "2": {
                    "id": 2,
                    "namespace": "IPTC",
                    "source": "/rdf:RDF/rdf:Description/IPTC:Category",
                    "tagname": "Category",
                    "name": "Category",
                    "separator": "",
                    "thesaurus_branch": "",
                    "type": "text",
                    "indexable": true,
                    "multivalue": false,
                    "readonly": false,
                    "required": false
                },
                "3": {
                    "id": 3,
                    "namespace": "IPTC",
                    "source": "/rdf:RDF/rdf:Description/IPTC:SupplementalCategories",
                    "tagname": "SupplementalCategories",
                    "name": "SupplCategory",
                    "separator": "",
                    "thesaurus_branch": "",
                    "type": "text",
                    "indexable": true,
                    "multivalue": false,
                    "readonly": false,
                    "required": false
                },
                "4": {
                    "id": 4,
                    "namespace": "IPTC",
                    "source": "/rdf:RDF/rdf:Description/IPTC:Keywords",
                    "tagname": "Keywords",
                    "name": "Keywords",
                    "separator": ";",
                    "thesaurus_branch": "",
                    "type": "text",
                    "indexable": true,
                    "multivalue": true,
                    "readonly": false,
                    "required": false
                },
                "5": {
                    "id": 5,
                    "namespace": "IPTC",
                    "source": "/rdf:RDF/rdf:Description/IPTC:SpecialInstructions",
                    "tagname": "SpecialInstructions",
                    "name": "SpecialInstruct",
                    "separator": "",
                    "thesaurus_branch": "",
                    "type": "text",
                    "indexable": true,
                    "multivalue": false,
                    "readonly": false,
                    "required": false
                },
                "6": {
                    "id": 6,
                    "namespace": "IPTC",
                    "source": "/rdf:RDF/rdf:Description/IPTC:DateCreated",
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
                "7": {
                    "id": 7,
                    "namespace": "IPTC",
                    "source": "/rdf:RDF/rdf:Description/IPTC:By-line",
                    "tagname": "By-line",
                    "name": "Byline",
                    "separator": "",
                    "thesaurus_branch": "",
                    "type": "text",
                    "indexable": true,
                    "multivalue": false,
                    "readonly": false,
                    "required": false
                },
                "8": {
                    "id": 8,
                    "namespace": "IPTC",
                    "source": "/rdf:RDF/rdf:Description/IPTC:By-lineTitle",
                    "tagname": "By-lineTitle",
                    "name": "BylineTitle",
                    "separator": "",
                    "thesaurus_branch": "",
                    "type": "text",
                    "indexable": true,
                    "multivalue": false,
                    "readonly": false,
                    "required": false
                },
                "9": {
                    "id": 9,
                    "namespace": "IPTC",
                    "source": "/rdf:RDF/rdf:Description/IPTC:City",
                    "tagname": "City",
                    "name": "City",
                    "separator": "",
                    "thesaurus_branch": "",
                    "type": "text",
                    "indexable": true,
                    "multivalue": false,
                    "readonly": false,
                    "required": false
                },
                "10": {
                    "id": 10,
                    "namespace": "IPTC",
                    "source": "/rdf:RDF/rdf:Description/IPTC:Province-State",
                    "tagname": "Province-State",
                    "name": "Province",
                    "separator": "",
                    "thesaurus_branch": "",
                    "type": "text",
                    "indexable": true,
                    "multivalue": false,
                    "readonly": false,
                    "required": false
                },
                "11": {
                    "id": 11,
                    "namespace": "IPTC",
                    "source": "/rdf:RDF/rdf:Description/IPTC:Country-PrimaryLocationName",
                    "tagname": "Country-PrimaryLocationName",
                    "name": "Country",
                    "separator": "",
                    "thesaurus_branch": "",
                    "type": "text",
                    "indexable": true,
                    "multivalue": false,
                    "readonly": false,
                    "required": false
                },
                "12": {
                    "id": 12,
                    "namespace": "IPTC",
                    "source": "/rdf:RDF/rdf:Description/IPTC:OriginalTransmissionReference",
                    "tagname": "OriginalTransmissionReference",
                    "name": "OriginalRef",
                    "separator": "",
                    "thesaurus_branch": "",
                    "type": "text",
                    "indexable": true,
                    "multivalue": false,
                    "readonly": false,
                    "required": false
                },
                "13": {
                    "id": 13,
                    "namespace": "IPTC",
                    "source": "/rdf:RDF/rdf:Description/IPTC:Headline",
                    "tagname": "Headline",
                    "name": "Headline",
                    "separator": "",
                    "thesaurus_branch": "",
                    "type": "text",
                    "indexable": true,
                    "multivalue": false,
                    "readonly": false,
                    "required": false
                },
                "14": {
                    "id": 14,
                    "namespace": "IPTC",
                    "source": "/rdf:RDF/rdf:Description/IPTC:Credit",
                    "tagname": "Credit",
                    "name": "Credit",
                    "separator": "",
                    "thesaurus_branch": "",
                    "type": "text",
                    "indexable": true,
                    "multivalue": false,
                    "readonly": false,
                    "required": false
                },
                "15": {
                    "id": 15,
                    "namespace": "IPTC",
                    "source": "/rdf:RDF/rdf:Description/IPTC:Source",
                    "tagname": "Source",
                    "name": "Source",
                    "separator": "",
                    "thesaurus_branch": "",
                    "type": "text",
                    "indexable": true,
                    "multivalue": false,
                    "readonly": false,
                    "required": false
                },
                "16": {
                    "id": 16,
                    "namespace": "IPTC",
                    "source": "/rdf:RDF/rdf:Description/IPTC:Caption-Abstract",
                    "tagname": "Caption-Abstract",
                    "name": "Caption",
                    "separator": "",
                    "thesaurus_branch": "",
                    "type": "text",
                    "indexable": true,
                    "multivalue": false,
                    "readonly": false,
                    "required": false
                },
                "17": {
                    "id": 17,
                    "namespace": "IPTC",
                    "source": "/rdf:RDF/rdf:Description/IPTC:Writer-Editor",
                    "tagname": "Writer-Editor",
                    "name": "CaptionWriter",
                    "separator": "",
                    "thesaurus_branch": "",
                    "type": "text",
                    "indexable": true,
                    "multivalue": false,
                    "readonly": false,
                    "required": false
                },
                "18": {
                    "id": 18,
                    "namespace": "GPS",
                    "source": "/rdf:RDF/rdf:Description/GPS:GPSLongitude",
                    "tagname": "GPSLongitude",
                    "name": "Longitude",
                    "separator": "",
                    "thesaurus_branch": "",
                    "type": "text",
                    "indexable": true,
                    "multivalue": false,
                    "readonly": true,
                    "required": false
                },
                "19": {
                    "id": 19,
                    "namespace": "GPS",
                    "source": "/rdf:RDF/rdf:Description/GPS:GPSLatitude",
                    "tagname": "GPSLatitude",
                    "name": "Latitude",
                    "separator": "",
                    "thesaurus_branch": "",
                    "type": "text",
                    "indexable": true,
                    "multivalue": false,
                    "readonly": true,
                    "required": false
                },
                "20": {
                    "id": 20,
                    "namespace": "IFD0",
                    "source": "/rdf:RDF/rdf:Description/IFD0:Model",
                    "tagname": "Model",
                    "name": "CameraModel",
                    "separator": "",
                    "thesaurus_branch": "",
                    "type": "text",
                    "indexable": true,
                    "multivalue": false,
                    "readonly": true,
                    "required": false
                },
                "21": {
                    "id": 21,
                    "namespace": "PHRASEANET",
                    "source": "/rdf:RDF/rdf:Description/PHRASEANET:tf-filename",
                    "tagname": "tf-filename",
                    "name": "FileName",
                    "separator": "",
                    "thesaurus_branch": "",
                    "type": "text",
                    "indexable": true,
                    "multivalue": false,
                    "readonly": true,
                    "required": false
                },
                "22": {
                    "id": 22,
                    "namespace": "PHRASEANET",
                    "source": "/rdf:RDF/rdf:Description/PHRASEANET:tf-filepath",
                    "tagname": "tf-filepath",
                    "name": "FilePath",
                    "separator": "",
                    "thesaurus_branch": "",
                    "type": "text",
                    "indexable": false,
                    "multivalue": false,
                    "readonly": true,
                    "required": false
                },
                "23": {
                    "id": 23,
                    "namespace": "PHRASEANET",
                    "source": "/rdf:RDF/rdf:Description/PHRASEANET:tf-recordid",
                    "tagname": "tf-recordid",
                    "name": "Recordid",
                    "separator": "",
                    "thesaurus_branch": "",
                    "type": "number",
                    "indexable": false,
                    "multivalue": false,
                    "readonly": true,
                    "required": false
                },
                "24": {
                    "id": 24,
                    "namespace": "PHRASEANET",
                    "source": "/rdf:RDF/rdf:Description/PHRASEANET:tf-mimetype",
                    "tagname": "tf-mimetype",
                    "name": "MimeType",
                    "separator": "",
                    "thesaurus_branch": "",
                    "type": "text",
                    "indexable": false,
                    "multivalue": false,
                    "readonly": true,
                    "required": false
                },
                "25": {
                    "id": 25,
                    "namespace": "PHRASEANET",
                    "source": "/rdf:RDF/rdf:Description/PHRASEANET:tf-size",
                    "tagname": "tf-size",
                    "name": "Size",
                    "separator": "",
                    "thesaurus_branch": "",
                    "type": "number",
                    "indexable": false,
                    "multivalue": false,
                    "readonly": true,
                    "required": false
                },
                "26": {
                    "id": 26,
                    "namespace": "PHRASEANET",
                    "source": "/rdf:RDF/rdf:Description/PHRASEANET:tf-extension",
                    "tagname": "tf-extension",
                    "name": "Extension",
                    "separator": "",
                    "thesaurus_branch": "",
                    "type": "text",
                    "indexable": false,
                    "multivalue": false,
                    "readonly": true,
                    "required": false
                },
                "27": {
                    "id": 27,
                    "namespace": "PHRASEANET",
                    "source": "/rdf:RDF/rdf:Description/PHRASEANET:tf-width",
                    "tagname": "tf-width",
                    "name": "Width",
                    "separator": "",
                    "thesaurus_branch": "",
                    "type": "number",
                    "indexable": false,
                    "multivalue": false,
                    "readonly": true,
                    "required": false
                },
                "28": {
                    "id": 28,
                    "namespace": "PHRASEANET",
                    "source": "/rdf:RDF/rdf:Description/PHRASEANET:tf-height",
                    "tagname": "tf-height",
                    "name": "Height",
                    "separator": "",
                    "thesaurus_branch": "",
                    "type": "number",
                    "indexable": false,
                    "multivalue": false,
                    "readonly": true,
                    "required": false
                },
                "29": {
                    "id": 29,
                    "namespace": "PHRASEANET",
                    "source": "/rdf:RDF/rdf:Description/PHRASEANET:tf-bits",
                    "tagname": "tf-bits",
                    "name": "Bits",
                    "separator": "",
                    "thesaurus_branch": "",
                    "type": "number",
                    "indexable": false,
                    "multivalue": false,
                    "readonly": true,
                    "required": false
                },
                "30": {
                    "id": 30,
                    "namespace": "PHRASEANET",
                    "source": "/rdf:RDF/rdf:Description/PHRASEANET:tf-channels",
                    "tagname": "tf-channels",
                    "name": "Channels",
                    "separator": "",
                    "thesaurus_branch": "",
                    "type": "number",
                    "indexable": false,
                    "multivalue": false,
                    "readonly": true,
                    "required": false
                }
            }
        }
    }