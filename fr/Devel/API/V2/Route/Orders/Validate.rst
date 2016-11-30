Orders Validation
=================

About
-----

Validate or Reject Order Elements.

.. code-block:: bash

    /api/v2/orders/{orderId}/accept
    /api/v2/orders/{orderId}/deny

======================== ======
 Information
======================== ======
 HTTP Method              POST
 Requires Authentication  Yes
======================== ======

Request Body
------------

Request body contains a list of order element ids to accept/deny

.. code-block:: javascript

    [
        {"id": 1},
        {"id": 2}
    ]

Response sample
---------------

The accept endpoint returns a list of actually accepted elements.

.. code-block:: javascript

    {
        "meta": {
            "api_version": "2.0.0",
            "request": "POST /api/v2/orders/23/accept",
            "response_time": "2016-03-23T18:11:34+01:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "data": [
                    {
                        "id": 42,
                        "created": "2016-03-23T18:11:34+01:00",
                        "databox_id": 1,
                        "record_id": 118,
                        "index": 1
                    }
                ]
            }
        }
    }

Currently deny endpoint returns an empty response.
