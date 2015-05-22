Root
====

About
-----

Available since Phraseanet 1.2, this route provides public information
about the Phraseanet API. This route is not versionned.

.. code-block:: bash

    /api/

======================== =====
 Information
======================== =====
 HTTP Method              GET
 Requires Authentication  NO
======================== =====

Example of use
--------------

.. code-block:: javascript

    curl -v https://library.net/api/

Parameters
----------

No parameters for this route

Response Fields
---------------

=============== ================================
 Field           Description
=============== ================================
 name            Install title
 type            Application type (phraseanet)
 description     Install description
 documentation   API documentation link
 version         Available API versions and their parameters
=============== ================================

Response sample
---------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/",
            "response_time": "2012-06-13T15:19:13+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "name": "My library",
            "type": "phraseanet",
            "description": "A library where I put all my files",
            "documentation": "https://docs.phraseanet.com/Devel",
            "versions": {
                "1": {
                    "number": "1.2",
                    "uri": "/api/v1/",
                    "authenticationProtocol": "OAuth2",
                    "authenticationVersion": "draft#v9",
                    "authenticationEndPoints": {
                        "authorization_token": "/api/oauthv2/authorize",
                        "access_token": "/api/oauthv2/token"
                    }
                }
            }
        }
    }
