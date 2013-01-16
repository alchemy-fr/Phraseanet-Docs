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
                "usr_id": 3
                },
                "base_id": 1,
                "original_name": "Forest.jpg",
                "sha256": "0571c9928d44b9de11ae37807a6461e77a5f8f35df464bd2c612cb0a27a14ae7",
                "uuid": "b5e70c18-75af-4a24-be55-f6babb7d7548",
                "forced": false,
                "checks": [
                "A file with the same checksum already exists in database"
                ],
                "created_on": "2012-06-18T15:34:58+02:00",
                "updated_on": "2012-06-18T15:34:58+02:00"
            },
            {
                "id": 213,
                "quarantine_session": {
                "id": 213,
                "usr_id": 3
                },
                "base_id": 1,
                "original_name": "Desert Landscape.jpg",
                "sha256": "1e955a3e781bf1ceb9e0a58363f6fe63521bcb45d2d0eead7cd435dda921206c",
                "uuid": "0524a31e-00ae-4632-9bcd-a2493001817b",
                "forced": false,
                "checks": [
                "A file with the same checksum already exists in database"
                ],
                "created_on": "2012-06-18T15:34:50+02:00",
                "updated_on": "2012-06-18T15:34:50+02:00"
            }
            ]
        }
    }
