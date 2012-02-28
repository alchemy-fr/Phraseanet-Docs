Databox Collections
===================

About
-----

  Return available Collections on specified databox

  .. code-block:: bash

    /api/v1/databoxes/{databox_id}/collections/

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

  ============= ================================
  Field          Description
  ============= ================================
   Collections   The list of available collections
  ============= ================================

Response sample
---------------

  .. code-block:: javascript

    {
        "meta": {
            "api_version": "1.0",
            "request": "GET /api/v1/databoxes/52/collections/",
            "response_time": "2011-07-27T11:10:44+02:00",
            "http_code": 200,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "collections": {
                "1": {
                    "base_id": 17,
                    "coll_id": 1,
                    "name": "dfgsdfg",
                    "record_amount": 985
                 },
                "2": {
                    "base_id": 18,
                    "coll_id": 2,
                    "name": "testdeactivate",
                    "record_amount": 0
                },
                "45": {
                    "base_id": 95,
                    "coll_id": 45,
                    "name": "test_collection",
                    "record_amount": 0
                },
                "80": {
                    "base_id": 130,
                    "coll_id": 80,
                    "name": "test_collection",
                    "record_amount": 0
                },
                "81": {
                    "base_id": 131,
                    "coll_id": 81,
                    "name": "test_collection",
                    "record_amount": 0
                },
                "82": {
                    "base_id": 132,
                    "coll_id": 82,
                    "name": "test_collection",
                    "record_amount": 0
                },
                "83": {
                    "base_id": 133,
                    "coll_id": 83,
                    "name": "test_collection",
                    "record_amount": 1
                },
                "84": {
                    "base_id": 134,
                    "coll_id": 84,
                    "name": "test_collection",
                    "record_amount": 1
                },
                "85": {
                    "base_id": 135,
                    "coll_id": 85,
                    "name": "test_collection",
                    "record_amount": 1
                },
                "86": {
                    "base_id": 136,
                    "coll_id": 86,
                    "name": "test_collection",
                    "record_amount": 1
                },
                "95": {
                    "base_id": 145,
                    "coll_id": 95,
                    "name": "test_collection",
                    "record_amount": 1
                }
            }
        }
    }