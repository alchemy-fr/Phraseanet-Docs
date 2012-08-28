Ajouter un document dans Phraseanet
===================================

À propos
--------

  Ajoute un document à Phraseanet.
  Si le fichier ne correspond pas à toutes les contraintes d'installation,
  il va dans la quarantaine.
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

  Dans le cas ou le document à été ajouté avec succés

  ================== ================================
   Attribut           Description
  ================== ================================
   entity             Un code correspondant au succés de l'opération (Le document à été ajouté à Phraseanet => 0 ; Le document est passé en quarantaine => 1)
   url                L'URL de l'item nouvellement créé
  ================== ================================


Exemple de réponse
------------------

  .. code-block:: javascript

    {
        "meta": {
            "api_version": "1.2",
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
