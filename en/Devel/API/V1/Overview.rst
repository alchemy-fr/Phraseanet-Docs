API v1 Overview
==================

The Phraseanet APIs use many standards you can find in other APIs. Requests are
GET or POST requests, returning YAML, JSON or JSONP.

Parameters must be sent as HTTP key / values.

As Phraseanet API uses oAuth2 for authentication, you have to setup your
server/do you requests with https.

Quotas
------

There is no Rate Limit in v1, so you do as many requests as you wish.

Public Access
-------------

There is no public access to Phraseanet API for the moment

Responses
---------

All responses are wrapped in an object containing two fields : response and
meta. Response is by default sent as JSON data.

YAML
~~~~

As of HTTP specification, you have to set an 'Accept' header if you want to
fetch YAML.

Request :

.. code-block:: bash

    curl -H 'Accept: application/yaml' ...

Response :

.. code-block:: yaml

    meta:
      api_version: '1.2'
      request: 'GET /api/v1/feeds/288/content/'
      response_time: '2011-07-27T16:36:33+02:00'
      http_code: 200
      error_type: null
      error_message: null
      error_details: null
      charset: UTF-8
    response:
      ....

Json
~~~~

Request :

.. code-block:: bash

    curl -H 'Accept: application/json' ...

Response :

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

JsonP
~~~~~~

In order to fetch JSONP, you just have to add a callback HTTP parameter to
your request.

Request :

.. code-block:: bash

    curl -H 'Accept: application/json' /api/v1/my/request/?callback=foobar

Please note that in the case of JSONP, the API **always** returns 200
(except for HTTP 500's) so your code can proceed the results ; you can have
the true HTTP Code in the meta section.

Response :

.. code-block:: javascript

    foobar({
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
    })

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
