Lister les sous-définitions d'un document
=========================================

A propos
--------

Retourne les permaliens des sous-définitions disponibles pour le document
sélectionné.

Les headers HTTP des permaliens incluent un header `Link` (comme décrit dans la
`RFC 5988`_) qui pointe vers une représentation JSON de la notice descriptive.

.. code-block:: none

    < HTTP/1.1 200 OK
    < Server: nginx
    < Content-Type: image/jpeg
    < Content-Length: 55725
    < Connection: keep-alive
    < Cache-Control: max-age=0, must-revalidate, private
    < Date: Thu, 04 Jul 2013 15:49:45 GMT
    < Last-Modified: Wed, 15 May 2013 16:05:43 GMT
    < Content-Disposition: inline; filename="8562183_preview.jpg"
    < ETag: "38483a7bd5e3d83fec4336af2003814a"
    < Link: https://domain.tld/permalink/v1/1/8562183/caption/?token=nlwvsIAo
    < Accept-Ranges: bytes
    < Content-Transfer-Encoding: binary

Les requêtes HTTP HEAD sont aussi supportées par les permaliens.

.. note::

    Use "download_url" to download the file as an attachment in a browser.

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

Par exemple, pour retourner toutes les vidéos compatibles HTML5 au format mobile,
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
                "substitued": false,
                "created_on": "2012-06-22T21:20:55+02:00",
                "updated_on": "2012-06-22T21:20:55+02:00",
                "permalink": {
                    "created_on": "2012-06-22T21:20:55+02:00",
                    "id": 1972,
                    "is_activated": true,
                    "label": "0113JPG",
                    "updated_on": "2012-06-22T21:20:55+02:00",
                    "page_url": "http://domain.tld/permalink/v1/1/633/document/?token=gAZMiywc",
                    "url": "http://domain.tld/permalink/v1/1/633/document/0113.JPG?token=gAZMiywc",
                    "download_url": "http://domain.tld/permalink/v1/1/633/document/0113.JPG?token=gAZMiywc&download"
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
                "substitued": false,
                "created_on": "2012-06-25T18:07:20+02:00",
                "updated_on": "2012-06-25T18:07:20+02:00",
                "permalink": {
                    "created_on": "2012-06-25T18:07:20+02:00",
                    "id": 2039,
                    "is_activated": true,
                    "label": "0113JPG",
                    "updated_on": "2012-06-25T18:07:20+02:00",
                    "page_url": "http://domain.tld/permalink/v1/1/633/preview/?token=ThQIeo0w",
                    "url": "http://domain.tld/permalink/v1/1/633/preview/0113.JPG?token=ThQIeo0w",
                    "download_url": "http://domain.tld/permalink/v1/1/633/preview/0113.JPG?token=ThQIeo0w&download"
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
                "substitued": false,
                "created_on": "2012-06-25T18:07:20+02:00",
                "updated_on": "2012-06-25T18:07:20+02:00",
                "permalink": {
                    "created_on": "2012-06-25T18:05:20+02:00",
                    "id": 2027,
                    "is_activated": true,
                    "label": "0113JPG",
                    "updated_on": "2012-06-25T18:05:20+02:00",
                    "page_url": "http://domain.tld/permalink/v1/1/633/thumbnail/?token=cw1tOY9C",
                    "url": "http://domain.tld/permalink/v1/1/633/thumbnail/0113.JPG?token=cw1tOY9C",
                    "download_url": "http://domain.tld/permalink/v1/1/633/thumbnail/0113.JPG?token=cw1tOY9C&download"
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
                "substitued": false,
                "created_on": "2012-06-22T21:24:57+02:00",
                "updated_on": "2012-06-22T21:24:57+02:00",
                "permalink": {
                    "created_on": "2012-06-22T21:24:57+02:00",
                    "id": 1992,
                    "is_activated": true,
                    "label": "0113JPG",
                    "updated_on": "2012-06-22T21:24:57+02:00",
                    "page_url": "http://domain.tld/permalink/v1/1/633/preview_mobile/?token=STLrJt9Y",
                    "url": "http://domain.tld/permalink/v1/1/633/preview_mobile/0113.JPG?token=STLrJt9Y",
                    "download_url": "http://domain.tld/permalink/v1/1/633/preview_mobile/0113.JPG?token=STLrJt9Y&download"
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
                "substitued": false,
                "created_on": "2012-06-22T21:25:00+02:00",
                "updated_on": "2012-06-22T21:25:00+02:00",
                "permalink": {
                    "created_on": "2012-06-22T21:25:00+02:00",
                    "id": 1993,
                    "is_activated": true,
                    "label": "0113JPG",
                    "updated_on": "2012-06-22T21:25:00+02:00",
                    "page_url": "http://domain.tld/permalink/v1/1/633/thumbnail_mobile/?token=3ssBc2YY",
                    "url": "http://domain.tld/permalink/v1/1/633/thumbnail_mobile/0113.JPG?token=3ssBc2YY",
                    "download_url": "http://domain.tld/permalink/v1/1/633/thumbnail_mobile/0113.JPG?token=3ssBc2YY&download"
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

.. _RFC 5988: https://tools.ietf.org/html/rfc5988
