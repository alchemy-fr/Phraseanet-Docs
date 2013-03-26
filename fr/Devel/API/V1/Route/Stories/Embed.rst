Stories Embed
=============

About
-----

Retourne les permaliens des sous-définitions disponibles pour le reportage
sélectionné.

.. code-block:: bash

    /api/v1/stories/{databox_id}/{story_id}/embed/

========================== =====
 Informations
========================== =====
 Méthode HTTP              GET
 Authentification requise  Oui
========================== =====

Parameters
----------

Pour retourner toutes les videos compatibles HTML5 au format mobile,
Il faut utiliser les paramètres :

.. code-block:: bash

    devices[]=mobile&mimes[]=video/mp4&mimes[]=video/ogg&mimes[]=video/webm

======================== ============== ==============================
 Paramètres               Type           Information
======================== ============== ==============================
 databox_id               entier         L'identifiant de la databox auquel appartient le reportage
 record_id                entier         L'identifiant du reportage sélectionné
 devices                  tableau        Un tableau des devices sur lequel restreindre la query (optionnel)
 mimes                    tableau        Un tableau de type mime sur lequel restreindre la recherche (optionnel)
======================== ============== ==============================

Attribut de la réponse
----------------------

========== ================================
 Attribut   Description
========== ================================
  embed     La liste des sous-definitions disponibles pour le reportage sélectionné
========== ================================

Exemple de réponse
------------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/stories/1/99/embed/",
            "response_time": "2012-12-19T18:46:17+01:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "embed": [
                {
                    "name": "preview",
                    "permalink": {
                        "created_on": "2012-12-19T18:46:17+01:00",
                        "id": 249,
                        "is_activated": true,
                        "label": "SUPER",
                        "updated_on": "2012-12-19T18:46:17+01:00",
                        "page_url": "http://domain.tld/permalink/v1/1/99/preview/?token=9p6yOZMJ",
                        "url": "http://domain.tld/permalink/v1/1/99/preview/SUPER.jpg?token=9p6yOZMJ",
                        "download_url": "http://domain.tld/permalink/v1/1/99/preview/SUPER.jpg?token=9p6yOZMJ&download"
                    },
                    "height": 533,
                    "width": 800,
                    "filesize": 26853,
                    "devices": [],
                    "player_type": "IMAGE",
                    "mime_type": "image/jpeg"
                },
                {
                    "name": "thumbnail",
                    "permalink": {
                        "created_on": "2012-12-19T18:22:31+01:00",
                        "id": 248,
                        "is_activated": true,
                        "label": "SUPER",
                        "updated_on": "2012-12-19T18:22:31+01:00",
                        "page_url": "http://domain.tld/permalink/v1/1/99/thumbnail/?token=YQlcZVsV",
                        "url": "http://domain.tld/permalink/v1/1/99/thumbnail/SUPER.jpg?token=YQlcZVsV",
                        "download_url": "http://domain.tld/permalink/v1/1/99/thumbnail/SUPER.jpg?token=YQlcZVsV&download"
                    },
                    "height": 133,
                    "width": 200,
                    "filesize": 3566,
                    "devices": [],
                    "player_type": "IMAGE",
                    "mime_type": "image/jpeg"
                }
            ]
        }
    }
