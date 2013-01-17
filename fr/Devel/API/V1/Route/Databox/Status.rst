Lister les status d'une databox
===============================

A propos
--------

Retourne la liste des status disponibles de la databox sélectionnée

.. code-block:: bash

    /api/v1/databoxes/{databox_id}/status/

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

========== ================================
 Attribut   Description
========== ================================
 status     La liste des status disponibles
========== ================================

Exemple de réponse
------------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/databoxes/1/status/",
            "response_time": "2012-06-29T16:22:52+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "status": [
            {
                "bit": 4,
                "label_on": "online_on",
                "label_off": "online_off",
                "img_on": "/custom/status/localhost-3306-db_37-stat_4_1.gif",
                "img_off": "/custom/status/localhost-3306-db_37-stat_4_0.gif",
                "searchable": false,
                "printable": false
            },
            {
                "bit": 5,
                "label_on": "validated_ko",
                "label_off": "validated_ok",
                "img_on": "/custom/status/localhost-3306-db_37-stat_5_1.gif",
                "img_off": "/custom/status/localhost-3306-db_37-stat_5_0.gif",
                "searchable": false,
                "printable": false
            },
            {
                "bit": 6,
                "label_on": "not_sell",
                "label_off": "sell",
                "img_on": "",
                "img_off": "",
                "searchable": false,
                "printable": false
            }
            ]
        }
    }
