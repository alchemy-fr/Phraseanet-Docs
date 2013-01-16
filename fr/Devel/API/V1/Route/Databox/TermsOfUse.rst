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
            "api_version": "1.3",
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
                    "terms": "<p>يمكنك أن تفعل ما تريد</p>"
                },
                {
                    "locale": "de_DE",
                    "terms": "<p>Sie können tun, was Sie wollen</p>"
                },
                {
                    "locale": "en_GB",
                    "terms": "<p>You can do what you want</p>"
                },
                {
                    "locale": "es_ES",
                    "terms": "<p>Puedes hacer lo que quieras</p>"
                },
                {
                    "locale": "fr_FR",
                    "terms": "<p>Vous pouvez faire ce quez vous voulez</p>"
                }
            ]
        }
    }
