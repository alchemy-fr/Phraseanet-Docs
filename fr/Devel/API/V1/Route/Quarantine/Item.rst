Récupérer un document de la quarantaine
=======================================

A propos
--------

Retourne un document de la quarantaine.

.. code-block:: bash

    /api/v1/quarantine/item/{quarantine_id}/

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
 quarantine_id            entier         L'identifiant du document placé dans la quarantaine
======================== ============== =============

Attribut de la réponse
----------------------

============== ================================
 Attribut       Description
============== ================================
 item           L'item sélectionné
============== ================================

Exemple de réponse
------------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "2.0.0",
            "request": "GET /api/v1/quarantine/item/24/",
            "response_time": "2018-04-25T10:35:12+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "quarantine_item": {
                "id": 24,
                "quarantine_session": {
                    "id": 29,
                    "usr_id": 3,
                    "user": {
                        "@entity@": "http://api.phraseanet.com/api/objects/user",
                        "id": 3,
                        "email": "nobody@nodomaine",
                        "login": "admin",
                        "first_name": "Louise",
                        "last_name": "Laferrière",
                        "display_name": "Louise Laferrière",
                        "gender": "Miss",
                        "address": "30 place Saint-Georges",
                        "zip_code": "75009",
                        "city": "Paris 09 Opéra",
                        "country": "FR",
                        "phone": "No way!",
                        "fax": null,
                        "job": null,
                        "position": "Stunt",
                        "company": "Alchemy",
                        "geoname_id": 2989487,
                        "last_connection": "-0001-11-30T00:00:00+00:09",
                        "created_on": "2013-11-06T08:54:32+01:00",
                        "updated_on": "2018-04-25T09:53:44+02:00",
                        "locale": "en"
                    }
                },
                "base_id": 53,
                "original_name": "picjumbo.com_20140314-DSC_0138.jpg",
                "sha256": "87586a092ccde3c4b386e26aeed4eed6f7fa31b751eeaf37632a1d5b3cf0d85a",
                "uuid": "c50c29d1-6cc7-4cf0-9cb1-0a3ada880463",
                "forced": false,
                "checks": {
                    "Sha256": "A file with the same checksum already exists in the database",
                    "UUID": "A file with the same UUID already exists in the database",
                    "Extension": "The file does not match available extensions"
                },
                "records_match": [
                    {
                        "record_id": 81,
                        "collection": "foodista",
                        "checks": {
                            "Sha256": "A file with the same checksum already exists in the database",
                            "UUID": "A file with the same UUID already exists in the database"
                        }
                    }
                ],
                "created_on": "2018-04-25T09:55:29+02:00",
                "updated_on": "2018-04-25T09:55:29+02:00"
            }
        }
    }
