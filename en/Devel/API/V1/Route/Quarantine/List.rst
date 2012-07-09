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
   per_page	                integer        The number of entry to retrieve
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
            "api_version": "1.2",
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
            },
            {
                "id": 212,
                "quarantine_session": {
                "id": 212,
                "usr_id": 3
                },
                "base_id": 1,
                "original_name": "Creek.jpg",
                "sha256": "11336bfe04f58e0ec4ee5be95eeb7eb699d87700c0ce750930fbf777cc6b1d97",
                "uuid": "1f7cf5b6-de3c-4d91-bff8-faa4b55b7911",
                "forced": false,
                "checks": [
                "A file with the same checksum already exists in database"
                ],
                "created_on": "2012-06-18T15:34:46+02:00",
                "updated_on": "2012-06-18T15:34:46+02:00"
            },
            {
                "id": 211,
                "quarantine_session": {
                "id": 211,
                "usr_id": 3
                },
                "base_id": 1,
                "original_name": "Autumn Leaves.jpg",
                "sha256": "dc61b7c7cc09f346350503cfada199372db4837702e217e37ee0ab9febbf65e9",
                "uuid": "0846cf7f-777e-47be-b360-b915fdd51a10",
                "forced": false,
                "checks": [
                "A file with the same checksum already exists in database"
                ],
                "created_on": "2012-06-18T15:34:41+02:00",
                "updated_on": "2012-06-18T15:34:41+02:00"
            },
            {
                "id": 210,
                "quarantine_session": {
                "id": 210,
                "usr_id": 3
                },
                "base_id": 1,
                "original_name": "Smoke_V1_1022.jpg",
                "sha256": "c92b6eab1aa079c3844703bc6f0927fca7583bf265ccc406d96f334623818d21",
                "uuid": "c2073d7d-7401-45ec-bf36-8c006824c290",
                "forced": false,
                "checks": [
                "A file with the same checksum already exists in database"
                ],
                "created_on": "2012-06-18T15:34:11+02:00",
                "updated_on": "2012-06-18T15:34:11+02:00"
            },
            {
                "id": 209,
                "quarantine_session": {
                "id": 209,
                "usr_id": 3
                },
                "base_id": 1,
                "original_name": "Waterfall.jpg",
                "sha256": "8e04b5fe1a89a119c81073ad0fa7c680e0c467a26b0d8a7bf83d974bb209a733",
                "uuid": "595d87ba-52bc-461a-83fd-60f701bcc5b9",
                "forced": false,
                "checks": [
                "A file with the same checksum already exists in database"
                ],
                "created_on": "2012-06-18T15:32:58+02:00",
                "updated_on": "2012-06-18T15:32:58+02:00"
            },
            {
                "id": 208,
                "quarantine_session": {
                "id": 208,
                "usr_id": 3
                },
                "base_id": 1,
                "original_name": "Tree.jpg",
                "sha256": "b3f7ec4125ef7e6139b1dd5186f5b665c9f3c33cde77cdf5e583b7477784331c",
                "uuid": "e41ab3bc-7e9f-42bc-b226-0c9e81ffc516",
                "forced": false,
                "checks": [
                "A file with the same checksum already exists in database"
                ],
                "created_on": "2012-06-18T15:32:54+02:00",
                "updated_on": "2012-06-18T15:32:54+02:00"
            },
            {
                "id": 207,
                "quarantine_session": {
                "id": 207,
                "usr_id": 3
                },
                "base_id": 1,
                "original_name": "Winter Leaves.jpg",
                "sha256": "b88c54962bc50c8c015e881ec463e2d7a21508fd477427cf93ccfa6b841d15ef",
                "uuid": "7b36f93a-9a07-4b04-97c1-82438e6c95d5",
                "forced": false,
                "checks": [
                "A file with the same checksum already exists in database"
                ],
                "created_on": "2012-06-18T15:32:33+02:00",
                "updated_on": "2012-06-18T15:32:33+02:00"
            },
            {
                "id": 206,
                "quarantine_session": {
                "id": 206,
                "usr_id": 3
                },
                "base_id": 1,
                "original_name": "Waterfall.jpg",
                "sha256": "8e04b5fe1a89a119c81073ad0fa7c680e0c467a26b0d8a7bf83d974bb209a733",
                "uuid": "b620c594-c84a-4c66-bf12-c9b4ef9f2062",
                "forced": false,
                "checks": [
                "A file with the same checksum already exists in database"
                ],
                "created_on": "2012-06-18T15:32:29+02:00",
                "updated_on": "2012-06-18T15:32:29+02:00"
            },
            {
                "id": 205,
                "quarantine_session": {
                "id": 205,
                "usr_id": 3
                },
                "base_id": 1,
                "original_name": "Tree.jpg",
                "sha256": "b3f7ec4125ef7e6139b1dd5186f5b665c9f3c33cde77cdf5e583b7477784331c",
                "uuid": "3f2bea8b-becd-438f-a510-1936fb51545f",
                "forced": false,
                "checks": [
                "A file with the same checksum already exists in database"
                ],
                "created_on": "2012-06-18T15:32:24+02:00",
                "updated_on": "2012-06-18T15:32:24+02:00"
            }
            ]
        }
    }