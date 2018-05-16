Lister les documents de la quarantaine
======================================

A propos
--------

Liste les documents contenu dans la quarantaine

.. code-block:: bash

    /api/v1/quarantine/list/

========================== =====
 Informations
========================== =====
 Méthode HTTP               GET
 Authentification requise   Oui
========================== =====

Paramètres
----------

======================== ============== =============
 Paramètres               Type           Information
======================== ============== =============
 offset_start             entier         Le numéro de la première entrée à retrouver
 per_page                 entier         Le nombre d'entrées à retrouver
======================== ============== =============

Attribut de la réponse
----------------------

================== ================================
 Attribut              Description
================== ================================
 offset_start       Le numéro de la première entrée
 per_page           Le nombre d'entrée à retrouver
 quarantine_items   La liste des items
================== ================================

Exemple de réponse
------------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/quarantine/list/",
            "response_time": "2012-06-29T17:53:35+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "offset_start": 0,
            "per_page": 10,
            "quarantine_items": [
            {
                "id": 214,
                "quarantine_session": {
                    "id": 214,
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
                "base_id": 1,
                "original_name": "Forest.jpg",
                "collection": "paysage",
                "sha256": "0571c9928d44b9de11ae37807a6461e77a5f8f35df464bd2c612cb0a27a14ae7",
                "uuid": "b5e70c18-75af-4a24-be55-f6babb7d7548",
                "forced": false,
                "checks": {
                    "Sha256": "A file with the same checksum already exists in the database",
                    "UUID": "A file with the same UUID already exists in the database",
                    "Extension": "The file does not match available extensions"
                },
                "records_match": [
                    {
                        "record_id": 103,
                        "collection": "Nature",
                        "checks": {
                            "Sha256": "A file with the same checksum already exists in the database",
                            "UUID": "A file with the same UUID already exists in the database"
                        }
                    }
                ],
                "created_on": "2012-06-18T15:34:58+02:00",
                "updated_on": "2012-06-18T15:34:58+02:00"
            },
            {
                "id": 213,
                "quarantine_session": {
                    "id": 213,
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
                "base_id": 1,
                "original_name": "Desert Landscape.jpg",
                "collection": "paysage",
                "sha256": "1e955a3e781bf1ceb9e0a58363f6fe63521bcb45d2d0eead7cd435dda921206c",
                "uuid": "0524a31e-00ae-4632-9bcd-a2493001817b",
                "forced": false,
                "checks": {
                    "Sha256": "A file with the same checksum already exists in the database",
                    "UUID": "A file with the same UUID already exists in the database",
                    "Extension": "The file does not match available extensions"
                },
                "records_match": [
                    {
                        "record_id": 67,
                        "collection": "paysage",
                        "checks": {
                            "Sha256": "A file with the same checksum already exists in the database",
                            "UUID": "A file with the same UUID already exists in the database"
                        }
                    }
                ],
                "created_on": "2012-06-18T15:34:50+02:00",
                "updated_on": "2012-06-18T15:34:50+02:00"
            }
            ]
        }
    }
