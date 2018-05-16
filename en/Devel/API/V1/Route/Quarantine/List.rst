Quarantine list
===============

About
-----

Lists the content of the quarantine.

.. code-block:: bash

    /api/v1/quarantine/list/

======================== =====
 Information
======================== =====
 HTTP Method              GET
 Requires Authentication  Yes
======================== =====

Parameters
----------

======================== ============== =============
 Parameters               Type           Information
======================== ============== =============
 offset_start             integer        The first entry to retrive
 per_page                 integer        The number of entry to retrieve
======================== ============== =============

Response Fields
---------------

================== ================================
 Field              Description
================== ================================
 offset_start       The first entry
 per_page           The number of entry
 quarantine_items   The list of items
================== ================================

Response sample
---------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "2.0.0",
            "request": "GET /api/v1/quarantine/list/",
            "response_time": "2018-04-25T10:39:32+02:00",
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
                    "id": 25,
                    "quarantine_session": {
                        "id": 30,
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
                    "original_name": "picjumbo.com_foodiesfeed.com_DSC_0002.jpg",
                    "sha256": "7053b29a28a637161b0966983a2f49206fe2ec59131341048f3c6e7089aed654",
                    "uuid": "ea01375e-3f67-4734-b54d-967d269e3ba9",
                    "forced": false,
                    "checks": [
                        "Un fichier avec la même somme de contrôle existe déjà dans la base de données",
                        "Un fichier avec le même UUID existe déjà dans la base de données"
                    ],
                    "created_on": "2018-04-25T10:39:16+02:00",
                    "updated_on": "2018-04-25T10:39:16+02:00"
                },
                {
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
                    "checks": [
                        "Un fichier avec la même somme de contrôle existe déjà dans la base de données",
                        "Un fichier avec le même UUID existe déjà dans la base de données"
                    ],
                    "created_on": "2018-04-25T09:55:29+02:00",
                    "updated_on": "2018-04-25T09:55:29+02:00"
                }
            ]
        }
    }
