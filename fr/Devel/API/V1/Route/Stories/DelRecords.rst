Supprimer des documents d'un reportage
======================================

About
-----

Supprimer des documents d'un reportage

.. code-block:: bash

    /api/v1/stories/{databox_id}/{story_id}/delrecords

======================== ==================
 Informations
======================== ==================
 HTTP Method              POST
 Requires Authentication  Oui
 Content-Type             application/json
======================== ==================

Paramètres
----------

============== ============== ========================================================
 Paramètres     Type           Information
============== ============== ========================================================
 databox_id     entier         L'identifiant de la databox contenant le reportage
 story_id       entier         L'identifiant du reportage
============== ============== ========================================================

D'autres paramètres (documents à retirer du reportage) doivent être encodés en json et passés dans le "body" de la requète.

============== ============== ========================================================
 Paramètres     Type           Information
============== ============== ========================================================
 databox_id     entier         L'identifiant de la databox contenant le document à retirer du reportage
 record_id      entier         L'identifiant du document à retirer
============== ============== ========================================================

.. code-block:: javascript

    {
        "story_records": [
            {
                "databox_id": 3,
                "record_id": 209
            },
            {
                "databox_id": 3,
                "record_id": 210
            }
        ]
    }

.. note:: Même si reportage ne peut contenir que des éléments de la même databox que celui-ci, les paramètres "databox_id"
    dans le json **doivent** être présents et égaux au paramètre "databox_id" de la route.



Exemple de réponse
------------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.4.1",
            "request": "POST /api/v1/stories/3/281/delrecords",
            "response_time": "2015-04-22T13:31:46+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "records": [
                "3_209",
                "3_210"
            ]
        }
    }
