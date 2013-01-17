Changer un document de collection
=================================

A propos
--------

Change un document d'une collection à une autre

.. code-block:: bash

    /api/v1/records/{databox_id}/{record_id}/setcollection/

========================== =====
 Informations
========================== =====
 Méthode HTTP              POST
 Authentification requise  Oui
========================== =====

Paramètres
----------

======================== ============== =============
 Paramètres               Type           Information
======================== ============== =============
 databox_id               entier         L'identifiant de la databox auquel appartient le document
 record_id                entier         L'identifiant du document sélectionné
 base_id                  entier         L'identifiant de la collection de destination
======================== ============== =============

Attribut de la réponse
----------------------

========== ================================
 Attribut   Description
========== ================================
 record     L'enregistrement mis à jour
========== ================================

Exemple de réponse
------------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "POST /api/v1/records/52/4102/setcollection/",
            "response_time": "2011-07-27T13:59:57+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "record": {
                "databox_id": 2,
                "record_id": 132,
                "mime_type": "image/jpeg",
                "title": "photo03.JPG",
                "original_name": "photo03.JPG",
                "last_modification": "2012-06-13T13:50:29+02:00",
                "created_on": "2012-06-13T13:49:29+02:00",
                "collection_id": 1,
                "sha256": "60691f538bdac78197004edcfb77dc772d824daeca54bd13e59f6b485f0293bc",
                "thumbnail": {
                    "permalink": {
                        "created_on": "2012-06-13T13:51:06+02:00",
                        "id": 343,
                        "is_activated": true,
                        "label": "photo03JPG",
                        "last_modified": "2012-06-13T13:51:06+02:00",
                        "page_url": "https://library.net/permalink/v1/photo03JPG/2/132/5MuXBQ55/thumbnail/view/",
                        "url": "https://library.net/permalink/v1/photo03JPG/2/132/5MuXBQ55/thumbnail/"
                    },
                    "height": 113,
                    "width": 150,
                    "filesize": 4271,
                    "devices": [
                        "screen"
                    ],
                    "player_type": "IMAGE",
                    "mime_type": "image/jpeg"
                },
                "technical_informations": {
                    "Aperture": 2.4,
                    "CameraModel": "iPhone 4S",
                    "Channels": 3,
                    "ColorDepth": 8,
                    "ColorSpace": "RGB",
                    "FileSize": 2851233,
                    "FlashFired": 0,
                    "FocalLength": 4.28,
                    "Height": 2448,
                    "HyperfocalDistance": 2.0773522348635,
                    "ISO": 400,
                    "LightValue": 4.847996906555,
                    "MimeType": "image/jpeg",
                    "ShutterSpeed": 0.05,
                    "Width": 3264
                },
                "phrasea_type": "image",
                "uuid": "d91372ec-ea94-4e8a-bf26-065ad8684180"
            }
        }
    }
