Appliquer un status
===================

A propos
--------

Applique un status à un enregistrement.

.. code-block:: bash

    /api/v1/records/{databox_id}/{record_id}/setstatus/

========================== =====
 Informations
========================== =====
 Méthode HTTP               POST
 Authentification requise   Oui
========================== =====

Paramètres
----------

================ ========= ==============================
 Paramètres       Type      Information
================ ========= ==============================
 databox_id       entier    L'identifiant de la databox auquel appartient l'enregistrement
 record_id        entier    L'identifiant de l'enregistrement sélectionné
 status           tableau   Les status à modifier
================ ========= ==============================

** Exemple **

.. code-block:: javascript

    status[4]=1&
    status[5]=0&

est equivalent à

.. code-block:: javascript

    status = {
        4: 1,
        5: 0
    }

Attribut de la réponse
----------------------

========== =========================================
 Attribut    Description
========== =========================================
 status      La liste des status de l'enregistrement
========== =========================================

Exemple de réponse
------------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "POST /api/v1/records/52/4102/setstatus/",
            "response_time": "2011-07-27T14:08:06+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "status": {
                "4": {
                    "bit": 4,
                    "state": true
                },
                "5": {
                    "bit": 5,
                    "state": false
                },
                "6": {
                    "bit": 6,
                    "state": false
                },
                "7": {
                    "bit": 7,
                    "state": false
                }
            }
        }
    }
