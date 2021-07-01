Supprimer des documents de la quarantaine
=========================================

A propos
--------

Supprime des documents contenu dans la quarantaine

.. code-block:: bash

    /api/v2/quarantine/

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
 max                      entier         Facultatif - Le nombre de document à supprimer -[défaut] -1: supprime tous les documents de la quarantaine
======================== ============== =============

Attribut de la réponse
----------------------

================== ================================
 Attribut              Description
================== ================================
 success            Le status de la reponse
 message            Le message d'erreur si il y a
 result             Information supplémentaire
 - tobedone         Le nombre de document disponible dans le quarantaine
 - done             Le nombre de document supprimé
 - todo             Le nombre de document restant dans le quarantaine
 - max              Le nombre de document à supprimer
================== ================================

Exemple de réponse
------------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1",
            "request": "DELETE /api/v2/quarantine/",
            "response_time": "2018-05-15T07:31:11+00:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "success": true,
            "message": "",
            "result": {
                "tobedone": 2,
                "done": 1,
                "todo": 1,
                "max": 1
            }
        }
    }
