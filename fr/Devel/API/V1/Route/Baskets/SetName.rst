Modifier le nom d'un panier
===========================

A propos
--------

Met à jour le nom du panier sélectionné

.. code-block:: bash

    /api/v1/baskets/{basket_id}/setname/

========================== =====
 Informations
========================== =====
 Méthode HTTP               POST
 Authentification requise   Oui
========================== =====

Paramètres
----------

======================== ============== =============
 Paramètres               Type           Information
======================== ============== =============
 basket_id                entier         L'identifiant du panier sélectionné
 name                     chaîne         Le nom du panier
======================== ============== =============

Attribut de la réponse
----------------------

============= ================================
 Attribut      Description
============= ================================
 basket        Le panier
============= ================================

Exemple de réponse
------------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "POST /api/v1/baskets/148/setname/",
            "response_time": "2012-06-29T18:29:15+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "basket": {
                "basket_id": 148,
                "created_on": "2012-06-29T18:19:30+02:00",
                "description": "yo",
                "name": "my name here",
                "pusher_usr_id": null,
                "updated_on": "2012-06-29T18:29:15+02:00",
                "unread": false,
                "validation_basket": false
            }
        }
    }
