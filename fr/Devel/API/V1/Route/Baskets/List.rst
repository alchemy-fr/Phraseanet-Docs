Lister les paniers
==================

À propos
--------

  Retourne la liste des paniers de l'utilisateur courant

  .. code-block:: bash

    /api/v1/baskets/list/

  ========================== =====
   Informations
  ========================== =====
   Méthode HTTP               GET
   Authentification requise   Oui
  ========================== =====

Paramètres
----------

  Aucun paramètres

Attribut de la réponse
----------------------

  ============= ================================
   Attribut      Description
  ============= ================================
   baskets       La liste des paniers
  ============= ================================

Exemple de réponse
------------------

  .. code-block:: javascript

    {
        "meta": {
            "api_version": "1.2",
            "request": "GET /api/v1/baskets/list/",
            "response_time": "2012-06-29T16:30:46+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "baskets": [
            {
                "basket_id": 145,
                "created_on": "2012-06-18T18:15:39+02:00",
                "description": "",
                "name": "my basket",
                "pusher_usr_id": 3,
                "ssel_id": 145,
                "updated_on": "2012-06-21T15:51:48+02:00",
                "unread": false,
                "validation_basket": false
            },
            {
                "validation_users": [
                {
                    "usr_id": 3,
                    "usr_name": "legoff.n@gmail.com",
                    "confirmed": false,
                    "can_agree": true,
                    "can_see_others": true,
                    "readonly": false
                },
                {
                    "usr_id": 722,
                    "usr_name": "legoff@alchemy.fr",
                    "confirmed": false,
                    "can_agree": true,
                    "can_see_others": true,
                    "readonly": true
                }
                ],
                "validation_end_date": "2012-07-18T14:54:02+02:00",
                "validation_infos": "Vous avez envoyé cette demande à 1 utilisateurs",
                "validation_confirmed": false,
                "validation_initiator": true,
                "basket_id": 146,
                "created_on": "2012-06-28T14:54:01+02:00",
                "description": "",
                "name": "Panier de validation",
                "pusher_usr_id": 3,
                "ssel_id": 146,
                "updated_on": "2012-06-28T16:07:25+02:00",
                "unread": false,
                "validation_basket": true
            }
            ]
        }
    }
