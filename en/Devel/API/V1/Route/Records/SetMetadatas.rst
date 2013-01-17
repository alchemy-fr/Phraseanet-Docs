Records SetMetadatas
====================

About
-----

Add, modify current record's metadatas

.. code-block:: bash

    /api/v1/records/{databox_id}/{record_id}/setmetadatas/

======================== =====
 Informations
======================== =====
 HTTP Method              POST
 Requires Authentication  Yes
======================== =====

Parameters
----------

================== ========= =============
 Parameters         Type      Information
================== ========= =============
 databox_id         integer   The databox id of the record
 record_id          integer   The record_id
 metadatas          array     An array of metadatas, each metadatas is an array itself with three keys : meta_struct_id (int), meta_id (int or null) and value (Array)
================== ========= =============

Response Fields
---------------

================== ================================
 Field               Description
================== ================================
 record_metadatas    The list of the metadatas of the record
================== ================================

** Example **

.. code-block:: javascript

    metadatas[0][meta_struct_id]=1&
    metadatas[0][meta_id]=&
    metadatas[0][value]=prettystring&
    metadatas[1][meta_struct_id]=3&
    metadatas[1][meta_id]=487&
    metadatas[1][value]=onekeyword&
    metadatas[2][meta_struct_id]=3&
    metadatas[2][meta_id]=488&
    metadatas[2][value]=twokeyword&
    metadatas[3][meta_struct_id]=7&
    metadatas[3][meta_id]=489&
    metadatas[3][value]=&

is equivalent to

.. code-block:: javascript

    record_metadatas = {
        {
            meta_struct_id: 1,        // current metadata refers to metadata structure id '1' ; see [[routes:databoxes:metadatas]]
            meta_id: null,            // current meta_id refers to caption's field meta id ; see [[routes:records:metadatas]] ; this case, meta_id is null because there's currently no value set, the field will be created
            value : 'A pretty string' // value is always a String
        },
        {
            meta_struct_id: 3,
            meta_id: 487,          // this case, meta_id is not null because there's currently some datas, the field will be updated
            value: 'one key word'
        },
        {
            meta_struct_id: 3,
            meta_id: 488,          // this case, meta_id is not null because there's currently some datas, the field will be updated
            value: 'two key word'
        },
        {
            meta_struct_id: 7,
            meta_id: 489,
            value: ''              // this case, the value is empty, the field will be deleted
        }
    }

Response sample
---------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/records/52/5780/metadatas/",
            "response_time": "2011-07-27T12:55:47+02:00",
            "http_code": 200,
            "error_type": null,
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
                    "value": "prettystring"
                },
                "487": {
                    "meta_id": 487,
                    "meta_structure_id": 3,
                    "name": "Categorie",
                    "value": "onekeyword"
                },
                "488": {
                    "meta_id": 488,
                    "meta_structure_id": 3,
                    "name": "Categorie",
                    "value": "twokeyword"
                }
            }
        }
    }
