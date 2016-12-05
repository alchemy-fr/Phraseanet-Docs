Index des commandes
===================

About
-----

Liste les commandes de l'utilisateur authentifié.

.. code-block:: bash

    /api/v2/orders/

======================== =====
 Information
======================== =====
 méthode HTTP             GET
 Requires Authentication  Yes
======================== =====

Paramètres
----------

======================== ============== =============
 Paramètres               Type           Information
======================== ============== =============
 page                     integer        numéro de la page courante
 per_page                 integer        nombre de commande par page
 includes                 string         inclusion of sub-data. Currently only 'elements' supported
======================== ============== =============

Champ dans le corps de la réponse
---------------------------------

============= ================================
 Champ         Description
============= ================================
 data          La liste des commandes de l'utilisateur
============= ================================

Exemple de réponse
------------------

.. code-block:: javascript

    {
      "meta": {
        "api_version": "2.0.0",
        "request": "GET /api/v2/orders/",
        "response_time": "2016-12-23T19:43:43+01:00",
        "http_code": 200,
        "error_type": null,
        "error_message": null,
        "error_details": null,
        "charset": "UTF-8"
      },
      "response": {
        "data": [
          {
            "id": 1,
            "owner_id": 1,
            "created": "2016-10-09T14:26:20+01:00",
            "usage": "",
            "deadline": "2016-10-11T00:00:00+01:00"
          },
          {
            "id": 9,
            "owner_id": 1,
            "created": "2016-11-02T17:57:40+01:00",
            "usage": "Pour le rapport annuel de l'entreprise",
            "deadline": "2016-03-02T16:57:29+01:00"
          }
        ],
        "meta": {
          "pagination": {
            "total": 16,
            "count": 2,
            "per_page": 2,
            "current_page": 1,
            "total_pages": 8,
            "links": {
              "next": "/api.php/api/v2/orders/?page=2&per_page=2"
            }
          }
        }
      }
    }
