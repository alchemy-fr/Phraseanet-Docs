Lister les flux
===============

A propos
--------

  Liste tous les flux disponibles

  .. code-block:: bash

    /api/v1/feeds/list/

  ========================== =====
   Informations
  ========================== =====
   Méthode HTTP               GET
   Authentification requise   Oui
  ========================== =====

Paramètres
----------

  Aucun paramètre

Attribut de la réponse
----------------------

  ============= ================================
   Attribut      Description
  ============= ================================
   feeds         Les liste des flux
  ============= ================================

Exemple de réponse
------------------

  .. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/feeds/list/",
            "response_time": "2012-06-29T17:57:13+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "feeds": [
            {
                "id": 3980,
                "title": "test",
                "subtitle": "test test test @&é\"'(§è!çà)-",
                "total_entries": 0,
                "icon": "/skins/icons/rss32.gif",
                "public": true,
                "readonly": false,
                "deletable": true,
                "created_on": "2012-06-29T16:20:03+02:00",
                "updated_on": "2012-06-29T16:20:03+02:00"
            },
            {
                "id": 3979,
                "title": "culure new",
                "subtitle": "publish everyday new about culture",
                "total_entries": 0,
                "icon": "/skins/icons/rss32.gif",
                "public": true,
                "readonly": false,
                "deletable": true,
                "created_on": "2012-06-29T16:19:28+02:00",
                "updated_on": "2012-06-29T16:19:28+02:00"
            },
            {
                "id": 3978,
                "title": "lolilol",
                "subtitle": "loilol à l'huile de tournesol",
                "total_entries": 1,
                "icon": "/skins/icons/rss32.gif",
                "public": true,
                "readonly": false,
                "deletable": true,
                "created_on": "2012-06-25T17:58:09+02:00",
                "updated_on": "2012-06-25T17:58:09+02:00"
            }
            ]
        }
    }
