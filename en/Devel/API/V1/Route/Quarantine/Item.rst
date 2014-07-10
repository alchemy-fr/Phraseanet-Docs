Quarantine item
===============

About
-----

Return an item of the quarantine given its Id

.. code-block:: bash

    /api/v1/quarantine/item/{quarantine_id}/

======================== =====
 Informations
======================== =====
 HTTP Method              GET
 Requires Authentication  Yes
======================== =====

Parameters
----------

======================== ============== =============
 Parameters               Type           Information
======================== ============== =============
 quarantine_id            integer        The id of the item
======================== ============== =============

Response Fields
---------------

============== ================================
 Field          Description
============== ================================
 item           The item
============== ================================

Response sample
---------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/quarantine/item/136/",
            "response_time": "2012-06-13T16:11:18+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "quarantine_item": {
                "id": 136,
                "session": {
                    "id": 136,
                    "usr_id": 3,
                    "user": {
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
                    }
                },
                "base_id": 3,
                "original_name": "Tree.jpg",
                "sha256": "eda6790b95f6fbeeba32e120d9113fd8f71070a16c110c1018d2accd2b3175e0",
                "uuid": "bec1c9b3-4812-4f31-acc6-621f3f664760",
                "forced": false,
                "checks": [
                    "A file with the same checksum already exists in database"
                ],
                "created_on": "2012-06-01T12:35:14+02:00",
                "updated_on": "2012-06-01T12:35:14+02:00"
            }
        }
    }
