Lister les status d'un document
===============================

A propos
--------

  Retourne la liste des status d'un document

.. code-block:: bash

    /api/v1/records/{databox_id}/{record_id}/status/

  ========================== =====
   Informations
  ========================== =====
   Méthode HTTP               GET
   Authentification requise   Oui
  ========================== =====

Paramètres
----------

  ================ ========= =============================
   Paramètres       Type      Information
  ================ ========= =============================
   databox_id       entier    L'identifiant de la databox auquel appartient le document
   record_id        entier    L'identifiant du document sélectionné
  ================ ========= =============================

Attribut de la réponse
----------------------

  ========== ================================
   Attribut   Description
  ========== ================================
   status     La liste des status du document sélectionné
  ========== ================================

Exemple de réponse
------------------

.. code-block:: javascript

    {
         "meta": {
             "api_version": "1.3",
             "request": "GET /api/v1/records/1/638/status/",
             "response_time": "2012-06-29T16:24:03+02:00",
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
                 "state": false
             },
             {
                 "bit": 5,
                 "state": true
             },
             {
                 "bit": 6,
                 "state": true
             }
             ]
         }
     }
