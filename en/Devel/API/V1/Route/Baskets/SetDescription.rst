Baskets SetDescription
======================

About
-----

Sets a description to a given basket.

.. code-block:: bash

    /api/v1/baskets/{basket_id}/setdescription/

======================== =====
 Information
======================== =====
 HTTP Method              POST
 Requires Authentication  Yes
======================== =====

Parameters
----------

======================== ============== =============
 Parameters               Type           Information
======================== ============== =============
 basket_id                integer        The basket_id of the selected basket
 description              string         The description of the basket
======================== ============== =============

Response Fields
---------------

============= ================================
 Field         Description
============= ================================
 basket        The basket
============= ================================

Response sample
---------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "POST /api/v1/baskets/148/setdescription/",
            "response_time": "2012-06-29T18:27:28+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "basket": {
            "basket_id": 148,
            "owner": {
                "@entity@": "http://api.phraseanet.com/api/objects/user",
                "id": 4,
                "email": "imprec@gmail.com",
                "login": "admin",
                "first_name": "Romain",
                "last_name": "Neutron",
                "display_name": "imprec@gmail.com",
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
                "last_connection": "2014-03-02T12:01:22+02:00",
                "created_on": "2012-10-02T09:46:40+02:00",
                "updated_on": "2012-10-02T09:46:40+02:00",
                "locale": "en_GB"
            },
            "created_on": "2012-06-29T18:19:30+02:00",
            "description": "my description here",
            "name": "test",
            "pusher_usr_id": null,
            "pusher": null,
            "updated_on": "2012-06-29T18:27:29+02:00",
            "unread": false,
            "validation_basket": false
            }
        }
    }
