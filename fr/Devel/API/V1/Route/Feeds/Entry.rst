Lister le contenu d'une entrée
==============================

A propos
--------

  Retourne le contenu de l'entrée sélectionnée

.. code-block:: bash

    /api/v1/feeds/entry/{entry_id}/

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
   entry_id                 entier         L'identifiant de l'entrée sélectionnée
  ======================== ============== =============

Attribut de la réponse
----------------------

  =============== ================================
   Attribut        Description
  =============== ================================
   entry           L'entrée sélectionnée
  =============== ================================

Exemple de réponse
------------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/feeds/entry/3727/",
            "response_time": "2012-06-29T17:50:53+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "entry": {
            "id": 3727,
            "author_email": "legoff.n@gmail.com",
            "author_name": "legoff.n@gmail.com",
            "created_on": "2012-06-25T17:58:58+02:00",
            "updated_on": "2012-06-25T17:58:58+02:00",
            "title": "premier post lolilol",
            "subtitle": "super photo de promotion du feed lolilol",
            "items": [
                {
                    "item_id": 18408,
                    "record": {
                        "databox_id": 1,
                        "record_id": 644,
                        "mime_type": "image/jpeg",
                        "title": "0050.JPG",
                        "original_name": "0050.JPG",
                        "updated-on": "2012-06-22T21:22:08+02:00",
                        "created_on": "2012-06-22T21:22:08+02:00",
                        "collection_id": 2,
                        "sha256": "9f44884438cab8ad6a8a557c4101ec866e0af2eb58b890c9c0e9cad385181fb8",
                        "thumbnail": {
                        "name": "thumbnail",
                        "permalink": {
                            "created_on": "2012-06-25T18:05:20+02:00",
                            "id": 2016,
                            "is_activated": true,
                            "label": "0050JPG",
                            "updated_on": "2012-06-25T18:05:20+02:00",
                            "page_url": "http://dev.phrasea.net/permalink/v1/0050JPG/1/644/m466mwxi/thumbnail/view/",
                            "url": "http://dev.phrasea.net/permalink/v1/0050JPG/1/644/m466mwxi/thumbnail/"
                        },
                        "height": 100,
                        "width": 150,
                        "filesize": 3436,
                        "devices": [
                            "screen"
                        ],
                        "player_type": "IMAGE",
                        "mime_type": "image/jpeg"
                        },
                        "technical_informations": [
                        {
                            "name": "Aperture",
                            "value": 5
                        },
                        {
                            "name": "CameraModel",
                            "value": "NIKON D700"
                        },
                        {
                            "name": "Channels",
                            "value": 3
                        },
                        {
                            "name": "ColorDepth",
                            "value": 8
                        },
                        {
                            "name": "ColorSpace",
                            "value": "RGB"
                        },
                        {
                            "name": "FileSize",
                            "value": 3221035
                        },
                        {
                            "name": "FlashFired",
                            "value": 1
                        },
                        {
                            "name": "FocalLength",
                            "value": 70
                        },
                        {
                            "name": "Height",
                            "value": 2832
                        },
                        {
                            "name": "HyperfocalDistance",
                            "value": 32.616371538043
                        },
                        {
                            "name": "LightValue",
                            "value": 11.940613708927
                        },
                        {
                            "name": "MimeType",
                            "value": "image/jpeg"
                        },
                        {
                            "name": "ShutterSpeed",
                            "value": 0.004
                        },
                        {
                            "name": "Width",
                            "value": 4256
                        }
                        ],
                        "phrasea_type": "image",
                        "uuid": "fc766012-a9c8-49eb-bcbd-c6f5270cb6f5"
                    }
                }
            ],
            "feed_url": "/feeds/3978/content/",
            "url": "/feeds/entry/3727/"
            }
        }
    }
