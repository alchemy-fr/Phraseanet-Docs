Valider une commande
====================

A propos
--------

Valider ou rejeter les éléments d'une commande.

.. code-block:: bash

    /api/v2/orders/{orderId}/accept
    /api/v2/orders/{orderId}/deny

======================== ======
 Information
======================== ======
 Méthode HTTP             POST
 Requires Authentication  Yes
======================== ======

Corps de la requête
-------------------

Le corps de la requête contient la liste des identifiants d'éléments à
accepter ou à refuser.

.. code-block:: javascript

    [
        {"id": 1},
        {"id": 2}
    ]

Exemple de réponse
------------------

Le point d'acceptation renvoie une liste d'éléments réellement acceptés.

.. code-block:: javascript

    {
        "meta": {
            "api_version": "2.0.0",
            "request": "POST /api/v2/orders/23/accept",
            "response_time": "2016-03-23T18:11:34+01:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "data": [
                    {
                        "id": 42,
                        "created": "2016-03-23T18:11:34+01:00",
                        "databox_id": 1,
                        "record_id": 118,
                        "index": 1
                    }
                ]
            }
        }
    }

Pour les éléments refusés font l'objet d'une réponse vide.
