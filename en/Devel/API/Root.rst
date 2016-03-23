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
                "api_version": "2.0.0",
                "request": "GET /api/",
                "response_time": "2016-03-23T17:20:00+01:00",
                "http_code": 200,
                "error_type": null,
                "error_message": null,
                "error_details": null,
                "charset": "UTF-8"
          },
          "response": {
                "name": "Phraseanet",
                "type": "phraseanet",
                "description": null,
                "documentation": "https://docs.phraseanet.com/Devel",
                "versions": {
                      "1": {
                            "number": "1.5.0",
                            "uri": "/api/v1/",
                            "authenticationProtocol": "OAuth2",
                            "authenticationVersion": "draft#v9",
                            "authenticationEndPoints": {
                                  "authorization_token": "/api/oauthv2/authorize",
                                  "access_token": "/api/oauthv2/token"
                            }
                      },
                      "2": {
                            "number": "2.0.0",
                            "uri": "/api/v2/",
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
