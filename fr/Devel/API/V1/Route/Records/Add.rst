Ajouter un document dans Phraseanet
===================================

A propos
--------

Ajoute un document à Phraseanet.
Si le fichier ne correspond pas aux caractéristiques des
:doc:`services des douanes <../../../../../Admin/Configuration>`, il est placé
en quarantaine.

Ce comportement peut être contourné avec le paramètre optionnel
**forceBehavior**.

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
 oauth_token     chaîne      Obligatoire - Le jeton d'authentification
 file            file        Obligatoire - Le document à ajouter
 base_id         entier      Obligatoire - L'identifiant de la collection de destination
 status          chaîne      Optionnel   - La liste des status-bits sous la forme d'une chaîne binaire sur 32 bits
                             ex. : "0b10110000": lève les status-bits 7, 5 and 4 ;
                             note. : Les status-bits 3 à 0 sont réservés à Phraseanet et
                             doivent être laissés à 0
 forceBehavior   entier      Optionnel   - 0 : Force l'ajout du record ; 1 : Force le passage du document en quarantine
 nosubdefs       entier      Optionnel - 1 : Empêche la création des sous-définitions pour le document ajouté. Si le document entre en quarantaine, l'attribut **nosubdefs** est perdu
=============== =========== =============

A partir de la version 4.0.8 il est possible d’ajouter un fichier par son URL.

Le paramètre **url** remplace alors le paramètre **file** dans ce contexte.

=============== =========== =============
 Paramètres      Type        Information
=============== =========== =============
 url             chaîne      Obligatoire - L'URL de la ressource à ajouter
=============== =========== =============

Attribut de la réponse
----------------------

Dans le cas ou le document a été ajouté avec succès le code de retour **entity**
indique si le document a été ajouté à la collection ou à la quarantaine.

================== ================================
 Attribut           Description
================== ================================
 entity             Code de retour de l'opération : 0 => Le document ajouté à la collection ; 1 => Le document placé dans la quarantaine
 url                L'URL de l'item nouvellement créé
================== ================================

Exemple de réponse pour un document ajouté à la collection
**********************************************************

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.0",
            "request": "POST /api/v1/records/add/",
            "response_time": "2018-05-14T17:37:24+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "entity": "0",
            "url": "/records/68/148/"
        }
    }

Exemple de réponse pour un document placé en quarantaine
********************************************************

.. code-block:: javascript

    {
        "meta": {
            "api_version": "1.0",
            "request": "POST /api/v1/records/add/",
            "response_time": "2018-05-14T17:47:41+02:00",
            "http_code": 200,
            "error_type": null,
            "error_message": null,
            "error_details": null,
            "charset": "UTF-8"
        },
        "response": {
            "entity": "1",
            "url": "/quarantine/item/512/"
        }
    }


