Baskets List
============

About
-----

Return the baskets list of the authenticated user

.. code-block:: bash

    /api/v1/baskets/list/

======================== =====
 Informations
======================== =====
 HTTP Method              GET
 Requires Authentication  Yes
======================== =====

Parameters
----------

No parameters for this route

Response Fields
---------------

============= ================================
 Field         Description
============= ================================
 baskets       The list of my baskets
============= ================================

Response sample
---------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/baskets/list/",
            "response_time": "2012-06-29T16:30:46+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "baskets": [
            {
                "basket_id": 145,
                "created_on": "2012-06-18T18:15:39+02:00",
                "owner": {
                    "@entity@": "http://api.phraseanet.com/api/objects/user",
                    "id": 3,
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
                "description": "",
                "name": "my basket",
                "pusher_usr_id": 3,
                "pusher": {
                    "@entity@": "http://api.phraseanet.com/api/objects/user",
                    "id": 3,
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
                "ssel_id": 145,
                "updated_on": "2012-06-21T15:51:48+02:00",
                "unread": false,
                "validation_basket": false
            },
            {
                "validation_users": [
                {
                    "usr_id": 3,
                    "usr_name": "user@example.com",
                    "user": {
                        "@entity@": "http://api.phraseanet.com/api/objects/user",
                        "id": 3,
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
                    "confirmed": false,
                    "can_agree": true,
                    "can_see_others": true,
                    "readonly": false
                },
                {
                    "usr_id": 722,
                    "usr_name": "admin@example.com",
                    "user": {
                        "@entity@": "http://api.phraseanet.com/api/objects/user",
                        "id": 722,
                        "email": "admin@example.com",
                        "login": "admin",
                        "first_name": null,
                        "last_name": null,
                        "display_name": "admin@example.com",
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
                    "confirmed": false,
                    "can_agree": true,
                    "can_see_others": true,
                    "readonly": true
                }
                ],
                "validation_end_date": "2012-07-18T14:54:02+02:00",
                "validation_infos": "Vous avez envoyé cette demande à 1 utilisateurs",
                "validation_confirmed": false,
                "validation_initiator": true,
                "validation_initiator_user": {
                    "@entity@": "http://api.phraseanet.com/api/objects/user",
                    "id": 3,
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
                "basket_id": 146,
                "created_on": "2012-06-28T14:54:01+02:00",
                "owner": {
                    "@entity@": "http://api.phraseanet.com/api/objects/user",
                    "id": 3,
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
                "description": "",
                "name": "Panier de validation",
                "pusher_usr_id": 3,
                "pusher": {
                    "@entity@": "http://api.phraseanet.com/api/objects/user",
                    "id": 3,
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
                "ssel_id": 146,
                "updated_on": "2012-06-28T16:07:25+02:00",
                "unread": false,
                "validation_basket": true
            }
            ]
        }
    }
