Lister les tâches
=================

A propos
--------

Retourne la liste de toutes les tâches

.. code-block:: bash

    /api/v1/monitor/tasks/

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
 Attribut   Description
========== ================================
 tasks      La tâche sélectionnée
========== ================================

Exemple de réponse
------------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "GET /api/v1/monitor/tasks/",
            "response_time": "2012-06-13T14:38:11+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "tasks": [
                {
                    "id": 1,
                    "name": "Ecriture des métas-données",
                    "state": "started",
                    "pid": 15707,
                    "title": "newTitle1985032899",
                    "last_exec_time": "2012-06-13T14:38:02+02:00",
                    "auto_start": true,
                    "runner": "scheduler",
                    "crash_counter": 0
                },
                {
                    "id": 2,
                    "name": "Création des sous définitions",
                    "state": "started",
                    "pid": 15705,
                    "title": "Subviews creation",
                    "last_exec_time": "2012-06-13T14:37:38+02:00",
                    "auto_start": true,
                    "runner": "scheduler",
                    "crash_counter": 0
                },
                {
                    "id": 3,
                    "name": "Indexation",
                    "state": "started",
                    "pid": 6576,
                    "title": "Indexation",
                    "last_exec_time": null,
                    "auto_start": true,
                    "runner": "scheduler",
                    "crash_counter": 0
                }
            ]
        }
    }
