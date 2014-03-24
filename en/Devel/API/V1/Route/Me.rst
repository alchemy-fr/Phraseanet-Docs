Me
==

About
-----

Returns information about the authenticated user.

.. code-block:: bash

    /api/v1/me/

======================== ======
 Informations
======================== ======
 HTTP Method              GET
 Requires Authentication  Yes
======================== ======


Response Fields
---------------

================== ================================
 Field              Description
================== ================================
user                User's information
================== ================================

Query Sample
------------

.. code-block:: bash

    curl -v https://mydomain.tld/api/v1/me/?oauth_token=xxxxxxx

Response sample
---------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/me/",
            "response_time": "2014-03-21T14:35:04+01:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "user": {
                "@entity@": "http://api.phraseanet.com/api/objects/user",
                "id": 3,
                "email": "john.doe@domain.com",
                "login": "john",
                "first_name": null,
                "last_name": null,
                "display_name": "john doe",
                "gender": "Mr",
                "address": null,
                "zip_code": null,
                "city": null,
                "country": null,
                "phone": null,
                "fax": null,
                "job": null,
                "position": null,
                "company": null,
                "geoname_id": null,
                "last_connection": "-0001-11-30T00:00:00+00:09",
                "created_on": "2014-03-20T17:24:57+01:00",
                "updated_on": "-0001-11-30T00:00:00+00:09",
                "locale": "fr_FR"
            }
        }
    }
