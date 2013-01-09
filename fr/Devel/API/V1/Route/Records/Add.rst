Ajouter un document dans Phraseanet
===================================

A propos
--------

  Ajoute un document à Phraseanet.
  Si le fichier ne correspond pas aux caractéristiques des :doc:services
  des douanes <../../../../Admin/Configuration>, il est placé en quarantaine..
  Ce comportement peut être contourné avec le paramètre optionnel *forceBehavior*

  .. code-block:: bash

    /api/v1/records/add/

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
   file            file        Obligatoire - Le document à ajouter
   base_id         entier      Obligatoire - L'identifiant de la collection de destination
   status          chaîne      Optionnel   - La liste des status sous la forme d'une chaîne binaire sur 64 bits
   forceBehavior   entier      Optionnel   - 0 : Force l'ajout du record ; 1 : Force le passage en quarantine
  =============== =========== =============

Attribut de la réponse
----------------------

  Dans le cas ou le document a été ajouté avec succès

  ================== ================================
   Attribut           Description
  ================== ================================
   entity             Code de retour de l'opération : 0 => Le document a été ajouté à la collection ; 1 => Le document a été placé dans la quarantaine
   url                L'URL de l'item nouvellement créé
  ================== ================================


Exemple de réponse
------------------

  .. code-block:: javascript

    {
        "meta": {
            "api_version": "1.3",
            "request": "POST /api/v1/records/add/",
            "response_time": "2012-06-13T15:59:58+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "entity": 1,
            "url": '/quarantine/item/136/',
        }
    }
