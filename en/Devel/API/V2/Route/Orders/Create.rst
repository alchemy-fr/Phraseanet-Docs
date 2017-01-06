Orders Create
=============

About
-----

Creates a new order.

.. code-block:: bash

    /api/v2/orders/

======================== ======
 Information
======================== ======
 HTTP Method              POST
 Requires Authentication  Yes
======================== ======

Request Body
------------

.. code-block:: javascript

    {
        "data": [
            {
                "databox_id": 1,
                "record_id": 118
            }
        ]
    }

Response Fields
---------------

============= ================================
 Field         Description
============= ================================
 data          The created order
============= ================================

Response sample
---------------

.. code-block:: javascript

    {
      "meta": {
        "api_version": "2.0.0",
        "request": "POST /api/v2/orders/",
        "response_time": "2016-03-23T18:11:34+01:00",
        "http_code": 200,
        "error_type": null,
        "error_message": null,
        "error_details": null,
        "charset": "UTF-8"
      },
      "response": {
        "data": {
          "id": 23,
          "owner_id": 1,
          "created": "2016-03-23T18:11:34+01:00",
          "usage": "Intended usage of the records",
          "deadline": "2016-04-01T00:00:00+00:00",
          "elements": {
            "data": [
              {
                "id": 11,
                "record": {
                  "databox_id": 1,
                  "record_id": 118
                }
              }
            ]
          }
        }
      }
    }
