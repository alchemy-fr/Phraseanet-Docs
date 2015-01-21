Créer un reportage dans phraseanet
==================================

A propos
--------

Créer un reportage dans Phraseanet

.. code-block:: bash

    /api/v1/stories/add/

========================== ======
 Informations
========================== ======
 Méthode HTTP               POST
 Authentification requise   Oui
========================== ======

Paramètres
----------

=============== =========== =============
 Paramètres      Type        Information
=============== =========== =============
 base_id         entier      Obligatoire - L'identifiant de la collection de destination
 title           title       Obligatoire - Le titre du reportage
 records         array       Optionnel   - Un tableau avec les identifiants des records à ajouter
=============== =========== =============

Attribut de la réponse
----------------------

Dans le cas ou le document a été ajouté avec succès

================== ================================
 Attribut           Description
================== ================================
 url                L'URL de l'item nouvellement créé
================== ================================

Exemple de réponse
------------------

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.4.2",
            "request": "POST /api/v1/records/add/",
            "response_time": "2015-01-21T15:59:58+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "url": '/stories/1/136/',
        }
    }
