Substituer une sous-définition d'un document
============================================

A propos
--------

Substituer (ou ajouter) une sous-définition à un document.
Permet d'injecter des sous-définitions fabriquées hors Phraseanet lorsqu'un
document a été rajouté avec l'option "nosubdefs"

.. code-block:: bash

    /api/v1/embed/substitute/

.. seealso:: :doc:`Ajouter un document dans Phraseanet <../Records/Add>`


========================== ======
 Informations
========================== ======
 Méthode HTTP               POST
 Authentification requise   Oui
========================== ======

Paramètres
----------

=============== =========== =============
 Paramètres      Type        Information
=============== =========== =============
 file            fichier     Obligatoire - Le fichier de sous-définition à remplacer/ajouter
 databox_id      entier      Obligatoire - L'identifiant de la databox à laquelle appartient le document
 record_id       entier      Obligatoire - L'identifiant du document
 name            chaîne      Obligatoire - Le nom de la sous-résolution à changer (tel que dans la structure)
 adapt           entier      Facultatif  - 0 : conserver le fichier injecté tel quel ; 1 [défaut] : adapter le fichier
                             aux réglages (dimensions, type, ...) de la structure.
=============== =========== =============

.. note::

    Le paramètre optionnel *adapt* se destine seulement aux documents de type
    image.

Exemples de réponses
---------------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.4.1",
            "request": "POST /api/v1/embed/substitute/",
            "response_time": "2015-04-22T19:16:24+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "0": {
                "name": "preview",
                "substituted": true,
                "created_on": "2015-02-23T11:23:40+01:00",
                "updated_on": "2015-04-22T19:16:24+02:00",
                "permalink": {
                    "created_on": "2015-04-14T11:24:59+02:00",
                    "id": 847,
                    "is_activated": true,
                    "label": "IMG_5281",
                    "updated_on": "2015-04-14T11:24:59+02:00",
                    "page_url": "http://domain.tld/permalink/v1/3/230/preview/?token=2dXGRr5P",
                    "download_url": "http://domain.tld/permalink/v1/3/230/preview/IMG_5281.?token=2dXGRr5P&download=1",
                    "url": "http://domain.tld/permalink/v1/3/230/preview/IMG_5281.?token=2dXGRr5P"
                },
                "height": 16,
                "width": 16,
                "filesize": 60,
                "devices": [
                    "screen"
                ],
                "player_type": "IMAGE",
                "mime_type": "image/gif"
            },
            "adapt": false
        }
    }

.. note:: Parceque les sous-définitions sont fabriquées de façon asynchrone, aucune information
    concernant le fichier ne peut être retournée si "adapt":true est spécifié.


.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.4.1",
            "request": "POST /api/v1/embed/substitute/",
            "response_time": "2015-04-22T19:16:24+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "adapt": true
        }
    }


.. Seealso:: :doc:`Lister les sous-définitions d’un document <../Records/Embed>`


