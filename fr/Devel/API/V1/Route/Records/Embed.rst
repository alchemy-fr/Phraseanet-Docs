Lister les sous-définitions d'un document
=========================================

A propos
--------

  Retourne les permaliens des sous-définitions disponibles pour le document
  sélectionné.

.. code-block:: bash

    /api/v1/records/{databox_id}/{record_id}/embed/

  ========================== =====
   Informations
  ========================== =====
   Méthode HTTP               GET
   Authentification requise   Oui
  ========================== =====

Paramètres
----------

Depuis la version 1.2, deux nouveaux paramètres sont disponibles : *devices*
et *mimes*. S'ils sont fournis, ils restreignent les médias retournés.

Par exemple, pour retourner toutes les videos compatibles HTML5 au format mobile,
Il faut utiliser les paramètres :

.. code-block:: bash

    devices[]=mobile&mimes[]=video/mp4&mimes[]=video/ogg&mimes[]=video/webm

  ======================== ============== ==============================
   Paramètres               Type           Information
  ======================== ============== ==============================
   databox_id               entier         L'identifiant de la databox auquel appartient le document
   record_id                entier         L'identifiant du document sélectionné
   devices                  tableau        Un tableau des devices sur lequel restreindre la query (optionnel)
   mimes                    tableau        Un tableau de type mime sur lequel restreindre la recherche (optionnel)
  ======================== ============== ==============================

Attribut de la réponse
----------------------

  ========== ================================
   Attribut   Description
  ========== ================================
    embed     La liste des sous-definitions disponibles pour le document sélectionné
  ========== ================================

Exemple de réponse
------------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/records/1/633/embed/",
            "response_time": "2012-06-29T16:02:40+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "embed": [
            {
                "name": "document",
                "permalink": {
                    "created_on": "2012-06-22T21:20:55+02:00",
                    "id": 1972,
                    "is_activated": true,
                    "label": "0113JPG",
                    "updated_on": "2012-06-22T21:20:55+02:00",
                    "page_url": "http://dev.phrasea.net/permalink/v1/0113JPG/1/633/gAZMiywc/document/view/",
                    "url": "http://dev.phrasea.net/permalink/v1/0113JPG/1/633/gAZMiywc/document/"
                },
                "height": 4256,
                "width": 2832,
                "filesize": 1101093,
                "devices": [
                "all"
                ],
                "player_type": "IMAGE",
                "mime_type": "image/jpeg"
            },
            {
                "name": "preview",
                "permalink": {
                    "created_on": "2012-06-25T18:07:20+02:00",
                    "id": 2039,
                    "is_activated": true,
                    "label": "0113JPG",
                    "updated_on": "2012-06-25T18:07:20+02:00",
                    "page_url": "http://dev.phrasea.net/permalink/v1/0113JPG/1/633/ThQIeo0w/preview/view/",
                    "url": "http://dev.phrasea.net/permalink/v1/0113JPG/1/633/ThQIeo0w/preview/"
                },
                "height": 480,
                "width": 319,
                "filesize": 11933,
                "devices": [
                "screen"
                ],
                "player_type": "IMAGE",
                "mime_type": "image/jpeg"
            },
            {
                "name": "thumbnail",
                "permalink": {
                    "created_on": "2012-06-25T18:05:20+02:00",
                    "id": 2027,
                    "is_activated": true,
                    "label": "0113JPG",
                    "updated_on": "2012-06-25T18:05:20+02:00",
                    "page_url": "http://dev.phrasea.net/permalink/v1/0113JPG/1/633/cw1tOY9C/thumbnail/view/",
                    "url": "http://dev.phrasea.net/permalink/v1/0113JPG/1/633/cw1tOY9C/thumbnail/"
                },
                "height": 150,
                "width": 100,
                "filesize": 2453,
                "devices": [
                "screen"
                ],
                "player_type": "IMAGE",
                "mime_type": "image/jpeg"
            },
            {
                "name": "preview_mobile",
                "permalink": {
                    "created_on": "2012-06-22T21:24:57+02:00",
                    "id": 1992,
                    "is_activated": true,
                    "label": "0113JPG",
                    "updated_on": "2012-06-22T21:24:57+02:00",
                    "page_url": "http://dev.phrasea.net/permalink/v1/0113JPG/1/633/STLrJt9Y/preview_mobile/view/",
                    "url": "http://dev.phrasea.net/permalink/v1/0113JPG/1/633/STLrJt9Y/preview_mobile/"
                },
                "height": 480,
                "width": 319,
                "filesize": 11933,
                "devices": [
                "handheld"
                ],
                "player_type": "IMAGE",
                "mime_type": "image/jpeg"
            },
            {
                "name": "thumbnail_mobile",
                "permalink": {
                    "created_on": "2012-06-22T21:25:00+02:00",
                    "id": 1993,
                    "is_activated": true,
                    "label": "0113JPG",
                    "updated_on": "2012-06-22T21:25:00+02:00",
                    "page_url": "http://dev.phrasea.net/permalink/v1/0113JPG/1/633/3ssBc2YY/thumbnail_mobile/view/",
                    "url": "http://dev.phrasea.net/permalink/v1/0113JPG/1/633/3ssBc2YY/thumbnail_mobile/"
                },
                "height": 150,
                "width": 100,
                "filesize": 2453,
                "devices": [
                "handheld"
                ],
                "player_type": "IMAGE",
                "mime_type": "image/jpeg"
            }
            ]
        }
    }
