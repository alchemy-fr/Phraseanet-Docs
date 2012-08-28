Monitorer les tâches de Phraseanet
==================================

À propos
--------

  Returns all informations À propos a task

  .. code-block:: bash

    /api/v1/monitor/task/{task_id}/

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
   task_id                  entier         L'indentifiant de la tâche sélectionnée
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
            "api_version": "1.2",
            "request": "GET /api/v1/monitor/task/2/",
            "response_time": "2012-06-13T14:38:43+02:00",
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
                "pid": 15705,
                "title": "Subviews creation",
                "last_exec_time": "2012-06-13T14:38:38+02:00"
            }
        }
    }

