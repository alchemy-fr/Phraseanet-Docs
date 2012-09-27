Récupérer les conditions générales d'utilisation (CGU) d'une databox
====================================================================

A propos
--------

  Retourne les conditions générales d'utilisation d'une databox pour chacune
  des langues disponibles

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
            "response_time": "2012-09-27T16:49:20+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "termsOfUse": [
                {
                    "locale": "ar_SA",
                    "terms": "ar_SA"
                },
                {
                    "locale": "de_DE",
                    "terms": "de_D"
                },
                {
                    "locale": "en_GB",
                    "terms": "<p>You can do what you want</p>"
                },
                {
                    "locale": "es_ES",
                    "terms": "es_ES"
                },
                {
                    "locale": "fr_FR",
                    "terms": "<p>Vous pouvez faire ce quez vous voulez</p><p>Voil&agrave;</p>"
                }
            ]
        }
    }
