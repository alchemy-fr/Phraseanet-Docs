Records SetMetadatas
====================

About
-----

  Return 

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

  ============ ======= =============
   Parameters   Value   Information 
  ============ ======= =============
   databox_id   94      The databox id of the record
   record_id    5694    The record_id
   metadatas    Array   An array of metadatas, each metadatas is an array itself with three keys : meta_struct_id (int), meta_id (int or null) and value (Array)
  ============ ======= =============
  
Response Fields
---------------

  ========== ================================
   Field      Description
  ========== ================================
   metadatas 	The list of the metadatas of the record 
  ========== ================================

** Example **

  .. code-block:: javascript

    metadatas[0][meta_struct_id]=1&
    metadatas[0][meta_id]=&
    metadatas[0][value][0]=prettystring&
    metadatas[1][meta_struct_id]=3&
    metadatas[1][meta_id]=487&
    metadatas[1][value][0]=onekeyword&
    metadatas[1][value][1]=twokeyword&
    metadatas[2][meta_struct_id]=7&
    metadatas[2][meta_id]=489&
    metadatas[2][value][]=&

is equivalent to 

  .. code-block:: javascript

    metadatas = {
        {
            meta_struct_id: 1,     // current metadata refers to metadata structure id '1' ; see [[routes:databoxes:metadatas]]
            meta_id: null,         // current meta_id refers to caption's field meta id ; see [[routes:records:metadatas]] ; this case, meta_id is null because there's currently no value set, the field will be created
            value : [              // value is always an Array ; for mono-valued metadatas, if array length is > 1, values are serialized with a space separator
                'A pretty string'
            ]
        },
        {
            meta_struct_id: 3,
            meta_id: 487,          // this case, meta_id is not null because there's currently some datas, the field will be updated
            value: [
                'one key word',
                'two key word'
            ]
        },
        {
            meta_struct_id: 7,
            meta_id: 489,
            value: []              // this case, the value is empty, the field will be deleted
        }
    }


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
                    "value": "prettystring"
                },
                "487": {
                    "meta_id": 487,
                    "meta_structure_id": 3,
                    "name": "Categorie",
                    "value": [
                        "onekeyword",
                        "twokeyword"
                    ]
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