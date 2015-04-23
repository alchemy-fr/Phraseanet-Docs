Changer l'image représentative d'un reportage
=============================================

A propos
--------

Changer l'image représentative d'un reportage

.. code-block:: bash

    /api/v1/stories/{databox_id}/{story_id}/setcover

======================== ==================
 Informations
======================== ==================
 HTTP Method              POST
 Requires Authentication  Oui
 Content-Type             application/json
======================== ==================

Parameters
----------

============== ============== ========================================================
 Paramètres     Type           Information
============== ============== ========================================================
 databox_id     entier         L'identifiant de la databox contenant le reportage
 story_id       entier         L'identifiant du reportage
============== ============== ========================================================

D'autres paramètres (document source à utiliser comme image représentative) doivent être encodés en json et passés dans le "body" de la requète.

============== ============== ========================================================
 Paramètres     Type           Information
============== ============== ========================================================
 record_id      entier         L'identifiant du document à utiliser
============== ============== ========================================================


.. code-block:: javascript

    {
        "record_id": 209
    }

.. note:: Seul un document de type "image" peut être utilisé comme source d'image représentative pour un reportage.
    Le document doit être un élément du reportage (donc il fait partie de la même databox).


Exemple de réponse
------------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.4.1",
            "request": "POST /api/v1/stories/3/289/setcover",
            "response_time": "2015-04-22T13:31:46+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": [
            "3/209/"
        ]
    }