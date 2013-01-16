Racine
======

A propos
--------

  Cette route est disponible depuis la version 1.2 de l'API Phraseanet et fournit
  publiquement des informations sur l'API Phraseanet. Cette route n'est pas
  versionnée.

  .. code-block:: bash

    /api/

  ======================== =====
   Informations
  ======================== =====
   HTTP Method              GET
   Requires Authentication  NO
  ======================== =====

Exemple d'utilisation
---------------------

  .. code-block:: javascript

    curl -v https://library.net/api/

Paramètres
----------

  Cette route ne prend en compte aucun paramètre.

Les champs de la réponse
------------------------

  =============== ================================
   Field           Description
  =============== ================================
   name            Le titre de l'installation
   type            Le type d'application (phraseanet)
   description     La description de l'installation
   documentation   Le lien vers la documentation de l'API
   version         Les versions disponibles de l'API et leurs paramètres
  =============== ================================

Exemple de réponse
------------------

  .. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/",
            "response_time": "2012-06-13T15:19:13+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "name": "Ma médiathèque",
            "type": "phraseanet",
            "description": "Là ou je range tous mes fichiers",
            "documentation": "https://docs.phraseanet.com/Devel",
            "versions": {
                "1": {
                    "number": "1.2",
                    "uri": "/api/v1/",
                    "authenticationProtocol": "OAuth2",
                    "authenticationVersion": "draft#v9",
                    "authenticationEndPoints": {
                        "authorization_token": "/api/oauthv2/authorize",
                        "access_token": "/api/oauthv2/token"
                    }
                }
            }
        }
    }
