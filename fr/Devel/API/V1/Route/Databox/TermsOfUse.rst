Récupérer les conditions d'utilisation d'une databox
====================================================

À propos
--------

  Retourne les conditions d'utilisation d'une databox pour chaque langage
  disponible

  .. code-block:: bash

    /api/v1/databoxes/{databox_id}/termsOfUse/

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
   databox_id               entier         L'identifiant de la databox sélectionnée
  ======================== ============== =============


Attribut de la réponse
----------------------

  ============ ================================
  Attribut      Description
  ============ ================================
   termsOfUse   La liste des conditions d'utilisation pour chaque langage
  ============ ================================

Exemple de réponse
------------------

  .. code-block:: javascript

    {
        "meta": {
            "api_version": "1.2",
            "request": "GET /api/v1/databoxes/1/termsOfUse/",
            "response_time": "2011-07-27T11:27:28+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "termsOfuse" : {
                "ar_SA": {
                    "locale": "ar_SA",
                    "terms": ""
                },
                "de_DE": {
                    "locale": "de_DE",
                    "terms": ""
                },
                "en_GB": {
                    "locale": "en_GB",
                    "terms": "<p>You can do what you want</p>"
                },
                "fr_FR": {
                    "locale": "fr_FR",
                    "terms": "<p>Vous pouvez faire ce quez vous voulez</p><p>Voil&agrave;</p>"
                }
            }
        }
    }