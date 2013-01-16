Récupérer un document de la quarantaine
=======================================

A propos
--------

  Retourne un document de la quarantaine.

.. code-block:: bash

    /api/v1/quarantine/item/{quarantine_id}/

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
   quarantine_id            entier         L'identifiant du document placé dans la quarantaine
  ======================== ============== =============

Attribut de la réponse
----------------------

  ============== ================================
   Attribut       Description
  ============== ================================
   item           L'item sélectionné
  ============== ================================

Exemple de réponse
------------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/quarantine/item/136/",
            "response_time": "2012-06-13T16:11:18+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "quarantine_item": {
                "id": 136,
                "session": {
                    "id": 136,
                    "usr_id": 3
                },
                "base_id": 3,
                "original_name": "Tree.jpg",
                "sha256": "eda6790b95f6fbeeba32e120d9113fd8f71070a16c110c1018d2accd2b3175e0",
                "uuid": "bec1c9b3-4812-4f31-acc6-621f3f664760",
                "forced": false,
                "checks": [
                    "A file with the same checksum already exists in database"
                ],
                "created_on": "2012-06-01T12:35:14+02:00",
                "updated_on": "2012-06-01T12:35:14+02:00"
            }
        }
    }
