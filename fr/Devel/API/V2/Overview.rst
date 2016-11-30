API v2 Overview
==================

Phraseanet API uses standard HTTP v1.1. Requests are
GET, POST, PUT or POST requests, returning JSON.

Parameters must be sent as a JSON Body or Http query parameters depending on the used route.
Clients *MUST* set Content-Type header to application/json when a body is required.
Clients *MUST* set Accept header to application/json for all requests.

As Phraseanet API uses oAuth2 for authentication, you have to setup your
server/do you requests with https.

Quotas
------

There are no Rate Limits in v2, so you do as many requests as you wish.

Public Access
-------------

There are no public access to Phraseanet API for the moment

Responses
---------

All responses are wrapped in an object containing two fields: response and
meta. Response is by default sent as JSON data.

.. note::

    An optional **timers** fields, providing an array of timers, can be
    retrieved by activating this feature. Read the
    :doc:`configuration <../../../Admin/Configuration>` doc to enable it.

Timer example:

.. code-block:: javascript

    {
        "meta": {
            ....
        },
        "response": {
            ....
        },
        "timers": [
            {
              "name": "api.load.end",
              "memory": 1908328,
              "time": 0.0025968551635742
            },
            {
              "name": "api.result",
              "memory": 3885680,
              "time": 0.033026933670044
            }
        ]
    }

Json
~~~~

Request:

.. code-block:: bash

    curl -H 'Accept: application/json' ...

Response:

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/feeds/288/content/",
            "response_time": "2011-07-27T15:52:04+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            ....
        }
    }

Errors
------

The meta section contains few values, among "http_code", "error_message" and
"error details".

Phraseanet API uses the appropriate HTTP status codes.

This code is repeated in the meta of the response, and the error_message is
added.

You will find explanation below:

=========== =======
HTTP Code   Meaning
=========== =======
400         Parameter is invalid or missing
401         The OAuth token was provided but was invalid
403         Access to the requested resource is forbidden
404         Requested resource is not found
405         Attempting to use POST with a GET-only endpoint, or vice versa
500         Internal Server Error
=========== =======

