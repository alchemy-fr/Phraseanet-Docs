Lister les paniers d'un document
================================

A propos
--------

  Retourne la liste des objets (paniers et reportages) qui contiennent un
  document spécifique

  .. code-block:: bash

    /api/v1/records/{databox_id}/{record_id}/related/

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
   databox_id               entier         L'identifiant de la databox auquel appartient le document
   record_id                entier         L'identifiant du document sélectionné
  ======================== ============== =============

Attribut de la réponse
----------------------

  ========== ================================
   Attribut   Description
  ========== ================================
   baskets 	  La liste des objets (paniers et reportages) qui contiennent le document
  ========== ================================

Exemple de réponse
------------------

  .. code-block:: javascript

    {
    {
         "meta": {
            "api_version": "1.2",
            "request": "GET /api/v1/records/1/644/related/",
            "response_time": "2012-06-29T16:33:55+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "baskets": [
            {
                "basket_id": 144,
                "created_on": "2012-06-18T16:29:37+02:00",
                "description": "",
                "name": "hello",
                "pusher_usr_id": 3,
                "ssel_id": 144,
                "updated_on": "2012-06-18T16:29:37+02:00",
                "unread": false,
                "validation_basket": false
            },
            {
                "basket_id": 145,
                "created_on": "2012-06-18T18:15:39+02:00",
                "description": "",
                "name": "hello3",
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
