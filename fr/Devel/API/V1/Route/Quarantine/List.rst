Quarantine list
===============

About
-----

  List the content of the quarantine

  .. code-block:: bash

    /api/v1/quarantine/list/

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
   offset_start             integer        the first entry to retrive
   per_page	                           the number of entry to retrieve
  ======================== ============== =============

Response Fields
---------------

  ============== ================================
   Field          Description
  ============== ================================
   offset_start
   per_page
   items          The list of items
  ============== ================================

Response sample
---------------

  .. code-block:: javascript

    {
        "meta": {
            "api_version": "1.2",
            "request": "GET /api/v1/quarantine/list/",
            "response_time": "2012-06-13T15:59:58+02:00",
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
                    "id": 145,
                    "session": {
                        "id": 145,
                        "usr_id": 3
                    },
                    "base_id": 3,
                    "original_name": "photo04.JPG",
                    "sha256": "fd4f8462d493e857dc1d25c99c70eae0b1daf3fde81b749c8ae3f93bcfdc2975",
                    "uuid": "20a4bfe1-107a-48c2-ae4a-12aa79c06894",
                    "forced": false,
                    "checks": [
                        "A file with the same checksum already exists in database"
                    ],
                    "created_on": "2012-06-13T13:49:34+02:00",
                    "updated_on": "2012-06-13T13:49:34+02:00"
                },
                {
                    "id": 144,
                    "session": {
                        "id": 144,
                        "usr_id": 3
                    },
                    "base_id": 3,
                    "original_name": "glitch_slide_slide.jpg",
                    "sha256": "507dc70db2b936847d63aadc85aff967bd165630604e3d6f5fd460ae55e2636a",
                    "uuid": "fdd7ae83-0476-4833-93c5-820e630df37d",
                    "forced": false,
                    "checks": [
                        "A file with the same checksum already exists in database"
                    ],
                    "created_on": "2012-06-12T17:26:22+02:00",
                    "updated_on": "2012-06-12T17:26:22+02:00"
                }
            ]
        }
    }