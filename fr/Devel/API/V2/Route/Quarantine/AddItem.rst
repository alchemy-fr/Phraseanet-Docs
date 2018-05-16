Ajouter un document de la quarantaine à Phraseanet
==================================================

A propos
--------

Ajoute un document à Phraseanet

.. code-block:: bash

    /api/v2/quarantine/item/{lazaret_id}/add/

========================== =====
 Informations
========================== =====
 Méthode HTTP               POST
 Authentification requise   Oui
========================== =====

Paramètres
----------

======================== ============== =============
 Paramètres               Type           Information
======================== ============== =============
 lazaret_id                entier         L'identifiant du document à ajouter à Phraseanet
======================== ============== =============

Attribut de la réponse
----------------------

================== ================================
 Attribut              Description
================== ================================
 success            Le status de la réponse
 message            Le message d'erreur si il y a
 result             Information supplémentaire
================== ================================

Exemple de réponse
------------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1",
            "request": "POST /api/v2/quarantine/item/16/add/",
            "response_time": "2018-05-16T05:47:08+00:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "success": true,
            "message": "",
            "result": []
        }
    }
