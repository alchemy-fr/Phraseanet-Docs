Démarrer une tâche
==================

A propos
--------

Démarre une tâche et retourne son statut

.. code-block:: bash

    /api/v1/monitor/task/{task_id}/start/

========================== ======
 Informations
========================== ======
 Méthode HTTP               POST
 Authentification requise   Oui
========================== ======

Paramètres
----------

======================== ============== =============
 Paramètres               Type           Information
======================== ============== =============
 task_id                  entier         L'indentifiant de la tâche séléctionnée
======================== ============== =============

Attribut de la réponse
----------------------

========== ================================
 Attribut   Description
========== ================================
 task       La tâche sélectionnée
========== ================================

Exemple de réponse
------------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "POST /api/v1/monitor/task/2/start/",
            "response_time": "2012-06-13T14:43:00+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "task": {
                "id": 2,
                "name": "Création des sous définitions",
                "state": "started",
                "pid": 15784,
                "title": "Subviews creation",
                "last_exec_time": "2012-06-13T14:42:38+02:00"
            }
        }
    }
