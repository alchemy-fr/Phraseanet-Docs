Me fields access
================

About
-----

Returns all fields available for authenticated user (documentary, aggregable and technical_fields).

.. code-block:: bash

    /api/v1/me/structures

======================== ======
 Informations
======================== ======
 HTTP Method              GET
 Requires Authentication  Yes
======================== ======

Response Fields
---------------

================== ==========================================
 Field              Description
================== ==========================================
 meta_fields        Documentary field informations
 aggregable_fields  Aggregable field informations
 technical_fields   Technical field informations
================== ==========================================

Query Sample
------------

.. code-block:: bash

    curl -v https://mydomain.tld/api/v1/me/meta_fields?oauth_token=xxxxxxx

Response sample
---------------

.. code-block:: json

    {
      "meta": {
        "api_version": "2.0.0",
        "request": "GET /api/v1/me/structures/",
        "response_time": "2021-06-23T19:23:55+02:00",
        "http_code": 200,
        "error_type": null,
        "error_message": null,
        "error_details": null,
        "charset": "UTF-8"
      },
      "response": {
        "meta_fields": [
          {
            "name": "RecordId",
            "id": 23,
            "databox_id": 68,
            "multivalue": false,
            "indexable": true,
            "readonly": true,
            "business": false,
            "source": "Phraseanet:tf-recordid",
            "labels": {
              "fr": "RecordId",
              "en": "RecordId",
              "de": "RecordId",
              "nl": "RecordId"
            }
          },
          {
            "name": "Type",
            "id": 28,
            "databox_id": 68,
            "multivalue": true,
            "indexable": true,
            "readonly": false,
            "business": false,
            "source": "XMP-dc:Type",
            "labels": {
              "fr": "Type de ressource",
              "en": "Type",
              "de": "Type",
              "nl": "Type"
            }
          },
          {
            "name": "Language",
            "id": 29,
            "databox_id": 68,
            "multivalue": true,
            "indexable": true,
            "readonly": false,
            "business": false,
            "source": "XMP-dc:Language",
            "labels": {
              "fr": "Langue",
              "en": "Language",
              "de": "Language",
              "nl": "Language"
            }
          }
        ],
        "aggregable_fields": [
          {
            "name": "_base",
            "type": "string",
            "label": "prod::facet:base_label",
            "field": "database",
            "esfield": "databox_name",
            "query": "database:%s"
          },
          {
            "name": "_collection",
            "type": "string",
            "label": "prod::facet:collection_label",
            "field": "collection",
            "esfield": "collection_name",
            "query": "collection:%s"
          },
          {
            "name": "_aperture",
            "type": "number",
            "label": "Aperture",
            "field": "meta.Aperture",
            "esfield": "metadata_tags.Aperture",
            "query": "meta.Aperture=%s",
            "output_formatter": {}
          }
        ],
        "technical_fields": [
          {
            "name": "Width",
            "method": "getWidth",
            "type": "integer",
            "analyzable": false
          },
          {
            "name": "Height",
            "method": "getHeight",
            "type": "integer",
            "analyzable": false
          },
          {
            "name": "FocalLength",
            "method": "getFocalLength",
            "type": "float",
            "analyzable": false
          }
        ]
      }
    }