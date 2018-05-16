Supprimer un document de la quarantaine
=======================================

A propos
--------

Supprime un document contenu dans la quarantaine

.. code-block:: bash

    /api/v2/quarantine/item/{lazaret_id}/

========================== =====
 Informations
========================== =====
 Méthode HTTP               DELETE
 Authentification requise   Oui
========================== =====

Paramètres
----------

======================== ============== =============
 Paramètres               Type           Information
======================== ============== =============
 lazaret_id                entier         L'identifiant du document à supprimer de la quarantaine
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
            "request": "DELETE /api/v2/quarantine/item/15/",
            "response_time": "2018-05-15T14:20:31+00:00",
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
