Lister les databox
==================

A propos
--------

Retourne la liste des databox disponibles

.. code-block:: bash

    /api/v1/databoxes/list/

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

========== ================================
Attribut    Description
========== ================================
databoxes   La liste des databox disponibles
========== ================================

Exemple de réponse
------------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/databoxes/list/",
            "response_time": "2012-06-29T16:29:48+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "databoxes": [
            {
                "databox_id": 1,
                "name": "db_37",
                "version": "3.7.0.0.a9"
            },
            {
                "databox_id": 2,
                "name": "db_38",
                "version": "3.8.0.0.a1"
            }
            ]
        }
    }
